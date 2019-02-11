<?php
function validateForm() {
	global $name, $email, $phone, $subject, $comment, $nameErr,  $emailErr, $phoneErr, $subjectErr, $comentErr, $nickName, $errors;
	$errors = false;

if (empty($_POST["name"])) {
        $nameErr = "Must enter First Name";
        $errors = true;
} else {
    $name = scrubInput($name);
    $nameErr = "";
    echo "Now validate the name";
    if (!preg_match("/^[a-zA-Z \' \-]*$/", $name)) {
        $nameErr = "Only letters, white space, ' and - allowed";
        $errors = true;
        echo "Name is NOT valid";
    } else {
        echo "Name is valid";
    }
}
if( !empty($_POST["nickName"])) { $nickName = $_POST["nickName"];}
  echo "<br>";

if( empty($_POST["email"])) {$emailErr = "E-mail is required";$errors = true;} else
{
    echo "Validate email format";
    $email = scrubInput($email);
    if (!preg_match("/^[0-9 \-]*$/", $email)) {
        $emailErr = "Only digits and  - allowed";
        echo "email is NOT valid";
        $errors = true;
    } else {
        echo "email is valid";
        $emailErr = "email address is valid";
        $email= $_POST["email"];
    }
}
  echo "<br>";

if( empty($_POST["phone"])) {$phoneErr = "Phone number is required";$errors = true;} else
{ 
        $phone = scrubInput($phone);
     	if (!preg_match("/^[0-9 \-]*$/", $phone)) {
        $phoneErr = "Only digits and  \- allowed";
        $errors = true;
        echo "Phone number is NOT valid";
    } else {
        echo "Phone number is valid";
        $phoneErr = "Phone field is varified";
        $phone = $_POST["phone"];}
    }
  echo "<br>";

if( !empty($_POST["comment"])) {
        $comment = scrubInput($_POST["comment"]);
}


if ($errors == false) {
        $preference = findName($name,$nickName);
        $summary = "<div id='results'><h2> Thank you for participating $preference</h2><p>You will recieve a confirmation message</p><br>".$email."<br>".$phone."br>".$comment."<br>You entered following classes:<br>";
//        $summary .= '<ul id="extra">';
//        $summary .= listPrereqs();
//        $summary .= listFormFields();
//        $summary .= '</ul>';
        sendMyMsg($summary);
        header('location:thankYou.php?confirmMsg='.urlencode($summary));
} else
        return "Please correct the errors listed below.";
}

function findName($name,$nickName) {
	if( !empty($_POST["nickName"])) 
		return $nickName;
	else
		return $name;
}


function scrubInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}
function sendMyMsg($summary) {
	echo $summary;
}
?>
