<?php 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}


function wpb_hook_javascript() {
    ?>
    <script>

        const bouton = document.querySelector("#bouton");
        bouton.addEventListener("click", function(){
            console.log("mon js est enfin liée");
        });

    </script>
    <?php
}
add_action('wp_footer', 'wpb_hook_javascript');