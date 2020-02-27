<?php
	include_once("validation.php");
	$firstname = $_POST['FirstName'];
		echo $firstname;
	$lastname = $_POST['LastName'];
		echo $lastname;
	$middlename = $_POST['MiddleName'];
		echo $middlename;
	$address = $_POST['Address'];
		echo $address;
	$placeofbirth = $_POST['PlaceOfBirth'];
		echo $placeofbirth;
	$dateofbirth = $_POST['Dateofbirth'];
		echo $dateofbirth;
	$gender = $_POST['Gender'];
		echo $gender;
	$civilstatus = $_POST['civil'];
		echo $civilstatus;
	$yearlevel = $_POST['Year'];
		echo $yearlevel;
	$course = $_POST['course'];
		echo $course;
	$schoolyear = $_POST['syyear'];
		echo $schoolyear;
	$email = $_POST['email'];
        echo $email;
    $contactnum = $_POST['contact'];
        echo $contactnum;
    $guardian = $_POST['guardian'];
		echo $guardian;

	/* 1 */
    if (notEmp($firstname) && notEmp($lastname) && notEmp($middlename) && notEmp($address) && notEmp($placeofbirth) && notEmp($guardian) && notEmp($civilstatus) && notEmp($schoolyear) && notEmp($email)){
        echo "valid", "<br>";
    }
    else{
        echo "invalid", "<br>";
    }
    
    /* 2 */
    if (shouldnotNum($firstname) && shouldnotNum($lastname) && shouldnotNum($middlename) &&shouldnotNum($address) && shouldnotNum($placeofbirth) && shouldnotNum($guardian) && shouldnotNum($civilstatus) && shouldnotNum($email)){
        echo "valid", "<br>";
    }
    else{
        echo "invalid", "<br>";
    }
    /* 3 */
    if (notSpecialChar($firstname) && notSpecialChar($lastname) && notSpecialChar($middlename) && notSpecialChar($address) && notSpecialChar($placeofbirth) && notSpecialChar($guardian) && notSpecialChar($civilstatus) && notSpecialChar($schoolyear) && notSpecialChar($email)){
        echo "valid", "<br>";
    }
    else{
        echo "invalid", "<br>";
    }
    /* 4 */
    if (moreThan2($lastname) && moreThan2($firstname)){
        echo "valid", "<br>";
    }
    else{
        echo "invalid", "<br>";
    }
    /* 5 */
    if (notags($lastname) && notags($firstname) && notags($middlename) && notags($address) && notags($placeofbirth) && notags($guardian) && notags($civilstatus) && notags($schoolyear) && notags($email)){
       echo "valid", "<br>";
    }
    else{
        echo "invalid", "<br>"; 
    }
    /* 6 */
    if (emailFormat($email)){
        echo "valid", "<br>";
    }
    else{
        echo "Invalid", "<br>";
    }
    /* 7 */
    if (philpreffix($contactnum)){
        echo "valid";
    }
    else{
        echo "invalid";
    }
    

?>