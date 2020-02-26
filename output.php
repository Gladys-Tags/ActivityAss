<?php
 include_once ("valadation.php");
    
    $firstname = $_POST['firstname'];
        echo "First Name:  " ,$firstname ,"<br>";
    $lastname = $_POST ['lastname'];
        echo "Last Name:  ", $lastname ,"<br>";
    $middlename = $_POST ['middlename'];
        echo "Middle Name:  ", $middlename ,"<br>";
    $address = $_POST ['address'];
        echo "Address:  ", $address ,"<br>";
    $guardian = $_POST ['guardian'];
        echo "Guardian:  ", $guardian ,"<br>";
    $email = $_POST ['email'];
        echo "Email:  ", $email ,"<br>";
    $POB = $_POST ['POB'];
        echo "Place of Birth:  ", $POB ,"<br>";
    $DOB = $_POST ['DOB'];
        echo "Date of Birth:  ",date('m-d-Y',strtotime($DOB)) ,"<br>";
    $contactnumber = $_POST ['contactnumber'];
        echo "Contact Number:  ", $contactnumber ,"<br>";
    $civilstatus = $_POST ['civilstatus'];
        echo "Civil Status:  ", $civilstatus ,"<br>";
    $yearlabel = $_POST ['yearlabel'];
        echo "Year Level:  ", $yearlabel ,"<br>";
    $schoolyear = $_POST ['schoolyear'];
        echo "School Year:  ", $schoolyear ,"<br>";
    $course = $_POST ['course'];
        echo "Course:  ", $course ,"<br> <br>";

        echo "****VALIDATION****","<br><br>";

         /* 1 */
    if (notEmp($firstname) && notEmp($lastname) && notEmp($middlename) && notEmp($address) && notEmp($POB) && notEmp($guardian) && notEmp($civilstatus) && notEmp($schoolyear) && notEmp($email)){
        echo "Not Empty", "<br>";
    }
    else{
        echo "It's Empty", "<br>";
    }
    
    /* 2 */
    if (shouldnotNum($firstname) && shouldnotNum($lastname) && shouldnotNum($middlename) &&shouldnotNum($address) && shouldnotNum($POB) && shouldnotNum($guardian) && shouldnotNum($civilstatus) && shouldnotNum($email)){
        echo "Not a Number", "<br>";
    }
    else{
        echo "It's a Number", "<br>";
    }
    /* 3 */
    if (notSpecialChar($firstname) && notSpecialChar($lastname) && notSpecialChar($middlename) && notSpecialChar($address) && notSpecialChar($POB) && notSpecialChar($guardian)  && notSpecialChar($civilstatus) && notSpecialChar($schoolyear) && notSpecialChar($email)){
        echo "Don't have any Special Character", "<br>";
    }
    else{
        echo "It has a Special Character", "<br>";
    }
    /* 4 */
    if (moreThan2($lastname) && moreThan2($firstname)){
        echo "The letters is more than two", "<br>";
    }
    else{
        echo "the letters is less than two", "<br>";
    }
    /* 5 */
    if (notags($lastname) && notags($firstname) && notags($middlename) && notags($address) && notags($POB) && notags($guardian) && notags($civilstatus) && notags($schoolyear) && notags($email)){
       echo "No HTML Tags", "<br>";
    }
    else{
        echo "Have HTML Tags", "<br>"; 
    }
    /* 6 */
    if (emailFormat($email)){
        echo "OK email", "<br>";
    }
    else{
        echo "Not OK email", "<br>";
    }
    /* 7 */
    if (philpreffix($contactnumber)){
        echo "Perfect Number";
    }
    else{
        echo "Not Perfect Number";
    }
?>