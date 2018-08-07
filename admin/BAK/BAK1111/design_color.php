<?php
/*********************************************************************************************
 *
 *  Color settings
 *
 *********************************************************************************************/

	$this->sections[] = array(
		'title' => __('Color','redux-framework-demo'),
		'icon'      => 'el-icon-magic',
		'desc'      => '',
		'fields' => array(
			array (
				'subtitle'      => __('Select a skin, all color options will automatically change to the defined skin.', 'redux-framework-demo'),
				'desc' => 'Select a skin from the list',
				'id' => 'scheme_type',
				'type' => 'select',
				'options' => array (
					'Light' => 'Light',
					'Dark' => 'Dark',
				),
				'title' => 'Select Theme Skin',
				'default' => 'Light',
			),
			array (
				'subtitle'      => __('Select a scheme, all color options will automatically change to the defined scheme.', 'redux-framework-demo'),
				'desc' => 'Select a scheme from the list',
				'id' => 'color_scheme',
				'type' => 'select',
				'options' => array (
					'Red' => 'Red',
					'Light Red' => 'Light Red',
					'Blue' => 'Blue',
					'Light Blue' => 'Light Blue',
					'Green' => 'Green',
					'Dark Green' => 'Dark Green',
					'Orange' => 'Orange',
					'Pink' => 'Pink',
					'Brown' => 'Brown',
					'Light Grey' => 'Light Grey',
				),
				'title' => 'Predefined Color Scheme',
				'default' => 'Green',
			),
			array (
				'subtitle'      => __('Controls several items, ex: link hovers, highlights, and more.', 'redux-framework-demo'),
				'desc' => 'Choose your option',
				'id' => 'primary_color',
				'type' => 'color',
				'title' => 'Primary Color',
				'default' => '#a0ce4e',
			),
			array (
				'subtitle'      => __('Controls the text color of body font.', 'redux-framework-demo'),
				'desc' => 'Choose your option',
				'id' => 'body_text_color',
				'type' => 'color',
				'title' => 'Body Text Color',
				'default' => '#747474',
			),
			array (
				'subtitle'      => __('Controls the color of all text links as well as the \'>\' in certain areas.', 'redux-framework-demo'),
				'desc' => 'Choose your option',
				'id' => 'link_color',
				'type' => 'color',
				'title' => 'Link Color',
				'default' => '#333333',
			),
			array (
				'subtitle'      => __('Controls the text color of H1 headings.', 'redux-framework-demo'),
				'desc' => 'Choose your option',
				'id' => 'h1_color',
				'type' => 'color',
				'title' => 'Heading 1 (H1) Font Color',
				'default' => '#333333',
			),
			array (
				'subtitle'      => __('Controls the text color of H2 headings.', 'redux-framework-demo'),
				'desc' => 'Choose your option',
				'id' => 'h2_color',
				'type' => 'color',
				'title' => 'Heading 2 (H2) Font Color',
				'default' => '#333333',
			),
			array (
				'subtitle'      => __('Controls the text color of H3 headings.', 'redux-framework-demo'),
				'desc' => 'Choose your option',
				'id' => 'h3_color',
				'type' => 'color',
				'title' => 'Heading 3 (H3) Font Color',
				'default' => '#333333',
			),
			array (
				'subtitle'      => __('Controls the text color of H4 headings.', 'redux-framework-demo'),
				'desc' => 'Choose your option',
				'id' => 'h4_color',
				'type' => 'color',
				'title' => 'Heading 4 (H4) Font Color',
				'default' => '#333333',
			),
			array (
				'subtitle'      => __('Controls the text color of H5 headings.', 'redux-framework-demo'),
				'desc' => 'Choose your option',
				'id' => 'h5_color',
				'type' => 'color',
				'title' => 'Heading 5 (H5) Font Color',
				'default' => '#333333',
			),
			array (
				'subtitle'      => __('Controls the text color of H6 headings.', 'redux-framework-demo'),
				'desc' => 'Choose your option',
				'id' => 'h6_color',
				'type' => 'color',
				'title' => 'Heading 6 (H6) Font Color',
				'default' => '#333333',
			),
			
			array (

				'id' => 'slidingbar_bg_color',
				'type' => 'info',
				'title' => 'Sliding Bar Background Color and Opacity',
				'default' => array (
					'color' => '#363839',
					'opacity' => '1',
				),
				'raw_html' => true,
			),
			
			array (
				'id' => 'image_gradient_top_color',
				'type' => 'info',
				'title' => 'Rollover Image Gradient Top Color and Opacity',
				'default' => array (
					'color' => '#a0ce4e',
					'opacity' => '0.8',
				),
				'raw_html' => true,
			),
			array (
				'subtitle'      => __('Controls the bottom color of the image rollover gradients.', 'redux-framework-demo'),
				'desc' => 'choose your option',
				'id' => 'image_gradient_bottom_color',
				'type' => 'color',
				'title' => 'Rollover Image Gradient Bottom Color',
				'default' => '#a0ce4e',
			),
			array (
				'subtitle'      => __('This option controls the color of image rollover text and the icon circle backgrounds.', 'redux-framework-demo'),
				'desc' => 'choose your option',
				'id' => 'image_rollover_text_color',
				'type' => 'color',
				'title' => 'Rollover Image Element Color',
				'default' => '#333333',
			),
			array (
				'subtitle'  => __('Controls the color of the icons in the rollover.', 'redux-framework-demo'),
				'desc' => 'choose your option',	
				'id' => 'image_rollover_icon_color',
				'type' => 'color',
				'title' => 'Rollover Image Icon Color',
				'default' => '#ffffff',
			),
			
			
			array (
				'subtitle'  => __('Controls the background color of form fields.', 'redux-framework-demo'),
				'desc' => 'choose your option',		
				'id' => 'form_bg_color',
				'type' => 'color',
				'title' => 'Form Background Color',
				'default' => '#ffffff',
			),
			array (
				'subtitle'  => __('Controls the text color for forms.', 'redux-framework-demo'),
				'desc' => 'choose your option',
				'id' => 'form_text_color',
				'type' => 'color',
				'title' => 'Form Text Color',
				'default' => '#aaa9a9',
			),
			array (
				'subtitle'  => __('Controls the border color of form fields.', 'redux-framework-demo'),
				'desc' => 'choose your option',
				'id' => 'form_border_color',
				'type' => 'color',
				'title' => 'Form Border Color',
				'default' => '#d2d2d2',
			),
			array (
				'subtitle'  => __('Controls blog grid, timeline, portfolio boxed items and Woocommerce post box background color.', 'redux-framework-demo'),
				'desc' => 'choose your option',	
				'id' => 'timeline_bg_color',
				'type' => 'color',
				'title' => 'Grid Box Color',
				'default' => 'transparent',
			),
			array (
				'subtitle'  => __('Controls blog grid, timeline, portfolio boxed items, Woocommerce post box border, divider lines, date box and border, timeline dots, timeline icon, timeline arrow.', 'redux-framework-demo'),
				'desc' => 'choose your option',
				'id' => 'timeline_color',
				'type' => 'color',
				'title' => 'Grid Element Color',
				'default' => '#ebeaea',
			),
			array (
				'subtitle'  => __('Controls the background color of the load more button for ajax post loading.', 'redux-framework-demo'),
				'desc' => 'choose your option',
				'id' => 'load_more_posts_button_bg_color',
				'type' => 'color',
				'title' => 'Load More Posts Button Color',
				'default' => '#ebeaea',
			),
			array (
				'subtitle'  => __('Disable the text shadow on rollovers.', 'redux-framework-demo'),
				'desc' => 'Check to disable the text shadow on rollovers.',
				'id' => 'rollover_text_shadow',
				'type' => 'checkbox',
				'title' => 'Disable Rollover Text Shadow',
				'default' => 1,
			),
			
			
			
		),
	);
	
/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-magic',
    'title'     => __('Header Color', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
	
		array (
            'id' => 'header_color',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Header Color Options</h3>',
        ),
		array (
				'subtitle'  => __('Controls the text color of the header tagline font.', 'redux-framework-demo'),
				'desc' => 'choose your option',
				'id' => 'tagline_font_color',
				'type' => 'color',
				'title' => 'Header Tagline Font Color',
				'default' => '#747474',
			),
		array (
				'subtitle'  => __('Controls the border colors for the header. If using left or right header position it controls the menu divider lines.', 'redux-framework-demo'),
				'desc' => 'choose your option',			
				'id' => 'header_border_color',
				'type' => 'color',
				'title' => 'Header Border Color',
				'default' => '#e5e5e5',
			),
	
    )
);

/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-magic',
    'title'     => __('Menu Color', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
	
		array (
				'id' => 'main_menu_colors_wrapper',
				'icon' => true,
				'type' => 'info',
				'raw' => '<h3 style=\'margin: 0;\'>Main Menu Colors</h3>',
			),
			array (
				'desc' => 'Controls the background color of the menu when using header 4 or 5.',
				'id' => 'menu_h45_bg_color',
				'type' => 'color',
				'title' => 'Main Menu Background Color For Header 4 & 5',
				'default' => '#FFFFFF',
			),
			array (
				'desc' => 'Controls the text color of first level menu items.',
				'id' => 'menu_first_color',
				'type' => 'color',
				'title' => 'Main Menu Font Color - First Level',
				'default' => '#333333',
			),
			array (
				'desc' => 'Controls the main menu hover, hover border, dropdown border color & active menu item.',
				'id' => 'menu_hover_first_color',
				'type' => 'color',
				'title' => 'Main Menu Font Hover Color - First Level',
				'default' => '#a0ce4e',
			),
			array (
				'desc' => 'Controls the color of the menu sublevel background.',
				'id' => 'menu_sub_bg_color',
				'type' => 'color',
				'title' => 'Main Menu Background Color - Sublevels',
				'default' => '#f2efef',
			),
			array (
				'desc' => 'Controls the hover color of the menu sublevel background.',
				'id' => 'menu_bg_hover_color',
				'type' => 'color',
				'title' => 'Main Menu Background Hover Color - Sublevels',
				'default' => '#f8f8f8',
			),
			array (
				'desc' => 'Controls the color of the menu font sublevels.',
				'id' => 'menu_sub_color',
				'type' => 'color',
				'title' => 'Main Menu Font Color - Sublevels',
				'default' => '#333333',
			),
			array (
				'desc' => 'Controls the color of the menu separator sublevels.',
				'id' => 'menu_sub_sep_color',
				'type' => 'color',
				'title' => 'Main Menu Separator - Sublevels',
				'default' => '#dcdadb',
			),
		array (
            'id' => 'header_color',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Secondary Menu Color Options</h3>',
        ),
		array (
				'desc' => 'Controls the color of the secondary menu first level and contact info font.',
				'id' => 'snav_color',
				'type' => 'color',
				'title' => 'Secondary Menu Font Color - First Level & Contact Info',
				'default' => '#747474',
			),
			array (
				'desc' => 'Controls the divider color of the first level secondary menu.',
				'id' => 'header_top_first_border_color',
				'type' => 'color',
				'title' => 'Secondary Menu Divider Color - First Level',
				'default' => '#e5e5e5',
			),
			array (
				'desc' => 'Controls the background color of the secondary menu sublevels.',
				'id' => 'header_top_sub_bg_color',
				'type' => 'color',
				'title' => 'Secondary Menu Background Color - Sublevels',
				'default' => '#ffffff',
			),
			array (
				'desc' => 'Controls the text color of the secondary menu font sublevels.',
				'id' => 'header_top_menu_sub_color',
				'type' => 'color',
				'title' => 'Secondary Menu Font Color - Sublevels',
				'default' => '#747474',
			),
			array (
				'desc' => 'Controls the hover color of the secondary menu background sublevels.',
				'id' => 'header_top_menu_bg_hover_color',
				'type' => 'color',
				'title' => 'Secondary Menu Hover Background Color - Sublevels',
				'default' => '#fafafa',
			),
			array (
				'desc' => 'Controls the hover text color of the secondary menu font sublevels.',
				'id' => 'header_top_menu_sub_hover_color',
				'type' => 'color',
				'title' => 'Secondary Menu Hover Font Color - Sublevels',
				'default' => '#333333',
			),
			array (
				'desc' => 'Controls the border color of the secondary menu sublevels.',
				'id' => 'header_top_menu_sub_sep_color',
				'type' => 'color',
				'title' => 'Secondary Menu Border	- Sublevels',
				'default' => '#e5e5e5',
			),
		array (
            'id' => 'header_color',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Mobile Menu Color Options</h3>',
        ),
		array (
				'desc' => 'Controls the background color of the header on mobile devices.',
				'id' => 'mobile_header_bg_color',
				'type' => 'color',
				'title' => 'Mobile Header Background Color',
				'default' => '#ffffff',
			),
			array (
				'desc' => 'Controls the background color of the mobile menu box and dropdown.',
				'id' => 'mobile_menu_background_color',
				'type' => 'color',
				'title' => 'Mobile Menu Background Color',
				'default' => '#f9f9f9',
			),
			array (
				'desc' => 'Controls the border and divider of the mobile menu.',
				'id' => 'mobile_menu_border_color',
				'type' => 'color',
				'title' => 'Mobile Menu Border Color',
				'default' => '#dadada',
			),
			array (
				'desc' => 'Controls the background hover color of the mobile menu items.',
				'id' => 'mobile_menu_hover_color',
				'type' => 'color',
				'title' => 'Mobile Menu Hover Color',
				'default' => '#f6f6f6',
			),
			array (
				'desc' => 'Controls the text color of mobile menu items.',
				'id' => 'mobile_menu_font_color',
				'type' => 'color',
				'title' => 'Mobile Menu Font Color',
				'default' => '#333333',
			),
			array (
				'desc' => 'Controls the color of the mobile menu toggle icon',
				'id' => 'mobile_menu_toggle_color',
				'type' => 'color',
				'title' => 'Mobile Menu Toggle Color',
				'default' => '#dadada',
			),   
    )
);


/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-magic',
    'title'     => __('Topbar Color', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
	
		array (
            'id' => 'topbar_color',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Topbar Color Options</h3>',
        ),
		array (
				'desc' => 'Controls the text color of the topbar font.',
				'id' => 'topbar_text_color',
				'type' => 'color',
				'title' => 'Topbar Font Color',
				'default' => '#e9eaee',
			),  
    )
);

/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-magic',
    'title'     => __('Sliding Bar Color', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
	
		array (
            'id' => 'slidingbar_color',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Sliding Bar Color Options</h3>',
        ),
		array (
				'desc' => 'Controls the text color of the sliding bar heading font.',
				'id' => 'slidingbar_headings_color',
				'type' => 'color',
				'title' => 'Sliding Bar Headings Color',
				'default' => '#DDDDDD',
		),
		array (
			'desc' => 'Controls the font color of the sliding bar font.',
			'id' => 'slidingbar_text_color',
			'type' => 'color',
			'title' => 'Sliding Bar Font Color',
			'default' => '#8C8989',
		),
		array (
			'desc' => 'Controls the text color of the sliding bar link font.',
			'id' => 'slidingbar_link_color',
			'type' => 'color',
			'title' => 'Sliding Bar Link Color',
			'default' => '#BFBFBF',
		),
		array (
				'desc' => 'Controls the icon color of the sliding bar toggle.',
				'id' => 'slidingbar_toggle_icon_color',
				'type' => 'color',
				'title' => 'Sliding Bar Toggle Icon Color',
				'default' => '#ffffff',
		),
		array (
			'desc' => 'Controls the divider color in the sliding bar.',
			'id' => 'slidingbar_divider_color',
			'type' => 'color',
			'title' => 'Sliding Bar Item Divider Color',
			'default' => '#282A2B',
		),   
		array (
				'desc' => 'Check to disable the text shadow in the Sliding Bar.',
				'id' => 'slidingbar_text_shadow',
				'type' => 'checkbox',
				'title' => 'Disable Sliding Bar Text Shadow',
				'default' => 1,
			),
    )
);

/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-magic',
    'title'     => __('Page Title Bar Color', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
	
		array (
            'id' => 'pagetitlebar_color',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Page Title Bar Color Options</h3>',
        ),
		array (
				'desc' => 'Controls the text color of the page title font.',
				'id' => 'page_title_color',
				'type' => 'color',
				'title' => 'Page Title Font Color',
				'default' => '#333333',
			),
		array (
				'desc' => 'Select a color for the page title bar borders.',
				'id' => 'page_title_border_color',
				'type' => 'color',
				'title' => 'Page Title Bar Borders Color',
				'default' => '#d2d3d4',
		),
		array (
			'desc' => 'Controls the text color of the breadcrumb font.',
			'id' => 'breadcrumbs_text_color',
			'type' => 'color',
			'title' => 'Breadcrumbs Text Color',
			'default' => '#333333',
		),
	  
    )
);

/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-magic',
    'title'     => __('Sidebar Color', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
	
		array (
            'id' => 'sidebar_color',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Sidebar Color Options</h3>',
        ),
		array (
				'desc' => 'Controls the text color of the sidebar widget headings.',
				'id' => 'sidebar_heading_color',
				'type' => 'color',
				'title' => 'Sidebar Widget Headings Color',
				'default' => '#333333',
			), 
		array (
				'desc' => 'Controls the background color of the sidebar widget title.',
				'id' => 'sidebar_widget_bg_color',
				'type' => 'color',
				'title' => 'Sidebar Widget Title Background Color',
				'default' => 'transparent',
			),			
    )
);
/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-magic',
    'title'     => __('Footer Color', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
	
		array (
            'id' => 'footer_color',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Footer Color Options</h3>',
        ),
		array (
				'desc' => 'Controls the text color of the footer font.',
				'id' => 'footer_text_color',
				'type' => 'color',
				'title' => 'Footer Font Color',
				'default' => '#8C8989',
		),
		array (
				'desc' => 'Controls the text color of the footer heading font.',
				'id' => 'footer_headings_color',
				'type' => 'color',
				'title' => 'Footer Headings Color',
				'default' => '#DDDDDD',
			),
		array (
				'desc' => 'Controls the text color of the footer link font.',
				'id' => 'footer_link_color',
				'type' => 'color',
				'title' => 'Footer Link Color',
				'default' => '#BFBFBF',
		),
		array (
				'desc' => 'Controls the border colors for the footer.',
				'id' => 'footer_border_color',
				'type' => 'color',
				'title' => 'Footer Border Color',
				'default' => '#e9eaee',
		),
		array (
				'desc' => 'Controls the border colors for the footer copyright.',
				'id' => 'copyright_border_color',
				'type' => 'color',
				'title' => 'Copyright Border Color',
				'default' => '#4b4c4d',
		),
		array (
				'desc' => 'Controls the divider color in the footer.',
				'id' => 'footer_divider_color',
				'type' => 'color',
				'title' => 'Footer Widget Divider Color',
				'default' => '#505152',
		),
	
    )
);

/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-magic',
    'title'     => __('WooCommerce Color', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
	
		array (
            'id' => 'woocommerce_color',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>WooCommerce Color Options</h3>',
        ),
		array (
				'desc' => 'Controls the background color of the woocommerce quantity box.',
				'id' => 'qty_bg_color',
				'type' => 'color',
				'title' => 'Woo Quantity Box Background Color',
				'default' => '#fbfaf9',
			),
			array (
				'desc' => 'Controls the hover color of the woocommerce quantity box.',
				'id' => 'qty_bg_hover_color',
				'type' => 'color',
				'title' => 'Woo Quantity Box Hover Background Color',
				'default' => '#ffffff',
			),
			array (
				'desc' => 'Controls the background color.',
				'id' => 'woo_dropdown_bg_color',
				'type' => 'color',
				'title' => 'WooCommerce Dropdown Background Color',
				'default' => '#fbfaf9',
			),
			array (
				'desc' => 'Controls the color of the text and icons.',
				'id' => 'woo_dropdown_text_color',
				'type' => 'color',
				'title' => 'WooCommerce Dropdown Text Color',
				'default' => '#333333',
			),
			array (
				'desc' => 'Controls the border color.',
				'id' => 'woo_dropdown_border_color',
				'type' => 'color',
				'title' => 'WooCommerce Dropdown Border Color',
				'default' => '#dbdbdb',
			),
			array (
				'desc' => 'Controls the bottom section background color of the woocommerce cart dropdown.',
				'id' => 'woo_cart_bg_color',
				'type' => 'color',
				'title' => 'Woo Cart Menu Background Color',
				'default' => '#fafafa',
			),
	   
    )
);



