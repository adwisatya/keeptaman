<?php
	include("../connect.php");
	
	if(isset($_GET['command'])){
		$username = $_POST['username'];
		$password  = $_POST['password'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		switch($_GET['command']){
			case 0 : $data = mysql_query("INSERT INTO admin (`username`, `password`, `name`, `email`) VALUES ('$username', '$password', '$name', '$email');");
					break;
			case 1 : $data = mysql_query("DELETE FROM admin WHERE `username` = '$username'");
					break;
			case 2 : $data = mysql_query("UPDATE admin SET password='$password',name='$name',email='$email' WHERE username = '$username'");
					break;
			default:
				echo "Command not found";
				break;
		}
	}else{
		$data	=	mysql_query("SELECT * from admin");
		if(mysql_num_rows($data)>0){
			$index = 1;
			while($user= mysql_fetch_array($data)){
				echo '
					 <tr>
						<td>'.$index.'</td>
						<td>'.$user['name'].'</td>
						<td>'.$user['email'].'</td>
						<td>'.$user['username'].'</td>
						<td>
							<input type="Submit" class="btn btn-primary btn-sm btn-primary edit" value="Edit" onClick="window.location.href = \'edit-user.php?id='.$user['username'].'\';">
						</td>
						<td>
							 <input type="Submit" class="btn btn-primary btn-sm btn-primary delete" value="Delete" onClick="HapusUser(\''.$user['username'].'\');">
						</td>
					 </tr>';
					 $index++;
			}
		}else{
			echo "Tidak ada data";
		}
	}
?>