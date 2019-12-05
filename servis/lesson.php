<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" type='text/css' href="style.css">
    <title>Дарасхо</title>
</head>
<body>
<header>
<a herf='#' class='lesson'>Дарсхо</a>
<div class='manu-tog'></div>
<nav>
   
        <ul>
            <li><a href='../home/index.php' class='activ'> Сахифаи асли</a></li>
            <li><a href='math/math.php'> Математика  </a></li>
            <li><a href='#'> Забони Англиси </a></li>
            <li><a href='#'> Забони Русси </a></li>
            <li><a href='#'> Онлайн Тест  </a></li>
        </ul>
        
</nav>
<div class='fornav'><div>
</header>
<script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
<script type='text/javascript'>

//Навигатор бар барои приложения
$(document).ready(function(){
    $('.manu-tog').click(function(){
        $('.manu-tog').toggleClass('activ')
        $('nav').toggleClass('activ')

    })

})
</script>   

<div class='about'>
<div class='dar'> 
<h1 style='text-align: center; font-size: 70px;'>Дарсхо</h1>
<p>Омузиши илму дониш ин мухимтарин ва вазифаи хар фард мебошад </p>
<p>Дар ин сахифа мо дарсхо, тестхо ва хар он чизеки дар бораи дарс анчом додаем аз ин сахифа шумо метавонед истифода баред.
Умедворем ки аз дарсхои тайёркардаи мо халоват баред. Мувафакият! ба шумо барои илм омузи аз сайти ДарсХона </p>

<div ><h1>Аз мо дарёб</h1></div>
<div class='darmo'>
<div class='dar'>
            <div class='kub 'style=' margin-top: 0;'><a href='math/math.php'><h4>Математика </h4>Омузиш аз аввал то математикаи оли бо формулахо ва тарзи кори мисолхо ва онлайн </a></div>
            <div class='kub'style=' margin-top: 0;'><a href='../'><h4>Забони Англис</h4>Лугат ва чумлахои забони русси бо тарчумаи точики ва талфуззи дурусти калима хо</a></div>
            <div class='kub 'style=' margin-top: 0;'><a href='../'><h4>Забони русси </h4>Лугат ва чумлахои забони русси бо тарчумаи точики ва талфуззи дурусти калима хо</a></div>
            </div>          
           
</div> 
<?php

include ('../home/class_data.php');
$notSession = '';
if(isset($_POST['btn1'])){
 $com = $_POST['coment'];

 if(isset($_SESSION['name'])){
     if(!empty($com)){
    $conn = new All();
    $conn = $conn-> mysql_connect('test');
    $insert = "INSERT INTO comment(com) VALUES('$com')";
    mysqli_query($conn, $insert);
    }else{
    $notSession = "Шумо ягон чиз нанавистаед!";
}
    
}
else{
        $notSession = "Барои фикр гузори шумо бояд ба сайт обуна шавед";
    }
} 

?>

</div>
<div style='text-align: left; font-size: 20px;' class='coment'>
<span style='margin: 10px 20px;'>Фикратро дар бораи  дарсо навис!</span>
<form  method="post">
<input class='input' type="text" name='coment' placeholder='Фикрро навис '>
<input class = 'btn'type="submit" name ='btn1' value="Отправить">
</form>
<span style='margin: 10px 20px;font-size: 20px; color: red'><?php echo $notSession; ?></span>
</diV>

<div class='clear' ></div>


</div>
</body>
</html>

<style>

</style>