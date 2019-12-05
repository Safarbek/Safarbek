<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="math1.css">

    <title>Математика</title>
</head>
<body>
<header>
<a herf='#' class='lesson'>Математика</a>
<div class='manu-tog'></div>
<nav>
   
        <ul>
            <li><a href='../home/index.php' class='activ'> Сахифаи асли</a></li>
            <li><a href='math/math.php'>Дарсхо</a></li>
            <li><a href='#'> Математика онлайн </a></li>
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
<form action="" method='post'>
    <input type="submit" name='dars' value="Дарс">
</form>

<!-- Дар бораи дарсхо сар кардан аз инчо -->
<?php if(isset($_POST['dars'])){ ?>
<div class='content'>
<div class='mavzuho'>
    <ul>
       <li><a href='#'>Ададхо </a></li>
       <li><a href='#'>Разрядхо</a></li>
       <li><a href='#'>Амали аввал</a></li>
       <li><a href='#'>Чам тарх такси зарб</a></li>
       <li><a href='#'>Касрхо </a></li>
       <li><a href='#'>Муодилахо</a></li>
       <li><a href='#'>Муодилаи квадрати</a></li>
       <li><a href='#'>Фоиз</a></li>
    </ul>
</div>
<div class='aboutlasson'>
    <!-- АДАДХо дар математика -->
    <h1>Ададхо</h1>
<div class='adad'>
<div class='pp'>
    <p>Адад чист?</p>
Агар бо забони оди гирем ракам ин як чанд микдори ашёхо мебошад
 <br>
Харруз мо аддахоро истифода мекунем гар чанде ки дар зехнамон намерасад ,<br>  Дар замони пеш хангомеки одамхо ба хисоб омузи сар карда будан
шумораи ашёхоро бо ягон чубча , санг ё дигар чизхо хисоб мекарданд. 
 
<br>
<img src="../../home/img/adad.jpg"  width ='1000px' height='200px' alt=""> </div>
</div>
<div class='razryad'></div>
<div class="amal1"></div>
<div class="plus"></div>
<div class="drob"></div>
<div class="mupdila"></div>
<div class="prasent"></div>
</div>
<div>
<?php } ?>
</body>
</html>

<style>

body{
    margin: 0;
    padding: 0;
}


/* Асли навигешин бар */
header{
        position: sticky;
        margin: auto;
        background: linear-gradient(to right, rgba(219, 228, 243, 0.733), rgba(206, 226, 238, 0.897));
        box-shadow: 2px;
        box-shadow: 0px 2px 3px 2px black;
        padding: 10px  10px;
        max-width:auto;
        border-radius: 5px;
    }
    nav{
        float: right;
    }
    nav ul{
        list-style: none;
        display: flex;
    }

    nav ul li{
        list-style: none;
        padding: 0 10px;
    }
    nav ul li a{
        text-decoration: none;
        margin: 0 5px;
        color: black;
        float: left;
        font-size: 20px;
        padding: 15px 0;
    }
    
    nav ul li a:hover{
        color:red;
        font-size: 22px;
        transition: 0.5s;
    }
    .lesson{
        width: 250px;
        font-size: 50px;
        font-family: monospace;;
        color: rgba(4, 7, 1, 0.774);
        float: left;
        text-decoration: none;
        padding: 15px 0;
        margin-left: 20px;
        color: black;
        
    }
    .fornav{
        clear: both;
    }






    /* Дарсхо сар шудан */

.content{
    margin: auto; 
    border: 1px solid red;
    display: flex;
  
}
.content .mavzuho {
    
    padding: 10px;
    height: auto;
    
    
}
.content .mavzuho ul{
    margin: 0;
    padding: 0;
}
.content .mavzuho ul li {
    margin:  5px 0;
    list-style: none;
    padding: 10px 4px;
    border: 0.5px solid rgb(200, 208, 233);
    border-radius: 4px;
    max-width: 300px;
}
.content .mavzuho ul li  a{
    color: black;
    text-decoration: none;
    font-size: 19px;
    padding-right: 100px

}


/* Диви дар бораи мавзухо бо тахлилхояш */
.aboutlasson {
  text-align: center;
border: 1px black solid;
margin: 10px 0;
max-width: ;
background-color: lightyellow;
margin-left: 50px;

}
.aboutlasson .adad{
    overflow: 
    margin:  30px 60px 60px 60px;
    padding: 20px;
    font-size: 20px;
    border: 2px red solid;
    
}
.aboutlasson .adad .pp {
    font-size: 30px;

}

    @media (max-width: 1300px){

        header{
            margin: auto;
        }
    }
    @media (max-width: 850px){

        body{
           
        }
        .manu-tog{
            display: block;
            width: 40px;
            height: 40px;
            margin:  10px 10px 10px 0;
            margin-top: 25px;
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
            text-align: center;
            display: none;
        }
        nav.activ{
            display: block;
            width: 100%;
        }
        nav ul{
            
            float: left;
            display: block;
        }
    
        nav ul li a{
            text-align: center;
            display: block;
            float: left;
          
        }
        
        header{
            padding: 0;
        }
        .lesson{
            font-size: 40px;
            
        }
        .about{
            margin: 0 30px;
        }
        .content{
            display: block;
        }
        .content .mavzuho {
          
    }
    .content .mavzuho ul li{
        max-width: none;
    }

    }
</style>