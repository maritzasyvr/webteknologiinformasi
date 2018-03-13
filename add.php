

<?php
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

$to=$email;


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: Jurnalweb.com <noreply@yourwebsite.com>'."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
$headers .= 'Cc:' .$email . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
@mail($to,$subject,$message,$headers);

// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,subject,message) VALUES('$name','$email','$subject','$message')");
        	echo "Pesan Anda berhasil terkirim. Silahkan cek email anda.<br> <a href='index.php'>Kembali ke Beranda</a>";
	}
		
?>
