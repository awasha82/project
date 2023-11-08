<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Tajawal&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="table10.5.css">

    <style>
   body{
        
        padding: 0;
        margin:0;
        background-color:whitesmoke;
        font-family: 'Almarai', sans-serif;
        font-family: 'Poppins', sans-serif;
        font-family: 'Tajawal', sans-serif;
       
        }
        *{
            margin: 0;
        }

        #img1{
            width:100%;
            height:100%;
            position:fixed;
            z-index:-1;
            opacity: 20%;
            right: 0px;


        }


</style>

    <title>  نافدة مرور لإدارة الموقع  </title>

    
</head>


<!--
    <script>
        window.addEventListener('mouseup', function (event){
            var box = document.getElementById ('menu');
            if (event.target !=box){
            box.style.width='0px';
            }
        })
     </script>

    -->

          <header >

           </header>




           <section class="main" >
           <img src="1.1.jpg" alt="photo" id="img1" draggable="false" >
           

           <body dir="rtl">
           <center>
           

            <script src="script.js"></script>
       
            <br>
            <br>

            <form >
            <img src="images/u2.gif" alt="User"  id="img2" alt="logo" while="110" height="145" margin=10px;>
            <h2> تسجيل الدخول لإدارة الموقع </h2>
            
            
            <input type="text" placeholder="أسم المستخدم">
            <input type="password" placeholder="أدخل كلمة المرور">

             <!-- <button> <a href="form1.php" class="main-btn" ><span></span> البحث والتعديل </a></button> -->


              <!--<button> <a href="form2.php" class="main-btn" ><span></span> البحث والتعديل </a></button> -->

             <!-- <button> <a href="form2.php" class="main-btn" ><span></span> الصفحة الرئيسية </a></button> -->


            <button type="button" value="login"><a href="form2.php" >دخول </a></button> 

            <!-- <input type="button" value="login"> -->

            <p> هل نسيت كلمت المرور ؟ </p>
            <br>
            <br>
            <br>

            <a href="index.php">عودة للصفحة الرئيسية</a>

 </form>
 <div>

</section> 

</body>
<?php include "footer.php"?>

</html>