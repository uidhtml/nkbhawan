<?php
  include './config/root_url.php';
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
    <title>Navankar Kala Bhawan: Homepage</title>
  </head>

  <body>
    <div class="container-fluid p-0">
      <?php
        include './php_components/main_menu.php';
        // Hero banner starts
        include './php_components/hero_banner.php';
        //Hero banner ends
      ?>
      <section class="container-fluid bg-light">
        <div class="row">
          <div class="col-9 p-4">
            <?php
              // Typs of painings
              include './php_components/types_of_paintings.php';
            ?>
          </div>
          <div class="bg-white col-3 p-3">
              <div class="row no-gutters p-0">
                <div class="col-12 mb-2">
                  <div class="row no-gutters p-0">
                  <div class="col-12 mb-5 custom-box-shadow">
                    <?php
                      // News and events
                      include './php_components/news_and_events.php';
                    ?>
                  </div>
                  <div class="col custom-box-shadow box-bottom-line">
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
      </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
