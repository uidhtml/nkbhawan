<?php
  require('./../config/root_url.php');
  require('./../connection/db_connect.php');

  $dataObj = new \stdClass();
  $query = 'SELECT * FROM about_nabhankur';
  $stmt = $con->prepare($query);
  $stmt->execute();
  $result = $stmt->get_result();
  if($result->num_rows){
    $row = $result->fetch_object();
    $dataObj = $row;
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

  <body>
    <div class="container-fluid p-0">
      <?php
        include './../php_components/nabhankur_main_menu.php';
      ?>
      <!-- Hero banner starts -->
      <section class="row no-gutters p-0 pt-5">
        <div class="col-12">
          <div class="inner-hero-banner">
            <img src="<?php echo $root_url; ?>/images/<?php echo $dataObj->image; ?>" />
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
          <div class="col-9 p-4 inner-page">
              <!-- About us page  -->
              <h2 class="page-title custom-box-shadow"><?php echo $dataObj->title ?></h2>
              <div class="page-details custom-box-shadow"></div>
          </div>
          <div class="bg-white col-3 p-3">
            <div class="news-events-wrapper">
              <div class="row no-gutters p-0">
                <div class="col-12 mb-2">
                  <div class="row no-gutters p-0">
                    <div class="col-12 mb-5 custom-box-shadow">
                      <?php
                        // News and events
                        include './../php_components/news_and_events.php';
                      ?>
                    </div>
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

    <?php include './../decoration_component/js.php'; ?>
    
    <script>
      var EditorJsJson = <?php echo $dataObj->body; ?>;      
      $(document).ready(function(){
        $('.page-details').html(exportJsonToHTML());
      })
    </script>
  </body>
</html>
