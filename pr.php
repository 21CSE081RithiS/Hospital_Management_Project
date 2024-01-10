  <html>
  <body class="pr">
  <?php
          $name = $_REQUEST['t1'];
		  $age = $_REQUEST['t2'];
		$emailid = $_REQUEST['t3'];
	    $gender= $_REQUEST['t4'];
		$city= $_REQUEST['t5'];
          $servername="localhost";
          $username="root";
          $password="";
          $database='hos';
          $conn=new mysqli($servername,$username,$password,$database);
          if(strlen($name)==0)
               {
                    echo "Enter the field";
               }
          else if(strlen($emailid)<8)
                echo "emailid must be contain more than 8 characters";
          if(strlen($emailid)>=8 && strlen($name)>0)
               {
               $sql="insert into reg_pat values('$name','$age','$emailid','$gender','$city')";
               if ($conn->query($sql) === TRUE) 
               {
                   
				echo	"<h1>You are registered $name!!!</h1>";
 echo "<p>further details will be sent your mail kindly check for the information.</p>";
 echo "<p>Thank you...</p>";
 echo "<p>if you didn't receive any mail kindly contact</p>";

 echo "<a href='https://chennai.apollohospitals.com/Apollo-ils/ask-us/#:~:text=infochennai%40apollohospitals.com ' > apollo@gmail.com </a>";
               }
               }
          $conn->close();
     ?>
</div>
</body>
<style>
.pr{
	color:black;
	text-align:center;
	background:grey;
}
</style>
</html>