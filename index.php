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
    <link rel="stylesheet" href="style2.13.css">

    <style>
    body{
        background-color:whitesmoke;
        font-family: 'Almarai', sans-serif;
        font-family: 'Poppins', sans-serif;
        font-family: 'Tajawal', sans-serif;
        }
        *{
            margin: 0;
        }
    
        #img{
            width:100%;
            height:100%;
            position:fixed;
            z-index:-1;
            opacity: 20%;
            right: 0px;


        }


</style>

    <title> التجنيد</title>

    
</head>
<body >



    <script>
        window.addEventListener('mouseup', function (event){
            var box = document.getElementById ('menu');
            if (event.target !=box){
            box.style.width='0px';
            }
        })
     </script>



    <header >

   

        <body dir="rtl">

        <a href="#" class="logo">مكتب التجنيد </a> <br>
        <h5 class="test"> نسخــة تجريبية </h5>
  <!--      <nav class="navigation">
            <a href="#">الرئيسية</a>
            <a href="#services">شروط القبول</a>
            <a href="#projects"> مراحل التدريب</a>
            <a href="form.php"> طلب تجنيد </a>
            <a href="form1.php"> إدارة الموقع </a>

  </nav> -->


                <div id="mainbox" class="mee" onclick="openFunction()">&#9776;</div> 

<div id='menu' class="sidemenu">
           <a href="#" id="active">الرئيسية</a>
            <a href="#services">شروط القبول</a>
            <a href="#projects"> مراحل التدريب</a>
            <a href="form.php"> طلــب تجنيـــد</a>
            <a href="">الخدمات الإلكترونية</a>
            <br>
            <hr>
            <br>
            <a href=""> إدارة الموقع </a>

    <a href="" class="closebtn" onclick="closeFunction()">&times;</a>
    </div>

<script src="script.js"></script>

    </header>
    
    <section class="main" >
    <img src="1.1.jpg" alt="photo" id="img" draggable="false" >

        <div>
        <br>
        <br> <br>
            <h2> دولـة ليبيـا  <br></h2>
            <h2> وزارة الداخليـة <br></h2>
            <h2> الإدارة العامـة للتدريب </h2>
            <br>
            <br>
            <p><strong>  إنطـلاقــــــاً </strong>  مــن رؤيـة وزارة الداخلية للتحـول الرقمـي </p>
            <br>
            <p> يسعـى مكتـب التجنيد بالإدارة العامة للتدريب ليقـدم خدمات إلكترونية </p>
            <br>
            <p> للراغبيــن في التجنيــد </p>


            <br>
            <br>

            <a href="#services" class="main-btn">عرض شروط القبول</a>
            <!--<div class="social-icons">
                <a href="#"><icon brands fa-facebook-f></icon></i></a>
                <a href="#"></a>
                <a href="#"></a>
            </div> -->
        </div>

        
     <div class="logo_1"> 
            <span class="image"><img class="image5" src='images/Logo1.GIF' alt="logo" /></span>
            </div>
    </section>

    <section class="cards" id="services">
    <br>
            <div class="content">
               

                <div class="card">
                    <div class="icon">
                         
                       <i class="fas fa-edit"></i>
                        </div>
                        <div class="info">
                            <h3>شروط القبول</h3>
                        
                            <ul>
                            <li>أن يكون ليبي الجنسية </li>
                            <li>الا يقل عمره عن ثماني عشرة سنة ولا يزيد عن 30</li>
                            <li> أن يكون حسن السمعة والسيرة والسلوك</li>
                            <li> ألا يكون قد سبق الحكم عليه بعقوبة في جناية أو جنحة مخلة بالشرف أو الأمانة </li>
                            <li>الا يكون قد سبق عزله أو فصله من الخدمة بحكم قضائي أو بقرار تأديبي نهائي </li>
                            <li> أن يكون لائق صحياً للخدمة وتثبت اللياقة الصحية بالكشف الطبي المقرر.</li>
                            <li> أن يكون حاصل على شهادة إتمام مرحلة التعليم الأساسي</li>
                            <li>أن يجتاز بنجاح الدورة التدريبية التي تعقد بإحدى مؤسسات ومعاهد تدريب الشرطة</li>
                           </ul>
            
                    </div>
                </div>


             <div class="card">
             <div class="icon">
                    <i class="fas fa-edit"></i> 
                </div>
                <div class="info">
                <h3>المسوغات المطلوبة</h3>
            

                            <ol type="1">
                                <li> شهادة الميلاد من سجل المدني - عدد ( واحدة أصل )ونسختين</li>
                                <li> شهادة الإقامة من سجل المدني - عدد ( واحدة أصل )ونسختين</li>
                                <li> شهادة الوضع العائلي من سجل المدني - عدد ( واحدة أصل )ونسختين</li>
                                <li> شهادة ميلادالأم من سجل المدني - عدد ( واحدة أصل )ونسختين</li>
                                <li> شهادة الخلو من السوابق - عدد ( واحدة أصل )ونسختين</li>
                                <li> شهادة حسن السيرة والسلوك - عدد ( واحدة أصل )ونسختين</li>
                                <li> شهادة بالمستوى الدراسي - عدد ( واحدة أصل )ونسختين</li>
                                <li>  أثبات هوية ( جواز السفر أو البطاقة الشخصية) - عدد ( ثلاثة نسخ)</li>
                                <li> طلب كتابي بموافقة ولي الأمر - عدد ( واحد أصل ) ونسختين</li>
                                <li> طلب كتابي للالتحاق عدد ( واحد أصل ) ونسختين</li>
                                <li> عدد 8 صور شخصية مقاس  (6x4)</li>
                                <li> عدد ثلاث ملفات شخصية </li>
                            </ol>
            </div>
        </div>

</div>    
<center>
    <br>
            <!--<div class="social-icons">
                <a href="#"><icon brands fa-facebook-f></icon></i></a>
                <a href="#"></a>
                <a href="#"></a>
            </div> -->
        </div>

</section>



        <section class="projects" id="projects">
      
               <div class="content">
                <div class="project-card">
                    <div class="project-image">
                    <img src="images/1.jpg"/>
                </div>  
                    <div class="project-info">
                      <p class="project-category"> عرض الطلبة المتقدمين على لجنة القبول</p>
                      <strong class="project-title">
                        <span>يتم عرض الطلبة المتقدمين للتجنيد على لجنة القبول والتجنيد المختصة بعد إجراء التحاليل وكشف الدرن وعرضهم على الطبيب المختص  </span>
                        <a href="#" class="more-details">المزيد</a>
                      </strong>
                      
                 </div>
            </div> 

            <div class="project-card">
                <div class="project-image">
                <img src="images/1.1.jpg"/>
            </div>  
                <div class="project-info">
                  <p class="project-category">عقد دورة تأسيسية</p>
                  <strong class="project-title">
                    <span>يمنح الإذن السيد / مدير الإدارة العامة للتدريب لعقد الدورة التأسيسية وإحالة قوائم المجندين اللائقين طبياً وممن تتوفر فيهم شروط القبول 
                        للتعيين بهيئة الشرطة إلى إحدى معاهد تدريب الشرطة التابعة للإدارة العامة للتدريب .
                    </span>
                    <a href="#" class="more-details">المزيد</a>
                  </strong>
                  
             </div>
        </div> 

       <!----> 
        <div class="project-card">
            <div class="project-image">
            <img src="images/3.jpg"/>
        </div>  
            <div class="project-info">
              <p class="project-category"> تنفيذ الدورة التأسيسية </p>
              <strong class="project-title">
                <span> خضوع المجندين لدورة تأسيسية وفق لائحة النظام الداخلي لمعاهد تدريب الشرطة . </span>
                <a href="#" class="more-details">المزيد</a>
              </strong>
              
         </div>
    </div> 


            <div class="project-card">
             <div class="project-image">
             <img src="images/4.jpg"/>
             </div>  
            <div class="project-info">
            <p class="project-category"> التدقيق الأمني</p>
             <strong class="project-title">
            <span> إحالة قوائم تتضمن بيانات المجندين إلى جهاز الأمن الداخلي والمباحث الجنائية للبحث بقيوداتهم الأمنية والجنائية ، ومخاطبة الإحوال المدنية لمطابقة الأرقام الوطنية عما إذا كانت هناك أية 
                موانع أمنية أو جنائية تحول دون تعيينهم بهيئة الشرطة  </span>
            <a href="#" class="more-details">المزيد</a>
            </strong>
          
              </div>
            </div> 



        <div class="project-card">
            <div class="project-image">
            <img src="images/33.jpg"/>
        </div>  
            <div class="project-info">
              <p class="project-category">إحالة النتائج النهائية </p>
              <strong class="project-title">
                <span>يتم إحالة النتائج النهائية للمجندين للسيد مدير الإدارة العامة للتدريب لإعتمادها ووضح نسخة من صحيفة الدرجات والقسم القانوني 
                    لكل مجند بملفه الشخصي المكون من أصل ونسختين . </span>
                <a href="#" class="more-details">المزيد</a>
              </strong>
              
         </div>
    </div> 

    <div class="project-card">
        <div class="project-image">
        <img src="images/44.jpg"/>
    </div>  
        <div class="project-info">
          <p class="project-category"> إحالة الملفات الشخصية </p>
          <strong class="project-title">
            <span>  يتم إحالة الملفات الشخصية للمجندين الذين إجتازو الدورة بنجاح للإدرة العامة للتدريب ( مكتب التجنيد ) و ذلك لمراجعتهم والتدقيق في المسوغات ومن تم إحالتهم إلى إدارة الشؤون الإدارية 
                بالوزارة لإعداد مشروع قرار التعيين والتنسيب وإحالتهم لإدارة الشؤون القانونية لوضع الصيغة القانونية وعرضه على السيد / وزير الداخلية للإعتماد . </span>
            <a href="#" class="more-details">المزيد</a>
          </strong>
          
     </div>
</div> 
        </div>
        

</section>



    
    <section class="sh" id="sh">
    <!--    <h2 class="title">... بينات التسجيل... </h2>
           <div class="content">
            <p> jhdkhasldkh lkdhlakshd lkadalksd ladkhalkdhalks</p>

            <button>submit</button>
            
            <br>
            <br>
            <br>
            <br> -->

</section> 


</body>
<dive class=foot>
<?php include "footer.php"?>
    </dive>
</html>