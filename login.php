<?php 

    require_once("dbconnect.php");
    require_once("functions.php");
    //COMPROBACIÓN DEL PASSWORD
    if (isset($_POST["loginUser"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
        $mensaje="";
        if(!empty($_POST["email"]) && !empty($_POST["password"])){
            $sql="SELECT * FROM users WHERE usemail='".$_POST["email"]."'";
            if ($resultado = $connect->query($sql)) {
                $reg = $resultado->fetch_assoc();
                //Es lo mismo que: $reg = mysqli_fetch_assoc($resultado);
                //$mensaje.=$reg["usemail"]." ".$reg["uspassword"];
                if(comprobarPassword($_POST["password"],$reg["uspassword"])){
                    //$mensaje.="<div class='msg-ok'>El password es correcto.</div>";
                    setcookie("yana_user_cookie", $_POST["email"], time() + (86400 * 30), "/"); // 86400 = 1 day              
                    session_start();
                    $_SESSION["username"]=$reg["usname"];
                    header("Status: 301 Moved Permanently");
                    header("Location: http://localhost/yana");
                    exit;
                }else{
                    $mensaje.= "<div class='msg-error'>El password no es correcto.<div>";
                }
            }else{
                $mensaje.= "<div class='msg-error'>Error: " . $connect->errno . ". ".$sql."<br>" . $connect->error."</div>";
            }
        }else{
            $mensaje.="<div class='msg-error'>Rellene todos los datos para loguearse.</div>";
        }
    }

?>


<?php include("head.php");?>

<!-- ======== @Region: body ======== -->

<body class="fullscreen-centered page-login">
  <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
  <div id="background-wrapper" class="benches" data-stellar-background-ratio="0.8">

    <!-- ======== @Region: #content ======== -->
    <div id="content">
      <div class="header">
        <div class="header-inner">
          <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
     
         
      <div class="row">
            <div class="col-md-12" style="vertical-align:middle">
                <!-- Contact Section Heading -->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Acceso a tu cuenta</h2>

                <!-- Icon Divider -->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="divider-custom-line"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img class="" src="img/avatar_contact.jpg" alt="" style="max-width:250px;">
            </div>    
            <div class="col-md-8">
                
                <?php if(isset($mensaje)) echo "<p>".$mensaje."</p>";?>
                <div class="col-12">

            <div class="panel-body">
            <form name="sentLogin" id="activationLogin" novalidate="novalidate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
               <fieldset>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-fw fa-envelope"></i></span>
                      <input type="text" class="form-control" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
                      <input type="password" class="form-control" placeholder="Password">
                    </div>
                  </div>
                  <div class="checkbox">
                    <label>
                        <input name="remember" type="checkbox" value="Remember Me">
                        Remember Me
                      </label>
                  </div>
                  <input class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
                </fieldset>
              </form>
              <p class="m-b-0 m-t">Not signed up? <a href="register.php">Sign up here</a>.</p>
              <div class="credits">
           
          </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
  </div>
  <br><br><br>
  <?php include("footer.php");?>
