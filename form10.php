    
       <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Tajawal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="tableFF4.css">  
    <title> البحث والتعديل</title>

    <style>
        body{
            background-color:whitesmoke;
            font-family: 'Almarai', sans-serif;
            font-family: 'Poppins', sans-serif;
            font-family: 'Tajawal', sans-serif;
        }
    </style>
</head>

<!--الصفحة بالعربي -->
<body dir="rtl">


<hr>
<center>
<br>
<img src="images/Logo1.GIF" width="120">
<h3> قرار تعيين </h3>



<fieldset>

<!-- <legend><img src="images/G1.gif" width="100px"></legend> -->
<br>
<form action="" method="POST">
       
      <input type="text" name="id" placeholder="أدخل الرقم الوطني هنا للبحث"/> 


        <button name="search" class="main-btn2" ><span></span> بحث </button> <br> <br>
        

    </form>
    

    </fieldset>


       





<?php

        $conn = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($conn,'pro_db');

        if(isset($_POST['search']))
        {
            $id = $_POST['id'];

            $query = "SELECT * FROM pro_data WHERE Id_nu='$id'";
            $query_run = mysqli_query($conn,$query);

            while($row = mysqli_fetch_array($query_run))
            {
                ?>


   
<div class="logo_1"> 
            </div>
    </section>

 <!--   <section class="cards" id="services"> -->

    <form action="" method="POST">
        
               <!--    <label> الرقم الوطني </label>
                   <input type="number" name="pro_id" value="<?php// echo $row['pro_id'] ?>"/> -->


            
                   <div class="content">
               
    

                <div class="card">
                <div class="icon">
                <fieldset  id='d2'>
               
               </fieldset>
               <br>
                         
                        <i class="fas fa-edit"></i>
                        </div>
                        <div class="info">

                   <label> الرقم الوطنـي </label>
                   <input type="number" name="pro_id"  class="id" value="<?php echo $row['Id_nu'] ?>"/>
            
                   <label> الإسم بالكامــل  </label>
                   <input type="text" name="name_full"  class="id" value="<?php echo $row['name_full'] ?>"/><br><br>

                   <label> رقم قرار تعيين </label>
                   <input type="text" name="name_full" value=""/>

                   <label> تاريـخ صدوره </label>
                   <input type="text" name="name_full" value=""/><br><br>

                   <label> الــرتــبـــــــة </label>
                   <input type="text" name="name_full" value=""/>


                   <label> جهــة الــعمــل </label>
                   <input type="text" name="name_full" value=""/><br><br>

                 

                   <br><br>

                   <fieldset  id='d2'>

                <br>
                 <a href="form8.php" class="main-btn" ><span></span> حــفــظ </a>  
                <a href="form8.php" class="main-btn" ><span></span> خـــروج </a>  

                <a href="form2.php" class="main-btn" ><span></span> إدارة الموقـع </a>
                <a href="index.php" class="main-btn" ><span></span> الصفحة الرئيسية </a>

                <br><br>

               </fieldset>
               <br>
               

               
            
                    </div>
                </div>



                           
       
</div>    


    </div>    

        <?php
            }
        }

        ?>









</body>
  
<?php include "footer.php"?>


</html>