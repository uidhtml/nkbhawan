<?php
  include './../config/root_url.php';
  if(!isset($_SESSION['userName'])){
		header('Location: login.php'); // Dont give space between "Location" and ":"	
  }

  require('./../connection/db_connect.php');
  $returnObj = new \stdClass();
  $query = 'SELECT * FROM how_to_sell';
  $stmt = $con->prepare($query);
  $stmt->execute();
  $result = $stmt->get_result();
  if($result->num_rows > 0){
    while($row = $result->fetch_object()){
      $returnObj = $row;
    }
  }
  
  if($_POST){
    //print_r($_POST);
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
              <form action="<?php echo $root_url; ?>/admin/how-to-sell.php" method="post">
              <div class="form-group">
                <label for="pageTitle">Page Title</label>
                  <input type="text" name="title" class="form-control" id="pageTitle" value="<?php echo $returnObj->title ?>" aria-describedby="pageTitle">
              </div>
              <div class="form-group">
                <label for="pageDetails">Body of page</label>
                <div id="editorjs"></div>
                <input type="text" id="body" value="<?php echo gettype($returnObj->body); ?>" name="body">
              </div>
                <div class="button-container text-center"> 
                  <input type="submit" class="btn btn-dark" onclick="Save()" value="Save">
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
      //var myCustomData = {"time":1550476186479,"blocks":[{"type":"heading","data":{"text":"Editor.js","level":2}},{"type":"paragraph","data":{"text":"Hey. Meet the new Editor. On this page you can see it in action — try to edit this text. Source code of the page contains the example of connection and configuration."}},{"type":"heading","data":{"text":"Key features","level":3}}],"version":"2.8.1"}
      var myCustomData = <?php echo $returnObj->body; ?>;
      var bodyVal = null; 
      $(document).ready(function(){
        bodyVal = $('#body').val();
        console.log(bodyVal);
        console.log(myCustomData);

      
      var editor = new EditorJS({
        holder : 'editorjs',
        logLevel: 'ERROR',
        tools: {
          heading: {
          class: Header,
          inlineToolbar : true
          },
          linkTool: {
          class: LinkTool,
          config: {
            endpoint: 'http://localhost:8008/fetchUrl', // Your backend endpoint for url data fetching
          }
          },
          image: SimpleImage,
          image: {
            class: ImageTool,
            config: {
                endpoints: {
                byFile: 'http://localhost:8008/uploadFile', // Your backend file uploader endpoint
                byUrl: 'http://localhost:8008/fetchUrl', // Your endpoint that provides uploading by Url
              }
            }
          },
          list: {
            class: List,
            inlineToolbar: true,
          },
          quote: Quote,
          paragraph: {
            class: Paragraph,
            inlineToolbar: true,
          },
          delimiter: Delimiter,
          table: {
            class: Table,
          },
          warning: Warning,
          personality: {
            class: Personality,
            config: {
              endpoint: 'http://localhost:8008/uploadFile'  // Your backend file uploader endpoint
            }
          }
        },
        autofocus: true,
        minHeight: 300,
        data: myCustomData
      });
    });

      function Save() {
        editor.save().then((outputData) => {
            var output = document.getElementById('output');
            output.value = JSON.stringify(outputData);
            console.log(outputData);
          }).catch((error) => {
            console.log('Saving failed: ', error)
        }); 
      }
    </script>
  </body>
</html>