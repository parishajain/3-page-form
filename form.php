<!DOCTYPE html>
<html lang="en">
<head>
<title>Steve's Website</title>
<meta charset="UTF-8">
<link href="style.css" rel="stylesheet" type="text/css">  
<script src="formFunctions.js"></script>
</head>
<body>
<?php
include 'header.php';
include 'validateForm.php';
global $name, $email, $phone, $subject, $comment, $nameErr, $emailErr, $phoneErr, $subjectErr, $comentErr, $nickName, $errors;

$name = $email = $comment = '';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$errors = false;
	$alert = validateForm();
} else {
	$name = $email = $phone = $subject = $comment = $nameErr = $emailErr = $phoneErr = $commentErr = $nickName = $alert = "";
}

?>
        <h2>
        Be My Friend 
</h2>
<div class="container">
<section id="main">
               <div class="box-1">

<!--  ************************************* -->
<p >Directions: First name and email need to have data to successfully submit. No speciall character allowed in the name field. Email should not contain any special characters except @ before domain name, for example myemail@yahoo.com. Make sure all fields are completed before clicking on Submit button.<br> It is so nice to have focus on the first input field when a form loads.
</p>
</div>
</section>
</div>

<form id="survey" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
     <label for="name">Name: </label>
     <input type="text" name="name" id="name" value="<?php echo $name;?>">
     <span class="error">* <?php echo $nameErr;?></span> <br>
     <p>If you go by something other than what shows on the roster...</p>
     <label for="nickName">Preferred: </label>
     <input type="text" name="nickName" id="nickName" value="<?php echo $nickName;?>">
     <fieldset><legend>Contact Info</legend>
    <label for="email">E-mail: </label>
    <input type="email" name="email" id="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span> <br>
    <br>
    <label for="phone">Phone: </label>
    <input type="tel" name="phone" id="phone" value="<?php echo $phone;?>">
    <span class="error">* <?php echo $phoneErr;?></span> <br>
    </fieldset>
    <br>
    <br>
    <label for="comment">Hobbies: </label><textarea name="comment" id="comment" rows="5" cols="40" placeholder="What do you like ? Let us match our interests for lasting friendship."></textarea> <br>
    <br>
    <input type="button" name="clear" onclick="clearForm()" value="Clear Form">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
include 'footer.php';
?>
</body>
</html>
