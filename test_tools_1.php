<?php
// 身分證字號驗證
//規則 參閱 wiki : https://zh.wikipedia.org/wiki/%E4%B8%AD%E8%8F%AF%E6%B0%91%E5%9C%8B%E5%9C%8B%E6%B0%91%E8%BA%AB%E5%88%86%E8%AD%89
function isTWId($id) : bool{
    //boolean 是物件型別 不是基本型別
    // bool 是基本型別
//使用 “正規表示法”
// /^[A-Z][12][0-9]{8}$/
// 使用現成function preg_match
//php.net: https://www.php.net/manual/en/function.preg-match.php
// wiki  : https://zh.wikipedia.org/wiki/%E6%AD%A3%E5%88%99%E8%A1%A8%E8%BE%BE%E5%BC%8F
    // $ 為結尾 後面不能帶其他條件
    $ret = false ; 
    /* 簡易驗證
    1. 字串長度
    2. 首碼英文
    3. 首數為 1/2
    4. 後9碼 0-9
    */
    if (preg_match("/^[A-Z][12][0-9]{8}$/",$id)){
        $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
        $c1 = substr($id, 0, 1);  //A
        $n12 = strpos($letters, $c1) + 10;
        //echo $n12;
        $n1 = (int)($n12/10);
        $n2 = $n12%10 ;
        $n3 = substr($id, 1, 1); //
        $n4 = substr($id, 2, 1); //
        $n5 = substr($id, 3, 1); //
        $n6 = substr($id, 4, 1); //
        $n7 = substr($id, 5, 1); //
        $n8 = substr($id, 6, 1); //
        $n9 = substr($id, 7, 1); //
        $n10 = substr($id, 8, 1); //
        $n11 = substr($id, 9, 1); //


        $sum = $n1 * 1 + $n2 *9 + $n3 * 8 + $n4 * 7 + $n5 * 6 + $n6 * 5 + 
        $n7 * 4 + $n8 *3 + $n9 * 2 + $n10 * 1 + $n11 *1 ;
        $ret = $sum % 10 == 0;

        //$ret = true ;
    }
        return $ret;
}


// 身分證字號生產器
function createTWId($isMale = true) : string{
    $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
    $id = substr($letters, rand(0,25),1);
    $id .= $isMale?'1':'2';
    for ( $i=0 ; $i <7 ; $i++ ) $id .= rand(0,9);
    for ( $i =0 ; $i <= 9 ; $i++ ){
        if (isTWId($id . $i)){
            $id .= $i ;
            break;
        }
    }
    return $id ;

}

class Student {
    private $ch, $eng, $math;
    //提供給外面調用的 function 加 public
    public function __construct($ch, $eng, $math){
        $this ->ch =$ch;
        $this ->eng =$eng;
        $this ->math =$math;
    }
    public function sum(){
        return $this ->ch + $this ->eng + $this ->math ;
    }
    public function avg(){
        return $this ->sum()/3;
    }
    public function setCh($newCh){$this ->ch = $newch ;}
}



?>