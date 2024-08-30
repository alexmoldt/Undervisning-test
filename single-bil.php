<?php



while(have_posts()) {
the_post();
the_title();
the_post_thumbnail();
the_content();


}