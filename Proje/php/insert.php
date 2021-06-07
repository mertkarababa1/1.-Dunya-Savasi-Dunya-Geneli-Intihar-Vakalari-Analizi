<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veri Tanımlama</title>
    <link rel="stylesheet" href="../css/php02.css">
</head>
<body>
<header> 
     <nav id="nav">

<h1><a href="mertkarababa.html" >Mert<span>Karababa</span></a></h1>

        <ul class="nav-area">
        <a href="http://127.0.0.1:5500/anasayfa.html" target="_self">Anasayfa</a>
        </ul>

</nav>
<h2>Başka Vei Eklemek İstiyor Musunuz ?</h2>    
            <button  class="btn">
            <a href="http://localhost:3000/projects/php/veri_aktar.php" target="_self">EVET</a>   
            </button>
            <button  class="btn">
            <a href="http://127.0.0.1:5500/anasayfa.html" target="_self">HAYIR</a>   
            </button>
    
</body>
</html>




<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "veri_setleri";

$conn = mysqli_connect($server , $username , $password , $dbname);

if(isset($_POST['submit'])){
    
    if(!empty($_POST['yil']) && !empty($_POST['yas']) && !empty($_POST['gdp']) && !empty($_POST['CLASS'])){

        $yil = $_POST['yil'];
        $yas = $_POST['yas'];
        $gdp = $_POST['gdp'];
        $CLASS = $_POST['CLASS'];

        $query = "insert into insert01(yil,yas,gdp,CLASS) values('$yil' , '$yas' , '$gdp' , '$CLASS')" ;
        $run = mysqli_query($conn,$query) or die(mysqli_error($conn));

        if($run){
          echo "<br>\n VERİ TABANINA BAŞARIYLA AKTARILDI";
        }
        else{
            echo "HATALI !";
        }

    }
        else{
        echo "PHPMYADMİNE BAĞLANAMADI... HATALI !";
    }
}


?>