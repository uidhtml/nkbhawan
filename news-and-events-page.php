<?php
  require('./config/root_url.php');
  require('./connection/db_connect.php');

  $dataObj = new \stdClass();
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
    <?php include './decoration_component/css.php'; ?>
    <title>Navankar Kala Bhawan: News and events</title>
  </head>

  <body>
    <div class="container-fluid p-0">
      <?php
        include './php_components/nabhankur_main_menu.php';
      ?>
      <!-- Hero banner starts -->
      <section class="row no-gutters p-0 pt-5">
        <div class="col-12">
          <div class="inner-hero-banner">
            <img src="<?php echo $root_url; ?>/images/inner-hero-banner.jpg" />
            <div class="banner-details">
              <div class="title text-light">
                Upcoming <span class="ml-2">News and Events</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero banner ends -->
      <section class="container-fluid bg-light">
        <div class="row">
          <div class="col-9 p-4 inner-page">
              <!-- Page details  -->
              <div class="news-and-events rounded bg-white custom-box-shadow box-bottom-line">
                <div class="block-title px-4 py-3 rounded">
                  <h2 class="mb-0 font-weight-bold d-flex justify-content-between align-items-center">All updates from NK Bhawan</h2>
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
          <div class="bg-white col-3 p-3">
            <div class="news-events-wrapper">
              <div class="row no-gutters p-0">
                <div class="col-12 mb-2">
                  <div class="row no-gutters p-0">
                    <div class="col custom-box-shadow">
                      <h2 class="p-3 mb-0 text-light bg-dark">
                        <i class="fa fa-picture-o mr-2" aria-hidden="true"></i
                        ><span>Painting of the week</span>
                      </h2>
                      <div class="featured-designs">
                        <ul class="p-3 mb-0">
                          <li><img src="<?php echo $root_url; ?>/images/latest-img1.jpg" /></li>
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

    <?php include './decoration_component/js.php'; ?>
  </body>
</html>
