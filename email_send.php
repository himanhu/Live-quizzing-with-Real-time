<?php
session_start();
//include "../../database.php";
$con=mysqli_connect("localhost","root","");
mysqli_select_db( $con,"final");

// $read = 0;
// $trash = 0;
$sent = 0;
// $sender = $_POST['login_user'];




    $receiver = "tiwarisaumya.2.1997@gmail.com";
    $subject = "email_subject";
    $message = "hello";
    $sender = "singh.sh.shivam@gmail.com";    // Enable verbose debug output
    //$file_name = $_FILES['file']['name'];
    //$temp_name = $_FILES['file']['tmp_name'];
    //$file_type = $_FILES['file']['type'];

    //$base = basename($file_name);
    //$extension = substr($base,strlen($base)-4,strlen($base));

    //$allowed_extensions = array("jpg",".doc","docx",".pdf",".zip",".png",".mp3","mp4");

    //if(in_array($extension,$allowed_extensions)){
     // $file = $temp_name;
     // $content = chunk_split(base64_encode(file_get_contents($file)));
      //$uid = md5(uniqid(time()));
   // }
    //else {
     // echo "file type not allowed";
    
	$uid=3;
	$file_type="helloooo";
	$file_name="max";

    //$header = "From:".$sender."\r\n";
		//$header .= "MIME-Version: 1.0\r\n";
		// $header .= "Content-type: text/html\r\n";
    //$header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n";
    //$header .= "This is a multi-part message in MIME format. \r\n";


    //plain text part
    //$header .="--".$uid."\r\n";
    //$header .="Content-type:text/plain; charset=iso-8859-1\r\n";
    //$header .="Content-Transfer-Encoding: 7bit\r\n";
    //$header .=$message."\r\n";

    //$header .="--".$uid."\r\n";
    //$header .="Content-Type: ".$file_type."; name=\"".$file_name."\"\r\n";
    //$header .="Content-Transfer-Encoding: base64\r\n";
    //$header .="Content-Disposition: attachment; filename=\"".$file_name."\"\r\n";
    //$header .=$content."\r\n";
        echo $receiver."next".$subject."next".$message."next".$header;
		if(mail($receiver,$subject, $message,$header)){
      $sent = 1;
      $_SESSION['message'] = "Mail sent successfully...";
      $_SESSION['msg_type'] = "success";
    } // Send our email
    else{
		// header("location:no.php");
		echo"hg";
      $_SESSION['message'] = "Some error occurred. Try later... ";
      $_SESSION['msg_type'] = "danger";
    }

  
  
 // $con->query("INSERT INTO email(receiver,sender,subject,message,sent)VALUES('$receiver','$sender','$subject','$message','$sent')") or die($con->error);
 // header("location:compose.php");

  

 ?>
