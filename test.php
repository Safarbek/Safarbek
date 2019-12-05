<?php
session_start();
$notSession = $edit = '';







include('home/class_data.php');
$new = new All();
$conn = $new->mysql_connect('test');
if(isset($_POST['btn'])){
    $com = $_POST['comment'];
    if(isset($_SESSION['name'])){
    if(!empty($com)){
    $insert ="INSERT INTO comment(com) VALUES ('$com')";
    mysqli_query($conn, $insert);
    }
    else{
        $notSession =' Сатрхо холи мебошанд';
    }
}
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $edit1= "UPDATE comment SET com='$edit' WHERE id=''";
    mysqli_query($conn, $edit1);

}
?>


<span style='margin: 10px 20px;'>Фикратро дар бораи  сайт гузоp!</span>
<form action="#" method='post'>
<input class='input' type="text" name='comment' value="<?php echo $edit; ?>" placeholder='Фикри худатонро нависед барои мо'>
<input class = 'btn'type="submit" name ='btn' value="Отправить">
</form>
<span style='margin: 10px 20px; color: red;'> <?php echo $notSession; ?></span>

 <div class='coment' >
<?php


 
   $select = "SELECT *FROM comment";
   $resul = mysqli_query($conn, $select);
   if(mysqli_num_rows($resul) > 0){
     $row = mysqli_fetch_assoc($resul);
         
     if(isset($_SESSION['name'])){
                $pas = $_SESSION['pas'];
                $b = "SELECT *FROM comment WHERE pas='$pas'";
                $res = mysqli_query($conn, $b);
                if(mysqli_num_rows($res) > 0){
                while($rows = mysqli_fetch_assoc($res)){
                    echo $row['name'];
                    echo "<div class='
                    raz'><div class='com'> ".$rows['com'];
               echo $a = "<a href='test.php?id=2'>Редактировать</a> <br></div></div>";
                }
            }
      
       }
      
   }

   

   $select = "SELECT *FROM comment ORDER BY  RAND() LIMIT 2";
   $resul = mysqli_query($conn, $select);
   if(mysqli_num_rows($resul) > 0){
     
     while($row = mysqli_fetch_array($resul)){
        echo $row['id'].'<br>';
     }
   }

         
?>
