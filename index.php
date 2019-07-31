<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  
}
/* Add padding to containers */
.container {
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 20px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #252525;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.7;
}

.registerbtn:hover {
  opacity: 1;
}

</style>
</head>
<body>

<form>
  <div class="container">
    <center><h1>Registration Form</h1></center>
    <p><h3>Please fill in All Details</h3></p>
    <hr>
    <label ><b>User Name</b></label>
    <input type="text" placeholder="Enter User name" name="User name" required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Conform Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <div class="container">
    <h1>Personal Detail </h1>
  
    <label ><b>First Name</b></label>
    <input type="text" placeholder="Enter your first name" name="First name" required>

    <label ><b>Last Name</b></label>
    <input type="text" placeholder="Enter your last name" name="last name" required>

    <label ><b>Gender :</b></label>
    <input type="radio" id="gender" name="gender" value="female"/>Female
    <input type="radio" id="gender" name="gender" value="male"/>Male
    <input type="radio" id="gender" name="gender" value="other"/>Other

    <label ><b>D.O.B :</b></label>
    <input type="date" name="bday"><hr>

    <label ><b>Address</b></label>
    <input type="text" placeholder="Enter your address" name="Address" required>

    <label ><b>Country</b></label>
    <input type="text" placeholder="Enter your country name" name="Country" required>
    <label ><b>Phone No.</b></label>
    <input type="text" placeholder="Enter your phone no." name="Phone No." required>
    <label ><b>Status</b></label>
    <input type="radio" id="status" name="status" value="Married"/>Married
    <input type="radio" id="status" name="status" value="Unmarried"/>Unmarried
    <input type="radio" id="status" name="status" value="other"/>Other
    <hr>
    <label ><b>Hobbies</b></label>
    <input type="text" placeholder="your hobbies" name="hobbies" required>
    <label ><b>Talk About Yourself</b></label>
    <input type="text" placeholder="about yourself" name="Talk About Yourself" required>
    <label ><b>Skill</b></label>
    <input type="text" placeholder="your skill" name="skill" required>
    <label ><b>What you think you can do on program </b></label>
    <input type="text" placeholder="write here" name="" required>
     <button type="submit" class="registerbtn">Submit</button>
  </div>
  
 
</form>

</body>
</html>
