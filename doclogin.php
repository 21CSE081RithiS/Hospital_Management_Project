
<body style="background-color:darkgoldenrod ">

<center>
<h3 class="welcome">login</h3>
<link rel="stylesheet" href="style.css">
<form action="docsc.php" class="welcome" method="post" style="border: 2px dotted blue; text-align:center; width: 400px;">
	<p>
		 doctor Name: <input name="user" name="username"  type="text" required value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" class="input-field">
	</p>
    <p>doctor id: <input name="id"  name="id" type="text" required value="<?php if(isset($_COOKIE["id"])) { echo $_COOKIE["id"]; } ?>" class="input-field">
	</p>
		 
                                   
		
		<p><input type="submit" value="Login"></span></p>
</form>
</center>
