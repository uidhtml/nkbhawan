<?php
  include './../config/root_url.php';
  if(!isset($_SESSION['userName'])){
		header('Location: login.php'); // Dont give space between "Location" and ":"	
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no"
    />
    <?php include './../decoration_component/css.php'; ?>

    <title>Navankar Kala Bhawan: Homepage</title>
  </head>

  <body class="admin-body-bg">
    <div class="container-fluid p-0">
      <div class="row m-0 p-0">
        <div class="col col-2 p-0 vh-100 position-relative custom-box-shadow bg-white sidebar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success py-3 custom-box-shadow">
          <span class="navbar-brand text-light d-flex mr-0 justify-content-between align-items-center w-100">Menu<i class="fa fa-sort-amount-desc" aria-hidden="true"></i></span>
        </nav>
          <ul class="block">
            <li><a class="d-flex justify-content-between align-items-center p-3" href="#">Products<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
            <li><a class="d-flex justify-content-between align-items-center p-3" href="#">Sellers<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
            <li><a class="d-flex justify-content-between align-items-center p-3" href="#">Buyers<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
            <li><a class="d-flex justify-content-between align-items-center p-3" href="#">Exhibition registrant<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
            <li><a class="d-flex justify-content-between align-items-center p-3" href="<?php echo $root_url; ?>/admin/how-to-sell.php">How to sell<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
          </ul>
        </div>
        <div class="col p-0">
          <?php include './php_components/main_menu.php';?>
          <div class="page-title bg-white text-secondary m-3 p-4 rounded custom-box-shadow"><h1 class="m-0 font-weight-bold text-uppercase">Dashboard</h1></div>
          <div class="container-fluid w-auto m-3 p-0">
              <ul class="web-status-wrapper">
                <li class="web-status text-primary p-4 custom-box-shadow rounded box-bottom-line">
                  <div class="title">Products</div>
                  <div class="status">
                    <div class="icon"><i class="fa fa-signal" aria-hidden="true"></i></div>
                    <div class="count">200</div>
                  </div>
                </li>
                <li class="web-status text-success p-4 custom-box-shadow rounded box-bottom-line">
                  <div class="title">Sellers</div>
                  <div class="status">
                    <div class="icon"><i class="fa fa-signal" aria-hidden="true"></i></div>
                    <div class="count">340</div>
                  </div>
                </li>
                <li class="web-status text-warning p-4 custom-box-shadow rounded box-bottom-line">
                  <div class="title">Buyers</div>
                  <div class="status">
                    <div class="icon"><i class="fa fa-signal" aria-hidden="true"></i></div>
                    <div class="count">870</div>
                  </div>
                </li>
              </ul>
              <div class="news-and-events rounded bg-white custom-box-shadow box-bottom-line">
                <div class="block-title px-4 py-3 rounded">
                  <h2 class="mb-0 font-weight-bold d-flex justify-content-between align-items-center">News and events <a class="btn btn-success" href="#"><span>View all</span><i class="fa fa-angle-right ml-2" aria-hidden="true"></i></a></h2>
                </div>
                <ul class="news-block p-4">
                  <li class="mb-3 pb-3">
                    <h3 class="title d-flex justify-content-between align-items-center text-info"><span><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i>Exhebition at Delhi</span> <span class="action-wrapper custom-box-shadow"><i class="fa fa-pencil text-primary" aria-hidden="true"></i><i class="fa fa-times text-danger" aria-hidden="true"></i></span></h3>
                    <p class="pl-4 ml-2 details">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed dolor eveniet quo rem totam velit ipsam? Necessitatibus, corrupti consectetur, voluptate fugit officiis, vero fugiat cupiditate eum eveniet aliquid et. Ad?
                    Voluptatibus nemo mollitia.</p>
                  </li>
                  <li class="mb-3 pb-3">
                    <h3 class="title d-flex justify-content-between align-items-center text-info"><span><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i>Nkbhawan announced for online course</span><span class="action-wrapper custom-box-shadow"><i class="fa fa-pencil text-primary" aria-hidden="true"></i><i class="fa fa-times text-danger" aria-hidden="true"></i></span></h3>
                    <p class="pl-4 ml-2 details">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed dolor eveniet quo rem totam velit ipsam? Necessitatibus, corrupti consectetur, voluptate fugit officiis, vero fugiat cupiditate eum eveniet aliquid et. Ad?
                    Voluptatibus nemo mollitia.</p>
                  </li>
                  <li class="mb-3 pb-3">
                    <h3 class="title d-flex justify-content-between align-items-center text-info"><span><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i>Registration open</span><span class="action-wrapper custom-box-shadow"><i class="fa fa-pencil text-primary" aria-hidden="true"></i><i class="fa fa-times text-danger" aria-hidden="true"></i></span></h3>
                    <p class="pl-4 ml-2 details">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed dolor eveniet quo rem totam velit ipsam? Necessitatibus, corrupti consectetur, voluptate fugit officiis, vero fugiat cupiditate eum eveniet aliquid et. Ad?
                    Voluptatibus nemo mollitia.</p>
                  </li>
                </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>