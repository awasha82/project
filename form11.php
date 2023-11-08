    
       <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Tajawal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="tableFF33.css">  
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

<h3>تدقيق و مراجعة </h3>

<h3>  ( القيود الجنائية - القيود الأمنية - الرقم الوطني ) </h3>


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
                         
                        <i class="fas fa-edit"></i>
                        </div>
                        <div class="info">

                   <label> الرقم الوطني </label>
                   <input type="number" name="pro_id"  class="id" value="<?php echo $row['Id_nu'] ?>"/><br><br>
            
                   <label> الإسم بالكامل  </label>
                   <input type="text" name="name_full" value="<?php echo $row['name_full'] ?>"/><br><br>
                   <label> إســـــم الأم </label>
                   <input type="text" name="name_m" value="<?php echo $row['name_m'] ?>"/><br><br>
                   <label> تاريخ الميلاد </label>
                   <input type="date" name="d_birth" value="<?php echo $row['d_birth'] ?>"/><br><br>
                   <label> مكان الميلاد </label>
                   <input type="text" name="p_birth" value="<?php echo $row['p_birth'] ?>"/><br><br>
                   <label> الـجـنـــــس </label>
                   <input type="text" name="M_F" value="<?php echo $row['M_F'] ?>"/><br><br>
                   <label> الـجنسيــــة </label>
                   <input type="text" name="nation" value="<?php echo $row['nation'] ?>"/><br><br>
                
                   <label> الـديـانــــة </label>
                   <input type="text" name="nation" value="<?php echo $row['religion'] ?>"/><br><br>

                   
                   <label> رقم الهاتــف </label>
                     <input type="tel" name="Ph_nu" value="<?php echo $row['Ph_nu'] ?>"/><br><br>

                   

                  

            
                    </div>
                </div>


             <div class="card">
             <div class="icon">

                 <i class="fas fa-edit"></i> 
                </div>
                <div class="info">
                   

                    <label> رقم البطاقة الشخصية </label> 
                   <input type="number" name="n_Id_nu" value="<?php echo $row['n_Id_nu'] ?>"/><br><br>

                   <label> رقـم جـواز السفــــر  </label>
                  <input type="number" name="pass_nu" value="<?php echo $row['pass_nu'] ?>"/><br><br>

                  <label>رقـم كتيــب العاىلــة </label>
                  <input type="number" name="F_book" value="<?php echo $row['F_book'] ?>"/><br><br>
        
                   <label>رقم ورقـة العائلـــة  </label>
                  <input type="number" name="F_paper" value="<?php echo $row['F_paper'] ?>"/><br><br>

                  
                    <label>مكـــــان الإقامـــــة </label>
                    <input type="text" name="address1"  value="<?php echo $row['address1'] ?>"/><br><br>

                     <label>أقرب نقطـــة دالــــة </label>
                     <input type="text" name="address2" value="<?php echo $row['address2'] ?>"/><br><br>

                    <label>المستــوى الدراســــي</label>
                    <input type="text" name="education" value="<?php echo $row['education'] ?>"/><br><br>

                    <label> الحالــة الإجتماعيــــة </label>
                    <input type="text" name="m_status" value="<?php echo $row['m_status'] ?>"/><br><br>
                
                                        
                     <label>البـريــد الإلكنرونـــي</label>
                     <input type="email" name="E_mail" value="<?php echo $row['E_mail'] ?>"/><br><br>
            </div>
        </div>

                           
        <div class="card1">
             <div class="icon">

                 <i class="fas fa-edit"></i> 
                </div>
                <div class="info">
                   

                
     <!--            <fieldset id='d1'> -->
                <fieldset  id='d2'>
                <legend id='d3' >  الموانع   </legend>
                <br>
                
                <input type="checkbox" name="id1"  class="id1" value="check1"> لديــه قيــــود أمنيـــــة </input> <br><br>
                <input type="checkbox" name="id1"  class="id1" value="check2"> لدـــه قيــــود جنائيــ،ـة </input><br> <br>
                <input type="checkbox" name="id1"  class="id1" value="check3"> خطـأ في الرقم الوطني </input><br> <br>
                <input type="checkbox" name="id1"  class="id1" value="check3"> الســــن القانونـــــــــي </input><br> <br>

            
                </fieldset>
                <br>


                <fieldset id='d2'>
                               <br>
                               
                <a href="form11.php" class="main-btn" ><span></span> حــفــــــظ </a> <br><br> 
                <a href="form11.php" class="main-btn" ><span></span> خـــــــروج </a> <br><br> 

                <a href="form2.php" class="main-btn" ><span></span> إدارة الموقـع </a><br><br>
                <a href="index.php" class="main-btn2" ><span></span> الصفحة الرئيسية </a><br><br>

              

                </fieldset>


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