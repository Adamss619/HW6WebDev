<?php
session_start();
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
              <a class="active" href="thebasics.php">The Basics</a>
              <a href="travelhacks.php">Travel Hacking</a>
              <a href="tools.php">Tools</a>
              <a href="login.php"><?php echo $loggedin;?></a>
            </div>
        </div>
      </div>
   </head>
    <body>
        
        
            <div id="pagetitle">THE BASICS</div>
    <div id="pagetitlesub">Freedom With Finance</div>
    
    <div class="articlerow">
       <div class="article">
           <div class="articelTitle"><img class="articlephoto" src="/Tracing.svg" alt="">INVESTING</div>
<!--           <img class="articlephoto" src="/Tracing.svg" alt="">-->
       </div>
       <div class="article">
           <div class="articelTitle">
           <img class="articlephoto" src="/Tracing.svg" alt="">
           BUDGETING
           </div>
           
       </div>
       <div class="article">
           <div class="articelTitle"><img class="articlephoto" src="/Tracing.svg" alt="">CREDIT CARDS AND CREDIT</div>
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
