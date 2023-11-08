
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="table14.6.css"> 
          
 
    <title> إدارة موقع التجنيد </title>
</head>


<!--الصفحة بالعربي --> 
<body dir="rtl">

<hr>

<br>

<div id='mother'>

<!--<form method="post" action="script3.PHP"> -->

<!-- لوحة التحكم -->
<aside>

<img src='images/Logo1.GIF' width="160" alt='الشعار'>
<h3> الإدارة العامة للتدريب </h3>
<h3>  مكتب التجنيد  </h3>

<br>

<fieldset id='d1'>
<!-- <div id='d1' > -->
        

        <legend>   إضافة دورة جديدة   </legend>
        

        <form method="post" action="script2.PHP">

<!--
        <label> رقم الــدورة  </label> 
        <input type="number" name="" id="" /><br>
        <br>
-->
      
        <label> رقم الموافقة  </label>
        <input type="number" name="approval_nu" id=" approval_nu" /> <br>
        <br>
        

<!---->
        <label> رقم الـدفعة   </label>
        <input type="number" name="G_nu" id="G_nu" />

        <label> لصــالـــــــح </label>
        <input type="text" name="cou_for" id="cou_for" /><br>
        <br>

<!---->
        <label> إسم الـدورة  </label>
        <input type="text" name="cou_na" id=" cou_na" />
       
        <label> مكان الإنعقاد   </label>
        <input type="text" name="cou_plase" id="cou_plase" /><br>

        <br>
<!------>
        

        <label> نوع الدورة </label>
        <input type="text" name="cou_t" id="cou_t" />

        <label> مدة الـدورة  </label>
        <input type="text" name="cou_m" id="cou_m" /><br>
<!------>
        
        <br>

        <label>  تاريخ البداية  </label>
        <input type="date" name="cou_st" id="cou_st" />
<!------>
        <label>  تاريخ النهاية  </label>
        <input type="date" name="cou_end" id="cou_end" /><br>
        <br>
        <button>موافق</button>
        <button type="reset">إفرغ الخانات</button>


 <!--  </div> -->

       </form>
       
       <h3>
        </h3>
        
</fieldset>

 <!-- </div> -->

      
       <h3>
        </h3>
        
<br>
<br>
<br>

<button> <a href="index.php" class="main-btn2" ><span></span> الصفحة الرئيسية </a></button>

<button> <a href="form2.php" class="main-btn2" ><span></span>  إدارة الموقع  </a></button>


</body>
   

</html>
