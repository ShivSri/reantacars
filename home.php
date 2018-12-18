<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
    <style>

    #map {
      height: 100%;
    }
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
        background-color: #282828;
        color: white;

    }
    table {
      font-size: 12px;
    }
    #map {
      width: 83%;;
      height: 85%;;

    }
    #listing {
      position: absolute;
      width: 450px;
      height: 470px;
      overflow: auto;
          overflow-x: auto;
      overflow-x: auto;
      overflow-x: auto;
      right: -30px;
      top: 52px;
      cursor: pointer;
      overflow-x: hidden;
  }
    #findhotels {
  position: absolute;
  text-align: right;
  width: 748px;
  font-size: 25px;
  padding: 1px;
  z-index: 5;
  background-color: transparent;
  color: white;
  top: 7px;
  }
  #locationField {
  position: absolute;
  width: 190px;
  height: 1px;
  left: 768px;
  top: 7px;
  z-index: 5;
  background-color: #282828;
  margin-right: 50px;
  }
    #controls {
    position: absolute;
    left: 966px;
    width: 143px;
    height: 12px;
    top: 7px;
    z-index: 5;
    background-color: #282828;
    margin-right: 50px;
  }
    #autocomplete {
      width: 100%;

    }
    #country {
      width: 100%;
    }
    .placeIcon {
      width: 20px;
      height: 34px;
      margin: 4px;
    }
    .hotelIcon {
      width: 24px;
      height: 24px;
    }
    #resultsTable {
      border-collapse: collapse;
      width: 450px;

    }
    #rating {
      font-size: 13px;
      font-family: Arial Unicode MS;
    }
    .iw_table_row {
      height: 18px;
    }
    .iw_attribute_name {
      font-weight: bold;
      text-align: right;
    }
    .iw_table_icon {
      text-align: right;
    }
    #info-content{
      color: black;
    }
  .signout {
      color: white;
      text-align: center;
      bottom: 20;
      position: absolute;
      left: 65px;
      margin: 0;
      font-size: 20px;
      font-family: "Times New Roman", Times, serif;
  }

 .overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-x: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 0px;
    font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
.menu{
            z-index: 1;
          position: fixed;
        top: 1.8%;
    left: 1.5%;
    transform: scale(2);
        }
.display{
text-align: right;
        }

 .logout{
        background-color: #282828;
        border: none;
        font-size: 20px;
        position: fixed;
        right: 3%;
        top: 1.5%;
        color: white;
    }

    .button {
      background-color: #39b3d7;
      border: none;
      color: white;
      padding: 15px 250px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      margin: 280px 22px;
          margin-left: 22px;
      cursor: pointer;
      margin-left: 120px;
  }


    </style>
<body>
<div class="content">
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <?php  if (isset($_SESSION['username'])) : ?>
    	<p class="display" style="color:white;">Welcome <strong><?php echo $_SESSION['username']; ?>!</strong></p>

    <?php endif ?>

    <button class="button button3" onclick="location.href='prepay.php'">Parking Detail</button>
  <button class="button button4" onclick="location.href='index.php'"> Rent A Car and Parking </button>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
      <a href="index.php">Rent Car</a>
      <a href="prepay.php">Get a Parking</a>
      <a href="home.php?logout='1'" >Logout</a>
    </div>
    </div>
<span class="menu" style="font-size:15px;cursor:pointer" onclick="openNav()">&#9776;</span>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
</body>
</html>
