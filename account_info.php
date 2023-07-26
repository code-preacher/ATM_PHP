
<?php
require_once 'library/lib.php';
require_once 'classes/crud.php';
require_once 'classes/auth.php';
?>

<?php
$lib=new Lib;
$validate=new Auth;
$crud=new Crud;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ATM | VERIFY</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="question/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="question/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="question/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="question/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="question/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="question/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="question/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="question/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="question/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="question/css/util.css">
    <link rel="stylesheet" type="text/css" href="question/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background:url(images/atm2.jpg);">
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55"><?php $lib->msg();?><br/>
                <form action="#" method="post" class="login100-form validate-form flex-sb flex-w">
                    <span class="login100-form-title">
                       ACCOUNT INFO
                    </span>
<div class="container">

   <br>   <?php
   $d=$crud->displayOneSpecific('customer','ano',$_GET['ano']);
   ?>
   <p>NAME : <?=$d['name']?></p><br>
   <p>ACCOUNT NUMBER : <?=$d['ano']?></p><br>
   <p>BALANCE :  <?=$lib->money('naira',$d['bal']); ?></p>
  
<br>
</div>
                   
<br/><br/><br/>
                    <div>
                        <a href="main.php?ano=<?=$_GET['ano']?>" class="txt3">
                               <i class="fa fa-money"></i> Back to Main Menu
                            </a>
                            |
                           <a href="index.php" class="txt3">
                               <i class="fa fa-home"></i> Back to Home
                            </a>

                        </div>

                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="question/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="question/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="question/vendor/bootstrap/js/popper.js"></script>
    <script src="question/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="question/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="question/vendor/daterangepicker/moment.min.js"></script>
    <script src="question/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="question/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="question/js/main.js"></script>

</body>
</html>