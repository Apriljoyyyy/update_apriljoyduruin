<?php
   include("db_Config.php");

   ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
<form method="post">
        <label>Last Name</label><br>
        <input type="text" id="Last_Name" name="Last_Name">

        <label>First Name</label><br>
        <input type="text" id="First_Name" name="First_Name">

        <label>Middle Name</label><br>
        <input type="text" id="Middle_Name" name="Middle_Name">

        <label>Extension Name</label><br>
        <input type="text" id="Extension Name" name="extension_name">

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
<button type="submit"  name="add_Student">ADD STUDENT</button>
</form>

<?php 
  if (array_key_exists('add_Student',$_POST))
  {
         $last_Name= $_POST ['Last_Name'];
         $first_Name= $_POST ['First_Name'];
         $middle_Name= $_POST ['Middle_Name'];
         $extension_name= $_POST ['extension_name'];
         $Sex= $_POST ['sex'];
         $birth_date= $_POST ['birth_Date'];
         $age= $_POST ['age'];
         $home_address= $_POST ['home_Address'];
         $status= $_POST ['civil_Status'];
         $nationality= $_POST ['nationality'];
         $religion= $_POST ['religion'];
         $boarding_Address= $_POST ['boarding_Address'];
         $contact_number= $_POST ['contact_Number'];
         $email= $_POST ['email_Address'];
  
         echo $last_Name;
         echo $first_Name;
         echo $middle_Name;
         echo $extension_name;
         echo $Sex;
         echo $birth_date;
         echo $age;
         echo $home_address;
         echo $status;
         echo $nationality;
         echo $religion;
         echo $boarding_Address;
         echo $contact_number;
         echo $email;
        //EVERYTHING ABOVE IS WORKING

         $insert_person= "INSERT INTO `person` (`last_Name`,`first_Name`,`middle_Name`,`extension_name`,`Sex`,`birth_date`,`age`,`home_address`,`status`,`religion`,`nationality`,`boarding_Address`,`contact_number`,`email`)
        VALUES ('$last_Name','$first_Name','$middle_Name','$extension_name','$Sex',' $birth_date','$age','$home_address','$status','$religion','$nationality','$boarding_Address','$contact_number','$email');";
        $result= $db_connect->query($insert_person);

        $db_connect->query("SET @Input_last_Name ='" .$last_Name. "'");
        $db_connect->query("SET @Input_first_Name ='" .$first_Name. "'");
        $db_connect->query("SET @Input_middle_Name ='" .$middle_Name. "'");
        $db_connect->query("SET @Input_extension_name ='" .$extension_name. "'");
        $db_connect->query("SET @Input_Sex ='" .$Sex. "'");
        $db_connect->query("SET @Input_birth_date ='" .$birth_date. "'");
        $db_connect->query("SET @Input_age ='" .$age. "'");
        $db_connect->query("SET @Input_home_address ='" .$home_address. "'");
        $db_connect->query("SET @Input_status ='" .$status. "'");
        $db_connect->query("SET @Input_nationality ='" .$nationality. "'");
        $db_connect->query("SET @Input_religion ='" .$religion. "'");
        $db_connect->query("SET @Input_boarding_Address ='" .$boarding_Address. "'");
        $db_connect->query("SET @Input_contact_number ='" .$contact_number. "'");
        $db_connect->query("SET @Input_email ='" .$email. "'");
        // $insert_person=$db_connect->query("CALL SP_Add_New_User(@Input_last_Name,@Input_first_Name,@Input_middle_Name,@Input_extention_name,@Input_Sex,@Input_birth_date,@Input_age,@Input_home_address,@Input_status,@Input_nationality,@Input_religion,@Input_boarding_Address,@Input_contact_number,@Input_email);";
    
        // $result= $db_connect->query($insert_person);
  }
?>
</body>
</html>



