<?php
session_start();
include 'db.php';
// $conn = mysqli_connect("localhost","root","","project");
// if(! $conn)
// {
// die('Connection Failed'.mysql_error());
// }

if(isset($_POST['register']))
{

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $isValid=true;

if($username == "" || $email == "" || $password == "")
{
    $isValid=false;
    // $error_message="Please fill all fields!!!";
    echo "<script> alert('Please Fill all Fields!!!')</script>";


}else if($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)){
     $isValid=false;
     $error_message="Invalid Mail";

}
if($isValid && strlen($password)<6){
    $isValid=false;
}
if($isValid)
{
    $sql="INSERT INTO register(username,email,pass) VALUES('$username' , '$email' , '$password')";
    mysqli_query($con, $sql);
// if(mysqli_query($sql))
// {
// echo "Record successfully inserted";
// }
// else
// {
// echo "There is some problem in inserting record";
// }

// }
} }


?>

<?php
if(isset($_POST['logsubmit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "select * from register where username = '$username' and pass = '$password'";
  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  mysqli_select_db($conn, 'project');
  

  if($count == 1 ){
    echo "<script type='text/javascript'>alert('Connected!!!!')</script>";
    $flag=true;
   
    if($flag=true){ header("Location: index.html");}
   
  }
  else {

  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="loginstyle.css?v=<?php echo time();?>">
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="index.css">
        <script src="script.js"></script>
</head>
<body>
<section id="header">
      <a href="#"><img src="images/logo2.png" alt="" id="logo"></a>
  
      <div>
        <ul id="navbar">
          <li><a href="index.html">Home</a></li>
          <li><a  href="shop.php">Shop</a>
            <div class="submenu">
              <ul>
                <li><a href="shophelmet.php">Helmet</a></li>
                <li><a href="shopjacket.php">Jacket</a></li>
                <li><a href="shopgloves.html">Gloves</a></li>
                <li><a href="#">Toolkit</a></li>
                <li><a href="shopbp.html">Backpack</a></li>
                <li><a href="#">Sealants</a></li>
                <li><a href="#">Goggles</a></li>
              </ul>
            </div>
          </li>
          <li><a  href="contact.html">Contact</a></li>
          <li><a  href="about.html">About</a></li>
          <li><a  class="active" href="login.php">Sign-in/up</a></li>
          <li><a href="cart.html"><i class="fa-solid fa fa-store"></i></a></li>
  
  
        </ul>
      </div>
    </section>
    <div class="login">
        <div class="container">
            <div class="row">
                <!-- <div class="col col-lg-6 col-md-6 col-sm-12">
                    <img src="images/1.jpg" alt="" class="img-fluid" width="100%">
                </div> -->
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <div class="form-login">
                        <div class="form-btn">
                            <span onclick="loginfun()" id="logspan">LogIn</span>
                            <span onclick="registerfun()" id="regspan">Register</span>
                            <hr id="indicator">
                        </div>
                        <div class="log">
                        <form action="" method="post" id="login">
                            <input type="text" placeholder="username" name="username" id="" >
                            <p ></p>
                            <input type="password" placeholder="password" name="password" id=""  >
                            <p></p>
                            <button type="submit" class="btn" name="logsubmit">LogIn</button>
                            <!-- <a href="">Forget Password</a> -->
                        </form>
                      
                        </div>
                        <div class="reg">
                        <form action="" method="post" id="register"  >
                            <input type="text" placeholder="username" oninput="usernameValidate()" name="username" id="username" required="required" >
                            <p id=user-error></p>
                            <input type="email" placeholder="email"  oninput="emailValidate()" name="email" id="email" required="required" >
                            <p  id="email-error"></p>
                            <input type="password" placeholder="password" oninput="passwordValidate()" name="password" id="password" required="required" >
                            <p id="pass-error"></p>
                            <button type="submit" class="btn" name="register" >Register</button>
                            
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <footer class="section-p1">
        <div class="col">
          <img src="images/logob.png" alt=""  id="logo">
          <h4>Contact</h4>
          <p><strong>Address:</strong> 662 Washington DC, street 44, USA</p>
          <p><strong>Phone:</strong> +91-12895736278/ +91-9984927485</p>
          <p><strong>Hours:</strong> 9:00 - 6:00, Mon-Fri</p>
          <div class="follow">
            <h4>Follow us:</h4>
            <div class="icon">
              <i class="fab fa-facebook-f"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-pinterest"></i>
              <i class="fab fa-youtube"></i>
            </div>
          </div>
        </div>
        <div class="col">
          <h4>About</h4>
          <a href="#">About us</a>
          <a href="#">Delivery Information</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Contact us</a>
        </div>
        <div class="col">
          <h4>My Account</h4>
          <a href="#">Sign In</a>
          <a href="#">View cart</a>
          <a href="#">My wishlist</a>
          <a href="#">track My Order</a>
          <a href="#">Help</a>
        </div>
        <div class="col install">
          <h4>Install App</h4>
          <p>Fromm App Store or Google Play</p>
          <div class="row">
            <img  id="logo" src="https://1000logos.net/wp-content/uploads/2021/07/Google-Play-Logo.png" alt="playsotre" >
            <img id="logo" src="images/appstore.png" alt="">
          <p>Seccured Payment Gateways </p>
          <img id="login-play" src="https://static-assets-web.flixcart.com/fk-p-linchpin-web/fk-cp-zion/img/payment-method_69e7ec.svg" alt="secure paymentgayway">
          </div>
    
          <div class="copyright">
            <p>@Ak Website-- Urban Wheelz</p>
          </div>
      </footer>
    

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>
    <script>
        var login=document.getElementById("login");
        var register=document.getElementById("register");
        var indicator=document.getElementById("indicator");

        function registerfun(){
            register.style.transform="translateX(0px)";
            login.style.transform="translateX(-300px)";
            indicator.style.transform="translateX(380px)";
        }
        function loginfun(){
            register.style.transform="translateX(600px)";
            login.style.transform="translateX(600px)";
            indicator.style.transform="translateX(0px)";
        }
    </script>
</body>
</html>