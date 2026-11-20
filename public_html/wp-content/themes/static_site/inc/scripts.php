<?php

wp_enqueue_script("my_main_js", get_template_directory_uri() . "/assets/js/main.js", array(), "1.0", true);
wp_enqueue_script("animations_js", get_template_directory_uri() . "/assets/js/animations.js", array(), "1.0", true);
wp_enqueue_script("slide_js", get_template_directory_uri() . "/assets/js/slide.js", array(), "1.0", true);