<?php
include("db_config.php");


$person_Id = "Person_Id";
$last_Name = "Last_Name";
$first_Name = "First_Name";
$middle_Name = "Middle_Name";
$extension_name = "extension_name";
$Sex = "Sex";
$birth_date = "birth_date";
$age = "age";
$home_Address = "home_Address";
$status = "status";
$nationality = "nationality";
$religion = "religion";
$boarding_Address = "boarding_Address";
$contact_number = "contact_number";
$email = "email";



if (array_key_exists('search_user', $_POST)) {
    $person_Id = $_POST['Person_Id'];

    // Corrected SQL query with SELECT instead of SEARCH
    $SearchUserAccountQuery = "SELECT * FROM person WHERE Person_Id = '$person_Id'";

    // Execute the SQL query and check if it was successful
    $result = $db_connect->query($SearchUserAccountQuery);

    if ($result) {
    // Fetch the user account data
    while ($row = mysqli_fetch_object($result)) {
    // Values for 'username' and 'password' are taken from the query result 
    $last_Name = $row->last_Name;
    $first_Name = $row->first_Name;
    $middle_Name = $row->middle_Name;
    $extension_name = $row->extension_name;
    $Sex = $row->Sex;
    $birth_date= $row->birth_date;
    $age = $row->age;
    $home_address = $row->home_address;
    $status = $row->status;
    $nationality = $row->nationality;
    $religion = $row->religion;
    $boarding_Address = $row->boarding_Address;
    $contact_number = $row->contact_number;
    $emai = $row->email;
    }

    } else {
    echo "Error executing the query: " . $db_connect->error;
    }
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY USER</title>
</head>
<body>
    <form method="post">
        <input type="text" id="Person_Id" name="Person_Id">
        <label for="Person_Id">Person ID</label><br>
        <button type="submit"  name="search_user">SEARCH</button>
    </form>
    <input type="text" id="Last_Name" name="Last_Name" value="<?php echo $last_Name ?>">
    <label for="Last_Name">Last_Name</label><br>

    <input type="text" id="First_Name" name="First_Name" value="<?php echo $first_Name ?>">
    <label for="First_Name">First_Name</label><br>
    
    <input type="text" id="Middle_Name" name="Middle_Name" value="<?php echo $middle_Name ?>">
    <label for="Middle_Name">Middle_Name</label><br>

    <input type="text" id="Extension_name" name="extension_name" value="<?php echo $extension_name ?>">
    <label for="Extension_Name">Extension_Name</label><br>

    <input type="text" id="Sex" name="sex" value="<?php echo $Sex ?>">
    <label for="sex">Sex</label><br>

    <input type="text" id="Birth_Date" name="birth_Date" value="<?php echo $birth_date ?>">
    <label for="Birth_Date">Birth_Date</label><br>

    <input type="text" id="Age" name="age" value="<?php echo $age ?>">
    <label for="age">Age</label><br>

    <input type="text" id="Home" name="home_Address" value="<?php echo $home_Address ?>">
    <label for="home">Home_Address</label><br>

    <input type="text" id="Civil_Status" name="civil_Status" value="<?php echo $status ?>">
    <label for="Civil_Status">Civil_Status</label><br>

    <input type="text" id="Religion" name="religion" value="<?php echo $religion ?>">
    <label for="Religion">Religion</label><br>

    <input type="text" id="Nationality" name="nationality" value="<?php echo $nationality ?>">
    <label for="Nationality">Nationality</label><br>

    <input type="text" id="Boarding_Address" name="boarding_Address" value="<?php echo $boarding_Address ?>">
    <label for="Roarding_Address">boarding_address</label><br>
    
    <input type="text" id="Contact_Number" name="contact_Number" value="<?php echo $contact_number ?>">
    <label for="Contact_Number">Contact_Number</label><br>

    <input type="text" id="Email_Address" name="email_Address" value="<?php echo $email ?>">
    <label for="Email_Address">Email_Address</label><br>


</body>
</html>