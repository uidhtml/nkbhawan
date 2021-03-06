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
    <title>Navankar Kala Bhawan: About</title>
  </head>

  <body>
    <div class="container-fluid p-0 inner-page">
      <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark py-3">
          <a class="navbar-brand" href="#">NK Bhawan</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse d-flex justify-content-end"
            id="navbarNavDropdown"
          >
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link px-3" href="index.html">
                  Home
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link px-3"
                  >About us <span class="sr-only">(current) </span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link px-3" href="#">Art Tools</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle px-3"
                  href="#"
                  id="creativeBoxDropDown"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Color Wings
                </a>
                <div
                  class="dropdown-menu bg-dark"
                  aria-labelledby="creativeBoxDropDown"
                >
                  <a class="dropdown-item text-light px-3 py-2" href="#">
                    Art Organization
                  </a>
                  <a class="dropdown-item text-light px-3 py-2" href="#">
                    Art Founder
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle px-3"
                  href="#"
                  id="servicesDropDown"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Services
                </a>
                <div
                  class="dropdown-menu bg-dark"
                  aria-labelledby="servicesDropDown"
                >
                  <a class="dropdown-item text-light px-3 py-2" href="#">
                    Interior Design
                  </a>
                  <a class="dropdown-item text-light px-3 py-2" href="#">
                    Degital Design
                  </a>
                  <a class="dropdown-item text-light px-3 py-2" href="#">
                    Promotion & event
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3" href="#">Our Art School</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3" href="#">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3" href="how-to-sell.html">How to sell</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3" href="#"
                  ><span class="d-none d-sm-inline">Login / Register</span
                  ><i class="fa fa-sign-out ml-2"></i
                ></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Hero banner starts -->
      <section class="row no-gutters p-0">
        <div class="col-12">
          <div class="inner-hero-banner">
            <img src="images/inner-hero-banner.jpg" />
            <div
              class="banner-details px-4 py-1 text-light position-absolute d-flex align-items-center"
            >
              About <span class="ml-2">Nabhankur Kala Bhawan</span>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero banner ends -->
      <section class="container-fluid bg-light">
        <div class="row">
          <div class="col-9 p-4">
            <!-- About us page  -->
            <h2 class="custom-box-shadow">Welcome</h2>
            <div class="page-details custom-box-shadow">
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book. It has
                survived not only five centuries, but also the leap into
                electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets
                containing Lorem Ipsum passages, and more recently with desktop
                publishing software like Aldus PageMaker including versions of
                Lorem Ipsum.
              </p>
              <h3>Welcome</h3>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book. It has
                survived not only five centuries, but also the leap into
                electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets
                containing Lorem Ipsum passages, and more recently with desktop
                publishing software like Aldus PageMaker including versions of
                Lorem Ipsum.
              </p>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book. It has
                survived not only five centuries, but also the leap into
                electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets
                containing Lorem Ipsum passages, and more recently with desktop
                publishing software like Aldus PageMaker including versions of
                Lorem Ipsum.
              </p>
              <h3>Welcome</h3>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book. It has
                survived not only five centuries, but also the leap into
                electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets
                containing Lorem Ipsum passages, and more recently with desktop
                publishing software like Aldus PageMaker including versions of
                Lorem Ipsum.
              </p>
            </div>
          </div>
          <div class="bg-white col-3 p-3">
            <div class="news-events-wrapper">
              <div class="row no-gutters p-0">
                <div class="col-12 mb-2">
                  <div class="row no-gutters p-0">
                    <div class="col-12 mb-5 custom-box-shadow">
                      <div class="news-and-events">
                        <h2 class="p-3 mb-0 text-light bg-success">
                          <i
                            class="fa fa-newspaper-o mr-2"
                            aria-hidden="true"
                          ></i
                          ><span>News and Events</span>
                        </h2>
                        <ul class="m-0">
                          <li class="p-4 mb-0">
                            <h3 class="mb-3 text-success">
                              <i
                                class="fa fa-hand-o-right mr-2"
                                aria-hidden="true"
                              ></i
                              ><span>Exhebition at Delhi</span>
                            </h3>
                            <p class="pl-3">
                              Galleri Christoffer Egelund is proud to present
                              the exhibition HECATE - ATHER, which is the third
                              solo.
                            </p>
                            <div
                              class="button-container d-flex justify-content-end"
                            >
                              <a class="btn btn-success" href="#"
                                ><span>Know More</span
                                ><i
                                  class="fa fa-angle-right ml-2"
                                  aria-hidden="true"
                                ></i
                              ></a>
                            </div>
                          </li>
                          <!--<li class="p-4">
                                    <h3 class="mb-3 text-success">
                                      <i
                                        class="fa fa-hand-o-right mr-2"
                                        aria-hidden="true"
                                      ></i
                                      ><span>Post your new art</span>
                                    </h3>
                                    <p class="pl-3">
                                      According to traditional alchemy, the world is a
                                      subtle mix of powder, water, air, fire, and ether. The
                                      airbrush, an ancient technique discovered in numerous
                                      pre-historic caves.
                                    </p>
                                    <div
                                      class="button-container d-flex justify-content-end"
                                    >
                                      <a class="btn btn-success" href="#"
                                        ><span>Know More</span
                                        ><i
                                          class="fa fa-angle-right ml-2"
                                          aria-hidden="true"
                                        ></i
                                      ></a>
                                    </div>
                                  </li>-->
                        </ul>
                      </div>
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
