<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <script type="text/javascript" src="bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="container">
	<div class="jumbotron">
		<form data-toggle="validator" class="form-horizontal" role="form" action="" method="POST">
	<div class="form-group">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>
    </div>
    <div class="form-group">
         <label><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
       <input type="submit" name="sub" class="btn btn-default" value="Submit">
      </div>
    </div>
</form>
</div>
</div>

<?php

if(isset($_POST['sub'])){

$uname = $_POST['uname'];
$psw = $_POST['psw'];


$host="localhost";
$user="root";
$password="";
$dbname="login";
$conn =  mysqli_connect($host,$user,$password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO records (uname,psw)
VALUES ('$uname','$psw')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>
</body>
</html>