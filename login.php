<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
</head>
<style>
    *{
            text-align: center;
            margin: auto;
            font-size: 36px;
        font-family: monospace;
        }
        body{
      background-image: url("mus.jpg");
      background-repeat: no-repeat;
      background-size:
      font-family: sans-serif;
      color: white
      background-attachment: fixed;
}
.Home{
  padding-bottom: 5px;
  margin: 1px 1px 1px 1px;
  overflow:auto;
  text-decoration: none;
  vertical-align: middle;
    background-color: #282828;
    color: white;
    border: none;
    cursor: pointer;
    width: 10%;
    opacity: 0.9;
  border-radius: 5%;
}
    #bar{
        margin: auto;
        width: 50%;
        top: 50%;
       position:relative;
        text-align: center;
    }
    #formlabel{
        color:white;
            font-family: serif;
    }
   .open-button {
  background-color: #282828;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form */
.form-popup {
     margin: auto;
        width: 20%;
        top: 25%;
       position:relative;
        text-align: center;

}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  margin-top: 100px;

  opacity: 1;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
    font-size: 17px;
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #282828;
  color: red;
    border-radius: 12px;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #242424;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #282828;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 50%;
  margin-top:45px;
  opacity: 0.9;
border-radius: 5%;
}


/* Add some hover effects to buttons */
.form-container .form-popup .btn:hover, .open-button:hover {
  opacity: 1;
}

    h1{
        color:white;
        text-align: left;
        bottom: 0;
        position: absolute;
        right: 0;
        margin: 0;
        font-size: 15px;
        font-family: "Times New Roman", Times, serif;
    }

    .register{
        color:white;

    }


    a {text-decoration: none;
    }

  * {box-sizing: border-box;}

.topnav {
    position: fixed;
    top: 0%;
  overflow: hidden;
  background-color: #282828;
    width: 100%;
    height: 8%;
    color: white;
}
    .topnavcontent{
        position: fixed;
        padding: 10px;
        font-family: monospace;
        font-size: 30px;
    }
.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.login-container{
        padding-right: 10%;
        padding-top: 5px;
    }

.topnav .login-container {
  float: right;
}


.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width: 150px;
}


.topnav .login-container button {
  float: right;
  margin-top: 8px;
  background: #282828;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container button:hover {
  background: #282828;
}

@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #282828;
  }
}
    .submit{
        background-color: #282828;
        border: none;
        font-size: 20px;
        position: fixed;
        right: 3%;
        top: 2.4%;
        color: white;
    }
    .logo{
        font-size: 35px;
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
    p{
       font-size: 29px;
    font-family: sans-serif;
    }
    .boxcontainer{
        height 15%;
        font-size: 20px;
        margin-top: 10px;
        border-bottom: white solid 3px;
    }
    </style>

<body>

    <div class="topnav">
        <div class="topnavcontent">
            <a>
                Rent-A-Car</a>
            <a id="myBtn">About</a>
            <a href="register.php">Register</a>
        </div>
        <div class="login-container">
            <form method="post" action="login.php">
                <?php include('errors.php'); ?>

                <input type="text" placeholder="Username" name="username" >

                <input type="password" placeholder="Password" name="password" class ="boxcontainer" >
        </div>
        <div class="input-group">
            <button type="submit" class="submit" name="login_user">Submit</button>
            </form>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
   <p> The purpose of our website is to solve the issue of time constraints that certain people face when also trying to live a healthy lifestyle. Our website is meant to help find food options that fall within an individual’s diet or nutrition plan. If someone was following a diet that requires reduced carbohydrates like keto, then we would give them suggestions that are near that person’s location and some place that has foods that meets the requirements of their diet. Our service is meant for those that can’t cook and don’t have time to cook.
       <br>
                        This site has been put together by team #4 in Rao Casturi’s software engineering class.
                        Team members: (PM) Zamir Chowdhury, Jalen Walls, Rajshiva Srinivasan, Akmal Nor Hadi, and David Gladney.


                        <br>
                        Help:
                        Contact our technical support at +1 770-722-7019 .
                    </p>
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
