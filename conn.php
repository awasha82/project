
<?php
	require'form7.php';
		
						
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "pro_db";
						
						$conn = mysqli_connect($servername,$username,$password,$dbname);

						//$no =$_POST['no'];
						$Id_nu =$_POST['Id_nu'];
						$M_F =$_POST['M_F'];
						$name_full =$_POST['name_full'];
						$name_m =$_POST['name_m'];
						$d_birth =$_POST['d_birth'];
						$p_birth =$_POST['p_birth'];
						$nation =$_POST['nation'];
						$religion=$_POST['religion'];
						$n_Id_nu=$_POST['n_Id_nu'];
						$pass_nu=$_POST['pass_nu'];
						$F_book=$_POST['F_book'];
						$F_paper=$_POST['F_paper'];
						$address1=$_POST['address1'];
						$address2=$_POST['address2'];					
						$m_status=$_POST['m_status'];	
						$education=$_POST['education'];
						$Ph_nu=$_POST['Ph_nu'];
						$E_mail=$_POST['E_mail'];		
						
						
						$insert = "insert into pro_data (Id_nu,M_F,name_full,name_m,d_birth,p_birth,nation,religion,n_Id_nu,pass_nu,F_book,F_paper,address1,address2,m_status,education,Ph_nu,E_mail
		   		         )values	('$Id_nu','$M_F','$name_full','$name_m','$d_birth','$p_birth','$nation','$religion','$n_Id_nu','$pass_nu','$F_book','$F_paper','$address1','$address2','$m_status','$education','$Ph_nu','$E_mail')";
						//$update = "update t1 set name='Awaasha', mo=509 where no=2";
						//$del = "delete from t1  where no=3";

						$q = mysqli_query($conn, $insert);

						//if ($q){
						//echo"ok";
						//}							else{

						//echo mysql_error($conn);
						//}
						if ($conn->query($insert) ===TRUE) {
							echo"تمت الإضافة بنجاح";
						}
						else {
						echo " خطأ " .$sql."<br>".$conn->error;
						}


						$conn->close();
					
			
					
					?>
					
