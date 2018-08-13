<?php
/*********************************************************************************************
 *
 *  Header settings
 *
 *********************************************************************************************/
$this->sections[] = array(
    //'icon'      => 'assets/images/header-layout.svg',
    'icon'      => plugins_url( 'assets/images/header.svg', __FILE__ ),
    'title'     => __('Header Settings', 'redux-framework-demo'),
    'fields'    => array(
        //Accordion No Working We need to test it
        /*
        array(
            'id'        => 'opt-accordion-begin-1',
            'type'      => 'accordion',
            'title'     => 'Topbar Settings',
            'subtitle'  => 'Click to expand',
            'position'  => 'start',
        ),
        */
        array (
            'id' => 'top_bar_settings',
            'icon' => false,
            'type' => 'info',
            'style' => 'default',
            'raw' => '<h3 style=\'margin: 0;\'>Top Bar Settings</h3>',
        ),
        array (
            'id' => 'show_top_bar',
            'type' => 'switch',
            'title' =>  __('Show Top Bar', 'redux-framework-demo'),
            'subtitle'  => __('Enable the top bar on header.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'compiler' => array('show_top_bar_class'),
            'hint' => array(
                'title'   => __('Show Top Bar','redux-framework-demo'),
                'content' => __('Top Bar is an area in header(above logo) you can use to show menu,date,contact no.,email,login/register buttons etc. Choose <strong>YES</strong> to show top bar on the header, Choose <strong>NO</strong> to remove it. Default value is <strong>YES</strong>.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'top_bar_100_width',
            'type' => 'switch',
            'title' =>  __('100% Top bar width', 'redux-framework-demo'),
            'subtitle'  => __('Set Yes to set the top bar to 100% of the browser width. Only works with wide layout mode.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('top_bar_100_width_class'),
            'required' => array('show_top_bar','equals','1'),
            'hint' => array(
                'title'   => __('100% Top Bar Width','redux-framework-demo'),
                'content' => __('Select Yes to set the topbar to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'top_bar_customize_enable',
            'type' => 'switch',
            'title' =>  __('Customize Top Bar', 'redux-framework-demo'),
            'subtitle'  => __('Set Yes to Customize Top Bar', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'required' => array('show_top_bar','equals','1'),
            'hint' => array(
                'title'   => __('','redux-framework-demo'),
                'content' => __('','redux-framework-demo'),
            )
        ),
        array(
            'id'       => 'top_bar_background_color',
            'type'     => 'color',
            'title'    => __('Top Bar Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a background color for topbar (default: #fff).', 'redux-framework-demo'),
            'default'  => '#FFFFFF',
            'validate' => 'color',
            'required' => array('top_bar_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'top_bar_text_color',
            'type'     => 'color',
            'title'    => __('Top Bar Text Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a text color for topbar (default: #333).', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('top_bar_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'top_bar_link_color',
            'type'     => 'color',
            'title'    => __('Top Bar Link Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a link color for topbar (default: #333).', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('top_bar_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'top_bar_link_hover_color',
            'type'     => 'color',
            'title'    => __('Top Bar Link Hover Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a link hover color for topbar (default: #333).', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('top_bar_customize_enable','equals','1'),   
        ),
        /*
        array(
            'id'        => 'opt-accordion-end-1',
            'type'      => 'accordion',
            'position'  => 'end'
        ),
        */
        array (
            'id' => 'header_settings',
            'icon' => false,
            'type' => 'info',
            'style' => 'default',
            'raw' => '<h3 style=\'margin: 0;\'>Header Settings</h3>',
        ),
        array (
            'id' => 'header_enable',
            'type' => 'switch',
            'title' =>  __('Show header', 'redux-framework-demo'),
            'subtitle'  => __('Select Yes to show Header', 'redux-framework-demo'),
            'desc' => __('Select Yes to show header.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
        ),
        array (
            'id' => 'header_100_width',
            'type' => 'switch',
            'title' =>  __('100% Header Width', 'redux-framework-demo'),
            'subtitle'  => __('Set Yes to set the header to 100% of the browser width. Only works with wide layout mode.', 'redux-framework-demo'),
            'desc' => __('YES to set 100% header width', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('header_100_width_class'),
            'required' => array('header_enable','equals','1'),
            'hint' => array(
                'title'   => __('100% Header Width','redux-framework-demo'),
                'content' => __('Select Yes to set the header to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_position',
            'type' => 'select',
            'title' =>  __('Select Header Position', 'redux-framework-demo'),
            'subtitle'  => __('Select Header Position', 'redux-framework-demo'),
            'desc' => __('Select Header Position', 'redux-framework-demo'),
            'default' => 'top',
            'required' => array('header_enable','equals','1'),
            'options' => array(
                'top' => 'Top',                 
                'left' => 'Left',                 
                'right' => 'Right',                 
                ),
            'hint' => array(
                'title'   => __('','redux-framework-demo'),
                'content' => __('','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_show_logo',
            'type' => 'switch',
            'title' =>  __('Show Logo', 'redux-framework-demo'),
            'subtitle'  => __('Enable the logo on header.', 'redux-framework-demo'),
            'desc' => __('Select Yes to show logo', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'compiler' => array('header_show_logo_class'),
            'required' => array('header_enable','equals','1'),
            'hint' => array(
                'title'   => __('Show Logo','redux-framework-demo'),
                'content' => __('Logo is your company or brand logo or the your photo you want to show on your website header. Choose <strong>YES<\/strong> to show Logo on the header, Choose <strong>NO<\/strong> to remove it. Default value is <strong>YES<\/strong>.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_show_site_title',
            'type' => 'switch',
            'title' =>  __('Show Site Title', 'redux-framework-demo'),
            'subtitle'  => __('Enable the site title on header.', 'redux-framework-demo'),
            'desc' => __('', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('header_show_site_title_class'),
            'required' => array('header_enable','equals','1'),
            'hint' => array(
                'title'   => __('Show Site Title','redux-framework-demo'),
                'content' => __('Site Title is the Name of your website representing your business\/brand or any other title you want to show on your website header. Choose <strong>YES<\/strong> to show Site Title on the header, Choose <strong>NO<\/strong> to remove it. Default value is <strong>YES<\/strong>','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_show_tagline',
            'type' => 'switch',
            'title' =>  __('Show Tagline', 'redux-framework-demo'),
            'subtitle'  => __('Enable the Tagline on header.', 'redux-framework-demo'),
            'desc' => __('', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'compiler' => array('header_show_tagline_class'),
            'required' => array('header_show_site_title','equals','1'),
            'hint' => array(
                'title'   => __('Show Tagline','redux-framework-demo'),
                'content' => __('Tagine is a slogan for your businesrl. Choose <strong>YES<\/strong> to shs\/brand or any other sub-title you want to show on your website headeow Tagline on the header, Choose <strong>NO<\/strong> to remove it. Default value is <strong>YES<\/strong>.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_show_banner',
            'type' => 'switch',
            'title' =>  __('Show Banner', 'redux-framework-demo'),
            'subtitle'  => __('Enable Banner on header', 'redux-framework-demo'),
            'desc' => __('', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('header_show_banner_class'),
            'required' => array('header_enable','equals','1'),
            'hint' => array(
                'title'   => __('','redux-framework-demo'),
                'content' => __('','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_transparent',
            'type' => 'switch',
            'title' =>  __('Transparent Header', 'redux-framework-demo'),
            'subtitle'  => __('Enable transparent header.', 'redux-framework-demo'),
            'desc' => __('', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('header_transparent_class'),
            'required' => array('header_enable','equals','1'),
            'hint' => array(
                'title'   => __('Transparent Header','redux-framework-demo'),
                'content' => __('Choose <strong>YES<\/strong> to enable a transparent header that will display your slider behind it, Choose <strong>NO<\/strong> to show header inline. Default value is <strong>NO<\/strong>.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_sticky',
            'type' => 'switch',
            'title' =>  __('Enable Sticky Header', 'redux-framework-demo'),
            'subtitle'  => __('To enable a fixed header when scrolling', 'redux-framework-demo'),
            'desc' => __('Select YES to enable a fixed header when scrolling, NO to disable', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array(''),
            'required' => array('header_enable','equals','1'),
            'hint' => array(
                'title'   => __('Enable Sticky Header','redux-framework-demo'),
                'content' => __('Select YES to enable a fixed header when scrolling, NO to disable','redux-framework-demo'),
            )
        ),
        
        array (
            'id' => 'header_customize_enable',
            'type' => 'switch',
            'title' =>  __('Customize Header', 'redux-framework-demo'),
            'subtitle'  => __('Set Yes to Customize Header', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'required' => array('header_enable','equals','1'),
            'hint' => array(
                'title'   => __('','redux-framework-demo'),
                'content' => __('','redux-framework-demo'),
            )
        ),
        array(
            'id'       => 'header_background_color',
            'type'     => 'color',
            'title'    => __('Header Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a background color for header (default: #fff).', 'redux-framework-demo'),
            'default'  => '#FFFFFF',
            'validate' => 'color',
            'required' => array('header_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'header_text_color',
            'type'     => 'color',
            'title'    => __('Header Text Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a Text color for header (default: #333).', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('header_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'header_link_color',
            'type'     => 'color',
            'title'    => __('Header Link Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a link color for header (default: #333).', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('header_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'header_link_hover_color',
            'type'     => 'color',
            'title'    => __('Header Link Hover Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a link hover color for header (default: #333).', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('header_customize_enable','equals','1'),
        ),
    )
   
);

