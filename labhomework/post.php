<?php
   $fullnamevalue =$_POST['fullname'] ;
   $emailvalue    =$_POST['eposta'];
   $gendervalue   =$_POST['gender'];

if(isset($_POST['fullname'])){
    if (empty($_POST['fullname'])){
        echo "Lütfen bir ad soyad giriniz!";
    }elseif (empty($_POST['eposta'])){
        echo "Lütfen bir e posta giriniz!";
    } else{
        echo "Form başarılı";
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }
}

?>