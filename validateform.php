<!DOCTYPE html>
<html>
<head>
  <style>
  .formdiv {
    border: 5px outset red;
    background-color: lightblue;
    text-align: center;
    height: 700px;
    width: 50%;
display: block;
margin-left: auto;
margin-right: auto;
  }

</style>
<title>Form</title>
</head>
<body>
    <?php include 'header.php'?>
      <?php include 'menu.php'?>

  <div class="formdiv">
    <form name="formname" id="formid"  action="validation.php" method="post">
    <label for="inputName"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="inputName" value="<?php echo $name; ?>">
                <span class="error"><?php echo $nameErr; ?></span><br><br>
    <label for="inputpassword"><b>Password</b></label>
    <input type="password" placeholder="Enter password" name="password" id="inputpassword" value="<?php echo $password
    ; ?>">
    <span class="error"><?php echo $passwordErr; ?></span>
    <br><br>

  <label for="inputgender"><b>Gender</b></label>
   <input type="radio"  name="gender" id="inputgender">Male
   <input type="radio"  name="gender" id="inputgender">Female
      <input type="radio"  name="gender" id="inputgender">Other <br><br>
     <label for="inputemail"><b>Email</b></label>
    <input type="mail"  placeholder="Email" name="inputemail"value="<?php echo $email; ?>">
                <span class="error"><?php echo $emailErr; ?></span><br><br>
    <label for="inputphoneno"><b>   Phone no</b></label>
   <input type="phone"  placeholder="   Phone no" name="phoneno" id="inputphoneno" value="<?php echo $phoneno; ?>">
   <span class="error"><?php echo $phonenoErr; ?></span> <br><br>
   <label for="inputdob"><b>DOB</b></label>
   <?php include 'dob.php'?>
   <br><br>
   <label for="inputhobbies"><b>Hobbies</b></label>
    <input type="radio"  name="hobbies" id="inputhobbies">Singing
    <input type="radio"  name="hobbies" id="inputhobbies">Dancing
    <input type="radio"  name="hobbies" id="inputhobbies">Reading
    <input type="radio"  name="hobbies" id="inputhobbies">Cooking
        <input type="radio"  name="hobbies" id="inputhobbies">Playing<br><br>
            <input type="radio"  name="hobbies" id="inputhobbies">Other
   <input type="text"  placeholder="Enter your hobby" name="hobbies" id="inputhobbies"><br><br>
   <label for="inputbio"><b>Bio</b></label>
   <textarea placeholder="Enter bio" name="bio" id="inputbio" rows="8" cols="50"><?php echo $message;?>

   </textarea>   <span class="error"><?php echo $messageErr; ?></span><br><br>
      <input type="submit"   value="Submit">

</form>
</div>
<?php include 'footer.php'  ?>
</body>
</html>
