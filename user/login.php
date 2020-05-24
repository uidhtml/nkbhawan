<?php
  require('./../config/root_url.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo $root_url; ?>/css/common.css" />
    <link rel="stylesheet" href="<?php echo $root_url; ?>/css/style.css" />
    <title>Nabhankur Kala Bhawan: User Login</title>
</head>
<body class="login-body-bg">
    <div class="container-fluid no-gutters p-0">
        <div class="position-fixed login-form">
            <h2 class="form-title pb-2">Nabhankur Kala Bhawan</h2>
            <div class="form-container p-4 custom-box-shadow rounded ">
              <form id="userLogin">
                <div class="form-group">
                  <label for="loginUsername">Email Id</label>
                  <input type="email" class="form-control" id="loginUsername" aria-describedby="emailId">
                </div>
                <div class="form-group">
                  <label for="loginPassword">Password</label>
                  <input type="password" class="form-control" id="loginPassword">
                </div>
                <div class="mt-2">
                  <input type="submit" class="btn btn-primary w-100" id="loginButton">
                </div>
                <div class="text-center mt-4 mb-1">
                  <span class="txt1">
                  Forgot
                  </span>
                  <a href="#" class="txt2 hov1">
                  Username / Password?
                  </a>
                </div>
                <div class="text-center">
                  <span class="txt1">
                  Create an account?
                  </span>
                  <a href="#" class="txt2 hov1">
                  Sign up
                  </a>
                </div>
                <input type="hidden" id="logginer" value="user">            
              </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="<?php echo $root_url; ?>/js/script.js"></script>
</body>
</html>