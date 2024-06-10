<?php
//Kiểm tra số nguyên tố
function kiemTraSoNguyenTo($n){
    if($n<=1){
        return false;
    }
    for($i=2;$i<=sqrt($n);$i++){
        if($n%$i==0){
            return false;
        }
    }
    return true;
}
    //Kiểm tra các số từ 2 - 15
    for($i= 2; $i<=15;$i++){
        if(kiemTraSoNguyenTo($i)){
            echo $i ." ". 'là số nguyên tố <br>';
        }
        else{
            echo $i ." ". 'không phải là số nguyên tố <br>';
        }
    }

?>