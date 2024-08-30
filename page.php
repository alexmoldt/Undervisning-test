

<?php 



while(have_posts()) {
    the_post();
    echo paginate_links();
    

 }
