<?php
/*********************************************************************************************
 *
 *  Header settings
 *
 *********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-cogs',
    'title'     => __('Header Settings', 'redux-framework-demo'),
    //'desc' => __('Header Settings', 'redux-framework-demo'),
    'fields'    => array(
        array (
            'id' => 'header_position',
            'type' => 'select',
            'title' => __('Header Position','redux-framework-demo'),
            'subtitle'  => __('Set Header Position', 'redux-framework-demo'),
            'desc' => __('Header can be aligned to top , left or right side','redux-framework-demo'),
            'options' => array (
                'top' => 'Top',
                'left' => 'Left',
                'right' => 'Right',
            ),
            'default' => 'top',
            'hint' => array(
                'title'   => __('Header Position','redux-framework-demo'),
                'content' => __('Header can be aligned to top , left or right side','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'side_header_width',
            'type' => 'text',
            'title' => __('Header Width For Left/Right Position','redux-framework-demo'),
            'subtitle'  => __('Controls width of the left or right side header', 'redux-framework-demo'),
            'desc' => __('In pixels, eg: 170px.','redux-framework-demo'),
            'default' => '280px',
            'hint' => array(
                'title'   => __('Header Width For Left/Right Position','redux-framework-demo'),
                'content' => __('Header Width For Left/Right Position','redux-framework-demo'),
            )
        ),
		array (
				'id' => 'header_100_width',
				'type' => 'switch',
				'title' =>  __('100% Header Width', 'redux-framework-demo'),
				'subtitle'  => __('Set Yes to set the header to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.', 'redux-framework-demo'),
				'desc' => __('YES to set 100% header width', 'redux-framework-demo'),
				'on' => __('YES', 'redux-framework-demo'),
				'off' => __('NO ', 'redux-framework-demo'),
				'default'   => false,
				'compiler' => array('header_100_width_class'),
				'hint' => array(
					'title'   => __('100% Header Width','redux-framework-demo'),
					'content' => __('Set Yes to set the header to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.','redux-framework-demo'),
				)
			),
		array (
				'id' => 'header_show_top_bar',
				'type' => 'switch',
				'title' =>  __('Show Top Bar', 'redux-framework-demo'),
				'subtitle'  => __('Enable the top bar on header.', 'redux-framework-demo'),
				'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
				'on' => __('YES', 'redux-framework-demo'),
				'off' => __('NO ', 'redux-framework-demo'),
				'default'   => true,
				'compiler' => array('header_show_top_bar_class'),
				//'output' => array('body'),
				'hint' => array(
					'title'   => __('Show Top Bar','redux-framework-demo'),
					'content' => __('Top Bar is an area in header(above logo) you can use to show menu,date,contact no.,email,login/register buttons etc. Choose <strong>YES</strong> to show top bar on the header, Choose <strong>NO</strong> to remove it. Default value is <strong>YES</strong>.','redux-framework-demo'),
				)
			),
        /*array (
            'id' => 'header_show_sliding_bar',
            'type' => 'switch',
            'title' =>  __('Show Sliding Bar', 'redux-framework-demo'),
            'subtitle'  => __('Enable the top sliding bar.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'hint' => array(
                'title'   => __('Show Sliding Bar','redux-framework-demo'),
                'content' =>  __('Sliding Bar is the area hidden at the top of website which can be slides down on clicking on <strong>+(Plus)</strong> button on right corner. Choose <strong>YES</strong> to show sliding bar, Choose <strong>NO</strong> to hide it. Default value is <strong>YES</strong>.','redux-framework-demo'),
            )
        ),*/
       
        array (
            'id' => 'header_show_logo',
            'type' => 'switch',
            'title' =>  __('Show Logo', 'redux-framework-demo'),
            'subtitle'  => __('Enable the logo on header.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'hint' => array(
                'title'   => __('Show Logo','redux-framework-demo'),
                'content' => __('Logo is your company or brand logo or the your photo you want to show on your website header. Choose <strong>YES</strong> to show Logo on the header, Choose <strong>NO</strong> to remove it. Default value is <strong>YES</strong>.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_show_site_title',
            'type' => 'switch',
            'title' =>  __('Show Site Title', 'redux-framework-demo'),
            'subtitle'  => __('Enable the site title on header.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'hint' => array(
                'title'   => __('Show Site Title','redux-framework-demo'),
                'content' => __('Site Title is the Name of your website representing your business/brand or any other title you want to show on your website header. Choose <strong>YES</strong> to show Site Title on the header, Choose <strong>NO</strong> to remove it. Default value is <strong>YES</strong>.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_show_tagline',
            'type' => 'switch',
            'title' =>  __('Show Tagline', 'redux-framework-demo'),
            'subtitle'  => __('Enable the Tagline on header.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'hint' => array(
                'title'   => __('Show Tagline','redux-framework-demo'),
                'content' => __('Tagline is a slogan for your business/brand or any other sub-title you want to show on your website header. Choose <strong>YES</strong> to show Tagline on the header, Choose <strong>NO</strong> to remove it. Default value is <strong>YES</strong>.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_show_navigation',
            'type' => 'switch',
            'title' =>  __('Show Navigation', 'redux-framework-demo'),
            'subtitle'  => __('Enable Navigation on header.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'hint' => array(
                'title'   => __('Show Navigation','redux-framework-demo'),
                'content' => __('Navigation is the main/primary menu on your website header. Choose <strong>YES</strong> to show Navigation on the header, Choose <strong>NO</strong> to remove it. Default value is <strong>YES</strong>.','redux-framework-demo'),
            )
        ),
        /*
         array(
            'id'        => 'opt-layout',
            'type'      => 'image_select',
            'compiler'  => true,
            'title'     => __('Main Layout', 'redux-framework-demo'),
            'subtitle'  => __('Select main content and sidebar alignment. Choose between 1, 2 or 3 column layout.', 'redux-framework-demo'),
            'options'   => array(
                '1' => array('alt' => '1 Column',       'img' => ReduxFramework::$_url . 'assets/img/1col.png'),
                '2' => array('alt' => '2 Column Left',  'img' => ReduxFramework::$_url . 'assets/img/2cl.png'),
                '3' => array('alt' => '2 Column Right', 'img' => ReduxFramework::$_url . 'assets/img/2cr.png'),
                '4' => array('alt' => '3 Column Middle','img' => ReduxFramework::$_url . 'assets/img/3cm.png'),
                '5' => array('alt' => '3 Column Left',  'img' => ReduxFramework::$_url . 'assets/img/3cl.png'),
                '6' => array('alt' => '3 Column Right', 'img' => ReduxFramework::$_url . 'assets/img/3cr.png')
            ),
            'default'   => '2',
            'hint' => array(
                'title'   => 'Hint Title',
                'content' => 'This is the content of the tool-tip'
            )
        ),
        */

        array (
            'id' => 'header_layout',
            'type' => 'image_select',
            'title' => __('Select a Header Layout','redux-framework-demo'),
            'subtitle'  => __('Select a Header Layout.', 'redux-framework-demo'),
            'options' => array (
                //'v1' => AIONE_PLUGIN_URL.'/assets/images/header1.jpg',
                'v2' => AIONE_PLUGIN_URL.'/assets/images/header2.jpg',
                //'v3' => AIONE_PLUGIN_URL.'/assets/images/header3.jpg',
                'v4' => AIONE_PLUGIN_URL.'/assets/images/header4.jpg',
                //'v5' => AIONE_PLUGIN_URL.'/assets/images/header5.jpg',
            ),
            'default' => 'v4',
            'hint' => array(
                'title'   => __('Select a Header Layout','redux-framework-demo'),
                'content' => __('Select a Header Layout','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_transparent',
            'type' => 'switch',
            'title' =>  __('Transparent Header', 'redux-framework-demo'),
            'subtitle'  => __('Enable transparent header.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'hint' => array(
                'title'   => __('Transparent Header','redux-framework-demo'),
                'content' => __('Choose <strong>YES</strong> to enable a transparent header that will display your slider behind it, Choose <strong>NO</strong> to show header inline. Default value is <strong>NO</strong>.','redux-framework-demo'),
            )
        ),

        array (
            'id' => 'header_v4_content',
            'type' => 'select',
            'title' => __('Header Content Area For Header #4','redux-framework-demo'),
            'subtitle'  => __('Header Content Area For Header #4.', 'redux-framework-demo'),
            'desc' => __('Select which content displays in the right area of Header 4.','redux-framework-demo'),
            'options' => array (
			    'None' => 'Leave Empty',
                'Tagline' => 'Tagline',
                'Search' => 'Search',
                'Tagline And Search' => 'Tagline + Search',
                'Banner' => 'Banner',
            ),
            'default' => 'Tagline',
            'hint' => array(
                'title'   => __('Header Content Area For Header #4','redux-framework-demo'),
                'content' => __('Header Content Area For Header #4','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_banner_code',
            'type' => 'textarea',
            'title' => __('Banner Code For Header #4','redux-framework-demo'),
            'subtitle'  => __('Banner Code For Header #4.', 'redux-framework-demo'),
            'desc' => __('Add HTML banner code for Header #4. The banner or image will display in Header 4 as long as you have Banner selected for the Header Content Area For Header #4 option above.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Banner Code For Header #4','redux-framework-demo'),
                'content' => __('Banner Code For Header #4','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_tagline',
            'type' => 'text',
            'title' => __('Header Tagline','redux-framework-demo'),
            'subtitle'  => __('Header Tagline.', 'redux-framework-demo'),
            'desc' => __('Tagline will display on Header 4 as long as you have Tagline selected for the Header Content Area For Header #4 option above.','redux-framework-demo'),
            'default' => 'Insert Any Headline Or Link You Want Here',
            'hint' => array(
                'title'   => __('Header Tagline','redux-framework-demo'),
                'content' => __('Header Tagline','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'margin_header_top',
            'type' => 'text',
            'title' => __('Header Top Padding','redux-framework-demo'),
            'subtitle'  => __('Top Padding for Header.', 'redux-framework-demo'),
            'desc' => __('In pixels, eg: 10px','redux-framework-demo'),
            'default' => '0px',
            'hint' => array(
                'title'   => __('Header Top Padding','redux-framework-demo'),
                'content' => __('Header Top Padding','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'margin_header_bottom',
            'type' => 'text',
            'title' => __('Header Bottom Padding','redux-framework-demo'),
            'subtitle'  => __('Bottom Padding for Header.', 'redux-framework-demo'),
            'desc' => __('In pixels, eg: 10px','redux-framework-demo'),
            'default' => '0px',
            'hint' => array(
                'title'   => __('Header Bottom Padding','redux-framework-demo'),
                'content' => __('Header Bottom Padding','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'padding_header_left',
            'type' => 'text',
            'title' => __('Header Left Padding','redux-framework-demo'),
            'subtitle'  => __('Left Padding for Header.', 'redux-framework-demo'),
            'desc' => __('In pixels, eg: 10px','redux-framework-demo'),
            'default' => '0px',
            'hint' => array(
                'title'   => __('Header Left Padding','redux-framework-demo'),
                'content' => __('Header Left Padding','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'padding_header_right',
            'type' => 'text',
            'title' => __('Header Right Padding','redux-framework-demo'),
            'subtitle'  => __('Right Padding for Header.', 'redux-framework-demo'),
            'desc' => __('In pixels, eg: 10px','redux-framework-demo'),
            'default' => '0px',
            'hint' => array(
                'title'   => __('Header Right Padding','redux-framework-demo'),
                'content' => __('Header Right Padding','redux-framework-demo'),
            )
        )



    )
);

/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-credit-card',
    'title'     => __('Topbar', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
	
			array (
				'id' => 'topbar_left_content',
				'type'      => 'sortable',
				'title' => __('Topbar Left Content','redux-framework-demo'),
				'subtitle'  => __('Select and re-arrange which content displays in the top left area of the header.', 'redux-framework-demo'),
				'desc' => __('Select content displayed on Topbar Left.','redux-framework-demo'),
				'mode'      => 'checkbox',
				'options' => array (
					'date' => 'Date',
					'time' => 'Time',
					'email' => 'Email',
					'phone' => 'Phone',
					'social' => 'Social Links',
					'navigation' => 'Navigation',
					'custom-left' => 'Custom Left',
            ),

            'default' => Array(
                'date' => true,
                'time' => true,
                'email' => false,
                'phone' => false,
                'social' => false,
                'navigation' => false,
                'custom-left' => false,
            ),
            'hint' => array(
                'title'   => __('Topbar Left Content','redux-framework-demo'),
            'content' => 'Topbar Left Content is the area at the top of website ........'
        )
        ),
        array (
            'id' => 'topbar_right_content',
            'type'      => 'sortable',
            'title' => __('Topbar Right Content','redux-framework-demo'),
            'subtitle'  => __('Select and re-arrange which content displays in the top right area of the header.', 'redux-framework-demo'),
            'desc' => __('Select content displayed on Topbar Right.','redux-framework-demo'),
            'mode'      => 'checkbox',
            'options' => array (
                'date' => 'Date',
                'time' => 'Time',
                'email' => 'Email',
                'phone' => 'Phone',
                'social' => 'Social Links',
                'navigation' => 'Navigation',
                'custom-right' => 'Custom Right',
            ),

            'default' => Array(
                'date' => false,
                'time' => false,
                'phone' => true,
                'email' => true,
                'social' => false,
                'navigation' => false,
                'custom-right' => false,
            ),
            'hint' => array(
                'title'   => __('Topbar Right Content','redux-framework-demo'),
                'content' => 'Topbar Right Content is the area at the top of website ........'
            )
        ),
        array (
            'id' => 'topbar_number',
            'type' => 'text',
            'title' => __('Topbar Phone Number','redux-framework-demo'),
            'subtitle'  => __('Phone number will be displayed in the Contact Info section of your topbar.', 'redux-framework-demo'),
            'desc' => __('Provide Phone number to be displayed in the Contact Info section of your topbar.','redux-framework-demo'),
            'default' => '+1-5555555555',
            'hint' => array(
                'title'   => __('Topbar Phone Number','redux-framework-demo'),
                'content' => 'Topbar Phone Number  ........'
            )
        ),
        array (
            'id' => 'topbar_email',
            'type' => 'text',
            'title' => __('Topbar Email Address','redux-framework-demo'),
            'subtitle'  => __('Email address will display in the Contact Info section of your top header.', 'redux-framework-demo'),
            'desc' => __('You can provide Email address here.','redux-framework-demo'),
            'default' => get_option( 'admin_email' ),
            'hint' => array(
                'title'   => __('Topbar Email Address','redux-framework-demo'),
                'content' => 'Topbar Email Address ........'
            )
        ),
        array (
            'id' => 'topbar_custom_left',
            'type' => 'text',
            'title' => __('Topbar Custom Text Left','redux-framework-demo'),
            'subtitle'  => __('Custom Text displayed on Left Topbar.', 'redux-framework-demo'),
            'desc' => __('You can put your custom text here','redux-framework-demo'),
            'default' => '',
            'hint' => array(
                'title'   => __('Topbar Custom Text Left','redux-framework-demo'),
                'content' => 'Topbar Custom Text Left ........'
            )
        ),
        array (
            'id' => 'topbar_custom_right',
            'type' => 'text',
            'title' => __('Topbar Custom Text Right','redux-framework-demo'),
            'subtitle'  => __('Custom Text displayed on right Topbar.', 'redux-framework-demo'),
            'desc' => __('You can put your custom text here','redux-framework-demo'),
            'default' => '',
            'hint' => array(
                'title'   => __('Topbar Custom Text Right','redux-framework-demo'),
                'content' => 'Topbar Custom Text Right ........'
            )
        ),

    )
);
/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-website',
    'title'     => __('Slider Options', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
        array (
            'id' => 'slider_position',
            'type' => 'select',
            'title' => __('Slider Position','redux-framework-demo'),
            'subtitle'  => __('Select if the slider shows below or above the header. This only works for the slider assigned in page options, not with shortcodes.', 'redux-framework-demo'),
            'desc' => __('Select Slider position on Page.','redux-framework-demo'),
            'options' => array (
                'Below' => 'Below',
                'Above' => 'Above',
            ),
            'default' => 'Below',
            'hint' => array(
                'title'   => __('Slider Position','redux-framework-demo'),
                'content' => 'Select if the slider shows below or above the header ........'
            )
        )

    )
);
/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-twitter',
    'title'     => __('Social Icons', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
		array (
            'id' => 'header_social_links',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Header Social Icons Setting</h3>',
        ),
	
		array(
            'id'            => 'header_social_links_font_size',
            'type'          => 'slider',
            'title'         => __( 'Header Social Icons Font Size', 'redux-framework-demo' ),
            'subtitle'      => __( 'set Font Size of Header Social Icons', 'redux-framework-demo' ),
            'desc'          => __( 'Use <strong>Text Box</strong> or <strong>Slider</strong> to set the value.In pixels, default is 16.', 'redux-framework-demo' ),
            'default'       => 16,
            'min'           => 0,
            'step'          => 1,
            'max'           => 100,
            'display_value' => 'text',
            'hint' => array(
                'title'   => __( 'Header Social Icons Font Size', 'redux-framework-demo' ),
                'content' => __( 'Header Social Icons Font Size. Use <strong>Text Box</strong> or <strong>Slider</strong> to set the value.', 'redux-framework-demo' ),
            ),
        ),

        array (
            'id' => 'header_social_links_icon_color',
            'type' => 'color',
            'title' => __('Header Social Icons Custom Color','redux-framework-demo'),
            'subtitle'  => __('Select Custom Color for Social Icons on Header.', 'redux-framework-demo'),
            'desc' => __('Select a custom social icon color.','redux-framework-demo'),
            'default' => '#FFFFFF',
            'hint' => array(
                'title'   => __('Header Social Icons Custom Color','redux-framework-demo'),
                'content' => 'Header Social Icons Custom Color........'
            )
        ),
        array (
            'id' => 'header_social_links_boxed',
            'type' => 'switch',
            'title' => __('Header Social Icons Boxed','redux-framework-demo'),
            'subtitle'  => __('show Boxed Social Icons.', 'redux-framework-demo'),
            'desc' => __('YES to show Boxed Social Icons.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => 'No',
            'hint' => array(
                'title'   => __('Header Social Icons Boxed','redux-framework-demo'),
                'content' => 'Header Social Icons Boxed........'
            )
        ),
        array (
            'id' => 'header_social_links_box_color',
            'type' => 'color',
            'title' =>  __('Header Social Icons Custom Box Color','redux-framework-demo'),
            'subtitle'  => __('Select color for Social Icons Custom Box.', 'redux-framework-demo'),
            'desc' =>  __('Select a custom social icon box color.','redux-framework-demo'),
            'default' => '#e8e8e8',
            'hint' => array(
                'title'   => __('Header Social Icons Custom Box Color','redux-framework-demo'),
                'content' => 'Header Social Icons Custom Box Color........'
            )
        ),
        array (
            'id' => 'header_social_links_boxed_radius',
            'type' => 'text',
            'title' => __('Header Social Icons Boxed Radius','redux-framework-demo'),
            'subtitle'  => __('Set Boxed Radius for Header Social Icons.', 'redux-framework-demo'),
            'desc' => __('Select Box radius for the social icons. In pixels, eg: 4px.','redux-framework-demo'),
            'default' => '4px',
            'hint' => array(
                'title'   => __('Header Social Icons Boxed Radius','redux-framework-demo'),
                'content' => 'Header Social Icons Boxed Radius........'
            )
        ),
		array (
            'id' => 'header_social_links_boxed_padding',
            'type' => 'text',
            'title' => __('Header Social Icons Boxed Padding','redux-framework-demo'),
            'subtitle'  => __('Set Header Social Icons Boxed Padding.', 'redux-framework-demo'),
            'desc' => __('In pixels, default is 8','redux-framework-demo'),
            'default' => '8px',
            'hint' => array(
                'title'   => __('Header Social Icons Boxed Padding','redux-framework-demo'),
                'content' => 'Header Social Icons Boxed Padding........'
            )
        ),
        array (

            'id' => 'header_social_links_tooltip_placement',
            'type' => 'select',
            'title' =>  __('Header Social Icons Tooltip Position','redux-framework-demo'),
            'desc' =>  __('Select the tooltip position.','redux-framework-demo'),
            'subtitle'  => __('Controls the tooltip position of Header Social Icons.', 'redux-framework-demo'),
            'options' => array (
                'Top' => 'Top',
                'Right' => 'Right',
                'Bottom' => 'Bottom',
                'Left' => 'Left',
                'None' => 'None',
            ),
            'default' => 'Bottom',
            'hint' => array(
                'title'   => __('Header Social Icons Tooltip Position','redux-framework-demo'),
                'content' => 'Header Social Icons Tooltip Position........'
            )
        )


    )
);
/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-website-alt',
    'title'     => __('Sticky Header Options', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
        array (
            'id' => 'header_sticky',
            'type' => 'switch',
            'title' => __('Enable Sticky Header','redux-framework-demo'),
            'subtitle'  => __('To enable a fixed header when scrolling.', 'redux-framework-demo'),
            'desc' => __('Select YES to enable a fixed header when scrolling, NO to disable.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => 1,
            'hint' => array(
                'title'   => __('Enable Sticky Header','redux-framework-demo'),
                'content' => 'Select YES to enable a fixed header when scrolling, NO to disable.......'
            )
        ),
        array (
            'id' => 'header_sticky_tablet',
            'type' => 'switch',
            'title' =>  __('Enable Sticky Header on Tablets','redux-framework-demo'),
            'subtitle'  => __('To enable a fixed header when scrolling on Tablets.', 'redux-framework-demo'),
            'desc' =>  __('Select YES to enable a fixed header when scrolling on tablets, NO to disable.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => 0,
            'hint' => array(
                'title'   => __('Enable Sticky Header on Tablets','redux-framework-demo'),
                'content' => 'Select YES to enable a fixed header when scrolling on Tablets, NO to disable.......'
            )
        ),
        array (
            'id' => 'header_sticky_mobile',
            'type' => 'switch',
            'title' => __('Enable Sticky Header on Mobiles','redux-framework-demo'),
            'subtitle'  => __('To enable a fixed header when scrolling on Mobiles.', 'redux-framework-demo'),
            'desc' => __('Select YES to enable a fixed header when scrolling on Mobiles, NO to disable.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => 0,
            'hint' => array(
                'title'   => __('Enable Sticky Header on Mobiles','redux-framework-demo'),
                'content' => 'Select YES to enable a fixed header when scrolling on Mobiles, NO to disable.......'
            )
        ),
		array (
            'id' => 'header_sticky_type2_layout',
            'type' => 'select',
            'title' => __('Headers 4-5 Sticky Header Display','redux-framework-demo'),
            'subtitle'  => __('Select if your sticky header shows the menu or menu + logo area.', 'redux-framework-demo'),
            'desc' => __('Select from list.','redux-framework-demo'),
            'options' => array (
                'menu_only' => 'Menu Only',
                'menu_and_logo' => 'Menu + Logo Area',
            ),
            'default' => 'menu_only',
            'hint' => array(
                'title'   => __('Headers 4-5 Sticky Header Display','redux-framework-demo'),
                'content' => __('Select if your sticky header shows the menu or menu + logo area.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_sticky_opacity',
            'type' => 'text',
            'title' => __('Sticky Header Opacity','redux-framework-demo'),
            'subtitle'  => __('Set the opacity of background of Sticky Header.', 'redux-framework-demo'),
            'desc' => __('Header v2 - v5 only. Set the opacity of background, <br />0.1 (lowest) to 1 (highest).','redux-framework-demo'),
            'default' => '0.97',
            'hint' => array(
                'title'   => __('Sticky Header Opacity','redux-framework-demo'),
                'content' => 'Sticky Header Opacity..........'
            )
        ),
        array (
            'id' => 'header_sticky_nav_padding',
            'type' => 'text',
            'title' => __('Sticky Header Menu Item Padding','redux-framework-demo'),
            'subtitle'  => __('Controls the space between each menu item in the sticky header.', 'redux-framework-demo'),
            'desc' => __('Use a number without \'px\', default is 35. eg: 35','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Sticky Header Menu Item Padding','redux-framework-demo'),
                'content' => 'Sticky Header Menu Item Padding..........'
            )
        ),
        array (
            'id' => 'header_sticky_nav_font_size',
            'type' => 'text',
            'title' => __('Sticky Header Navigation Font Size','redux-framework-demo'),
            'subtitle'  => __('Controls the font size of the menu items in the sticky header.', 'redux-framework-demo'),
            'desc' => __('Use a number without \'px\', default is 14. eg: 14','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Sticky Header Navigation Font Size','redux-framework-demo'),
                'content' => 'Sticky Header Navigation Font Size..........'
            )
        ),
        array (
            'id' => 'header_sticky_logo_max_width',
            'type' => 'text',
            'title' => __('Sticky Header Logo Width','redux-framework-demo'),
            'subtitle'  => __('Controls the max-width of the sticky header logo.', 'redux-framework-demo'),
            'desc' => __('If your logo is too large and does not allow the menu to fit on one line, then use this option and insert a smaller width for your logo. eg: 120','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Sticky Header Logo Width','redux-framework-demo'),
                'content' => 'Sticky Header Logo Width..........'
            )
        )

    )
);
/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el el-picture',
    'title'     => __('Logo', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
        array (
            'id' => 'logo',
            'type' => 'media',
            'title' => __('Logo','redux-framework-demo'),
            'subtitle'  => __('Select Logo Image.', 'redux-framework-demo'),
            'desc' => __('Select an image file for your logo.','redux-framework-demo'),
            'default' => array (
                'url' => AIONE_PLUGIN_URL. '/assets/images/logo.png',
            ),
            'url' => true,
            'hint' => array(
                'title'   => __('Logo','redux-framework-demo'),
                'content' => 'Select an image file for your logo..........'
            )
        ),
        array (
            'id' => 'logo_retina',
            'type' => 'media',
            'title' => __('Logo (Retina Version @2x)','redux-framework-demo'),
            'subtitle'  => __('Select Logo Image(Retina Version @2x).', 'redux-framework-demo'),
            'desc' => __('Select an image file for the retina version of the logo. It should be exactly 2x the size of main logo.','redux-framework-demo'),
            'default' => array (
                'url' => AIONE_PLUGIN_URL. '/assets/images/logo@2x.png',
            ),
			'url' => true,
            'hint' => array(
                'title'   => __('Logo (Retina Version @2x)','redux-framework-demo'),
                'content' => 'Select an image file for the retina version of the logo..........'
            )
        ),
        array (
            'id' => 'retina_logo_width',
            'type' => 'text',
            'title' => __('Logo Width','redux-framework-demo'),
            'subtitle'  => __('Set the Logo Width.', 'redux-framework-demo'),
            'desc' => __('If retina logo is uploaded, enter the standard logo (1x) version width, do not enter the retina logo width.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Standard Logo Width','redux-framework-demo'),
                'content' => 'Standard Logo Width..........'
            )
        ),
        array (
            'id' => 'retina_logo_height',
            'type' => 'text',
            'title' => __('Logo Height','redux-framework-demo'),
            'subtitle'  => __('Set the Logo Height.', 'redux-framework-demo'),
            'desc' => __('If retina logo is uploaded, enter the standard logo (1x) version height, do not enter the retina logo height.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Standard Logo Heigh','redux-framework-demo'),
                'content' => 'Standard Logo Height..........'
            )
        ),
		array (
            'id' => 'sticky_header_logo',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Sticky Header Logo</h3>',
        ),
		array (
            'id' => 'sticky_header_logo',
            'type' => 'media',
            'title' => __('Sticky Header Logo','redux-framework-demo'),
            'subtitle'  => __('Select Sticky Header Logo Image.', 'redux-framework-demo'),
            'desc' => __('Select an image file for your logo.','redux-framework-demo'),
            'default' => array (
                'url' => AIONE_PLUGIN_URL. '/assets/images/logo.png',
            ),
            'url' => true,
            'hint' => array(
                'title'   => __('Sticky Header Logo','redux-framework-demo'),
                'content' => 'Select an image file for your logo..........'
            )
        ),
		array (
            'id' => 'sticky_header_logo_retina',
            'type' => 'media',
            'title' => __('Sticky Header Logo (Retina Version @2x)','redux-framework-demo'),
            'subtitle'  => __('Select Logo Image(Retina Version @2x).', 'redux-framework-demo'),
            'desc' => __('Select an image file for the retina version of the logo. It should be exactly 2x the size of main logo.','redux-framework-demo'),
            'url' => true,
			'default' => array (
                'url' => AIONE_PLUGIN_URL. '/assets/images/logo.png',
            ),
            'hint' => array(
                'title'   => __('Sticky Header Logo (Retina Version @2x)','redux-framework-demo'),
                'content' => 'Select an image file for the retina version of the logo..........'
            )
        ),
		array (
            'id' => 'sticky_retina_logo_width',
            'type' => 'text',
            'title' => __('Sticky Header Logo Width','redux-framework-demo'),
            'subtitle'  => __('Sticky Header Logo Width.', 'redux-framework-demo'),
            'desc' => __('If retina logo is uploaded, enter the standard logo (1x) version width, do not enter the retina logo width.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Sticky Header Logo Width','redux-framework-demo'),
                'content' => 'Sticky Header Logo Width..........'
            )
        ),
        array (
            'id' => 'sticky_retina_logo_height',
            'type' => 'text',
            'title' => __('Sticky Header Logo Height','redux-framework-demo'),
            'subtitle'  => __('Sticky Header Logo Height.', 'redux-framework-demo'),
            'desc' => __('If retina logo is uploaded, enter the standard logo (1x) version height, do not enter the retina logo height.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Sticky Header Logo Height','redux-framework-demo'),
                'content' => 'Sticky Header Logo Height..........'
            )
        ),
		array (
            'id' => 'mobile_logo',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Mobile Logo</h3>',
        ),
		array (
            'id' => 'mobile_logo',
            'type' => 'media',
            'title' => __('Mobile Logo','redux-framework-demo'),
            'subtitle'  => __('Select Logo Image for Mobile screen.', 'redux-framework-demo'),
            'desc' => __('Select an image file for your logo.','redux-framework-demo'),
            'default' => array (
                'url' => AIONE_PLUGIN_URL. '/assets/images/logo.png',
            ),
            'url' => true,
            'hint' => array(
                'title'   => __('Mobile Logo','redux-framework-demo'),
                'content' => 'Select an image file for your logo..........'
            )
        ),
			array (
            'id' => 'mobile_logo_retina',
            'type' => 'media',
            'title' => __('Mobile Logo (Retina Version @2x)','redux-framework-demo'),
            'subtitle'  => __('Select Logo Image(Retina Version @2x).', 'redux-framework-demo'),
            'desc' => __('Select an image file for the retina version of the logo. It should be exactly 2x the size of main logo.','redux-framework-demo'),
            'url' => true,
            'hint' => array(
                'title'   => __('Mobile Logo (Retina Version @2x)','redux-framework-demo'),
                'content' => 'Select an image file for the retina version of the logo..........'
            )
        ),
		array (
            'id' => 'mobile_retina_logo_width',
            'type' => 'text',
            'title' => __('Mobile Logo Width','redux-framework-demo'),
            'subtitle'  => __('Logo Width for Mobile screen.', 'redux-framework-demo'),
            'desc' => __('If retina logo is uploaded, enter the standard logo (1x) version width, do not enter the retina logo width.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Mobile Logo Width','redux-framework-demo'),
                'content' => 'Mobile Logo Width..........'
            )
        ),
        array (
            'id' => 'mobile_retina_logo_height',
            'type' => 'text',
            'title' => __('Mobile Logo Height','redux-framework-demo'),
            'subtitle'  => __('Logo Height for Mobile screen.', 'redux-framework-demo'),
            'desc' => __('If retina logo is uploaded, enter the standard logo (1x) version height, do not enter the retina logo height.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Mobile Logo Height','redux-framework-demo'),
                'content' => 'Mobile Logo Height..........'
            )
        ),
		array (
            'id' => 'logo_settings_wrapper',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Logo Settings</h3>',
        ),
        array (
            'id' => 'logo_alignment',
            'type' => 'select',
            'title' => __('Logo Alignment','redux-framework-demo'),
            'subtitle'  => __('Standard Logo Alignment.', 'redux-framework-demo'),
            'desc' => __('Note: center only works on Header 5.','redux-framework-demo'),
            'options' => array (
                'Left' => 'Left',
                'Center' => 'Center',
                'Right' => 'Right',
            ),
            'default' => 'Left',
            'hint' => array(
            'title'   => __('Logo Alignment','redux-framework-demo'),
            'content' => 'Logo Alignment..........'
)
        ),
        array (
            'id' => 'margin_logo_left',
            'type' => 'text',
            'title' => __('Logo Left Margin','redux-framework-demo'),
            'subtitle'  => __('Logo Left Margin.', 'redux-framework-demo'),
            'desc' => __('In pixels, eg: 10px','redux-framework-demo'),
            'default' => '0px',
            'hint' => array(
                'title'   => __('Logo Left Margin','redux-framework-demo'),
                'content' => 'Logo Left Margin..........'
            )
        ),
        array (
            'id' => 'margin_logo_right',
            'type' => 'text',
            'title' => __('Logo Right Margin','redux-framework-demo'),
            'subtitle'  => __('Logo Right Margin.', 'redux-framework-demo'),
            'desc' => __('In pixels, eg: 10px','redux-framework-demo'),
            'default' => '0px',
            'hint' => array(
                'title'   => __('Logo Right Margin','redux-framework-demo'),
                'content' => 'Logo Right Margin..........'
            )
        ),
        array (
            'id' => 'margin_logo_top',
            'type' => 'text',
            'title' => __('Logo Top Margin','redux-framework-demo'),
            'subtitle'  => __('Logo Top Margin.', 'redux-framework-demo'),
            'desc' => __('In pixels, eg: 10px','redux-framework-demo'),
            'default' => '10px',
            'hint' => array(
                'title'   => __('Logo Top Margin','redux-framework-demo'),
                'content' => 'Logo Top Margin..........'
            )
        ),
        array (
            'id' => 'margin_logo_bottom',
            'type' => 'text',
            'title' => __('Logo Bottom Margin','redux-framework-demo'),
            'subtitle'  => __('Logo Bottom Margin.', 'redux-framework-demo'),
            'desc' => __('In pixels, eg: 10px','redux-framework-demo'),
            'default' => '10px',
            'hint' => array(
                'title'   => __('Logo Bottom Margin','redux-framework-demo'),
                'content' => 'Logo Bottom Margin..........'
            )
        ),
        array (
            'id' => 'logo_text_top_margin',
            'type' => 'text',
            'title' => __('Logo Text Top Margin','redux-framework-demo'),
            'subtitle'  => __('Logo Text Top Margin.', 'redux-framework-demo'),
            'desc' =>__( 'In pixels, eg: 10px','redux-framework-demo'),
            'default' => '10px',
            'hint' => array(
                'title'   => __('Logo Text Top Margin','redux-framework-demo'),
                'content' => 'Logo Text Top Margin..........'
            )
        ),
        array (
            'id' => 'logo_text_margin_bottom',
            'type' => 'text',
            'title' => __('Logo Text Bottom Margin','redux-framework-demo'),
            'subtitle'  => __('Logo Text Bottom Margin.', 'redux-framework-demo'),
            'desc' => __('In pixels, eg: 10px','redux-framework-demo'),
            'default' => '10px',
            'hint' => array(
                'title'   => __('Logo Text Bottom Margin','redux-framework-demo'),
                'content' => 'Logo Text Bottom Margin..........'
            )
        ),
        array (
            'id' => 'favicons',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Favicon Options</h3>',
        ),
        array (
            'id' => 'favicon',
            'type' => 'media',
            'title' => __('Favicon','redux-framework-demo'),
            'subtitle'  => __('Favicon.', 'redux-framework-demo'),
            'desc' => __('Favicon for your website (16px x 16px).','redux-framework-demo'),
            'url' => true,
            'hint' => array(
                'title'   => __('Favicon','redux-framework-demo'),
                'content' => 'Favicon..........'
            )
        ),
        array (
            'id' => 'iphone_icon',
            'type' => 'media',
            'title' => __('Apple iPhone Icon Upload','redux-framework-demo'),
            'subtitle'  => __('Apple iPhone Icon Upload.', 'redux-framework-demo'),
            'desc' => __('Favicon for Apple iPhone (57px x 57px).','redux-framework-demo'),
            'url' => true,
            'hint' => array(
                'title'   => __('Apple iPhone Icon Upload','redux-framework-demo'),
                'content' => 'Apple iPhone Icon Upload..........'
            )
        ),
        array (
            'id' => 'iphone_icon_retina',
            'type' => 'media',
            'title' => __('Apple iPhone Retina Icon Upload','redux-framework-demo'),
            'subtitle'  => __('Apple iPhone Retina Icon Upload.', 'redux-framework-demo'),
            'desc' => __('Favicon for Apple iPhone Retina Version (114px x 114px).','redux-framework-demo'),
            'url' => true,
            'hint' => array(
                'title'   => __('Apple iPhone Retina Icon Upload','redux-framework-demo'),
                'content' => 'Apple iPhone Retina Icon Upload..........'
            )
        ),
        array (
            'id' => 'ipad_icon',
            'type' => 'media',
            'title' => __('Apple iPad Icon Upload','redux-framework-demo'),
            'subtitle'  => __('Apple iPad Icon Upload.', 'redux-framework-demo'),
            'desc' => __('Favicon for Apple iPad (72px x 72px).','redux-framework-demo'),
            'url' => true,
            'hint' => array(
                'title'   => __('Apple iPad Icon Upload','redux-framework-demo'),
                'content' => 'Apple iPad Icon Upload..........'
            )
        ),
        array (
            'id' => 'ipad_icon_retina',
            'type' => 'media',
            'title' => __('Apple iPad Retina Icon Upload','redux-framework-demo'),
            'subtitle'  => __('Apple iPad Retina Icon Upload.', 'redux-framework-demo'),
            'desc' => __('Favicon for Apple iPad Retina Version (144px x 144px).','redux-framework-demo'),
            'url' => true,
            'hint' => array(
                'title'   => __('Apple iPad Retina Icon Upload','redux-framework-demo'),
                'content' => 'Apple iPad Retina Icon Upload..........'
            )
        )

    )
);
/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el el-th',
    'title'     => __('Main Menu', 'redux-framework-demo'),
    'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
	
		array (
            'id' => 'menu_options',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Menu Options</h3>',
        ),
        array (
            'id' => 'main_nav_show_home_icon',
            'type' => 'switch',
            'title' =>  __('Show Home Icon', 'redux-framework-demo'),
            'subtitle'  => __('Enable home icon on main menu.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'compiler' => array('main_nav_show_home_icon'),
            //'output' => array('main_nav_show_home_icon'),
            'hint' => array(
                'title'   => __('Show Home Icon','redux-framework-demo'),
                'content' => 'This option Enables/Disables <strong>Home Icon</strong> on main menu. Choose <strong>YES</strong> to home icon on main menu, Choose <strong>NO</strong> to remove it. Default value is <strong>YES</strong>.'
            )
        ),
        array (
            'id' => 'main_nav_show_home_link',
            'type' => 'switch',
            'title' =>  __('Show Home Link', 'redux-framework-demo'),
            'subtitle'  => __('Enable home link on main menu.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'compiler' => array('main_nav_show_home_link'),
            //'output' => array('main_nav_show_home_icon'),
            'hint' => array(
                'title' =>  __('Show Home Link', 'redux-framework-demo'),
                'content' => 'This option Enables/Disables <strong>Home Link</strong> on main menu. Choose <strong>YES</strong> to show home icon on main menu, Choose <strong>NO</strong> to remove it. Default value is <strong>YES</strong>.'
            )
        ),
        array (
            'id' => 'main_nav_show_description',
            'type' => 'switch',
            'title' =>  __('Show Menu Description', 'redux-framework-demo'),
            'subtitle'  => __('Enable Menu Description on main menu.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'compiler' => array('main_nav_show_description'),
            //'output' => array('main_nav_show_home_icon'),
            'hint' => array(
                'title' =>  __('Show Menu Description', 'redux-framework-demo'),
                'content' => 'This option Enables/Disables <strong>Description</strong> on main menu. Choose <strong>YES</strong> to show description on main menu, Choose <strong>NO</strong> to remove it. Default value is <strong>NO</strong>.'
            )
        ),
        array (
            'id' => 'main_nav_search_icon',
            'type' => 'switch',
            'title' =>  __('Show Search Icon in Main Menu', 'redux-framework-demo'),
            'subtitle'  => __('Enable Search on main menu.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'compiler' => array('main_nav_show_description'),
            //'output' => array('main_nav_show_home_icon'),
            'hint' => array(
                'title' =>  __('Show Search Icon in Main Menu', 'redux-framework-demo'),
                'content' => 'This option Enables/Disables <strong>Search Icon</strong> on main menu. Choose <strong>YES</strong> to show Search Icon on main menu, Choose <strong>NO</strong> to remove it. Default value is <strong>YES</strong>.'
            ),
        ),
        array (
            'id' => 'main_nav_icon_circle',
            'type' => 'switch',
            'title' =>  __('Show Circle on Search Icon', 'redux-framework-demo'),
            'subtitle'  => __('Enable Search on main menu.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'hint' => array(
                'title' =>  __('Show Circle on Search Icon', 'redux-framework-demo'),
                'content' => 'This option Enables/Disables <strong>Show Circle</strong> on Search Icon. Choose <strong>YES</strong> to show Circle on Search Icon, Choose <strong>NO</strong> to remove it. Default value is <strong>YES</strong>.'
            ),
        ),


        /*array (
            'id' => 'main_nav_icon_circle',
            'type' => 'switch',
            'title' => __('Enable Circle Border On Menu Icons','redux-framework-demo'),
            'subtitle'  => __('Enable Circle Border On Menu Icons.', 'redux-framework-demo'),
            'desc' => __('YES to enable a circle border on the main menu cart and search icons.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'hint' => array(
                'title' =>  __('Enable Circle Border On Menu Icons', 'redux-framework-demo'),
                'content' => 'Enable Circle Border On Menu Icons.........'
            ),
        ),*/
		
		array (
            'id' => 'menu_text_align',
            'type' => 'select',
            'title' => __('Menu Text Align','redux-framework-demo'),
            'subtitle'  => __('Controls the alignment of the text in the menu for top headers 4-5 and side headers.', 'redux-framework-demo'),
            'desc' => __('choose from list.','redux-framework-demo'),
            'options' => array (
                'left' => 'Left',
                'center' => 'Center',
                'right' => 'Right',
            ),
            'default' => 'left',
            'hint' => array(
						'title'   => __('Menu Text Align','redux-framework-demo'),
						'content' => 'Menu Text Align..........'
			)
        ),
        
        array(
            'id'            => 'nav_height',
            'type'          => 'slider',
            'title'         => __( 'Main Menu Height', 'redux-framework-demo' ),
            'subtitle'      => __( 'Controls the Height of Main Navigation', 'redux-framework-demo' ),
            'desc'          => __( 'Use <strong>Text Box</strong> or <strong>Slider</strong> to set the value. Default value is <strong>40</strong>.', 'redux-framework-demo' ),
            'default'       => 40,
            'min'           => 0,
            'step'          => 1,
            'max'           => 100,
            'display_value' => 'text',
            'hint' => array(
                'title'   => __( 'Main Menu Height', 'redux-framework-demo' ),
                'content' => __( 'Choose the height of main menu on header. Use <strong>Text Box</strong> or <strong>Slider</strong> to set the value. Default value is <strong>40</strong>.', 'redux-framework-demo' ),
            ),
        ),
        array(
            'id'            => 'main_nav_margin',
            'type'          => 'slider',
            'title'         => __( 'Main Menu Margin', 'redux-framework-demo' ),
            'subtitle'      => __( 'Controls the Margin of Main Navigation', 'redux-framework-demo' ),
            'desc'          => __( 'Use <strong>Text Box</strong> or <strong>Slider</strong> to set the margin between <strong>Main Menu Items</strong>. Default value is <strong>0</strong>.', 'redux-framework-demo' ),
            'default'       => 0,
            'min'           => 0,
            'step'          => 1,
            'max'           => 100,
            'display_value' => 'text',
            'hint' => array(
                'title'   => __( 'Main Menu Item Margin', 'redux-framework-demo' ),
                'content' => __( 'Choose the margin of main menu on header. Use <strong>Text Box</strong> or <strong>Slider</strong> to set the value. Default value is <strong>0</strong>.', 'redux-framework-demo' ),
            ),
        ),
        array(
            'id'            => 'nav_padding',
            'type'          => 'slider',
            'title'         => __( 'Main Menu Padding', 'redux-framework-demo' ),
            'subtitle'      => __( 'Controls the Padding of Main Navigation', 'redux-framework-demo' ),
            'desc'          => __( 'Use <strong>Text Box</strong> or <strong>Slider</strong> to set the padding between <strong>Main Menu Items</strong>. Default value is <strong>15</strong>.', 'redux-framework-demo' ),
            'default'       => 15,
            'min'           => 0,
            'step'          => 1,
            'max'           => 100,
            'display_value' => 'text',
            'hint' => array(
                'title'   => __( 'Main Menu Item Padding', 'redux-framework-demo' ),
                'content' => __( 'Choose the margin of main menu on header. Use <strong>Text Box</strong> or <strong>Slider</strong> to set the value. Default value is <strong>15</strong>.', 'redux-framework-demo' ),
            ),
        ),
        array(
            'id'            => 'dropdown_menu_width',
            'type'          => 'slider',
            'title'         => __( 'Sub Menu Dropdown Width', 'redux-framework-demo' ),
            'subtitle'      => __( 'Controls the Width of Sub-Menu Dropdown', 'redux-framework-demo' ),
            'desc'          => __( 'Use <strong>Text Box</strong> or <strong>Slider</strong> to set width of submenu dropdown of main menu on header. Default value is <strong>220</strong>.', 'redux-framework-demo' ),
            'default'       => 220,
            'min'           => 100,
            'step'          => 5,
            'max'           => 500,
            'display_value' => 'text',
            'hint' => array(
                'title'   => __( 'dropdown_menu_width', 'redux-framework-demo' ),
                'content' => __( 'Choose the width of submenu dropdown of main menu on header. Use <strong>Text Box</strong> or <strong>Slider</strong> to set the value. Default value is <strong>220</strong>.', 'redux-framework-demo' ),
            ),
        ),
		
		array(
            'id'            => 'mainmenu_dropdown_vertical_padding',
            'type'          => 'text',
            'title'         => __( 'Main Menu Dropdown Item Top/Bottom Padding', 'redux-framework-demo' ),
            'subtitle'      => __( 'Main Menu Dropdown Item Top/Bottom Padding', 'redux-framework-demo' ),
            'desc'          => __( 'In pixels, eg: 7px', 'redux-framework-demo' ),
            'default'       => '7px',
            'hint' => array(
                'title'   => __( 'Main Menu Dropdown Item Top/Bottom Padding', 'redux-framework-demo' ),
                'content' => __( 'In pixels, eg: 7px', 'redux-framework-demo' ),
            ),
        ),
		array (
            'id' => 'mainmenu_dropdown_display_divider',
            'type' => 'switch',
            'title' => __('Main Menu Dropdown Item Divider','redux-framework-demo'),
            'subtitle'  => __('display a divider on the menu dropdown items.', 'redux-framework-demo'),
            'desc' => __('Check to display a divider on the menu dropdown items.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'hint' => array(
                'title' =>  __('Main Menu Dropdown Item Divider', 'redux-framework-demo'),
                'content' => 'Main Menu Dropdown Item Divider.........'
            ),
        ),
		array (
            'id' => 'menu_display_dropdown_indicator',
            'type' => 'switch',
            'title' => __('Dropdown Menu Indicator','redux-framework-demo'),
            'subtitle'  => __('Enable arrow indicators next to parent level menu items.', 'redux-framework-demo'),
            'desc' => __('Check the box to enable arrow indicators next to parent level menu items.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'hint' => array(
                'title' =>  __('Dropdown Menu Indicator', 'redux-framework-demo'),
                'content' => 'Dropdown Menu Indicator.........'
            ),
        ),


        array (
            'id' => 'topmenu_dropwdown_width',
            'type' => 'text',
            'title' => __('Top Menu Dropdown Width','redux-framework-demo' ),
            'subtitle'      => __( 'Width of Top Menu Dropdown', 'redux-framework-demo' ),
            'desc' => __('In pixels, eg: 100px','redux-framework-demo' ),
            'default' => '100px',
            'hint' => array(
                'title'   => __( 'Top Menu Dropdown Width', 'redux-framework-demo' ),
                'content' => __( 'Choose the width of top menu dropdown of main menu on header. Use <strong>Text Box</strong> or <strong>Slider</strong> to set the value. Default value is <strong>220</strong>.', 'redux-framework-demo' ),
            ),
        ),
        array(
            'id'        => 'nav-exclude-pages',
            'type'      => 'select',
            'multi'     => true,
            'data'      => 'pages',
            'title'     => __('Exclude Pages from Main Menu', 'redux-framework-demo'),
            'subtitle'  => __('The selected pages will be excluded from main menu', 'redux-framework-demo'),
            'desc'      => __('Select pages you dont want to show on menu.', 'redux-framework-demo'),
            'hint' => array(
                'title'   => __( 'Exclude Pages from Main Menu', 'redux-framework-demo' ),
                'content' => __( 'Exclude Pages from Main Menu.', 'redux-framework-demo' ),
            ),
        ),
        array (
            'id' => 'main_nav_animation',
            'type' => 'select',
            'title' =>__('Menu Animation','redux-framework-demo'),
            'subtitle'  => __('Animation for main menu', 'redux-framework-demo'),
            'desc' => __('Choose Main Menu Animation','redux-framework-demo'),
            'default' => 'slide',
            'options' => array (
                'slide' => 'Slide',
                'underline' => 'Underline',
                'topline' => 'Top Line',
                'rotate' => '3D Rotate',
            ),
            'hint' => array(
                'title'   => __( 'Menu Animation', 'redux-framework-demo' ),
                'content' => __( 'Menu Animation.', 'redux-framework-demo' ),
            ),
        ),

        array (
            'id' => 'main_nav_animation_direction',
            'type' => 'select',
            'title' => __('Menu Animation Direction','redux-framework-demo'),
            'subtitle'  => __('Direction for Main Menu Animation', 'redux-framework-demo'),
            'desc' => __('Choose Main Menu Animation Direction','redux-framework-demo'),
            'required' => array('main_nav_animation', "=", array( 'slide', 'underline', 'topline','rotate' )),
            'default' => 'up',
            'options' => array (
                'up' => 'Up',
                'down' => 'Down',
                'left' => 'Left',
                'right' => 'Right',
            ),
            'hint' => array(
                'title'   => __( 'Menu Animation Direction', 'redux-framework-demo' ),
                'content' => __( 'Menu Animation Direction.', 'redux-framework-demo' ),
            ),
        ),


        /*array (
            'id' => 'megamenu_title_size',
            'type' => 'text',
            'title' => __('Mega Menu Column Title Size','redux-framework-demo'),
            'subtitle'  => __('Mega Menu Column Title Size', 'redux-framework-demo'),
            'desc' => __('Set the font size for mega menu column titles (menu 2nd level labels). In pixels, eg: 18px','redux-framework-demo'),
            'default' => '18px',
            'hint' => array(
                'title'   => __( 'Mega Menu Column Title Size', 'redux-framework-demo' ),
                'content' => __( 'Mega Menu Column Title Size.', 'redux-framework-demo' ),
            ),
        ),*/
		
		array (
            'id' => 'mobile_menu_options',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Mobile Menu Options</h3>',
        ),
		
		array (
            'id' => 'mobile_menu_design',
            'type' => 'select',
            'title' => __('Mobile Menu Design Style','redux-framework-demo'),
            'subtitle'  => __('Menu Design Style for Mobile screen', 'redux-framework-demo'),
            'desc' => __('Select between classic or modern mobile design.','redux-framework-demo'),
            'options' => array (
                'classic' => 'Classic',
                'modern' => 'Modern',
            ),
			'default'   => 'classic',
            'hint' => array(
                'title'   => __( 'Mobile Menu Design Style', 'redux-framework-demo' ),
                'content' => __( 'Mobile Menu Design Style.', 'redux-framework-demo' ),
            ),
        ),
		array (
            'id' => 'mobile_nav_padding',
            'type' => 'text',
            'title' => __('Mobile Menu Item Padding','redux-framework-demo' ),
            'subtitle'      => __( 'Menu Item Padding for Mobile screen. Controls right (left on RTL) menu padding on mobile devices when the normal menu is used.', 'redux-framework-demo' ),
            'desc' => __('Use a number without "px", default is 25. eg: 25','redux-framework-demo' ),
            'default' => '25',
            'hint' => array(
                'title'   => __( 'Mobile Menu Item Padding', 'redux-framework-demo' ),
                'content' => __( 'Controls right (left on RTL) menu padding on mobile devices when the normal menu is used. Use a number without "px", default is 25. eg: 25', 'redux-framework-demo' ),
            ),
        ),
		array (
            'id' => 'mobile_menu_text_align',
            'type' => 'select',
            'title' => __('Mobile Menu Text Align','redux-framework-demo'),
            'subtitle'  => __('Controls the alignment of menu text on mobile menu.', 'redux-framework-demo'),
            'desc' => __('choose from list.','redux-framework-demo'),
            'options' => array (
                'left' => 'Left',
                'center' => 'Center',
                'right' => 'Right',
            ),
            'default' => 'left',
            'hint' => array(
						'title'   => __('Mobile Menu Text Align','redux-framework-demo'),
						'content' => 'Mobile Menu Text Align..........'
			)
        ),
		array (
            'id' => 'mobile_menu_icons_top_margin',
            'type' => 'text',
            'title' => __('Mobile Menu Icons Top Margin','redux-framework-demo' ),
            'subtitle'      => __( 'Controls the top margin for the icons in the modern mobile menu sticky header.', 'redux-framework-demo' ),
            'desc' => __('In pixels, eg: 100px','redux-framework-demo' ),
            'default' => '0px',
            'hint' => array(
                'title'   => __( 'Mobile Menu Icons Top Margin', 'redux-framework-demo' ),
                'content' => __( 'Controls right (left on RTL) menu padding on mobile devices when the normal menu is used. Use a number without "px", default is 25. eg: 25', 'redux-framework-demo' ),
            ),
        ),
		array (
            'id' => 'mobile_menu_nav_height',
            'type' => 'text',
            'title' => __('Mobile Menu Navigation Height','redux-framework-demo' ),
            'subtitle'      => __( 'Controls the Navigation menu height of each menu item.', 'redux-framework-demo' ),
            'desc' => __('Use a number without "px", default is 35.','redux-framework-demo' ),
            'default' => '35',
            'hint' => array(
                'title'   => __( 'Mobile Menu Navigation Height', 'redux-framework-demo' ),
                'content' => __( 'Controls right (left on RTL) menu padding on mobile devices when the normal menu is used. Use a number without "px", default is 25. eg: 25', 'redux-framework-demo' ),
            ),
        ),
		
		array (
            'id' => 'mobile_nav_submenu_slideout',
            'type' => 'switch',
            'title' => __('Mobile Menu Submenu Slide Outs','redux-framework-demo'),
            'subtitle'  => __('Group submenu to slideout elements on mobile menu.', 'redux-framework-demo'),
            'desc' => __('Check to group submenu to slideout elements on mobile menu.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'hint' => array(
                'title' =>  __('Mobile Menu Submenu Slide Outs', 'redux-framework-demo'),
                'content' => 'Mobile Menu Submenu Slide Outs.........'
            ),
        ),

    )
);
/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-plus',
    'title'     => __('Sliding Bar', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(

        array (
            'id' => 'slidingbar_widgets',
            'type' => 'switch',
            'title' => __('Show Sliding Bar','redux-framework-demo'),
            'subtitle'  => __('Enable the top sliding bar.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
			'hint' => array(
                'title'   => __('Show Sliding Bar','redux-framework-demo'),
                'content' =>  __('Sliding Bar is the area hidden at the top of website which can be slides down on clicking on <strong>+(Plus)</strong> button on right corner. Choose <strong>YES</strong> to show sliding bar, Choose <strong>NO</strong> to hide it. Default value is <strong>YES</strong>.','redux-framework-demo'),
            ),
        ),
        array (
            'id' => 'mobile_slidingbar_widgets',
            'type' => 'switch',
            'title' => __('Disable Sliding Bar On Mobile','redux-framework-demo'),
            'subtitle'  => __('Disable Sliding Bar On Mobile', 'redux-framework-demo'),
            'desc' => __('Disable the top Sliding Bar on mobile devices.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'hint' => array(
                'title'   => __( 'Disable Sliding Bar On Mobile', 'redux-framework-demo' ),
                'content' => __( 'Disable Sliding Bar On Mobile.', 'redux-framework-demo' ),
            ),
        ),
        array (
            'id' => 'slidingbar_top_border',
            'type' => 'switch',
            'title' => __('Enable Top Border on Sliding Bar','redux-framework-demo'),
            'subtitle'  => __('Enable Top Border on Sliding Bar', 'redux-framework-demo'),
            'desc' => __('YES to Enable a top border on the Sliding Bar.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'hint' => array(
                'title'   => __( 'Enable Top Border on Sliding Bar', 'redux-framework-demo' ),
                'content' => __( 'Enable Top Border on Sliding Bar.', 'redux-framework-demo' ),
            ),
        ),
        array (
            'id' => 'slidingbar_bg_color_transparency',
            'type' => 'switch',
            'title' => __('Enable Transparency on the Sliding Bar','redux-framework-demo'),
            'subtitle'  => __('Enable Transparency on the Sliding Bar', 'redux-framework-demo'),
            'desc' => __('Check the box to enable transparency on the Sliding Bar.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'hint' => array(
                'title'   => __('Enable Transparency on the Sliding Bar', 'redux-framework-demo' ),
                'content' => __('Enable Transparency on the Sliding Bar.', 'redux-framework-demo' ),
            ),
        ),
        array (
            'id' => 'slidingbar_open_on_load',
            'type' => 'switch',
            'title' => __('Sliding Bar Open On Page Load','redux-framework-demo'),
            'subtitle'  => __('Sliding Bar Open On Page Load', 'redux-framework-demo'),
            'desc' => __('Check the box to have the sliding bar open when the page loads.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'hint' => array(
                'title'   => __('Sliding Bar Open On Page Load', 'redux-framework-demo' ),
                'content' => __('Sliding Bar Open On Page Load.', 'redux-framework-demo' ),
            ),
        ),
        array (
            'id' => 'slidingbar_widgets_columns',
            'options' => array (
                1 => '1',
                2 => '2',
                3 => '3',
                4 => '4',
            ),
            'type' => 'select',
            'title' => __('Number of Sliding Bar Columns','redux-framework-demo'),
            'subtitle'  => __('Select the number of columns to display in the Sliding Bar.', 'redux-framework-demo'),
            'desc' => __('Select the number of columns to display in the Sliding Bar.','redux-framework-demo'),
            'default' => '2',
            'hint' => array(
                'title'   => __('Number of Sliding Bar Columns', 'redux-framework-demo' ),
                'content' => __('Number of Sliding Bar Columns.', 'redux-framework-demo' ),
            ),
        )

    )
);
?>