<?php
/**
 * Layout Settings
 *
 * @package Sarada_Lite
 */

function sarada_lite_customize_register_layout( $wp_customize ) {

    /** Home Page Layout Settings */
    $wp_customize->add_section(
        'layout_settings',
        array(
            'title'    => __( 'Layout Settings', 'sarada-lite' ),
            'priority' => 55,
        )
    );
    
    /** Page Sidebar layout */
    $wp_customize->add_setting( 
        'page_sidebar_layout', 
        array(
            'default'           => 'right-sidebar',
            'sanitize_callback' => 'sarada_lite_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Sarada_Lite_Radio_Image_Control(
            $wp_customize,
            'page_sidebar_layout',
            array(
                'section'     => 'layout_settings',
                'label'       => __( 'Page Sidebar Layout', 'sarada-lite' ),
                'description' => __( 'This is the general sidebar layout for pages. You can override the sidebar layout for individual page in respective page.', 'sarada-lite' ),
                'choices'     => array(
                    'no-sidebar'    => esc_url( get_template_directory_uri() . '/images/1c.jpg' ),
                    'centered'      => esc_url( get_template_directory_uri() . '/images/1cc.jpg' ),
                    'left-sidebar'  => esc_url( get_template_directory_uri() . '/images/2cl.jpg' ),
                    'right-sidebar' => esc_url( get_template_directory_uri() . '/images/2cr.jpg' ),
                )
            )
        )
    );
    
    /** Post Sidebar layout */
    $wp_customize->add_setting( 
        'post_sidebar_layout', 
        array(
            'default'           => 'right-sidebar',
            'sanitize_callback' => 'sarada_lite_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Sarada_Lite_Radio_Image_Control(
            $wp_customize,
            'post_sidebar_layout',
            array(
                'section'     => 'layout_settings',
                'label'       => __( 'Post Sidebar Layout', 'sarada-lite' ),
                'description' => __( 'This is the general sidebar layout for posts & custom post. You can override the sidebar layout for individual post in respective post.', 'sarada-lite' ),
                'choices'     => array(
                    'no-sidebar'    => esc_url( get_template_directory_uri() . '/images/1c.jpg' ),
                    'centered'      => esc_url( get_template_directory_uri() . '/images/1cc.jpg' ),
                    'left-sidebar'  => esc_url( get_template_directory_uri() . '/images/2cl.jpg' ),
                    'right-sidebar' => esc_url( get_template_directory_uri() . '/images/2cr.jpg' ),
                )
            )
        )
    );
    
    /** Post Sidebar layout */
    $wp_customize->add_setting( 
        'layout_style', 
        array(
            'default'           => 'right-sidebar',
            'sanitize_callback' => 'sarada_lite_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Sarada_Lite_Radio_Image_Control(
            $wp_customize,
            'layout_style',
            array(
                'section'     => 'layout_settings',
                'label'       => __( 'Default Sidebar Layout', 'sarada-lite' ),
                'description' => __( 'This is the general sidebar layout for whole site.', 'sarada-lite' ),
                'choices'     => array(
                    'no-sidebar'    => esc_url( get_template_directory_uri() . '/images/1c.jpg' ),
                    'left-sidebar'  => esc_url( get_template_directory_uri() . '/images/2cl.jpg' ),
                    'right-sidebar' => esc_url( get_template_directory_uri() . '/images/2cr.jpg' ),
                )
            )
        )
    );
}
add_action( 'customize_register', 'sarada_lite_customize_register_layout' );