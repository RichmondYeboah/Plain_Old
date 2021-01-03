
<h1><?php bloginfo('name'); ?></h1>
<h4><?php bloginfo('description'); ?><h4>


<?php

$names = array( 'Jas', 'Boris', 'Harly', 'Liam', 'Moses');
$count = 0;

    while($count < count($names)) {
        echo "<li> reb the engine $names[$count]</li>";
        $count++;
    }

    while(have_posts()) {
        the_post();?>
        <h2> <a href="<?php the_permalink()?>"><?php the_title(); ?> </a></h2>
        <?php the_content(); ?> 
        <hr>
        <?php 
    }

?>


