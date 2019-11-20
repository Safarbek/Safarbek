<!DOCTYPE html>
<html lang="en">
<head> 
    <link rel="stylesheet" type='text/css' href="styl.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <title>WebMaster</title>
</head>
<body>
    <header>
        <a href="#" class='safar'>Safarbek</a>
        <div class='manu-tog'></div>
        <nav>
            <ul>
               
                <li><a href="#" class='activ' >Home</a> </li>
                <li><a href="#"> Services</a> </li>
                <li><a href="#"> About</a> </li>
                <li> <a href="#"> Contact</a> </li>
                <li> <a href="index.html" class='sing' name='sing'> Выход</a> </li>
               
            </ul>
        </nav>
          <div class='clear'></div>
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

<?php



?>


</body>
</html>











<style>

/* Первая страница */ 

body{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    background-image: url('https://sun9-39.userapi.com/c853424/v853424820/68991/Dy1KlvB6ekw.jpg');
    background-repeat: no-repeat;
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%;
}

header{
    position: relative;
    max-width: 1200px;
    margin: 20px auto;
    padding: 10px;
    background: rgba(222, 226, 230, 0.822);
    box-sizing: border-box;
    border-radius: 5px;
    box-sizing: 0 2px 5px rgba(0,0,0, .2);
}

.safar{
    color: #069370;
    height: 60px;
    font-size:  40px;
    line-height: 60px;
    padding: 0 20px;
    text-align: center;
    box-sizing: border-box;
    float: left;
    font-weight: 600;
    text-decoration: none;

}
nav{
    float: right;
}

.clear{
    clear: both;
}
nav ul{
    margin: 0;
    padding: 0;
    display: flex;

}
nav ul li{
    list-style: none;
}

.sing{
    margin-left:  45px;
    display: block;
}

nav ul li a{
    text-decoration:red ;
    display: block;
    margin: 10px 0;
    padding:  10px 15px;
    color: #262626;
}



nav ul li a:hover,
nav ul li a.activ{
    background: #069370;
    color: #fff;
    transition: 0.5s;

}

@media (max-width: 1200px){
    header{
        margin: 20px;
    }
}


@media (max-width: 768px){
    body{
        background: lightblue;
    }
    .manu-tog{
      display: block;
      width: 40px;
      height: 40px;
      margin: 10px;
      background: #fff;
      float: right;
      cursor: pointer;
      text-align: center;
      font-size: 30px;
      color: #069370

    }
    .manu-tog:before{
       content: '\f0c9';
       font-family: fontAwesome;
       line-height: 40px;
    }
    .manu-tog.activ:before{
        content: '\f00d';
        
     }
    nav{
        display: none;
    }
    nav.activ{
        display: block;
        width: 100%;

    }
    nav.activ ul{
        display: block;
    }
    .sing{
        
        margin: 0;
    }
    }





</style>