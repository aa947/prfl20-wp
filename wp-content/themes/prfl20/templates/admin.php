<?php

function add_admin_options (){
    add_menu_page('Bio', 'Bio', 'manage_options', 'bio', 'theme_init', 'dashicons-id', 6);
    add_submenu_page('bio', 'bio', 'bio', 'manage_options', 'bio', 'theme_init' );

    add_menu_page('Top', 'Top', 'manage_options', 'top', 'top_init', 'dashicons-arrow-up-alt', 6);
    add_submenu_page('top', 'top', 'top', 'manage_options', 'top', 'top_init' );

    add_menu_page('projects', 'projects', 'manage_options', 'projects', 'projects', 'dashicons-editor-code', 6);
    
    add_submenu_page('projects', 'Add new project', 'Add new project', 'manage_options', 'add-new-project', 'add_new_project');

    add_menu_page('certificates', 'certificates', 'manage_options', 'certificates', 'certificates', 'dashicons-welcome-learn-more', 6);

    add_submenu_page('certificates', 'Add new certificate', 'Add new certificate', 'manage_options', 'add-new-certificate', 'add_new_certificate');

    add_menu_page('education', 'education', 'manage_options', 'education', 'education', 'dashicons-book
    ', 6);

    add_submenu_page('education', 'Add new college', 'Add new college', 'manage_options', 'add-new-college', 'add_new_college');

    add_menu_page('skills', 'skills', 'manage_options', 'skills', 'skills', 'dashicons-hammer', 6);

    add_submenu_page('skills', 'Add new skill', 'Add new skill', 'manage_options', 'add-new-skill', 'add_new_skill');


}

add_action('admin_menu', 'add_admin_options');
add_action('admin_init', 'theme_settings');
add_action('admin_init', 'top_settings');

function top_settings (){

    register_setting( 'top-data-group', 'yourLogo');
    register_setting( 'card1-group', 'card1_text');
    register_setting( 'card1-group', 'card1_number');
    register_setting( 'card1-group', 'card1_fontAwesome');

    register_setting( 'card2-group', 'card2_text');
    register_setting( 'card2-group', 'card2_number');
    register_setting( 'card2-group', 'card2_fontAwesome');

    register_setting( 'card3-group', 'card3_text');
    register_setting( 'card3-group', 'card3_number');
    register_setting( 'card3-group', 'card3_fontAwesome');

    register_setting( 'card4-group', 'card4_text');
    register_setting( 'card4-group', 'card4_number');
    register_setting( 'card4-group', 'card4_fontAwesome');



    add_settings_section('top-options', 'Top Information', 'top_options', 'top-data' );
    add_settings_section('card1', 'Card 1', 'card1_options', 'top-data' );
    add_settings_section('card2', 'Card 2', 'top_options', 'top-data' );
    add_settings_section('card3', 'Card 3', 'top_options', 'top-data' );
    add_settings_section('card4', 'Card 4', 'top_options', 'top-data' );



    add_settings_field('yourLogo', 'Logo Image URL:', 'yourLogoImage_callback', 'top-data', 'top-options'  );

    add_settings_field('card1_text', 'card 1 text:', 'card1_text_callback', 'top-data', 'card1'  );
    add_settings_field('card1_number', 'card 1 number:', 'card1_number_callback', 'top-data', 'card1'  );
    add_settings_field('card1_fontAwesome', 'card 1 Font Awesome class:', 'card1_fontAwesome_callback', 'top-data', 'card1'  );

    add_settings_field('card2_text', 'card 2 text:', 'card2_text_callback', 'top-data', 'card2'  );
    add_settings_field('card2_number', 'card 2 number:', 'card2_number_callback', 'top-data', 'card2'  );
    add_settings_field('card2_fontAwesome', 'card 2 Font Awesome class:', 'card2_fontAwesome_callback', 'top-data', 'card2'  );


    add_settings_field('card3_text', 'card 3 text:', 'card3_text_callback', 'top-data', 'card3'  );
    add_settings_field('card3_number', 'card 3 number:', 'card3_number_callback', 'top-data', 'card3'  );
    add_settings_field('card3_fontAwesome', 'card 3 Font Awesome class:', 'card3_fontAwesome_callback', 'top-data', 'card3'  );

    add_settings_field('card4_text', 'card 4 text:', 'card4_text_callback', 'top-data', 'card4'  );
    add_settings_field('card4_number', 'card 4 number:', 'card4_number_callback', 'top-data', 'card4'  );
    add_settings_field('card4_fontAwesome', 'card 4 Font Awesome class:', 'card4_fontAwesome_callback', 'top-data', 'card4'  );
}


function card1_text_callback (){
    $preText =  esc_attr( get_option('card1_text'));
     echo ' <input type="text" name="card1_text" placeholder="card text" size="50" value="'.$preText. '" > ';
 }

 function card1_number_callback (){
    $preText =  esc_attr( get_option('card1_number'));
     echo ' <input type="text" name="card1_number" placeholder="card number" size="50" value="'.$preText. '" > ';
 }

 function card1_fontAwesome_callback (){
    $preText =  esc_attr( get_option('card1_fontAwesome'));
     echo ' <input type="text" name="card1_fontAwesome" placeholder="card font awesome class" size="50" value="'.$preText. '" > ';
 }


 
function card2_text_callback (){
    $preText =  esc_attr( get_option('card2_text'));
     echo ' <input type="text" name="card2_text" placeholder="card text" size="50" value="'.$preText. '" > ';
 }

 function card2_number_callback (){
    $preText =  esc_attr( get_option('card2_number'));
     echo ' <input type="text" name="card2_number" placeholder="card number" size="50" value="'.$preText. '" > ';
 }

 function card2_fontAwesome_callback (){
    $preText =  esc_attr( get_option('card2_fontAwesome'));
     echo ' <input type="text" name="card2_fontAwesome" placeholder="card font awesome class" size="50" value="'.$preText. '" > ';
 }



 
function card3_text_callback (){
    $preText =  esc_attr( get_option('card3_text'));
     echo ' <input type="text" name="card3_text" placeholder="card text" size="50" value="'.$preText. '" > ';
 }

 function card3_number_callback (){
    $preText =  esc_attr( get_option('card3_number'));
     echo ' <input type="text" name="card3_number" placeholder="card number" size="50" value="'.$preText. '" > ';
 }

 function card3_fontAwesome_callback (){
    $preText =  esc_attr( get_option('card3_fontAwesome'));
     echo ' <input type="text" name="card3_fontAwesome" placeholder="card font awesome class" size="50" value="'.$preText. '" > ';
 }


 
function card4_text_callback (){
    $preText =  esc_attr( get_option('card4_text'));
     echo ' <input type="text" name="card4_text" placeholder="card text" size="50" value="'.$preText. '" > ';
 }

 function card4_number_callback (){
    $preText =  esc_attr( get_option('card4_number'));
     echo ' <input type="text" name="card4_number" placeholder="card number" size="50" value="'.$preText. '" > ';
 }

 function card4_fontAwesome_callback (){
    $preText =  esc_attr( get_option('card4_fontAwesome'));
     echo ' <input type="text" name="card4_fontAwesome" placeholder="card font awesome class" size="50" value="'.$preText. '" > ';
 }








function top_options(){
   // echo 'Change Data for The Top Section';
}

function card1_options(){
     echo 'First From Left';
 }

function yourLogoImage_callback (){
    $preText =  esc_attr( get_option('yourLogoImage'));
     echo ' <input type="text" name="yourLogoImage" placeholder="your Logo Image URL" size="50" value="'.$preText. '" > <p> use external or internal image url , preferred (300 * 50 px) </p>'   ;
 }



function theme_settings (){
    //2- register setteing
    //register_setting( 'home-page-options-group', 'blackBox');
    register_setting( 'home-page-options-group', 'yourName');
    register_setting( 'home-page-options-group', 'yourRole');
    register_setting( 'home-page-options-group', 'yourBio');
    register_setting( 'home-page-options-group', 'yourLocation');
    register_setting( 'home-page-options-group', 'yourLinkedin');
    register_setting( 'home-page-options-group', 'yourTwitter');
    register_setting( 'home-page-options-group', 'yourFacebook');
    register_setting( 'home-page-options-group', 'yourGithub');
    register_setting( 'home-page-options-group', 'yourImage');




    add_settings_section('bio-options', 'Bio Information', 'homePage_options', 'theme-options-settings' );


    //1-add field
   // add_settings_field('blackBox-text', 'Text below slider', 'blackBox_callback', 'theme-options-settings', 'bio-options'  );
    add_settings_field('your-name', 'Your Name:', 'yourName_callback', 'theme-options-settings', 'bio-options'  );
    add_settings_field('yourRole', 'Your Role:', 'yourRole_callback', 'theme-options-settings', 'bio-options'  );
    add_settings_field('yourBio', 'Your Bio:', 'yourBio_callback', 'theme-options-settings', 'bio-options'  );
    add_settings_field('yourLocation', 'Your Location:', 'yourLocation_callback', 'theme-options-settings', 'bio-options'  );
    add_settings_field('yourTwitter', 'Twitter:', 'yourTwitter_callback', 'theme-options-settings', 'bio-options'  );
    add_settings_field('yourFacebook', 'Facebook:', 'yourFacebook_callback', 'theme-options-settings', 'bio-options'  );
    add_settings_field('yourLinkedin', 'LinkedIn:', 'yourLinkedin_callback', 'theme-options-settings', 'bio-options'  );
    add_settings_field('yourGithub', 'Github:', 'yourGithub_callback', 'theme-options-settings', 'bio-options'  );
    add_settings_field('yourImage', 'Image URL:', 'yourImage_callback', 'theme-options-settings', 'bio-options'  );
}

function homePage_options(){
    echo 'Change Data for The Bio Section';
}



// function blackBox_callback (){
//    $preText =  esc_attr( get_option('blackBox'));
//     echo ' <input type="text" name="blackBox" placeholder="Gray Banner Text" size="50" value="'.$preText. '" > ';
   

// }

function yourName_callback (){
    $preText =  esc_attr( get_option('yourName'));
     echo ' <input type="text" name="yourName" placeholder="your name" size="50" value="'.$preText. '" > ';
 }

 function yourRole_callback (){
    $preText =  esc_attr( get_option('yourRole'));
     echo ' <input type="text" name="yourRole" placeholder="your Role" size="50" value="'.$preText. '" > ';
 }

 function yourBio_callback (){
    $preText =  esc_attr( get_option('yourBio'));
     echo ' <textarea type="text" name="yourBio" placeholder="your Bio" cols="50" rows="5" value="'.$preText. '" >'.$preText. '</textarea '; 
 }

 function yourLocation_callback (){
    $preText =  esc_attr( get_option('yourLocation'));
     echo ' <input type="text" name="yourLocation" placeholder="your Location" size="50" value="'.$preText. '" > ';
 }

 function yourLinkedin_callback (){
    $preText =  esc_attr( get_option('yourLinkedin'));
     echo ' <input type="text" name="yourLinkedin" placeholder="your Linkedin" size="50" value="'.$preText. '" > ';
 }

 function yourFacebook_callback (){
    $preText =  esc_attr( get_option('yourFacebook'));
     echo ' <input type="text" name="yourFacebook" placeholder="your Facebook" size="50" value="'.$preText. '" > ';
 }

 function yourTwitter_callback (){
    $preText =  esc_attr( get_option('yourTwitter'));
     echo ' <input type="text" name="yourTwitter" placeholder="your Twitter" size="50" value="'.$preText. '" > ';
 }

 function yourGithub_callback (){
    $preText =  esc_attr( get_option('yourGithub'));
     echo ' <input type="text" name="yourGithub" placeholder="your Github" size="50" value="'.$preText. '" > ';
 }

 function yourImage_callback (){
    $preText =  esc_attr( get_option('yourImage'));
     echo ' <input type="text" name="yourImage" placeholder="your Image URL" size="50" value="'.$preText. '" > <p> use external or internal image url , preferred (350 * 450 px) </p>'   ;
 }


function theme_init(){
    require_once( get_template_directory().'/templates/static/admin.php');
} 
    

function top_init(){
    require_once( get_template_directory().'/templates/static/top.php');
} 

// function homePage_init (){
//     echo '<h1>HomePage INIT</h1>';
// }

// function banner_init (){
//     require_once( get_template_directory().'/templates/static/gray_banner.php');

// }

function projects (){
    require_once( get_template_directory().'/templates/static/projects.php');

}

function add_new_project (){
    require_once( get_template_directory().'/templates/static/add_project.php');

}

function certificates (){
    require_once( get_template_directory().'/templates/static/certificates.php');

}

function add_new_certificate (){
    require_once( get_template_directory().'/templates/static/add_certificate.php');

}

function education (){
    require_once( get_template_directory().'/templates/static/education.php');

}

function add_new_college (){
    require_once( get_template_directory().'/templates/static/add_college.php');

}

function skills (){
    require_once( get_template_directory().'/templates/static/skills.php');

}

function add_new_skill (){
    require_once( get_template_directory().'/templates/static/add_skill.php');

}




if (isset($_POST['sub'])) {
    global $wpdb, $name;


    if ( empty($_POST["sub-email"]) ) {
        $_SESSION['sub_err'] = "* pleas fill all fields, all are required";
        header("Location:" .home_url());
        exit;
        }

// Get form values.
$name = (!empty($_POST['sub-email'])) ? sanitize_text_field($_POST['sub-email']) : '';
$table_name = $wpdb->prefix . "subscribers";
$wpdb->insert(
    $table_name,
    array(
        'time' => current_time('mysql'),
        'email' => $name,
   
    )
);

$_SESSION['sub_err'] = "* pleas fill all fields, all are required";
header("Location:" .home_url());
exit;
}






if (isset($_POST['review'])) {
    global $wpdb, $name;


    if (    
    empty($_POST['rel']) ||
    empty($_POST['inputNameR']) ||
    empty($_POST['inputMessageR']) ) {
       
        header("Location:" .home_url());
        exit;
        }

// Get form values.
$name = (!empty($_POST['inputNameR'])) ? sanitize_text_field($_POST['inputNameR']) : '';
$rel = (!empty($_POST['rel'])) ? sanitize_text_field($_POST['rel']) : '';
$text = (!empty($_POST['inputMessageR'])) ? sanitize_text_field($_POST['inputMessageR']) : '';

$table_name = $wpdb->prefix . "reviews";
$wpdb->insert(
    $table_name,
    array(
        'time' => current_time('mysql'),
        'name' => $name,
        'rel' => $rel,
        'text' => $text,

   
    )
);

header("Location:" .home_url());
exit;
}




?>