
<?php
	require'form4.php';
		
						
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "pro_db";
						
						$conn = mysqli_connect($servername,$username,$password,$dbname);

												
						$user_na=$_POST['user_na'];
						$user_pass=$_POST['user_pass'];
						
						
						$insert = "insert into users (user_na,user_pass)values('$user_na','$user_pass')";
						
						$q = mysqli_query($conn, $insert);

						if ($conn->query($insert) ===TRUE) {
							echo"تمت الإضافة بنجاح";
						}
						else {
						echo " خطأ " .$sql."<br>".$conn->error;
						}


						$conn->close();
					
					
					?>
					
					