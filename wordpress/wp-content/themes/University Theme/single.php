<?php

while(have_posts()) {
    the_post();?>
    <h3><?php the_title(); ?> </a></h3>
    <?php the_content(); ?> 
    <?php 
}

?>