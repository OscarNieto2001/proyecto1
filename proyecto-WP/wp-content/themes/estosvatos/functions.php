<?php
add_action('afer_setup_theme','theme_set_up');
function theme_set_up (){
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");

}

function home_body_class($classes){
    if(get_post_type()  == "works" || is_404()){
        $classes [] = 'pf_dark';

    }
    return $classes;
}
add_filter("body_class", "home_body_class");
?>