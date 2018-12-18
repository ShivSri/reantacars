<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
<link rel="stylesheet" href="register.css">
</head>
    <style>
      *{
  margin: auto;
  padding: 0px;
text-align: center;
        font-family: monospace
}
body{
  font-size: 120%;
  background-image: url("lam.jpg");
   background-repeat: no-repeat;
   background-size: cover;
   font-family: sans-serif;
   color: white
   background-attachment: fixed;
    background-color: white;
}
.header{
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  opacity: 0.8px;
  text-align: center;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
  top: 8%;
    position: fixed;
    left:33.8%;
}
form{
    border: none;
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  opacity: 0.8px;
    position: absolute;
    text-align: center;
    left: 33.8%;
    bottom: 20%;
    top: 25%;
    color: black;
}
.input-group label{
  display: block;
  text-align: center;
  margin: 3px;
  color: white
}
.input-group input{
  width: 93%;
  height: 30px;
  opacity: 0.8px;
  color: black;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn{
  padding: 10px;
  font-size: 15px;
  color: white;
  border: none;
  background: black;
  border-radius: 5px;
opacity: 0.9px;
}

.input-group{
  margin: 10px 0px 10px 0px;
    text-align: center;
}
.error{
  width: 92%;
  margin 0px auto;
  padding 10px;
  border: 1px solid #a94442;
  color: #a94442;
  background: #f2dede;
  border-radius: 5px;
  text-align: left;
}
.set{
        color: white;
        z-index: 1;;
        position: fixed;
        top:1%;
        text-align: center;
        left:45%;
        }
    a:visited {
    color: white;
}
    a:hover, button:hover {
   color: antiquewhite;
}
        .topnav {
    position: fixed;
    top: 0%;
  overflow: hidden;
  background-color: #282828;
    width: 100%;
    height: 8%;
    color: white;
}
             .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #282828;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    font-size: 12px;
    font-family: sans-serif;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

        #myBtn{
            position: fixed;
            z-index: 1;
            top: 3%;
            left: 5%;
            color: white;
        }
        {text-decoration: none;
    }
    </style>

<body>

    <div class="topnav">
        <div class="topnavcontent">

        </div>
    </div>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>

    <!-- <a id="myBtn">Survey Questions</a> -->

    <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

    <div class="input-group">
      <label>What's your Name?</label>

      <input type="text" name="goal">
    </div>
<div class="input-group">
    <label>What's your gender?</label>
      <input value="Male" type="radio" name="gender">Male<input  value="Female" type="radio" name="gender">Female<input value="other" type="radio" name="gender">other

  </div>
  <div class="input-group">
    <label>How do you commute?</label>
      <input value="Car" name="healthy" type="radio">Car
      <input value="Train" name="healthy" type="radio">Train
      <input value="Bus" name="healthy" type="radio">Bus
      <input value="Walk" name="healthy" type="radio">Walk
  </div>
    <div class="input-group">
    <label> What is your purpose for living healthy?</label>
    <input type="text" name="weight">
  </div>
  <div class="input-group">
    <label>Roughly how many calories do you consume?</label>
    <input type="text" name="height">
  </div>
  <div class="input-group">
    <label>Do you eat a lot of Junk food?</label>
      <input value="Yes" type="radio" name="age">Yes<input  value="No" type="radio" name="age">No
  </div>
  <div class="input-group">
    <label>Are you following any Diets?</label>
      <input value="Yes" type="radio" name="bmi">Yes<input  value="No" type="radio" name="bmi">No
  </div>
  <div class="input-group">
    <label>How many times do you cook at home</label>
    <input type="text" name="allergy">
  </div>
  </div>
        </div>
            <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
