<!DOCTYPE html>
<html>
<head>
<title>Slick's Auto Shop</title>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
</head>

<body>

<div class="wrapper header-border">
    <div class="container header">

        <section class="row">
            <div class="four columns">
                <h1><a href="<?php $url = home_url('/'); echo $url; ?>"><img src="http://www.rachel-knight.com/slicks_autoshop/wp-content/uploads/2015/07/Untitled-1.png"></a></h1>
            </div>

            <div class="eight columns">
                <p><a href="http://www.rachel-knight.com/slicks_autoshop/contact" class="btn">Schedule an Appointment</a></p>
                <p><?php wp_nav_menu(array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ));?></p>
            </div>
        </section>

    </div>
</div>


<!-- END OF HEADER -->