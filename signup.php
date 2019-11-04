<?php
session_start();

if (isset($_SESSION['psw'])) {
$password = $_SESSION['psw'];	
}
if (isset($_SESSION['psw2'])) {
$password2 = $_SESSION['psw2'];	
}

if (isset($_SESSION['uname'])) {
$uname = $_SESSION['uname'];	
}

if (isset($_SESSION['email'])) {
$email = $_SESSION['email'];	
}

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    $loggedin = "Log Out";	
}else{
    $loggedin = "Log In";
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
        
        
    <div id="pagetitle">SIGN UP</div>
    <div id="pagetitlesub">Freedom With Finance</div>
    
    <form method="POST" action="signup_handler.php">
    <div class="container">
    <label for="uname"></label>
    <input type="text" pattern="^(?=.{8,15}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$" title="Invalid Username" placeholder="Enter Username" name="uname" value= "<?php echo $uname ;?>" required>
        <div class="wrapper">   
            <?php
                if( isset($_SESSION['userError']) ){
                    echo "<div id= warning>";
                    echo $_SESSION['userError'];
                    echo"</div>";
                    unset($_SESSION['userError']);
                }
            ?> 
    </div>
    
    <br>
    <label for="email"></label>
    <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Not a valid Email" placeholder="Enter Email" name="email" value= "<?php echo $email ;?>" required>


    <div class="wrapper">   
            <?php
                if( isset($_SESSION['emailError']) ){
                    echo "<div id= warning>";
                    echo $_SESSION['emailError'];
                    echo"</div>";
                    unset($_SESSION['emailError']);
                }
            ?> 
    </div>

    
    <div class="container">
    <label for="psw"></label>
    <input type="password" placeholder="Enter Password" name="psw" value="<?php echo $password;?>" required>
    <br>
    <input type="password" placeholder="Enter Password again" name="psw2" value= "<?php echo $password2;?>" required>
    </div>
    <div class="wrapper">  
    <?php
        if( isset($_SESSION['pass']) ){
            echo "<div id= warning>";
            echo $_SESSION['pass'];
            echo"</div>";
            unset($_SESSION['pass']);
        }
    ?>  
    </div>
    
    <div class="container">
            <button id="login" type="submit">Sign up</button>
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
