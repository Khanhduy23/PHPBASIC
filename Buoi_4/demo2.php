<?php
    echo"<table border='2'>";
    echo"<tr>";
    for($i=2;$i<10;$i++){
        echo"<td>";
        echo "Bảng cửu chương". $i;echo"<br>";
        for($j=1;$j<=10;$j++){
            echo $i.'x'.$j.'='.($i*$j).'<br>';
        }
        echo"</td>";
    }
    echo"</tr>";
    echo"</table>";
    /*
    Vòng lặp while
    cú pháp:
    while(điều kiện){
        khối code lặp khi điều kiện đúng
    }
    Vòng lặp 
            do{
                Khối code thực hiện lặp
            }
            while()
 */     
        $i=0;
        // while($i<=10){
        //     echo $i;
        //     $i++;
        // }
        do{
            echo $i;
            $i++;
        }while($i<=20);
?>

