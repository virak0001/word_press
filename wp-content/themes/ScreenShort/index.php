<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet" type="text/css" href="http://website.com/css/custom-style.css?ver=<?php echo rand(111,999)?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <header>
 
        <h1><?php bloginfo('name') ?><br></h1>
        <span><?php bloginfo('description') ?></span>
        <?php wp_nav_menu(); ?>

   </header>

   <div class="container mt-5">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): ?>
            <?php the_post(); ?>
            <div class="title">
                <a href="<?php the_permalink() ?>"><h3><?php the_title();?></h3></a>
            </div>
            <h4 class="text-center">
                Writen by <?php the_author();?> Date <?php the_date(); ?>
            </h4>
                
            <h2>

            <?php
            
                $caters = get_the_category();
                $output = "";
                if($caters){
                    foreach($caters as $cater){
                        $output = '<a href="'.get_category_link($cater->term_id).'">'.$cater->cat_name.'</a>';
                    }
                    echo $output;
                }
            ?>
            </h2>
            <div class="main">
                <p><?php the_excerpt();?></p>
            </div>
                 <a  class="btn btn-outline-info text-center" href="<?php the_permalink()?>">Read More>></a>

            
            <?php endwhile ?>
            <?php endif ?> 
        </div>
        <div class="col-1"></div>
    </div>
  
</body>
</html>