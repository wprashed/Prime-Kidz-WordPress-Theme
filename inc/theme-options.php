<?php
/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.0
 */
function custom_theme_options() {

  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'sections'        => array( 
      
      array(
        'id'          => 'header',
        'title'       => __( 'Header Section', 'primekidz' )
      ),
      array(
        'id'          => 'banner',
        'title'       => __( 'Banner Section', 'primekidz' )
      ),
      array(
        'id'          => 'calltoaction',
        'title'       => __( 'Call To Action Section', 'primekidz' )
      ),
      array(
        'id'          => 'intro',
        'title'       => __( 'Intro Section', 'primekidz' )
      ),
      array(
        'id'          => 'info',
        'title'       => __( 'Info Section', 'primekidz' )
      ),
      array(
        'id'          => 'counter',
        'title'       => __( 'Counter Section', 'primekidz' )
      ),
      array(
        'id'          => 'facilites',
        'title'       => __( 'Facilites Section', 'primekidz' )
      ),
      array(
        'id'          => 'staff',
        'title'       => __( 'Staff Section', 'primekidz' )
      ),
      array(
        'id'          => 'video',
        'title'       => __( 'Video Section', 'primekidz' )
      ),
      array(
        'id'          => 'feature',
        'title'       => __( 'Feature Section', 'primekidz' )
      ),
      array(
        'id'          => 'subscribe',
        'title'       => __( 'Subscribe Section', 'primekidz' )
      )
    ),
    'settings'        => array(
      array(
        'id'          => 'telephone',
        'label'       => 'Telephone Number',
        'desc'        => 'Type Your Telephone Number',
        'type'        => 'Text',
        'section'     => 'header',
        'std'         => '08 645 280 947',
      ),
      array(
        'id'          => 'email',
        'label'       => 'Email',
        'desc'        => 'Type Your Email',
        'type'        => 'Text',
        'section'     => 'header',
        'std'         => 'admin@primekidz.org',
      ),
      array(
        'id'          => 'address',
        'label'       => 'Address',
        'desc'        => 'Type Your Address',
        'type'        => 'Text',
        'section'     => 'header',
        'std'         => '34 High Street, Blazfield Ave, FL 95403',
      ),
      array(
        'id'          => 'social',
        'label'       => 'Social Profile',
        'desc'        => 'Add Your Social Profile',
        'type'        => 'list-item',
        'section'     => 'header',
        'settings'    => array(
          array(
            'id'      => 'icon_name',
            'type'    => 'text',
            'label'   => 'Icon Name',
            'desc'    => 'This theme using font awesome icon pack.So please use icon formal name',
            ),
          array(
            'id'      => 'icon_link',
            'type'    => 'text',
            'label'   => 'Icon Link',
            'desc'    => 'Please use your socil link',
            )
        ),
      ),
      array(
        'id'          => 'banner',
        'label'       => 'Banner Background Image',
        'desc'        => 'Upload Banner Background Image',
        'type'        => 'upload',
        'section'     => 'banner',
      ),
      array(
        'id'          => 'banner_title_one',
        'label'       => 'Banner Title One',
        'desc'        => 'Type Your Telephone Number',
        'type'        => 'Text',
        'section'     => 'banner',
        'std'         => 'this is the right place',
      ),
      array(
        'id'          => 'banner_title_two',
        'label'       => 'Banner Title Two',
        'desc'        => 'Type Your Telephone Number',
        'type'        => 'Text',
        'section'     => 'banner',
        'std'         => 'for computer training solution',
      ),
      array(
        'id'          => 'calltoaction_title',
        'label'       => 'Call To Action Title',
        'desc'        => 'Type Your Call To Action Title',
        'type'        => 'Text',
        'section'     => 'calltoaction',
        'std'         => 'A Friendly institute having proud of their students',
      ),
      array(
        'id'          => 'calltoaction_left_title',
        'label'       => 'Call To Action Left Title',
        'desc'        => 'Type Your Call To Action Left Title',
        'type'        => 'Text',
        'section'     => 'calltoaction',
        'std'         => 'Learn About Our Institute',
      ),
      array(
        'id'          => 'calltoaction_left_url',
        'label'       => 'Call To Action Left Url',
        'desc'        => 'Type Your Call To Action Left Title Url',
        'type'        => 'text',
        'section'     => 'calltoaction',
        'std'         => '#',
      ),
      array(
        'id'          => 'calltoaction_right_title',
        'label'       => 'Call To Action Right Title',
        'desc'        => 'Type Your Call To Action Right Title',
        'type'        => 'Text',
        'section'     => 'calltoaction',
        'std'         => 'Our Institute Activites',
      ),
      array(
        'id'          => 'calltoaction_right_url',
        'label'       => 'Call To Action Right Url',
        'desc'        => 'Type Your Call To Action Right Title Url',
        'type'        => 'text',
        'section'     => 'calltoaction',
        'std'         => '#',
      ),
      array(
        'id'          => 'intro_title',
        'label'       => 'Intro Title',
        'desc'        => 'Type Your Intro Title',
        'type'        => 'text',
        'section'     => 'intro',
        'std'         => 'Special Attention for Every Student',
      ),
      array(
        'id'          => 'intro_description',
        'label'       => 'Intro Description',
        'desc'        => 'Type Your Intro Description',
        'type'        => 'textarea',
        'section'     => 'intro',
        'std'         => 'Dolor sit amet consectetur elit eiusmod tempor dunt aliqua utas enim veniam tempore quis sed ipsum nostrud ipsume amet consectetur adipisicing elit sedo eiusmod tempor incididunt ut labore et dolore magna aliquat enim minim veniam quis nostrud laboris nisiut aliquip ex ea commodo consequat duis aute irure aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.',
      ),
      array(
        'id'          => 'intro_quote',
        'label'       => 'Intro Quote',
        'desc'        => 'Type Your Quote',
        'type'        => 'text',
        'section'     => 'intro',
        'std'         => 'A student can ask questions that a wise man cannot answer.',
      ),
      array(
        'id'          => 'intro_quote_author',
        'label'       => 'Intro Quote Author',
        'desc'        => 'Type Quote Author Name',
        'type'        => 'text',
        'section'     => 'intro',
        'std'         => 'Rashed Hossain',
      ),
      array(
        'id'          => 'intro_image_one',
        'label'       => 'Intro Image One',
        'desc'        => 'Upload Intro Image One',
        'type'        => 'upload',
        'section'     => 'intro',
      ),
      array(
        'id'          => 'intro_image_two',
        'label'       => 'Intro Image Two',
        'desc'        => 'Upload Intro Image Two',
        'type'        => 'upload',
        'section'     => 'intro',
      ),
      array(
        'id'          => 'intro_image_three',
        'label'       => 'Intro Image Three',
        'desc'        => 'Upload Intro Image Three',
        'type'        => 'upload',
        'section'     => 'intro',
      ),
      array(
        'id'          => 'info',
        'label'       => 'Information Section',
        'desc'        => 'Add Information',
        'type'        => 'list-item',
        'section'     => 'info',
        'settings'    => array(
          array(
            'id'      => 'info_text',
            'type'    => 'text',
            'label'   => 'Info Text',
            'desc'    => 'Enter Information Text',
            'std'     => 'Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip aute irure dolor repreh derit.'
            ),
          array(
            'id'      => 'info_link',
            'type'    => 'text',
            'label'   => 'Info Link',
            'desc'    => 'Enter Information Link',
            'std'     => '#'
            ),
          array(
            'id'      => 'info_image',
            'type'    => 'upload',
            'label'   => 'Info Icon Image',
            'desc'    => 'Please Upload Small Size Image',
            )
        ),
      ),
      array(
        'id'          => 'counter',
        'label'       => 'Counter Section',
        'desc'        => 'Add Information',
        'type'        => 'list-item',
        'section'     => 'counter',
        'settings'    => array(
          array(
            'id'      => 'counter_number',
            'type'    => 'text',
            'label'   => 'Counter Number',
            'desc'    => 'Enter Information Link',
            'std'     => '200'
            )
        ),
      ),
      array(
        'id'          => 'facilites_title',
        'label'       => 'Facilites Section Title',
        'desc'        => 'Type Facilites Section Title',
        'type'        => 'text',
        'section'     => 'facilites',
        'std'         => 'School Facilities',
      ),
      array(
        'id'          => 'facilites_tagline',
        'label'       => 'Facilites Section Tag Line',
        'desc'        => 'Type Facilites Section Tag Line',
        'type'        => 'text',
        'section'     => 'facilites',
        'std'         => 'EveryDay Care for your Children ...',
      ),
      array(
        'id'          => 'facilites_description',
        'label'       => 'Facilites Section Description',
        'desc'        => 'Type Facilites Section Description',
        'type'        => 'textarea',
        'section'     => 'facilites',
        'std'         => 'Dolor sit amet consectetur elit eiusmod tempor dunt aliqua utas enim veniam tempore quis sed ipsum nostrud ipsume amet consectetur adipisicing elit sedo eiusmod tempor incididunt ut labore et dolore magna aliquat enim.',
      ),
      array(
        'id'          => 'facilites_banner',
        'label'       => 'Facilites Section Banner',
        'desc'        => 'Upload Facilites Section Banner',
        'type'        => 'upload',
        'section'     => 'facilites',
      ),
      array(
        'id'          => 'facilites',
        'label'       => 'Information Section',
        'desc'        => 'Add Facilities',
        'type'        => 'list-item',
        'section'     => 'facilites',
        'settings'    => array(
          array(
            'id'      => 'facilites_link',
            'type'    => 'text',
            'label'   => 'Info Link',
            'desc'    => 'Enter Facilites Link',
            'std'     => '#'
            ),
          array(
            'id'      => 'facilites_image',
            'type'    => 'upload',
            'label'   => 'Facilities Icon Image',
            'desc'    => 'Please Upload Small Size Image',
            )
        ),
      ),
      array(
        'id'          => 'staff',
        'label'       => 'Staff Section',
        'desc'        => 'Add Staff',
        'type'        => 'list-item',
        'section'     => 'staff',
        'settings'    => array(
          array(
            'id'      => 'staff_name',
            'type'    => 'text',
            'label'   => 'Staff Name',
            'desc'    => 'Enter Information Link',
            'std'     => 'Maria Kathen'
            ),
          array(
            'id'      => 'staff_image',
            'type'    => 'upload',
            'label'   => 'Staff Image',
            'desc'    => 'Please Upload Medium Size Image',
            )
        ),
      ),
      array(
        'id'          => 'video_title',
        'label'       => 'Video Section Title',
        'desc'        => 'Enter Video Section Title',
        'type'        => 'text',
        'section'     => 'video',
        'std'         => 'Watch The Campus Study Video Tour',
      ),
      array(
        'id'          => 'video_tagline',
        'label'       => 'Video Section Tag Line',
        'desc'        => 'Enter Video Section Tag Line',
        'type'        => 'text',
        'section'     => 'video',
        'std'         => 'Labore et dolore magna aliqua ut enim adus minim veniam quis nostrud exercitation ullamco',
      ),
      array(
        'id'          => 'video_link',
        'label'       => 'Video Link',
        'desc'        => 'Enter Video Link',
        'type'        => 'text',
        'section'     => 'video',
        'std'         => 'https://www.youtube.com/watch?v=Fvae8nxzVz4',
      ),
      array(
        'id'          => 'feature_title',
        'label'       => 'Feature Section Title',
        'desc'        => 'Enter Feature Section Title',
        'type'        => 'text',
        'section'     => 'feature',
        'std'         => 'We give our children a learning environment & contribute to their success!',
      ),
      array(
        'id'          => 'feature_tagline',
        'label'       => 'Feature Section Tag Line',
        'desc'        => 'Enter Feature Section Tag Line',
        'type'        => 'textarea',
        'section'     => 'feature',
        'std'         => 'Tempor labore et dolore magna aliquat enim minim veniam quis nostrud laboris nisiut aliquip exea comodo consequat duis aute irure aliqua.',
      ),
      array(
        'id'          => 'feature_image',
        'label'       => 'Feature Section Image',
        'desc'        => 'Upload Feature Section Image',
        'type'        => 'upload',
        'section'     => 'feature',
      ),
      array(
        'id'          => 'feature',
        'label'       => 'Features',
        'desc'        => 'Add Feature',
        'type'        => 'list-item',
        'section'     => 'feature',
        'settings'    => array(
          array(
            'id'      => 'feature_item',
            'type'    => 'text',
            'label'   => 'Feature Item',
            'desc'    => '',
            )
        ),
      ),
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}