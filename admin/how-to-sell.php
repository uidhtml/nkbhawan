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

    <title>Navankar Kala Bhawan: How to sell</title>
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
          
          <div class="container-fluid w-auto m-3 p-4 bg-white custom-box-shadow">
          <div class="page-title text-secondary mb-4"><h1 class="m-0 font-weight-bold text-uppercase">How to sell</h1></div>
            <div class="form-container">
              <form>
              <div class="form-group">
                <label for="pageTitle">Page Title</label>
                  <input type="email" class="form-control" id="pageTitle" aria-describedby="pageTitle">
              </div>
              <div class="form-group">
                <label for="pageDetails">Body of page</label>
                <div id="editorjs" contenteditable="false"></div>
                <textarea id="output"></textarea>
              </div></form>
                <div class="button-container text-center"> 
                  <button type="submit" class="btn btn-dark" onclick="Save()">Save</button>
                </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include './../editor/editor.php'; ?>
  </body>
</html>