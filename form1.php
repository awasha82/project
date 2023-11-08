
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="table13.css"> 
          
 
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
<br>
<br>
<br>


<fieldset id='d1'>
<!-- <div id='d1' > -->
        

        <legend > البحــــث  </legend>

<legend>  أدخل الرقم الوطني    </legend>
<input type="number" name="" id="" /><br />
        
<!------------------------->

<form method="post" action="script.PHP">

        <!--<label>الرقم التلسلسلي </Llabel> <br>
        <input type="text" name="no" id="on" /><br />
-->
        <br>
        <label> أســم الـدورة  </label> <br>
        <input type="number" name="" id="" /><br />

        
        <label> الرقــم الوطنـي </label> <br>
        <input type="number" name="Id_nu" id=" Id_nu1" /><br />
<!------>
        <label> الجنــس </label> <br>
        <input type="text" name="M_F" id="M_F1" /><br />
<!------>
        <label> الإســـم بالكامل</label> <br>
        <input type="text" name="name_full" id="name_full1" /><br />

        <label> إسم الأم بالكامل  </label> <br>
        <input type="text" name="name_m" id="name_m" /><br />

        <label> تاريخ الميلاد </label> <br>
        <input type="date" name="d_birth" id="d_birth" /><br />

        <label>  مكان الميلاد </label> <br>
        <input type="text" name="p_birth" id="p_birth" /><br />
<!----->
        <label>  ما هـي جنسيتــك: </label> <br>
        <input type="text" name="nation" id="nation" /><br />

        <label> ما هي ديانتــك </label> <br>
        <input type="text" name="religion" id="religion" /><br />

        <label> رقم البطاقة الشخصية </label> <br>
        <input type="number" name="n_Id_nu" id=" n_Id_nu" /><br />
<!----->
        <label> رقم جواز السفر  </label> <br>
        <input type="number" name="pass_nu" id=" pass_nu" /><br />
        <label> رقم كتيب العاىلة   </label> <br>
        <input type="number" name="F_book" id=" F_book" /><br />
        <label> رقم ورقة العائلة  </label> <br>
        <input type="number" name="F_paper" id=" F_paper" /><br />
<!----->

         <label> مكانك الإقامة </label> <br>
         <input type="text" name="address1" id="address1" /><br />

        <label> أقرب نقطة دالة  </label> <br>
        <input type="text" name="address2" id="address2" /><br />
                
        <label>ما هي حالتك الإجتماعية </label> <br>
        <input type="text" name="m_status" id="m_status" /><br />


        <label> ما هو مستواك الدراسي </label> <br>
        <input type="text" name="education" id="education" /><br />

<!------>
        <label> رقم الهاتف </label> <br>
        <input type="tel" name="Ph_nu" id="Ph_nu" /><br />

        <label>البريد الإلكنروني</label> <br>
        <input type="email" name="E_mail" id="E_mail" /><br />
<!------>
     

        <br>
       <button>موافق</button>
       <button type="reset">إفرغ الخانات</button>

 <!-- </div> -->


       
       <h3>
        </h3>
</fieldset>
 

<fieldset id='d2'>

</fieldset>
 

<button> <a href="index.php" class="main-btn2" ><span></span> الصفحة الرئيسية </a></button>
<br>
<button> <a href="form2.php" class="main-btn2" ><span></span>  إدارة الموقع  </a></button>



      </div>

     
     </aside>

  <!-- عرض البيانات -->
  <main>
          <table id="tbl"     cellpadding="10">
                <br>
                
                <caption>
                        قائمة بإسماء الراغبين في التجنيد الذين أدخلو بياناتهم من مختلف مدن ليبيا ( عبر الموقع )   
                         
                </caption>
                <thead>   
              <tbody>

             
             
                      <!--  <th> ت </th> -->
                        <th> الرقـم الوطني</th>
                        <th> الجنـــس </th>
                        <th> الإسم بالكامل</th>
                     <!--   <th> إسم الأم </th> -->
                        <th> تاريخ الميلاد</th>
                        <th> مكان الميلاد</th>
                     <!--   <th> الجنسية</th>  -->
                     <!--   <th> الديانة</th>  -->
                        <th> رقم البطاقة الشخصية</th>
                        <th> رقم جواز السفر </th>
                      <!--  <th> رقم كتيب العائلة </th> -->
                      <!--  <th> رقم ورقة العائلة </th> -->
                        <th> مكان الإقامة </th>
                      <!--  <th> أقرب نقطة دالة </th> -->
                      <!--  <th> الحالة الإجتماعية </th> -->
                        <th> المستوى التعليمي </th>
                        <th> رقم الهاتف </th>
                        <th> البريد الإلكتروني </th>
                 
                </tbody>
             
                </thead> 
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "pro_db";
                
                $conn = mysqli_connect($servername,$username,$password,$dbname);
                $res =  mysqli_query($conn,"select * from pro_data");

                while ( $row = mysqli_fetch_array($res)){
                  
                        echo "<tr>";
                      //  echo "<td>".$row['no']."</td>";
                        echo "<td  width=200>".$row['Id_nu']."</td>";
                        echo "<td  width=18>".$row['M_F']."</td>";
                        echo "<td  width=550>".$row['name_full']."</td>";
                       // echo "<td>".$row['name_m']."</td>";
                        echo "<td width=330> ".$row['d_birth']."</td>";
                        echo "<td width=300> ".$row['p_birth']."</td>";
                       // echo "<td width=40>".$row['nation']."</td>";
                       // echo "<td>".$row['religion']."</td>";
                        echo "<td width=70>".$row['n_Id_nu']."</td>";
                        echo "<td  width=93>".$row['pass_nu']."</td>";
                       // echo "<td  width=93>".$row['F_book']."</td>";
                       // echo "<td  width=93>".$row['F_paper']."</td>";
                        echo "<td  width=93>".$row['address1']."</td>";
                        //echo "<td  width=93>".$row['address2']."</td>";
                       // echo "<td  width=93>".$row['m_status']."</td>";
                        echo "<td  width=93>".$row['education']."</td>";
                        echo "<td  width=93>".$row['Ph_nu']."</td>";
                        echo "<td  width=90>".$row['E_mail']."</td>";
                       
                        echo"</tr>";  

                       // cellpadding=10

                }
                ?>
        </table>              
    <!--    </main>
     

        </aside>

        -->
        </form>


        
        <script>
                 
              var tbk = document.getELementById("tbl");
              for(var x = 1 ; x < tbk.row.length ; x++){
                tbk.row[x].onclick = function(){
                 
                  document.getELementById("Id_nu1").value = this.cells[0].innerHTML;
                  document.getELementById("M_F1").value=this.cells[1].innerHTML;
                  document.getELementById("name_full1").value=this.cells[2].innerHTML;

                } 
              }

        </script>

        </div>

</body>
                    
</html>