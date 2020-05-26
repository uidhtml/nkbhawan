<?php 
    $directoryURI = $_SERVER['REQUEST_URI'];
    $path = parse_url($directoryURI, PHP_URL_PATH);
    $components = explode('/', $path);
    $last_part = end($components);
    $second_last_part = array_slice($components, -2, 1)[0];
?>
<div class="block">
    <ul class="sidebar-menu">
        <li>
            <a class="d-flex justify-content-between align-items-center px-3 py-2 <?php if($last_part === ''){ echo 'active';} ?>" href="<?php echo $root_url; ?>/admin/">
                Dashboard
                <i class="fa fa-caret-right" aria-hidden="true"></i>
            </a>
        </li>
    </ul>
</div>
<div class="block">
    <h2>About</h2>
    <ul class="sidebar-menu">
        <li>
            <a class="d-flex justify-content-between align-items-center px-3 py-2 <?php if($last_part === 'about-nabhankur.php'){ echo 'active';} ?>" href="<?php echo $root_url; ?>/admin/about-nabhankur.php">
                About NK Bahwan
                <i class="fa fa-caret-right" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a class="d-flex justify-content-between align-items-center px-3 py-2 <?php if($last_part === 'about-color-wings.php'){ echo 'active';} ?>" href="<?php echo $root_url; ?>/admin/about-color-wings.php">
                About Color Wings
                <i class="fa fa-caret-right" aria-hidden="true"></i>
            </a>
        </li>
    </ul>
</div>
<div class="block">
    <h2>General</h2>
    <ul class="sidebar-menu">
        <li>
            <a class="d-flex justify-content-between align-items-center px-3 py-2" href="#">
                Products
                <i class="fa fa-caret-right" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a class="d-flex justify-content-between align-items-center px-3 py-2" href="#">
                Sellers
                <i class="fa fa-caret-right" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a class="d-flex justify-content-between align-items-center px-3 py-2" href="#">
                Buyers
                <i class="fa fa-caret-right" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a class="d-flex justify-content-between align-items-center px-3 py-2" href="#">
                Exhibition registrant
                <i class="fa fa-caret-right" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a class="d-flex justify-content-between align-items-center px-3 py-2 <?php if($last_part === 'how-to-sell.php'){ echo 'active';} ?>" href="<?php echo $root_url; ?>/admin/how-to-sell.php">
                How to sell
                <i class="fa fa-caret-right" aria-hidden="true"></i>
            </a>
        </li>
    </ul>
</div>
<div class="block">
    <h2>News and events</h2>
    <ul class="sidebar-menu">
        <li>
            <a class="d-flex justify-content-between align-items-center px-3 py-2 <?php if($second_last_part === 'news-and-events' && $last_part === 'all.php'){ echo 'active';} ?>" href="<?php echo $root_url; ?>/admin/news-and-events/all.php">
                All News
                <i class="fa fa-caret-right" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a class="d-flex justify-content-between align-items-center px-3 py-2 <?php if($second_last_part === 'news-and-events' && $last_part === 'add.php'){ echo 'active';} ?>" href="<?php echo $root_url; ?>/admin/#">
                Add News
                <i class="fa fa-caret-right" aria-hidden="true"></i>
            </a>
        </li>
    </ul>
</div>
<div class="block">
    <h2>Art tools</h2>
    <ul class="sidebar-menu">
        <li>
            <a class="d-flex justify-content-between align-items-center px-3 py-2 <?php if($second_last_part === 'art-tools' && $last_part === 'all.php'){ echo 'active';} ?>" href="<?php echo $root_url; ?>/admin/#">
                All Tools
                <i class="fa fa-caret-right" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a class="d-flex justify-content-between align-items-center px-3 py-2 <?php if($second_last_part === 'art-tools' && $last_part === 'add.php'){ echo 'active';} ?>" href="<?php echo $root_url; ?>/admin/#">
                Add Tool
                <i class="fa fa-caret-right" aria-hidden="true"></i>
            </a>
        </li>
    </ul>
</div>