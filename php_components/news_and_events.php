<?php
  $query = 'SELECT * FROM news_and_events';
  $stmt = $con->prepare($query);
  $stmt->execute();
  $result = $stmt->get_result();
?>
<div class="news-and-events box-bottom-line">
    <div class="block-title px-4 py-3 rounded">
        <h2 class="mb-0 font-weight-bold d-flex justify-content-between align-items-center">
            <span><i
            class="fa fa-newspaper-o mr-2"
            aria-hidden="true"
            ></i
            >News and Events</span><a class="btn btn-success btn-sm" href="<?php echo $root_url; ?>/news-and-events-page.php"><span>Show all</span><i class="fa fa-angle-right ml-2" aria-hidden="true"></i></a>
        </h2>
    </div>
    <ul class="news-block p-4">
        <?php
            if($result->num_rows){
                while($row = $result->fetch_object()){
                    echo '
                    <li class="mb-3 pb-3">
                        <h3 class="title pl-4 text-info">
                            <i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i>
                            '.$row->title.'
                        </h3>
                        <p class="pl-4 ml-2 details">'.$row->details.'</p>
                        <div class="button-container d-flex justify-content-end">
                            <a class="btn btn-success btn-sm" href="#">
                                <span>More</span>
                                <i class="fa fa-angle-right ml-2" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>';
                }
            }
        ?>
    </ul>
</div>