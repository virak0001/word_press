<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
   <header>
     <div class="container">
        <h1>
            <title><?php bloginfo('name') ?></title>
        </h1>
        <span><?php bloginfo('description');?> </span>
     </div>
   </header>

     <div class="container">
         <?php if(have_posts()): ?>
         <?php the_post(); ?>

         <div class="title">
            <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a> 
             Writen by <?php the_author(); ?> Date<?php the_date(); ?>
             <br>
                  <?php if(has_post_thumbnail()): ?>
                  <?php the_post_thumbnail(); ?>
                  <?php else: echo"Not Found" ?>
                  <?php endif; ?>
         </div>
         <div class="main">
             <p><?php the_content();?></p>
         </div>
<?php else:?>
<?php echo "the post no found"; 
endif;
?>
</body>
</html>