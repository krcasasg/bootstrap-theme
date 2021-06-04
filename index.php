<?php 
get_header('header');
if(have_posts()){
    while(have_posts()){
        the_post();
        the_title();
        the_post_thumbnail();
        the_content();
    }
}else{
    echo 'no have posts';
}

get_footer('footer');