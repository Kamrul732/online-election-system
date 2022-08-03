<?php
 require("connection.php");
 ?>
 <html>
    <head>
        <title>Admin Login Panel</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="mycss.css">
</head>
<body>
    <div class="login-form">
        <h2>ADMIN LOGIN PANEL</h2>
        <form method="POST">
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Admin Name" name="AdminName">
</div>

<div class="input-field">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="AdminPassword">
</div>

<button type="submit" name="Signin">Sign In</button>

<div class="extra">
    <a href="#"> Forgot Password ? </a>
</div>
</form>
</div>

<?php
$check= $_POST['AdminName'];
$check2= $_POST['AdminPassword']; 

if(isset($_POST['Signin']))
{
    $query = "SELECT * FROM admin_login WHERE Admin_Name='$check' AND Admin_Password='$check2'";
    $result = $GLOBALS['conn']->query($query);
    if ($result->num_rows > 0) {
        $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
        header("location:../routes/homepage.php");
      
    }else{
      echo $GLOBALS['conn']->error;
      echo "notconnected";
    }

    

}

?>




</body>
</html>