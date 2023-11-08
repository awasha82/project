
<?php
	require'form3.php';
		
						
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "pro_db";
						
						$conn = mysqli_connect($servername,$username,$password,$dbname);

						//$no =$_POST['no'];
						$approval_nu =$_POST['approval_nu'];
						$G_nu =$_POST['G_nu'];
						$cou_for =$_POST['cou_for'];
						$cou_na =$_POST['cou_na'];
						$cou_plase =$_POST['cou_plase'];
						$cou_t =$_POST['cou_t'];
						$cou_m =$_POST['cou_m'];
						$cou_st=$_POST['cou_st'];
						$cou_end=$_POST['cou_end'];
                      
						$insert = "insert into courses1 (approval_nu,G_nu,cou_for,cou_na,cou_plase,cou_t,cou_m,cou_st,cou_end) values ('$approval_nu','$G_nu','$cou_for','$cou_na','$cou_plase','$cou_t','$cou_m','$cou_st','$cou_end')";
						//$update = "update t1 set name='Awaasha', mo=509 where no=2";
						//$del = "delete from t1  where no=3";

						$q = mysqli_query($conn, $insert);

					
						if ($conn->query($insert) ===TRUE) {
							echo"تمت الإضافة بنجاح";
						//نقل الصفحة إلي الرئيسة فوراً
						//header("Location:index.php");
						?>
					 	نقل الصفحة إلي الرئيسة بعد 3 ثواني
						<meta http-equiv="refresh" content="3;url=index.php" > -->
						
					

						<?php

						}
						else {
						echo " خطأ " .$sql."<br>".$conn->error;
						}


						$conn->close();
					
			
					
					?>
					
