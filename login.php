<?php
session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    $loggedin = "Log Out";	
}else{
    $loggedin = "Log In";
}

if($_SESSION['logged_in'] == true){
    header("Location: logout.php");
    exit;
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
              <a class="active" href="login.php"><?php echo $loggedin;?></a>
            </div>
        </div>
      </div>
   </head>
    <body>
        
        
    <div id="pagetitle">LOGIN</div>
    <div id="pagetitlesub">Freedom With Finance</div>
    
    <form method="POST" action="login_handler.php">
    <div class="container">
    <label for="uname"></label>
    <input type="text" placeholder="Enter Username" name="email" required>
    </div>
  
    <div class="container">
    <label for="psw"></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    </div>
    
        <div class="wrapper">
                <?php
                if( isset($_SESSION['message']) ){
                    echo "<div id= warning>";
                    echo $_SESSION['message'];
                    echo"</div>";
                    unset($_SESSION['message']);
                }
            ?>
    </div>  
    
    <div class="container">
            <button id="login" type="submit">Login</button>
    </div>
    </form>
    <div class="container">
        <div id="signup">
            <a href="signup.php">Don't have an account? Sign up here!</a>
        </div>
    </div>
    
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
