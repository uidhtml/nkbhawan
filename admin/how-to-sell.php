<?php
  include './../config/root_url.php';
  if(!isset($_SESSION['userName'])){
		header('Location: login.php'); // Dont give space between "Location" and ":"	
  }

  require('./../connection/db_connect.php');
  $pageData = new \stdClass();
  $msg = new \stdClass();
  $query = 'SELECT * FROM how_to_sell';
  $stmt = $con->prepare($query);
  $stmt->execute();
  $result = $stmt->get_result();
  if($result->num_rows > 0){
    while($row = $result->fetch_object()){
      $pageData = $row;
    }
  }
  
  if($_POST){
    $title = $_POST['title'];
    $body = $_POST['body'];
    if(isset($title) && isset($body)){
      $query = 'UPDATE how_to_sell SET title=?, body=?';
      $stmt = $con->prepare($query);
      $stmt->bind_param('ss', $title,$body);
      $rc = $stmt->execute();
			if ( false===$rc ) {
				$pageData->msg = 'Unable to execute the sql query.';
				die('prepare() failed:'. htmlspecialchars($stmt->error));
			}else{
        $query = 'SELECT * FROM how_to_sell';
        $stmt = $con->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0){
          while($row = $result->fetch_object()){
            $pageData = $row;
          }
          $msg->success = 1;
          $msg->text = 'Successfully updated'; 
        }
				mysqli_close($con);
			}
    }
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
        <?php include './php_components/sidebar_menu.php'; ?>
        </div>
        <div class="col p-0">
          <?php include './php_components/main_menu.php';?>
          
          <div class="container-fluid w-auto m-3 p-4 bg-white custom-box-shadow">
          <div class="page-title text-secondary mb-4 d-flex justify-content-between align-items-center">
            <h1 class="m-0 font-weight-bold text-uppercase">How to sell</h1>
            <?php if($msg->text && $msg->success == -1){
                echo $msg;
                echo '<div class="alert m-0 alert-danger">'.$msg->text.'</div>';
              }
              if($msg->text && $msg->success == 1){
                echo '<div class="alert m-0 alert-success">'.$msg->text.'</div>';
              }
            ?>
          </div>
            <div class="form-container">
            <form id="form" action="<?php echo $root_url; ?>/admin/how-to-sell.php" method="post">
              <div class="form-group">
                <label for="pageTitle">Page Title</label>
                  <input type="text" name="title" class="form-control" id="pageTitle" value="<?php echo $pageData->title ?>" aria-describedby="pageTitle">
              </div>
              <div class="form-group">
                <label for="pageDetails">Body of page</label>
                <div id="editorjs"></div>
                <input type="hidden" id="body" name="body">
              </div>
                <div class="button-container text-center"> 
                  <input type="submit" class="btn btn-dark" onclick="Save()" value="Update">
                </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <?php include './../editor/editor.php'; ?>
    <script>
      var pageBodyData = <?php echo $pageData->body; ?>;
      var bodyVal = null;
      var editor= null;
      $(document).ready(function(){
        editorSettings['data'] = pageBodyData;
        $('#body').val(JSON.stringify(pageBodyData));
        editorSettings.data = pageBodyData;
        editor = new EditorJS(editorSettings);
      });

      function Save() {
        editor.save().then((outputData) => {
            var bodyData = JSON.stringify(outputData); 
            $('#body').val(bodyData);          
          }).catch((error) => {
            console.log('Saving failed: ', error)
        }); 
      }
    </script>
  </body>
</html>