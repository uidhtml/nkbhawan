<?php
  include './../../config/root_url.php';
  if(!isset($_SESSION['userName'])){
		header('Location: login.php'); // Dont give space between "Location" and ":"	
  }

  
  $pageData = new \stdClass();
  require('./../../connection/db_connect.php');

  $query = 'SELECT * FROM news_and_events';
  $stmt = $con->prepare($query);
  $stmt->execute();
  $result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no"
    />
    <?php include './../../decoration_component/css.php'; ?>

    <title>Navankar Kala Bhawan: News and Events</title>
  </head>

  <body class="admin-body-bg">
    <div class="container-fluid p-0">
      <div class="row m-0 p-0">
        <div class="col col-2 p-0 vh-100 position-relative custom-box-shadow bg-white sidebar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success py-3 custom-box-shadow">
          <span class="navbar-brand text-light d-flex mr-0 justify-content-between align-items-center w-100">Menu<i class="fa fa-sort-amount-desc" aria-hidden="true"></i></span>
        </nav>
        <?php include './../php_components/sidebar_menu.php'; ?>
        </div>
        <div class="col p-0">
          <?php include './../php_components/main_menu.php';?>
          
          <div class="container-fluid w-auto m-3 p-4 bg-white">
            <div class="news-and-events rounded bg-white custom-box-shadow box-bottom-line">
                <div class="block-title px-4 py-3 rounded">
                  <h2 class="mb-0 font-weight-bold d-flex justify-content-between align-items-center">List of News and events <a class="btn btn-success" href="<?php echo $root_url; ?>/admin/news-and-events.php"><span>View all</span><i class="fa fa-angle-right ml-2" aria-hidden="true"></i></a></h2>
                </div>
                <ul class="news-block p-4">
                  <?php 
                    if($result->num_rows > 0){
                      while($row = $result->fetch_object()){
                        echo '<li class="mb-3 pb-3">
                        <h3 class="title pl-4 text-info"><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i>'.$row->title.'</h3>
                        <p class="pl-4 ml-2 details">'.$row->details.'</p>
                      </li>';
                      }
                    }
                  ?>
                </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>