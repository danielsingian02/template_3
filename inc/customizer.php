<?php
add_action( 'customize_register', 'customize_register' );
function customize_register( $wp_customize ) {
    // All the Customize Options you create goes here

    // Move Homepage Settings section underneath the "Site Identity" section
    $wp_customize->get_section('title_tagline')->priority = 1;
    $wp_customize->get_section('static_front_page')->priority = 2;
    $wp_customize->get_section('static_front_page')->title = __( 'Customize Homepage', 'customize_register' );

    // Theme Options Panel
$wp_customize->add_panel( 'theme_options', 
array(
    //'priority'       => 100,
    'title'            => __( 'Theme Options', 'theme_options' ),
    'description'      => __( 'Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'theme_options' ),
) 
);
// Text Options Section Inside Theme
$wp_customize->add_section( 'text_options', 
    array(
        'title'         => __( 'Footer Text Options', 'text_options' ),
        'priority'      => 1,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'copyright_text',
    array(
        'default'           => __( 'All rights reserved ', 'copyright_text' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'copyright_text', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'text_options',
        'label'       => 'Copyright text',
        'description' => 'Text put here will be shown in the footer',
    ) 
);
$wp_customize->add_setting( 'footer_image_logo',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Temp3_logo2.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'footer_image_logo', 
    array(
        'priority'    => 40,
        'section'     => 'text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown as logo footer',
    ) 
));

//banner
// Text Options Section Inside Theme
$wp_customize->add_section( 'banner_text_options', 
    array(
        'title'         => __( 'Banner Text Options', 'banner_text_options' ),
        'priority'      => 2,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'banner_heading',
    array(
        'default'           => __( 'See the Community, Feel the Shine', 'banner_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'banner_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'banner_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in banner sections heading',
    ) 
);

$wp_customize->add_setting( 'banner_subheading',
    array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse.', 'banner_subheading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'banner_subheading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'banner_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in banner sections heading',
    ) 
);

//button
$wp_customize->add_setting( 'banner_button_text',
    array(
        'default'           => __( 'Login', 'banner_button_text' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'banner_button_text', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'banner_text_options',
        'label'       => 'Button text',
        'description' => 'Text put here will be shown in banner sections button',
    ) 
);

//button link
$wp_customize->add_setting( 'banner_button_url',
    array(
        'default'           => __( '#', 'banner_button_url' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'banner_button_url', 
    array(
        'type'        => 'url',
        'priority'    => 20,
        'section'     => 'banner_text_options',
        'label'       => 'Button Link',
        'description' => 'Link put here will be the redirection link of your button when clicked',
    ) 
);

$wp_customize->add_setting( 'Banner_Image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Temp3_banner.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'Banner_Image', 
    array(
        'priority'    => 40,
        'section'     => 'banner_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the first image',
    ) 
));


//second section
// Text Options Section Inside Theme
$wp_customize->add_section( 'second_section_text_options', 
    array(
        'title'         => __( 'Second Section Text Options', 'second_section_text_options' ),
        'priority'      => 2,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'second_section_heading',
    array(
        'default'           => __( 'With Great Community', 'second_section_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in second sections heading',
    ) 
);

$wp_customize->add_setting( 'second_section_paragraph',
    array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. Curabitur faucibus in consectetur gravida pellentesque odio egestas. Nec egestas erat mi tristique duis urna lectus libero. Felis ut vitae pellentesque elit tincidunt lorem velit integer tortor. Viverra sed aenean et purus est. Arcu, amet adipiscing vitae malesuada. Nisl iaculis id enim nibh semper. Proin morbi donec diam suscipit tincidunt arcu id. Iaculis cursus eros, elit gravida mauris sit nunc. Velit erat phasellus habitant adipiscing nullam consectetur quisque est facilisi. Massa elementum id metus, mattis facilisis. Tincidunt est cursus proin mattis dui donec arcu. Nec dolor elementum ut eu sit turpis proin non, sed.', 'second_section_paragraph' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_paragraph', 
    array(
        'type'        => 'textarea',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Description',
        'description' => 'Text put here will be shown in second sections description',
    ) 
);


//third section
// Text Options Section Inside Theme
$wp_customize->add_section( 'third_text_options', 
    array(
        'title'         => __( 'Third Section Text Options', 'third_text_options' ),
        'priority'      => 4,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.

$wp_customize->add_setting( 'heading',
    array(
        'default'           => __( 'Latest Events', 'heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown as heading',
    ) 
);

$wp_customize->add_setting( 'paragraph',
    array(
        'default'           => __( 'Backyard Sale 12-15-2021 <br> Easter Egg Hunt 04-23-2021 <br> Coffee Hours 02-08-2021 <br> Backyard Together 11-16-2021 <br> Pet Celebration 07-10-2021', 'paragraph' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'paragraph', 
    array(
        'type'        => 'textarea',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Description',
        'description' => 'Text put here will be shown as description',
    ) 
);

$wp_customize->add_setting( 'paragraph2',
    array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse.', 'paragraph' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'paragraph2', 
    array(
        'type'        => 'textarea',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Description',
        'description' => 'Text put here will be shown as description',
    ) 
);

//fourth section
// Text Options Section Inside Theme
$wp_customize->add_section( 'fourth_text_options', 
    array(
        'title'         => __( 'FourthSection Text Options', 'fourth_text_options' ),
        'priority'      => 5,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.

$wp_customize->add_setting( 'fourth_heading',
    array(
        'default'           => __( 'We are One', 'fourth_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'fourth_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'fourth_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown as heading',
    ) 
);

$wp_customize->add_setting( 'fourth_paragraph',
    array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque justo metus, auctor non consequat vel, iaculis ut ante. Nulla vitae condimentum libero, ac pretium lectus. Pellentesque eget turpis tempus, accumsan odio ac, suscipit ex. Sed malesuada, leo posuere rutrum viverra.', 'fourth_paragraph' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'fourth_paragraph', 
    array(
        'type'        => 'textarea',
        'priority'    => 20,
        'section'     => 'fourth_text_options',
        'label'       => 'Description',
        'description' => 'Text put here will be shown as description',
    ) 
);

$wp_customize->add_setting( 'fourth_image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Temp3_WeAreOne.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'fourth_image', 
    array(
        'priority'    => 40,
        'section'     => 'fourth_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown as logo footer',
    ) 
));

}
?>