
<h1>Hellow wp</h1>
<?php
    while( have_posts() ) : the_post();
    
        the_title();

        the_content();

    endwhile;
?>