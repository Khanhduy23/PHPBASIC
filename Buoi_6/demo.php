<?php 
    //Cách 1 
    $sv = array('lâm','long','hồng','cúc');
    var_dump($sv);
    echo '<br>';
    echo $sv[0];

    echo '<br>';
    //Cách 2 tạo mảng số
    $car = ['toyota','honda','mercedes','audi'];
    var_dump($car);

    //Cách 3
    echo '<br>';
    $pet[0] = 'dog';
    $pet[1] = 'cat';
    $pet[2] = 'bird';
    var_dump($pet);

    //Tạo mảng liên kết
    $sv_info = [
        'name'=>'Long',
        'year'=>18,
        'id'=>'ps1234',
        'class'=>'WD2021',
        'phone'=>'09090000',
        'email'=>'acb#fpt.edu.vn'
    ];
    echo '<br>';
    var_dump($sv_info);
    echo '<br>';

    echo $sv_info ['name'];
    echo '<br>';
    
    foreach ($sv_info as $key => $value) {
        echo $key. ':' .$value. '<br>';
    }
    
    $num =[1,2,3,4,5,6];
    for($i=0;$i<sizeof($num);$i++){
        echo $num[$i];
        echo '<br>';
    }

    echo '<br>';
    $sp_all = [
        ['id'=>'001','name'=>'ip15_pro','gia'=>'1000usd','hinh'=>'hinh1.jpg'],
        ['id'=>'002','name'=>'ip14_pro','gia'=>'900usd','hinh'=>'hinh1.jpg'],
        ['id'=>'003','name'=>'ip13_pro','gia'=>'800usd','hinh'=>'hinh1.jpg'],
        ['id'=>'004','name'=>'ip12_pro','gia'=>'700usd','hinh'=>'hinh1.jpg'],
    ];
    // echo $sp_all[0]['name'];
    // array_splice($sp_all,2,1);
    unset($sp_all);
    var_dump($sp_all);
?>