<?php
    $bootstrap = 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css';
    $fontAwesome = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
    $fontFamily = 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400&display=swap';
    $common = 'common.css';
    $style = 'style.css';
?>
<link rel="stylesheet" href="<?Php echo $bootstrap; ?>"/>
<link rel="stylesheet" href="<?Php echo $fontAwesome; ?>"/>
<link rel="stylesheet" href="<?Php echo $fontFamily; ?>"/>
<link rel="stylesheet" href="<?Php echo $root_url.'/css/'.$common; ?>" />
<link rel="stylesheet" href="<?Php echo $root_url.'/css/'.$style; ?>" />