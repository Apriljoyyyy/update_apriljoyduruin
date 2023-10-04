<?php
include("db_Config.php");

if (array_key_exists('add_Student', $_POST)) {
    $person_ID = $_POST['person_ID'];
    $last_Name = $_POST['Last_Name'];
    $first_Name = $_POST['First_Name'];
    $middle_Name = $_POST['Middle_Name'];
    $extension_Name = $_POST['extension_Name'];
    $sex = $_POST['sex'];
    $birth_Date = $_POST['birth_Date'];
    $age = $_POST['age'];
    $home_Address = $_POST['home_Address'];
    $civil_Status = $_POST['civil_Status'];
    $nationality = $_POST['nationality'];
    $religion = $_POST['religion'];
    $boarding_Address = $_POST['boarding_Address'];
    $contact_Number = $_POST['contact_Number'];
    $email_Address = $_POST['email_Address'];

    // Update the person's information based on the person_ID
    $update_person = "UPDATE person 
                      SET Last_Name='$last_Name', 
                          First_Name='$first_Name', 
                          Middle_Name='$middle_Name', 
                          extension_Name='$extension_Name', 
                          sex='$sex', 
                          birth_Date='$birth_Date', 
                          age='$age', 
                          home_Address='$home_Address', 
                          civil_Status='$civil_Status', 
                          religion='$religion', 
                          nationality='$nationality', 
                          boarding_Address='$boarding_Address', 
                          contact_Number='$contact_Number', 
                          email_Address='$email_Address' 
                      WHERE person_ID=$person_ID";

    // Execute the update query
    $result = $db_connect->query($update_person);

    if ($result === TRUE) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $db_connect->error;
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>UPDATE STUDENT</title>
</head>
<body>
    <form method="post">
        <label>Person ID</label><br>
        <input type="text" id="person_ID" name="person_ID" value="8" readonly>

        <label>Last Name</label><br>
        <input type="text" id="Last_Name" name="Last_Name">

        <label>First_Name</label><br>
        <input type="text" id="First_Name" name="First_Name">

        <label>Middle_Name</label><br>
        <input type="text" id="Middle_Name" name="Middle_Name">

        <label>Extension Name</label><br>
        <input type="text" id="extension Name" name="extension_Name">

        <label>Sex</label><br>
        <select name="sex" id="sex">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select> 

        <label>Birth_Date</label><br>
        <input type="date" id="birth_Date" name="birth_Date">

        <label>Age</label><br>
        <input type="number" id="age" name="age">

        <label>Home Address</label><br>
        <input type="text" id="home_Address" name="home_Address">

        <label>Civil Status</label><br>
        <select name="civil_Status" id="civil_Status">
            <option value="Single">Single</option>
            <option value="Maried">Maried</option>
            <option value="Widowed/Widower">Widowed/Widower</option>
        </select> 

        <label>Nationality</label><br>
        <input type="text" id="nationality" name="nationality">

        <label>Religion</label><br>
        <input type="text" id="religion" name="religion">

        <label>Boarding Address</label><br>
        <input type="text" id="boarding_Address" name="boarding_Address">

        <label>Contact Number</label><br>
        <input type="text" id="contact_Number" name="contact_Number">

        <label>Email Address</label><br>
        <input type="email" id="email_Address" name="email_Address">

        <!-- Rest of your form fields -->

        <button type="submit" name="add_Student">UPDATE</button>
    </form>
</body>
</html>