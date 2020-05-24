<?php
  require('./config/root_url.php');
  require('./connection/db_connect.php');

  $dataObj = new \stdClass();
  $query = 'SELECT * FROM about_nabhankur';
  $stmt = $con->prepare($query);
  $stmt->execute();
  $result = $stmt->get_result();
  if($result->num_rows){
    $row = $result->fetch_object();
    $dataObj->title = $row->title;
    $dataObj->body = $row->body;
    $dataObj->banner_title = $row->banner_title;
    $dataObj->banner_sub_title = $row->banner_sub_title;
    $dataObj->image = $row->image;
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
    <link rel="stylesheet" href="css/common.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Navankar Kala Bhawan: Homepage</title>
  </head>

  <body>
    <div class="container-fluid p-0 inner-page">
      <?php
        include './php_components/main_menu.php';
      ?>
      <!-- Hero banner starts -->
      <section class="row no-gutters p-0 pt-5">
        <div class="col-12">
          <div class="inner-hero-banner">
            <img src="images/<?php echo $dataObj->image; ?>" />
            <div class="banner-details">
            <?php
              if($dataObj->small_desc){
                echo '<div class="small-desc">'.$dataObj->small_desc.'</div>';
              }
            ?>
              <div class="title text-light">
                <?php echo $dataObj->banner_title; ?> <span class="ml-2"><?php echo $dataObj->banner_sub_title; ?></span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero banner ends -->
      <section class="container-fluid bg-light">
        <div class="row">
          <div class="col-9 p-4">
              <!-- About us page  -->
              <h2 class="custom-box-shadow"><?php echo $dataObj->title ?></h2>
              <div class="page-details custom-box-shadow">
                <?php echo $dataObj->body ?>
              </div>
          </div>
          <div class="bg-white col-3 p-3">
            <div class="news-events-wrapper">
              <div class="row no-gutters p-0">
                <div class="col-12 mb-2">
                  <div class="row no-gutters p-0">
                    <div class="col-12 mb-5 custom-box-shadow">
                      <?php
                        // News and events
                        include './php_components/news_and_events.php';
                      ?>
                    </div>
                    <div class="col custom-box-shadow">
                      <h2 class="p-3 mb-0 text-light bg-dark">
                        <i class="fa fa-picture-o mr-2" aria-hidden="true"></i
                        ><span>Painting of the week</span>
                      </h2>
                      <div class="featured-designs">
                        <ul class="p-3 mb-0">
                          <li><img src="images/latest-img1.jpg" /></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
