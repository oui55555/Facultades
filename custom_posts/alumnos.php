<?
  function create_post_type_alumnos() {
    register_post_type( 'alumnos',
      array(
        'labels' => array(
          'name' => __( 'Alumnos' ),
          'singular_name' => __( 'Alumnos' )
        ),
        'public' => true,
        'has_archive' => true,
      )
    );
  }
  add_action( 'init', 'create_post_type_alumnos' );
?>
