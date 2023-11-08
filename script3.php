
<?php
	require'form1.php';
		
						
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "pro_db";
						
						$conn = mysqli_connect($servername,$username,$password,$dbname);

						
						//$no =$_POST['no'];
						$Id_nu =$_POST['Id_nu'];
						$name_full =$_POST['name_full'];
						$name_m =$_POST['name_m'];
						$d_birth =$_POST['d_birth'];
						$nation =$_POST['nation'];

						$religion=$_POST['religion'];
						$n_Id_nu=$_POST['n_Id_nu'];
						$Id_d=$_POST['Id_d'];
						$address1=$_POST['address1'];
						$address2=$_POST['address2'];
						$address3=$_POST['address3'];
													
						$kin_n=$_POST['kin_n'];
						$kin_addres1=$_POST['kin_addres1'];	
						$kin_address2=$_POST['kin_address2'];
						$m_status=$_POST['m_status'];	
						$nu_children=$_POST['nu_children'];
						$pre_jop=$_POST['pre_jop'];
						$education=$_POST['education'];
						$y_n1=$_POST['y_n1'];
						$y_n2=$_POST['y_n2'];
						
						
						$insert = "insert into pro_data (Id_nu,name_full,name_m,d_birth,nation,religion,n_Id_nu,Id_d,address1,address2,address3,kin_n,kin_addres1,kin_address2,m_status,nu_children,pre_jop,education,y_n1,y_n2)values('$Id_nu','$name_full','$name_m','$d_birth','$nation','$religion','$n_Id_nu','$Id_d','$address1','$address2','$address3','$kin_n','$kin_addres1','$kin_address2','$m_status','$nu_children','$pre_jop','$education','$y_n1','$y_n2')";
						//$update = "update t1 set name='Awaasha', mo=509 where no=2";
						//$del = "delete from t1  where no=3";

						$q = mysqli_query($conn, $insert);

						if ($q){
						echo"ok";
						}							else{

						echo mysql_error($conn);
						}

						

					
			
					
					?>
					
					//	$insert = "insert into t1 values('11','kkkxfya jka','8845622','lokkij')";
					//	$update = "update t1 set name='Awaasha', mo=509 where no=2";
					//	$del = "delete from t1  where no=2";
//
//						$q = mysqli_query($conn, $del);
//
//						if ($q){
//						echo"ok";
//						}
//						else{
//
//						echo mysql_error($conn);
//						}
//
						