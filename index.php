
<?php 

$cars = new WP_Query(array(
    "post_type" => "bil"
    
));

while($cars->have_posts()){
    $cars->the_post(); ?>
<h2> <?php the_title(); ?></h2>
    
   <?php }