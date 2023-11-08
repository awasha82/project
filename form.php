
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Tajawal&display=swap" rel="stylesheet">

 
    <link rel="stylesheet" href="table1FFF.css">
          

    <title>تسجيل البيانات </title>


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
<img  src="images/Logo1.GIF" width="160">
<br>

<font center size="5.5" color="blue" >تقـديم طلـب تجنيـد </font>
<hr>

<fieldset>

<legend><img id='l1' src="images/G1.gif" width="100px"></legend>

<form method="post" action="script.PHP">

        <!--<label>الرقم التلسلسلي </Llabel> <br>
        <input type="text" name="no" id="on" /><br />
-->
<?php 
                                        
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "pro_db";
                                        
            $conn = mysqli_connect($servername,$username,$password,$dbname);

            $show=mysqli_query($conn,"SELECT * FROM courses1")
         ?>
       
        <fieldset  id='d1' >
        <legend>   الدورات المتاحة   </legend>
 <!--   <select id="select1"> -->
        <select  id="select">
        <?php 
        while($row=mysqli_fetch_array($show)){
        ?>
        <option value="" ><?php echo $row['cou_na']; ?> </option>
        <?php
        }
        ?>
        </select>
        
        </fieldset>
        <br>
        
        <label> الرقــم الوطنـي </label><br> 
        <input type="number" name="Id_nu" id=" Id_nu" /><br /><br>
<!------>

        <label> الـجـنـــــــــــس </label><br>
        <select name="M_F" id="select"> 
        <option value="ذكر">ذكر</option>
        <option value="أنثى">أنثى</option>  
        </select> <br /> <br>

  <!-- <input type="text" name="M_F" id="M_F" /><br />
---->
        <label> الإســـم بالكامـل</label><br>
        <input type="text" name="name_full" id="name_full" /><br /><br>

        <label> إسم الأم بالكامـل  </label><br> 
        <input type="text" name="name_m" id="name_m" /><br /><br>

        <label> تاريــــخ الميــلاد </label><br> 
        <input type="date" name="d_birth" id="d_birth" /><br /><br>

        <label>  مـكـــان الـميـــلاد </label><br> 
        <input type="text" name="p_birth" id="p_birth" /><br /><br>
<!----->
        <label>  ما هــي جنسيتــــك </label><br>
        <select name="nation" id="select">
        <option value="ليبي">ليبي</option>
        <option value="غير ذالك">غير ذالك</option>  
        </select> <br /> <br>

   <!--     <input type="text" name="nation" id="nation" /><br />  -->

        <label> مـا هـي ديـانـتــــــك </label><br>
        <select name="religion" id="select">
        <option value="مسلم">مسلم</option>
        <option value="غير ذالك">غير ذالك</option>  
        </select> <br /> <br>

  <!--      <input type="text" name="religion" id="religion" /><br />  -->

        <label> رقم البطاقة الشخصية </label><br> 
        <input type="number" name="n_Id_nu" id=" n_Id_nu" /><br /><br>
<!----->
        <label> رقم جــواز السـفـــر  </label><br>
        <input type="number" name="pass_nu" id=" pass_nu" /><br /><br>
        <label> رقم كتيـــب العاىلــة   </label><br>
        <input type="number" name="F_book" id=" F_book" /><br /><br>
        <label> رقم ورقـــة العائلــة  </label><br>
        <input type="number" name="F_paper" id=" F_paper" /><br /><br>
<!----->

         <label> مكــــان إقامتــــــك </label><br>
         <input type="text" name="address1" id="address1" /><br /><br>

        <label> أقرب نقطـــة دالـــة </label><br>
        <input type="text" name="address2" id="address2" /><br /><br>
                
        <label> حالتــك الإجتماعيـــة </label><br>
        <select name="m_status" id="select">
        <option value="أعزب"> أعزب </option>
        <option value="متزوج"> متزوج </option> 
        <option value="مطلق"> مطلق </option>
        <option value="أرمل"> أرمل </option>
        </select> <br /><br>


  <!--      <input type="text" name="m_status" id="m_status" /><br />  -->


        <label>  مستـواك الدراســي </label><br>
        <select name="education" id="select">
        <option value="بدون مستوى تعليمي"> بدون مستوى تعليمي </option>
        <option value="شهادة إعدادية"> شهادة إعدادية </option> 
        <option value="شهادة ثانوية"> شهادة ثانوية </option>
        <option value="دبلوم متوسط"> دبلوم متوسط </option>
        <option value="دبلوم عالي"> دبلوم عالي </option>
        <option value="شهادة جامعية "> شهادة جامعية </option>
        </select> <br /><br>



<!------>
        <label>أدخل رقم الهاتــف </label><br>
        <input type="tel" name="Ph_nu" id="Ph_nu" /><br /><br>

        <label>البريد الإلكنرونــي</label><br>
        <input type="email" name="E_mail" id="E_mail" /><br /><br>
<!------>
     
        
       <button>موافق</button>
       <button type="reset">إفرغ الخانات</button>

       <br>
       <br>
       
       <p>
        سيتـم الإتصـال بالمتقـدم لتحديـد موعـد المقابلـة الشخصيـة </p>
      
       <p> للمزيد من الاستفسارات الإتصال </p>

       <p> على الرقم 000.0000000 </p>


       <p>   
        <a href="index.php">الرئيسية </a>
        </h2>
        </p>

</center>
</fieldset>
</body>
  
<?php include "footer.php"?>


</html>