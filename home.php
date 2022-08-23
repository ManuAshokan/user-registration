<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<HTML>
<HEAD>
<TITLE>Welcome</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="page-header">
			<span class="login-signup"><a href="logout.php">Logout</a></span>
		</div>
		<div class="page-content">Welcome <?php echo $username;?></div>
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="">
				<form name="even-odd" method="post">
					<div class="signup-heading">Even Or Odd</div>
				<div class="error-msg" id="error-msg"></div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Enter a number<span id="username-info"></span>
							</div>
							<input class="input-box-330" type="number" name="field1"
								id="field1">
						</div>
					</div>					
					<div class="row">
						<input class="btn" type="submit" value="Submit">
					</div>
				</form>                
			</div>
		</div>
	</div>
	</div>
    <div class="page-content">

<?php   
    if($_POST){  
        $number = $_POST['field1'];   
        //divide entered number by 2   
        //if the reminder is 0 then the number is even otherwise the number is odd  
        if($number != null){  
        if(($number % 2) == 0){  
            echo "$number is an Even number";  
        }else{  
            echo "$number is an Odd number";  
        } 
    } 
    }  
?>
        <div>
</BODY>
</HTML>