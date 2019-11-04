<?php
session_start();

if (isset($_SESSION['psw'])) {
$password = $_SESSION['psw'];	
}
if (isset($_SESSION['psw2'])) {
$password2 = $_SESSION['psw2'];	
}

if (isset($_SESSION['email'])) {
$email = $_SESSION['email'];	
}

?>
  <html>
   <head>
    <link href="styles/style.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <div class="header">
       <img src="Tracing.svg" alt="Logo" id="logo">
       <h1 id="title">FREEDOM WITH FINANCE</h1>
        <div class="entirenav">
            <div class="topnav">
              <a href="index.php">Home</a>
              <a href="thebasics.php">The Basics</a>
              <a href="travelhacks.php">Travel Hacking</a>
              <a href="tools.php">Tools</a>
              <a class="active" href="login.php">Log Out</a>
            </div>
        </div>
      </div>
   </head>
    <body>
        
        
    <div id="pagetitle">LOG OUT</div>
    <div id="pagetitlesub">Freedom With Finance</div>
    
    <form method="POST" action="login_handler.php">
    <div class="container">
    <label for="email"></label>
    <div id="email">
    <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Not a valid Email" placeholder="Enter Email" name="email" value= "<?php echo $email ;?>" readonly>
    </div>

    <div class="container">
            <button id="login" type="submit">Log Out</button>
    </div>
    </form>
    </body>
        <footer class="footer">
       <div id="footernote">&copy; 2019 FreedomwithFinance.com</div>
        <img src="Tracing.svg" alt="Logo" id="footerlogo">
        <div id="rightfooter">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
             <a href="#" class="fa fa-google"></a>
            
        </div>
    </footer>

</html>
