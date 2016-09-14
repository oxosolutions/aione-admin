<?php
$this->sections[] = array (
		array (
			'id' => 'heading_general',
			'title' => 'General',
			'fields' => array (
				array (
					'id' => 'code',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Tracking / Space Before Head / Space Before Body Code</h3>',
				),
				array (
					'desc' => 'Paste your Google Analytics (or other) tracking code here. This will be added into the header template of your theme. Please place code inside <script> tags.',
					'id' => 'google_analytics',
					'type' => 'textarea',
					'title' => 'Tracking Code',
				),
				array (
					'desc' => 'Add code before the </head> tag. Only accepts javascript code wrapped with <script> tags and HTML markup that is valid inside the <head> tag. ',
					'id' => 'space_head',
					'type' => 'textarea',
					'title' => 'Space before </head>',
				),
				array (
					'desc' => 'Add code before the </body> tag. Only accepts javascript code, wrapped with <script> tags and valid HTML markup.',
					'id' => 'space_body',
					'type' => 'textarea',
					'title' => 'Space before </body>',
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_responsive',
			'title' => 'Responsive',
			'fields' => array (
				array (
					'desc' => 'Enable to use the responsive design features. If disabled then the fixed layout is used.',
					'id' => 'responsive',
					'on' => 'Enable',
					'off' => 'Disable',
					'type' => 'switch',
					'title' => 'Responsive Design',
					'default' => 1,
				),
				array (
					'desc' => 'Controls when the desktop header changes to the mobile header. In pixels, ex: 800px.',
					'id' => 'side_header_break_point',
					'type' => 'text',
					'title' => 'Header Responsive Breakpoint',
					'default' => '800px',
				),
				array (
					'desc' => 'Controls when the site content area changes to the mobile layout. This includes all content on the page except for the header area and blog/portfolio grid sections. If you are using a side header, the breakpoint value you enter will automatically include the side header width.	In pixels, ex: 800px.',
					'id' => 'content_break_point',
					'type' => 'text',
					'title' => 'Site Content Responsive Breakpoint',
					'default' => '800px',
				),
				array (
					'desc' => 'Controls when blog/portfolio grid layouts start to break into smaller amounts of columns. Further breakpoints are auto calculated. In pixels, ex: 1000px.',
					'id' => 'grid_main_break_point',
					'type' => 'text',
					'title' => 'Grid Responsive Breakpoint',
					'default' => '1099px',
				),
				array (
					'desc' => 'Check this box if you want site headings to change font size responsively.',
					'id' => 'typography_responsive',
					'on' => 'Enable',
					'off' => 'Disable',
					'type' => 'switch',
					'title' => 'Responsive Heading Typography',
				),
				array (
					'desc' => 'Values below 1 decrease resizing, values above 1 increase sizing. ex: .6',
					'id' => 'typography_sensitivity',
					'type' => 'text',
					'title' => 'Responsive Typography Sensitivity',
					'default' => '0.6',
				),
				array (
					'desc' => 'Minimum font factor is used to determine minimum distance between headings and body type by a multiplying value. ex: 1.5',
					'id' => 'typography_factor',
					'type' => 'text',
					'title' => 'Mininum Font Size Factor',
					'default' => '1.5',
				),
				array (
					'desc' => 'Enable to allow pinch to zoom on mobile devices.',
					'id' => 'mobile_zoom',
					'on' => 'Enable',
					'off' => 'Disable',
					'type' => 'switch',
					'title' => 'Enable Zoom on mobile devices',
					'default' => 1,
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_site_width',
			'title' => 'Site Width',
			'fields' => array (
				array (
					'desc' => 'Select boxed or wide layout.',
					'id' => 'layout',
					'type' => 'select',
					'options' => array (
						'Boxed' => 'Boxed',
						'Wide' => 'Wide',
					),
					'title' => 'Layout',
					'default' => 'Wide',
				),
				array (
					'desc' => 'Controls the overall site width. In px or %, ex: 100% or 1170px.',
					'id' => 'site_width',
					'type' => 'text',
					'title' => 'Site Width',
					'default' => '1100px',
				),
				array (
					'id' => 'content_sidebar_width',
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Sidebar Width</h3><p>These settings are used on pages with 1 sidebar.</p>',
				),
				array (
					'desc' => 'Controls the width of the sidebar. In px or %, ex: 100% or 1170px.',
					'id' => 'sidebar_width',
					'type' => 'text',
					'title' => 'Sidebar Width',
					'default' => '23%',
				),
				array (
					'id' => 'content_sidebar_sidebar_width',
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Sidebar + Sidebar Width</h3><p>These settings are used on pages with 2 sidebars.</p>',
				),
				array (
					'desc' => 'Controls the width of the sidebar 1. In px or %, ex: 100% or 1170px.',
					'id' => 'sidebar_2_1_width',
					'type' => 'text',
					'title' => 'Sidebar 1 Width',
					'default' => '21%',
				),
				array (
					'desc' => 'Controls the width of the sidebar 2. In px or %, ex: 100% or 1170px.',
					'id' => 'sidebar_2_2_width',
					'type' => 'text',
					'title' => 'Sidebar 2 Width',
					'default' => '21%',
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_header',
			'title' => 'Header',
			'fields' => array (
				array (
					'id' => 'header_info_1',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'Header Info',
					'default' => '<h3 style=\'margin: 0;\'>Header Content Options</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(13) "header_info_1"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(11) "Header Info"
		["default"]=>
		string(50) "<h3 style=\'margin: 0;\'>Header Content Options</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Select the position of header. Left/Right position will not display the header content options 1-3 on mobile devices, only on desktop.',
					'id' => 'header_position',
					'type' => 'select',
					'options' => array (
						'Top' => 'Top',
						'Left' => 'Left',
						'Right' => 'Right',
					),
					'title' => 'Header Position',
					'default' => 'Top',
				),
				array (
					'id' => 'header_layout',
					'type' => 'image_select',
					'options' => array (
						'v1' => 'http://darlic/aione/wp-content/themes/aione/assets/images/patterns/header1.jpg',
						'v2' => 'http://darlic/aione/wp-content/themes/aione/assets/images/patterns/header2.jpg',
						'v3' => 'http://darlic/aione/wp-content/themes/aione/assets/images/patterns/header3.jpg',
						'v4' => 'http://darlic/aione/wp-content/themes/aione/assets/images/patterns/header4.jpg',
						'v5' => 'http://darlic/aione/wp-content/themes/aione/assets/images/patterns/header5.jpg',
					),
					'title' => 'Select a Header Layout',
					'default' => 'v1',
				),
				array (
					'desc' => 'Controls width of the left or right side header. In pixels, ex: 170px.',
					'id' => 'side_header_width',
					'type' => 'text',
					'title' => 'Header Width For Left/Right Position',
					'default' => '280px',
				),
				array (
					'desc' => 'Check this box to show a header drop shadow. This option is incompatible with Internet Explorer versions older than IE11.',
					'id' => 'header_shadow',
					'type' => 'checkbox',
					'title' => 'Header Shadow',
				),
				array (
					'desc' => 'Check this box to set the header to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.',
					'id' => 'header_100_width',
					'type' => 'checkbox',
					'title' => '100% Header Width',
				),
				array (
					'desc' => 'Select if the slider shows below or above the header.',
					'id' => 'slider_position',
					'type' => 'select',
					'options' => array (
						'Below' => 'Below',
						'Above' => 'Above',
					),
					'title' => 'Slider Position',
					'default' => 'Below',
				),
				array (
					'desc' => 'Select which content displays in the first content area.',
					'id' => 'header_left_content',
					'type' => 'select',
					'options' => array (
						'Contact Info' => 'Contact Info',
						'Social Links' => 'Social Links',
						'Navigation' => 'Navigation',
						'Leave Empty' => 'Leave Empty',
					),
					'title' => 'Header Content 1',
					'default' => 'Contact Info',
				),
				array (
					'desc' => 'Select which content displays in the second content area.',
					'id' => 'header_right_content',
					'type' => 'select',
					'options' => array (
						'Contact Info' => 'Contact Info',
						'Social Links' => 'Social Links',
						'Navigation' => 'Navigation',
						'Leave Empty' => 'Leave Empty',
					),
					'title' => 'Header Content 2',
					'default' => 'Navigation',
				),
				array (
					'desc' => 'Select which content displays in the third content area.',
					'id' => 'header_v4_content',
					'type' => 'select',
					'options' => array (
						'Tagline' => 'Tagline',
						'Search' => 'Search',
						'Tagline And Search' => 'Tagline And Search',
						'Banner' => 'Banner',
						'None' => 'Leave Empty',
					),
					'title' => 'Header Content 3',
					'default' => 'Tagline And Search',
				),
				array (
					'desc' => 'Phone number will display in the Contact Info section of your top header.',
					'id' => 'header_number',
					'type' => 'textarea',
					'title' => 'Phone Number For Contact Info',
					'default' => 'Call Us Today! 1.555.555.555',
				),
				array (
					'desc' => 'Email address will display in the Contact Info section of your top header.',
					'id' => 'header_email',
					'type' => 'text',
					'title' => 'Email Address For Contact Info',
					'default' => 'info@yourdomain.com',
				),
				array (
					'desc' => 'Add HTML banner code for Header Content 3. Simple shortcodes, like buttons, can be used here too. The contents or image will display as long as you have Banner selected for the Header Content 3 option above.',
					'id' => 'header_banner_code',
					'type' => 'textarea',
					'title' => 'Banner Code For Content 3',
				),
				array (
					'desc' => 'Tagline will display as long as you have Tagline selected for the Header Content 3 option above.',
					'id' => 'header_tagline',
					'type' => 'textarea',
					'title' => 'Tagline For Content 3',
					'default' => 'Insert Tagline Here',
				),
				array (
					'id' => 'header_info_1',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'Header Info',
					'default' => '<h3 style=\'margin: 0;\'>Header Content Options</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(13) "header_info_1"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(11) "Header Info"
		["default"]=>
		string(50) "<h3 style=\'margin: 0;\'>Header Content Options</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'header_info_2',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'Header Info',
					'default' => '<h3 style=\'margin: 0;\'>Header Background</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(13) "header_info_2"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(11) "Header Info"
		["default"]=>
		string(45) "<h3 style=\'margin: 0;\'>Header Background</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Select an image or insert an image url to use for the header background.',
					'id' => 'header_bg_image',
					'type' => 'media',
					'title' => 'Background Image For Header Area',
					'url' => true,
				),
				array (
					'desc' => 'Check this box to have the header background image display at 100% in width and height and scale according to the browser size.',
					'id' => 'header_bg_full',
					'type' => 'checkbox',
					'title' => '100% Background Image',
				),
				array (
					'desc' => 'Check this box to enable parallax scrolling on the background image for header top positions.',
					'id' => 'header_bg_parallax',
					'type' => 'checkbox',
					'title' => 'Parallax Background Image',
					'default' => 1,
				),
				array (
					'desc' => 'Select how the background image repeats.',
					'id' => 'header_bg_repeat',
					'type' => 'select',
					'options' => array (
						'repeat' => 'repeat',
						'repeat-x' => 'repeat-x',
						'repeat-y' => 'repeat-y',
						'no-repeat' => 'no-repeat',
					),
					'title' => 'Background Repeat',
				),
				array (
					'desc' => 'In pixels or percentage, ex: 10px or 10%.',
					'id' => 'margin_header_top',
					'type' => 'text',
					'title' => 'Header Top Padding',
					'default' => '0px',
				),
				array (
					'desc' => 'In pixels or percentage, ex: 10px or 10%.',
					'id' => 'margin_header_bottom',
					'type' => 'text',
					'title' => 'Header Bottom Padding',
					'default' => '0px',
				),
				array (
					'desc' => 'In pixels or percentage, ex: 10px or 10%.',
					'id' => 'padding_header_left',
					'type' => 'text',
					'title' => 'Header Left Padding',
					'default' => '0px',
				),
				array (
					'desc' => 'In pixels or percentage, ex: 10px or 10%.',
					'id' => 'padding_header_right',
					'type' => 'text',
					'title' => 'Header Right Padding',
					'default' => '0px',
				),
				array (
					'id' => 'header_info_2',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'Header Info',
					'default' => '<h3 style=\'margin: 0;\'>Header Background</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(13) "header_info_2"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(11) "Header Info"
		["default"]=>
		string(45) "<h3 style=\'margin: 0;\'>Header Background</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'header_info_3',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'Header Info',
					'default' => '<h3 style=\'margin: 0;\'>Header Social Icons</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(13) "header_info_3"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(11) "Header Info"
		["default"]=>
		string(47) "<h3 style=\'margin: 0;\'>Header Social Icons</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'In pixels, default is 16',
					'id' => 'header_social_links_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Header Social Icons Font Size',
					'default' => '16',
				),
				array (
					'desc' => 'Select a custom social icon color. Use one hex value for all or separate by | symbol for multi-color. ex: #AA0000|#00AA00|#0000AA',
					'id' => 'header_social_links_icon_color',
					'type' => 'color',
					'title' => 'Header Social Icons Custom Color',
					'default' => '#bebdbd',
				),
				array (
					'desc' => 'Controls whether each icon is displayed in a small box.',
					'id' => 'header_social_links_boxed',
					'type' => 'select',
					'options' => array (
						'No' => 'No',
						'Yes' => 'Yes',
					),
					'title' => 'Header Social Icons Boxed',
					'default' => 'No',
				),
				array (
					'desc' => 'Select a custom social icon box color. Use one hex value for all or separate by | symbol for multi-color. ex: #AA0000|#00AA00|#0000AA',
					'id' => 'header_social_links_box_color',
					'type' => 'color',
					'title' => 'Header Social Icons Custom Box Color',
					'default' => '#e8e8e8',
				),
				array (
					'desc' => 'Box radius for the social icons. In pixels, ex: 4px.',
					'id' => 'header_social_links_boxed_radius',
					'type' => 'text',
					'title' => 'Header Social Icons Boxed Radius',
					'default' => '4px',
				),
				array (
					'desc' => 'In pixels, default is 8',
					'id' => 'header_social_links_boxed_padding',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Header Social Icons Boxed Padding',
					'default' => '8',
				),
				array (
					'desc' => 'Controls the tooltip position of the social icons in the header.',
					'id' => 'header_social_links_tooltip_placement',
					'type' => 'select',
					'options' => array (
						'Top' => 'Top',
						'Right' => 'Right',
						'Bottom' => 'Bottom',
						'Left' => 'Left',
						'None' => 'None',
					),
					'title' => 'Header Social Icons Tooltip Position',
					'default' => 'Bottom',
				),
				array (
					'id' => 'header_info_3',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'Header Info',
					'default' => '<h3 style=\'margin: 0;\'>Header Social Icons</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(13) "header_info_3"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(11) "Header Info"
		["default"]=>
		string(47) "<h3 style=\'margin: 0;\'>Header Social Icons</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_sticky_header',
			'title' => 'Sticky Header',
			'fields' => array (
				array (
					'id' => 'sticky_header_info',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Sticky Header Options</h3>',
				),
				array (
					'desc' => 'Check to enable a fixed header when scrolling, uncheck to disable.',
					'id' => 'header_sticky',
					'type' => 'checkbox',
					'title' => 'Enable Sticky Header',
					'default' => 1,
				),
				array (
					'desc' => 'Check to enable a fixed header when scrolling on tablets, uncheck to disable.',
					'id' => 'header_sticky_tablet',
					'type' => 'checkbox',
					'title' => 'Enable Sticky Header on Tablets',
				),
				array (
					'desc' => 'Check to enable a fixed header when scrolling on mobiles, uncheck to disable.',
					'id' => 'header_sticky_mobile',
					'type' => 'checkbox',
					'title' => 'Enable Sticky Header on Mobiles',
				),
				array (
					'desc' => 'Enable the sticky header to animate to a smaller height. This will shrink the sticky header height, logo and menu. Only applies to header v1 - v3.',
					'id' => 'header_sticky_shrinkage',
					'type' => 'checkbox',
					'title' => 'Enable Sticky Header Animation',
					'default' => 1,
				),
				array (
					'desc' => 'Select if your sticky header shows the menu or menu + logo area.',
					'id' => 'header_sticky_type2_layout',
					'type' => 'select',
					'options' => array (
						'menu_only' => 'Menu Only',
						'menu_and_logo' => 'Menu + Logo Area',
					),
					'title' => 'Headers 4-5 Sticky Header Display',
					'default' => 'Menu Only',
				),
				array (
					'desc' => 'Controls the space between each menu item in the sticky header. Use a number without \'px\', default is 35. ex: 35',
					'id' => 'header_sticky_nav_padding',
					'type' => 'text',
					'title' => 'Sticky Header Menu Item Padding',
				),
				array (
					'desc' => 'Controls the font size of the menu items in the sticky header. Use a number without \'px\', default is 14. ex: 14',
					'id' => 'header_sticky_nav_font_size',
					'type' => 'text',
					'title' => 'Sticky Header Navigation Font Size',
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_logo',
			'title' => 'Logo',
			'fields' => array (
				array (
					'id' => 'header_info',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Default Logo</h3>',
				),
				array (
					'desc' => 'Select an image file for your logo.',
					'id' => 'logo',
					'type' => 'media',
					'title' => 'Default Logo',
					'default' => array (
						'url' => 'http://darlic/aione/wp-content/themes/aione/assets/images/logo.png',
					),
				),
				array (
					'desc' => 'Select an image file for the retina version of the logo. It should be exactly 2x the size of main logo.',
					'id' => 'logo_retina',
					'type' => 'media',
					'title' => 'Default Logo (Retina Version @2x)',
				),
				array (
					'desc' => 'If retina logo is uploaded, enter the standard logo (1x) version width, do not enter the retina logo width. Use a number without \'px\', ex: 40',
					'id' => 'retina_logo_width',
					'type' => 'text',
					'title' => 'Default Logo Width',
				),
				array (
					'desc' => 'If retina logo is uploaded, enter the standard logo (1x) version height, do not enter the retina logo height. Use a number without \'px\', ex: 40',
					'id' => 'retina_logo_height',
					'type' => 'text',
					'title' => 'Default Logo Height',
				),
				array (
					'id' => 'sticky_logo_wrapper',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'Sticky Header Logo',
					'default' => '<h3 style=\'margin: 0;\'>Sticky Header Logo</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(19) "sticky_logo_wrapper"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(18) "Sticky Header Logo"
		["default"]=>
		string(46) "<h3 style=\'margin: 0;\'>Sticky Header Logo</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Select an image file for your sticky header logo.',
					'id' => 'sticky_header_logo',
					'type' => 'media',
					'title' => 'Sticky Header Logo',
				),
				array (
					'desc' => 'Select an image file for the retina version of the sticky header logo. It should be exactly 2x the size of sticky header main logo.',
					'id' => 'sticky_header_logo_retina',
					'type' => 'media',
					'title' => 'Sticky Header Logo (Retina Version @2x)',
				),
				array (
					'desc' => 'If retina logo is uploaded, enter the sticky header logo (1x) version width, do not enter the retina logo width. Use a number without \'px\', ex: 40',
					'id' => 'sticky_retina_logo_width',
					'type' => 'text',
					'title' => 'Sticky Header Logo Width',
				),
				array (
					'desc' => 'If retina logo is uploaded, enter the sticky header logo (1x) version height, do not enter the retina logo height. Use a number without \'px\', ex: 40 ',
					'id' => 'sticky_retina_logo_height',
					'type' => 'text',
					'title' => 'Sticky Header Logo Height',
				),
				array (
					'id' => 'sticky_logo_wrapper',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'Sticky Header Logo',
					'default' => '<h3 style=\'margin: 0;\'>Sticky Header Logo</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(19) "sticky_logo_wrapper"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(18) "Sticky Header Logo"
		["default"]=>
		string(46) "<h3 style=\'margin: 0;\'>Sticky Header Logo</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'mobile_logo_wrapper',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'Mobile Logo',
					'default' => '<h3 style=\'margin: 0;\'>Mobile Logo</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(19) "mobile_logo_wrapper"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(11) "Mobile Logo"
		["default"]=>
		string(39) "<h3 style=\'margin: 0;\'>Mobile Logo</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Select an image file for your mobile logo.',
					'id' => 'mobile_logo',
					'type' => 'media',
					'title' => 'Mobile Logo',
				),
				array (
					'desc' => 'Select an image file for the retina version of the mobile logo. It should be exactly 2x the size of Mobile main logo.',
					'id' => 'mobile_logo_retina',
					'type' => 'media',
					'title' => 'Mobile Logo (Retina Version @2x)',
				),
				array (
					'desc' => 'If retina logo is uploaded, enter the mobile logo (1x) version width, do not enter the retina logo width. Use a number without \'px\', ex: 40',
					'id' => 'mobile_retina_logo_width',
					'type' => 'text',
					'title' => 'Mobile Logo Width',
				),
				array (
					'desc' => 'If retina logo is uploaded, enter the mobile logo (1x) version height, do not enter the retina logo height. Use a number without \'px\', ex: 40',
					'id' => 'mobile_retina_logo_height',
					'type' => 'text',
					'title' => 'Mobile Logo Height',
				),
				array (
					'id' => 'mobile_logo_wrapper',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'Mobile Logo',
					'default' => '<h3 style=\'margin: 0;\'>Mobile Logo</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(19) "mobile_logo_wrapper"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(11) "Mobile Logo"
		["default"]=>
		string(39) "<h3 style=\'margin: 0;\'>Mobile Logo</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'logo_settings_wrapper',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'Logo Settings',
					'default' => '<h3 style=\'margin: 0;\'>Logo Settings</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(21) "logo_settings_wrapper"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(13) "Logo Settings"
		["default"]=>
		string(41) "<h3 style=\'margin: 0;\'>Logo Settings</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => '\'Center\' only works on Top Header 5 and on Side Headers.',
					'id' => 'logo_alignment',
					'type' => 'select',
					'options' => array (
						'Left' => 'Left',
						'Center' => 'Center',
						'Right' => 'Right',
					),
					'title' => 'Logo Alignment',
					'default' => 'Left',
				),
				array (
					'desc' => 'In pixels, ex: 10px',
					'id' => 'margin_logo_left',
					'type' => 'text',
					'title' => 'Logo Left Margin',
					'default' => '0px',
				),
				array (
					'desc' => 'In pixels, ex: 10px',
					'id' => 'margin_logo_right',
					'type' => 'text',
					'title' => 'Logo Right Margin',
					'default' => '0px',
				),
				array (
					'desc' => 'In pixels, ex: 10px',
					'id' => 'margin_logo_top',
					'type' => 'text',
					'title' => 'Logo Top Margin',
					'default' => '31px',
				),
				array (
					'desc' => 'In pixels, ex: 10px',
					'id' => 'margin_logo_bottom',
					'type' => 'text',
					'title' => 'Logo Bottom Margin',
					'default' => '31px',
				),
				array (
					'id' => 'logo_settings_wrapper',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'Logo Settings',
					'default' => '<h3 style=\'margin: 0;\'>Logo Settings</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(21) "logo_settings_wrapper"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(13) "Logo Settings"
		["default"]=>
		string(41) "<h3 style=\'margin: 0;\'>Logo Settings</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'favicons',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'Favicon Options',
					'default' => '<h3 style=\'margin: 0;\'>Favicon Options</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(8) "favicons"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(15) "Favicon Options"
		["default"]=>
		string(43) "<h3 style=\'margin: 0;\'>Favicon Options</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Favicon for your website (16px x 16px).',
					'id' => 'favicon',
					'type' => 'media',
					'title' => 'Favicon',
					'url' => true,
				),
				array (
					'desc' => 'Favicon for Apple iPhone (57px x 57px).',
					'id' => 'iphone_icon',
					'type' => 'media',
					'title' => 'Apple iPhone Icon Upload',
					'url' => true,
				),
				array (
					'desc' => 'Favicon for Apple iPhone Retina Version (114px x 114px).',
					'id' => 'iphone_icon_retina',
					'type' => 'media',
					'title' => 'Apple iPhone Retina Icon Upload',
					'url' => true,
				),
				array (
					'desc' => 'Favicon for Apple iPad (72px x 72px).',
					'id' => 'ipad_icon',
					'type' => 'media',
					'title' => 'Apple iPad Icon Upload',
					'url' => true,
				),
				array (
					'desc' => 'Favicon for Apple iPad Retina Version (144px x 144px).',
					'id' => 'ipad_icon_retina',
					'type' => 'media',
					'title' => 'Apple iPad Retina Icon Upload',
					'url' => true,
				),
				array (
					'id' => 'favicons',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'Favicon Options',
					'default' => '<h3 style=\'margin: 0;\'>Favicon Options</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(8) "favicons"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(15) "Favicon Options"
		["default"]=>
		string(43) "<h3 style=\'margin: 0;\'>Favicon Options</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_menu',
			'title' => 'Menu',
			'fields' => array (
				array (
					'id' => 'header_info',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'Header Info',
					'default' => '<h3 style=\'margin: 0;\'>Menu Options</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(11) "header_info"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(11) "Header Info"
		["default"]=>
		string(40) "<h3 style=\'margin: 0;\'>Menu Options</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the alignment of the text in the menu for top headers 4-5 and side headers',
					'id' => 'menu_text_align',
					'options' => array (
						'left' => 'Left',
						'center' => 'Center',
						'right' => 'Right',
					),
					'type' => 'select',
					'title' => 'Menu Text Align',
					'default' => 'center',
				),
				array (
					'desc' => 'Controls menu height. Use a number without \'px\', default is 83. ex: 83',
					'id' => 'nav_height',
					'type' => 'text',
					'title' => 'Main Nav Height',
					'default' => '83',
				),
				array (
					'desc' => 'Controls the border size of the menu highlight bar. Use a number without \'px\', default is 3, enter 0 to hide it. ex: 3.',
					'id' => 'nav_highlight_border',
					'type' => 'text',
					'title' => 'Main Menu Highlight Bar Size',
					'default' => '3',
				),
				array (
					'desc' => 'Controls right (left on RTL) menu padding. Use a number without \'px\', default is 45. ex: 45',
					'id' => 'nav_padding',
					'type' => 'text',
					'title' => 'Main Menu Item Padding',
					'default' => '45',
				),
				array (
					'desc' => 'In pixels, ex: 170px',
					'id' => 'dropdown_menu_width',
					'type' => 'text',
					'title' => 'Main Menu Dropdown Width',
					'default' => '180px',
				),
				array (
					'desc' => 'In pixels, ex: 7px',
					'id' => 'mainmenu_dropdown_vertical_padding',
					'type' => 'text',
					'title' => 'Main Menu Dropdown Item Top/Bottom Padding',
					'default' => '7px',
				),
				array (
					'desc' => 'Check to display a divider on the menu dropdown items.',
					'id' => 'mainmenu_dropdown_display_divider',
					'type' => 'checkbox',
					'title' => 'Main Menu Dropdown Item Divider',
					'default' => 1,
				),
				array (
					'desc' => 'In pixels, ex: 100px',
					'id' => 'topmenu_dropwdown_width',
					'type' => 'text',
					'title' => 'Top Menu Dropdown Width',
					'default' => '180px',
				),
				array (
					'desc' => 'Controls the the max width of the mega menu. In pixels, ex: 1100px.',
					'id' => 'megamenu_max_width',
					'type' => 'text',
					'title' => 'Mega Menu Max-Width',
					'default' => '1100px',
				),
				array (
					'desc' => 'Set the font size for mega menu column titles (menu 2nd level labels). In pixels, ex: 18px',
					'id' => 'megamenu_title_size',
					'type' => 'text',
					'title' => 'Mega Menu Column Title Size',
					'default' => '18px',
				),
				array (
					'desc' => 'In pixels, ex: 5px',
					'id' => 'megamenu_item_vertical_padding',
					'type' => 'text',
					'title' => 'Mega Menu Item Top/Bottom Padding',
					'default' => '5px',
				),
				array (
					'desc' => 'Check to display a divider on the mega menu submenu items.',
					'id' => 'megamenu_item_display_divider',
					'type' => 'checkbox',
					'title' => 'Mega Menu Item Divider',
				),
				array (
					'desc' => 'Check the box to enable arrow indicators next to parent level menu items.',
					'id' => 'menu_display_dropdown_indicator',
					'type' => 'checkbox',
					'title' => 'Dropdown Menu Indicator',
				),
				array (
					'desc' => 'Check to enable the dropshadow for menu dropdowns, uncheck to disable.',
					'id' => 'megamenu_shadow',
					'type' => 'checkbox',
					'title' => 'Menu Drop Shadow',
					'default' => 1,
				),
				array (
					'desc' => 'Check to display the search icon in the main menu.',
					'id' => 'main_nav_search_icon',
					'type' => 'checkbox',
					'title' => 'Display Search Icon in Main Nav',
					'default' => 1,
				),
				array (
					'desc' => 'Check to enable a circle border on the main menu cart and search icons.',
					'id' => 'main_nav_icon_circle',
					'type' => 'checkbox',
					'title' => 'Enable Circle Border On Menu Icons',
				),
				array (
					'id' => 'header_info',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'Header Info',
					'default' => '<h3 style=\'margin: 0;\'>Menu Options</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(11) "header_info"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(11) "Header Info"
		["default"]=>
		string(40) "<h3 style=\'margin: 0;\'>Menu Options</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'mobile_menu_options',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'Header Info',
					'default' => '<h3 style=\'margin: 0;\'>Mobile Menu Options</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(19) "mobile_menu_options"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(11) "Header Info"
		["default"]=>
		string(47) "<h3 style=\'margin: 0;\'>Mobile Menu Options</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Select between classic or modern mobile design.',
					'id' => 'mobile_menu_design',
					'options' => array (
						'classic' => 'Classic',
						'modern' => 'Modern',
					),
					'type' => 'select',
					'title' => 'Mobile Menu Design Style',
					'default' => 'modern',
				),
				array (
					'desc' => 'Controls right (left on RTL) menu padding on mobile devices when the normal menu is used. Use a number without \'px\', default is 25. ex: 25',
					'id' => 'mobile_nav_padding',
					'type' => 'text',
					'title' => 'Mobile Menu Item Padding',
					'default' => '25',
				),
				array (
					'desc' => 'Controls the alignment of menu text on mobile menu.',
					'id' => 'mobile_menu_text_align',
					'options' => array (
						'left' => 'Left',
						'center' => 'Center',
						'right' => 'Right',
					),
					'type' => 'select',
					'title' => 'Mobile Menu Text Align',
					'default' => 'left',
				),
				array (
					'desc' => 'Controls the top margin for the icons in the modern mobile menu sticky header. In pixels, ex: 100px',
					'id' => 'mobile_menu_icons_top_margin',
					'type' => 'text',
					'title' => 'Mobile Menu Icons Top Margin',
					'default' => '0px',
				),
				array (
					'desc' => 'Controls the menu height of each menu item. Use a number without \'px\', default is 35.',
					'id' => 'mobile_menu_nav_height',
					'type' => 'text',
					'title' => 'Mobile Menu Navigation Height',
					'default' => '35',
				),
				array (
					'desc' => 'Check to group submenu to slideout elements on mobile menu.',
					'id' => 'mobile_nav_submenu_slideout',
					'type' => 'checkbox',
					'title' => 'Mobile Menu Submenu Slide Outs',
					'default' => 1,
				),
				array (
					'id' => 'mobile_menu_options',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'Header Info',
					'default' => '<h3 style=\'margin: 0;\'>Mobile Menu Options</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(19) "mobile_menu_options"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(11) "Header Info"
		["default"]=>
		string(47) "<h3 style=\'margin: 0;\'>Mobile Menu Options</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_page_title_bar',
			'title' => 'Page Title Bar',
			'fields' => array (
				array (
					'id' => 'header_info',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Page Title Bar Options</h3>',
				),
				array (
					'desc' => 'Check the box to show the page title bar. This is a global option for every page or post, and this can be overridden by individual page/post options.',
					'id' => 'page_title_bar',
					'options' => array (
						'bar_and_content' => 'Show Bar and Content',
						'content_only' => 'Show Content Only',
						'hide' => 'Hide',
					),
					'type' => 'select',
					'title' => 'Page Title Bar',
					'default' => 'bar_and_content',
				),
				array (
					'desc' => 'Choose to show or hide the page title bar text.',
					'id' => 'page_title_bar_text',
					'options' => array (
						'yes' => 'Show',
						'no' => 'Hide',
					),
					'type' => 'select',
					'title' => 'Page Title Bar Text',
					'default' => 'yes',
				),
				array (
					'desc' => 'Check this box to set the page title content to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.',
					'id' => 'page_title_100_width',
					'type' => 'checkbox',
					'title' => '100% Page Title Width',
				),
				array (
					'desc' => 'In pixels, ex: 10px',
					'id' => 'page_title_height',
					'type' => 'text',
					'title' => 'Page Title Bar Height',
					'default' => '87px',
				),
				array (
					'desc' => 'In pixels, ex: 10px',
					'id' => 'page_title_mobile_height',
					'type' => 'text',
					'title' => 'Page Title Bar Mobile Height',
					'default' => '70px',
				),
				array (
					'desc' => 'Choose the title and subhead text alignment',
					'id' => 'page_title_alignment',
					'options' => array (
						'left' => 'Left',
						'center' => 'Center',
						'right' => 'Right',
					),
					'type' => 'select',
					'title' => 'Page Title Bar Text Alignment',
					'default' => 'left',
				),
				array (
					'desc' => 'Select an image or insert an image url to use for the page title bar background.',
					'id' => 'page_title_bg',
					'type' => 'media',
					'title' => 'Page Title Bar Background',
					'default' => array (
						'url' => 'http://darlic/aione/wp-content/themes/aione/assets/images/page_title_bg.png',
					),
					'url' => true,
				),
				array (
					'desc' => 'Select an image or insert an image url to use for the retina page title bar background.',
					'id' => 'page_title_bg_retina',
					'type' => 'media',
					'title' => 'Page Title Bar Background (Retina Version @2x)',
					'url' => true,
				),
				array (
					'desc' => 'Check this box to have the page title bar background image display at 100% in width and height and scale according to the browser size.',
					'id' => 'page_title_bg_full',
					'type' => 'checkbox',
					'title' => '100% Background Image',
				),
				array (
					'desc' => 'Check to enable parallax background image when scrolling.',
					'id' => 'page_title_bg_parallax',
					'type' => 'checkbox',
					'title' => 'Parallax Background Image',
				),
				array (
					'desc' => 'Choose to have the page title text fade on scroll.',
					'id' => 'page_title_fading',
					'type' => 'checkbox',
					'title' => 'Fading Animation',
				),
				array (
					'id' => 'header_info',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Breadcrumb Options</h3>',
				),
				array (
					'desc' => 'Choose to display breadcrumbs, search box or none in the page title bar.',
					'id' => 'page_title_bar_bs',
					'options' => array (
						'none' => 'None',
						'Breadcrumbs' => 'Breadcrumbs',
						'Search Box' => 'Search Box',
					),
					'type' => 'select',
					'title' => 'Breadcrumbs/Search Box',
					'default' => 'Breadcrumbs',
				),
				array (
					'desc' => 'Check to display breadcrumbs on mobile devices.',
					'id' => 'breadcrumb_mobile',
					'type' => 'checkbox',
					'title' => 'Breadcrumbs on Mobile Devices',
				),
				array (
					'desc' => 'The text before the breadcrumb menu.',
					'id' => 'breacrumb_prefix',
					'type' => 'text',
					'title' => 'Breadcrumb Menu Prefix',
				),
				array (
					'desc' => 'Choose a separator between the single breadcrumbs.',
					'id' => 'breadcrumb_separator',
					'type' => 'text',
					'title' => 'Breadcrumb Menu Separator',
					'default' => '/',
				),
				array (
					'desc' => 'Check to display custom post type archives in the breadcrumb path.',
					'id' => 'breadcrumb_show_post_type_archive',
					'type' => 'checkbox',
					'title' => 'Show Custom Post Type Archives on Breadcrumbs',
				),
				array (
					'desc' => 'Check to display the post categories in the breadcrumb path.',
					'id' => 'breadcrumb_show_categories',
					'type' => 'checkbox',
					'title' => 'Show Post Categories on Breadcrumbs',
					'default' => 1,
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_sliding_bar',
			'title' => 'Sliding Bar',
			'fields' => array (
				array (
					'id' => 'sliding_bar',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Sliding Bar Options</h3>',
				),
				array (
					'desc' => 'Check to enable the top Sliding Bar.',
					'id' => 'slidingbar_widgets',
					'type' => 'checkbox',
					'title' => 'Enable Sliding Bar',
					'default' => 1,
				),
				array (
					'desc' => 'Check to disable the top Sliding Bar on mobile devices.',
					'id' => 'mobile_slidingbar_widgets',
					'type' => 'checkbox',
					'title' => 'Disable Sliding Bar On Mobile',
					'default' => 1,
				),
				array (
					'desc' => 'Check to enable a top border on the Sliding Bar.',
					'id' => 'slidingbar_top_border',
					'type' => 'checkbox',
					'title' => 'Enable Top Border on Sliding Bar',
				),
				array (
					'desc' => 'Check the box to have the sliding bar open when the page loads.',
					'id' => 'slidingbar_open_on_load',
					'type' => 'checkbox',
					'title' => 'Sliding Bar Open On Page Load',
				),
				array (
					'desc' => 'Select the number of columns to display in the Sliding Bar.',
					'id' => 'slidingbar_widgets_columns',
					'options' => array (
						1 => '1',
						2 => '2',
						3 => '3',
						4 => '4',
						5 => '5',
						6 => '6',
					),
					'type' => 'select',
					'title' => 'Number of Sliding Bar Columns',
					'default' => '2',
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_footer',
			'title' => 'Footer',
			'fields' => array (
				array (
					'id' => 'footer_widgets_area_title',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>General Footer Options</h3>',
				),
				array (
					'desc' => 'Check this box to set footer width to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.',
					'id' => 'footer_100_width',
					'type' => 'checkbox',
					'title' => '100% Footer Width',
				),
				array (
					'desc' => 'Select your preferred footer special effect.',
					'id' => 'footer_special_effects',
					'type' => 'radio',
					'options' => array (
						'none' => 'None',
						'footer_parallax_effect' => 'Footer Parallax Effect',
						'footer_area_bg_parallax' => 'Parallax Background Image',
						'footer_sticky' => 'Sticky Footer',
						'footer_sticky_with_parallax_bg_image' => 'Sticky Footer and Parallax Background Image',
					),
					'title' => 'Footer Special Effects',
					'default' => 'none',
				),
				array (
					'id' => 'footer_parallax_effect_info',
					'icon' => true,
					'type' => 'info',
					'raw' => 'This enables a fixed footer with parallax scrolling effect.',
				),
				array (
					'id' => 'footer_area_bg_parallax_info',
					'icon' => true,
					'type' => 'info',
					'raw' => 'This enables a parallax effect on the background image selected in \'Background Image For Footer Widget Area\' field.',
				),
				array (
					'id' => 'footer_sticky_info',
					'icon' => true,
					'type' => 'info',
					'raw' => 'This enables a sticky footer. The entire footer area will always be \'below the fold\'. On very short pages, it makes sure that the footer sticks at the bottom, just above the fold.<br />IMPORTANT: \'Sticky Footer Height\' field must be filled in.',
				),
				array (
					'id' => 'footer_sticky_with_parallax_bg_image_info',
					'icon' => true,
					'type' => 'info',
					'raw' => 'This enables a sticky footer together with a parallax effect on the background image. The entire footer area will always be \'below the fold\'. IMPORTANT: \'Sticky Footer Height\' field must be filled in.',
				),
				array (
					'desc' => 'The entire height of the footer area (widgets + copyright). <a href=\'https://oxosolutions.com/aione-doc/footer-special-effects/\' target=\'_blank\'>View tutorial here</a>. Set a static height in px to enable sticky footer effect. ex: 200px..',
					'id' => 'footer_sticky_height',
					'type' => 'text',
					'title' => 'Sticky Footer Height',
				),
				array (
					'id' => 'footer_widgets_area_title',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Footer Widgets Area Options</h3>',
				),
				array (
					'desc' => 'Check the box to display footer widgets.',
					'id' => 'footer_widgets',
					'type' => 'checkbox',
					'title' => 'Footer Widgets',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to display the footer widget area contents centered.',
					'id' => 'footer_widgets_center_content',
					'type' => 'checkbox',
					'title' => 'Footer Widgets Center Content',
				),
				array (
					'desc' => 'Select the number of columns to display in the footer.',
					'id' => 'footer_widgets_columns',
					'options' => array (
						1 => '1',
						2 => '2',
						3 => '3',
						4 => '4',
						5 => '5',
						6 => '6',
					),
					'type' => 'select',
					'title' => 'Number of Footer Columns',
					'default' => '4',
				),
				array (
					'desc' => 'Select an image or insert an image url to use for the footer widget area backgroud.',
					'id' => 'footerw_bg_image',
					'type' => 'media',
					'title' => 'Background Image For Footer Widget Area',
					'url' => true,
				),
				array (
					'desc' => 'Check this box to have the footer background image display at 100% in width and height and scale according to the browser size.',
					'id' => 'footerw_bg_full',
					'type' => 'checkbox',
					'title' => '100% Background Image',
				),
				array (
					'desc' => 'Select how the background image repeats.',
					'id' => 'footerw_bg_repeat',
					'type' => 'select',
					'options' => array (
						'repeat' => 'repeat',
						'repeat-x' => 'repeat-x',
						'repeat-y' => 'repeat-y',
						'no-repeat' => 'no-repeat',
					),
					'title' => 'Background Repeat',
				),
				array (
					'desc' => 'Select the position from where background image starts.',
					'id' => 'footerw_bg_pos',
					'type' => 'select',
					'options' => array (
						0 => 'top left',
						1 => 'top center',
						2 => 'top right',
						3 => 'center left',
						4 => 'center center',
						5 => 'center right',
						6 => 'bottom left',
						7 => 'bottom center',
						8 => 'bottom right',
					),
					'title' => 'Background Position',
					'default' => 'center center',
				),
				array (
					'desc' => 'In pixels or percentage, ex: 10px or 10%.',
					'id' => 'footer_area_top_padding',
					'type' => 'text',
					'title' => 'Footer Top Padding',
					'default' => '43px',
				),
				array (
					'desc' => 'In pixels or percentage, ex: 10px or 10%.',
					'id' => 'footer_area_bottom_padding',
					'type' => 'text',
					'title' => 'Footer Bottom Padding',
					'default' => '40px',
				),
				array (
					'desc' => 'In pixels or percentage, ex: 10px or 10%.',
					'id' => 'footer_area_left_padding',
					'type' => 'text',
					'title' => 'Footer Left Padding',
					'default' => '0px',
				),
				array (
					'desc' => 'In pixels or percentage, ex: 10px or 10%.',
					'id' => 'footer_area_right_padding',
					'type' => 'text',
					'title' => 'Footer Right Padding',
					'default' => '0px',
				),
				array (
					'id' => 'copyright_area_title',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Footer Copyright Area Options</h3>',
				),
				array (
					'desc' => 'Check the box to display the copyright bar.',
					'id' => 'footer_copyright',
					'type' => 'checkbox',
					'title' => 'Copyright Bar',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to display the copyright bar contents centered.',
					'id' => 'footer_copyright_center_content',
					'type' => 'checkbox',
					'title' => 'Copyright Center Content',
				),
				array (
					'desc' => 'Enter the text that displays in the copyright bar. HTML markup can be used.',
					'id' => 'footer_text',
					'type' => 'textarea',
					'title' => 'Copyright Text',
					'default' => 'Copyright 2012 Aione | All Rights Reserved | Powered by <a href="http://wordpress.org">WordPress</a>	|	<a href="http://oxosolutions.com">OXO Solutions</a>',
				),
				array (
					'desc' => 'In pixels, ex: 18px',
					'id' => 'copyright_top_padding',
					'type' => 'text',
					'title' => 'Copyright Top Padding',
					'default' => '18px',
				),
				array (
					'desc' => 'In pixels, ex: 18px',
					'id' => 'copyright_bottom_padding',
					'type' => 'text',
					'title' => 'Copyright Bottom Padding',
					'default' => '16px',
				),
				array (
					'id' => 'footer_social_icon_title',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Social Icon Options</h3>',
				),
				array (
					'desc' => 'Select the checkbox to show social media icons on the footer of the page.',
					'id' => 'icons_footer',
					'type' => 'checkbox',
					'title' => 'Display Social Icons on Footer of the Page',
					'default' => 1,
				),
				array (
					'desc' => 'In pixels, default is 16',
					'id' => 'footer_social_links_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Footer Social Icons Font Size',
					'default' => '16',
				),
				array (
					'desc' => 'Select a custom social icon color. Use one hex value for all or separate by | symbol for multi-color. ex: #AA0000|#00AA00|#0000AA',
					'id' => 'footer_social_links_icon_color',
					'type' => 'color',
					'title' => 'Footer Social Icons Custom Color',
					'default' => '#46494a',
				),
				array (
					'desc' => 'Controls whether each icon is displayed in a small box.',
					'id' => 'footer_social_links_boxed',
					'type' => 'select',
					'options' => array (
						'No' => 'No',
						'Yes' => 'Yes',
					),
					'title' => 'Footer Social Icons Boxed',
					'default' => 'No',
				),
				array (
					'desc' => 'Select a custom social icon box color. Use one hex value for all or separate by | symbol for multi-color. ex: #AA0000|#00AA00|#0000AA',
					'id' => 'footer_social_links_box_color',
					'type' => 'color',
					'title' => 'Footer Social Icons Custom Box Color',
					'default' => '#222222',
				),
				array (
					'desc' => 'Box radius for the social icons. In pixels, ex: 4px.',
					'id' => 'footer_social_links_boxed_radius',
					'type' => 'text',
					'title' => 'Footer Social Icons Boxed Radius',
					'default' => '4px',
				),
				array (
					'desc' => 'In pixels, default is 8',
					'id' => 'footer_social_links_boxed_padding',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Footer Social Icons Boxed Padding',
					'default' => '8',
				),
				array (
					'desc' => 'Controls the tooltip position of the social icons in the footer.',
					'id' => 'footer_social_links_tooltip_placement',
					'type' => 'select',
					'options' => array (
						'Top' => 'Top',
						'Right' => 'Right',
						'Bottom' => 'Bottom',
						'Left' => 'Left',
						'None' => 'None',
					),
					'title' => 'Footer Social Icons Tooltip Position',
					'default' => 'Top',
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_sidebars',
			'title' => 'Sidebars',
			'fields' => array (
				array (
					'id' => 'pages_sidebars',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'Pages',
					'default' => '<h3 style=\'margin: 0;\'>Pages</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(14) "pages_sidebars"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(5) "Pages"
		["default"]=>
		string(33) "<h3 style=\'margin: 0;\'>Pages</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Check the box if you want to use a global sidebar on all pages. This option overrides the page options.',
					'id' => 'pages_global_sidebar',
					'type' => 'checkbox',
					'title' => 'Activate Global Sidebar',
				),
				array (
					'desc' => 'Select sidebar 1 that will display on all pages.',
					'id' => 'pages_sidebar',
					'type' => 'select',
					'options' => array (
						0 => 'None',
						1 => 'Blog Sidebar',
						2 => 'Footer Widget 1',
						3 => 'Footer Widget 2',
						4 => 'Footer Widget 3',
						5 => 'Footer Widget 4',
						6 => 'Slidingbar Widget 1',
						7 => 'Slidingbar Widget 2',
					),
					'title' => 'Global Sidebar 1',
					'default' => 'None',
				),
				array (
					'desc' => 'Select sidebar 2 that will display on all pages. Sidebar 2 can only be used if sidebar 1 is selected',
					'id' => 'pages_sidebar_2',
					'type' => 'select',
					'options' => array (
						0 => 'None',
						1 => 'Blog Sidebar',
						2 => 'Footer Widget 1',
						3 => 'Footer Widget 2',
						4 => 'Footer Widget 3',
						5 => 'Footer Widget 4',
						6 => 'Slidingbar Widget 1',
						7 => 'Slidingbar Widget 2',
					),
					'title' => 'Global Sidebar 2',
					'default' => 'None',
				),
				array (
					'desc' => 'Select the sidebar 1 position for pages. If sidebar 2 is selected, it will display on the opposite side.',
					'id' => 'default_sidebar_pos',
					'options' => array (
						'Right' => 'Right',
						'Left' => 'Left',
					),
					'type' => 'select',
					'title' => 'Global Sidebar Position',
					'default' => 'Right',
				),
				array (
					'id' => 'pages',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'Pages',
					'default' => '<h3 style=\'margin: 0;\'>Pages</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(5) "pages"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(5) "Pages"
		["default"]=>
		string(33) "<h3 style=\'margin: 0;\'>Pages</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'portfolio',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'Portfolio Posts',
					'default' => '<h3 style=\'margin: 0;\'>Portfolio Posts</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(9) "portfolio"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(15) "Portfolio Posts"
		["default"]=>
		string(43) "<h3 style=\'margin: 0;\'>Portfolio Posts</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Check the box if you want to use a global sidebar on all single portfolio posts. This option overrides the portfolio options.',
					'id' => 'portfolio_global_sidebar',
					'type' => 'checkbox',
					'title' => 'Activate Global Sidebar',
				),
				array (
					'desc' => 'Select sidebar 1 that will display on all single portfolio posts.',
					'id' => 'portfolio_sidebar',
					'type' => 'select',
					'options' => array (
						0 => 'None',
						1 => 'Blog Sidebar',
						2 => 'Footer Widget 1',
						3 => 'Footer Widget 2',
						4 => 'Footer Widget 3',
						5 => 'Footer Widget 4',
						6 => 'Slidingbar Widget 1',
						7 => 'Slidingbar Widget 2',
					),
					'title' => 'Global Sidebar 1',
					'default' => 'None',
				),
				array (
					'desc' => 'Select sidebar 2 that will display on all single portfolio posts. Sidebar 2 can only be used if sidebar 1 is selected',
					'id' => 'portfolio_sidebar_2',
					'type' => 'select',
					'options' => array (
						0 => 'None',
						1 => 'Blog Sidebar',
						2 => 'Footer Widget 1',
						3 => 'Footer Widget 2',
						4 => 'Footer Widget 3',
						5 => 'Footer Widget 4',
						6 => 'Slidingbar Widget 1',
						7 => 'Slidingbar Widget 2',
					),
					'title' => 'Global Sidebar 2',
					'default' => 'None',
				),
				array (
					'desc' => 'Select the sidebar 1 position for the portfolio. If sidebar 2 is selected, it will display on the opposite side.',
					'id' => 'portfolio_sidebar_position',
					'type' => 'select',
					'options' => array (
						'Right' => 'Right',
						'Left' => 'Left',
					),
					'title' => 'Global Portfolio Sidebar Position',
					'default' => 'Right',
				),
				array (
					'id' => 'portfolio_posts',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'Portfolio Posts',
					'default' => '<h3 style=\'margin: 0;\'>Portfolio Posts</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(15) "portfolio_posts"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(15) "Portfolio Posts"
		["default"]=>
		string(43) "<h3 style=\'margin: 0;\'>Portfolio Posts</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'portfolio_archive',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'Portfolio Archive/Category Pages',
					'default' => '<h3 style=\'margin: 0;\'>Portfolio Archive/Category Pages</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(17) "portfolio_archive"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(32) "Portfolio Archive/Category Pages"
		["default"]=>
		string(60) "<h3 style=\'margin: 0;\'>Portfolio Archive/Category Pages</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Select sidebar 1 that will display on the archive/category pages.',
					'id' => 'portfolio_archive_sidebar',
					'type' => 'select',
					'options' => array (
						0 => 'None',
						1 => 'Blog Sidebar',
						2 => 'Footer Widget 1',
						3 => 'Footer Widget 2',
						4 => 'Footer Widget 3',
						5 => 'Footer Widget 4',
						6 => 'Slidingbar Widget 1',
						7 => 'Slidingbar Widget 2',
					),
					'title' => 'Portfolio Archive/Category Sidebar 1',
					'default' => 'None',
				),
				array (
					'desc' => 'Select sidebar 2 that will display on the archive/category pages. Sidebar 2 can only be used if sidebar 1 is selected.',
					'id' => 'portfolio_archive_sidebar_2',
					'type' => 'select',
					'options' => array (
						0 => 'None',
						1 => 'Blog Sidebar',
						2 => 'Footer Widget 1',
						3 => 'Footer Widget 2',
						4 => 'Footer Widget 3',
						5 => 'Footer Widget 4',
						6 => 'Slidingbar Widget 1',
						7 => 'Slidingbar Widget 2',
					),
					'title' => 'Portfolio Archive/Category Sidebar 2',
					'default' => 'None',
				),
				array (
					'id' => 'portfolio_archive',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'Portfolio Archive/Category Pages',
					'default' => '<h3 style=\'margin: 0;\'>Portfolio Archive/Category Pages</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(17) "portfolio_archive"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(32) "Portfolio Archive/Category Pages"
		["default"]=>
		string(60) "<h3 style=\'margin: 0;\'>Portfolio Archive/Category Pages</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'blog_posts',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'Blog Posts',
					'default' => '<h3 style=\'margin: 0;\'>Blog Posts</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(10) "blog_posts"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(10) "Blog Posts"
		["default"]=>
		string(38) "<h3 style=\'margin: 0;\'>Blog Posts</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Check the box if you want to use a global sidebar on all single posts. This option overrides the post options.',
					'id' => 'posts_global_sidebar',
					'type' => 'checkbox',
					'title' => 'Activate Global Sidebar',
				),
				array (
					'desc' => 'Select sidebar 1 that will display on all single posts.',
					'id' => 'posts_sidebar',
					'type' => 'select',
					'options' => array (
						0 => 'None',
						1 => 'Blog Sidebar',
						2 => 'Footer Widget 1',
						3 => 'Footer Widget 2',
						4 => 'Footer Widget 3',
						5 => 'Footer Widget 4',
						6 => 'Slidingbar Widget 1',
						7 => 'Slidingbar Widget 2',
					),
					'title' => 'Global Sidebar 1',
					'default' => 'None',
				),
				array (
					'desc' => 'Select sidebar 2 that will display on all single posts.',
					'id' => 'posts_sidebar_2',
					'type' => 'select',
					'options' => array (
						0 => 'None',
						1 => 'Blog Sidebar',
						2 => 'Footer Widget 1',
						3 => 'Footer Widget 2',
						4 => 'Footer Widget 3',
						5 => 'Footer Widget 4',
						6 => 'Slidingbar Widget 1',
						7 => 'Slidingbar Widget 2',
					),
					'title' => 'Global Sidebar 2',
					'default' => 'None',
				),
				array (
					'desc' => 'Select the sidebar 1 position for the blog pages. If sidebar 2 is selected, it will display on the opposite side.',
					'id' => 'blog_sidebar_position',
					'type' => 'select',
					'options' => array (
						'Right' => 'Right',
						'Left' => 'Left',
					),
					'title' => 'Global Blog Sidebar Position',
					'default' => 'Right',
				),
				array (
					'id' => 'blog_posts',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'Blog Posts',
					'default' => '<h3 style=\'margin: 0;\'>Blog Posts</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(10) "blog_posts"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(10) "Blog Posts"
		["default"]=>
		string(38) "<h3 style=\'margin: 0;\'>Blog Posts</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'blog_archives',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'Blog Archive/Category Pages',
					'default' => '<h3 style=\'margin: 0;\'>Blog Archive/Category Pages</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(13) "blog_archives"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(27) "Blog Archive/Category Pages"
		["default"]=>
		string(55) "<h3 style=\'margin: 0;\'>Blog Archive/Category Pages</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Select the sidebar 1 that will display on the blog archive/category pages.',
					'id' => 'blog_archive_sidebar',
					'type' => 'select',
					'options' => array (
						0 => 'None',
						1 => 'Blog Sidebar',
						2 => 'Footer Widget 1',
						3 => 'Footer Widget 2',
						4 => 'Footer Widget 3',
						5 => 'Footer Widget 4',
						6 => 'Slidingbar Widget 1',
						7 => 'Slidingbar Widget 2',
					),
					'title' => 'Blog Archive/Category Sidebar 1',
					'default' => 'None',
				),
				array (
					'desc' => 'Select the sidebar 2 that will display on the blog archive/category pages. Sidebar 2 can only be used if sidebar 1 is selected.',
					'id' => 'blog_archive_sidebar_2',
					'type' => 'select',
					'options' => array (
						0 => 'None',
						1 => 'Blog Sidebar',
						2 => 'Footer Widget 1',
						3 => 'Footer Widget 2',
						4 => 'Footer Widget 3',
						5 => 'Footer Widget 4',
						6 => 'Slidingbar Widget 1',
						7 => 'Slidingbar Widget 2',
					),
					'title' => 'Blog Archive/Category Sidebar 2',
					'default' => 'None',
				),
				array (
					'id' => 'blog_archives',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'Blog Archive/Category Pages',
					'default' => '<h3 style=\'margin: 0;\'>Blog Archive/Category Pages</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(13) "blog_archives"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(27) "Blog Archive/Category Pages"
		["default"]=>
		string(55) "<h3 style=\'margin: 0;\'>Blog Archive/Category Pages</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'woo_products',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'Woocommerce Products',
					'default' => '<h3 style=\'margin: 0;\'>Woocommerce Products</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(12) "woo_products"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(20) "Woocommerce Products"
		["default"]=>
		string(48) "<h3 style=\'margin: 0;\'>Woocommerce Products</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Check the box if you want to use a global sidebar on the main shop page and all single product pages. This option overrides the woocommerce options.',
					'id' => 'woo_global_sidebar',
					'type' => 'checkbox',
					'title' => 'Activate Global Sidebar',
				),
				array (
					'desc' => 'Select sidebar 1 that will display on all single product pages.',
					'id' => 'woo_sidebar',
					'type' => 'select',
					'options' => array (
						0 => 'None',
						1 => 'Blog Sidebar',
						2 => 'Footer Widget 1',
						3 => 'Footer Widget 2',
						4 => 'Footer Widget 3',
						5 => 'Footer Widget 4',
						6 => 'Slidingbar Widget 1',
						7 => 'Slidingbar Widget 2',
					),
					'title' => 'Global Sidebar 1',
					'default' => 'None',
				),
				array (
					'desc' => 'Select sidebar 2 that will display on all single product pages. Sidebar 2 can only be used if sidebar 1 is selected',
					'id' => 'woo_sidebar_2',
					'type' => 'select',
					'options' => array (
						0 => 'None',
						1 => 'Blog Sidebar',
						2 => 'Footer Widget 1',
						3 => 'Footer Widget 2',
						4 => 'Footer Widget 3',
						5 => 'Footer Widget 4',
						6 => 'Slidingbar Widget 1',
						7 => 'Slidingbar Widget 2',
					),
					'title' => 'Global Sidebar 2',
					'default' => 'None',
				),
				array (
					'desc' => 'Select the sidebar 1 position for woocommerce. If sidebar 2 is selected, it will display on the opposite side.',
					'id' => 'woo_sidebar_position',
					'type' => 'select',
					'options' => array (
						'Right' => 'Right',
						'Left' => 'Left',
					),
					'title' => 'Global Woocommerce Sidebar Position',
					'default' => 'Right',
				),
				array (
					'id' => 'woo_products',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'Woocommerce Products',
					'default' => '<h3 style=\'margin: 0;\'>Woocommerce Products</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(12) "woo_products"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(20) "Woocommerce Products"
		["default"]=>
		string(48) "<h3 style=\'margin: 0;\'>Woocommerce Products</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'woo_archives',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'WooCommerce Archive/Category Pages',
					'default' => '<h3 style=\'margin: 0;\'>WooCommerce Archive/Category Pages</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(12) "woo_archives"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(34) "WooCommerce Archive/Category Pages"
		["default"]=>
		string(62) "<h3 style=\'margin: 0;\'>WooCommerce Archive/Category Pages</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Select sidebar 1 that will display on the archive/category pages.',
					'id' => 'woocommerce_archive_sidebar',
					'type' => 'select',
					'options' => array (
						0 => 'None',
						1 => 'Blog Sidebar',
						2 => 'Footer Widget 1',
						3 => 'Footer Widget 2',
						4 => 'Footer Widget 3',
						5 => 'Footer Widget 4',
						6 => 'Slidingbar Widget 1',
						7 => 'Slidingbar Widget 2',
					),
					'title' => 'Woocommerce Archive/Category Sidebar 1',
					'default' => 'None',
				),
				array (
					'desc' => 'Select sidebar 2 that will display on the archive/category pages. Sidebar 2 can only be used if sidebar 1 is selected.',
					'id' => 'woocommerce_archive_sidebar_2',
					'type' => 'select',
					'options' => array (
						0 => 'None',
						1 => 'Blog Sidebar',
						2 => 'Footer Widget 1',
						3 => 'Footer Widget 2',
						4 => 'Footer Widget 3',
						5 => 'Footer Widget 4',
						6 => 'Slidingbar Widget 1',
						7 => 'Slidingbar Widget 2',
					),
					'title' => 'Woocommerce Archive/Category Sidebar 2',
					'default' => 'None',
				),
				array (
					'id' => 'woo_archives',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'WooCommerce Archive/Category Pages',
					'default' => '<h3 style=\'margin: 0;\'>WooCommerce Archive/Category Pages</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(12) "woo_archives"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(34) "WooCommerce Archive/Category Pages"
		["default"]=>
		string(62) "<h3 style=\'margin: 0;\'>WooCommerce Archive/Category Pages</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'search_only',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'Search Page',
					'default' => '<h3 style=\'margin: 0;\'>Search Page</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(11) "search_only"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(11) "Search Page"
		["default"]=>
		string(39) "<h3 style=\'margin: 0;\'>Search Page</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Select sidebar 1 that will display on the search results page.',
					'id' => 'search_sidebar',
					'type' => 'select',
					'options' => array (
						0 => 'None',
						1 => 'Blog Sidebar',
						2 => 'Footer Widget 1',
						3 => 'Footer Widget 2',
						4 => 'Footer Widget 3',
						5 => 'Footer Widget 4',
						6 => 'Slidingbar Widget 1',
						7 => 'Slidingbar Widget 2',
					),
					'title' => 'Search Page Sidebar 1',
					'default' => 'Blog Sidebar',
				),
				array (
					'desc' => 'Select sidebar 2 that will display on the search results page. Sidebar 2 can only be used if sidebar 1 is selected.',
					'id' => 'search_sidebar_2',
					'type' => 'select',
					'options' => array (
						0 => 'None',
						1 => 'Blog Sidebar',
						2 => 'Footer Widget 1',
						3 => 'Footer Widget 2',
						4 => 'Footer Widget 3',
						5 => 'Footer Widget 4',
						6 => 'Slidingbar Widget 1',
						7 => 'Slidingbar Widget 2',
					),
					'title' => 'Search Page Sidebar 2',
					'default' => 'None',
				),
				array (
					'desc' => 'Select the sidebar 1 position for the search pages. If sidebar 2 is selected, it will display on the opposite side.',
					'id' => 'search_sidebar_position',
					'type' => 'select',
					'options' => array (
						'Right' => 'Right',
						'Left' => 'Left',
					),
					'title' => 'Search Sidebar Position',
					'default' => 'Right',
				),
				array (
					'id' => 'search_only',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'Search Page',
					'default' => '<h3 style=\'margin: 0;\'>Search Page</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(11) "search_only"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(11) "Search Page"
		["default"]=>
		string(39) "<h3 style=\'margin: 0;\'>Search Page</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_background',
			'title' => 'Background',
			'fields' => array (
				array (
					'id' => 'boxed_mode_only',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Background options below only work in boxed mode</h3>',
				),
				array (
					'desc' => 'Select an image or insert an image url to use for the backgroud.',
					'id' => 'bg_image',
					'type' => 'media',
					'title' => 'Background Image For Outer Areas In Boxed Mode',
					'url' => true,
				),
				array (
					'desc' => 'Check this box to have the background image display at 100% in width and height and scale according to the browser size.',
					'id' => 'bg_full',
					'type' => 'checkbox',
					'title' => '100% Background Image',
				),
				array (
					'desc' => 'Select how the background image repeats.',
					'id' => 'bg_repeat',
					'type' => 'select',
					'options' => array (
						'repeat' => 'repeat',
						'repeat-x' => 'repeat-x',
						'repeat-y' => 'repeat-y',
						'no-repeat' => 'no-repeat',
					),
					'title' => 'Background Repeat',
				),
				array (
					'desc' => 'Select a background color.',
					'id' => 'bg_color',
					'type' => 'color',
					'title' => 'Background Color For Outer Areas In Boxed Mode',
					'default' => '#d7d6d6',
				),
				array (
					'desc' => 'Check the box to display a pattern in the background. If checked, select the pattern from below.',
					'id' => 'bg_pattern_option',
					'type' => 'checkbox',
					'title' => 'Background Pattern',
				),
				array (
					'id' => 'bg_pattern',
					'type' => 'image_select',
					'options' => array (
						'pattern1' => 'http://darlic/aione/wp-content/themes/aione/assets/images/patterns/pattern1.png',
						'pattern2' => 'http://darlic/aione/wp-content/themes/aione/assets/images/patterns/pattern2.png',
						'pattern3' => 'http://darlic/aione/wp-content/themes/aione/assets/images/patterns/pattern3.png',
						'pattern4' => 'http://darlic/aione/wp-content/themes/aione/assets/images/patterns/pattern4.png',
						'pattern5' => 'http://darlic/aione/wp-content/themes/aione/assets/images/patterns/pattern5.png',
						'pattern6' => 'http://darlic/aione/wp-content/themes/aione/assets/images/patterns/pattern6.png',
						'pattern7' => 'http://darlic/aione/wp-content/themes/aione/assets/images/patterns/pattern7.png',
						'pattern8' => 'http://darlic/aione/wp-content/themes/aione/assets/images/patterns/pattern8.png',
						'pattern9' => 'http://darlic/aione/wp-content/themes/aione/assets/images/patterns/pattern9.png',
						'pattern10' => 'http://darlic/aione/wp-content/themes/aione/assets/images/patterns/pattern10.png',
					),
					'title' => 'Select a Background Pattern',
					'default' => 'pattern1',
					'tiles' => true,
				),
				array (
					'id' => 'both_modes_only',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Background Options Below Work For Boxed & Wide Mode</h3>',
				),
				array (
					'desc' => 'Select an image or insert an image url to use for the main content area backgroud.',
					'id' => 'content_bg_image',
					'type' => 'media',
					'title' => 'Background Image For Main Content Area',
					'url' => true,
				),
				array (
					'desc' => 'Check this box to have the background image display at 100% in width and height and scale according to the browser size.',
					'id' => 'content_bg_full',
					'type' => 'checkbox',
					'title' => '100% Background Image',
				),
				array (
					'desc' => 'Select how the background image repeats.',
					'id' => 'content_bg_repeat',
					'type' => 'select',
					'options' => array (
						'repeat' => 'repeat',
						'repeat-x' => 'repeat-x',
						'repeat-y' => 'repeat-y',
						'no-repeat' => 'no-repeat',
					),
					'title' => 'Background Repeat',
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_typography',
			'title' => 'Typography',
			'fields' => array (
				array (
					'id' => 'custom_heading_font',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Custom Nav / Headings Font',
					'default' => '<h3 style=\'margin: 0;\'>Custom Font For Menus And Headings</h3><p style=\'margin-bottom:0;\'>This will override the google / standard font options. All 4 files are required.</p>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(19) "custom_heading_font"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(26) "Custom Nav / Headings Font"
		["default"]=>
		string(174) "<h3 style=\'margin: 0;\'>Custom Font For Menus And Headings</h3><p style=\'margin-bottom:0;\'>This will override the google / standard font options. All 4 files are required.</p>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Upload the .woff font file.',
					'id' => 'custom_font_woff',
					'type' => 'media',
					'title' => 'Custom Font .woff',
					'url' => true,
				),
				array (
					'desc' => 'Upload the .ttf font file.',
					'id' => 'custom_font_ttf',
					'type' => 'media',
					'title' => 'Custom Font .ttf',
					'url' => true,
				),
				array (
					'desc' => 'Upload the .svg font file.',
					'id' => 'custom_font_svg',
					'type' => 'media',
					'title' => 'Custom Font .svg',
					'url' => true,
				),
				array (
					'desc' => 'Upload the .eot font file.',
					'id' => 'custom_font_eot',
					'type' => 'media',
					'title' => 'Custom Font .eot',
					'url' => true,
				),
				array (
					'id' => 'custom_heading_font',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Custom Nav / Headings Font',
					'default' => '<h3 style=\'margin: 0;\'>Custom Font For Menus And Headings</h3><p style=\'margin-bottom:0;\'>This will override the google / standard font options. All 4 files are required.</p>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(19) "custom_heading_font"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(26) "Custom Nav / Headings Font"
		["default"]=>
		string(174) "<h3 style=\'margin: 0;\'>Custom Font For Menus And Headings</h3><p style=\'margin-bottom:0;\'>This will override the google / standard font options. All 4 files are required.</p>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'google_fonts_intro',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Google Fonts',
					'default' => '<h3 style=\'margin: 0;\'>Google Fonts</h3><p style=\'margin-bottom:0;\'>This will override standard font options.</p>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(18) "google_fonts_intro"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(12) "Google Fonts"
		["default"]=>
		string(113) "<h3 style=\'margin: 0;\'>Google Fonts</h3><p style=\'margin-bottom:0;\'>This will override standard font options.</p>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Select a font family for body text',
					'id' => 'google_body',
					'type' => 'select',
					'options' => array (
						'None' => 'None',
						'ABeeZee' => 'ABeeZee',
						'Abel' => 'Abel',
						'Abril Fatface' => 'Abril Fatface',
						'Aclonica' => 'Aclonica',
						'Acme' => 'Acme',
						'Actor' => 'Actor',
						'Adamina' => 'Adamina',
						'Advent Pro' => 'Advent Pro',
						'Aguafina Script' => 'Aguafina Script',
						'Akronim' => 'Akronim',
						'Aladin' => 'Aladin',
						'Aldrich' => 'Aldrich',
						'Alef' => 'Alef',
						'Alegreya' => 'Alegreya',
						'Alegreya SC' => 'Alegreya SC',
						'Alegreya Sans' => 'Alegreya Sans',
						'Alegreya Sans SC' => 'Alegreya Sans SC',
						'Alex Brush' => 'Alex Brush',
						'Alfa Slab One' => 'Alfa Slab One',
						'Alice' => 'Alice',
						'Alike' => 'Alike',
						'Alike Angular' => 'Alike Angular',
						'Allan' => 'Allan',
						'Allerta' => 'Allerta',
						'Allerta Stencil' => 'Allerta Stencil',
						'Allura' => 'Allura',
						'Almendra' => 'Almendra',
						'Almendra Display' => 'Almendra Display',
						'Almendra SC' => 'Almendra SC',
						'Amarante' => 'Amarante',
						'Amaranth' => 'Amaranth',
						'Amatic SC' => 'Amatic SC',
						'Amethysta' => 'Amethysta',
						'Amiri' => 'Amiri',
						'Amita' => 'Amita',
						'Anaheim' => 'Anaheim',
						'Andada' => 'Andada',
						'Andika' => 'Andika',
						'Angkor' => 'Angkor',
						'Annie Use Your Telescope' => 'Annie Use Your Telescope',
						'Anonymous Pro' => 'Anonymous Pro',
						'Antic' => 'Antic',
						'Antic Didone' => 'Antic Didone',
						'Antic Slab' => 'Antic Slab',
						'Anton' => 'Anton',
						'Arapey' => 'Arapey',
						'Arbutus' => 'Arbutus',
						'Arbutus Slab' => 'Arbutus Slab',
						'Architects Daughter' => 'Architects Daughter',
						'Archivo Black' => 'Archivo Black',
						'Archivo Narrow' => 'Archivo Narrow',
						'Arimo' => 'Arimo',
						'Arizonia' => 'Arizonia',
						'Armata' => 'Armata',
						'Artifika' => 'Artifika',
						'Arvo' => 'Arvo',
						'Arya' => 'Arya',
						'Asap' => 'Asap',
						'Asar' => 'Asar',
						'Asset' => 'Asset',
						'Astloch' => 'Astloch',
						'Asul' => 'Asul',
						'Atomic Age' => 'Atomic Age',
						'Aubrey' => 'Aubrey',
						'Audiowide' => 'Audiowide',
						'Autour One' => 'Autour One',
						'Average' => 'Average',
						'Average Sans' => 'Average Sans',
						'Averia Gruesa Libre' => 'Averia Gruesa Libre',
						'Averia Libre' => 'Averia Libre',
						'Averia Sans Libre' => 'Averia Sans Libre',
						'Averia Serif Libre' => 'Averia Serif Libre',
						'Bad Script' => 'Bad Script',
						'Balthazar' => 'Balthazar',
						'Bangers' => 'Bangers',
						'Basic' => 'Basic',
						'Battambang' => 'Battambang',
						'Baumans' => 'Baumans',
						'Bayon' => 'Bayon',
						'Belgrano' => 'Belgrano',
						'Belleza' => 'Belleza',
						'BenchNine' => 'BenchNine',
						'Bentham' => 'Bentham',
						'Berkshire Swash' => 'Berkshire Swash',
						'Bevan' => 'Bevan',
						'Bigelow Rules' => 'Bigelow Rules',
						'Bigshot One' => 'Bigshot One',
						'Bilbo' => 'Bilbo',
						'Bilbo Swash Caps' => 'Bilbo Swash Caps',
						'Biryani' => 'Biryani',
						'Bitter' => 'Bitter',
						'Black Ops One' => 'Black Ops One',
						'Bokor' => 'Bokor',
						'Bonbon' => 'Bonbon',
						'Boogaloo' => 'Boogaloo',
						'Bowlby One' => 'Bowlby One',
						'Bowlby One SC' => 'Bowlby One SC',
						'Brawler' => 'Brawler',
						'Bree Serif' => 'Bree Serif',
						'Bubblegum Sans' => 'Bubblegum Sans',
						'Bubbler One' => 'Bubbler One',
						'Buda' => 'Buda',
						'Buenard' => 'Buenard',
						'Butcherman' => 'Butcherman',
						'Butterfly Kids' => 'Butterfly Kids',
						'Cabin' => 'Cabin',
						'Cabin Condensed' => 'Cabin Condensed',
						'Cabin Sketch' => 'Cabin Sketch',
						'Caesar Dressing' => 'Caesar Dressing',
						'Cagliostro' => 'Cagliostro',
						'Calligraffitti' => 'Calligraffitti',
						'Cambay' => 'Cambay',
						'Cambo' => 'Cambo',
						'Candal' => 'Candal',
						'Cantarell' => 'Cantarell',
						'Cantata One' => 'Cantata One',
						'Cantora One' => 'Cantora One',
						'Capriola' => 'Capriola',
						'Cardo' => 'Cardo',
						'Carme' => 'Carme',
						'Carrois Gothic' => 'Carrois Gothic',
						'Carrois Gothic SC' => 'Carrois Gothic SC',
						'Carter One' => 'Carter One',
						'Caudex' => 'Caudex',
						'Cedarville Cursive' => 'Cedarville Cursive',
						'Ceviche One' => 'Ceviche One',
						'Changa One' => 'Changa One',
						'Chango' => 'Chango',
						'Chau Philomene One' => 'Chau Philomene One',
						'Chela One' => 'Chela One',
						'Chelsea Market' => 'Chelsea Market',
						'Chenla' => 'Chenla',
						'Cherry Cream Soda' => 'Cherry Cream Soda',
						'Cherry Swash' => 'Cherry Swash',
						'Chewy' => 'Chewy',
						'Chicle' => 'Chicle',
						'Chivo' => 'Chivo',
						'Cinzel' => 'Cinzel',
						'Cinzel Decorative' => 'Cinzel Decorative',
						'Clicker Script' => 'Clicker Script',
						'Coda' => 'Coda',
						'Coda Caption' => 'Coda Caption',
						'Codystar' => 'Codystar',
						'Combo' => 'Combo',
						'Comfortaa' => 'Comfortaa',
						'Coming Soon' => 'Coming Soon',
						'Concert One' => 'Concert One',
						'Condiment' => 'Condiment',
						'Content' => 'Content',
						'Contrail One' => 'Contrail One',
						'Convergence' => 'Convergence',
						'Cookie' => 'Cookie',
						'Copse' => 'Copse',
						'Corben' => 'Corben',
						'Courgette' => 'Courgette',
						'Cousine' => 'Cousine',
						'Coustard' => 'Coustard',
						'Covered By Your Grace' => 'Covered By Your Grace',
						'Crafty Girls' => 'Crafty Girls',
						'Creepster' => 'Creepster',
						'Crete Round' => 'Crete Round',
						'Crimson Text' => 'Crimson Text',
						'Croissant One' => 'Croissant One',
						'Crushed' => 'Crushed',
						'Cuprum' => 'Cuprum',
						'Cutive' => 'Cutive',
						'Cutive Mono' => 'Cutive Mono',
						'Damion' => 'Damion',
						'Dancing Script' => 'Dancing Script',
						'Dangrek' => 'Dangrek',
						'Dawning of a New Day' => 'Dawning of a New Day',
						'Days One' => 'Days One',
						'Dekko' => 'Dekko',
						'Delius' => 'Delius',
						'Delius Swash Caps' => 'Delius Swash Caps',
						'Delius Unicase' => 'Delius Unicase',
						'Della Respira' => 'Della Respira',
						'Denk One' => 'Denk One',
						'Devonshire' => 'Devonshire',
						'Dhurjati' => 'Dhurjati',
						'Didact Gothic' => 'Didact Gothic',
						'Diplomata' => 'Diplomata',
						'Diplomata SC' => 'Diplomata SC',
						'Domine' => 'Domine',
						'Donegal One' => 'Donegal One',
						'Doppio One' => 'Doppio One',
						'Dorsa' => 'Dorsa',
						'Dosis' => 'Dosis',
						'Dr Sugiyama' => 'Dr Sugiyama',
						'Droid Sans' => 'Droid Sans',
						'Droid Sans Mono' => 'Droid Sans Mono',
						'Droid Serif' => 'Droid Serif',
						'Duru Sans' => 'Duru Sans',
						'Dynalight' => 'Dynalight',
						'EB Garamond' => 'EB Garamond',
						'Eagle Lake' => 'Eagle Lake',
						'Eater' => 'Eater',
						'Economica' => 'Economica',
						'Eczar' => 'Eczar',
						'Ek Mukta' => 'Ek Mukta',
						'Electrolize' => 'Electrolize',
						'Elsie' => 'Elsie',
						'Elsie Swash Caps' => 'Elsie Swash Caps',
						'Emblema One' => 'Emblema One',
						'Emilys Candy' => 'Emilys Candy',
						'Engagement' => 'Engagement',
						'Englebert' => 'Englebert',
						'Enriqueta' => 'Enriqueta',
						'Erica One' => 'Erica One',
						'Esteban' => 'Esteban',
						'Euphoria Script' => 'Euphoria Script',
						'Ewert' => 'Ewert',
						'Exo' => 'Exo',
						'Exo 2' => 'Exo 2',
						'Expletus Sans' => 'Expletus Sans',
						'Fanwood Text' => 'Fanwood Text',
						'Fascinate' => 'Fascinate',
						'Fascinate Inline' => 'Fascinate Inline',
						'Faster One' => 'Faster One',
						'Fasthand' => 'Fasthand',
						'Fauna One' => 'Fauna One',
						'Federant' => 'Federant',
						'Federo' => 'Federo',
						'Felipa' => 'Felipa',
						'Fenix' => 'Fenix',
						'Finger Paint' => 'Finger Paint',
						'Fira Mono' => 'Fira Mono',
						'Fira Sans' => 'Fira Sans',
						'Fjalla One' => 'Fjalla One',
						'Fjord One' => 'Fjord One',
						'Flamenco' => 'Flamenco',
						'Flavors' => 'Flavors',
						'Fondamento' => 'Fondamento',
						'Fontdiner Swanky' => 'Fontdiner Swanky',
						'Forum' => 'Forum',
						'Francois One' => 'Francois One',
						'Freckle Face' => 'Freckle Face',
						'Fredericka the Great' => 'Fredericka the Great',
						'Fredoka One' => 'Fredoka One',
						'Freehand' => 'Freehand',
						'Fresca' => 'Fresca',
						'Frijole' => 'Frijole',
						'Fruktur' => 'Fruktur',
						'Fugaz One' => 'Fugaz One',
						'GFS Didot' => 'GFS Didot',
						'GFS Neohellenic' => 'GFS Neohellenic',
						'Gabriela' => 'Gabriela',
						'Gafata' => 'Gafata',
						'Galdeano' => 'Galdeano',
						'Galindo' => 'Galindo',
						'Gentium Basic' => 'Gentium Basic',
						'Gentium Book Basic' => 'Gentium Book Basic',
						'Geo' => 'Geo',
						'Geostar' => 'Geostar',
						'Geostar Fill' => 'Geostar Fill',
						'Germania One' => 'Germania One',
						'Gidugu' => 'Gidugu',
						'Gilda Display' => 'Gilda Display',
						'Give You Glory' => 'Give You Glory',
						'Glass Antiqua' => 'Glass Antiqua',
						'Glegoo' => 'Glegoo',
						'Gloria Hallelujah' => 'Gloria Hallelujah',
						'Goblin One' => 'Goblin One',
						'Gochi Hand' => 'Gochi Hand',
						'Gorditas' => 'Gorditas',
						'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
						'Graduate' => 'Graduate',
						'Grand Hotel' => 'Grand Hotel',
						'Gravitas One' => 'Gravitas One',
						'Great Vibes' => 'Great Vibes',
						'Griffy' => 'Griffy',
						'Gruppo' => 'Gruppo',
						'Gudea' => 'Gudea',
						'Gurajada' => 'Gurajada',
						'Habibi' => 'Habibi',
						'Halant' => 'Halant',
						'Hammersmith One' => 'Hammersmith One',
						'Hanalei' => 'Hanalei',
						'Hanalei Fill' => 'Hanalei Fill',
						'Handlee' => 'Handlee',
						'Hanuman' => 'Hanuman',
						'Happy Monkey' => 'Happy Monkey',
						'Headland One' => 'Headland One',
						'Henny Penny' => 'Henny Penny',
						'Herr Von Muellerhoff' => 'Herr Von Muellerhoff',
						'Hind' => 'Hind',
						'Holtwood One SC' => 'Holtwood One SC',
						'Homemade Apple' => 'Homemade Apple',
						'Homenaje' => 'Homenaje',
						'IM Fell DW Pica' => 'IM Fell DW Pica',
						'IM Fell DW Pica SC' => 'IM Fell DW Pica SC',
						'IM Fell Double Pica' => 'IM Fell Double Pica',
						'IM Fell Double Pica SC' => 'IM Fell Double Pica SC',
						'IM Fell English' => 'IM Fell English',
						'IM Fell English SC' => 'IM Fell English SC',
						'IM Fell French Canon' => 'IM Fell French Canon',
						'IM Fell French Canon SC' => 'IM Fell French Canon SC',
						'IM Fell Great Primer' => 'IM Fell Great Primer',
						'IM Fell Great Primer SC' => 'IM Fell Great Primer SC',
						'Iceberg' => 'Iceberg',
						'Iceland' => 'Iceland',
						'Imprima' => 'Imprima',
						'Inconsolata' => 'Inconsolata',
						'Inder' => 'Inder',
						'Indie Flower' => 'Indie Flower',
						'Inika' => 'Inika',
						'Inknut Antiqua' => 'Inknut Antiqua',
						'Irish Grover' => 'Irish Grover',
						'Istok Web' => 'Istok Web',
						'Italiana' => 'Italiana',
						'Italianno' => 'Italianno',
						'Jacques Francois' => 'Jacques Francois',
						'Jacques Francois Shadow' => 'Jacques Francois Shadow',
						'Jaldi' => 'Jaldi',
						'Jim Nightshade' => 'Jim Nightshade',
						'Jockey One' => 'Jockey One',
						'Jolly Lodger' => 'Jolly Lodger',
						'Josefin Sans' => 'Josefin Sans',
						'Josefin Slab' => 'Josefin Slab',
						'Joti One' => 'Joti One',
						'Judson' => 'Judson',
						'Julee' => 'Julee',
						'Julius Sans One' => 'Julius Sans One',
						'Junge' => 'Junge',
						'Jura' => 'Jura',
						'Just Another Hand' => 'Just Another Hand',
						'Just Me Again Down Here' => 'Just Me Again Down Here',
						'Kadwa' => 'Kadwa',
						'Kalam' => 'Kalam',
						'Kameron' => 'Kameron',
						'Kantumruy' => 'Kantumruy',
						'Karla' => 'Karla',
						'Karma' => 'Karma',
						'Kaushan Script' => 'Kaushan Script',
						'Kavoon' => 'Kavoon',
						'Kdam Thmor' => 'Kdam Thmor',
						'Keania One' => 'Keania One',
						'Kelly Slab' => 'Kelly Slab',
						'Kenia' => 'Kenia',
						'Khand' => 'Khand',
						'Khmer' => 'Khmer',
						'Khula' => 'Khula',
						'Kite One' => 'Kite One',
						'Knewave' => 'Knewave',
						'Kotta One' => 'Kotta One',
						'Koulen' => 'Koulen',
						'Kranky' => 'Kranky',
						'Kreon' => 'Kreon',
						'Kristi' => 'Kristi',
						'Krona One' => 'Krona One',
						'Kurale' => 'Kurale',
						'La Belle Aurore' => 'La Belle Aurore',
						'Laila' => 'Laila',
						'Lakki Reddy' => 'Lakki Reddy',
						'Lancelot' => 'Lancelot',
						'Lateef' => 'Lateef',
						'Lato' => 'Lato',
						'League Script' => 'League Script',
						'Leckerli One' => 'Leckerli One',
						'Ledger' => 'Ledger',
						'Lekton' => 'Lekton',
						'Lemon' => 'Lemon',
						'Libre Baskerville' => 'Libre Baskerville',
						'Life Savers' => 'Life Savers',
						'Lilita One' => 'Lilita One',
						'Lily Script One' => 'Lily Script One',
						'Limelight' => 'Limelight',
						'Linden Hill' => 'Linden Hill',
						'Lobster' => 'Lobster',
						'Lobster Two' => 'Lobster Two',
						'Londrina Outline' => 'Londrina Outline',
						'Londrina Shadow' => 'Londrina Shadow',
						'Londrina Sketch' => 'Londrina Sketch',
						'Londrina Solid' => 'Londrina Solid',
						'Lora' => 'Lora',
						'Love Ya Like A Sister' => 'Love Ya Like A Sister',
						'Loved by the King' => 'Loved by the King',
						'Lovers Quarrel' => 'Lovers Quarrel',
						'Luckiest Guy' => 'Luckiest Guy',
						'Lusitana' => 'Lusitana',
						'Lustria' => 'Lustria',
						'Macondo' => 'Macondo',
						'Macondo Swash Caps' => 'Macondo Swash Caps',
						'Magra' => 'Magra',
						'Maiden Orange' => 'Maiden Orange',
						'Mako' => 'Mako',
						'Mallanna' => 'Mallanna',
						'Mandali' => 'Mandali',
						'Marcellus' => 'Marcellus',
						'Marcellus SC' => 'Marcellus SC',
						'Marck Script' => 'Marck Script',
						'Margarine' => 'Margarine',
						'Marko One' => 'Marko One',
						'Marmelad' => 'Marmelad',
						'Martel' => 'Martel',
						'Martel Sans' => 'Martel Sans',
						'Marvel' => 'Marvel',
						'Mate' => 'Mate',
						'Mate SC' => 'Mate SC',
						'Maven Pro' => 'Maven Pro',
						'McLaren' => 'McLaren',
						'Meddon' => 'Meddon',
						'MedievalSharp' => 'MedievalSharp',
						'Medula One' => 'Medula One',
						'Megrim' => 'Megrim',
						'Meie Script' => 'Meie Script',
						'Merienda' => 'Merienda',
						'Merienda One' => 'Merienda One',
						'Merriweather' => 'Merriweather',
						'Merriweather Sans' => 'Merriweather Sans',
						'Metal' => 'Metal',
						'Metal Mania' => 'Metal Mania',
						'Metamorphous' => 'Metamorphous',
						'Metrophobic' => 'Metrophobic',
						'Michroma' => 'Michroma',
						'Milonga' => 'Milonga',
						'Miltonian' => 'Miltonian',
						'Miltonian Tattoo' => 'Miltonian Tattoo',
						'Miniver' => 'Miniver',
						'Miss Fajardose' => 'Miss Fajardose',
						'Modak' => 'Modak',
						'Modern Antiqua' => 'Modern Antiqua',
						'Molengo' => 'Molengo',
						'Molle' => 'Molle',
						'Monda' => 'Monda',
						'Monofett' => 'Monofett',
						'Monoton' => 'Monoton',
						'Monsieur La Doulaise' => 'Monsieur La Doulaise',
						'Montaga' => 'Montaga',
						'Montez' => 'Montez',
						'Montserrat' => 'Montserrat',
						'Montserrat Alternates' => 'Montserrat Alternates',
						'Montserrat Subrayada' => 'Montserrat Subrayada',
						'Moul' => 'Moul',
						'Moulpali' => 'Moulpali',
						'Mountains of Christmas' => 'Mountains of Christmas',
						'Mouse Memoirs' => 'Mouse Memoirs',
						'Mr Bedfort' => 'Mr Bedfort',
						'Mr Dafoe' => 'Mr Dafoe',
						'Mr De Haviland' => 'Mr De Haviland',
						'Mrs Saint Delafield' => 'Mrs Saint Delafield',
						'Mrs Sheppards' => 'Mrs Sheppards',
						'Muli' => 'Muli',
						'Mystery Quest' => 'Mystery Quest',
						'NTR' => 'NTR',
						'Neucha' => 'Neucha',
						'Neuton' => 'Neuton',
						'New Rocker' => 'New Rocker',
						'News Cycle' => 'News Cycle',
						'Niconne' => 'Niconne',
						'Nixie One' => 'Nixie One',
						'Nobile' => 'Nobile',
						'Nokora' => 'Nokora',
						'Norican' => 'Norican',
						'Nosifer' => 'Nosifer',
						'Nothing You Could Do' => 'Nothing You Could Do',
						'Noticia Text' => 'Noticia Text',
						'Noto Sans' => 'Noto Sans',
						'Noto Serif' => 'Noto Serif',
						'Nova Cut' => 'Nova Cut',
						'Nova Flat' => 'Nova Flat',
						'Nova Mono' => 'Nova Mono',
						'Nova Oval' => 'Nova Oval',
						'Nova Round' => 'Nova Round',
						'Nova Script' => 'Nova Script',
						'Nova Slim' => 'Nova Slim',
						'Nova Square' => 'Nova Square',
						'Numans' => 'Numans',
						'Nunito' => 'Nunito',
						'Odor Mean Chey' => 'Odor Mean Chey',
						'Offside' => 'Offside',
						'Old Standard TT' => 'Old Standard TT',
						'Oldenburg' => 'Oldenburg',
						'Oleo Script' => 'Oleo Script',
						'Oleo Script Swash Caps' => 'Oleo Script Swash Caps',
						'Open Sans' => 'Open Sans',
						'Open Sans Condensed' => 'Open Sans Condensed',
						'Oranienbaum' => 'Oranienbaum',
						'Orbitron' => 'Orbitron',
						'Oregano' => 'Oregano',
						'Orienta' => 'Orienta',
						'Original Surfer' => 'Original Surfer',
						'Oswald' => 'Oswald',
						'Over the Rainbow' => 'Over the Rainbow',
						'Overlock' => 'Overlock',
						'Overlock SC' => 'Overlock SC',
						'Ovo' => 'Ovo',
						'Oxygen' => 'Oxygen',
						'Oxygen Mono' => 'Oxygen Mono',
						'PT Mono' => 'PT Mono',
						'PT Sans' => 'PT Sans',
						'PT Sans Caption' => 'PT Sans Caption',
						'PT Sans Narrow' => 'PT Sans Narrow',
						'PT Serif' => 'PT Serif',
						'PT Serif Caption' => 'PT Serif Caption',
						'Pacifico' => 'Pacifico',
						'Palanquin' => 'Palanquin',
						'Palanquin Dark' => 'Palanquin Dark',
						'Paprika' => 'Paprika',
						'Parisienne' => 'Parisienne',
						'Passero One' => 'Passero One',
						'Passion One' => 'Passion One',
						'Pathway Gothic One' => 'Pathway Gothic One',
						'Patrick Hand' => 'Patrick Hand',
						'Patrick Hand SC' => 'Patrick Hand SC',
						'Patua One' => 'Patua One',
						'Paytone One' => 'Paytone One',
						'Peddana' => 'Peddana',
						'Peralta' => 'Peralta',
						'Permanent Marker' => 'Permanent Marker',
						'Petit Formal Script' => 'Petit Formal Script',
						'Petrona' => 'Petrona',
						'Philosopher' => 'Philosopher',
						'Piedra' => 'Piedra',
						'Pinyon Script' => 'Pinyon Script',
						'Pirata One' => 'Pirata One',
						'Plaster' => 'Plaster',
						'Play' => 'Play',
						'Playball' => 'Playball',
						'Playfair Display' => 'Playfair Display',
						'Playfair Display SC' => 'Playfair Display SC',
						'Podkova' => 'Podkova',
						'Poiret One' => 'Poiret One',
						'Poller One' => 'Poller One',
						'Poly' => 'Poly',
						'Pompiere' => 'Pompiere',
						'Pontano Sans' => 'Pontano Sans',
						'Poppins' => 'Poppins',
						'Port Lligat Sans' => 'Port Lligat Sans',
						'Port Lligat Slab' => 'Port Lligat Slab',
						'Pragati Narrow' => 'Pragati Narrow',
						'Prata' => 'Prata',
						'Preahvihear' => 'Preahvihear',
						'Press Start 2P' => 'Press Start 2P',
						'Princess Sofia' => 'Princess Sofia',
						'Prociono' => 'Prociono',
						'Prosto One' => 'Prosto One',
						'Puritan' => 'Puritan',
						'Purple Purse' => 'Purple Purse',
						'Quando' => 'Quando',
						'Quantico' => 'Quantico',
						'Quattrocento' => 'Quattrocento',
						'Quattrocento Sans' => 'Quattrocento Sans',
						'Questrial' => 'Questrial',
						'Quicksand' => 'Quicksand',
						'Quintessential' => 'Quintessential',
						'Qwigley' => 'Qwigley',
						'Racing Sans One' => 'Racing Sans One',
						'Radley' => 'Radley',
						'Rajdhani' => 'Rajdhani',
						'Raleway' => 'Raleway',
						'Raleway Dots' => 'Raleway Dots',
						'Ramabhadra' => 'Ramabhadra',
						'Ramaraja' => 'Ramaraja',
						'Rambla' => 'Rambla',
						'Rammetto One' => 'Rammetto One',
						'Ranchers' => 'Ranchers',
						'Rancho' => 'Rancho',
						'Ranga' => 'Ranga',
						'Rationale' => 'Rationale',
						'Ravi Prakash' => 'Ravi Prakash',
						'Redressed' => 'Redressed',
						'Reenie Beanie' => 'Reenie Beanie',
						'Revalia' => 'Revalia',
						'Rhodium Libre' => 'Rhodium Libre',
						'Ribeye' => 'Ribeye',
						'Ribeye Marrow' => 'Ribeye Marrow',
						'Righteous' => 'Righteous',
						'Risque' => 'Risque',
						'Roboto' => 'Roboto',
						'Roboto Condensed' => 'Roboto Condensed',
						'Roboto Mono' => 'Roboto Mono',
						'Roboto Slab' => 'Roboto Slab',
						'Rochester' => 'Rochester',
						'Rock Salt' => 'Rock Salt',
						'Rokkitt' => 'Rokkitt',
						'Romanesco' => 'Romanesco',
						'Ropa Sans' => 'Ropa Sans',
						'Rosario' => 'Rosario',
						'Rosarivo' => 'Rosarivo',
						'Rouge Script' => 'Rouge Script',
						'Rozha One' => 'Rozha One',
						'Rubik Mono One' => 'Rubik Mono One',
						'Rubik One' => 'Rubik One',
						'Ruda' => 'Ruda',
						'Rufina' => 'Rufina',
						'Ruge Boogie' => 'Ruge Boogie',
						'Ruluko' => 'Ruluko',
						'Rum Raisin' => 'Rum Raisin',
						'Ruslan Display' => 'Ruslan Display',
						'Russo One' => 'Russo One',
						'Ruthie' => 'Ruthie',
						'Rye' => 'Rye',
						'Sacramento' => 'Sacramento',
						'Sahitya' => 'Sahitya',
						'Sail' => 'Sail',
						'Salsa' => 'Salsa',
						'Sanchez' => 'Sanchez',
						'Sancreek' => 'Sancreek',
						'Sansita One' => 'Sansita One',
						'Sarala' => 'Sarala',
						'Sarina' => 'Sarina',
						'Sarpanch' => 'Sarpanch',
						'Satisfy' => 'Satisfy',
						'Scada' => 'Scada',
						'Scheherazade' => 'Scheherazade',
						'Schoolbell' => 'Schoolbell',
						'Seaweed Script' => 'Seaweed Script',
						'Sevillana' => 'Sevillana',
						'Seymour One' => 'Seymour One',
						'Shadows Into Light' => 'Shadows Into Light',
						'Shadows Into Light Two' => 'Shadows Into Light Two',
						'Shanti' => 'Shanti',
						'Share' => 'Share',
						'Share Tech' => 'Share Tech',
						'Share Tech Mono' => 'Share Tech Mono',
						'Shojumaru' => 'Shojumaru',
						'Short Stack' => 'Short Stack',
						'Siemreap' => 'Siemreap',
						'Sigmar One' => 'Sigmar One',
						'Signika' => 'Signika',
						'Signika Negative' => 'Signika Negative',
						'Simonetta' => 'Simonetta',
						'Sintony' => 'Sintony',
						'Sirin Stencil' => 'Sirin Stencil',
						'Six Caps' => 'Six Caps',
						'Skranji' => 'Skranji',
						'Slabo 13px' => 'Slabo 13px',
						'Slabo 27px' => 'Slabo 27px',
						'Slackey' => 'Slackey',
						'Smokum' => 'Smokum',
						'Smythe' => 'Smythe',
						'Sniglet' => 'Sniglet',
						'Snippet' => 'Snippet',
						'Snowburst One' => 'Snowburst One',
						'Sofadi One' => 'Sofadi One',
						'Sofia' => 'Sofia',
						'Sonsie One' => 'Sonsie One',
						'Sorts Mill Goudy' => 'Sorts Mill Goudy',
						'Source Code Pro' => 'Source Code Pro',
						'Source Sans Pro' => 'Source Sans Pro',
						'Source Serif Pro' => 'Source Serif Pro',
						'Special Elite' => 'Special Elite',
						'Spicy Rice' => 'Spicy Rice',
						'Spinnaker' => 'Spinnaker',
						'Spirax' => 'Spirax',
						'Squada One' => 'Squada One',
						'Sree Krushnadevaraya' => 'Sree Krushnadevaraya',
						'Stalemate' => 'Stalemate',
						'Stalinist One' => 'Stalinist One',
						'Stardos Stencil' => 'Stardos Stencil',
						'Stint Ultra Condensed' => 'Stint Ultra Condensed',
						'Stint Ultra Expanded' => 'Stint Ultra Expanded',
						'Stoke' => 'Stoke',
						'Strait' => 'Strait',
						'Sue Ellen Francisco' => 'Sue Ellen Francisco',
						'Sumana' => 'Sumana',
						'Sunshiney' => 'Sunshiney',
						'Supermercado One' => 'Supermercado One',
						'Sura' => 'Sura',
						'Suranna' => 'Suranna',
						'Suravaram' => 'Suravaram',
						'Suwannaphum' => 'Suwannaphum',
						'Swanky and Moo Moo' => 'Swanky and Moo Moo',
						'Syncopate' => 'Syncopate',
						'Tangerine' => 'Tangerine',
						'Taprom' => 'Taprom',
						'Tauri' => 'Tauri',
						'Teko' => 'Teko',
						'Telex' => 'Telex',
						'Tenali Ramakrishna' => 'Tenali Ramakrishna',
						'Tenor Sans' => 'Tenor Sans',
						'Text Me One' => 'Text Me One',
						'The Girl Next Door' => 'The Girl Next Door',
						'Tienne' => 'Tienne',
						'Tillana' => 'Tillana',
						'Timmana' => 'Timmana',
						'Tinos' => 'Tinos',
						'Titan One' => 'Titan One',
						'Titillium Web' => 'Titillium Web',
						'Trade Winds' => 'Trade Winds',
						'Trocchi' => 'Trocchi',
						'Trochut' => 'Trochut',
						'Trykker' => 'Trykker',
						'Tulpen One' => 'Tulpen One',
						'Ubuntu' => 'Ubuntu',
						'Ubuntu Condensed' => 'Ubuntu Condensed',
						'Ubuntu Mono' => 'Ubuntu Mono',
						'Ultra' => 'Ultra',
						'Uncial Antiqua' => 'Uncial Antiqua',
						'Underdog' => 'Underdog',
						'Unica One' => 'Unica One',
						'UnifrakturCook' => 'UnifrakturCook',
						'UnifrakturMaguntia' => 'UnifrakturMaguntia',
						'Unkempt' => 'Unkempt',
						'Unlock' => 'Unlock',
						'Unna' => 'Unna',
						'VT323' => 'VT323',
						'Vampiro One' => 'Vampiro One',
						'Varela' => 'Varela',
						'Varela Round' => 'Varela Round',
						'Vast Shadow' => 'Vast Shadow',
						'Vesper Libre' => 'Vesper Libre',
						'Vibur' => 'Vibur',
						'Vidaloka' => 'Vidaloka',
						'Viga' => 'Viga',
						'Voces' => 'Voces',
						'Volkhov' => 'Volkhov',
						'Vollkorn' => 'Vollkorn',
						'Voltaire' => 'Voltaire',
						'Waiting for the Sunrise' => 'Waiting for the Sunrise',
						'Wallpoet' => 'Wallpoet',
						'Walter Turncoat' => 'Walter Turncoat',
						'Warnes' => 'Warnes',
						'Wellfleet' => 'Wellfleet',
						'Wendy One' => 'Wendy One',
						'Wire One' => 'Wire One',
						'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
						'Yantramanav' => 'Yantramanav',
						'Yellowtail' => 'Yellowtail',
						'Yeseva One' => 'Yeseva One',
						'Yesteryear' => 'Yesteryear',
						'Zeyada' => 'Zeyada',
					),
					'title' => 'Select Body Font Family',
					'default' => 'PT Sans',
				),
				array (
					'desc' => 'Select a font family for navigation',
					'id' => 'google_nav',
					'type' => 'select',
					'options' => array (
						'None' => 'None',
						'ABeeZee' => 'ABeeZee',
						'Abel' => 'Abel',
						'Abril Fatface' => 'Abril Fatface',
						'Aclonica' => 'Aclonica',
						'Acme' => 'Acme',
						'Actor' => 'Actor',
						'Adamina' => 'Adamina',
						'Advent Pro' => 'Advent Pro',
						'Aguafina Script' => 'Aguafina Script',
						'Akronim' => 'Akronim',
						'Aladin' => 'Aladin',
						'Aldrich' => 'Aldrich',
						'Alef' => 'Alef',
						'Alegreya' => 'Alegreya',
						'Alegreya SC' => 'Alegreya SC',
						'Alegreya Sans' => 'Alegreya Sans',
						'Alegreya Sans SC' => 'Alegreya Sans SC',
						'Alex Brush' => 'Alex Brush',
						'Alfa Slab One' => 'Alfa Slab One',
						'Alice' => 'Alice',
						'Alike' => 'Alike',
						'Alike Angular' => 'Alike Angular',
						'Allan' => 'Allan',
						'Allerta' => 'Allerta',
						'Allerta Stencil' => 'Allerta Stencil',
						'Allura' => 'Allura',
						'Almendra' => 'Almendra',
						'Almendra Display' => 'Almendra Display',
						'Almendra SC' => 'Almendra SC',
						'Amarante' => 'Amarante',
						'Amaranth' => 'Amaranth',
						'Amatic SC' => 'Amatic SC',
						'Amethysta' => 'Amethysta',
						'Amiri' => 'Amiri',
						'Amita' => 'Amita',
						'Anaheim' => 'Anaheim',
						'Andada' => 'Andada',
						'Andika' => 'Andika',
						'Angkor' => 'Angkor',
						'Annie Use Your Telescope' => 'Annie Use Your Telescope',
						'Anonymous Pro' => 'Anonymous Pro',
						'Antic' => 'Antic',
						'Antic Didone' => 'Antic Didone',
						'Antic Slab' => 'Antic Slab',
						'Anton' => 'Anton',
						'Arapey' => 'Arapey',
						'Arbutus' => 'Arbutus',
						'Arbutus Slab' => 'Arbutus Slab',
						'Architects Daughter' => 'Architects Daughter',
						'Archivo Black' => 'Archivo Black',
						'Archivo Narrow' => 'Archivo Narrow',
						'Arimo' => 'Arimo',
						'Arizonia' => 'Arizonia',
						'Armata' => 'Armata',
						'Artifika' => 'Artifika',
						'Arvo' => 'Arvo',
						'Arya' => 'Arya',
						'Asap' => 'Asap',
						'Asar' => 'Asar',
						'Asset' => 'Asset',
						'Astloch' => 'Astloch',
						'Asul' => 'Asul',
						'Atomic Age' => 'Atomic Age',
						'Aubrey' => 'Aubrey',
						'Audiowide' => 'Audiowide',
						'Autour One' => 'Autour One',
						'Average' => 'Average',
						'Average Sans' => 'Average Sans',
						'Averia Gruesa Libre' => 'Averia Gruesa Libre',
						'Averia Libre' => 'Averia Libre',
						'Averia Sans Libre' => 'Averia Sans Libre',
						'Averia Serif Libre' => 'Averia Serif Libre',
						'Bad Script' => 'Bad Script',
						'Balthazar' => 'Balthazar',
						'Bangers' => 'Bangers',
						'Basic' => 'Basic',
						'Battambang' => 'Battambang',
						'Baumans' => 'Baumans',
						'Bayon' => 'Bayon',
						'Belgrano' => 'Belgrano',
						'Belleza' => 'Belleza',
						'BenchNine' => 'BenchNine',
						'Bentham' => 'Bentham',
						'Berkshire Swash' => 'Berkshire Swash',
						'Bevan' => 'Bevan',
						'Bigelow Rules' => 'Bigelow Rules',
						'Bigshot One' => 'Bigshot One',
						'Bilbo' => 'Bilbo',
						'Bilbo Swash Caps' => 'Bilbo Swash Caps',
						'Biryani' => 'Biryani',
						'Bitter' => 'Bitter',
						'Black Ops One' => 'Black Ops One',
						'Bokor' => 'Bokor',
						'Bonbon' => 'Bonbon',
						'Boogaloo' => 'Boogaloo',
						'Bowlby One' => 'Bowlby One',
						'Bowlby One SC' => 'Bowlby One SC',
						'Brawler' => 'Brawler',
						'Bree Serif' => 'Bree Serif',
						'Bubblegum Sans' => 'Bubblegum Sans',
						'Bubbler One' => 'Bubbler One',
						'Buda' => 'Buda',
						'Buenard' => 'Buenard',
						'Butcherman' => 'Butcherman',
						'Butterfly Kids' => 'Butterfly Kids',
						'Cabin' => 'Cabin',
						'Cabin Condensed' => 'Cabin Condensed',
						'Cabin Sketch' => 'Cabin Sketch',
						'Caesar Dressing' => 'Caesar Dressing',
						'Cagliostro' => 'Cagliostro',
						'Calligraffitti' => 'Calligraffitti',
						'Cambay' => 'Cambay',
						'Cambo' => 'Cambo',
						'Candal' => 'Candal',
						'Cantarell' => 'Cantarell',
						'Cantata One' => 'Cantata One',
						'Cantora One' => 'Cantora One',
						'Capriola' => 'Capriola',
						'Cardo' => 'Cardo',
						'Carme' => 'Carme',
						'Carrois Gothic' => 'Carrois Gothic',
						'Carrois Gothic SC' => 'Carrois Gothic SC',
						'Carter One' => 'Carter One',
						'Caudex' => 'Caudex',
						'Cedarville Cursive' => 'Cedarville Cursive',
						'Ceviche One' => 'Ceviche One',
						'Changa One' => 'Changa One',
						'Chango' => 'Chango',
						'Chau Philomene One' => 'Chau Philomene One',
						'Chela One' => 'Chela One',
						'Chelsea Market' => 'Chelsea Market',
						'Chenla' => 'Chenla',
						'Cherry Cream Soda' => 'Cherry Cream Soda',
						'Cherry Swash' => 'Cherry Swash',
						'Chewy' => 'Chewy',
						'Chicle' => 'Chicle',
						'Chivo' => 'Chivo',
						'Cinzel' => 'Cinzel',
						'Cinzel Decorative' => 'Cinzel Decorative',
						'Clicker Script' => 'Clicker Script',
						'Coda' => 'Coda',
						'Coda Caption' => 'Coda Caption',
						'Codystar' => 'Codystar',
						'Combo' => 'Combo',
						'Comfortaa' => 'Comfortaa',
						'Coming Soon' => 'Coming Soon',
						'Concert One' => 'Concert One',
						'Condiment' => 'Condiment',
						'Content' => 'Content',
						'Contrail One' => 'Contrail One',
						'Convergence' => 'Convergence',
						'Cookie' => 'Cookie',
						'Copse' => 'Copse',
						'Corben' => 'Corben',
						'Courgette' => 'Courgette',
						'Cousine' => 'Cousine',
						'Coustard' => 'Coustard',
						'Covered By Your Grace' => 'Covered By Your Grace',
						'Crafty Girls' => 'Crafty Girls',
						'Creepster' => 'Creepster',
						'Crete Round' => 'Crete Round',
						'Crimson Text' => 'Crimson Text',
						'Croissant One' => 'Croissant One',
						'Crushed' => 'Crushed',
						'Cuprum' => 'Cuprum',
						'Cutive' => 'Cutive',
						'Cutive Mono' => 'Cutive Mono',
						'Damion' => 'Damion',
						'Dancing Script' => 'Dancing Script',
						'Dangrek' => 'Dangrek',
						'Dawning of a New Day' => 'Dawning of a New Day',
						'Days One' => 'Days One',
						'Dekko' => 'Dekko',
						'Delius' => 'Delius',
						'Delius Swash Caps' => 'Delius Swash Caps',
						'Delius Unicase' => 'Delius Unicase',
						'Della Respira' => 'Della Respira',
						'Denk One' => 'Denk One',
						'Devonshire' => 'Devonshire',
						'Dhurjati' => 'Dhurjati',
						'Didact Gothic' => 'Didact Gothic',
						'Diplomata' => 'Diplomata',
						'Diplomata SC' => 'Diplomata SC',
						'Domine' => 'Domine',
						'Donegal One' => 'Donegal One',
						'Doppio One' => 'Doppio One',
						'Dorsa' => 'Dorsa',
						'Dosis' => 'Dosis',
						'Dr Sugiyama' => 'Dr Sugiyama',
						'Droid Sans' => 'Droid Sans',
						'Droid Sans Mono' => 'Droid Sans Mono',
						'Droid Serif' => 'Droid Serif',
						'Duru Sans' => 'Duru Sans',
						'Dynalight' => 'Dynalight',
						'EB Garamond' => 'EB Garamond',
						'Eagle Lake' => 'Eagle Lake',
						'Eater' => 'Eater',
						'Economica' => 'Economica',
						'Eczar' => 'Eczar',
						'Ek Mukta' => 'Ek Mukta',
						'Electrolize' => 'Electrolize',
						'Elsie' => 'Elsie',
						'Elsie Swash Caps' => 'Elsie Swash Caps',
						'Emblema One' => 'Emblema One',
						'Emilys Candy' => 'Emilys Candy',
						'Engagement' => 'Engagement',
						'Englebert' => 'Englebert',
						'Enriqueta' => 'Enriqueta',
						'Erica One' => 'Erica One',
						'Esteban' => 'Esteban',
						'Euphoria Script' => 'Euphoria Script',
						'Ewert' => 'Ewert',
						'Exo' => 'Exo',
						'Exo 2' => 'Exo 2',
						'Expletus Sans' => 'Expletus Sans',
						'Fanwood Text' => 'Fanwood Text',
						'Fascinate' => 'Fascinate',
						'Fascinate Inline' => 'Fascinate Inline',
						'Faster One' => 'Faster One',
						'Fasthand' => 'Fasthand',
						'Fauna One' => 'Fauna One',
						'Federant' => 'Federant',
						'Federo' => 'Federo',
						'Felipa' => 'Felipa',
						'Fenix' => 'Fenix',
						'Finger Paint' => 'Finger Paint',
						'Fira Mono' => 'Fira Mono',
						'Fira Sans' => 'Fira Sans',
						'Fjalla One' => 'Fjalla One',
						'Fjord One' => 'Fjord One',
						'Flamenco' => 'Flamenco',
						'Flavors' => 'Flavors',
						'Fondamento' => 'Fondamento',
						'Fontdiner Swanky' => 'Fontdiner Swanky',
						'Forum' => 'Forum',
						'Francois One' => 'Francois One',
						'Freckle Face' => 'Freckle Face',
						'Fredericka the Great' => 'Fredericka the Great',
						'Fredoka One' => 'Fredoka One',
						'Freehand' => 'Freehand',
						'Fresca' => 'Fresca',
						'Frijole' => 'Frijole',
						'Fruktur' => 'Fruktur',
						'Fugaz One' => 'Fugaz One',
						'GFS Didot' => 'GFS Didot',
						'GFS Neohellenic' => 'GFS Neohellenic',
						'Gabriela' => 'Gabriela',
						'Gafata' => 'Gafata',
						'Galdeano' => 'Galdeano',
						'Galindo' => 'Galindo',
						'Gentium Basic' => 'Gentium Basic',
						'Gentium Book Basic' => 'Gentium Book Basic',
						'Geo' => 'Geo',
						'Geostar' => 'Geostar',
						'Geostar Fill' => 'Geostar Fill',
						'Germania One' => 'Germania One',
						'Gidugu' => 'Gidugu',
						'Gilda Display' => 'Gilda Display',
						'Give You Glory' => 'Give You Glory',
						'Glass Antiqua' => 'Glass Antiqua',
						'Glegoo' => 'Glegoo',
						'Gloria Hallelujah' => 'Gloria Hallelujah',
						'Goblin One' => 'Goblin One',
						'Gochi Hand' => 'Gochi Hand',
						'Gorditas' => 'Gorditas',
						'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
						'Graduate' => 'Graduate',
						'Grand Hotel' => 'Grand Hotel',
						'Gravitas One' => 'Gravitas One',
						'Great Vibes' => 'Great Vibes',
						'Griffy' => 'Griffy',
						'Gruppo' => 'Gruppo',
						'Gudea' => 'Gudea',
						'Gurajada' => 'Gurajada',
						'Habibi' => 'Habibi',
						'Halant' => 'Halant',
						'Hammersmith One' => 'Hammersmith One',
						'Hanalei' => 'Hanalei',
						'Hanalei Fill' => 'Hanalei Fill',
						'Handlee' => 'Handlee',
						'Hanuman' => 'Hanuman',
						'Happy Monkey' => 'Happy Monkey',
						'Headland One' => 'Headland One',
						'Henny Penny' => 'Henny Penny',
						'Herr Von Muellerhoff' => 'Herr Von Muellerhoff',
						'Hind' => 'Hind',
						'Holtwood One SC' => 'Holtwood One SC',
						'Homemade Apple' => 'Homemade Apple',
						'Homenaje' => 'Homenaje',
						'IM Fell DW Pica' => 'IM Fell DW Pica',
						'IM Fell DW Pica SC' => 'IM Fell DW Pica SC',
						'IM Fell Double Pica' => 'IM Fell Double Pica',
						'IM Fell Double Pica SC' => 'IM Fell Double Pica SC',
						'IM Fell English' => 'IM Fell English',
						'IM Fell English SC' => 'IM Fell English SC',
						'IM Fell French Canon' => 'IM Fell French Canon',
						'IM Fell French Canon SC' => 'IM Fell French Canon SC',
						'IM Fell Great Primer' => 'IM Fell Great Primer',
						'IM Fell Great Primer SC' => 'IM Fell Great Primer SC',
						'Iceberg' => 'Iceberg',
						'Iceland' => 'Iceland',
						'Imprima' => 'Imprima',
						'Inconsolata' => 'Inconsolata',
						'Inder' => 'Inder',
						'Indie Flower' => 'Indie Flower',
						'Inika' => 'Inika',
						'Inknut Antiqua' => 'Inknut Antiqua',
						'Irish Grover' => 'Irish Grover',
						'Istok Web' => 'Istok Web',
						'Italiana' => 'Italiana',
						'Italianno' => 'Italianno',
						'Jacques Francois' => 'Jacques Francois',
						'Jacques Francois Shadow' => 'Jacques Francois Shadow',
						'Jaldi' => 'Jaldi',
						'Jim Nightshade' => 'Jim Nightshade',
						'Jockey One' => 'Jockey One',
						'Jolly Lodger' => 'Jolly Lodger',
						'Josefin Sans' => 'Josefin Sans',
						'Josefin Slab' => 'Josefin Slab',
						'Joti One' => 'Joti One',
						'Judson' => 'Judson',
						'Julee' => 'Julee',
						'Julius Sans One' => 'Julius Sans One',
						'Junge' => 'Junge',
						'Jura' => 'Jura',
						'Just Another Hand' => 'Just Another Hand',
						'Just Me Again Down Here' => 'Just Me Again Down Here',
						'Kadwa' => 'Kadwa',
						'Kalam' => 'Kalam',
						'Kameron' => 'Kameron',
						'Kantumruy' => 'Kantumruy',
						'Karla' => 'Karla',
						'Karma' => 'Karma',
						'Kaushan Script' => 'Kaushan Script',
						'Kavoon' => 'Kavoon',
						'Kdam Thmor' => 'Kdam Thmor',
						'Keania One' => 'Keania One',
						'Kelly Slab' => 'Kelly Slab',
						'Kenia' => 'Kenia',
						'Khand' => 'Khand',
						'Khmer' => 'Khmer',
						'Khula' => 'Khula',
						'Kite One' => 'Kite One',
						'Knewave' => 'Knewave',
						'Kotta One' => 'Kotta One',
						'Koulen' => 'Koulen',
						'Kranky' => 'Kranky',
						'Kreon' => 'Kreon',
						'Kristi' => 'Kristi',
						'Krona One' => 'Krona One',
						'Kurale' => 'Kurale',
						'La Belle Aurore' => 'La Belle Aurore',
						'Laila' => 'Laila',
						'Lakki Reddy' => 'Lakki Reddy',
						'Lancelot' => 'Lancelot',
						'Lateef' => 'Lateef',
						'Lato' => 'Lato',
						'League Script' => 'League Script',
						'Leckerli One' => 'Leckerli One',
						'Ledger' => 'Ledger',
						'Lekton' => 'Lekton',
						'Lemon' => 'Lemon',
						'Libre Baskerville' => 'Libre Baskerville',
						'Life Savers' => 'Life Savers',
						'Lilita One' => 'Lilita One',
						'Lily Script One' => 'Lily Script One',
						'Limelight' => 'Limelight',
						'Linden Hill' => 'Linden Hill',
						'Lobster' => 'Lobster',
						'Lobster Two' => 'Lobster Two',
						'Londrina Outline' => 'Londrina Outline',
						'Londrina Shadow' => 'Londrina Shadow',
						'Londrina Sketch' => 'Londrina Sketch',
						'Londrina Solid' => 'Londrina Solid',
						'Lora' => 'Lora',
						'Love Ya Like A Sister' => 'Love Ya Like A Sister',
						'Loved by the King' => 'Loved by the King',
						'Lovers Quarrel' => 'Lovers Quarrel',
						'Luckiest Guy' => 'Luckiest Guy',
						'Lusitana' => 'Lusitana',
						'Lustria' => 'Lustria',
						'Macondo' => 'Macondo',
						'Macondo Swash Caps' => 'Macondo Swash Caps',
						'Magra' => 'Magra',
						'Maiden Orange' => 'Maiden Orange',
						'Mako' => 'Mako',
						'Mallanna' => 'Mallanna',
						'Mandali' => 'Mandali',
						'Marcellus' => 'Marcellus',
						'Marcellus SC' => 'Marcellus SC',
						'Marck Script' => 'Marck Script',
						'Margarine' => 'Margarine',
						'Marko One' => 'Marko One',
						'Marmelad' => 'Marmelad',
						'Martel' => 'Martel',
						'Martel Sans' => 'Martel Sans',
						'Marvel' => 'Marvel',
						'Mate' => 'Mate',
						'Mate SC' => 'Mate SC',
						'Maven Pro' => 'Maven Pro',
						'McLaren' => 'McLaren',
						'Meddon' => 'Meddon',
						'MedievalSharp' => 'MedievalSharp',
						'Medula One' => 'Medula One',
						'Megrim' => 'Megrim',
						'Meie Script' => 'Meie Script',
						'Merienda' => 'Merienda',
						'Merienda One' => 'Merienda One',
						'Merriweather' => 'Merriweather',
						'Merriweather Sans' => 'Merriweather Sans',
						'Metal' => 'Metal',
						'Metal Mania' => 'Metal Mania',
						'Metamorphous' => 'Metamorphous',
						'Metrophobic' => 'Metrophobic',
						'Michroma' => 'Michroma',
						'Milonga' => 'Milonga',
						'Miltonian' => 'Miltonian',
						'Miltonian Tattoo' => 'Miltonian Tattoo',
						'Miniver' => 'Miniver',
						'Miss Fajardose' => 'Miss Fajardose',
						'Modak' => 'Modak',
						'Modern Antiqua' => 'Modern Antiqua',
						'Molengo' => 'Molengo',
						'Molle' => 'Molle',
						'Monda' => 'Monda',
						'Monofett' => 'Monofett',
						'Monoton' => 'Monoton',
						'Monsieur La Doulaise' => 'Monsieur La Doulaise',
						'Montaga' => 'Montaga',
						'Montez' => 'Montez',
						'Montserrat' => 'Montserrat',
						'Montserrat Alternates' => 'Montserrat Alternates',
						'Montserrat Subrayada' => 'Montserrat Subrayada',
						'Moul' => 'Moul',
						'Moulpali' => 'Moulpali',
						'Mountains of Christmas' => 'Mountains of Christmas',
						'Mouse Memoirs' => 'Mouse Memoirs',
						'Mr Bedfort' => 'Mr Bedfort',
						'Mr Dafoe' => 'Mr Dafoe',
						'Mr De Haviland' => 'Mr De Haviland',
						'Mrs Saint Delafield' => 'Mrs Saint Delafield',
						'Mrs Sheppards' => 'Mrs Sheppards',
						'Muli' => 'Muli',
						'Mystery Quest' => 'Mystery Quest',
						'NTR' => 'NTR',
						'Neucha' => 'Neucha',
						'Neuton' => 'Neuton',
						'New Rocker' => 'New Rocker',
						'News Cycle' => 'News Cycle',
						'Niconne' => 'Niconne',
						'Nixie One' => 'Nixie One',
						'Nobile' => 'Nobile',
						'Nokora' => 'Nokora',
						'Norican' => 'Norican',
						'Nosifer' => 'Nosifer',
						'Nothing You Could Do' => 'Nothing You Could Do',
						'Noticia Text' => 'Noticia Text',
						'Noto Sans' => 'Noto Sans',
						'Noto Serif' => 'Noto Serif',
						'Nova Cut' => 'Nova Cut',
						'Nova Flat' => 'Nova Flat',
						'Nova Mono' => 'Nova Mono',
						'Nova Oval' => 'Nova Oval',
						'Nova Round' => 'Nova Round',
						'Nova Script' => 'Nova Script',
						'Nova Slim' => 'Nova Slim',
						'Nova Square' => 'Nova Square',
						'Numans' => 'Numans',
						'Nunito' => 'Nunito',
						'Odor Mean Chey' => 'Odor Mean Chey',
						'Offside' => 'Offside',
						'Old Standard TT' => 'Old Standard TT',
						'Oldenburg' => 'Oldenburg',
						'Oleo Script' => 'Oleo Script',
						'Oleo Script Swash Caps' => 'Oleo Script Swash Caps',
						'Open Sans' => 'Open Sans',
						'Open Sans Condensed' => 'Open Sans Condensed',
						'Oranienbaum' => 'Oranienbaum',
						'Orbitron' => 'Orbitron',
						'Oregano' => 'Oregano',
						'Orienta' => 'Orienta',
						'Original Surfer' => 'Original Surfer',
						'Oswald' => 'Oswald',
						'Over the Rainbow' => 'Over the Rainbow',
						'Overlock' => 'Overlock',
						'Overlock SC' => 'Overlock SC',
						'Ovo' => 'Ovo',
						'Oxygen' => 'Oxygen',
						'Oxygen Mono' => 'Oxygen Mono',
						'PT Mono' => 'PT Mono',
						'PT Sans' => 'PT Sans',
						'PT Sans Caption' => 'PT Sans Caption',
						'PT Sans Narrow' => 'PT Sans Narrow',
						'PT Serif' => 'PT Serif',
						'PT Serif Caption' => 'PT Serif Caption',
						'Pacifico' => 'Pacifico',
						'Palanquin' => 'Palanquin',
						'Palanquin Dark' => 'Palanquin Dark',
						'Paprika' => 'Paprika',
						'Parisienne' => 'Parisienne',
						'Passero One' => 'Passero One',
						'Passion One' => 'Passion One',
						'Pathway Gothic One' => 'Pathway Gothic One',
						'Patrick Hand' => 'Patrick Hand',
						'Patrick Hand SC' => 'Patrick Hand SC',
						'Patua One' => 'Patua One',
						'Paytone One' => 'Paytone One',
						'Peddana' => 'Peddana',
						'Peralta' => 'Peralta',
						'Permanent Marker' => 'Permanent Marker',
						'Petit Formal Script' => 'Petit Formal Script',
						'Petrona' => 'Petrona',
						'Philosopher' => 'Philosopher',
						'Piedra' => 'Piedra',
						'Pinyon Script' => 'Pinyon Script',
						'Pirata One' => 'Pirata One',
						'Plaster' => 'Plaster',
						'Play' => 'Play',
						'Playball' => 'Playball',
						'Playfair Display' => 'Playfair Display',
						'Playfair Display SC' => 'Playfair Display SC',
						'Podkova' => 'Podkova',
						'Poiret One' => 'Poiret One',
						'Poller One' => 'Poller One',
						'Poly' => 'Poly',
						'Pompiere' => 'Pompiere',
						'Pontano Sans' => 'Pontano Sans',
						'Poppins' => 'Poppins',
						'Port Lligat Sans' => 'Port Lligat Sans',
						'Port Lligat Slab' => 'Port Lligat Slab',
						'Pragati Narrow' => 'Pragati Narrow',
						'Prata' => 'Prata',
						'Preahvihear' => 'Preahvihear',
						'Press Start 2P' => 'Press Start 2P',
						'Princess Sofia' => 'Princess Sofia',
						'Prociono' => 'Prociono',
						'Prosto One' => 'Prosto One',
						'Puritan' => 'Puritan',
						'Purple Purse' => 'Purple Purse',
						'Quando' => 'Quando',
						'Quantico' => 'Quantico',
						'Quattrocento' => 'Quattrocento',
						'Quattrocento Sans' => 'Quattrocento Sans',
						'Questrial' => 'Questrial',
						'Quicksand' => 'Quicksand',
						'Quintessential' => 'Quintessential',
						'Qwigley' => 'Qwigley',
						'Racing Sans One' => 'Racing Sans One',
						'Radley' => 'Radley',
						'Rajdhani' => 'Rajdhani',
						'Raleway' => 'Raleway',
						'Raleway Dots' => 'Raleway Dots',
						'Ramabhadra' => 'Ramabhadra',
						'Ramaraja' => 'Ramaraja',
						'Rambla' => 'Rambla',
						'Rammetto One' => 'Rammetto One',
						'Ranchers' => 'Ranchers',
						'Rancho' => 'Rancho',
						'Ranga' => 'Ranga',
						'Rationale' => 'Rationale',
						'Ravi Prakash' => 'Ravi Prakash',
						'Redressed' => 'Redressed',
						'Reenie Beanie' => 'Reenie Beanie',
						'Revalia' => 'Revalia',
						'Rhodium Libre' => 'Rhodium Libre',
						'Ribeye' => 'Ribeye',
						'Ribeye Marrow' => 'Ribeye Marrow',
						'Righteous' => 'Righteous',
						'Risque' => 'Risque',
						'Roboto' => 'Roboto',
						'Roboto Condensed' => 'Roboto Condensed',
						'Roboto Mono' => 'Roboto Mono',
						'Roboto Slab' => 'Roboto Slab',
						'Rochester' => 'Rochester',
						'Rock Salt' => 'Rock Salt',
						'Rokkitt' => 'Rokkitt',
						'Romanesco' => 'Romanesco',
						'Ropa Sans' => 'Ropa Sans',
						'Rosario' => 'Rosario',
						'Rosarivo' => 'Rosarivo',
						'Rouge Script' => 'Rouge Script',
						'Rozha One' => 'Rozha One',
						'Rubik Mono One' => 'Rubik Mono One',
						'Rubik One' => 'Rubik One',
						'Ruda' => 'Ruda',
						'Rufina' => 'Rufina',
						'Ruge Boogie' => 'Ruge Boogie',
						'Ruluko' => 'Ruluko',
						'Rum Raisin' => 'Rum Raisin',
						'Ruslan Display' => 'Ruslan Display',
						'Russo One' => 'Russo One',
						'Ruthie' => 'Ruthie',
						'Rye' => 'Rye',
						'Sacramento' => 'Sacramento',
						'Sahitya' => 'Sahitya',
						'Sail' => 'Sail',
						'Salsa' => 'Salsa',
						'Sanchez' => 'Sanchez',
						'Sancreek' => 'Sancreek',
						'Sansita One' => 'Sansita One',
						'Sarala' => 'Sarala',
						'Sarina' => 'Sarina',
						'Sarpanch' => 'Sarpanch',
						'Satisfy' => 'Satisfy',
						'Scada' => 'Scada',
						'Scheherazade' => 'Scheherazade',
						'Schoolbell' => 'Schoolbell',
						'Seaweed Script' => 'Seaweed Script',
						'Sevillana' => 'Sevillana',
						'Seymour One' => 'Seymour One',
						'Shadows Into Light' => 'Shadows Into Light',
						'Shadows Into Light Two' => 'Shadows Into Light Two',
						'Shanti' => 'Shanti',
						'Share' => 'Share',
						'Share Tech' => 'Share Tech',
						'Share Tech Mono' => 'Share Tech Mono',
						'Shojumaru' => 'Shojumaru',
						'Short Stack' => 'Short Stack',
						'Siemreap' => 'Siemreap',
						'Sigmar One' => 'Sigmar One',
						'Signika' => 'Signika',
						'Signika Negative' => 'Signika Negative',
						'Simonetta' => 'Simonetta',
						'Sintony' => 'Sintony',
						'Sirin Stencil' => 'Sirin Stencil',
						'Six Caps' => 'Six Caps',
						'Skranji' => 'Skranji',
						'Slabo 13px' => 'Slabo 13px',
						'Slabo 27px' => 'Slabo 27px',
						'Slackey' => 'Slackey',
						'Smokum' => 'Smokum',
						'Smythe' => 'Smythe',
						'Sniglet' => 'Sniglet',
						'Snippet' => 'Snippet',
						'Snowburst One' => 'Snowburst One',
						'Sofadi One' => 'Sofadi One',
						'Sofia' => 'Sofia',
						'Sonsie One' => 'Sonsie One',
						'Sorts Mill Goudy' => 'Sorts Mill Goudy',
						'Source Code Pro' => 'Source Code Pro',
						'Source Sans Pro' => 'Source Sans Pro',
						'Source Serif Pro' => 'Source Serif Pro',
						'Special Elite' => 'Special Elite',
						'Spicy Rice' => 'Spicy Rice',
						'Spinnaker' => 'Spinnaker',
						'Spirax' => 'Spirax',
						'Squada One' => 'Squada One',
						'Sree Krushnadevaraya' => 'Sree Krushnadevaraya',
						'Stalemate' => 'Stalemate',
						'Stalinist One' => 'Stalinist One',
						'Stardos Stencil' => 'Stardos Stencil',
						'Stint Ultra Condensed' => 'Stint Ultra Condensed',
						'Stint Ultra Expanded' => 'Stint Ultra Expanded',
						'Stoke' => 'Stoke',
						'Strait' => 'Strait',
						'Sue Ellen Francisco' => 'Sue Ellen Francisco',
						'Sumana' => 'Sumana',
						'Sunshiney' => 'Sunshiney',
						'Supermercado One' => 'Supermercado One',
						'Sura' => 'Sura',
						'Suranna' => 'Suranna',
						'Suravaram' => 'Suravaram',
						'Suwannaphum' => 'Suwannaphum',
						'Swanky and Moo Moo' => 'Swanky and Moo Moo',
						'Syncopate' => 'Syncopate',
						'Tangerine' => 'Tangerine',
						'Taprom' => 'Taprom',
						'Tauri' => 'Tauri',
						'Teko' => 'Teko',
						'Telex' => 'Telex',
						'Tenali Ramakrishna' => 'Tenali Ramakrishna',
						'Tenor Sans' => 'Tenor Sans',
						'Text Me One' => 'Text Me One',
						'The Girl Next Door' => 'The Girl Next Door',
						'Tienne' => 'Tienne',
						'Tillana' => 'Tillana',
						'Timmana' => 'Timmana',
						'Tinos' => 'Tinos',
						'Titan One' => 'Titan One',
						'Titillium Web' => 'Titillium Web',
						'Trade Winds' => 'Trade Winds',
						'Trocchi' => 'Trocchi',
						'Trochut' => 'Trochut',
						'Trykker' => 'Trykker',
						'Tulpen One' => 'Tulpen One',
						'Ubuntu' => 'Ubuntu',
						'Ubuntu Condensed' => 'Ubuntu Condensed',
						'Ubuntu Mono' => 'Ubuntu Mono',
						'Ultra' => 'Ultra',
						'Uncial Antiqua' => 'Uncial Antiqua',
						'Underdog' => 'Underdog',
						'Unica One' => 'Unica One',
						'UnifrakturCook' => 'UnifrakturCook',
						'UnifrakturMaguntia' => 'UnifrakturMaguntia',
						'Unkempt' => 'Unkempt',
						'Unlock' => 'Unlock',
						'Unna' => 'Unna',
						'VT323' => 'VT323',
						'Vampiro One' => 'Vampiro One',
						'Varela' => 'Varela',
						'Varela Round' => 'Varela Round',
						'Vast Shadow' => 'Vast Shadow',
						'Vesper Libre' => 'Vesper Libre',
						'Vibur' => 'Vibur',
						'Vidaloka' => 'Vidaloka',
						'Viga' => 'Viga',
						'Voces' => 'Voces',
						'Volkhov' => 'Volkhov',
						'Vollkorn' => 'Vollkorn',
						'Voltaire' => 'Voltaire',
						'Waiting for the Sunrise' => 'Waiting for the Sunrise',
						'Wallpoet' => 'Wallpoet',
						'Walter Turncoat' => 'Walter Turncoat',
						'Warnes' => 'Warnes',
						'Wellfleet' => 'Wellfleet',
						'Wendy One' => 'Wendy One',
						'Wire One' => 'Wire One',
						'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
						'Yantramanav' => 'Yantramanav',
						'Yellowtail' => 'Yellowtail',
						'Yeseva One' => 'Yeseva One',
						'Yesteryear' => 'Yesteryear',
						'Zeyada' => 'Zeyada',
					),
					'title' => 'Select Menu Font',
					'default' => 'Antic Slab',
				),
				array (
					'desc' => 'Select a font family for headings',
					'id' => 'google_headings',
					'type' => 'select',
					'options' => array (
						'None' => 'None',
						'ABeeZee' => 'ABeeZee',
						'Abel' => 'Abel',
						'Abril Fatface' => 'Abril Fatface',
						'Aclonica' => 'Aclonica',
						'Acme' => 'Acme',
						'Actor' => 'Actor',
						'Adamina' => 'Adamina',
						'Advent Pro' => 'Advent Pro',
						'Aguafina Script' => 'Aguafina Script',
						'Akronim' => 'Akronim',
						'Aladin' => 'Aladin',
						'Aldrich' => 'Aldrich',
						'Alef' => 'Alef',
						'Alegreya' => 'Alegreya',
						'Alegreya SC' => 'Alegreya SC',
						'Alegreya Sans' => 'Alegreya Sans',
						'Alegreya Sans SC' => 'Alegreya Sans SC',
						'Alex Brush' => 'Alex Brush',
						'Alfa Slab One' => 'Alfa Slab One',
						'Alice' => 'Alice',
						'Alike' => 'Alike',
						'Alike Angular' => 'Alike Angular',
						'Allan' => 'Allan',
						'Allerta' => 'Allerta',
						'Allerta Stencil' => 'Allerta Stencil',
						'Allura' => 'Allura',
						'Almendra' => 'Almendra',
						'Almendra Display' => 'Almendra Display',
						'Almendra SC' => 'Almendra SC',
						'Amarante' => 'Amarante',
						'Amaranth' => 'Amaranth',
						'Amatic SC' => 'Amatic SC',
						'Amethysta' => 'Amethysta',
						'Amiri' => 'Amiri',
						'Amita' => 'Amita',
						'Anaheim' => 'Anaheim',
						'Andada' => 'Andada',
						'Andika' => 'Andika',
						'Angkor' => 'Angkor',
						'Annie Use Your Telescope' => 'Annie Use Your Telescope',
						'Anonymous Pro' => 'Anonymous Pro',
						'Antic' => 'Antic',
						'Antic Didone' => 'Antic Didone',
						'Antic Slab' => 'Antic Slab',
						'Anton' => 'Anton',
						'Arapey' => 'Arapey',
						'Arbutus' => 'Arbutus',
						'Arbutus Slab' => 'Arbutus Slab',
						'Architects Daughter' => 'Architects Daughter',
						'Archivo Black' => 'Archivo Black',
						'Archivo Narrow' => 'Archivo Narrow',
						'Arimo' => 'Arimo',
						'Arizonia' => 'Arizonia',
						'Armata' => 'Armata',
						'Artifika' => 'Artifika',
						'Arvo' => 'Arvo',
						'Arya' => 'Arya',
						'Asap' => 'Asap',
						'Asar' => 'Asar',
						'Asset' => 'Asset',
						'Astloch' => 'Astloch',
						'Asul' => 'Asul',
						'Atomic Age' => 'Atomic Age',
						'Aubrey' => 'Aubrey',
						'Audiowide' => 'Audiowide',
						'Autour One' => 'Autour One',
						'Average' => 'Average',
						'Average Sans' => 'Average Sans',
						'Averia Gruesa Libre' => 'Averia Gruesa Libre',
						'Averia Libre' => 'Averia Libre',
						'Averia Sans Libre' => 'Averia Sans Libre',
						'Averia Serif Libre' => 'Averia Serif Libre',
						'Bad Script' => 'Bad Script',
						'Balthazar' => 'Balthazar',
						'Bangers' => 'Bangers',
						'Basic' => 'Basic',
						'Battambang' => 'Battambang',
						'Baumans' => 'Baumans',
						'Bayon' => 'Bayon',
						'Belgrano' => 'Belgrano',
						'Belleza' => 'Belleza',
						'BenchNine' => 'BenchNine',
						'Bentham' => 'Bentham',
						'Berkshire Swash' => 'Berkshire Swash',
						'Bevan' => 'Bevan',
						'Bigelow Rules' => 'Bigelow Rules',
						'Bigshot One' => 'Bigshot One',
						'Bilbo' => 'Bilbo',
						'Bilbo Swash Caps' => 'Bilbo Swash Caps',
						'Biryani' => 'Biryani',
						'Bitter' => 'Bitter',
						'Black Ops One' => 'Black Ops One',
						'Bokor' => 'Bokor',
						'Bonbon' => 'Bonbon',
						'Boogaloo' => 'Boogaloo',
						'Bowlby One' => 'Bowlby One',
						'Bowlby One SC' => 'Bowlby One SC',
						'Brawler' => 'Brawler',
						'Bree Serif' => 'Bree Serif',
						'Bubblegum Sans' => 'Bubblegum Sans',
						'Bubbler One' => 'Bubbler One',
						'Buda' => 'Buda',
						'Buenard' => 'Buenard',
						'Butcherman' => 'Butcherman',
						'Butterfly Kids' => 'Butterfly Kids',
						'Cabin' => 'Cabin',
						'Cabin Condensed' => 'Cabin Condensed',
						'Cabin Sketch' => 'Cabin Sketch',
						'Caesar Dressing' => 'Caesar Dressing',
						'Cagliostro' => 'Cagliostro',
						'Calligraffitti' => 'Calligraffitti',
						'Cambay' => 'Cambay',
						'Cambo' => 'Cambo',
						'Candal' => 'Candal',
						'Cantarell' => 'Cantarell',
						'Cantata One' => 'Cantata One',
						'Cantora One' => 'Cantora One',
						'Capriola' => 'Capriola',
						'Cardo' => 'Cardo',
						'Carme' => 'Carme',
						'Carrois Gothic' => 'Carrois Gothic',
						'Carrois Gothic SC' => 'Carrois Gothic SC',
						'Carter One' => 'Carter One',
						'Caudex' => 'Caudex',
						'Cedarville Cursive' => 'Cedarville Cursive',
						'Ceviche One' => 'Ceviche One',
						'Changa One' => 'Changa One',
						'Chango' => 'Chango',
						'Chau Philomene One' => 'Chau Philomene One',
						'Chela One' => 'Chela One',
						'Chelsea Market' => 'Chelsea Market',
						'Chenla' => 'Chenla',
						'Cherry Cream Soda' => 'Cherry Cream Soda',
						'Cherry Swash' => 'Cherry Swash',
						'Chewy' => 'Chewy',
						'Chicle' => 'Chicle',
						'Chivo' => 'Chivo',
						'Cinzel' => 'Cinzel',
						'Cinzel Decorative' => 'Cinzel Decorative',
						'Clicker Script' => 'Clicker Script',
						'Coda' => 'Coda',
						'Coda Caption' => 'Coda Caption',
						'Codystar' => 'Codystar',
						'Combo' => 'Combo',
						'Comfortaa' => 'Comfortaa',
						'Coming Soon' => 'Coming Soon',
						'Concert One' => 'Concert One',
						'Condiment' => 'Condiment',
						'Content' => 'Content',
						'Contrail One' => 'Contrail One',
						'Convergence' => 'Convergence',
						'Cookie' => 'Cookie',
						'Copse' => 'Copse',
						'Corben' => 'Corben',
						'Courgette' => 'Courgette',
						'Cousine' => 'Cousine',
						'Coustard' => 'Coustard',
						'Covered By Your Grace' => 'Covered By Your Grace',
						'Crafty Girls' => 'Crafty Girls',
						'Creepster' => 'Creepster',
						'Crete Round' => 'Crete Round',
						'Crimson Text' => 'Crimson Text',
						'Croissant One' => 'Croissant One',
						'Crushed' => 'Crushed',
						'Cuprum' => 'Cuprum',
						'Cutive' => 'Cutive',
						'Cutive Mono' => 'Cutive Mono',
						'Damion' => 'Damion',
						'Dancing Script' => 'Dancing Script',
						'Dangrek' => 'Dangrek',
						'Dawning of a New Day' => 'Dawning of a New Day',
						'Days One' => 'Days One',
						'Dekko' => 'Dekko',
						'Delius' => 'Delius',
						'Delius Swash Caps' => 'Delius Swash Caps',
						'Delius Unicase' => 'Delius Unicase',
						'Della Respira' => 'Della Respira',
						'Denk One' => 'Denk One',
						'Devonshire' => 'Devonshire',
						'Dhurjati' => 'Dhurjati',
						'Didact Gothic' => 'Didact Gothic',
						'Diplomata' => 'Diplomata',
						'Diplomata SC' => 'Diplomata SC',
						'Domine' => 'Domine',
						'Donegal One' => 'Donegal One',
						'Doppio One' => 'Doppio One',
						'Dorsa' => 'Dorsa',
						'Dosis' => 'Dosis',
						'Dr Sugiyama' => 'Dr Sugiyama',
						'Droid Sans' => 'Droid Sans',
						'Droid Sans Mono' => 'Droid Sans Mono',
						'Droid Serif' => 'Droid Serif',
						'Duru Sans' => 'Duru Sans',
						'Dynalight' => 'Dynalight',
						'EB Garamond' => 'EB Garamond',
						'Eagle Lake' => 'Eagle Lake',
						'Eater' => 'Eater',
						'Economica' => 'Economica',
						'Eczar' => 'Eczar',
						'Ek Mukta' => 'Ek Mukta',
						'Electrolize' => 'Electrolize',
						'Elsie' => 'Elsie',
						'Elsie Swash Caps' => 'Elsie Swash Caps',
						'Emblema One' => 'Emblema One',
						'Emilys Candy' => 'Emilys Candy',
						'Engagement' => 'Engagement',
						'Englebert' => 'Englebert',
						'Enriqueta' => 'Enriqueta',
						'Erica One' => 'Erica One',
						'Esteban' => 'Esteban',
						'Euphoria Script' => 'Euphoria Script',
						'Ewert' => 'Ewert',
						'Exo' => 'Exo',
						'Exo 2' => 'Exo 2',
						'Expletus Sans' => 'Expletus Sans',
						'Fanwood Text' => 'Fanwood Text',
						'Fascinate' => 'Fascinate',
						'Fascinate Inline' => 'Fascinate Inline',
						'Faster One' => 'Faster One',
						'Fasthand' => 'Fasthand',
						'Fauna One' => 'Fauna One',
						'Federant' => 'Federant',
						'Federo' => 'Federo',
						'Felipa' => 'Felipa',
						'Fenix' => 'Fenix',
						'Finger Paint' => 'Finger Paint',
						'Fira Mono' => 'Fira Mono',
						'Fira Sans' => 'Fira Sans',
						'Fjalla One' => 'Fjalla One',
						'Fjord One' => 'Fjord One',
						'Flamenco' => 'Flamenco',
						'Flavors' => 'Flavors',
						'Fondamento' => 'Fondamento',
						'Fontdiner Swanky' => 'Fontdiner Swanky',
						'Forum' => 'Forum',
						'Francois One' => 'Francois One',
						'Freckle Face' => 'Freckle Face',
						'Fredericka the Great' => 'Fredericka the Great',
						'Fredoka One' => 'Fredoka One',
						'Freehand' => 'Freehand',
						'Fresca' => 'Fresca',
						'Frijole' => 'Frijole',
						'Fruktur' => 'Fruktur',
						'Fugaz One' => 'Fugaz One',
						'GFS Didot' => 'GFS Didot',
						'GFS Neohellenic' => 'GFS Neohellenic',
						'Gabriela' => 'Gabriela',
						'Gafata' => 'Gafata',
						'Galdeano' => 'Galdeano',
						'Galindo' => 'Galindo',
						'Gentium Basic' => 'Gentium Basic',
						'Gentium Book Basic' => 'Gentium Book Basic',
						'Geo' => 'Geo',
						'Geostar' => 'Geostar',
						'Geostar Fill' => 'Geostar Fill',
						'Germania One' => 'Germania One',
						'Gidugu' => 'Gidugu',
						'Gilda Display' => 'Gilda Display',
						'Give You Glory' => 'Give You Glory',
						'Glass Antiqua' => 'Glass Antiqua',
						'Glegoo' => 'Glegoo',
						'Gloria Hallelujah' => 'Gloria Hallelujah',
						'Goblin One' => 'Goblin One',
						'Gochi Hand' => 'Gochi Hand',
						'Gorditas' => 'Gorditas',
						'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
						'Graduate' => 'Graduate',
						'Grand Hotel' => 'Grand Hotel',
						'Gravitas One' => 'Gravitas One',
						'Great Vibes' => 'Great Vibes',
						'Griffy' => 'Griffy',
						'Gruppo' => 'Gruppo',
						'Gudea' => 'Gudea',
						'Gurajada' => 'Gurajada',
						'Habibi' => 'Habibi',
						'Halant' => 'Halant',
						'Hammersmith One' => 'Hammersmith One',
						'Hanalei' => 'Hanalei',
						'Hanalei Fill' => 'Hanalei Fill',
						'Handlee' => 'Handlee',
						'Hanuman' => 'Hanuman',
						'Happy Monkey' => 'Happy Monkey',
						'Headland One' => 'Headland One',
						'Henny Penny' => 'Henny Penny',
						'Herr Von Muellerhoff' => 'Herr Von Muellerhoff',
						'Hind' => 'Hind',
						'Holtwood One SC' => 'Holtwood One SC',
						'Homemade Apple' => 'Homemade Apple',
						'Homenaje' => 'Homenaje',
						'IM Fell DW Pica' => 'IM Fell DW Pica',
						'IM Fell DW Pica SC' => 'IM Fell DW Pica SC',
						'IM Fell Double Pica' => 'IM Fell Double Pica',
						'IM Fell Double Pica SC' => 'IM Fell Double Pica SC',
						'IM Fell English' => 'IM Fell English',
						'IM Fell English SC' => 'IM Fell English SC',
						'IM Fell French Canon' => 'IM Fell French Canon',
						'IM Fell French Canon SC' => 'IM Fell French Canon SC',
						'IM Fell Great Primer' => 'IM Fell Great Primer',
						'IM Fell Great Primer SC' => 'IM Fell Great Primer SC',
						'Iceberg' => 'Iceberg',
						'Iceland' => 'Iceland',
						'Imprima' => 'Imprima',
						'Inconsolata' => 'Inconsolata',
						'Inder' => 'Inder',
						'Indie Flower' => 'Indie Flower',
						'Inika' => 'Inika',
						'Inknut Antiqua' => 'Inknut Antiqua',
						'Irish Grover' => 'Irish Grover',
						'Istok Web' => 'Istok Web',
						'Italiana' => 'Italiana',
						'Italianno' => 'Italianno',
						'Jacques Francois' => 'Jacques Francois',
						'Jacques Francois Shadow' => 'Jacques Francois Shadow',
						'Jaldi' => 'Jaldi',
						'Jim Nightshade' => 'Jim Nightshade',
						'Jockey One' => 'Jockey One',
						'Jolly Lodger' => 'Jolly Lodger',
						'Josefin Sans' => 'Josefin Sans',
						'Josefin Slab' => 'Josefin Slab',
						'Joti One' => 'Joti One',
						'Judson' => 'Judson',
						'Julee' => 'Julee',
						'Julius Sans One' => 'Julius Sans One',
						'Junge' => 'Junge',
						'Jura' => 'Jura',
						'Just Another Hand' => 'Just Another Hand',
						'Just Me Again Down Here' => 'Just Me Again Down Here',
						'Kadwa' => 'Kadwa',
						'Kalam' => 'Kalam',
						'Kameron' => 'Kameron',
						'Kantumruy' => 'Kantumruy',
						'Karla' => 'Karla',
						'Karma' => 'Karma',
						'Kaushan Script' => 'Kaushan Script',
						'Kavoon' => 'Kavoon',
						'Kdam Thmor' => 'Kdam Thmor',
						'Keania One' => 'Keania One',
						'Kelly Slab' => 'Kelly Slab',
						'Kenia' => 'Kenia',
						'Khand' => 'Khand',
						'Khmer' => 'Khmer',
						'Khula' => 'Khula',
						'Kite One' => 'Kite One',
						'Knewave' => 'Knewave',
						'Kotta One' => 'Kotta One',
						'Koulen' => 'Koulen',
						'Kranky' => 'Kranky',
						'Kreon' => 'Kreon',
						'Kristi' => 'Kristi',
						'Krona One' => 'Krona One',
						'Kurale' => 'Kurale',
						'La Belle Aurore' => 'La Belle Aurore',
						'Laila' => 'Laila',
						'Lakki Reddy' => 'Lakki Reddy',
						'Lancelot' => 'Lancelot',
						'Lateef' => 'Lateef',
						'Lato' => 'Lato',
						'League Script' => 'League Script',
						'Leckerli One' => 'Leckerli One',
						'Ledger' => 'Ledger',
						'Lekton' => 'Lekton',
						'Lemon' => 'Lemon',
						'Libre Baskerville' => 'Libre Baskerville',
						'Life Savers' => 'Life Savers',
						'Lilita One' => 'Lilita One',
						'Lily Script One' => 'Lily Script One',
						'Limelight' => 'Limelight',
						'Linden Hill' => 'Linden Hill',
						'Lobster' => 'Lobster',
						'Lobster Two' => 'Lobster Two',
						'Londrina Outline' => 'Londrina Outline',
						'Londrina Shadow' => 'Londrina Shadow',
						'Londrina Sketch' => 'Londrina Sketch',
						'Londrina Solid' => 'Londrina Solid',
						'Lora' => 'Lora',
						'Love Ya Like A Sister' => 'Love Ya Like A Sister',
						'Loved by the King' => 'Loved by the King',
						'Lovers Quarrel' => 'Lovers Quarrel',
						'Luckiest Guy' => 'Luckiest Guy',
						'Lusitana' => 'Lusitana',
						'Lustria' => 'Lustria',
						'Macondo' => 'Macondo',
						'Macondo Swash Caps' => 'Macondo Swash Caps',
						'Magra' => 'Magra',
						'Maiden Orange' => 'Maiden Orange',
						'Mako' => 'Mako',
						'Mallanna' => 'Mallanna',
						'Mandali' => 'Mandali',
						'Marcellus' => 'Marcellus',
						'Marcellus SC' => 'Marcellus SC',
						'Marck Script' => 'Marck Script',
						'Margarine' => 'Margarine',
						'Marko One' => 'Marko One',
						'Marmelad' => 'Marmelad',
						'Martel' => 'Martel',
						'Martel Sans' => 'Martel Sans',
						'Marvel' => 'Marvel',
						'Mate' => 'Mate',
						'Mate SC' => 'Mate SC',
						'Maven Pro' => 'Maven Pro',
						'McLaren' => 'McLaren',
						'Meddon' => 'Meddon',
						'MedievalSharp' => 'MedievalSharp',
						'Medula One' => 'Medula One',
						'Megrim' => 'Megrim',
						'Meie Script' => 'Meie Script',
						'Merienda' => 'Merienda',
						'Merienda One' => 'Merienda One',
						'Merriweather' => 'Merriweather',
						'Merriweather Sans' => 'Merriweather Sans',
						'Metal' => 'Metal',
						'Metal Mania' => 'Metal Mania',
						'Metamorphous' => 'Metamorphous',
						'Metrophobic' => 'Metrophobic',
						'Michroma' => 'Michroma',
						'Milonga' => 'Milonga',
						'Miltonian' => 'Miltonian',
						'Miltonian Tattoo' => 'Miltonian Tattoo',
						'Miniver' => 'Miniver',
						'Miss Fajardose' => 'Miss Fajardose',
						'Modak' => 'Modak',
						'Modern Antiqua' => 'Modern Antiqua',
						'Molengo' => 'Molengo',
						'Molle' => 'Molle',
						'Monda' => 'Monda',
						'Monofett' => 'Monofett',
						'Monoton' => 'Monoton',
						'Monsieur La Doulaise' => 'Monsieur La Doulaise',
						'Montaga' => 'Montaga',
						'Montez' => 'Montez',
						'Montserrat' => 'Montserrat',
						'Montserrat Alternates' => 'Montserrat Alternates',
						'Montserrat Subrayada' => 'Montserrat Subrayada',
						'Moul' => 'Moul',
						'Moulpali' => 'Moulpali',
						'Mountains of Christmas' => 'Mountains of Christmas',
						'Mouse Memoirs' => 'Mouse Memoirs',
						'Mr Bedfort' => 'Mr Bedfort',
						'Mr Dafoe' => 'Mr Dafoe',
						'Mr De Haviland' => 'Mr De Haviland',
						'Mrs Saint Delafield' => 'Mrs Saint Delafield',
						'Mrs Sheppards' => 'Mrs Sheppards',
						'Muli' => 'Muli',
						'Mystery Quest' => 'Mystery Quest',
						'NTR' => 'NTR',
						'Neucha' => 'Neucha',
						'Neuton' => 'Neuton',
						'New Rocker' => 'New Rocker',
						'News Cycle' => 'News Cycle',
						'Niconne' => 'Niconne',
						'Nixie One' => 'Nixie One',
						'Nobile' => 'Nobile',
						'Nokora' => 'Nokora',
						'Norican' => 'Norican',
						'Nosifer' => 'Nosifer',
						'Nothing You Could Do' => 'Nothing You Could Do',
						'Noticia Text' => 'Noticia Text',
						'Noto Sans' => 'Noto Sans',
						'Noto Serif' => 'Noto Serif',
						'Nova Cut' => 'Nova Cut',
						'Nova Flat' => 'Nova Flat',
						'Nova Mono' => 'Nova Mono',
						'Nova Oval' => 'Nova Oval',
						'Nova Round' => 'Nova Round',
						'Nova Script' => 'Nova Script',
						'Nova Slim' => 'Nova Slim',
						'Nova Square' => 'Nova Square',
						'Numans' => 'Numans',
						'Nunito' => 'Nunito',
						'Odor Mean Chey' => 'Odor Mean Chey',
						'Offside' => 'Offside',
						'Old Standard TT' => 'Old Standard TT',
						'Oldenburg' => 'Oldenburg',
						'Oleo Script' => 'Oleo Script',
						'Oleo Script Swash Caps' => 'Oleo Script Swash Caps',
						'Open Sans' => 'Open Sans',
						'Open Sans Condensed' => 'Open Sans Condensed',
						'Oranienbaum' => 'Oranienbaum',
						'Orbitron' => 'Orbitron',
						'Oregano' => 'Oregano',
						'Orienta' => 'Orienta',
						'Original Surfer' => 'Original Surfer',
						'Oswald' => 'Oswald',
						'Over the Rainbow' => 'Over the Rainbow',
						'Overlock' => 'Overlock',
						'Overlock SC' => 'Overlock SC',
						'Ovo' => 'Ovo',
						'Oxygen' => 'Oxygen',
						'Oxygen Mono' => 'Oxygen Mono',
						'PT Mono' => 'PT Mono',
						'PT Sans' => 'PT Sans',
						'PT Sans Caption' => 'PT Sans Caption',
						'PT Sans Narrow' => 'PT Sans Narrow',
						'PT Serif' => 'PT Serif',
						'PT Serif Caption' => 'PT Serif Caption',
						'Pacifico' => 'Pacifico',
						'Palanquin' => 'Palanquin',
						'Palanquin Dark' => 'Palanquin Dark',
						'Paprika' => 'Paprika',
						'Parisienne' => 'Parisienne',
						'Passero One' => 'Passero One',
						'Passion One' => 'Passion One',
						'Pathway Gothic One' => 'Pathway Gothic One',
						'Patrick Hand' => 'Patrick Hand',
						'Patrick Hand SC' => 'Patrick Hand SC',
						'Patua One' => 'Patua One',
						'Paytone One' => 'Paytone One',
						'Peddana' => 'Peddana',
						'Peralta' => 'Peralta',
						'Permanent Marker' => 'Permanent Marker',
						'Petit Formal Script' => 'Petit Formal Script',
						'Petrona' => 'Petrona',
						'Philosopher' => 'Philosopher',
						'Piedra' => 'Piedra',
						'Pinyon Script' => 'Pinyon Script',
						'Pirata One' => 'Pirata One',
						'Plaster' => 'Plaster',
						'Play' => 'Play',
						'Playball' => 'Playball',
						'Playfair Display' => 'Playfair Display',
						'Playfair Display SC' => 'Playfair Display SC',
						'Podkova' => 'Podkova',
						'Poiret One' => 'Poiret One',
						'Poller One' => 'Poller One',
						'Poly' => 'Poly',
						'Pompiere' => 'Pompiere',
						'Pontano Sans' => 'Pontano Sans',
						'Poppins' => 'Poppins',
						'Port Lligat Sans' => 'Port Lligat Sans',
						'Port Lligat Slab' => 'Port Lligat Slab',
						'Pragati Narrow' => 'Pragati Narrow',
						'Prata' => 'Prata',
						'Preahvihear' => 'Preahvihear',
						'Press Start 2P' => 'Press Start 2P',
						'Princess Sofia' => 'Princess Sofia',
						'Prociono' => 'Prociono',
						'Prosto One' => 'Prosto One',
						'Puritan' => 'Puritan',
						'Purple Purse' => 'Purple Purse',
						'Quando' => 'Quando',
						'Quantico' => 'Quantico',
						'Quattrocento' => 'Quattrocento',
						'Quattrocento Sans' => 'Quattrocento Sans',
						'Questrial' => 'Questrial',
						'Quicksand' => 'Quicksand',
						'Quintessential' => 'Quintessential',
						'Qwigley' => 'Qwigley',
						'Racing Sans One' => 'Racing Sans One',
						'Radley' => 'Radley',
						'Rajdhani' => 'Rajdhani',
						'Raleway' => 'Raleway',
						'Raleway Dots' => 'Raleway Dots',
						'Ramabhadra' => 'Ramabhadra',
						'Ramaraja' => 'Ramaraja',
						'Rambla' => 'Rambla',
						'Rammetto One' => 'Rammetto One',
						'Ranchers' => 'Ranchers',
						'Rancho' => 'Rancho',
						'Ranga' => 'Ranga',
						'Rationale' => 'Rationale',
						'Ravi Prakash' => 'Ravi Prakash',
						'Redressed' => 'Redressed',
						'Reenie Beanie' => 'Reenie Beanie',
						'Revalia' => 'Revalia',
						'Rhodium Libre' => 'Rhodium Libre',
						'Ribeye' => 'Ribeye',
						'Ribeye Marrow' => 'Ribeye Marrow',
						'Righteous' => 'Righteous',
						'Risque' => 'Risque',
						'Roboto' => 'Roboto',
						'Roboto Condensed' => 'Roboto Condensed',
						'Roboto Mono' => 'Roboto Mono',
						'Roboto Slab' => 'Roboto Slab',
						'Rochester' => 'Rochester',
						'Rock Salt' => 'Rock Salt',
						'Rokkitt' => 'Rokkitt',
						'Romanesco' => 'Romanesco',
						'Ropa Sans' => 'Ropa Sans',
						'Rosario' => 'Rosario',
						'Rosarivo' => 'Rosarivo',
						'Rouge Script' => 'Rouge Script',
						'Rozha One' => 'Rozha One',
						'Rubik Mono One' => 'Rubik Mono One',
						'Rubik One' => 'Rubik One',
						'Ruda' => 'Ruda',
						'Rufina' => 'Rufina',
						'Ruge Boogie' => 'Ruge Boogie',
						'Ruluko' => 'Ruluko',
						'Rum Raisin' => 'Rum Raisin',
						'Ruslan Display' => 'Ruslan Display',
						'Russo One' => 'Russo One',
						'Ruthie' => 'Ruthie',
						'Rye' => 'Rye',
						'Sacramento' => 'Sacramento',
						'Sahitya' => 'Sahitya',
						'Sail' => 'Sail',
						'Salsa' => 'Salsa',
						'Sanchez' => 'Sanchez',
						'Sancreek' => 'Sancreek',
						'Sansita One' => 'Sansita One',
						'Sarala' => 'Sarala',
						'Sarina' => 'Sarina',
						'Sarpanch' => 'Sarpanch',
						'Satisfy' => 'Satisfy',
						'Scada' => 'Scada',
						'Scheherazade' => 'Scheherazade',
						'Schoolbell' => 'Schoolbell',
						'Seaweed Script' => 'Seaweed Script',
						'Sevillana' => 'Sevillana',
						'Seymour One' => 'Seymour One',
						'Shadows Into Light' => 'Shadows Into Light',
						'Shadows Into Light Two' => 'Shadows Into Light Two',
						'Shanti' => 'Shanti',
						'Share' => 'Share',
						'Share Tech' => 'Share Tech',
						'Share Tech Mono' => 'Share Tech Mono',
						'Shojumaru' => 'Shojumaru',
						'Short Stack' => 'Short Stack',
						'Siemreap' => 'Siemreap',
						'Sigmar One' => 'Sigmar One',
						'Signika' => 'Signika',
						'Signika Negative' => 'Signika Negative',
						'Simonetta' => 'Simonetta',
						'Sintony' => 'Sintony',
						'Sirin Stencil' => 'Sirin Stencil',
						'Six Caps' => 'Six Caps',
						'Skranji' => 'Skranji',
						'Slabo 13px' => 'Slabo 13px',
						'Slabo 27px' => 'Slabo 27px',
						'Slackey' => 'Slackey',
						'Smokum' => 'Smokum',
						'Smythe' => 'Smythe',
						'Sniglet' => 'Sniglet',
						'Snippet' => 'Snippet',
						'Snowburst One' => 'Snowburst One',
						'Sofadi One' => 'Sofadi One',
						'Sofia' => 'Sofia',
						'Sonsie One' => 'Sonsie One',
						'Sorts Mill Goudy' => 'Sorts Mill Goudy',
						'Source Code Pro' => 'Source Code Pro',
						'Source Sans Pro' => 'Source Sans Pro',
						'Source Serif Pro' => 'Source Serif Pro',
						'Special Elite' => 'Special Elite',
						'Spicy Rice' => 'Spicy Rice',
						'Spinnaker' => 'Spinnaker',
						'Spirax' => 'Spirax',
						'Squada One' => 'Squada One',
						'Sree Krushnadevaraya' => 'Sree Krushnadevaraya',
						'Stalemate' => 'Stalemate',
						'Stalinist One' => 'Stalinist One',
						'Stardos Stencil' => 'Stardos Stencil',
						'Stint Ultra Condensed' => 'Stint Ultra Condensed',
						'Stint Ultra Expanded' => 'Stint Ultra Expanded',
						'Stoke' => 'Stoke',
						'Strait' => 'Strait',
						'Sue Ellen Francisco' => 'Sue Ellen Francisco',
						'Sumana' => 'Sumana',
						'Sunshiney' => 'Sunshiney',
						'Supermercado One' => 'Supermercado One',
						'Sura' => 'Sura',
						'Suranna' => 'Suranna',
						'Suravaram' => 'Suravaram',
						'Suwannaphum' => 'Suwannaphum',
						'Swanky and Moo Moo' => 'Swanky and Moo Moo',
						'Syncopate' => 'Syncopate',
						'Tangerine' => 'Tangerine',
						'Taprom' => 'Taprom',
						'Tauri' => 'Tauri',
						'Teko' => 'Teko',
						'Telex' => 'Telex',
						'Tenali Ramakrishna' => 'Tenali Ramakrishna',
						'Tenor Sans' => 'Tenor Sans',
						'Text Me One' => 'Text Me One',
						'The Girl Next Door' => 'The Girl Next Door',
						'Tienne' => 'Tienne',
						'Tillana' => 'Tillana',
						'Timmana' => 'Timmana',
						'Tinos' => 'Tinos',
						'Titan One' => 'Titan One',
						'Titillium Web' => 'Titillium Web',
						'Trade Winds' => 'Trade Winds',
						'Trocchi' => 'Trocchi',
						'Trochut' => 'Trochut',
						'Trykker' => 'Trykker',
						'Tulpen One' => 'Tulpen One',
						'Ubuntu' => 'Ubuntu',
						'Ubuntu Condensed' => 'Ubuntu Condensed',
						'Ubuntu Mono' => 'Ubuntu Mono',
						'Ultra' => 'Ultra',
						'Uncial Antiqua' => 'Uncial Antiqua',
						'Underdog' => 'Underdog',
						'Unica One' => 'Unica One',
						'UnifrakturCook' => 'UnifrakturCook',
						'UnifrakturMaguntia' => 'UnifrakturMaguntia',
						'Unkempt' => 'Unkempt',
						'Unlock' => 'Unlock',
						'Unna' => 'Unna',
						'VT323' => 'VT323',
						'Vampiro One' => 'Vampiro One',
						'Varela' => 'Varela',
						'Varela Round' => 'Varela Round',
						'Vast Shadow' => 'Vast Shadow',
						'Vesper Libre' => 'Vesper Libre',
						'Vibur' => 'Vibur',
						'Vidaloka' => 'Vidaloka',
						'Viga' => 'Viga',
						'Voces' => 'Voces',
						'Volkhov' => 'Volkhov',
						'Vollkorn' => 'Vollkorn',
						'Voltaire' => 'Voltaire',
						'Waiting for the Sunrise' => 'Waiting for the Sunrise',
						'Wallpoet' => 'Wallpoet',
						'Walter Turncoat' => 'Walter Turncoat',
						'Warnes' => 'Warnes',
						'Wellfleet' => 'Wellfleet',
						'Wendy One' => 'Wendy One',
						'Wire One' => 'Wire One',
						'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
						'Yantramanav' => 'Yantramanav',
						'Yellowtail' => 'Yellowtail',
						'Yeseva One' => 'Yeseva One',
						'Yesteryear' => 'Yesteryear',
						'Zeyada' => 'Zeyada',
					),
					'title' => 'Select Headings Font',
					'default' => 'Antic Slab',
				),
				array (
					'desc' => 'Select a font family for footer headings',
					'id' => 'google_footer_headings',
					'type' => 'select',
					'options' => array (
						'None' => 'None',
						'ABeeZee' => 'ABeeZee',
						'Abel' => 'Abel',
						'Abril Fatface' => 'Abril Fatface',
						'Aclonica' => 'Aclonica',
						'Acme' => 'Acme',
						'Actor' => 'Actor',
						'Adamina' => 'Adamina',
						'Advent Pro' => 'Advent Pro',
						'Aguafina Script' => 'Aguafina Script',
						'Akronim' => 'Akronim',
						'Aladin' => 'Aladin',
						'Aldrich' => 'Aldrich',
						'Alef' => 'Alef',
						'Alegreya' => 'Alegreya',
						'Alegreya SC' => 'Alegreya SC',
						'Alegreya Sans' => 'Alegreya Sans',
						'Alegreya Sans SC' => 'Alegreya Sans SC',
						'Alex Brush' => 'Alex Brush',
						'Alfa Slab One' => 'Alfa Slab One',
						'Alice' => 'Alice',
						'Alike' => 'Alike',
						'Alike Angular' => 'Alike Angular',
						'Allan' => 'Allan',
						'Allerta' => 'Allerta',
						'Allerta Stencil' => 'Allerta Stencil',
						'Allura' => 'Allura',
						'Almendra' => 'Almendra',
						'Almendra Display' => 'Almendra Display',
						'Almendra SC' => 'Almendra SC',
						'Amarante' => 'Amarante',
						'Amaranth' => 'Amaranth',
						'Amatic SC' => 'Amatic SC',
						'Amethysta' => 'Amethysta',
						'Amiri' => 'Amiri',
						'Amita' => 'Amita',
						'Anaheim' => 'Anaheim',
						'Andada' => 'Andada',
						'Andika' => 'Andika',
						'Angkor' => 'Angkor',
						'Annie Use Your Telescope' => 'Annie Use Your Telescope',
						'Anonymous Pro' => 'Anonymous Pro',
						'Antic' => 'Antic',
						'Antic Didone' => 'Antic Didone',
						'Antic Slab' => 'Antic Slab',
						'Anton' => 'Anton',
						'Arapey' => 'Arapey',
						'Arbutus' => 'Arbutus',
						'Arbutus Slab' => 'Arbutus Slab',
						'Architects Daughter' => 'Architects Daughter',
						'Archivo Black' => 'Archivo Black',
						'Archivo Narrow' => 'Archivo Narrow',
						'Arimo' => 'Arimo',
						'Arizonia' => 'Arizonia',
						'Armata' => 'Armata',
						'Artifika' => 'Artifika',
						'Arvo' => 'Arvo',
						'Arya' => 'Arya',
						'Asap' => 'Asap',
						'Asar' => 'Asar',
						'Asset' => 'Asset',
						'Astloch' => 'Astloch',
						'Asul' => 'Asul',
						'Atomic Age' => 'Atomic Age',
						'Aubrey' => 'Aubrey',
						'Audiowide' => 'Audiowide',
						'Autour One' => 'Autour One',
						'Average' => 'Average',
						'Average Sans' => 'Average Sans',
						'Averia Gruesa Libre' => 'Averia Gruesa Libre',
						'Averia Libre' => 'Averia Libre',
						'Averia Sans Libre' => 'Averia Sans Libre',
						'Averia Serif Libre' => 'Averia Serif Libre',
						'Bad Script' => 'Bad Script',
						'Balthazar' => 'Balthazar',
						'Bangers' => 'Bangers',
						'Basic' => 'Basic',
						'Battambang' => 'Battambang',
						'Baumans' => 'Baumans',
						'Bayon' => 'Bayon',
						'Belgrano' => 'Belgrano',
						'Belleza' => 'Belleza',
						'BenchNine' => 'BenchNine',
						'Bentham' => 'Bentham',
						'Berkshire Swash' => 'Berkshire Swash',
						'Bevan' => 'Bevan',
						'Bigelow Rules' => 'Bigelow Rules',
						'Bigshot One' => 'Bigshot One',
						'Bilbo' => 'Bilbo',
						'Bilbo Swash Caps' => 'Bilbo Swash Caps',
						'Biryani' => 'Biryani',
						'Bitter' => 'Bitter',
						'Black Ops One' => 'Black Ops One',
						'Bokor' => 'Bokor',
						'Bonbon' => 'Bonbon',
						'Boogaloo' => 'Boogaloo',
						'Bowlby One' => 'Bowlby One',
						'Bowlby One SC' => 'Bowlby One SC',
						'Brawler' => 'Brawler',
						'Bree Serif' => 'Bree Serif',
						'Bubblegum Sans' => 'Bubblegum Sans',
						'Bubbler One' => 'Bubbler One',
						'Buda' => 'Buda',
						'Buenard' => 'Buenard',
						'Butcherman' => 'Butcherman',
						'Butterfly Kids' => 'Butterfly Kids',
						'Cabin' => 'Cabin',
						'Cabin Condensed' => 'Cabin Condensed',
						'Cabin Sketch' => 'Cabin Sketch',
						'Caesar Dressing' => 'Caesar Dressing',
						'Cagliostro' => 'Cagliostro',
						'Calligraffitti' => 'Calligraffitti',
						'Cambay' => 'Cambay',
						'Cambo' => 'Cambo',
						'Candal' => 'Candal',
						'Cantarell' => 'Cantarell',
						'Cantata One' => 'Cantata One',
						'Cantora One' => 'Cantora One',
						'Capriola' => 'Capriola',
						'Cardo' => 'Cardo',
						'Carme' => 'Carme',
						'Carrois Gothic' => 'Carrois Gothic',
						'Carrois Gothic SC' => 'Carrois Gothic SC',
						'Carter One' => 'Carter One',
						'Caudex' => 'Caudex',
						'Cedarville Cursive' => 'Cedarville Cursive',
						'Ceviche One' => 'Ceviche One',
						'Changa One' => 'Changa One',
						'Chango' => 'Chango',
						'Chau Philomene One' => 'Chau Philomene One',
						'Chela One' => 'Chela One',
						'Chelsea Market' => 'Chelsea Market',
						'Chenla' => 'Chenla',
						'Cherry Cream Soda' => 'Cherry Cream Soda',
						'Cherry Swash' => 'Cherry Swash',
						'Chewy' => 'Chewy',
						'Chicle' => 'Chicle',
						'Chivo' => 'Chivo',
						'Cinzel' => 'Cinzel',
						'Cinzel Decorative' => 'Cinzel Decorative',
						'Clicker Script' => 'Clicker Script',
						'Coda' => 'Coda',
						'Coda Caption' => 'Coda Caption',
						'Codystar' => 'Codystar',
						'Combo' => 'Combo',
						'Comfortaa' => 'Comfortaa',
						'Coming Soon' => 'Coming Soon',
						'Concert One' => 'Concert One',
						'Condiment' => 'Condiment',
						'Content' => 'Content',
						'Contrail One' => 'Contrail One',
						'Convergence' => 'Convergence',
						'Cookie' => 'Cookie',
						'Copse' => 'Copse',
						'Corben' => 'Corben',
						'Courgette' => 'Courgette',
						'Cousine' => 'Cousine',
						'Coustard' => 'Coustard',
						'Covered By Your Grace' => 'Covered By Your Grace',
						'Crafty Girls' => 'Crafty Girls',
						'Creepster' => 'Creepster',
						'Crete Round' => 'Crete Round',
						'Crimson Text' => 'Crimson Text',
						'Croissant One' => 'Croissant One',
						'Crushed' => 'Crushed',
						'Cuprum' => 'Cuprum',
						'Cutive' => 'Cutive',
						'Cutive Mono' => 'Cutive Mono',
						'Damion' => 'Damion',
						'Dancing Script' => 'Dancing Script',
						'Dangrek' => 'Dangrek',
						'Dawning of a New Day' => 'Dawning of a New Day',
						'Days One' => 'Days One',
						'Dekko' => 'Dekko',
						'Delius' => 'Delius',
						'Delius Swash Caps' => 'Delius Swash Caps',
						'Delius Unicase' => 'Delius Unicase',
						'Della Respira' => 'Della Respira',
						'Denk One' => 'Denk One',
						'Devonshire' => 'Devonshire',
						'Dhurjati' => 'Dhurjati',
						'Didact Gothic' => 'Didact Gothic',
						'Diplomata' => 'Diplomata',
						'Diplomata SC' => 'Diplomata SC',
						'Domine' => 'Domine',
						'Donegal One' => 'Donegal One',
						'Doppio One' => 'Doppio One',
						'Dorsa' => 'Dorsa',
						'Dosis' => 'Dosis',
						'Dr Sugiyama' => 'Dr Sugiyama',
						'Droid Sans' => 'Droid Sans',
						'Droid Sans Mono' => 'Droid Sans Mono',
						'Droid Serif' => 'Droid Serif',
						'Duru Sans' => 'Duru Sans',
						'Dynalight' => 'Dynalight',
						'EB Garamond' => 'EB Garamond',
						'Eagle Lake' => 'Eagle Lake',
						'Eater' => 'Eater',
						'Economica' => 'Economica',
						'Eczar' => 'Eczar',
						'Ek Mukta' => 'Ek Mukta',
						'Electrolize' => 'Electrolize',
						'Elsie' => 'Elsie',
						'Elsie Swash Caps' => 'Elsie Swash Caps',
						'Emblema One' => 'Emblema One',
						'Emilys Candy' => 'Emilys Candy',
						'Engagement' => 'Engagement',
						'Englebert' => 'Englebert',
						'Enriqueta' => 'Enriqueta',
						'Erica One' => 'Erica One',
						'Esteban' => 'Esteban',
						'Euphoria Script' => 'Euphoria Script',
						'Ewert' => 'Ewert',
						'Exo' => 'Exo',
						'Exo 2' => 'Exo 2',
						'Expletus Sans' => 'Expletus Sans',
						'Fanwood Text' => 'Fanwood Text',
						'Fascinate' => 'Fascinate',
						'Fascinate Inline' => 'Fascinate Inline',
						'Faster One' => 'Faster One',
						'Fasthand' => 'Fasthand',
						'Fauna One' => 'Fauna One',
						'Federant' => 'Federant',
						'Federo' => 'Federo',
						'Felipa' => 'Felipa',
						'Fenix' => 'Fenix',
						'Finger Paint' => 'Finger Paint',
						'Fira Mono' => 'Fira Mono',
						'Fira Sans' => 'Fira Sans',
						'Fjalla One' => 'Fjalla One',
						'Fjord One' => 'Fjord One',
						'Flamenco' => 'Flamenco',
						'Flavors' => 'Flavors',
						'Fondamento' => 'Fondamento',
						'Fontdiner Swanky' => 'Fontdiner Swanky',
						'Forum' => 'Forum',
						'Francois One' => 'Francois One',
						'Freckle Face' => 'Freckle Face',
						'Fredericka the Great' => 'Fredericka the Great',
						'Fredoka One' => 'Fredoka One',
						'Freehand' => 'Freehand',
						'Fresca' => 'Fresca',
						'Frijole' => 'Frijole',
						'Fruktur' => 'Fruktur',
						'Fugaz One' => 'Fugaz One',
						'GFS Didot' => 'GFS Didot',
						'GFS Neohellenic' => 'GFS Neohellenic',
						'Gabriela' => 'Gabriela',
						'Gafata' => 'Gafata',
						'Galdeano' => 'Galdeano',
						'Galindo' => 'Galindo',
						'Gentium Basic' => 'Gentium Basic',
						'Gentium Book Basic' => 'Gentium Book Basic',
						'Geo' => 'Geo',
						'Geostar' => 'Geostar',
						'Geostar Fill' => 'Geostar Fill',
						'Germania One' => 'Germania One',
						'Gidugu' => 'Gidugu',
						'Gilda Display' => 'Gilda Display',
						'Give You Glory' => 'Give You Glory',
						'Glass Antiqua' => 'Glass Antiqua',
						'Glegoo' => 'Glegoo',
						'Gloria Hallelujah' => 'Gloria Hallelujah',
						'Goblin One' => 'Goblin One',
						'Gochi Hand' => 'Gochi Hand',
						'Gorditas' => 'Gorditas',
						'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
						'Graduate' => 'Graduate',
						'Grand Hotel' => 'Grand Hotel',
						'Gravitas One' => 'Gravitas One',
						'Great Vibes' => 'Great Vibes',
						'Griffy' => 'Griffy',
						'Gruppo' => 'Gruppo',
						'Gudea' => 'Gudea',
						'Gurajada' => 'Gurajada',
						'Habibi' => 'Habibi',
						'Halant' => 'Halant',
						'Hammersmith One' => 'Hammersmith One',
						'Hanalei' => 'Hanalei',
						'Hanalei Fill' => 'Hanalei Fill',
						'Handlee' => 'Handlee',
						'Hanuman' => 'Hanuman',
						'Happy Monkey' => 'Happy Monkey',
						'Headland One' => 'Headland One',
						'Henny Penny' => 'Henny Penny',
						'Herr Von Muellerhoff' => 'Herr Von Muellerhoff',
						'Hind' => 'Hind',
						'Holtwood One SC' => 'Holtwood One SC',
						'Homemade Apple' => 'Homemade Apple',
						'Homenaje' => 'Homenaje',
						'IM Fell DW Pica' => 'IM Fell DW Pica',
						'IM Fell DW Pica SC' => 'IM Fell DW Pica SC',
						'IM Fell Double Pica' => 'IM Fell Double Pica',
						'IM Fell Double Pica SC' => 'IM Fell Double Pica SC',
						'IM Fell English' => 'IM Fell English',
						'IM Fell English SC' => 'IM Fell English SC',
						'IM Fell French Canon' => 'IM Fell French Canon',
						'IM Fell French Canon SC' => 'IM Fell French Canon SC',
						'IM Fell Great Primer' => 'IM Fell Great Primer',
						'IM Fell Great Primer SC' => 'IM Fell Great Primer SC',
						'Iceberg' => 'Iceberg',
						'Iceland' => 'Iceland',
						'Imprima' => 'Imprima',
						'Inconsolata' => 'Inconsolata',
						'Inder' => 'Inder',
						'Indie Flower' => 'Indie Flower',
						'Inika' => 'Inika',
						'Inknut Antiqua' => 'Inknut Antiqua',
						'Irish Grover' => 'Irish Grover',
						'Istok Web' => 'Istok Web',
						'Italiana' => 'Italiana',
						'Italianno' => 'Italianno',
						'Jacques Francois' => 'Jacques Francois',
						'Jacques Francois Shadow' => 'Jacques Francois Shadow',
						'Jaldi' => 'Jaldi',
						'Jim Nightshade' => 'Jim Nightshade',
						'Jockey One' => 'Jockey One',
						'Jolly Lodger' => 'Jolly Lodger',
						'Josefin Sans' => 'Josefin Sans',
						'Josefin Slab' => 'Josefin Slab',
						'Joti One' => 'Joti One',
						'Judson' => 'Judson',
						'Julee' => 'Julee',
						'Julius Sans One' => 'Julius Sans One',
						'Junge' => 'Junge',
						'Jura' => 'Jura',
						'Just Another Hand' => 'Just Another Hand',
						'Just Me Again Down Here' => 'Just Me Again Down Here',
						'Kadwa' => 'Kadwa',
						'Kalam' => 'Kalam',
						'Kameron' => 'Kameron',
						'Kantumruy' => 'Kantumruy',
						'Karla' => 'Karla',
						'Karma' => 'Karma',
						'Kaushan Script' => 'Kaushan Script',
						'Kavoon' => 'Kavoon',
						'Kdam Thmor' => 'Kdam Thmor',
						'Keania One' => 'Keania One',
						'Kelly Slab' => 'Kelly Slab',
						'Kenia' => 'Kenia',
						'Khand' => 'Khand',
						'Khmer' => 'Khmer',
						'Khula' => 'Khula',
						'Kite One' => 'Kite One',
						'Knewave' => 'Knewave',
						'Kotta One' => 'Kotta One',
						'Koulen' => 'Koulen',
						'Kranky' => 'Kranky',
						'Kreon' => 'Kreon',
						'Kristi' => 'Kristi',
						'Krona One' => 'Krona One',
						'Kurale' => 'Kurale',
						'La Belle Aurore' => 'La Belle Aurore',
						'Laila' => 'Laila',
						'Lakki Reddy' => 'Lakki Reddy',
						'Lancelot' => 'Lancelot',
						'Lateef' => 'Lateef',
						'Lato' => 'Lato',
						'League Script' => 'League Script',
						'Leckerli One' => 'Leckerli One',
						'Ledger' => 'Ledger',
						'Lekton' => 'Lekton',
						'Lemon' => 'Lemon',
						'Libre Baskerville' => 'Libre Baskerville',
						'Life Savers' => 'Life Savers',
						'Lilita One' => 'Lilita One',
						'Lily Script One' => 'Lily Script One',
						'Limelight' => 'Limelight',
						'Linden Hill' => 'Linden Hill',
						'Lobster' => 'Lobster',
						'Lobster Two' => 'Lobster Two',
						'Londrina Outline' => 'Londrina Outline',
						'Londrina Shadow' => 'Londrina Shadow',
						'Londrina Sketch' => 'Londrina Sketch',
						'Londrina Solid' => 'Londrina Solid',
						'Lora' => 'Lora',
						'Love Ya Like A Sister' => 'Love Ya Like A Sister',
						'Loved by the King' => 'Loved by the King',
						'Lovers Quarrel' => 'Lovers Quarrel',
						'Luckiest Guy' => 'Luckiest Guy',
						'Lusitana' => 'Lusitana',
						'Lustria' => 'Lustria',
						'Macondo' => 'Macondo',
						'Macondo Swash Caps' => 'Macondo Swash Caps',
						'Magra' => 'Magra',
						'Maiden Orange' => 'Maiden Orange',
						'Mako' => 'Mako',
						'Mallanna' => 'Mallanna',
						'Mandali' => 'Mandali',
						'Marcellus' => 'Marcellus',
						'Marcellus SC' => 'Marcellus SC',
						'Marck Script' => 'Marck Script',
						'Margarine' => 'Margarine',
						'Marko One' => 'Marko One',
						'Marmelad' => 'Marmelad',
						'Martel' => 'Martel',
						'Martel Sans' => 'Martel Sans',
						'Marvel' => 'Marvel',
						'Mate' => 'Mate',
						'Mate SC' => 'Mate SC',
						'Maven Pro' => 'Maven Pro',
						'McLaren' => 'McLaren',
						'Meddon' => 'Meddon',
						'MedievalSharp' => 'MedievalSharp',
						'Medula One' => 'Medula One',
						'Megrim' => 'Megrim',
						'Meie Script' => 'Meie Script',
						'Merienda' => 'Merienda',
						'Merienda One' => 'Merienda One',
						'Merriweather' => 'Merriweather',
						'Merriweather Sans' => 'Merriweather Sans',
						'Metal' => 'Metal',
						'Metal Mania' => 'Metal Mania',
						'Metamorphous' => 'Metamorphous',
						'Metrophobic' => 'Metrophobic',
						'Michroma' => 'Michroma',
						'Milonga' => 'Milonga',
						'Miltonian' => 'Miltonian',
						'Miltonian Tattoo' => 'Miltonian Tattoo',
						'Miniver' => 'Miniver',
						'Miss Fajardose' => 'Miss Fajardose',
						'Modak' => 'Modak',
						'Modern Antiqua' => 'Modern Antiqua',
						'Molengo' => 'Molengo',
						'Molle' => 'Molle',
						'Monda' => 'Monda',
						'Monofett' => 'Monofett',
						'Monoton' => 'Monoton',
						'Monsieur La Doulaise' => 'Monsieur La Doulaise',
						'Montaga' => 'Montaga',
						'Montez' => 'Montez',
						'Montserrat' => 'Montserrat',
						'Montserrat Alternates' => 'Montserrat Alternates',
						'Montserrat Subrayada' => 'Montserrat Subrayada',
						'Moul' => 'Moul',
						'Moulpali' => 'Moulpali',
						'Mountains of Christmas' => 'Mountains of Christmas',
						'Mouse Memoirs' => 'Mouse Memoirs',
						'Mr Bedfort' => 'Mr Bedfort',
						'Mr Dafoe' => 'Mr Dafoe',
						'Mr De Haviland' => 'Mr De Haviland',
						'Mrs Saint Delafield' => 'Mrs Saint Delafield',
						'Mrs Sheppards' => 'Mrs Sheppards',
						'Muli' => 'Muli',
						'Mystery Quest' => 'Mystery Quest',
						'NTR' => 'NTR',
						'Neucha' => 'Neucha',
						'Neuton' => 'Neuton',
						'New Rocker' => 'New Rocker',
						'News Cycle' => 'News Cycle',
						'Niconne' => 'Niconne',
						'Nixie One' => 'Nixie One',
						'Nobile' => 'Nobile',
						'Nokora' => 'Nokora',
						'Norican' => 'Norican',
						'Nosifer' => 'Nosifer',
						'Nothing You Could Do' => 'Nothing You Could Do',
						'Noticia Text' => 'Noticia Text',
						'Noto Sans' => 'Noto Sans',
						'Noto Serif' => 'Noto Serif',
						'Nova Cut' => 'Nova Cut',
						'Nova Flat' => 'Nova Flat',
						'Nova Mono' => 'Nova Mono',
						'Nova Oval' => 'Nova Oval',
						'Nova Round' => 'Nova Round',
						'Nova Script' => 'Nova Script',
						'Nova Slim' => 'Nova Slim',
						'Nova Square' => 'Nova Square',
						'Numans' => 'Numans',
						'Nunito' => 'Nunito',
						'Odor Mean Chey' => 'Odor Mean Chey',
						'Offside' => 'Offside',
						'Old Standard TT' => 'Old Standard TT',
						'Oldenburg' => 'Oldenburg',
						'Oleo Script' => 'Oleo Script',
						'Oleo Script Swash Caps' => 'Oleo Script Swash Caps',
						'Open Sans' => 'Open Sans',
						'Open Sans Condensed' => 'Open Sans Condensed',
						'Oranienbaum' => 'Oranienbaum',
						'Orbitron' => 'Orbitron',
						'Oregano' => 'Oregano',
						'Orienta' => 'Orienta',
						'Original Surfer' => 'Original Surfer',
						'Oswald' => 'Oswald',
						'Over the Rainbow' => 'Over the Rainbow',
						'Overlock' => 'Overlock',
						'Overlock SC' => 'Overlock SC',
						'Ovo' => 'Ovo',
						'Oxygen' => 'Oxygen',
						'Oxygen Mono' => 'Oxygen Mono',
						'PT Mono' => 'PT Mono',
						'PT Sans' => 'PT Sans',
						'PT Sans Caption' => 'PT Sans Caption',
						'PT Sans Narrow' => 'PT Sans Narrow',
						'PT Serif' => 'PT Serif',
						'PT Serif Caption' => 'PT Serif Caption',
						'Pacifico' => 'Pacifico',
						'Palanquin' => 'Palanquin',
						'Palanquin Dark' => 'Palanquin Dark',
						'Paprika' => 'Paprika',
						'Parisienne' => 'Parisienne',
						'Passero One' => 'Passero One',
						'Passion One' => 'Passion One',
						'Pathway Gothic One' => 'Pathway Gothic One',
						'Patrick Hand' => 'Patrick Hand',
						'Patrick Hand SC' => 'Patrick Hand SC',
						'Patua One' => 'Patua One',
						'Paytone One' => 'Paytone One',
						'Peddana' => 'Peddana',
						'Peralta' => 'Peralta',
						'Permanent Marker' => 'Permanent Marker',
						'Petit Formal Script' => 'Petit Formal Script',
						'Petrona' => 'Petrona',
						'Philosopher' => 'Philosopher',
						'Piedra' => 'Piedra',
						'Pinyon Script' => 'Pinyon Script',
						'Pirata One' => 'Pirata One',
						'Plaster' => 'Plaster',
						'Play' => 'Play',
						'Playball' => 'Playball',
						'Playfair Display' => 'Playfair Display',
						'Playfair Display SC' => 'Playfair Display SC',
						'Podkova' => 'Podkova',
						'Poiret One' => 'Poiret One',
						'Poller One' => 'Poller One',
						'Poly' => 'Poly',
						'Pompiere' => 'Pompiere',
						'Pontano Sans' => 'Pontano Sans',
						'Poppins' => 'Poppins',
						'Port Lligat Sans' => 'Port Lligat Sans',
						'Port Lligat Slab' => 'Port Lligat Slab',
						'Pragati Narrow' => 'Pragati Narrow',
						'Prata' => 'Prata',
						'Preahvihear' => 'Preahvihear',
						'Press Start 2P' => 'Press Start 2P',
						'Princess Sofia' => 'Princess Sofia',
						'Prociono' => 'Prociono',
						'Prosto One' => 'Prosto One',
						'Puritan' => 'Puritan',
						'Purple Purse' => 'Purple Purse',
						'Quando' => 'Quando',
						'Quantico' => 'Quantico',
						'Quattrocento' => 'Quattrocento',
						'Quattrocento Sans' => 'Quattrocento Sans',
						'Questrial' => 'Questrial',
						'Quicksand' => 'Quicksand',
						'Quintessential' => 'Quintessential',
						'Qwigley' => 'Qwigley',
						'Racing Sans One' => 'Racing Sans One',
						'Radley' => 'Radley',
						'Rajdhani' => 'Rajdhani',
						'Raleway' => 'Raleway',
						'Raleway Dots' => 'Raleway Dots',
						'Ramabhadra' => 'Ramabhadra',
						'Ramaraja' => 'Ramaraja',
						'Rambla' => 'Rambla',
						'Rammetto One' => 'Rammetto One',
						'Ranchers' => 'Ranchers',
						'Rancho' => 'Rancho',
						'Ranga' => 'Ranga',
						'Rationale' => 'Rationale',
						'Ravi Prakash' => 'Ravi Prakash',
						'Redressed' => 'Redressed',
						'Reenie Beanie' => 'Reenie Beanie',
						'Revalia' => 'Revalia',
						'Rhodium Libre' => 'Rhodium Libre',
						'Ribeye' => 'Ribeye',
						'Ribeye Marrow' => 'Ribeye Marrow',
						'Righteous' => 'Righteous',
						'Risque' => 'Risque',
						'Roboto' => 'Roboto',
						'Roboto Condensed' => 'Roboto Condensed',
						'Roboto Mono' => 'Roboto Mono',
						'Roboto Slab' => 'Roboto Slab',
						'Rochester' => 'Rochester',
						'Rock Salt' => 'Rock Salt',
						'Rokkitt' => 'Rokkitt',
						'Romanesco' => 'Romanesco',
						'Ropa Sans' => 'Ropa Sans',
						'Rosario' => 'Rosario',
						'Rosarivo' => 'Rosarivo',
						'Rouge Script' => 'Rouge Script',
						'Rozha One' => 'Rozha One',
						'Rubik Mono One' => 'Rubik Mono One',
						'Rubik One' => 'Rubik One',
						'Ruda' => 'Ruda',
						'Rufina' => 'Rufina',
						'Ruge Boogie' => 'Ruge Boogie',
						'Ruluko' => 'Ruluko',
						'Rum Raisin' => 'Rum Raisin',
						'Ruslan Display' => 'Ruslan Display',
						'Russo One' => 'Russo One',
						'Ruthie' => 'Ruthie',
						'Rye' => 'Rye',
						'Sacramento' => 'Sacramento',
						'Sahitya' => 'Sahitya',
						'Sail' => 'Sail',
						'Salsa' => 'Salsa',
						'Sanchez' => 'Sanchez',
						'Sancreek' => 'Sancreek',
						'Sansita One' => 'Sansita One',
						'Sarala' => 'Sarala',
						'Sarina' => 'Sarina',
						'Sarpanch' => 'Sarpanch',
						'Satisfy' => 'Satisfy',
						'Scada' => 'Scada',
						'Scheherazade' => 'Scheherazade',
						'Schoolbell' => 'Schoolbell',
						'Seaweed Script' => 'Seaweed Script',
						'Sevillana' => 'Sevillana',
						'Seymour One' => 'Seymour One',
						'Shadows Into Light' => 'Shadows Into Light',
						'Shadows Into Light Two' => 'Shadows Into Light Two',
						'Shanti' => 'Shanti',
						'Share' => 'Share',
						'Share Tech' => 'Share Tech',
						'Share Tech Mono' => 'Share Tech Mono',
						'Shojumaru' => 'Shojumaru',
						'Short Stack' => 'Short Stack',
						'Siemreap' => 'Siemreap',
						'Sigmar One' => 'Sigmar One',
						'Signika' => 'Signika',
						'Signika Negative' => 'Signika Negative',
						'Simonetta' => 'Simonetta',
						'Sintony' => 'Sintony',
						'Sirin Stencil' => 'Sirin Stencil',
						'Six Caps' => 'Six Caps',
						'Skranji' => 'Skranji',
						'Slabo 13px' => 'Slabo 13px',
						'Slabo 27px' => 'Slabo 27px',
						'Slackey' => 'Slackey',
						'Smokum' => 'Smokum',
						'Smythe' => 'Smythe',
						'Sniglet' => 'Sniglet',
						'Snippet' => 'Snippet',
						'Snowburst One' => 'Snowburst One',
						'Sofadi One' => 'Sofadi One',
						'Sofia' => 'Sofia',
						'Sonsie One' => 'Sonsie One',
						'Sorts Mill Goudy' => 'Sorts Mill Goudy',
						'Source Code Pro' => 'Source Code Pro',
						'Source Sans Pro' => 'Source Sans Pro',
						'Source Serif Pro' => 'Source Serif Pro',
						'Special Elite' => 'Special Elite',
						'Spicy Rice' => 'Spicy Rice',
						'Spinnaker' => 'Spinnaker',
						'Spirax' => 'Spirax',
						'Squada One' => 'Squada One',
						'Sree Krushnadevaraya' => 'Sree Krushnadevaraya',
						'Stalemate' => 'Stalemate',
						'Stalinist One' => 'Stalinist One',
						'Stardos Stencil' => 'Stardos Stencil',
						'Stint Ultra Condensed' => 'Stint Ultra Condensed',
						'Stint Ultra Expanded' => 'Stint Ultra Expanded',
						'Stoke' => 'Stoke',
						'Strait' => 'Strait',
						'Sue Ellen Francisco' => 'Sue Ellen Francisco',
						'Sumana' => 'Sumana',
						'Sunshiney' => 'Sunshiney',
						'Supermercado One' => 'Supermercado One',
						'Sura' => 'Sura',
						'Suranna' => 'Suranna',
						'Suravaram' => 'Suravaram',
						'Suwannaphum' => 'Suwannaphum',
						'Swanky and Moo Moo' => 'Swanky and Moo Moo',
						'Syncopate' => 'Syncopate',
						'Tangerine' => 'Tangerine',
						'Taprom' => 'Taprom',
						'Tauri' => 'Tauri',
						'Teko' => 'Teko',
						'Telex' => 'Telex',
						'Tenali Ramakrishna' => 'Tenali Ramakrishna',
						'Tenor Sans' => 'Tenor Sans',
						'Text Me One' => 'Text Me One',
						'The Girl Next Door' => 'The Girl Next Door',
						'Tienne' => 'Tienne',
						'Tillana' => 'Tillana',
						'Timmana' => 'Timmana',
						'Tinos' => 'Tinos',
						'Titan One' => 'Titan One',
						'Titillium Web' => 'Titillium Web',
						'Trade Winds' => 'Trade Winds',
						'Trocchi' => 'Trocchi',
						'Trochut' => 'Trochut',
						'Trykker' => 'Trykker',
						'Tulpen One' => 'Tulpen One',
						'Ubuntu' => 'Ubuntu',
						'Ubuntu Condensed' => 'Ubuntu Condensed',
						'Ubuntu Mono' => 'Ubuntu Mono',
						'Ultra' => 'Ultra',
						'Uncial Antiqua' => 'Uncial Antiqua',
						'Underdog' => 'Underdog',
						'Unica One' => 'Unica One',
						'UnifrakturCook' => 'UnifrakturCook',
						'UnifrakturMaguntia' => 'UnifrakturMaguntia',
						'Unkempt' => 'Unkempt',
						'Unlock' => 'Unlock',
						'Unna' => 'Unna',
						'VT323' => 'VT323',
						'Vampiro One' => 'Vampiro One',
						'Varela' => 'Varela',
						'Varela Round' => 'Varela Round',
						'Vast Shadow' => 'Vast Shadow',
						'Vesper Libre' => 'Vesper Libre',
						'Vibur' => 'Vibur',
						'Vidaloka' => 'Vidaloka',
						'Viga' => 'Viga',
						'Voces' => 'Voces',
						'Volkhov' => 'Volkhov',
						'Vollkorn' => 'Vollkorn',
						'Voltaire' => 'Voltaire',
						'Waiting for the Sunrise' => 'Waiting for the Sunrise',
						'Wallpoet' => 'Wallpoet',
						'Walter Turncoat' => 'Walter Turncoat',
						'Warnes' => 'Warnes',
						'Wellfleet' => 'Wellfleet',
						'Wendy One' => 'Wendy One',
						'Wire One' => 'Wire One',
						'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
						'Yantramanav' => 'Yantramanav',
						'Yellowtail' => 'Yellowtail',
						'Yeseva One' => 'Yeseva One',
						'Yesteryear' => 'Yesteryear',
						'Zeyada' => 'Zeyada',
					),
					'title' => 'Select Footer Headings Font',
					'default' => 'PT Sans',
				),
				array (
					'desc' => 'Select a font family for button',
					'id' => 'google_button',
					'type' => 'select',
					'options' => array (
						'None' => 'None',
						'ABeeZee' => 'ABeeZee',
						'Abel' => 'Abel',
						'Abril Fatface' => 'Abril Fatface',
						'Aclonica' => 'Aclonica',
						'Acme' => 'Acme',
						'Actor' => 'Actor',
						'Adamina' => 'Adamina',
						'Advent Pro' => 'Advent Pro',
						'Aguafina Script' => 'Aguafina Script',
						'Akronim' => 'Akronim',
						'Aladin' => 'Aladin',
						'Aldrich' => 'Aldrich',
						'Alef' => 'Alef',
						'Alegreya' => 'Alegreya',
						'Alegreya SC' => 'Alegreya SC',
						'Alegreya Sans' => 'Alegreya Sans',
						'Alegreya Sans SC' => 'Alegreya Sans SC',
						'Alex Brush' => 'Alex Brush',
						'Alfa Slab One' => 'Alfa Slab One',
						'Alice' => 'Alice',
						'Alike' => 'Alike',
						'Alike Angular' => 'Alike Angular',
						'Allan' => 'Allan',
						'Allerta' => 'Allerta',
						'Allerta Stencil' => 'Allerta Stencil',
						'Allura' => 'Allura',
						'Almendra' => 'Almendra',
						'Almendra Display' => 'Almendra Display',
						'Almendra SC' => 'Almendra SC',
						'Amarante' => 'Amarante',
						'Amaranth' => 'Amaranth',
						'Amatic SC' => 'Amatic SC',
						'Amethysta' => 'Amethysta',
						'Amiri' => 'Amiri',
						'Amita' => 'Amita',
						'Anaheim' => 'Anaheim',
						'Andada' => 'Andada',
						'Andika' => 'Andika',
						'Angkor' => 'Angkor',
						'Annie Use Your Telescope' => 'Annie Use Your Telescope',
						'Anonymous Pro' => 'Anonymous Pro',
						'Antic' => 'Antic',
						'Antic Didone' => 'Antic Didone',
						'Antic Slab' => 'Antic Slab',
						'Anton' => 'Anton',
						'Arapey' => 'Arapey',
						'Arbutus' => 'Arbutus',
						'Arbutus Slab' => 'Arbutus Slab',
						'Architects Daughter' => 'Architects Daughter',
						'Archivo Black' => 'Archivo Black',
						'Archivo Narrow' => 'Archivo Narrow',
						'Arimo' => 'Arimo',
						'Arizonia' => 'Arizonia',
						'Armata' => 'Armata',
						'Artifika' => 'Artifika',
						'Arvo' => 'Arvo',
						'Arya' => 'Arya',
						'Asap' => 'Asap',
						'Asar' => 'Asar',
						'Asset' => 'Asset',
						'Astloch' => 'Astloch',
						'Asul' => 'Asul',
						'Atomic Age' => 'Atomic Age',
						'Aubrey' => 'Aubrey',
						'Audiowide' => 'Audiowide',
						'Autour One' => 'Autour One',
						'Average' => 'Average',
						'Average Sans' => 'Average Sans',
						'Averia Gruesa Libre' => 'Averia Gruesa Libre',
						'Averia Libre' => 'Averia Libre',
						'Averia Sans Libre' => 'Averia Sans Libre',
						'Averia Serif Libre' => 'Averia Serif Libre',
						'Bad Script' => 'Bad Script',
						'Balthazar' => 'Balthazar',
						'Bangers' => 'Bangers',
						'Basic' => 'Basic',
						'Battambang' => 'Battambang',
						'Baumans' => 'Baumans',
						'Bayon' => 'Bayon',
						'Belgrano' => 'Belgrano',
						'Belleza' => 'Belleza',
						'BenchNine' => 'BenchNine',
						'Bentham' => 'Bentham',
						'Berkshire Swash' => 'Berkshire Swash',
						'Bevan' => 'Bevan',
						'Bigelow Rules' => 'Bigelow Rules',
						'Bigshot One' => 'Bigshot One',
						'Bilbo' => 'Bilbo',
						'Bilbo Swash Caps' => 'Bilbo Swash Caps',
						'Biryani' => 'Biryani',
						'Bitter' => 'Bitter',
						'Black Ops One' => 'Black Ops One',
						'Bokor' => 'Bokor',
						'Bonbon' => 'Bonbon',
						'Boogaloo' => 'Boogaloo',
						'Bowlby One' => 'Bowlby One',
						'Bowlby One SC' => 'Bowlby One SC',
						'Brawler' => 'Brawler',
						'Bree Serif' => 'Bree Serif',
						'Bubblegum Sans' => 'Bubblegum Sans',
						'Bubbler One' => 'Bubbler One',
						'Buda' => 'Buda',
						'Buenard' => 'Buenard',
						'Butcherman' => 'Butcherman',
						'Butterfly Kids' => 'Butterfly Kids',
						'Cabin' => 'Cabin',
						'Cabin Condensed' => 'Cabin Condensed',
						'Cabin Sketch' => 'Cabin Sketch',
						'Caesar Dressing' => 'Caesar Dressing',
						'Cagliostro' => 'Cagliostro',
						'Calligraffitti' => 'Calligraffitti',
						'Cambay' => 'Cambay',
						'Cambo' => 'Cambo',
						'Candal' => 'Candal',
						'Cantarell' => 'Cantarell',
						'Cantata One' => 'Cantata One',
						'Cantora One' => 'Cantora One',
						'Capriola' => 'Capriola',
						'Cardo' => 'Cardo',
						'Carme' => 'Carme',
						'Carrois Gothic' => 'Carrois Gothic',
						'Carrois Gothic SC' => 'Carrois Gothic SC',
						'Carter One' => 'Carter One',
						'Caudex' => 'Caudex',
						'Cedarville Cursive' => 'Cedarville Cursive',
						'Ceviche One' => 'Ceviche One',
						'Changa One' => 'Changa One',
						'Chango' => 'Chango',
						'Chau Philomene One' => 'Chau Philomene One',
						'Chela One' => 'Chela One',
						'Chelsea Market' => 'Chelsea Market',
						'Chenla' => 'Chenla',
						'Cherry Cream Soda' => 'Cherry Cream Soda',
						'Cherry Swash' => 'Cherry Swash',
						'Chewy' => 'Chewy',
						'Chicle' => 'Chicle',
						'Chivo' => 'Chivo',
						'Cinzel' => 'Cinzel',
						'Cinzel Decorative' => 'Cinzel Decorative',
						'Clicker Script' => 'Clicker Script',
						'Coda' => 'Coda',
						'Coda Caption' => 'Coda Caption',
						'Codystar' => 'Codystar',
						'Combo' => 'Combo',
						'Comfortaa' => 'Comfortaa',
						'Coming Soon' => 'Coming Soon',
						'Concert One' => 'Concert One',
						'Condiment' => 'Condiment',
						'Content' => 'Content',
						'Contrail One' => 'Contrail One',
						'Convergence' => 'Convergence',
						'Cookie' => 'Cookie',
						'Copse' => 'Copse',
						'Corben' => 'Corben',
						'Courgette' => 'Courgette',
						'Cousine' => 'Cousine',
						'Coustard' => 'Coustard',
						'Covered By Your Grace' => 'Covered By Your Grace',
						'Crafty Girls' => 'Crafty Girls',
						'Creepster' => 'Creepster',
						'Crete Round' => 'Crete Round',
						'Crimson Text' => 'Crimson Text',
						'Croissant One' => 'Croissant One',
						'Crushed' => 'Crushed',
						'Cuprum' => 'Cuprum',
						'Cutive' => 'Cutive',
						'Cutive Mono' => 'Cutive Mono',
						'Damion' => 'Damion',
						'Dancing Script' => 'Dancing Script',
						'Dangrek' => 'Dangrek',
						'Dawning of a New Day' => 'Dawning of a New Day',
						'Days One' => 'Days One',
						'Dekko' => 'Dekko',
						'Delius' => 'Delius',
						'Delius Swash Caps' => 'Delius Swash Caps',
						'Delius Unicase' => 'Delius Unicase',
						'Della Respira' => 'Della Respira',
						'Denk One' => 'Denk One',
						'Devonshire' => 'Devonshire',
						'Dhurjati' => 'Dhurjati',
						'Didact Gothic' => 'Didact Gothic',
						'Diplomata' => 'Diplomata',
						'Diplomata SC' => 'Diplomata SC',
						'Domine' => 'Domine',
						'Donegal One' => 'Donegal One',
						'Doppio One' => 'Doppio One',
						'Dorsa' => 'Dorsa',
						'Dosis' => 'Dosis',
						'Dr Sugiyama' => 'Dr Sugiyama',
						'Droid Sans' => 'Droid Sans',
						'Droid Sans Mono' => 'Droid Sans Mono',
						'Droid Serif' => 'Droid Serif',
						'Duru Sans' => 'Duru Sans',
						'Dynalight' => 'Dynalight',
						'EB Garamond' => 'EB Garamond',
						'Eagle Lake' => 'Eagle Lake',
						'Eater' => 'Eater',
						'Economica' => 'Economica',
						'Eczar' => 'Eczar',
						'Ek Mukta' => 'Ek Mukta',
						'Electrolize' => 'Electrolize',
						'Elsie' => 'Elsie',
						'Elsie Swash Caps' => 'Elsie Swash Caps',
						'Emblema One' => 'Emblema One',
						'Emilys Candy' => 'Emilys Candy',
						'Engagement' => 'Engagement',
						'Englebert' => 'Englebert',
						'Enriqueta' => 'Enriqueta',
						'Erica One' => 'Erica One',
						'Esteban' => 'Esteban',
						'Euphoria Script' => 'Euphoria Script',
						'Ewert' => 'Ewert',
						'Exo' => 'Exo',
						'Exo 2' => 'Exo 2',
						'Expletus Sans' => 'Expletus Sans',
						'Fanwood Text' => 'Fanwood Text',
						'Fascinate' => 'Fascinate',
						'Fascinate Inline' => 'Fascinate Inline',
						'Faster One' => 'Faster One',
						'Fasthand' => 'Fasthand',
						'Fauna One' => 'Fauna One',
						'Federant' => 'Federant',
						'Federo' => 'Federo',
						'Felipa' => 'Felipa',
						'Fenix' => 'Fenix',
						'Finger Paint' => 'Finger Paint',
						'Fira Mono' => 'Fira Mono',
						'Fira Sans' => 'Fira Sans',
						'Fjalla One' => 'Fjalla One',
						'Fjord One' => 'Fjord One',
						'Flamenco' => 'Flamenco',
						'Flavors' => 'Flavors',
						'Fondamento' => 'Fondamento',
						'Fontdiner Swanky' => 'Fontdiner Swanky',
						'Forum' => 'Forum',
						'Francois One' => 'Francois One',
						'Freckle Face' => 'Freckle Face',
						'Fredericka the Great' => 'Fredericka the Great',
						'Fredoka One' => 'Fredoka One',
						'Freehand' => 'Freehand',
						'Fresca' => 'Fresca',
						'Frijole' => 'Frijole',
						'Fruktur' => 'Fruktur',
						'Fugaz One' => 'Fugaz One',
						'GFS Didot' => 'GFS Didot',
						'GFS Neohellenic' => 'GFS Neohellenic',
						'Gabriela' => 'Gabriela',
						'Gafata' => 'Gafata',
						'Galdeano' => 'Galdeano',
						'Galindo' => 'Galindo',
						'Gentium Basic' => 'Gentium Basic',
						'Gentium Book Basic' => 'Gentium Book Basic',
						'Geo' => 'Geo',
						'Geostar' => 'Geostar',
						'Geostar Fill' => 'Geostar Fill',
						'Germania One' => 'Germania One',
						'Gidugu' => 'Gidugu',
						'Gilda Display' => 'Gilda Display',
						'Give You Glory' => 'Give You Glory',
						'Glass Antiqua' => 'Glass Antiqua',
						'Glegoo' => 'Glegoo',
						'Gloria Hallelujah' => 'Gloria Hallelujah',
						'Goblin One' => 'Goblin One',
						'Gochi Hand' => 'Gochi Hand',
						'Gorditas' => 'Gorditas',
						'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
						'Graduate' => 'Graduate',
						'Grand Hotel' => 'Grand Hotel',
						'Gravitas One' => 'Gravitas One',
						'Great Vibes' => 'Great Vibes',
						'Griffy' => 'Griffy',
						'Gruppo' => 'Gruppo',
						'Gudea' => 'Gudea',
						'Gurajada' => 'Gurajada',
						'Habibi' => 'Habibi',
						'Halant' => 'Halant',
						'Hammersmith One' => 'Hammersmith One',
						'Hanalei' => 'Hanalei',
						'Hanalei Fill' => 'Hanalei Fill',
						'Handlee' => 'Handlee',
						'Hanuman' => 'Hanuman',
						'Happy Monkey' => 'Happy Monkey',
						'Headland One' => 'Headland One',
						'Henny Penny' => 'Henny Penny',
						'Herr Von Muellerhoff' => 'Herr Von Muellerhoff',
						'Hind' => 'Hind',
						'Holtwood One SC' => 'Holtwood One SC',
						'Homemade Apple' => 'Homemade Apple',
						'Homenaje' => 'Homenaje',
						'IM Fell DW Pica' => 'IM Fell DW Pica',
						'IM Fell DW Pica SC' => 'IM Fell DW Pica SC',
						'IM Fell Double Pica' => 'IM Fell Double Pica',
						'IM Fell Double Pica SC' => 'IM Fell Double Pica SC',
						'IM Fell English' => 'IM Fell English',
						'IM Fell English SC' => 'IM Fell English SC',
						'IM Fell French Canon' => 'IM Fell French Canon',
						'IM Fell French Canon SC' => 'IM Fell French Canon SC',
						'IM Fell Great Primer' => 'IM Fell Great Primer',
						'IM Fell Great Primer SC' => 'IM Fell Great Primer SC',
						'Iceberg' => 'Iceberg',
						'Iceland' => 'Iceland',
						'Imprima' => 'Imprima',
						'Inconsolata' => 'Inconsolata',
						'Inder' => 'Inder',
						'Indie Flower' => 'Indie Flower',
						'Inika' => 'Inika',
						'Inknut Antiqua' => 'Inknut Antiqua',
						'Irish Grover' => 'Irish Grover',
						'Istok Web' => 'Istok Web',
						'Italiana' => 'Italiana',
						'Italianno' => 'Italianno',
						'Jacques Francois' => 'Jacques Francois',
						'Jacques Francois Shadow' => 'Jacques Francois Shadow',
						'Jaldi' => 'Jaldi',
						'Jim Nightshade' => 'Jim Nightshade',
						'Jockey One' => 'Jockey One',
						'Jolly Lodger' => 'Jolly Lodger',
						'Josefin Sans' => 'Josefin Sans',
						'Josefin Slab' => 'Josefin Slab',
						'Joti One' => 'Joti One',
						'Judson' => 'Judson',
						'Julee' => 'Julee',
						'Julius Sans One' => 'Julius Sans One',
						'Junge' => 'Junge',
						'Jura' => 'Jura',
						'Just Another Hand' => 'Just Another Hand',
						'Just Me Again Down Here' => 'Just Me Again Down Here',
						'Kadwa' => 'Kadwa',
						'Kalam' => 'Kalam',
						'Kameron' => 'Kameron',
						'Kantumruy' => 'Kantumruy',
						'Karla' => 'Karla',
						'Karma' => 'Karma',
						'Kaushan Script' => 'Kaushan Script',
						'Kavoon' => 'Kavoon',
						'Kdam Thmor' => 'Kdam Thmor',
						'Keania One' => 'Keania One',
						'Kelly Slab' => 'Kelly Slab',
						'Kenia' => 'Kenia',
						'Khand' => 'Khand',
						'Khmer' => 'Khmer',
						'Khula' => 'Khula',
						'Kite One' => 'Kite One',
						'Knewave' => 'Knewave',
						'Kotta One' => 'Kotta One',
						'Koulen' => 'Koulen',
						'Kranky' => 'Kranky',
						'Kreon' => 'Kreon',
						'Kristi' => 'Kristi',
						'Krona One' => 'Krona One',
						'Kurale' => 'Kurale',
						'La Belle Aurore' => 'La Belle Aurore',
						'Laila' => 'Laila',
						'Lakki Reddy' => 'Lakki Reddy',
						'Lancelot' => 'Lancelot',
						'Lateef' => 'Lateef',
						'Lato' => 'Lato',
						'League Script' => 'League Script',
						'Leckerli One' => 'Leckerli One',
						'Ledger' => 'Ledger',
						'Lekton' => 'Lekton',
						'Lemon' => 'Lemon',
						'Libre Baskerville' => 'Libre Baskerville',
						'Life Savers' => 'Life Savers',
						'Lilita One' => 'Lilita One',
						'Lily Script One' => 'Lily Script One',
						'Limelight' => 'Limelight',
						'Linden Hill' => 'Linden Hill',
						'Lobster' => 'Lobster',
						'Lobster Two' => 'Lobster Two',
						'Londrina Outline' => 'Londrina Outline',
						'Londrina Shadow' => 'Londrina Shadow',
						'Londrina Sketch' => 'Londrina Sketch',
						'Londrina Solid' => 'Londrina Solid',
						'Lora' => 'Lora',
						'Love Ya Like A Sister' => 'Love Ya Like A Sister',
						'Loved by the King' => 'Loved by the King',
						'Lovers Quarrel' => 'Lovers Quarrel',
						'Luckiest Guy' => 'Luckiest Guy',
						'Lusitana' => 'Lusitana',
						'Lustria' => 'Lustria',
						'Macondo' => 'Macondo',
						'Macondo Swash Caps' => 'Macondo Swash Caps',
						'Magra' => 'Magra',
						'Maiden Orange' => 'Maiden Orange',
						'Mako' => 'Mako',
						'Mallanna' => 'Mallanna',
						'Mandali' => 'Mandali',
						'Marcellus' => 'Marcellus',
						'Marcellus SC' => 'Marcellus SC',
						'Marck Script' => 'Marck Script',
						'Margarine' => 'Margarine',
						'Marko One' => 'Marko One',
						'Marmelad' => 'Marmelad',
						'Martel' => 'Martel',
						'Martel Sans' => 'Martel Sans',
						'Marvel' => 'Marvel',
						'Mate' => 'Mate',
						'Mate SC' => 'Mate SC',
						'Maven Pro' => 'Maven Pro',
						'McLaren' => 'McLaren',
						'Meddon' => 'Meddon',
						'MedievalSharp' => 'MedievalSharp',
						'Medula One' => 'Medula One',
						'Megrim' => 'Megrim',
						'Meie Script' => 'Meie Script',
						'Merienda' => 'Merienda',
						'Merienda One' => 'Merienda One',
						'Merriweather' => 'Merriweather',
						'Merriweather Sans' => 'Merriweather Sans',
						'Metal' => 'Metal',
						'Metal Mania' => 'Metal Mania',
						'Metamorphous' => 'Metamorphous',
						'Metrophobic' => 'Metrophobic',
						'Michroma' => 'Michroma',
						'Milonga' => 'Milonga',
						'Miltonian' => 'Miltonian',
						'Miltonian Tattoo' => 'Miltonian Tattoo',
						'Miniver' => 'Miniver',
						'Miss Fajardose' => 'Miss Fajardose',
						'Modak' => 'Modak',
						'Modern Antiqua' => 'Modern Antiqua',
						'Molengo' => 'Molengo',
						'Molle' => 'Molle',
						'Monda' => 'Monda',
						'Monofett' => 'Monofett',
						'Monoton' => 'Monoton',
						'Monsieur La Doulaise' => 'Monsieur La Doulaise',
						'Montaga' => 'Montaga',
						'Montez' => 'Montez',
						'Montserrat' => 'Montserrat',
						'Montserrat Alternates' => 'Montserrat Alternates',
						'Montserrat Subrayada' => 'Montserrat Subrayada',
						'Moul' => 'Moul',
						'Moulpali' => 'Moulpali',
						'Mountains of Christmas' => 'Mountains of Christmas',
						'Mouse Memoirs' => 'Mouse Memoirs',
						'Mr Bedfort' => 'Mr Bedfort',
						'Mr Dafoe' => 'Mr Dafoe',
						'Mr De Haviland' => 'Mr De Haviland',
						'Mrs Saint Delafield' => 'Mrs Saint Delafield',
						'Mrs Sheppards' => 'Mrs Sheppards',
						'Muli' => 'Muli',
						'Mystery Quest' => 'Mystery Quest',
						'NTR' => 'NTR',
						'Neucha' => 'Neucha',
						'Neuton' => 'Neuton',
						'New Rocker' => 'New Rocker',
						'News Cycle' => 'News Cycle',
						'Niconne' => 'Niconne',
						'Nixie One' => 'Nixie One',
						'Nobile' => 'Nobile',
						'Nokora' => 'Nokora',
						'Norican' => 'Norican',
						'Nosifer' => 'Nosifer',
						'Nothing You Could Do' => 'Nothing You Could Do',
						'Noticia Text' => 'Noticia Text',
						'Noto Sans' => 'Noto Sans',
						'Noto Serif' => 'Noto Serif',
						'Nova Cut' => 'Nova Cut',
						'Nova Flat' => 'Nova Flat',
						'Nova Mono' => 'Nova Mono',
						'Nova Oval' => 'Nova Oval',
						'Nova Round' => 'Nova Round',
						'Nova Script' => 'Nova Script',
						'Nova Slim' => 'Nova Slim',
						'Nova Square' => 'Nova Square',
						'Numans' => 'Numans',
						'Nunito' => 'Nunito',
						'Odor Mean Chey' => 'Odor Mean Chey',
						'Offside' => 'Offside',
						'Old Standard TT' => 'Old Standard TT',
						'Oldenburg' => 'Oldenburg',
						'Oleo Script' => 'Oleo Script',
						'Oleo Script Swash Caps' => 'Oleo Script Swash Caps',
						'Open Sans' => 'Open Sans',
						'Open Sans Condensed' => 'Open Sans Condensed',
						'Oranienbaum' => 'Oranienbaum',
						'Orbitron' => 'Orbitron',
						'Oregano' => 'Oregano',
						'Orienta' => 'Orienta',
						'Original Surfer' => 'Original Surfer',
						'Oswald' => 'Oswald',
						'Over the Rainbow' => 'Over the Rainbow',
						'Overlock' => 'Overlock',
						'Overlock SC' => 'Overlock SC',
						'Ovo' => 'Ovo',
						'Oxygen' => 'Oxygen',
						'Oxygen Mono' => 'Oxygen Mono',
						'PT Mono' => 'PT Mono',
						'PT Sans' => 'PT Sans',
						'PT Sans Caption' => 'PT Sans Caption',
						'PT Sans Narrow' => 'PT Sans Narrow',
						'PT Serif' => 'PT Serif',
						'PT Serif Caption' => 'PT Serif Caption',
						'Pacifico' => 'Pacifico',
						'Palanquin' => 'Palanquin',
						'Palanquin Dark' => 'Palanquin Dark',
						'Paprika' => 'Paprika',
						'Parisienne' => 'Parisienne',
						'Passero One' => 'Passero One',
						'Passion One' => 'Passion One',
						'Pathway Gothic One' => 'Pathway Gothic One',
						'Patrick Hand' => 'Patrick Hand',
						'Patrick Hand SC' => 'Patrick Hand SC',
						'Patua One' => 'Patua One',
						'Paytone One' => 'Paytone One',
						'Peddana' => 'Peddana',
						'Peralta' => 'Peralta',
						'Permanent Marker' => 'Permanent Marker',
						'Petit Formal Script' => 'Petit Formal Script',
						'Petrona' => 'Petrona',
						'Philosopher' => 'Philosopher',
						'Piedra' => 'Piedra',
						'Pinyon Script' => 'Pinyon Script',
						'Pirata One' => 'Pirata One',
						'Plaster' => 'Plaster',
						'Play' => 'Play',
						'Playball' => 'Playball',
						'Playfair Display' => 'Playfair Display',
						'Playfair Display SC' => 'Playfair Display SC',
						'Podkova' => 'Podkova',
						'Poiret One' => 'Poiret One',
						'Poller One' => 'Poller One',
						'Poly' => 'Poly',
						'Pompiere' => 'Pompiere',
						'Pontano Sans' => 'Pontano Sans',
						'Poppins' => 'Poppins',
						'Port Lligat Sans' => 'Port Lligat Sans',
						'Port Lligat Slab' => 'Port Lligat Slab',
						'Pragati Narrow' => 'Pragati Narrow',
						'Prata' => 'Prata',
						'Preahvihear' => 'Preahvihear',
						'Press Start 2P' => 'Press Start 2P',
						'Princess Sofia' => 'Princess Sofia',
						'Prociono' => 'Prociono',
						'Prosto One' => 'Prosto One',
						'Puritan' => 'Puritan',
						'Purple Purse' => 'Purple Purse',
						'Quando' => 'Quando',
						'Quantico' => 'Quantico',
						'Quattrocento' => 'Quattrocento',
						'Quattrocento Sans' => 'Quattrocento Sans',
						'Questrial' => 'Questrial',
						'Quicksand' => 'Quicksand',
						'Quintessential' => 'Quintessential',
						'Qwigley' => 'Qwigley',
						'Racing Sans One' => 'Racing Sans One',
						'Radley' => 'Radley',
						'Rajdhani' => 'Rajdhani',
						'Raleway' => 'Raleway',
						'Raleway Dots' => 'Raleway Dots',
						'Ramabhadra' => 'Ramabhadra',
						'Ramaraja' => 'Ramaraja',
						'Rambla' => 'Rambla',
						'Rammetto One' => 'Rammetto One',
						'Ranchers' => 'Ranchers',
						'Rancho' => 'Rancho',
						'Ranga' => 'Ranga',
						'Rationale' => 'Rationale',
						'Ravi Prakash' => 'Ravi Prakash',
						'Redressed' => 'Redressed',
						'Reenie Beanie' => 'Reenie Beanie',
						'Revalia' => 'Revalia',
						'Rhodium Libre' => 'Rhodium Libre',
						'Ribeye' => 'Ribeye',
						'Ribeye Marrow' => 'Ribeye Marrow',
						'Righteous' => 'Righteous',
						'Risque' => 'Risque',
						'Roboto' => 'Roboto',
						'Roboto Condensed' => 'Roboto Condensed',
						'Roboto Mono' => 'Roboto Mono',
						'Roboto Slab' => 'Roboto Slab',
						'Rochester' => 'Rochester',
						'Rock Salt' => 'Rock Salt',
						'Rokkitt' => 'Rokkitt',
						'Romanesco' => 'Romanesco',
						'Ropa Sans' => 'Ropa Sans',
						'Rosario' => 'Rosario',
						'Rosarivo' => 'Rosarivo',
						'Rouge Script' => 'Rouge Script',
						'Rozha One' => 'Rozha One',
						'Rubik Mono One' => 'Rubik Mono One',
						'Rubik One' => 'Rubik One',
						'Ruda' => 'Ruda',
						'Rufina' => 'Rufina',
						'Ruge Boogie' => 'Ruge Boogie',
						'Ruluko' => 'Ruluko',
						'Rum Raisin' => 'Rum Raisin',
						'Ruslan Display' => 'Ruslan Display',
						'Russo One' => 'Russo One',
						'Ruthie' => 'Ruthie',
						'Rye' => 'Rye',
						'Sacramento' => 'Sacramento',
						'Sahitya' => 'Sahitya',
						'Sail' => 'Sail',
						'Salsa' => 'Salsa',
						'Sanchez' => 'Sanchez',
						'Sancreek' => 'Sancreek',
						'Sansita One' => 'Sansita One',
						'Sarala' => 'Sarala',
						'Sarina' => 'Sarina',
						'Sarpanch' => 'Sarpanch',
						'Satisfy' => 'Satisfy',
						'Scada' => 'Scada',
						'Scheherazade' => 'Scheherazade',
						'Schoolbell' => 'Schoolbell',
						'Seaweed Script' => 'Seaweed Script',
						'Sevillana' => 'Sevillana',
						'Seymour One' => 'Seymour One',
						'Shadows Into Light' => 'Shadows Into Light',
						'Shadows Into Light Two' => 'Shadows Into Light Two',
						'Shanti' => 'Shanti',
						'Share' => 'Share',
						'Share Tech' => 'Share Tech',
						'Share Tech Mono' => 'Share Tech Mono',
						'Shojumaru' => 'Shojumaru',
						'Short Stack' => 'Short Stack',
						'Siemreap' => 'Siemreap',
						'Sigmar One' => 'Sigmar One',
						'Signika' => 'Signika',
						'Signika Negative' => 'Signika Negative',
						'Simonetta' => 'Simonetta',
						'Sintony' => 'Sintony',
						'Sirin Stencil' => 'Sirin Stencil',
						'Six Caps' => 'Six Caps',
						'Skranji' => 'Skranji',
						'Slabo 13px' => 'Slabo 13px',
						'Slabo 27px' => 'Slabo 27px',
						'Slackey' => 'Slackey',
						'Smokum' => 'Smokum',
						'Smythe' => 'Smythe',
						'Sniglet' => 'Sniglet',
						'Snippet' => 'Snippet',
						'Snowburst One' => 'Snowburst One',
						'Sofadi One' => 'Sofadi One',
						'Sofia' => 'Sofia',
						'Sonsie One' => 'Sonsie One',
						'Sorts Mill Goudy' => 'Sorts Mill Goudy',
						'Source Code Pro' => 'Source Code Pro',
						'Source Sans Pro' => 'Source Sans Pro',
						'Source Serif Pro' => 'Source Serif Pro',
						'Special Elite' => 'Special Elite',
						'Spicy Rice' => 'Spicy Rice',
						'Spinnaker' => 'Spinnaker',
						'Spirax' => 'Spirax',
						'Squada One' => 'Squada One',
						'Sree Krushnadevaraya' => 'Sree Krushnadevaraya',
						'Stalemate' => 'Stalemate',
						'Stalinist One' => 'Stalinist One',
						'Stardos Stencil' => 'Stardos Stencil',
						'Stint Ultra Condensed' => 'Stint Ultra Condensed',
						'Stint Ultra Expanded' => 'Stint Ultra Expanded',
						'Stoke' => 'Stoke',
						'Strait' => 'Strait',
						'Sue Ellen Francisco' => 'Sue Ellen Francisco',
						'Sumana' => 'Sumana',
						'Sunshiney' => 'Sunshiney',
						'Supermercado One' => 'Supermercado One',
						'Sura' => 'Sura',
						'Suranna' => 'Suranna',
						'Suravaram' => 'Suravaram',
						'Suwannaphum' => 'Suwannaphum',
						'Swanky and Moo Moo' => 'Swanky and Moo Moo',
						'Syncopate' => 'Syncopate',
						'Tangerine' => 'Tangerine',
						'Taprom' => 'Taprom',
						'Tauri' => 'Tauri',
						'Teko' => 'Teko',
						'Telex' => 'Telex',
						'Tenali Ramakrishna' => 'Tenali Ramakrishna',
						'Tenor Sans' => 'Tenor Sans',
						'Text Me One' => 'Text Me One',
						'The Girl Next Door' => 'The Girl Next Door',
						'Tienne' => 'Tienne',
						'Tillana' => 'Tillana',
						'Timmana' => 'Timmana',
						'Tinos' => 'Tinos',
						'Titan One' => 'Titan One',
						'Titillium Web' => 'Titillium Web',
						'Trade Winds' => 'Trade Winds',
						'Trocchi' => 'Trocchi',
						'Trochut' => 'Trochut',
						'Trykker' => 'Trykker',
						'Tulpen One' => 'Tulpen One',
						'Ubuntu' => 'Ubuntu',
						'Ubuntu Condensed' => 'Ubuntu Condensed',
						'Ubuntu Mono' => 'Ubuntu Mono',
						'Ultra' => 'Ultra',
						'Uncial Antiqua' => 'Uncial Antiqua',
						'Underdog' => 'Underdog',
						'Unica One' => 'Unica One',
						'UnifrakturCook' => 'UnifrakturCook',
						'UnifrakturMaguntia' => 'UnifrakturMaguntia',
						'Unkempt' => 'Unkempt',
						'Unlock' => 'Unlock',
						'Unna' => 'Unna',
						'VT323' => 'VT323',
						'Vampiro One' => 'Vampiro One',
						'Varela' => 'Varela',
						'Varela Round' => 'Varela Round',
						'Vast Shadow' => 'Vast Shadow',
						'Vesper Libre' => 'Vesper Libre',
						'Vibur' => 'Vibur',
						'Vidaloka' => 'Vidaloka',
						'Viga' => 'Viga',
						'Voces' => 'Voces',
						'Volkhov' => 'Volkhov',
						'Vollkorn' => 'Vollkorn',
						'Voltaire' => 'Voltaire',
						'Waiting for the Sunrise' => 'Waiting for the Sunrise',
						'Wallpoet' => 'Wallpoet',
						'Walter Turncoat' => 'Walter Turncoat',
						'Warnes' => 'Warnes',
						'Wellfleet' => 'Wellfleet',
						'Wendy One' => 'Wendy One',
						'Wire One' => 'Wire One',
						'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
						'Yantramanav' => 'Yantramanav',
						'Yellowtail' => 'Yellowtail',
						'Yeseva One' => 'Yeseva One',
						'Yesteryear' => 'Yesteryear',
						'Zeyada' => 'Zeyada',
					),
					'title' => 'Select Button Font',
					'default' => 'PT Sans',
				),
				array (
					'desc' => 'Adjust the settings below to load different character sets and types for fonts. More character sets and types equals to slower page load. Please read <a href=\'http://oxosolutions.com/?p=275938\'>How to configure google web fonts settings</a> for more info.',
					'id' => 'gfont_settings',
					'type' => 'text',
					'title' => 'Google Font Settings',
					'default' => '400,400italic,700,700italic&subset=latin',
				),
				array (
					'id' => 'google_fonts_intro',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Google Fonts',
					'default' => '<h3 style=\'margin: 0;\'>Google Fonts</h3><p style=\'margin-bottom:0;\'>This will override standard font options.</p>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(18) "google_fonts_intro"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(12) "Google Fonts"
		["default"]=>
		string(113) "<h3 style=\'margin: 0;\'>Google Fonts</h3><p style=\'margin-bottom:0;\'>This will override standard font options.</p>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'standard_fonts_intro',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Standard Fonts',
					'default' => '<h3 style=\'margin: 0;\'>Standard Fonts</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(20) "standard_fonts_intro"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(14) "Standard Fonts"
		["default"]=>
		string(42) "<h3 style=\'margin: 0;\'>Standard Fonts</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Select a font family for body text',
					'id' => 'standard_body',
					'type' => 'select',
					'options' => array (
						0 => 'Select Font',
						'Arial, Helvetica, sans-serif' => 'Arial, Helvetica, sans-serif',
						'\'Arial Black\', Gadget, sans-serif' => '\'Arial Black\', Gadget, sans-serif',
						'\'Bookman Old Style\', serif' => '\'Bookman Old Style\', serif',
						'\'Comic Sans MS\', cursive' => '\'Comic Sans MS\', cursive',
						'Courier, monospace' => 'Courier, monospace',
						'Garamond, serif' => 'Garamond, serif',
						'Georgia, serif' => 'Georgia, serif',
						'Impact, Charcoal, sans-serif' => 'Impact, Charcoal, sans-serif',
						'\'Lucida Console\', Monaco, monospace' => '\'Lucida Console\', Monaco, monospace',
						'\'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif' => '\'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif',
						'\'MS Sans Serif\', Geneva, sans-serif' => '\'MS Sans Serif\', Geneva, sans-serif',
						'\'MS Serif\', \'New York\', sans-serif' => '\'MS Serif\', \'New York\', sans-serif',
						'\'Palatino Linotype\', \'Book Antiqua\', Palatino, serif' => '\'Palatino Linotype\', \'Book Antiqua\', Palatino, serif',
						'Tahoma, Geneva, sans-serif' => 'Tahoma, Geneva, sans-serif',
						'\'Times New Roman\', Times, serif' => '\'Times New Roman\', Times, serif',
						'\'Trebuchet MS\', Helvetica, sans-serif' => '\'Trebuchet MS\', Helvetica, sans-serif',
						'Verdana, Geneva, sans-serif' => 'Verdana, Geneva, sans-serif',
					),
					'title' => 'Select Body Font Family',
				),
				array (
					'desc' => 'Select a font family for menu / navigation',
					'id' => 'standard_nav',
					'type' => 'select',
					'options' => array (
						0 => 'Select Font',
						'Arial, Helvetica, sans-serif' => 'Arial, Helvetica, sans-serif',
						'\'Arial Black\', Gadget, sans-serif' => '\'Arial Black\', Gadget, sans-serif',
						'\'Bookman Old Style\', serif' => '\'Bookman Old Style\', serif',
						'\'Comic Sans MS\', cursive' => '\'Comic Sans MS\', cursive',
						'Courier, monospace' => 'Courier, monospace',
						'Garamond, serif' => 'Garamond, serif',
						'Georgia, serif' => 'Georgia, serif',
						'Impact, Charcoal, sans-serif' => 'Impact, Charcoal, sans-serif',
						'\'Lucida Console\', Monaco, monospace' => '\'Lucida Console\', Monaco, monospace',
						'\'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif' => '\'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif',
						'\'MS Sans Serif\', Geneva, sans-serif' => '\'MS Sans Serif\', Geneva, sans-serif',
						'\'MS Serif\', \'New York\', sans-serif' => '\'MS Serif\', \'New York\', sans-serif',
						'\'Palatino Linotype\', \'Book Antiqua\', Palatino, serif' => '\'Palatino Linotype\', \'Book Antiqua\', Palatino, serif',
						'Tahoma, Geneva, sans-serif' => 'Tahoma, Geneva, sans-serif',
						'\'Times New Roman\', Times, serif' => '\'Times New Roman\', Times, serif',
						'\'Trebuchet MS\', Helvetica, sans-serif' => '\'Trebuchet MS\', Helvetica, sans-serif',
						'Verdana, Geneva, sans-serif' => 'Verdana, Geneva, sans-serif',
					),
					'title' => 'Select Menu Font Family',
				),
				array (
					'desc' => 'Select a font family for headings',
					'id' => 'standard_headings',
					'type' => 'select',
					'options' => array (
						0 => 'Select Font',
						'Arial, Helvetica, sans-serif' => 'Arial, Helvetica, sans-serif',
						'\'Arial Black\', Gadget, sans-serif' => '\'Arial Black\', Gadget, sans-serif',
						'\'Bookman Old Style\', serif' => '\'Bookman Old Style\', serif',
						'\'Comic Sans MS\', cursive' => '\'Comic Sans MS\', cursive',
						'Courier, monospace' => 'Courier, monospace',
						'Garamond, serif' => 'Garamond, serif',
						'Georgia, serif' => 'Georgia, serif',
						'Impact, Charcoal, sans-serif' => 'Impact, Charcoal, sans-serif',
						'\'Lucida Console\', Monaco, monospace' => '\'Lucida Console\', Monaco, monospace',
						'\'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif' => '\'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif',
						'\'MS Sans Serif\', Geneva, sans-serif' => '\'MS Sans Serif\', Geneva, sans-serif',
						'\'MS Serif\', \'New York\', sans-serif' => '\'MS Serif\', \'New York\', sans-serif',
						'\'Palatino Linotype\', \'Book Antiqua\', Palatino, serif' => '\'Palatino Linotype\', \'Book Antiqua\', Palatino, serif',
						'Tahoma, Geneva, sans-serif' => 'Tahoma, Geneva, sans-serif',
						'\'Times New Roman\', Times, serif' => '\'Times New Roman\', Times, serif',
						'\'Trebuchet MS\', Helvetica, sans-serif' => '\'Trebuchet MS\', Helvetica, sans-serif',
						'Verdana, Geneva, sans-serif' => 'Verdana, Geneva, sans-serif',
					),
					'title' => 'Select Headings Font Family',
				),
				array (
					'desc' => 'Select a font family for footer headings',
					'id' => 'standard_footer_headings',
					'type' => 'select',
					'options' => array (
						0 => 'Select Font',
						'Arial, Helvetica, sans-serif' => 'Arial, Helvetica, sans-serif',
						'\'Arial Black\', Gadget, sans-serif' => '\'Arial Black\', Gadget, sans-serif',
						'\'Bookman Old Style\', serif' => '\'Bookman Old Style\', serif',
						'\'Comic Sans MS\', cursive' => '\'Comic Sans MS\', cursive',
						'Courier, monospace' => 'Courier, monospace',
						'Garamond, serif' => 'Garamond, serif',
						'Georgia, serif' => 'Georgia, serif',
						'Impact, Charcoal, sans-serif' => 'Impact, Charcoal, sans-serif',
						'\'Lucida Console\', Monaco, monospace' => '\'Lucida Console\', Monaco, monospace',
						'\'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif' => '\'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif',
						'\'MS Sans Serif\', Geneva, sans-serif' => '\'MS Sans Serif\', Geneva, sans-serif',
						'\'MS Serif\', \'New York\', sans-serif' => '\'MS Serif\', \'New York\', sans-serif',
						'\'Palatino Linotype\', \'Book Antiqua\', Palatino, serif' => '\'Palatino Linotype\', \'Book Antiqua\', Palatino, serif',
						'Tahoma, Geneva, sans-serif' => 'Tahoma, Geneva, sans-serif',
						'\'Times New Roman\', Times, serif' => '\'Times New Roman\', Times, serif',
						'\'Trebuchet MS\', Helvetica, sans-serif' => '\'Trebuchet MS\', Helvetica, sans-serif',
						'Verdana, Geneva, sans-serif' => 'Verdana, Geneva, sans-serif',
					),
					'title' => 'Select Footer Headings Font Family',
				),
				array (
					'desc' => 'Select a font family for button',
					'id' => 'standard_button',
					'type' => 'select',
					'options' => array (
						0 => 'Select Font',
						'Arial, Helvetica, sans-serif' => 'Arial, Helvetica, sans-serif',
						'\'Arial Black\', Gadget, sans-serif' => '\'Arial Black\', Gadget, sans-serif',
						'\'Bookman Old Style\', serif' => '\'Bookman Old Style\', serif',
						'\'Comic Sans MS\', cursive' => '\'Comic Sans MS\', cursive',
						'Courier, monospace' => 'Courier, monospace',
						'Garamond, serif' => 'Garamond, serif',
						'Georgia, serif' => 'Georgia, serif',
						'Impact, Charcoal, sans-serif' => 'Impact, Charcoal, sans-serif',
						'\'Lucida Console\', Monaco, monospace' => '\'Lucida Console\', Monaco, monospace',
						'\'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif' => '\'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif',
						'\'MS Sans Serif\', Geneva, sans-serif' => '\'MS Sans Serif\', Geneva, sans-serif',
						'\'MS Serif\', \'New York\', sans-serif' => '\'MS Serif\', \'New York\', sans-serif',
						'\'Palatino Linotype\', \'Book Antiqua\', Palatino, serif' => '\'Palatino Linotype\', \'Book Antiqua\', Palatino, serif',
						'Tahoma, Geneva, sans-serif' => 'Tahoma, Geneva, sans-serif',
						'\'Times New Roman\', Times, serif' => '\'Times New Roman\', Times, serif',
						'\'Trebuchet MS\', Helvetica, sans-serif' => '\'Trebuchet MS\', Helvetica, sans-serif',
						'Verdana, Geneva, sans-serif' => 'Verdana, Geneva, sans-serif',
					),
					'title' => 'Select Button Font Family',
				),
				array (
					'id' => 'standard_fonts_intro',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Standard Fonts',
					'default' => '<h3 style=\'margin: 0;\'>Standard Fonts</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(20) "standard_fonts_intro"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(14) "Standard Fonts"
		["default"]=>
		string(42) "<h3 style=\'margin: 0;\'>Standard Fonts</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'font_size_intro',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Font Sizes',
					'default' => '<h3 style=\'margin: 0;\'>Font Sizes</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(15) "font_size_intro"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(10) "Font Sizes"
		["default"]=>
		string(38) "<h3 style=\'margin: 0;\'>Font Sizes</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'In pixels, default is 13',
					'id' => 'body_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Body Font Size',
					'default' => '13',
				),
				array (
					'desc' => 'In pixels, default is 14',
					'id' => 'nav_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Main Menu Font Size',
					'default' => '14',
				),
				array (
					'desc' => 'In pixels, default is 13',
					'id' => 'nav_dropdown_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Main Menu Dropdown Font Size',
					'default' => '13',
				),
				array (
					'desc' => 'In pixels, default is 12',
					'id' => 'snav_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Secondary Menu & Top Contact Info Font Size',
					'default' => '12',
				),
				array (
					'desc' => 'In pixels, default is 14',
					'id' => 'side_nav_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Side Menu Font Size',
					'default' => '14',
				),
				array (
					'desc' => 'In pixels, default is 12',
					'id' => 'mobile_menu_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Mobile Menu Font Size',
					'default' => '12',
				),
				array (
					'desc' => 'In pixels, default is 10',
					'id' => 'breadcrumbs_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Breadcrumbs Font Size',
					'default' => '10',
				),
				array (
					'desc' => 'In pixels, default is 13',
					'id' => 'sidew_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Sidebar Widget Heading Font Size',
					'default' => '13',
				),
				array (
					'desc' => 'In pixels, default is 13',
					'id' => 'slidingbar_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Sliding Bar Widget Heading Font Size',
					'default' => '13',
				),
				array (
					'desc' => 'In pixels, default is 13',
					'id' => 'footw_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Footer Widget Heading Font Size',
					'default' => '13',
				),
				array (
					'desc' => 'In pixels, default is 12',
					'id' => 'copyright_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Copyright Font Size',
					'default' => '12',
				),
				array (
					'desc' => 'In pixels, default is 34',
					'id' => 'h1_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Heading Font Size H1',
					'default' => '34',
				),
				array (
					'desc' => 'In pixels, default is 18',
					'id' => 'h2_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Heading Font Size H2',
					'default' => '18',
				),
				array (
					'desc' => 'In pixels, default is 16',
					'id' => 'h3_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Heading Font Size H3',
					'default' => '16',
				),
				array (
					'desc' => 'In pixels, default is 13',
					'id' => 'h4_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Heading Font Size H4',
					'default' => '13',
				),
				array (
					'desc' => 'In pixels, default is 12',
					'id' => 'h5_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Heading Font Size H5',
					'default' => '12',
				),
				array (
					'desc' => 'In pixels, default is 11',
					'id' => 'h6_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Heading Font Size H6',
					'default' => '11',
				),
				array (
					'desc' => 'Controls the font size of all post titles. In pixels, default is 18',
					'id' => 'post_titles_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Post Titles Font Size',
					'default' => '18',
				),
				array (
					'desc' => 'Controls Comment, Related Posts and Author Titles. H3 heading. In pixels, default is 18',
					'id' => 'post_titles_extras_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Post Titles Extras Font Size',
					'default' => '18',
				),
				array (
					'desc' => 'In pixels, default is 16',
					'id' => 'tagline_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Header Tagline Font Size',
					'default' => '16',
				),
				array (
					'desc' => 'In pixels, default is 12',
					'id' => 'meta_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Meta Data Font Size',
					'default' => '12',
				),
				array (
					'desc' => 'In pixels, default is 18',
					'id' => 'page_title_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Page Title Font Size',
					'default' => '18',
				),
				array (
					'desc' => 'In pixels, default is 14',
					'id' => 'page_title_subheader_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Page Title Subheader Font Size',
					'default' => '14',
				),
				array (
					'desc' => 'In pixels, default is 12',
					'id' => 'pagination_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Pagination Font Size',
					'default' => '12',
				),
				array (
					'desc' => 'In pixels, default is 12',
					'id' => 'woo_icon_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'WooCommerce Icon Font Size',
					'default' => '12',
				),
				array (
					'id' => 'font_size_intro',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Font Size',
					'default' => '<h3 style=\'margin: 0;\'>Font Sizes</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(15) "font_size_intro"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(9) "Font Size"
		["default"]=>
		string(38) "<h3 style=\'margin: 0;\'>Font Sizes</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'font_line_heights_wrapper',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Font Line Heights',
					'default' => '<h3 style=\'margin: 0;\'>Font Line Heights</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(25) "font_line_heights_wrapper"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(17) "Font Line Heights"
		["default"]=>
		string(45) "<h3 style=\'margin: 0;\'>Font Line Heights</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'In pixels, default is 20',
					'id' => 'body_font_lh',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Body Font Line Height',
					'default' => '20',
				),
				array (
					'desc' => 'In pixels, default is 48',
					'id' => 'h1_font_lh',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Heading Font Line Height H1',
					'default' => '48',
				),
				array (
					'desc' => 'In pixels, default is 27',
					'id' => 'h2_font_lh',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Heading Font Line Height H2',
					'default' => '27',
				),
				array (
					'desc' => 'In pixels, default is 24',
					'id' => 'h3_font_lh',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Heading Font Line Height H3',
					'default' => '24',
				),
				array (
					'desc' => 'In pixels, default is 20',
					'id' => 'h4_font_lh',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Heading Font Line Height H4',
					'default' => '20',
				),
				array (
					'desc' => 'In pixels, default is 18',
					'id' => 'h5_font_lh',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Heading Font Line Height H5',
					'default' => '18',
				),
				array (
					'desc' => 'In pixels, default is 17',
					'id' => 'h6_font_lh',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Heading Font Line Height H6',
					'default' => '17',
				),
				array (
					'desc' => 'H2 Heading. In pixels, default is 27',
					'id' => 'post_titles_font_lh',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Post Titles Line Height H2',
					'default' => '27',
				),
				array (
					'desc' => 'In pixels, default is 44',
					'id' => 'sec_menu_lh',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Secondary Menu Line Height',
					'default' => '44',
				),
				array (
					'id' => 'font_line_heights_wrapper',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Font Line Heights',
					'default' => '<h3 style=\'margin: 0;\'>Font Line Heights</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(25) "font_line_heights_wrapper"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(17) "Font Line Heights"
		["default"]=>
		string(45) "<h3 style=\'margin: 0;\'>Font Line Heights</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'font_weights_wrapper',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Font Weights',
					'default' => '<h3 style=\'margin: 0;\'>Font Weights</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(20) "font_weights_wrapper"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(12) "Font Weights"
		["default"]=>
		string(40) "<h3 style=\'margin: 0;\'>Font Weights</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'font_weights_description',
					'icon' => true,
					'type' => 'info',
					'raw' => '<ul class=\'list\'><li>If you use a custom font, the font weight will correspond to the font weight of the uploaded files, thus these settings do not apply.</li><li>If you use a google font, make sure to load the font weight in \'Google Font Settings\' field that corresponds to the one in parenthesis here.</li><li>Browser standard fonts in general support only \'Normal (400)\' and \'Bold (700)\' font weights.</li></ul>',
				),
				array (
					'desc' => 'Select a font weight for the body font. ',
					'id' => 'font_weight_body',
					'type' => 'select',
					'options' => array (
						100 => 'Thin (100)',
						200 => 'Extra Light (200)',
						300 => 'Light (300)',
						400 => 'Normal (400)',
						500 => 'Medium (500)',
						600 => 'Semi Bold (600)',
						700 => 'Bold (700)',
						800 => 'Bolder (800)',
						900 => 'Extra Bold (900)',
					),
					'title' => 'Select Body Font Weight',
					'default' => '400',
				),
				array (
					'desc' => 'Select a font weight of the menu font.',
					'id' => 'font_weight_menu',
					'type' => 'select',
					'options' => array (
						100 => 'Thin (100)',
						200 => 'Extra Light (200)',
						300 => 'Light (300)',
						400 => 'Normal (400)',
						500 => 'Medium (500)',
						600 => 'Semi Bold (600)',
						700 => 'Bold (700)',
						800 => 'Bolder (800)',
						900 => 'Extra Bold (900)',
					),
					'title' => 'Select Menu Font Weight',
					'default' => '400',
				),
				array (
					'desc' => 'Select a font weight for the headings font.',
					'id' => 'font_weight_headings',
					'type' => 'select',
					'options' => array (
						100 => 'Thin (100)',
						200 => 'Extra Light (200)',
						300 => 'Light (300)',
						400 => 'Normal (400)',
						500 => 'Medium (500)',
						600 => 'Semi Bold (600)',
						700 => 'Bold (700)',
						800 => 'Bolder (800)',
						900 => 'Extra Bold (900)',
					),
					'title' => 'Select Headings Font Weight',
					'default' => '400',
				),
				array (
					'desc' => 'Select a font weight for the footer headings font.',
					'id' => 'font_weight_footer_headings',
					'type' => 'select',
					'options' => array (
						100 => 'Thin (100)',
						200 => 'Extra Light (200)',
						300 => 'Light (300)',
						400 => 'Normal (400)',
						500 => 'Medium (500)',
						600 => 'Semi Bold (600)',
						700 => 'Bold (700)',
						800 => 'Bolder (800)',
						900 => 'Extra Bold (900)',
					),
					'title' => 'Select Footer Headings Font Weight',
					'default' => '400',
				),
				array (
					'desc' => 'Select a font weight for the button font.',
					'id' => 'font_weight_button',
					'type' => 'select',
					'options' => array (
						100 => 'Thin (100)',
						200 => 'Extra Light (200)',
						300 => 'Light (300)',
						400 => 'Normal (400)',
						500 => 'Medium (500)',
						600 => 'Semi Bold (600)',
						700 => 'Bold (700)',
						800 => 'Bolder (800)',
						900 => 'Extra Bold (900)',
					),
					'title' => 'Select Button Font Weight',
					'default' => '700',
				),
				array (
					'id' => 'font_weights_wrapper',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Font Weights',
					'default' => '<h3 style=\'margin: 0;\'>Font Weights</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(20) "font_weights_wrapper"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(12) "Font Weights"
		["default"]=>
		string(40) "<h3 style=\'margin: 0;\'>Font Weights</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'font_letter_spacing_wrapper',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Font Letter Spacing',
					'default' => '<h3 style=\'margin: 0;\'>Font Letter Spacing</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(27) "font_letter_spacing_wrapper"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(19) "Font Letter Spacing"
		["default"]=>
		string(47) "<h3 style=\'margin: 0;\'>Font Letter Spacing</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the letter spacing of h1 headings. In pixels, ex: 2',
					'id' => 'h1_font_ls',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Heading H1 Letter Spacing',
				),
				array (
					'desc' => 'Controls the letter spacing of h2 headings. In pixels, ex: 2',
					'id' => 'h2_font_ls',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Heading H2 Letter Spacing',
				),
				array (
					'desc' => 'Controls the letter spacing of h3 headings. In pixels, ex: 2',
					'id' => 'h3_font_ls',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Heading H3 Letter Spacing',
				),
				array (
					'desc' => 'Controls the letter spacing of h4 headings. In pixels, ex: 2',
					'id' => 'h4_font_ls',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Heading H4 Letter Spacing',
				),
				array (
					'desc' => 'Controls the letter spacing of h5 headings. In pixels, ex: 2',
					'id' => 'h5_font_ls',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Heading H5 Letter Spacing',
				),
				array (
					'desc' => 'Controls the letter spacing of h6 headings. In pixels, ex: 2',
					'id' => 'h6_font_ls',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Heading H6 Letter Spacing',
				),
				array (
					'desc' => 'Controls the letter spacing of menu text. In pixels, ex: 2',
					'id' => 'menu_font_ls',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Menu Letter Spacing',
				),
				array (
					'desc' => 'Controls the letter spacing of button text. In pixels, ex: 2',
					'id' => 'button_font_ls',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Button Letter Spacing',
				),
				array (
					'id' => 'font_letter_spacing_wrapper',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Font Letter Spacing',
					'default' => '<h3 style=\'margin: 0;\'>Font Letter Spacing</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(27) "font_letter_spacing_wrapper"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(19) "Font Letter Spacing"
		["default"]=>
		string(47) "<h3 style=\'margin: 0;\'>Font Letter Spacing</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'font_margins_wrapper',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Font Margins',
					'default' => '<h3 style=\'margin: 0;\'>Font Margins</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(20) "font_margins_wrapper"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(12) "Font Margins"
		["default"]=>
		string(40) "<h3 style=\'margin: 0;\'>Font Margins</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'In ems, default is 0.67',
					'id' => 'h1_top_margin',
					'type' => 'text',
					'title' => 'H1 Top Margin',
					'default' => '0.67',
				),
				array (
					'desc' => 'In ems, default is 0.67',
					'id' => 'h1_bottom_margin',
					'type' => 'text',
					'title' => 'H1 Bottom Margin',
					'default' => '0.67',
				),
				array (
					'desc' => 'In ems, default is 0',
					'id' => 'h2_top_margin',
					'type' => 'text',
					'title' => 'H2 Top Margin',
				),
				array (
					'desc' => 'In ems, default is 1.1',
					'id' => 'h2_bottom_margin',
					'type' => 'text',
					'title' => 'H2 Bottom Margin',
					'default' => '1.1',
				),
				array (
					'desc' => 'In ems, default is 1',
					'id' => 'h3_top_margin',
					'type' => 'text',
					'title' => 'H3 Top Margin',
					'default' => '1',
				),
				array (
					'desc' => 'In ems, default is 1',
					'id' => 'h3_bottom_margin',
					'type' => 'text',
					'title' => 'H3 Bottom Margin',
					'default' => '1',
				),
				array (
					'desc' => 'In ems, default is 1.33',
					'id' => 'h4_top_margin',
					'type' => 'text',
					'title' => 'H4 Top Margin',
					'default' => '1.33',
				),
				array (
					'desc' => 'In ems, default is 1.33',
					'id' => 'h4_bottom_margin',
					'type' => 'text',
					'title' => 'H4 Bottom Margin',
					'default' => '1.33',
				),
				array (
					'desc' => 'In ems, default is 1.67',
					'id' => 'h5_top_margin',
					'type' => 'text',
					'title' => 'H5 Top Margin',
					'default' => '1.67',
				),
				array (
					'desc' => 'In ems, default is 1.67',
					'id' => 'h5_bottom_margin',
					'type' => 'text',
					'title' => 'H5 Bottom Margin',
					'default' => '1.67',
				),
				array (
					'desc' => 'In ems, default is 2.33',
					'id' => 'h6_top_margin',
					'type' => 'text',
					'title' => 'H6 Top Margin',
					'default' => '2.33',
				),
				array (
					'desc' => 'In ems, default is 2.33',
					'id' => 'h6_bottom_margin',
					'type' => 'text',
					'title' => 'H6 Bottom Margin',
					'default' => '2.33',
				),
				array (
					'id' => 'font_margins_wrapper',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Font Margins',
					'default' => '<h3 style=\'margin: 0;\'>Font Margins</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(20) "font_margins_wrapper"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(12) "Font Margins"
		["default"]=>
		string(40) "<h3 style=\'margin: 0;\'>Font Margins</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_styling',
			'title' => 'Styling',
			'fields' => array (
				array (
					'desc' => 'Select a skin, all color options will automatically change to the defined skin.',
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
					'desc' => 'Select a scheme, all color options will automatically change to the defined scheme.',
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
					'id' => 'bg_colors_wrapper',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Background Colors',
					'default' => '<h3 style=\'margin: 0;\'>Background Colors</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(17) "bg_colors_wrapper"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(17) "Background Colors"
		["default"]=>
		string(45) "<h3 style=\'margin: 0;\'>Background Colors</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls several items, ex: link hovers, highlights, and more.',
					'id' => 'primary_color',
					'type' => 'color',
					'title' => 'Primary Color',
					'default' => '#a0ce4e',
				),
				array (
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["desc"]=>
		string(127) "Controls the background color and opacity of the top sliding bar. Opacity ranges between 0 (transparent) and 1 (opaque). ex: .4"
		["id"]=>
		string(19) "slidingbar_bg_color"
		["type"]=>
		string(15) "backgroundcolor"
		["title"]=>
		string(40) "Sliding Bar Background Color and Opacity"
		["default"]=>array(2) {
			["color"]=>
			string(7) "#363839"
			["opacity"]=>
			string(1) "1"
		}
	}
	</pre>',
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
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["desc"]=>
		string(159) "Controls the background color and opacity for the header. Opacity only works with header top position and ranges between 0 (transparent) and 1 (opaque). ex: .4"
		["id"]=>
		string(15) "header_bg_color"
		["type"]=>
		string(15) "backgroundcolor"
		["title"]=>
		string(35) "Header Background Color and Opacity"
		["default"]=>array(2) {
			["color"]=>
			string(7) "#ffffff"
			["opacity"]=>
			string(1) "1"
		}
	}
	</pre>',
					'id' => 'header_bg_color',
					'type' => 'info',
					'title' => 'Header Background Color and Opacity',
					'default' => array (
						'color' => '#ffffff',
						'opacity' => '1',
					),
					'raw_html' => true,
				),
				array (
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["desc"]=>
		string(114) "Controls the background color for the sticky header. Opacity ranges between 0 (transparent) and 1 (opaque). ex: .4"
		["id"]=>
		string(22) "header_sticky_bg_color"
		["type"]=>
		string(15) "backgroundcolor"
		["title"]=>
		string(42) "Sticky Header Background Color and Opacity"
		["default"]=>array(2) {
			["color"]=>
			string(7) "#ffffff"
			["opacity"]=>
			string(4) "0.97"
		}
	}
	</pre>',
					'id' => 'header_sticky_bg_color',
					'type' => 'info',
					'title' => 'Sticky Header Background Color and Opacity',
					'default' => array (
						'color' => '#ffffff',
						'opacity' => '0.97',
					),
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the border colors for the header. If using left or right header position it controls the menu divider lines.',
					'id' => 'header_border_color',
					'type' => 'color',
					'title' => 'Header Border Color',
					'default' => '#e5e5e5',
				),
				array (
					'desc' => 'Controls the background color of the top header section used in Headers 2-5.',
					'id' => 'header_top_bg_color',
					'type' => 'color',
					'title' => 'Header Top Background Color',
					'default' => '#a0ce4e',
				),
				array (
					'desc' => 'Select a color for the page title bar background.',
					'id' => 'page_title_bg_color',
					'type' => 'color',
					'title' => 'Page Title Bar Background Color',
					'default' => '#F6F6F6',
				),
				array (
					'desc' => 'Select a color for the page title bar borders.',
					'id' => 'page_title_border_color',
					'type' => 'color',
					'title' => 'Page Title Bar Borders Color',
					'default' => '#d2d3d4',
				),
				array (
					'desc' => 'Controls the background color of the main content area.',
					'id' => 'content_bg_color',
					'type' => 'color',
					'title' => 'Content Background Color',
					'default' => '#ffffff',
				),
				array (
					'desc' => 'Controls the background color of the sidebar.',
					'id' => 'sidebar_bg_color',
					'type' => 'color',
					'title' => 'Sidebar Background Color',
					'default' => 'transparent',
				),
				array (
					'desc' => 'Controls the background color of the sidebar widget title.',
					'id' => 'sidebar_widget_bg_color',
					'type' => 'color',
					'title' => 'Sidebar Widget Title Background Color',
					'default' => 'transparent',
				),
				array (
					'desc' => 'Controls the background color of the footer.',
					'id' => 'footer_bg_color',
					'type' => 'color',
					'title' => 'Footer Background Color',
					'default' => '#363839',
				),
				array (
					'desc' => 'Controls the border colors for the footer.',
					'id' => 'footer_border_color',
					'type' => 'color',
					'title' => 'Footer Border Color',
					'default' => '#e9eaee',
				),
				array (
					'desc' => 'Controls the background color of the footer copyright.',
					'id' => 'copyright_bg_color',
					'type' => 'color',
					'title' => 'Copyright Background Color',
					'default' => '#282a2b',
				),
				array (
					'desc' => 'Controls the border colors for the footer copyright.',
					'id' => 'copyright_border_color',
					'type' => 'color',
					'title' => 'Copyright Border Color',
					'default' => '#4b4c4d',
				),
				array (
					'id' => 'bg_colors_wrapper',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Background Colors',
					'default' => '<h3 style=\'margin: 0;\'>Background Colors</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(17) "bg_colors_wrapper"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(17) "Background Colors"
		["default"]=>
		string(45) "<h3 style=\'margin: 0;\'>Background Colors</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'element_colors_wrapper',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Element Colors',
					'default' => '<h3 style=\'margin: 0;\'>Element Colors</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(22) "element_colors_wrapper"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(14) "Element Colors"
		["default"]=>
		string(42) "<h3 style=\'margin: 0;\'>Element Colors</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["desc"]=>
		string(117) "Controls the top color of the image rollover gradients. Opacity ranges between 0 (transparent) and 1 (opaque). ex: .4"
		["id"]=>
		string(24) "image_gradient_top_color"
		["type"]=>
		string(15) "backgroundcolor"
		["title"]=>
		string(45) "Rollover Image Gradient Top Color and Opacity"
		["default"]=>array(2) {
			["color"]=>
			string(7) "#a0ce4e"
			["opacity"]=>
			string(3) "0.8"
		}
	}
	</pre>',
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
					'desc' => 'Controls the bottom color of the image rollover gradients.',
					'id' => 'image_gradient_bottom_color',
					'type' => 'color',
					'title' => 'Rollover Image Gradient Bottom Color',
					'default' => '#a0ce4e',
				),
				array (
					'desc' => 'This option controls the color of image rollover text and the icon circle backgrounds.',
					'id' => 'image_rollover_text_color',
					'type' => 'color',
					'title' => 'Rollover Image Element Color',
					'default' => '#333333',
				),
				array (
					'desc' => 'Controls the color of the icons in the rollover.',
					'id' => 'image_rollover_icon_color',
					'type' => 'color',
					'title' => 'Rollover Image Icon Color',
					'default' => '#ffffff',
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
					'desc' => 'Controls the divider color in the footer.',
					'id' => 'footer_divider_color',
					'type' => 'color',
					'title' => 'Footer Widget Divider Color',
					'default' => '#505152',
				),
				array (
					'desc' => 'Controls the background color of form fields.',
					'id' => 'form_bg_color',
					'type' => 'color',
					'title' => 'Form Background Color',
					'default' => '#ffffff',
				),
				array (
					'desc' => 'Controls the text color for forms.',
					'id' => 'form_text_color',
					'type' => 'color',
					'title' => 'Form Text Color',
					'default' => '#aaa9a9',
				),
				array (
					'desc' => 'Controls the border color of form fields.',
					'id' => 'form_border_color',
					'type' => 'color',
					'title' => 'Form Border Color',
					'default' => '#d2d2d2',
				),
				array (
					'desc' => 'Controls blog grid, timeline, portfolio boxed items and Woocommerce post box background color.',
					'id' => 'timeline_bg_color',
					'type' => 'color',
					'title' => 'Grid Box Color',
					'default' => 'transparent',
				),
				array (
					'desc' => 'Controls blog grid, timeline, portfolio boxed items, Woocommerce post box border, divider lines, date box and border, timeline dots, timeline icon, timeline arrow.',
					'id' => 'timeline_color',
					'type' => 'color',
					'title' => 'Grid Element Color',
					'default' => '#ebeaea',
				),
				array (
					'desc' => 'Controls the background color of the load more button for ajax post loading.',
					'id' => 'load_more_posts_button_bg_color',
					'type' => 'color',
					'title' => 'Load More Posts Button Color',
					'default' => '#ebeaea',
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
					'id' => 'element_colors_wrapper',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Element Colors',
					'default' => '<h3 style=\'margin: 0;\'>Element Colors</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(22) "element_colors_wrapper"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(14) "Element Colors"
		["default"]=>
		string(42) "<h3 style=\'margin: 0;\'>Element Colors</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'element_options_wrapper',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Layout Options',
					'default' => '<h3 style=\'margin: 0;\'>Layout Options</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(23) "element_options_wrapper"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(14) "Layout Options"
		["default"]=>
		string(42) "<h3 style=\'margin: 0;\'>Layout Options</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'In pixels or percentage, ex: 10px or 10%.',
					'id' => 'main_top_padding',
					'type' => 'text',
					'title' => 'Page Content Top Padding',
					'default' => '55px',
				),
				array (
					'desc' => 'In pixels or percentage, ex: 10px or 10%.',
					'id' => 'main_bottom_padding',
					'type' => 'text',
					'title' => 'Page Content Bottom Padding',
					'default' => '40px',
				),
				array (
					'desc' => 'This option controls the left/right padding for page content when using 100% site width or 100% width page template.	In pixels or percentage, ex: 10px or 10%.',
					'id' => 'hundredp_padding',
					'type' => 'text',
					'title' => '100% Width Left/Right Padding',
					'default' => '30px',
				),
				array (
					'desc' => 'Enter a pixel or percentage based value, ex: 5px or 5%',
					'id' => 'sidebar_padding',
					'type' => 'text',
					'title' => 'Sidebar Padding',
				),
				array (
					'desc' => 'Controls the top margin for all column sizes. In pixels or percentage, ex: 10px or 10%.',
					'id' => 'col_top_margin',
					'type' => 'text',
					'title' => 'Column Top Margin',
					'default' => '0px',
				),
				array (
					'desc' => 'Controls the bottom margin for all column sizes. In pixels or percentage, ex: 10px or 10%.',
					'id' => 'col_bottom_margin',
					'type' => 'text',
					'title' => 'Column Bottom Margin',
					'default' => '20px',
				),
				array (
					'desc' => 'Check to disable the text shadow in the Sliding Bar.',
					'id' => 'slidingbar_text_shadow',
					'type' => 'checkbox',
					'title' => 'Disable Sliding Bar Text Shadow',
					'default' => 1,
				),
				array (
					'desc' => 'Check to disable the text shadow on rollovers.',
					'id' => 'rollover_text_shadow',
					'type' => 'checkbox',
					'title' => 'Disable Rollover Text Shadow',
					'default' => 1,
				),
				array (
					'desc' => 'Check to disable the text shadow in the footer.',
					'id' => 'footer_text_shadow',
					'type' => 'checkbox',
					'title' => 'Disable Footer Text Shadow',
					'default' => 1,
				),
				array (
					'id' => 'element_options_wrapper',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Layout Options',
					'default' => '<h3 style=\'margin: 0;\'>Layout Options</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(23) "element_options_wrapper"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(14) "Layout Options"
		["default"]=>
		string(42) "<h3 style=\'margin: 0;\'>Layout Options</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'font_colors_wrapper',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Font Colors',
					'default' => '<h3 style=\'margin: 0;\'>Font Colors</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(19) "font_colors_wrapper"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(11) "Font Colors"
		["default"]=>
		string(39) "<h3 style=\'margin: 0;\'>Font Colors</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the text color of the header tagline font.',
					'id' => 'tagline_font_color',
					'type' => 'color',
					'title' => 'Header Tagline Font Color',
					'default' => '#747474',
				),
				array (
					'desc' => 'Controls the text color of the page title font.',
					'id' => 'page_title_color',
					'type' => 'color',
					'title' => 'Page Title Font Color',
					'default' => '#333333',
				),
				array (
					'desc' => 'Controls the text color of H1 headings.',
					'id' => 'h1_color',
					'type' => 'color',
					'title' => 'Heading 1 (H1) Font Color',
					'default' => '#333333',
				),
				array (
					'desc' => 'Controls the text color of H2 headings.',
					'id' => 'h2_color',
					'type' => 'color',
					'title' => 'Heading 2 (H2) Font Color',
					'default' => '#333333',
				),
				array (
					'desc' => 'Controls the text color of H3 headings.',
					'id' => 'h3_color',
					'type' => 'color',
					'title' => 'Heading 3 (H3) Font Color',
					'default' => '#333333',
				),
				array (
					'desc' => 'Controls the text color of H4 headings.',
					'id' => 'h4_color',
					'type' => 'color',
					'title' => 'Heading 4 (H4) Font Color',
					'default' => '#333333',
				),
				array (
					'desc' => 'Controls the text color of H5 headings.',
					'id' => 'h5_color',
					'type' => 'color',
					'title' => 'Heading 5 (H5) Font Color',
					'default' => '#333333',
				),
				array (
					'desc' => 'Controls the text color of H6 headings.',
					'id' => 'h6_color',
					'type' => 'color',
					'title' => 'Heading 6 (H6) Font Color',
					'default' => '#333333',
				),
				array (
					'desc' => 'Controls the text color of body font.',
					'id' => 'body_text_color',
					'type' => 'color',
					'title' => 'Body Text Color',
					'default' => '#747474',
				),
				array (
					'desc' => 'Controls the color of all text links as well as the \'>\' in certain areas.',
					'id' => 'link_color',
					'type' => 'color',
					'title' => 'Link Color',
					'default' => '#333333',
				),
				array (
					'desc' => 'Controls the text color of the breadcrumb font.',
					'id' => 'breadcrumbs_text_color',
					'type' => 'color',
					'title' => 'Breadcrumbs Text Color',
					'default' => '#333333',
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
					'desc' => 'Controls the text color of the sidebar widget headings.',
					'id' => 'sidebar_heading_color',
					'type' => 'color',
					'title' => 'Sidebar Widget Headings Color',
					'default' => '#333333',
				),
				array (
					'desc' => 'Controls the text color of the footer heading font.',
					'id' => 'footer_headings_color',
					'type' => 'color',
					'title' => 'Footer Headings Color',
					'default' => '#DDDDDD',
				),
				array (
					'desc' => 'Controls the text color of the footer font.',
					'id' => 'footer_text_color',
					'type' => 'color',
					'title' => 'Footer Font Color',
					'default' => '#8C8989',
				),
				array (
					'desc' => 'Controls the text color of the footer link font.',
					'id' => 'footer_link_color',
					'type' => 'color',
					'title' => 'Footer Link Color',
					'default' => '#BFBFBF',
				),
				array (
					'id' => 'font_colors_wrapper',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Font Colors',
					'default' => '<h3 style=\'margin: 0;\'>Font Colors</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(19) "font_colors_wrapper"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(11) "Font Colors"
		["default"]=>
		string(39) "<h3 style=\'margin: 0;\'>Font Colors</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'main_menu_colors_wrapper',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Main Menu Colors',
					'default' => '<h3 style=\'margin: 0;\'>Main Menu Colors</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(24) "main_menu_colors_wrapper"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(16) "Main Menu Colors"
		["default"]=>
		string(44) "<h3 style=\'margin: 0;\'>Main Menu Colors</h3>"
	}
	</pre>',
					'raw_html' => true,
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
					'desc' => 'Controls the bottom section background color of the woocommerce cart dropdown.',
					'id' => 'woo_cart_bg_color',
					'type' => 'color',
					'title' => 'Woo Cart Menu Background Color',
					'default' => '#fafafa',
				),
				array (
					'id' => 'main_menu_colors_wrapper',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Main Menu Colors',
					'default' => '<h3 style=\'margin: 0;\'>Main Menu Colors</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(24) "main_menu_colors_wrapper"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(16) "Main Menu Colors"
		["default"]=>
		string(44) "<h3 style=\'margin: 0;\'>Main Menu Colors</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'menu_colors_intro',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Secondary Menu Colors',
					'default' => '<h3 style=\'margin: 0;\'>Secondary Menu Colors</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(17) "menu_colors_intro"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(21) "Secondary Menu Colors"
		["default"]=>
		string(49) "<h3 style=\'margin: 0;\'>Secondary Menu Colors</h3>"
	}
	</pre>',
					'raw_html' => true,
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
					'id' => 'menu_colors_intro',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Secondary Menu Colors',
					'default' => '<h3 style=\'margin: 0;\'>Secondary Menu Colors</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(17) "menu_colors_intro"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(21) "Secondary Menu Colors"
		["default"]=>
		string(49) "<h3 style=\'margin: 0;\'>Secondary Menu Colors</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'mobile_menu_colors_wrapper',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Mobile Menu Colors',
					'default' => '<h3 style=\'margin: 0;\'>Mobile Menu Colors</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(26) "mobile_menu_colors_wrapper"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(18) "Mobile Menu Colors"
		["default"]=>
		string(46) "<h3 style=\'margin: 0;\'>Mobile Menu Colors</h3>"
	}
	</pre>',
					'raw_html' => true,
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
				array (
					'id' => 'mobile_menu_colors_wrapper',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Mobile Menu Colors',
					'default' => '<h3 style=\'margin: 0;\'>Mobile Menu Colors</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(26) "mobile_menu_colors_wrapper"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(18) "Mobile Menu Colors"
		["default"]=>
		string(46) "<h3 style=\'margin: 0;\'>Mobile Menu Colors</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_shortcode_styling',
			'title' => 'Shortcodes',
			'fields' => array (
				array (
					'desc' => 'Choose when the animation should start.',
					'id' => 'animation_offset',
					'type' => 'select',
					'options' => array (
						'top-into-view' => 'Top of element hits bottom of viewport',
						'top-mid-of-view' => 'Top of element hits middle of viewport',
						'bottom-in-view' => 'Bottom of element enters viewport',
					),
					'title' => 'Animation Offset',
					'default' => 'top-into-view',
				),
				array (
					'id' => 'blog_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Blog Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Blog Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(14) "blog_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(14) "Blog Shortcode"
		["default"]=>
		string(42) "<h3 style=\'margin: 0;\'>Blog Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the color of the date box in blog alternate and recent posts layouts.',
					'id' => 'dates_box_color',
					'type' => 'color',
					'title' => 'Blog Date Box Color',
					'default' => '#eef0f2',
				),
				array (
					'id' => 'blog_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Blog Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Blog Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(14) "blog_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(14) "Blog Shortcode"
		["default"]=>
		string(42) "<h3 style=\'margin: 0;\'>Blog Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'button_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Button Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Button Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(16) "button_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(16) "Button Shortcode"
		["default"]=>
		string(44) "<h3 style=\'margin: 0;\'>Button Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Select the default button size.',
					'id' => 'button_size',
					'type' => 'select',
					'options' => array (
						'Small' => 'Small',
						'Medium' => 'Medium',
						'Large' => 'Large',
						'XLarge' => 'XLarge',
					),
					'title' => 'Button Size',
					'default' => 'Large',
				),
				array (
					'desc' => 'Choose to have the button span the full width of its container.',
					'id' => 'button_span',
					'type' => 'select',
					'options' => array (
						'yes' => 'Yes',
						'no' => 'No',
					),
					'title' => 'Button Span',
					'default' => 'no',
				),
				array (
					'desc' => 'Select the default shape for buttons.',
					'id' => 'button_shape',
					'type' => 'select',
					'options' => array (
						'Square' => 'Square',
						'Round' => 'Round',
						'Pill' => 'Pill',
					),
					'title' => 'Button Shape',
					'default' => 'Round',
				),
				array (
					'desc' => 'Select the default button type.',
					'id' => 'button_type',
					'type' => 'select',
					'options' => array (
						'Flat' => 'Flat',
						'3d' => '3d',
					),
					'title' => 'Button Type',
					'default' => 'Flat',
				),
				array (
					'desc' => 'Set the top color of the button background.',
					'id' => 'button_gradient_top_color',
					'type' => 'color',
					'title' => 'Button Gradient Top Color',
					'default' => '#a0ce4e',
				),
				array (
					'desc' => 'Set the bottom color of the button background or leave empty for solid color.',
					'id' => 'button_gradient_bottom_color',
					'type' => 'color',
					'title' => 'Button Gradient Bottom Color',
					'default' => '#a0ce4e',
				),
				array (
					'desc' => 'Set the top hover color of the button background.',
					'id' => 'button_gradient_top_color_hover',
					'type' => 'color',
					'title' => 'Button Gradient Top Hover Color',
					'default' => '#96c346',
				),
				array (
					'desc' => 'Set the bottom hover color of the button background or leave empty for solid color. ',
					'id' => 'button_gradient_bottom_color_hover',
					'type' => 'color',
					'title' => 'Button Gradient Bottom Hover Color',
					'default' => '#96c346',
				),
				array (
					'desc' => 'This option controls the color of the button border, divider, text and icon.',
					'id' => 'button_accent_color',
					'type' => 'color',
					'title' => 'Button Accent Color',
					'default' => '#fff',
				),
				array (
					'desc' => 'This option controls the hover color of the button border, divider, text and icon.',
					'id' => 'button_accent_hover_color',
					'type' => 'color',
					'title' => 'Button Accent Hover Color',
					'default' => '#fff',
				),
				array (
					'desc' => 'Controls the default bevel color of the buttons.',
					'id' => 'button_bevel_color',
					'type' => 'color',
					'title' => 'Button Bevel Color (3D Mode only)',
					'default' => '#54770F',
				),
				array (
					'desc' => 'Select the border width for buttons. Enter value in px. ex: 1px',
					'id' => 'button_border_width',
					'type' => 'text',
					'title' => 'Button Border Width',
					'default' => '0px',
				),
				array (
					'id' => 'button_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Button Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Button Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(16) "button_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(16) "Button Shortcode"
		["default"]=>
		string(44) "<h3 style=\'margin: 0;\'>Button Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'carousel_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Carousel Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Carousel Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(18) "carousel_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(18) "Carousel Shortcode"
		["default"]=>
		string(46) "<h3 style=\'margin: 0;\'>Carousel Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the color of the default navigation box for carousel sliders.',
					'id' => 'carousel_nav_color',
					'type' => 'color',
					'title' => 'Carousel Default Nav Box Color',
					'default' => 'rgba(0,0,0,0.6)',
				),
				array (
					'desc' => 'Controls the color of the hover navigation box for carousel sliders.',
					'id' => 'carousel_hover_color',
					'type' => 'color',
					'title' => 'Carousel Hover Nav Box Color',
					'default' => 'rgba(0,0,0,0.7)',
				),
				array (
					'desc' => 'Controls the speed of all carousel elements.	ex: 1000 = 1 second.',
					'id' => 'carousel_speed',
					'type' => 'text',
					'title' => 'Carousel Speed',
					'default' => '2500',
				),
				array (
					'id' => 'carousel_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Carousel Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Carousel Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(18) "carousel_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(18) "Carousel Shortcode"
		["default"]=>
		string(46) "<h3 style=\'margin: 0;\'>Carousel Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'checklist_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Checklist Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Checklist Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(19) "checklist_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(19) "Checklist Shortcode"
		["default"]=>
		string(47) "<h3 style=\'margin: 0;\'>Checklist Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Check the box if you want to use circles on checklists.',
					'id' => 'checklist_circle',
					'type' => 'checkbox',
					'title' => 'Checklist Circle',
					'default' => 1,
				),
				array (
					'desc' => 'Controls the color of the checklist circle.',
					'id' => 'checklist_circle_color',
					'type' => 'color',
					'title' => 'Checklist Circle Color',
					'default' => '#a0ce4e',
				),
				array (
					'desc' => 'Controls the color of the checklist icon.',
					'id' => 'checklist_icons_color',
					'type' => 'color',
					'title' => 'Checklist Icon Color',
					'default' => '#ffffff',
				),
				array (
					'id' => 'checklist_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Checklist Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Checklist Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(19) "checklist_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(19) "Checklist Shortcode"
		["default"]=>
		string(47) "<h3 style=\'margin: 0;\'>Checklist Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'cb_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Content Box Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Content Box Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(12) "cb_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(21) "Content Box Shortcode"
		["default"]=>
		string(49) "<h3 style=\'margin: 0;\'>Content Box Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the color of the background for content boxes. Only use for \'icon-boxed\' style. Leave transparent for other styles.',
					'id' => 'content_box_bg_color',
					'type' => 'color',
					'title' => 'Content Box Background Color',
					'default' => 'transparent',
				),
				array (
					'desc' => 'Controls the size of the title text. In pixels. Default is 18.',
					'id' => 'content_box_title_size',
					'type' => 'text',
					'title' => 'Content Box Title Font Size',
					'default' => '18',
				),
				array (
					'desc' => 'Controls the color of the title font.',
					'id' => 'content_box_title_color',
					'type' => 'color',
					'title' => 'Content Box Title Font Color',
				),
				array (
					'desc' => 'Controls the color of the body font.',
					'id' => 'content_box_body_color',
					'type' => 'color',
					'title' => 'Content Box Body Font Color',
				),
				array (
					'desc' => 'Controls the background behind the icon.',
					'id' => 'content_box_icon_circle',
					'type' => 'select',
					'options' => array (
						'yes' => 'Yes',
						'no' => 'No',
					),
					'title' => 'Content Box Icon Background',
					'default' => 'yes',
				),
				array (
					'desc' => 'Choose the border radius of the icon background. In pixels (px), ex: 1px, or "round".',
					'id' => 'content_box_icon_circle_radius',
					'type' => 'text',
					'title' => 'Content Box Icon Background Radius',
					'default' => 'round',
				),
				array (
					'desc' => 'Controls the color of the content box icon.',
					'id' => 'content_box_icon_color',
					'type' => 'color',
					'title' => 'Content Box Icon Color',
					'default' => '#ffffff',
				),
				array (
					'desc' => 'Controls the background color of the content box icon.',
					'id' => 'content_box_icon_bg_color',
					'type' => 'color',
					'title' => 'Content Box Icon Background Color',
					'default' => '#333333',
				),
				array (
					'desc' => 'Controls the inner border color of the content box icon border.',
					'id' => 'content_box_icon_bg_inner_border_color',
					'type' => 'color',
					'title' => 'Content Box Icon Background Inner Border Color',
					'default' => '#333333',
				),
				array (
					'desc' => 'Controls the inner border size of the content box icon border.',
					'id' => 'content_box_icon_bg_inner_border_size',
					'type' => 'text',
					'title' => 'Content Box Icon Background Inner Border Size',
					'default' => '1px',
				),
				array (
					'desc' => 'Controls the outer boreder color of the content box icon border.',
					'id' => 'content_box_icon_bg_outer_border_color',
					'type' => 'color',
					'title' => 'Content Box Icon Background Outer Border Color',
				),
				array (
					'desc' => 'Controls the outer border size of the content box icon border.',
					'id' => 'content_box_icon_bg_outer_border_size',
					'type' => 'text',
					'title' => 'Content Box Icon Background Outer Border Size',
				),
				array (
					'desc' => 'Controls the size of the icon. In pixels. Default is 21.',
					'id' => 'content_box_icon_size',
					'type' => 'text',
					'title' => 'Content Box Icon Font Size',
					'default' => '21',
				),
				array (
					'desc' => 'Controls the hover effect of the icon.',
					'id' => 'content_box_icon_hover_type',
					'type' => 'select',
					'options' => array (
						'none' => 'None',
						'fade' => 'Fade',
						'slide' => 'Slide',
						'pulsate' => 'Pulsate',
					),
					'title' => 'Content Box Icon Hover Animation Type',
					'default' => 'fade',
				),
				array (
					'desc' => 'Controls the accent color for the hover animation.',
					'id' => 'content_box_hover_animation_accent_color',
					'type' => 'color',
					'title' => 'Content Box Hover Animation Accent Color',
				),
				array (
					'desc' => 'Select the type of link that should show in the content box.',
					'id' => 'content_box_link_type',
					'type' => 'select',
					'options' => array (
						'text' => 'Text',
						'button-bar' => 'Button Bar',
						'button' => 'Button',
					),
					'title' => 'Content Box Link Type',
					'default' => 'text',
				),
				array (
					'desc' => 'Select which area the link will be assigned to.',
					'id' => 'content_box_link_area',
					'type' => 'select',
					'options' => array (
						'link-icon' => 'Link+Icon',
						'box' => 'Entire Content Box',
					),
					'title' => 'Content Box Link Area',
					'default' => 'link-icon',
				),
				array (
					'desc' => '_self = open in same window<br>_blank = open in new window. Select default for theme option selection.',
					'id' => 'content_box_link_target',
					'type' => 'select',
					'options' => array (
						'_self' => '_self',
						'_blank' => '_blank',
					),
					'title' => 'Content Box Link Target',
					'default' => '_self',
				),
				array (
					'desc' => 'In pixels, ex: 1px.',
					'id' => 'content_box_margin_top',
					'type' => 'text',
					'title' => 'Content Box Margin Top',
					'default' => '0px',
				),
				array (
					'desc' => 'In pixels, ex: 1px.',
					'id' => 'content_box_margin_bottom',
					'type' => 'text',
					'title' => 'Content Box Margin Bottom',
					'default' => '60px',
				),
				array (
					'id' => 'cb_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Content Box Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Content Box Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(12) "cb_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(21) "Content Box Shortcode"
		["default"]=>
		string(49) "<h3 style=\'margin: 0;\'>Content Box Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'countdown_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Countdown Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Countdown Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(19) "countdown_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(19) "Countdown Shortcode"
		["default"]=>
		string(47) "<h3 style=\'margin: 0;\'>Countdown Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Choose which timezone should be used for the countdown calculation.',
					'id' => 'countdown_timezone',
					'type' => 'select',
					'options' => array (
						'site_time' => 'Site Timezone',
						'user_time' => 'User Timezone',
					),
					'title' => 'Countdown Timezone',
					'default' => 'site_time',
				),
				array (
					'desc' => 'Select \'yes\' to show weeks for longer countdowns.',
					'id' => 'countdown_show_weeks',
					'type' => 'select',
					'options' => array (
						'no' => 'No',
						'yes' => 'Yes',
					),
					'title' => 'Countdown Show Weeks',
					'default' => 'no',
				),
				array (
					'desc' => 'Choose a background color for the countdown wrapping box.',
					'id' => 'countdown_background_color',
					'type' => 'color',
					'title' => 'Countdown Background Color',
					'default' => '#a0ce4e',
				),
				array (
					'desc' => 'Select an image or insert an image url to use for the background of the countdown wrapping box.',
					'id' => 'countdown_background_image',
					'type' => 'media',
					'title' => 'Countdown Background Image',
					'url' => true,
				),
				array (
					'desc' => 'Select how the background image repeats.',
					'id' => 'countdown_background_repeat',
					'type' => 'select',
					'options' => array (
						'repeat' => 'repeat',
						'repeat-x' => 'repeat-x',
						'repeat-y' => 'repeat-y',
						'no-repeat' => 'no-repeat',
					),
					'title' => 'Countdown Background Repeat',
					'default' => 'no-repeat',
				),
				array (
					'desc' => 'Select the position from where background image starts.',
					'id' => 'countdown_background_position',
					'type' => 'select',
					'options' => array (
						0 => 'top left',
						1 => 'top center',
						2 => 'top right',
						3 => 'center left',
						4 => 'center center',
						5 => 'center right',
						6 => 'bottom left',
						7 => 'bottom center',
						8 => 'bottom right',
					),
					'title' => 'Countdown Background Position',
					'default' => 'center center',
				),
				array (
					'desc' => 'Choose a background color for the counter boxes.',
					'id' => 'countdown_counter_box_color',
					'type' => 'color',
					'title' => 'Countdown Counter Box Color',
					'default' => '#333333',
				),
				array (
					'desc' => 'Choose a text color for the countdown timer.',
					'id' => 'countdown_counter_text_color',
					'type' => 'color',
					'title' => 'Countdown Counter Text Color',
					'default' => '#ffffff',
				),
				array (
					'desc' => 'Choose a heading text color for the countdown.',
					'id' => 'countdown_heading_text_color',
					'type' => 'color',
					'title' => 'Countdown Heading Text Color',
					'default' => '#ffffff',
				),
				array (
					'desc' => 'Choose a subheading text color for the countdown.',
					'id' => 'countdown_subheading_text_color',
					'type' => 'color',
					'title' => 'Countdown Subheading Text Color',
					'default' => '#ffffff',
				),
				array (
					'desc' => 'Choose a text color for the countdown link.',
					'id' => 'countdown_link_text_color',
					'type' => 'color',
					'title' => 'Countdown Link Text Color',
					'default' => '#ffffff',
				),
				array (
					'desc' => '_self = open in same window<br>_blank = open in new window.',
					'id' => 'countdown_link_target',
					'type' => 'select',
					'options' => array (
						'_self' => '_self',
						'_blank' => '_blank',
					),
					'title' => 'Countdown Link Target',
					'default' => '_self',
				),
				array (
					'id' => 'countdown_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Countdown Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Countdown Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(19) "countdown_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(19) "Countdown Shortcode"
		["default"]=>
		string(47) "<h3 style=\'margin: 0;\'>Countdown Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'counterb_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Counter Boxes Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Counter Boxes Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(18) "counterb_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(23) "Counter Boxes Shortcode"
		["default"]=>
		string(51) "<h3 style=\'margin: 0;\'>Counter Boxes Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the color of the counter "value" and icon.',
					'id' => 'counter_box_color',
					'type' => 'color',
					'title' => 'Counter Box Title Font Color',
					'default' => '#a0ce4e',
				),
				array (
					'desc' => 'Controls the size of the counter "value" and icon. Enter the font size without \'px\'. Default is 50.',
					'id' => 'counter_box_title_size',
					'type' => 'text',
					'title' => 'Counter Box Title Font Size',
					'default' => '50',
				),
				array (
					'desc' => 'Controls the size of the icon. Enter the font size without \'px\'. Default is 50.',
					'id' => 'counter_box_icon_size',
					'type' => 'text',
					'title' => 'Counter Box Icon Size',
					'default' => '50',
				),
				array (
					'desc' => 'Controls the color of the counter body text.',
					'id' => 'counter_box_body_color',
					'type' => 'color',
					'title' => 'Counter Box Body Font Color',
					'default' => '#747474',
				),
				array (
					'desc' => 'Controls the size of the counter body text. Enter the font size without \'px\'. Default is 13.',
					'id' => 'counter_box_body_size',
					'type' => 'text',
					'title' => 'Counter Box Body Font Size',
					'default' => '13',
				),
				array (
					'desc' => 'Controls the color of the border.',
					'id' => 'counter_box_border_color',
					'type' => 'color',
					'title' => 'Counter Box Border Color',
					'default' => '#e0dede',
				),
				array (
					'desc' => 'Controls the position of the icon.',
					'id' => 'counter_box_icon_top',
					'type' => 'select',
					'options' => array (
						'no' => 'No',
						'yes' => 'Yes',
					),
					'title' => 'Counter Box Icon on Top',
					'default' => 'no',
				),
				array (
					'id' => 'counterb_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Counter Boxes Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Counter Boxes Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(18) "counterb_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(23) "Counter Boxes Shortcode"
		["default"]=>
		string(51) "<h3 style=\'margin: 0;\'>Counter Boxes Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'cc_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Counter Circle Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Counter Circles Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(12) "cc_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(24) "Counter Circle Shortcode"
		["default"]=>
		string(53) "<h3 style=\'margin: 0;\'>Counter Circles Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the color of the unfilled circle.',
					'id' => 'counter_filled_color',
					'type' => 'color',
					'title' => 'Counter Circle Filled Color',
					'default' => '#a0ce4e',
				),
				array (
					'desc' => 'Controls the color of the filled circle.',
					'id' => 'counter_unfilled_color',
					'type' => 'color',
					'title' => 'Counter Circle Unfilled Color',
					'default' => '#f6f6f6',
				),
				array (
					'id' => 'cc_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Counter Circle Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Counter Circle Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(12) "cc_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(24) "Counter Circle Shortcode"
		["default"]=>
		string(52) "<h3 style=\'margin: 0;\'>Counter Circle Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'dropcap_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Dropcap Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Dropcap Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(17) "dropcap_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(17) "Dropcap Shortcode"
		["default"]=>
		string(45) "<h3 style=\'margin: 0;\'>Dropcap Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the color of the dropcap text, or the dropcap box if a box is used.',
					'id' => 'dropcap_color',
					'type' => 'color',
					'title' => 'Dropcap Color',
					'default' => '#a0ce4e',
				),
				array (
					'id' => 'dropcap_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Dropcap Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Dropcap Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(17) "dropcap_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(17) "Dropcap Shortcode"
		["default"]=>
		string(45) "<h3 style=\'margin: 0;\'>Dropcap Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'flipb_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Flip Boxes Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Flip Boxes Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(15) "flipb_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(20) "Flip Boxes Shortcode"
		["default"]=>
		string(48) "<h3 style=\'margin: 0;\'>Flip Boxes Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the color of frontside background color.',
					'id' => 'flip_boxes_front_bg',
					'type' => 'color',
					'title' => 'Flip Box Background Color Frontside',
					'default' => '#f6f6f6',
				),
				array (
					'desc' => 'Controls the color of frontside heading color.',
					'id' => 'flip_boxes_front_heading',
					'type' => 'color',
					'title' => 'Flip Box Heading Color Frontside',
					'default' => '#333333',
				),
				array (
					'desc' => 'Controls the color of frontside text color.',
					'id' => 'flip_boxes_front_text',
					'type' => 'color',
					'title' => 'Flip Box Text Color Frontside',
					'default' => '#747474',
				),
				array (
					'desc' => 'Controls the color of backside background color.',
					'id' => 'flip_boxes_back_bg',
					'type' => 'color',
					'title' => 'Flip Box Background Color Backside',
					'default' => '#a0ce4e',
				),
				array (
					'desc' => 'Controls the color of backside heading color.',
					'id' => 'flip_boxes_back_heading',
					'type' => 'color',
					'title' => 'Flip Box Heading Color Backside',
					'default' => '#eeeded',
				),
				array (
					'desc' => 'Controls the color of backside text color.',
					'id' => 'flip_boxes_back_text',
					'type' => 'color',
					'title' => 'Flip Box Text Color Backside',
					'default' => '#ffffff',
				),
				array (
					'desc' => 'Controls the border size of flip boxes.',
					'id' => 'flip_boxes_border_size',
					'type' => 'text',
					'title' => 'Flip Box Border Size',
					'default' => '1px',
				),
				array (
					'desc' => 'Controls the border color of flip boxes.',
					'id' => 'flip_boxes_border_color',
					'type' => 'color',
					'title' => 'Flip Box Border Color',
					'default' => 'transparent',
				),
				array (
					'desc' => 'Controls the border radius (roundness) of flip boxes.',
					'id' => 'flip_boxes_border_radius',
					'type' => 'text',
					'title' => 'Flip Box Border Radius',
					'default' => '4px',
				),
				array (
					'id' => 'flipb_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Flip Boxes Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Flip Boxes Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(15) "flipb_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(20) "Flip Boxes Shortcode"
		["default"]=>
		string(48) "<h3 style=\'margin: 0;\'>Flip Boxes Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'fullwidth_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Full Width Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Full Width Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(19) "fullwidth_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(20) "Full Width Shortcode"
		["default"]=>
		string(48) "<h3 style=\'margin: 0;\'>Full Width Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the background color of the full width section.',
					'id' => 'full_width_bg_color',
					'type' => 'color',
					'title' => 'Full Width Background Color',
				),
				array (
					'desc' => 'Controls the border size of the full width section.',
					'id' => 'full_width_border_size',
					'type' => 'text',
					'title' => 'Full Width Border Size',
					'default' => '0px',
				),
				array (
					'desc' => 'Controls the border color of the full width section.',
					'id' => 'full_width_border_color',
					'type' => 'color',
					'title' => 'Full Width Border Color',
					'default' => '#eae9e9',
				),
				array (
					'id' => 'fullwidth_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Full Width Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Full Width Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(19) "fullwidth_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(20) "Full Width Shortcode"
		["default"]=>
		string(48) "<h3 style=\'margin: 0;\'>Full Width Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'icon_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Icon Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Icon Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(14) "icon_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(14) "Icon Shortcode"
		["default"]=>
		string(42) "<h3 style=\'margin: 0;\'>Icon Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the color of the circle when used with icons.',
					'id' => 'icon_circle_color',
					'type' => 'color',
					'title' => 'Icon Circle Background Color',
					'default' => '#333333',
				),
				array (
					'desc' => 'Controls the color of the circle border when used with icons.',
					'id' => 'icon_border_color',
					'type' => 'color',
					'title' => 'Icon Circle Border Color',
					'default' => '#333333',
				),
				array (
					'desc' => 'Controls the color of the icons.',
					'id' => 'icon_color',
					'type' => 'color',
					'title' => 'Icon Color',
					'default' => '#ffffff',
				),
				array (
					'id' => 'icon_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Icon Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Icon Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(14) "icon_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(14) "Icon Shortcode"
		["default"]=>
		string(42) "<h3 style=\'margin: 0;\'>Icon Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'imgf_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Image Frame Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Image Frame Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(14) "imgf_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(21) "Image Frame Shortcode"
		["default"]=>
		string(49) "<h3 style=\'margin: 0;\'>Image Frame Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the border color of the image frame.',
					'id' => 'imgframe_border_color',
					'type' => 'color',
					'title' => 'Image Frame Border Color',
					'default' => '#f6f6f6',
				),
				array (
					'desc' => 'Controls the border size of the image. In pixels, ex: 4px.',
					'id' => 'imageframe_border_size',
					'type' => 'text',
					'title' => 'Image Frame Border Size',
					'default' => '0px',
				),
				array (
					'desc' => 'Controls the border radius of the image. In pixels, ex: 4px.',
					'id' => 'imageframe_border_radius',
					'type' => 'text',
					'title' => 'Image Frame Border Radius',
					'default' => '0px',
				),
				array (
					'desc' => 'Controls the style color of the image frame. Only works for glow and dropshadow style.',
					'id' => 'imgframe_style_color',
					'type' => 'color',
					'title' => 'Image Frame Style Color',
					'default' => '#000000',
				),
				array (
					'id' => 'imgf_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Image Frame Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Image Frame Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(14) "imgf_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(21) "Image Frame Shortcode"
		["default"]=>
		string(49) "<h3 style=\'margin: 0;\'>Image Frame Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'modal_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Modal Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Modal Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(15) "modal_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(15) "Modal Shortcode"
		["default"]=>
		string(43) "<h3 style=\'margin: 0;\'>Modal Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the background color of the modal popup box',
					'id' => 'modal_bg_color',
					'type' => 'color',
					'title' => 'Modal Background Color',
					'default' => '#f6f6f6',
				),
				array (
					'desc' => 'Controls the border color of the modal popup box',
					'id' => 'modal_border_color',
					'type' => 'color',
					'title' => 'Modal Border Color',
					'default' => '#ebebeb',
				),
				array (
					'id' => 'modal_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Modal Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Modal Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(15) "modal_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(15) "Modal Shortcode"
		["default"]=>
		string(43) "<h3 style=\'margin: 0;\'>Modal Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'person_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Person Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Person Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(16) "person_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(16) "Person Shortcode"
		["default"]=>
		string(44) "<h3 style=\'margin: 0;\'>Person Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the background color.',
					'id' => 'person_background_color',
					'type' => 'color',
					'title' => 'Person Background Color',
				),
				array (
					'desc' => 'Controls the text color.',
					'id' => 'person_text_color',
					'type' => 'color',
					'title' => 'Person Text Color',
				),
				array (
					'desc' => 'Controls the border color of the of the image.',
					'id' => 'person_border_color',
					'type' => 'color',
					'title' => 'Person Border Color',
					'default' => '#f6f6f6',
				),
				array (
					'desc' => 'Controls the border size of the image. In pixels, ex: 4px.',
					'id' => 'person_border_size',
					'type' => 'text',
					'title' => 'Person Border Size',
					'default' => '0px',
				),
				array (
					'desc' => 'Controls the border radius of the image. In pixels, ex: 4px.',
					'id' => 'person_border_radius',
					'type' => 'text',
					'title' => 'Person Border Radius',
					'default' => '0px',
				),
				array (
					'desc' => 'For all style types except border. Controls the style color. ',
					'id' => 'person_style_color',
					'type' => 'color',
					'title' => 'Person Style Color',
				),
				array (
					'desc' => 'Choose the alignment of content.',
					'id' => 'person_alignment',
					'type' => 'select',
					'options' => array (
						'Left' => 'Left',
						'Center' => 'Center',
						'Right' => 'Right',
					),
					'title' => 'Person Content Alignment',
					'default' => 'Left',
				),
				array (
					'desc' => 'Choose the social icon position.',
					'id' => 'person_icon_position',
					'type' => 'select',
					'options' => array (
						'Top' => 'Top',
						'Bottom' => 'Bottom',
					),
					'title' => 'Person Icons Position',
					'default' => 'Top',
				),
				array (
					'id' => 'person_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Person Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Person Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(16) "person_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(16) "Person Shortcode"
		["default"]=>
		string(44) "<h3 style=\'margin: 0;\'>Person Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'popover_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Popover Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Popover Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(17) "popover_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(17) "Popover Shortcode"
		["default"]=>
		string(45) "<h3 style=\'margin: 0;\'>Popover Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the background color of popover heading area.',
					'id' => 'popover_heading_bg_color',
					'type' => 'color',
					'title' => 'Popover Heading Background Color',
					'default' => '#f6f6f6',
				),
				array (
					'desc' => 'Controls the background color of popover content area.',
					'id' => 'popover_content_bg_color',
					'type' => 'color',
					'title' => 'Popover Content Background Color',
					'default' => '#ffffff',
				),
				array (
					'desc' => 'Controls the border color of popover box.',
					'id' => 'popover_border_color',
					'type' => 'color',
					'title' => 'Popover Border Color',
					'default' => '#ebebeb',
				),
				array (
					'desc' => 'Controls the text color inside the popover box. ',
					'id' => 'popover_text_color',
					'type' => 'color',
					'title' => 'Popover Text Color',
					'default' => '#747474',
				),
				array (
					'desc' => 'Controls the position of the popover in reference to the triggering text.',
					'id' => 'popover_placement',
					'type' => 'select',
					'options' => array (
						'Top' => 'Top',
						'Right' => 'Right',
						'Bottom' => 'Bottom',
						'Left' => 'Left',
					),
					'title' => 'Popover Position',
					'default' => 'Top',
				),
				array (
					'id' => 'popover_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Popover Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Popover Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(17) "popover_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(17) "Popover Shortcode"
		["default"]=>
		string(45) "<h3 style=\'margin: 0;\'>Popover Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'pricingtable_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Pricing Table Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Pricing Table Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(22) "pricingtable_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(23) "Pricing Table Shortcode"
		["default"]=>
		string(51) "<h3 style=\'margin: 0;\'>Pricing Table Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the heading color of full boxed (style 1) pricing tables.',
					'id' => 'full_boxed_pricing_box_heading_color',
					'type' => 'color',
					'title' => 'Pricing Box Style 1 Heading Color',
					'default' => '#333333',
				),
				array (
					'desc' => 'Controls the heading color of separate (style 2) pricing boxes.',
					'id' => 'sep_pricing_box_heading_color',
					'type' => 'color',
					'title' => 'Pricing Box Style 2 Heading Color',
					'default' => '#333333',
				),
				array (
					'desc' => 'Controls the color portions of pricing boxes.',
					'id' => 'pricing_box_color',
					'type' => 'color',
					'title' => 'Pricing Box Color',
					'default' => '#a0ce4e',
				),
				array (
					'desc' => 'Controls the color of main background and title background.',
					'id' => 'pricing_bg_color',
					'type' => 'color',
					'title' => 'Pricing Box Background Color',
					'default' => '#ffffff',
				),
				array (
					'desc' => 'Controls the color of the outer border, pricing row and footer row backgrounds.',
					'id' => 'pricing_border_color',
					'type' => 'color',
					'title' => 'Pricing Box Border Color',
					'default' => '#f8f8f8',
				),
				array (
					'desc' => 'Controls the color of the dividers in-between pricing rows.',
					'id' => 'pricing_divider_color',
					'type' => 'color',
					'title' => 'Pricing Box Divider Color',
					'default' => '#ededed',
				),
				array (
					'id' => 'pricingtable_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Pricing Table Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Pricing Table Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(22) "pricingtable_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(23) "Pricing Table Shortcode"
		["default"]=>
		string(51) "<h3 style=\'margin: 0;\'>Pricing Table Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'progressbar_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Progress Bar Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Progress Bar Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(21) "progressbar_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(22) "Progress Bar Shortcode"
		["default"]=>
		string(50) "<h3 style=\'margin: 0;\'>Progress Bar Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the color of the filled area in progress bars.',
					'id' => 'progressbar_filled_color',
					'type' => 'color',
					'title' => 'Progress Bar Filled Color',
					'default' => '#a0ce4e',
				),
				array (
					'desc' => 'Controls the border color of the filled area in progress bars.',
					'id' => 'progressbar_filled_border_color',
					'type' => 'color',
					'title' => 'Progress Bar Filled Border Color',
				),
				array (
					'desc' => 'In pixels (px), ex: 1px.',
					'id' => 'progressbar_filled_border_size',
					'type' => 'text',
					'title' => 'Progress Bar Filled Border Size',
				),
				array (
					'desc' => 'Controls the color of the unfilled area in progress bars.',
					'id' => 'progressbar_unfilled_color',
					'type' => 'color',
					'title' => 'Progress Bar Unfilled Color',
					'default' => '#f6f6f6',
				),
				array (
					'desc' => 'Controls the color of the text in progress bars.',
					'id' => 'progressbar_text_color',
					'type' => 'color',
					'title' => 'Progress Bar Text Color',
					'default' => '#ffffff',
				),
				array (
					'id' => 'progressbar_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Progress Bar Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Progress Bar Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(21) "progressbar_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(22) "Progress Bar Shortcode"
		["default"]=>
		string(50) "<h3 style=\'margin: 0;\'>Progress Bar Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'sectionseparator_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Section Separator Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Section Separator Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(26) "sectionseparator_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(27) "Section Separator Shortcode"
		["default"]=>
		string(55) "<h3 style=\'margin: 0;\'>Section Separator Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the border size of the section separator.',
					'id' => 'section_sep_border_size',
					'type' => 'text',
					'title' => 'Section Separator Border Size',
					'default' => '1px',
				),
				array (
					'desc' => 'Controls the background color of the divider candy.',
					'id' => 'section_sep_bg',
					'type' => 'color',
					'title' => 'Section Separator Background Color of Divider Candy',
					'default' => '#f6f6f6',
				),
				array (
					'desc' => 'Controls the border color of the separator.',
					'id' => 'section_sep_border_color',
					'type' => 'color',
					'title' => 'Section Separator Border Color',
					'default' => '#f6f6f6',
				),
				array (
					'id' => 'sectionseparator_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Section Separator Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Section Separator Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(26) "sectionseparator_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(27) "Section Separator Shortcode"
		["default"]=>
		string(55) "<h3 style=\'margin: 0;\'>Section Separator Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'separator_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Separator Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Separator Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(19) "separator_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(19) "Separator Shortcode"
		["default"]=>
		string(47) "<h3 style=\'margin: 0;\'>Separator Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the color of all separators, divider lines and borders for meta, previous & next, filters, category page, boxes around number pagination, sidebar widgets, accordion divider lines, counter boxes and more.',
					'id' => 'sep_color',
					'type' => 'color',
					'title' => 'Separators Color',
					'default' => '#e0dede',
				),
				array (
					'desc' => 'Check the box if you want to use circles around the icons on separators.',
					'id' => 'separator_circle',
					'type' => 'checkbox',
					'title' => 'Separator Circle',
					'default' => 1,
				),
				array (
					'desc' => 'In pixels, ex: 1px.',
					'id' => 'separator_border_size',
					'type' => 'text',
					'title' => 'Border Size',
					'default' => '1px',
				),
				array (
					'id' => 'separator_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Separator Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Separator Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(19) "separator_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(19) "Separator Shortcode"
		["default"]=>
		string(47) "<h3 style=\'margin: 0;\'>Separator Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'sharingbox_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Sharing Box Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Sharing Box Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(20) "sharingbox_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(21) "Sharing Box Shortcode"
		["default"]=>
		string(49) "<h3 style=\'margin: 0;\'>Sharing Box Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the background color of the sharing box.',
					'id' => 'sharing_box_bg_color',
					'type' => 'color',
					'title' => 'Sharing Box Background Color',
					'default' => '#f6f6f6',
				),
				array (
					'desc' => 'Controls the text color of the tagline text.',
					'id' => 'sharing_box_tagline_text_color',
					'type' => 'color',
					'title' => 'Sharing Box Tagline Text Color',
					'default' => '#333333',
				),
				array (
					'id' => 'sharingbox_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Sharing Box Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Sharing Box Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(20) "sharingbox_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(21) "Sharing Box Shortcode"
		["default"]=>
		string(49) "<h3 style=\'margin: 0;\'>Sharing Box Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'sociallinks_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Social Links Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Social Links Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(21) "sociallinks_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(22) "Social Links Shortcode"
		["default"]=>
		string(50) "<h3 style=\'margin: 0;\'>Social Links Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'In pixels, default is 16',
					'id' => 'social_links_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Social Links Icons Font Size',
					'default' => '16',
				),
				array (
					'desc' => 'Select a custom social icon color. Use one hex value for all or separate by | symbol for multi-color. ex: #AA0000|#00AA00|#0000AA',
					'id' => 'social_links_icon_color',
					'type' => 'color',
					'title' => 'Social Links Custom Icons Color',
					'default' => '#bebdbd',
				),
				array (
					'desc' => 'Controls whether each icon is displayed in a small box.',
					'id' => 'social_links_boxed',
					'type' => 'select',
					'options' => array (
						'No' => 'No',
						'Yes' => 'Yes',
					),
					'title' => 'Social Links Icons Boxed',
					'default' => 'No',
				),
				array (
					'desc' => 'Select a custom social icon box color. Use one hex value for all or separate by | symbol for multi-color. ex: #AA0000|#00AA00|#0000AA',
					'id' => 'social_links_box_color',
					'type' => 'color',
					'title' => 'Social Links Icons Custom Box Color',
					'default' => '#e8e8e8',
				),
				array (
					'desc' => 'Box radius for the social icons. In px or %, ex: 5px or 10% or "round".',
					'id' => 'social_links_boxed_radius',
					'type' => 'text',
					'title' => 'Social Links Icons Boxed Radius',
					'default' => '4px',
				),
				array (
					'desc' => 'In pixels, default is 8',
					'id' => 'social_links_boxed_padding',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Social Links Icons Boxed Padding',
					'default' => '8',
				),
				array (
					'desc' => 'Controls the tooltip position of the social links icons.',
					'id' => 'social_links_tooltip_placement',
					'type' => 'select',
					'options' => array (
						'Top' => 'Top',
						'Right' => 'Right',
						'Bottom' => 'Bottom',
						'Left' => 'Left',
						'None' => 'None',
					),
					'title' => 'Social Links Icons Tooltip Position',
					'default' => 'Top',
				),
				array (
					'id' => 'sociallinks_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Social Links Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Social Links Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(21) "sociallinks_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(22) "Social Links Shortcode"
		["default"]=>
		string(50) "<h3 style=\'margin: 0;\'>Social Links Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'tabs_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Tabs Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Tabs Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(14) "tabs_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(14) "Tabs Shortcode"
		["default"]=>
		string(42) "<h3 style=\'margin: 0;\'>Tabs Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the color of the active tab, content background color and tab hover.',
					'id' => 'tabs_bg_color',
					'type' => 'color',
					'title' => 'Tabs Background Color + Hover Color',
					'default' => '#ffffff',
				),
				array (
					'desc' => 'Controls the color of the inactive tabs.',
					'id' => 'tabs_inactive_color',
					'type' => 'color',
					'title' => 'Tabs Inactive Color',
					'default' => '#ebeaea',
				),
				array (
					'desc' => 'Controls the color of the outer tab border.',
					'id' => 'tabs_border_color',
					'type' => 'color',
					'title' => 'Tabs Border Color',
					'default' => '#ebeaea',
				),
				array (
					'id' => 'tabs_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Tabs Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Tabs Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(14) "tabs_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(14) "Tabs Shortcode"
		["default"]=>
		string(42) "<h3 style=\'margin: 0;\'>Tabs Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'tagline_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Tagline Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Tagline Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(17) "tagline_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(17) "Tagline Shortcode"
		["default"]=>
		string(45) "<h3 style=\'margin: 0;\'>Tagline Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the background color of the tagline box.',
					'id' => 'tagline_bg',
					'type' => 'color',
					'title' => 'Tagline Box Background Color',
					'default' => '#f6f6f6',
				),
				array (
					'desc' => 'Controls the border color of the tagline box.',
					'id' => 'tagline_border_color',
					'type' => 'color',
					'title' => 'Tagline Box Border Color',
					'default' => '#f6f6f6',
				),
				array (
					'desc' => 'Controls the top margin of the tagline box. In pixels.',
					'id' => 'tagline_margin_top',
					'type' => 'text',
					'title' => 'Tagline Margin Top',
				),
				array (
					'desc' => 'Controls the bottom margin of the tagline box. In pixels.',
					'id' => 'tagline_margin_bottom',
					'type' => 'text',
					'title' => 'Tagline Margin Bottom',
					'default' => '84',
				),
				array (
					'id' => 'tagline_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Tagline Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Tagline Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(17) "tagline_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(17) "Tagline Shortcode"
		["default"]=>
		string(45) "<h3 style=\'margin: 0;\'>Tagline Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'testimonials_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Testimonials Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Testimonials Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(22) "testimonials_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(22) "Testimonials Shortcode"
		["default"]=>
		string(50) "<h3 style=\'margin: 0;\'>Testimonials Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the background color of the testimonial.',
					'id' => 'testimonial_bg_color',
					'type' => 'color',
					'title' => 'Testimonial Background Color',
					'default' => '#f6f6f6',
				),
				array (
					'desc' => 'Controls the text color of the testimonial font.',
					'id' => 'testimonial_text_color',
					'type' => 'color',
					'title' => 'Testimonial Text Color',
					'default' => '#747474',
				),
				array (
					'desc' => 'Select the slideshow speed, 1000 = 1 second.',
					'id' => 'testimonials_speed',
					'type' => 'text',
					'title' => 'Testimonials Speed',
					'default' => '4000',
				),
				array (
					'desc' => 'Check the box to display testimonials in random order.',
					'id' => 'testimonials_random',
					'type' => 'checkbox',
					'title' => 'Random Order',
				),
				array (
					'id' => 'testimonials_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Testimonials Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Testimonials Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(22) "testimonials_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(22) "Testimonials Shortcode"
		["default"]=>
		string(50) "<h3 style=\'margin: 0;\'>Testimonials Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'title_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Title Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Title Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(15) "title_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(15) "Title Shortcode"
		["default"]=>
		string(43) "<h3 style=\'margin: 0;\'>Title Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Choose the kind of the title separator you want to use.',
					'id' => 'title_style_type',
					'type' => 'select',
					'options' => array (
						'single' => 'Single',
						'single solid' => 'Single Solid',
						'single dashed' => 'Single Dashed',
						'single dotted' => 'Single Dotted',
						'double' => 'Double',
						'double solid' => 'Double Solid',
						'double dashed' => 'Double Dashed',
						'double dotted' => 'Double Dotted',
						'underline' => 'Underline',
						'underline solid' => 'Underline Solid',
						'underline dashed' => 'Underline Dashed',
						'underline dotted' => 'Underline Dotted',
						'none' => 'None',
					),
					'title' => 'Title Separator',
					'default' => 'double',
				),
				array (
					'desc' => 'Controls the color of the title separators',
					'id' => 'title_border_color',
					'type' => 'color',
					'title' => 'Title Separator Color',
					'default' => '#e0dede',
				),
				array (
					'desc' => 'Spacing above the title. In px or em, e.g. 10px.',
					'id' => 'title_top_margin',
					'type' => 'text',
					'title' => 'Title Top Margin',
				),
				array (
					'desc' => 'Spacing below the title. In px or em, e.g. 10px.',
					'id' => 'title_bottom_margin',
					'type' => 'text',
					'title' => 'Title Bottom Margin',
				),
				array (
					'id' => 'title_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Title Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Title Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(15) "title_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(15) "Title Shortcode"
		["default"]=>
		string(43) "<h3 style=\'margin: 0;\'>Title Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'accordion_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Toggles Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Toggles Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(19) "accordion_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(17) "Toggles Shortcode"
		["default"]=>
		string(45) "<h3 style=\'margin: 0;\'>Toggles Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Choose to display a divider line between each item.',
					'id' => 'accordion_divider_line',
					'type' => 'checkbox',
					'title' => 'Toggle Divider Line',
					'default' => 1,
				),
				array (
					'desc' => 'Controls the color of the inactive boxes behind the \'+\' icons.',
					'id' => 'accordian_inactive_color',
					'type' => 'color',
					'title' => 'Toggles Inactive Box Color',
					'default' => '#333333',
				),
				array (
					'id' => 'accordion_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Toggles Shortcode',
					'default' => '<h3 style=\'margin: 0;\'>Toggles Shortcode</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(19) "accordion_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(17) "Toggles Shortcode"
		["default"]=>
		string(45) "<h3 style=\'margin: 0;\'>Toggles Shortcode</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'login_shortcode',
					'position' => 'start',
					'type' => 'info',
					'title' => 'User Login Shortcodes',
					'default' => '<h3 style=\'margin: 0;\'>User Login Shortcodes</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(15) "login_shortcode"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(21) "User Login Shortcodes"
		["default"]=>
		string(49) "<h3 style=\'margin: 0;\'>User Login Shortcodes</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Choose the alignment of all content parts. "Text Flow" follows the default text align of the site. "Center" will center all elements.',
					'id' => 'user_login_text_align',
					'type' => 'select',
					'options' => array (
						'textflow' => 'Text Flow',
						'center' => 'Center',
					),
					'title' => 'User Login Text Align',
					'default' => 'center',
				),
				array (
					'desc' => 'Choose a background color for the form wrapping box.',
					'id' => 'user_login_form_background_color',
					'type' => 'color',
					'title' => 'User Login Form Backgound Color',
					'default' => '#f6f6f6',
				),
				array (
					'id' => 'login_shortcode',
					'position' => 'end',
					'type' => 'info',
					'title' => 'User Login Shortcodes',
					'default' => '<h3 style=\'margin: 0;\'>User Login Shortcodes</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(15) "login_shortcode"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(21) "User Login Shortcodes"
		["default"]=>
		string(49) "<h3 style=\'margin: 0;\'>User Login Shortcodes</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_blog',
			'title' => 'Blog',
			'fields' => array (
				array (
					'id' => 'blog_single_post',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>General Blog Options</h3>',
				),
				array (
					'desc' => 'This text will display in the page title bar of the assigned blog page. Note: This option only works if your front page is set to display your latest post in reading settings.',
					'id' => 'blog_title',
					'type' => 'text',
					'title' => 'Blog Page Title',
					'default' => 'Blog',
				),
				array (
					'desc' => 'This text will display as subheading in the page title bar of the assigned blog page. Note: This option only works if your front page is set to display your latest post in reading settings.',
					'id' => 'blog_subtitle',
					'type' => 'text',
					'title' => 'Blog Page Subtitle',
				),
				array (
					'desc' => 'Check the box to show the page title bar for the assigned blog page.',
					'id' => 'blog_show_page_title_bar',
					'type' => 'checkbox',
					'title' => 'Page Title Bar',
					'default' => 1,
				),
				array (
					'desc' => 'Select the layout for the assigned blog page in settings > reading.',
					'id' => 'blog_layout',
					'type' => 'select',
					'options' => array (
						'Large' => 'Large',
						'Medium' => 'Medium',
						'Large Alternate' => 'Large Alternate',
						'Medium Alternate' => 'Medium Alternate',
						'Grid' => 'Grid',
						'Timeline' => 'Timeline',
					),
					'title' => 'Blog Layout',
					'default' => 'Large',
				),
				array (
					'desc' => 'Select the layout for the blog archive/category pages.',
					'id' => 'blog_archive_layout',
					'type' => 'select',
					'options' => array (
						'Large' => 'Large',
						'Medium' => 'Medium',
						'Large Alternate' => 'Large Alternate',
						'Medium Alternate' => 'Medium Alternate',
						'Grid' => 'Grid',
						'Timeline' => 'Timeline',
					),
					'title' => 'Blog Archive/Category Layout',
					'default' => 'Large',
				),
				array (
					'desc' => 'Select the pagination type for the assigned blog page in settings > reading.',
					'id' => 'blog_pagination_type',
					'type' => 'select',
					'options' => array (
						'Pagination' => 'Pagination',
						'Infinite Scroll' => 'Infinite Scroll',
						'load_more_button' => 'Load More Button',
					),
					'title' => 'Pagination Type',
					'default' => 'Pagination',
				),
				array (
					'desc' => 'Select the amount of columns for the grid layout.',
					'id' => 'blog_grid_columns',
					'type' => 'select',
					'options' => array (
						2 => '2',
						3 => '3',
						4 => '4',
						5 => '5',
						6 => '6',
					),
					'title' => 'Grid Layout # of Columns',
					'default' => '3',
				),
				array (
					'desc' => 'Insert the amount of spacing between grid items without \'px\'. ex: 40',
					'id' => 'blog_grid_column_spacing',
					'type' => 'text',
					'title' => 'Grid Layout Column Spacing',
					'default' => '40',
				),
				array (
					'desc' => 'Choose to display an excerpt or full content on blog pages.',
					'id' => 'content_length',
					'type' => 'select',
					'options' => array (
						'Excerpt' => 'Excerpt',
						'Full Content' => 'Full Content',
					),
					'title' => 'Excerpt or Full Blog Content',
					'default' => 'Excerpt',
				),
				array (
					'desc' => 'Insert the number of words you want to show in the post excerpts.',
					'id' => 'excerpt_length_blog',
					'type' => 'text',
					'title' => 'Excerpt Length',
					'default' => '55',
				),
				array (
					'desc' => 'Check the box if you want to strip HTML from the excerpt content only.',
					'id' => 'strip_html_excerpt',
					'type' => 'checkbox',
					'title' => 'Strip HTML from Excerpt',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to display featured images and videos on blog archive page.',
					'id' => 'featured_images',
					'type' => 'checkbox',
					'title' => 'Featured Image / Video on Blog Archive Page',
					'default' => 1,
				),
				array (
					'desc' => '<a href=\'http://codex.wordpress.org/Formatting_Date_and_Time\'>Formatting Date and Time</a>',
					'id' => 'alternate_date_format_month_year',
					'type' => 'text',
					'title' => 'Blog Alternate Date Format - Month and Year',
					'default' => 'm, Y',
				),
				array (
					'desc' => '<a href=\'http://codex.wordpress.org/Formatting_Date_and_Time\'>Formatting Date and Time</a>',
					'id' => 'alternate_date_format_day',
					'type' => 'text',
					'title' => 'Blog Alternate Date Format - Day',
					'default' => 'j',
				),
				array (
					'desc' => '<a href=\'http://codex.wordpress.org/Formatting_Date_and_Time\'>Formatting Date</a>',
					'id' => 'timeline_date_format',
					'type' => 'text',
					'title' => 'Blog Timeline Date Format - Timeline Labels',
					'default' => 'F Y',
				),
				array (
					'id' => 'blog_single_post',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Blog Single Post Page Options</h3>',
				),
				array (
					'desc' => 'Choose to set posts to 100% browser width.',
					'id' => 'blog_width_100',
					'type' => 'checkbox',
					'title' => 'Use 100% Width Page',
				),
				array (
					'desc' => 'Check the box to display featured images and videos on single post pages.',
					'id' => 'featured_images_single',
					'type' => 'checkbox',
					'title' => 'Featured Image / Video on Single Post Page',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to disable previous/next pagination.',
					'id' => 'blog_pn_nav',
					'type' => 'checkbox',
					'title' => 'Disable Previous/Next Pagination',
				),
				array (
					'desc' => 'Check the box to display the post title that goes below the featured images.',
					'id' => 'blog_post_title',
					'type' => 'checkbox',
					'title' => 'Post Title',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to display the author info box below posts.',
					'id' => 'author_info',
					'type' => 'checkbox',
					'title' => 'Author Info Box',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to display the social sharing box.',
					'id' => 'social_sharing_box',
					'type' => 'checkbox',
					'title' => 'Social Sharing Box',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to display related posts.',
					'id' => 'related_posts',
					'type' => 'checkbox',
					'title' => 'Related Posts',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to display comments.',
					'id' => 'blog_comments',
					'type' => 'checkbox',
					'title' => 'Comments',
					'default' => 1,
				),
				array (
					'id' => 'blog_meta',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Blog Meta Options</h3>',
				),
				array (
					'desc' => 'Check the box to display post meta on blog posts.',
					'id' => 'post_meta',
					'type' => 'checkbox',
					'title' => 'Post Meta',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to hide the author name from post meta.',
					'id' => 'post_meta_author',
					'type' => 'checkbox',
					'title' => 'Disable Post Meta Author',
				),
				array (
					'desc' => 'Check the box to hide the date from post meta.',
					'id' => 'post_meta_date',
					'type' => 'checkbox',
					'title' => 'Disable Post Meta Date',
				),
				array (
					'desc' => 'Check the box to hide the categories from post meta.',
					'id' => 'post_meta_cats',
					'type' => 'checkbox',
					'title' => 'Disable Post Meta Categories',
				),
				array (
					'desc' => 'Check the box to hide the comments from post meta.',
					'id' => 'post_meta_comments',
					'type' => 'checkbox',
					'title' => 'Disable Post Meta Comments',
				),
				array (
					'desc' => 'Check the box to hide the read more link from post meta.',
					'id' => 'post_meta_read',
					'type' => 'checkbox',
					'title' => 'Disable Post Meta Read More Link',
				),
				array (
					'desc' => 'Check the box to hide the tags from post meta.',
					'id' => 'post_meta_tags',
					'type' => 'checkbox',
					'title' => 'Disable Post Meta Tags',
					'default' => 1,
				),
				array (
					'desc' => '<a href=\'http://codex.wordpress.org/Formatting_Date_and_Time\'>Formatting Date and Time</a>',
					'id' => 'date_format',
					'type' => 'text',
					'title' => 'Date Format',
					'default' => 'F jS, Y',
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_portfolio',
			'title' => 'Portfolio',
			'fields' => array (
				array (
					'id' => 'blog_single_post',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>General Portfolio Options</h3>',
				),
				array (
					'desc' => 'Insert the number of posts to display per page.',
					'id' => 'portfolio_items',
					'type' => 'text',
					'title' => 'Number of Portfolio Items Per Page',
					'default' => '10',
				),
				array (
					'desc' => 'Select the layout for only the archive/category pages.',
					'id' => 'portfolio_archive_layout',
					'type' => 'select',
					'options' => array (
						'Portfolio One Column' => 'Portfolio One Column',
						'Portfolio Two Column' => 'Portfolio Two Column',
						'Portfolio Three Column' => 'Portfolio Three Column',
						'Portfolio Four Column' => 'Portfolio Four Column',
						'Portfolio Five Column' => 'Portfolio Five Column',
						'Portfolio Six Column' => 'Portfolio Six Column',
						'Portfolio One Column Text' => 'Portfolio One Column Text',
						'Portfolio Two Column Text' => 'Portfolio Two Column Text',
						'Portfolio Three Column Text' => 'Portfolio Three Column Text',
						'Portfolio Four Column Text' => 'Portfolio Four Column Text',
						'Portfolio Five Column Text' => 'Portfolio Five Column Text',
						'Portfolio Six Column Text' => 'Portfolio Six Column Text',
						'Portfolio Grid' => 'Portfolio Grid',
					),
					'title' => 'Portfolio Archive/Category Layout',
					'default' => 'Portfolio One Column',
				),
				array (
					'desc' => 'Insert the amount of spacing between portfolio items without \'px\'.<br />ex: 12',
					'id' => 'portfolio_column_spacing',
					'type' => 'text',
					'title' => 'Portfolio Archive/Category Column Spacing',
					'default' => '12',
				),
				array (
					'desc' => 'Choose to show a text excerpt or full content.',
					'id' => 'portfolio_content_length',
					'type' => 'select',
					'options' => array (
						'Excerpt' => 'Excerpt',
						'Full Content' => 'Full Content',
					),
					'title' => 'Excerpt or Full Portfolio Content',
					'default' => 'Excerpt',
				),
				array (
					'desc' => 'Insert the number of words you want to show in the post excerpts.',
					'id' => 'excerpt_length_portfolio',
					'type' => 'text',
					'title' => 'Excerpt Length',
					'default' => '55',
				),
				array (
					'desc' => 'Check the box if you want to strip HTML from the excerpt content only.',
					'id' => 'portfolio_strip_html_excerpt',
					'type' => 'checkbox',
					'title' => 'Strip HTML from Excerpt',
					'default' => 1,
				),
				array (
					'desc' => 'Select the pagination type for Portfolio layouts.',
					'id' => 'grid_pagination_type',
					'type' => 'select',
					'options' => array (
						'Pagination' => 'Pagination',
						'Infinite Scroll' => 'Infinite Scroll',
						'load_more_button' => 'Load More Button',
					),
					'title' => 'Pagination Type',
					'default' => 'Pagination',
				),
				array (
					'desc' => 'Select if the portfolio text layouts are boxed or unboxed.',
					'id' => 'portfolio_text_layout',
					'type' => 'select',
					'options' => array (
						'boxed' => 'Boxed',
						'unboxed' => 'Unboxed',
					),
					'title' => 'Portfolio Text Layout',
					'default' => 'unboxed',
				),
				array (
					'desc' => 'The slug name cannot be the same name as your portfolio page or the layout will break. This option changes the permalink when you use the permalink type as %postname%. <strong>Make sure to regenerate permalinks.</strong>',
					'id' => 'portfolio_slug',
					'type' => 'text',
					'title' => 'Portfolio Slug',
					'default' => 'portfolio-items',
				),
				array (
					'desc' => 'Choose if the featured images are fixed (cropped) or auto (full image ratio) for all portfolio column page templates. IMPORTANT: Fixed images work best with smaller site widths. Auto images work best with larger site widths.',
					'id' => 'portfolio_featured_image_size',
					'type' => 'select',
					'options' => array (
						'cropped' => 'Fixed',
						'full' => 'Auto',
					),
					'title' => 'Portfolio Featured Image Size ',
					'default' => 'cropped',
				),
				array (
					'id' => 'blog_single_post',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Portfolio Single Post Page Options</h3>',
				),
				array (
					'desc' => 'Check the box to disable previous/next pagination.',
					'id' => 'portfolio_pn_nav',
					'type' => 'checkbox',
					'title' => 'Disable Previous/Next Pagination',
				),
				array (
					'desc' => 'Check the box to display featured images and videos on single post pages.',
					'id' => 'portfolio_featured_images',
					'type' => 'checkbox',
					'title' => 'Featured Image / Video on Single Post Page',
					'default' => 1,
				),
				array (
					'desc' => 'Disable the 1st featured image on single post pages.',
					'id' => 'portfolio_disable_first_featured_image',
					'type' => 'checkbox',
					'title' => 'Disable First Featured Image',
				),
				array (
					'desc' => 'Choose if the featured image is full or half width.',
					'id' => 'portfolio_featured_image_width',
					'type' => 'select',
					'options' => array (
						'full' => 'Full Width',
						'half' => 'Half Width',
					),
					'title' => 'Width (Content Columns for Featured Image)',
					'default' => 'No',
				),
				array (
					'desc' => 'Choose to set posts to 100% browser width.',
					'id' => 'portfolio_width_100',
					'type' => 'checkbox',
					'title' => 'Use 100% Width Page',
				),
				array (
					'desc' => 'Choose to show or hide the project description title.',
					'id' => 'portfolio_project_desc_title',
					'type' => 'checkbox',
					'title' => 'Show Project Description Title',
					'default' => 1,
				),
				array (
					'desc' => 'Choose to show or hide the project details text.',
					'id' => 'portfolio_project_details',
					'type' => 'checkbox',
					'title' => 'Show Project Details',
					'default' => 1,
				),
				array (
					'desc' => 'Choose to open the single post page, project url and copyright url links in a new window..',
					'id' => 'portfolio_link_icon_target',
					'type' => 'checkbox',
					'title' => 'Open Post Links In New Window',
				),
				array (
					'desc' => 'Check the box to enable comments on portfolio items.',
					'id' => 'portfolio_comments',
					'type' => 'checkbox',
					'title' => 'Show Comments',
				),
				array (
					'desc' => 'Check the box to enable Author on portfolio items.',
					'id' => 'portfolio_author',
					'type' => 'checkbox',
					'title' => 'Show Author',
				),
				array (
					'desc' => 'Check the box to display the social sharing box.',
					'id' => 'portfolio_social_sharing_box',
					'type' => 'checkbox',
					'title' => 'Social Sharing Box',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to display related posts.',
					'id' => 'portfolio_related_posts',
					'type' => 'checkbox',
					'title' => 'Related Posts',
					'default' => 1,
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_social_sharing_box',
			'title' => 'Social Sharing Box',
			'fields' => array (
				array (
					'id' => 'social_share_box_icon_options_title',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Social Share Box Icon Options</h3>',
				),
				array (
					'desc' => 'Insert a tagline for the social sharing boxes.',
					'id' => 'sharing_social_tagline',
					'type' => 'text',
					'title' => 'Social Sharing Box Tagline',
					'default' => 'Share This Story, Choose Your Platform!',
				),
				array (
					'desc' => 'Controls the background color of the social share box.',
					'id' => 'social_bg_color',
					'type' => 'color',
					'title' => 'Social Share Box Background Color',
					'default' => '#f6f6f6',
				),
				array (
					'desc' => 'In pixels, default is 16',
					'id' => 'sharing_social_links_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Social Sharing Box Icons Font Size',
					'default' => '16',
				),
				array (
					'desc' => 'Select a custom social icon color. Use one hex value for all or separate by | symbol for multi-color. ex: #AA0000|#00AA00|#0000AA',
					'id' => 'sharing_social_links_icon_color',
					'type' => 'color',
					'title' => 'Social Sharing Box Custom Icons Color',
					'default' => '#bebdbd',
				),
				array (
					'desc' => 'Controls whether each icon is displayed in a small box.',
					'id' => 'sharing_social_links_boxed',
					'type' => 'select',
					'options' => array (
						'No' => 'No',
						'Yes' => 'Yes',
					),
					'title' => 'Social Sharing Box Icons Boxed',
					'default' => 'No',
				),
				array (
					'desc' => 'Select a custom social icon box color. Use one hex value for all or separate by | symbol for multi-color. ex: #AA0000|#00AA00|#0000AA',
					'id' => 'sharing_social_links_box_color',
					'type' => 'color',
					'title' => 'Social Sharing Box Icons Custom Box Color',
					'default' => '#e8e8e8',
				),
				array (
					'desc' => 'Box radius for the social icons. In pixels, ex: 4px.',
					'id' => 'sharing_social_links_boxed_radius',
					'type' => 'text',
					'title' => 'Social Sharing Box Icons Boxed Radius',
					'default' => '4px',
				),
				array (
					'desc' => 'In pixels, default is 8',
					'id' => 'sharing_social_links_boxed_padding',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Social Sharing Box Icons Boxed Padding',
					'default' => '8',
				),
				array (
					'desc' => 'Controls the tooltip position of the social icons in the sharing box.',
					'id' => 'sharing_social_links_tooltip_placement',
					'type' => 'select',
					'options' => array (
						'Top' => 'Top',
						'Right' => 'Right',
						'Bottom' => 'Bottom',
						'Left' => 'Left',
						'None' => 'None',
					),
					'title' => 'Social Sharing Box Icons Tooltip Position',
					'default' => 'Top',
				),
				array (
					'id' => 'social_share_box_links_title',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Social Share Box Links</h3>',
				),
				array (
					'desc' => 'Check the box to show the facebook sharing icon in blog posts.',
					'id' => 'sharing_facebook',
					'type' => 'checkbox',
					'title' => 'Facebook',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to show the twitter sharing icon in blog posts.',
					'id' => 'sharing_twitter',
					'type' => 'checkbox',
					'title' => 'Twitter',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to show the reddit sharing icon in blog posts.',
					'id' => 'sharing_reddit',
					'type' => 'checkbox',
					'title' => 'Reddit',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to show the linkedin sharing icon in blog posts.',
					'id' => 'sharing_linkedin',
					'type' => 'checkbox',
					'title' => 'LinkedIn',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to show the g+ sharing icon in blog posts.',
					'id' => 'sharing_google',
					'type' => 'checkbox',
					'title' => 'Google Plus',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to show the tumblr sharing icon in blog posts.',
					'id' => 'sharing_tumblr',
					'type' => 'checkbox',
					'title' => 'Tumblr',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to show the pinterest sharing icon in blog posts.',
					'id' => 'sharing_pinterest',
					'type' => 'checkbox',
					'title' => 'Pinterest',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to show the vk sharing icon in blog posts.',
					'id' => 'sharing_vk',
					'type' => 'checkbox',
					'title' => 'VK',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to show the email sharing icon in blog posts.',
					'id' => 'sharing_email',
					'type' => 'checkbox',
					'title' => 'Email',
					'default' => 1,
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_social_media',
			'title' => 'Social Media',
			'fields' => array (
				array (
					'id' => 'social_sorter',
					'type' => 'info',
					'fields' => array (
						array (
							'name' => 'Facebook',
							'desc' => 'Insert your custom link to show the Facebook icon. Leave blank to hide icon.',
							'id' => 'facebook_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'Flickr',
							'desc' => 'Insert your custom link to show the Flickr icon. Leave blank to hide icon.',
							'id' => 'flickr_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'RSS',
							'desc' => 'Insert your custom link to show the RSS icon. Leave blank to hide icon.',
							'id' => 'rss_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'Twitter',
							'desc' => 'Insert your custom link to show the Twitter icon. Leave blank to hide icon.',
							'id' => 'twitter_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'Vimeo',
							'desc' => 'Insert your custom link to show the Vimeo icon. Leave blank to hide icon.',
							'id' => 'vimeo_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'Youtube',
							'desc' => 'Insert your custom link to show the Youtube icon. Leave blank to hide icon.',
							'id' => 'youtube_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'Instagram',
							'desc' => 'Insert your custom link to show the Instagram icon. Leave blank to hide icon.',
							'id' => 'instagram_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'Pinterest',
							'desc' => 'Insert your custom link to show the Pinterest icon. Leave blank to hide icon.',
							'id' => 'pinterest_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'Tumblr',
							'desc' => 'Insert your custom link to show the Tumblr icon. Leave blank to hide icon.',
							'id' => 'tumblr_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'Google+',
							'desc' => 'Insert your custom link to show the Google+ icon. Leave blank to hide icon.',
							'id' => 'google_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'Dribbble',
							'desc' => 'Insert your custom link to show the Dribbble icon. Leave blank to hide icon.',
							'id' => 'dribbble_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'Digg',
							'desc' => 'Insert your custom link to show the Digg icon. Leave blank to hide icon.',
							'id' => 'digg_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'LinkedIn',
							'desc' => 'Insert your custom link to show the LinkedIn icon. Leave blank to hide icon.',
							'id' => 'linkedin_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'Blogger',
							'desc' => 'Insert your custom link to show the Blogger icon. Leave blank to hide icon.',
							'id' => 'blogger_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'Skype',
							'desc' => 'Insert your custom link to show the Skype icon. Leave blank to hide icon.',
							'id' => 'skype_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'Forrst',
							'desc' => 'Insert your custom link to show the Forrst icon. Leave blank to hide icon.',
							'id' => 'forrst_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'Myspace',
							'desc' => 'Insert your custom link to show the Myspace icon. Leave blank to hide icon.',
							'id' => 'myspace_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'Deviantart',
							'desc' => 'Insert your custom link to show the Deviantart icon. Leave blank to hide icon.',
							'id' => 'deviantart_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'Yahoo',
							'desc' => 'Insert your custom link to show the Yahoo icon. Leave blank to hide icon.',
							'id' => 'yahoo_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'Reddit',
							'desc' => 'Insert your custom link to show the Reddit icon. Leave blank to hide icon.',
							'id' => 'reddit_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'Paypal',
							'desc' => 'Insert your custom link to show the Paypal icon. Leave blank to hide icon.',
							'id' => 'paypal_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'Dropbox',
							'desc' => 'Insert your custom link to show the Dropbox icon. Leave blank to hide icon.',
							'id' => 'dropbox_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'Soundcloud',
							'desc' => 'Insert your custom link to show the Soundcloud icon. Leave blank to hide icon.',
							'id' => 'soundcloud_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'VK',
							'desc' => 'Insert your custom link to show the VK icon. Leave blank to hide icon.',
							'id' => 'vk_link',
							'std' => '',
							'type' => 'text',
						),
						array (
							'name' => 'Email Address',
							'desc' => 'Insert your custom link to show the mail icon. Leave blank to hide icon.',
							'id' => 'email_link',
							'std' => '',
							'type' => 'text',
						),
					),
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(3) {
		["id"]=>
		string(13) "social_sorter"
		["type"]=>
		string(10) "oxo_sorter"
		["fields"]=>array(25) {
			[0]=>array(5) {
				["name"]=>
				string(8) "Facebook"
				["desc"]=>
				string(76) "Insert your custom link to show the Facebook icon. Leave blank to hide icon."
				["id"]=>
				string(13) "facebook_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[1]=>array(5) {
				["name"]=>
				string(6) "Flickr"
				["desc"]=>
				string(74) "Insert your custom link to show the Flickr icon. Leave blank to hide icon."
				["id"]=>
				string(11) "flickr_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[2]=>array(5) {
				["name"]=>
				string(3) "RSS"
				["desc"]=>
				string(71) "Insert your custom link to show the RSS icon. Leave blank to hide icon."
				["id"]=>
				string(8) "rss_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[3]=>array(5) {
				["name"]=>
				string(7) "Twitter"
				["desc"]=>
				string(75) "Insert your custom link to show the Twitter icon. Leave blank to hide icon."
				["id"]=>
				string(12) "twitter_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[4]=>array(5) {
				["name"]=>
				string(5) "Vimeo"
				["desc"]=>
				string(73) "Insert your custom link to show the Vimeo icon. Leave blank to hide icon."
				["id"]=>
				string(10) "vimeo_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[5]=>array(5) {
				["name"]=>
				string(7) "Youtube"
				["desc"]=>
				string(75) "Insert your custom link to show the Youtube icon. Leave blank to hide icon."
				["id"]=>
				string(12) "youtube_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[6]=>array(5) {
				["name"]=>
				string(9) "Instagram"
				["desc"]=>
				string(77) "Insert your custom link to show the Instagram icon. Leave blank to hide icon."
				["id"]=>
				string(14) "instagram_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[7]=>array(5) {
				["name"]=>
				string(9) "Pinterest"
				["desc"]=>
				string(77) "Insert your custom link to show the Pinterest icon. Leave blank to hide icon."
				["id"]=>
				string(14) "pinterest_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[8]=>array(5) {
				["name"]=>
				string(6) "Tumblr"
				["desc"]=>
				string(74) "Insert your custom link to show the Tumblr icon. Leave blank to hide icon."
				["id"]=>
				string(11) "tumblr_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[9]=>array(5) {
				["name"]=>
				string(7) "Google+"
				["desc"]=>
				string(75) "Insert your custom link to show the Google+ icon. Leave blank to hide icon."
				["id"]=>
				string(11) "google_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[10]=>array(5) {
				["name"]=>
				string(8) "Dribbble"
				["desc"]=>
				string(76) "Insert your custom link to show the Dribbble icon. Leave blank to hide icon."
				["id"]=>
				string(13) "dribbble_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[11]=>array(5) {
				["name"]=>
				string(4) "Digg"
				["desc"]=>
				string(72) "Insert your custom link to show the Digg icon. Leave blank to hide icon."
				["id"]=>
				string(9) "digg_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[12]=>array(5) {
				["name"]=>
				string(8) "LinkedIn"
				["desc"]=>
				string(76) "Insert your custom link to show the LinkedIn icon. Leave blank to hide icon."
				["id"]=>
				string(13) "linkedin_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[13]=>array(5) {
				["name"]=>
				string(7) "Blogger"
				["desc"]=>
				string(75) "Insert your custom link to show the Blogger icon. Leave blank to hide icon."
				["id"]=>
				string(12) "blogger_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[14]=>array(5) {
				["name"]=>
				string(5) "Skype"
				["desc"]=>
				string(73) "Insert your custom link to show the Skype icon. Leave blank to hide icon."
				["id"]=>
				string(10) "skype_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[15]=>array(5) {
				["name"]=>
				string(6) "Forrst"
				["desc"]=>
				string(74) "Insert your custom link to show the Forrst icon. Leave blank to hide icon."
				["id"]=>
				string(11) "forrst_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[16]=>array(5) {
				["name"]=>
				string(7) "Myspace"
				["desc"]=>
				string(75) "Insert your custom link to show the Myspace icon. Leave blank to hide icon."
				["id"]=>
				string(12) "myspace_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[17]=>array(5) {
				["name"]=>
				string(10) "Deviantart"
				["desc"]=>
				string(78) "Insert your custom link to show the Deviantart icon. Leave blank to hide icon."
				["id"]=>
				string(15) "deviantart_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[18]=>array(5) {
				["name"]=>
				string(5) "Yahoo"
				["desc"]=>
				string(73) "Insert your custom link to show the Yahoo icon. Leave blank to hide icon."
				["id"]=>
				string(10) "yahoo_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[19]=>array(5) {
				["name"]=>
				string(6) "Reddit"
				["desc"]=>
				string(74) "Insert your custom link to show the Reddit icon. Leave blank to hide icon."
				["id"]=>
				string(11) "reddit_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[20]=>array(5) {
				["name"]=>
				string(6) "Paypal"
				["desc"]=>
				string(74) "Insert your custom link to show the Paypal icon. Leave blank to hide icon."
				["id"]=>
				string(11) "paypal_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[21]=>array(5) {
				["name"]=>
				string(7) "Dropbox"
				["desc"]=>
				string(75) "Insert your custom link to show the Dropbox icon. Leave blank to hide icon."
				["id"]=>
				string(12) "dropbox_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[22]=>array(5) {
				["name"]=>
				string(10) "Soundcloud"
				["desc"]=>
				string(78) "Insert your custom link to show the Soundcloud icon. Leave blank to hide icon."
				["id"]=>
				string(15) "soundcloud_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[23]=>array(5) {
				["name"]=>
				string(2) "VK"
				["desc"]=>
				string(70) "Insert your custom link to show the VK icon. Leave blank to hide icon."
				["id"]=>
				string(7) "vk_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
			[24]=>array(5) {
				["name"]=>
				string(13) "Email Address"
				["desc"]=>
				string(72) "Insert your custom link to show the mail icon. Leave blank to hide icon."
				["id"]=>
				string(10) "email_link"
				["std"]=>
				string(0) ""
				["type"]=>
				string(4) "text"
			}
		}
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'custom_color_scheme_element',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Custom Social Icon</h3>',
				),
				array (
					'desc' => 'This is the icon name that shows in the hover tooltip.',
					'id' => 'custom_icon_name',
					'type' => 'text',
					'title' => 'Custom Icon Name',
				),
				array (
					'desc' => 'Select an image file for your custom icon.',
					'id' => 'custom_icon_image',
					'type' => 'media',
					'title' => 'Custom Icon Image',
					'url' => true,
				),
				array (
					'desc' => 'Select an image file for the retina version of the icon. It should be 2x the size of main icon.',
					'id' => 'custom_icon_image_retina',
					'type' => 'media',
					'title' => 'Custom Icon Image Retina',
					'url' => true,
				),
				array (
					'desc' => 'If retina icon is added, enter the standard icon (1x) version width, do not enter the retina icon width.',
					'id' => 'retina_icon_width',
					'type' => 'text',
					'title' => 'Standard Icon Width for Retina Icon',
				),
				array (
					'desc' => 'If retina icon is added, enter the standard icon (1x) version height, do not enter the retina icon height.',
					'id' => 'retina_icon_height',
					'type' => 'text',
					'title' => 'Standard Icon Height for Retina Icon',
				),
				array (
					'desc' => 'Insert a link for your custom icon.',
					'id' => 'custom_icon_link',
					'type' => 'text',
					'title' => 'Custom Icon Link',
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_slideshows',
			'title' => 'Slideshows',
			'fields' => array (
				array (
					'desc' => 'This option controls the number of featured image boxes for blog/portfolio slideshows.',
					'id' => 'posts_slideshow_number',
					'type' => 'text',
					'title' => 'Posts Slideshow Images',
					'default' => '5',
				),
				array (
					'desc' => 'Check the box to autoplay the slideshow.',
					'id' => 'slideshow_autoplay',
					'type' => 'checkbox',
					'title' => 'Autoplay',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to enable smooth height on slideshows when using images with different heights. Please note, smooth height is disabled on blog grid layout.',
					'id' => 'slideshow_smooth_height',
					'type' => 'checkbox',
					'title' => 'Enable Smooth Height',
				),
				array (
					'desc' => 'Controls the speed of slideshows for the [slider] shortcode and sliders within posts. ex: 1000 = 1 second.',
					'id' => 'slideshow_speed',
					'type' => 'text',
					'title' => 'Slideshow Speed',
					'default' => '7000',
				),
				array (
					'desc' => 'Check the box if you want to show pagination circles below a video slide for the slider shortcode. Leave it unchecked to hide them on video slides.',
					'id' => 'pagination_video_slide',
					'type' => 'checkbox',
					'title' => 'Pagination Circles Below Video Slides',
				),
				array (
					'desc' => 'Enter a pixel value for width, ex: 30px',
					'id' => 'slider_nav_box_width',
					'type' => 'text',
					'title' => 'Navigation Box Width',
					'default' => '30px',
				),
				array (
					'desc' => 'Enter a pixel value for height, ex: 30px',
					'id' => 'slider_nav_box_height',
					'type' => 'text',
					'title' => 'Navigation Box Height',
					'default' => '30px',
				),
				array (
					'desc' => 'Enter a pixel value for the arrow size, ex: 14px',
					'id' => 'slider_arrow_size',
					'type' => 'text',
					'title' => 'Navigation Arrow Size',
					'default' => '14px',
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_elastic_slider',
			'title' => 'Elastic Slider',
			'fields' => array (
				array (
					'desc' => 'In pixels or percentage, ex: 100% or 100.',
					'id' => 'tfes_slider_width',
					'type' => 'text',
					'title' => 'Slider Width',
					'default' => '100%',
				),
				array (
					'desc' => 'In pixels, ex: 100px.',
					'id' => 'tfes_slider_height',
					'type' => 'text',
					'title' => 'Slider Height',
					'default' => '400px',
				),
				array (
					'desc' => 'Slides animate from sides or center.',
					'id' => 'tfes_animation',
					'options' => array (
						'sides' => 'sides',
						'center' => 'center',
					),
					'type' => 'select',
					'title' => 'Animation',
					'default' => 'sides',
				),
				array (
					'desc' => 'Check the box to autoplay the slides.',
					'id' => 'tfes_autoplay',
					'type' => 'checkbox',
					'title' => 'Autoplay',
					'default' => 1,
				),
				array (
					'desc' => 'Select the slideshow speed, 1000 = 1 second.',
					'id' => 'tfes_interval',
					'type' => 'text',
					'title' => 'Slideshow Interval',
					'default' => '3000',
				),
				array (
					'desc' => 'Select the animation speed, 1000 = 1 second.',
					'id' => 'tfes_speed',
					'type' => 'text',
					'title' => 'Sliding Speed',
					'default' => '800',
				),
				array (
					'desc' => 'Enter the width for thumbnail without \'px\' ex: 100.',
					'id' => 'tfes_width',
					'type' => 'text',
					'title' => 'Thumbnail Width',
					'default' => '150',
				),
				array (
					'desc' => 'In pixels, default is 42',
					'id' => 'es_title_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Title Font Size',
					'default' => '42',
				),
				array (
					'desc' => 'In pixels, default is 20',
					'id' => 'es_caption_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Caption Font Size',
					'default' => '20',
				),
				array (
					'desc' => 'Controls the text color of the title font.',
					'id' => 'es_title_color',
					'type' => 'color',
					'title' => 'Title Color',
					'default' => '#333333',
				),
				array (
					'desc' => 'Controls the text color of the caption font.',
					'id' => 'es_caption_color',
					'type' => 'color',
					'title' => 'Caption Color',
					'default' => '#747474',
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_lightbox',
			'title' => 'Lightbox',
			'fields' => array (
				array (
					'id' => 'lightbox',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Lightbox Options</h3>',
				),
				array (
					'desc' => 'Check to disable Lightbox.',
					'id' => 'status_lightbox',
					'type' => 'checkbox',
					'title' => 'Disable Lightbox',
				),
				array (
					'desc' => 'Check the box to disable Lightbox only on single posts and portfolio pages.',
					'id' => 'status_lightbox_single',
					'type' => 'checkbox',
					'title' => 'Disable Lightbox On Single Post Pages Only',
				),
				array (
					'desc' => 'Select what the lightbox will display for portfolio and blog posts.',
					'id' => 'lightbox_behavior',
					'type' => 'select',
					'options' => array (
						'all' => 'First featured image of every post',
						'individual' => 'Only featured images of individual post',
					),
					'title' => 'Lightbox Behavior',
					'default' => 'all',
				),
				array (
					'desc' => 'Choose a skin for the lightbox.',
					'id' => 'lightbox_skin',
					'type' => 'select',
					'options' => array (
						'light' => 'Light',
						'dark' => 'Dark',
						'mac' => 'Mac',
						'metro-black' => 'Metro Black',
						'metro-white' => 'Metro White',
						'parade' => 'Parade',
						'smooth' => 'Smooth',
					),
					'title' => 'Lightbox Skin',
					'default' => 'metro-white',
				),
				array (
					'desc' => 'Choose position of thumbnails.',
					'id' => 'lightbox_path',
					'type' => 'select',
					'options' => array (
						'vertical' => 'Right',
						'horizontal' => 'Bottom',
					),
					'title' => 'Thumbnails Position',
					'default' => 'vertical',
				),
				array (
					'desc' => 'Set the speed of the animation.',
					'id' => 'lightbox_animation_speed',
					'type' => 'select',
					'options' => array (
						'Fast' => 'Fast',
						'Slow' => 'Slow',
						'Normal' => 'Normal',
					),
					'title' => 'Animation Speed',
					'default' => 'Normal',
				),
				array (
					'desc' => 'Check the box to show arrows.',
					'id' => 'lightbox_arrows',
					'type' => 'checkbox',
					'title' => 'Show Arrows',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to show the gallery start and stop button.',
					'id' => 'lightbox_gallery',
					'type' => 'checkbox',
					'title' => 'Show Gallery Start/Stop Button',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to autoplay the lightbox gallery.',
					'id' => 'lightbox_autoplay',
					'type' => 'checkbox',
					'title' => 'Autoplay the Lightbox Gallery',
				),
				array (
					'desc' => 'If autoplay is enabled, set the slideshow speed, 1000 = 1 second. Speed needs to be 1000ms at least.',
					'id' => 'lightbox_slideshow_speed',
					'type' => 'text',
					'title' => 'Slideshow Speed',
					'default' => '5000',
				),
				array (
					'desc' => 'Set the opacity of background, <br />0.1 (lowest) to 1 (highest).',
					'id' => 'lightbox_opacity',
					'type' => 'text',
					'title' => 'Background Opacity',
					'default' => '0.9',
				),
				array (
					'desc' => 'Check the box to show the image title in the lightbox.',
					'id' => 'lightbox_title',
					'type' => 'checkbox',
					'title' => 'Show Title',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to show the image caption in the lightbox.',
					'id' => 'lightbox_desc',
					'type' => 'checkbox',
					'title' => 'Show Caption',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to show social sharing buttons on lightbox.',
					'id' => 'lightbox_social',
					'type' => 'checkbox',
					'title' => 'Social Sharing',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to deeplink images in the lightbox.',
					'id' => 'lightbox_deeplinking',
					'type' => 'checkbox',
					'title' => 'Deeplinking',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to show post images that are inside the post content area in the lightbox.',
					'id' => 'lightbox_post_images',
					'type' => 'checkbox',
					'title' => 'Show Post Images in Lightbox',
					'default' => 1,
				),
				array (
					'desc' => 'Set the width that will be used for videos inside the lightbox. In pixel, ex. 800px',
					'id' => 'lightbox_video_width',
					'type' => 'text',
					'title' => 'Slideshow Video Width',
					'default' => '1280px',
				),
				array (
					'desc' => 'Set the height that will be used for videos inside the lightbox. In pixel, ex. 600px',
					'id' => 'lightbox_video_height',
					'type' => 'text',
					'title' => 'Slideshow Video Height',
					'default' => '720px',
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_contact',
			'title' => 'Contact',
			'fields' => array (
				array (
					'desc' => 'Enter the email adress the form will be sent to.',
					'id' => 'email_address',
					'type' => 'text',
					'title' => 'Email Address',
				),
				array (
					'desc' => 'Set the position of the contact form comment area with respect to the other input fields.',
					'id' => 'contact_comment_position',
					'type' => 'select',
					'options' => array (
						'above' => 'Above',
						'below' => 'Below',
					),
					'title' => 'Contact Form Commment Area Position',
					'default' => 'below',
				),
				array (
					'id' => 'recaptcha',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'ReCaptcha',
					'default' => '<h3 style=\'margin: 0;\'>ReCaptcha Spam Options</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(9) "recaptcha"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(9) "ReCaptcha"
		["default"]=>
		string(50) "<h3 style=\'margin: 0;\'>ReCaptcha Spam Options</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Follow the steps in <a href=\'http://oxosolutions.com/products/wordpress-themes/aione/\'> our docs</a> to get key.',
					'id' => 'recaptcha_public',
					'type' => 'text',
					'title' => 'ReCaptcha Site Key',
				),
				array (
					'desc' => 'Follow the steps in <a href=\'http://oxosolutions.com/products/wordpress-themes/aione/\'> our docs</a> to get key.',
					'id' => 'recaptcha_private',
					'type' => 'text',
					'title' => 'ReCaptcha Secret Key',
				),
				array (
					'desc' => 'Select the recaptcha color scheme.',
					'id' => 'recaptcha_color_scheme',
					'type' => 'select',
					'options' => array (
						'light' => 'Light',
						'dark' => 'Dark',
					),
					'title' => 'ReCaptcha Color Scheme',
					'default' => 'Clean',
				),
				array (
					'id' => 'recaptcha',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'ReCaptcha',
					'default' => '<h3 style=\'margin: 0;\'>ReCaptcha Spam Options</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(9) "recaptcha"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(9) "ReCaptcha"
		["default"]=>
		string(50) "<h3 style=\'margin: 0;\'>ReCaptcha Spam Options</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'google_map',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'Google Map',
					'default' => '<h3 style=\'margin: 0;\'>Google Map Options</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(10) "google_map"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(10) "Google Map"
		["default"]=>
		string(46) "<h3 style=\'margin: 0;\'>Google Map Options</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Select the type of google map to show on the contact page.',
					'id' => 'gmap_type',
					'options' => array (
						'roadmap' => 'roadmap',
						'satellite' => 'satellite',
						'hybrid' => 'hybrid',
						'terrain' => 'terrain',
					),
					'type' => 'select',
					'title' => 'Google Map Type',
					'default' => 'roadmap',
				),
				array (
					'desc' => 'In pixels or percentage, ex: 100% or 100px.',
					'id' => 'gmap_width',
					'type' => 'text',
					'title' => 'Google Map Width',
					'default' => '100%',
				),
				array (
					'desc' => 'In pixels, ex: 100px.',
					'id' => 'gmap_height',
					'type' => 'text',
					'title' => 'Google Map Height',
					'default' => '415px',
				),
				array (
					'desc' => 'This will only be applied to maps that are not 100% width. It controls the distance to menu/page title. In pixels, ex: 100px.',
					'id' => 'gmap_topmargin',
					'type' => 'text',
					'title' => 'Google Map Top Margin',
					'default' => '55px',
				),
				array (
					'desc' => 'Add your address to the location you wish to show on the map. Single address ex: 775 New York Ave, Brooklyn, Kings, New York 11203. If the location is off, please try to use long/lat coordinates with latlng=. ex: latlng=12.381068,-1.492711.<br />For multiple addresses, separate addresses by using the | symbol. ex: Address 1|Address 2|Address 3.',
					'id' => 'gmap_address',
					'type' => 'textarea',
					'title' => 'Google Map Address',
					'default' => '775 New York Ave, Brooklyn, Kings, New York 11203',
				),
				array (
					'desc' => 'Higher number will be more zoomed in.',
					'id' => 'map_zoom_level',
					'type' => 'text',
					'title' => 'Map Zoom Level',
					'default' => '8',
				),
				array (
					'desc' => 'Check the box to hide the address pin.',
					'id' => 'map_pin',
					'type' => 'checkbox',
					'title' => 'Hide Address Pin',
				),
				array (
					'desc' => 'Check the box to enable address pin animation.',
					'id' => 'gmap_pin_animation',
					'type' => 'checkbox',
					'title' => 'Address Pin Animation',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to keep the popup graphic with address info hidden when the google map loads. It will only show when the pin on the map is clicked.',
					'id' => 'map_popup',
					'type' => 'checkbox',
					'title' => 'Show Map Popup On Click',
				),
				array (
					'desc' => 'Check the box to disable scrollwheel on google maps.',
					'id' => 'map_scrollwheel',
					'type' => 'checkbox',
					'title' => 'Disable Map Scrollwheel',
				),
				array (
					'desc' => 'Check the box to disable scale on google maps.',
					'id' => 'map_scale',
					'type' => 'checkbox',
					'title' => 'Disable Map Scale',
				),
				array (
					'desc' => 'Check the box to disable zoom control icon and pan control icon on google maps.',
					'id' => 'map_zoomcontrol',
					'type' => 'checkbox',
					'title' => 'Disable Map Zoom & Pan Control Icons',
				),
				array (
					'id' => 'google_map',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'Google Map',
					'default' => '<h3 style=\'margin: 0;\'>Google Map Options</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(10) "google_map"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(10) "Google Map"
		["default"]=>
		string(46) "<h3 style=\'margin: 0;\'>Google Map Options</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'google_map',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'Google Map Design Styling',
					'default' => '<h3 style=\'margin: 0;\'>Google Map Design Styling</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(10) "google_map"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(25) "Google Map Design Styling"
		["default"]=>
		string(53) "<h3 style=\'margin: 0;\'>Google Map Design Styling</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Choose default styling for classic google map styles. Choose theme styling for our custom style. Choose custom styling to make your own with the advanced options below.',
					'id' => 'map_styling',
					'options' => array (
						'default' => 'Default Styling',
						'theme' => 'Theme Styling',
						'custom' => 'Custom Styling',
					),
					'type' => 'select',
					'title' => 'Select the Map Styling',
					'default' => 'default',
				),
				array (
					'desc' => 'Custom styling setting only. Pick an overlaying color for the map. Works best with "roadmap" type.',
					'id' => 'map_overlay_color',
					'type' => 'color',
					'title' => 'Map Overlay Color',
				),
				array (
					'desc' => 'Custom styling setting only. Choose between default or custom info box.',
					'id' => 'map_infobox_styling',
					'options' => array (
						'default' => 'Default Infobox',
						'custom' => 'Custom Infobox',
					),
					'type' => 'select',
					'title' => 'Info Box Styling',
					'default' => 'default',
				),
				array (
					'desc' => 'Custom styling setting only. Type in custom info box content to replace address string. For multiple addresses, separate info box contents by using the | symbol. ex: InfoBox 1|InfoBox 2|InfoBox 3',
					'id' => 'map_infobox_content',
					'type' => 'textarea',
					'title' => 'Info Box Content',
				),
				array (
					'desc' => 'Custom styling setting only. Pick a color for the info box background.',
					'id' => 'map_infobox_bg_color',
					'type' => 'color',
					'title' => 'Info Box Background Color',
				),
				array (
					'desc' => 'Custom styling setting only. Pick a color for the info box text.',
					'id' => 'map_infobox_text_color',
					'type' => 'color',
					'title' => 'Info Box Text Color',
				),
				array (
					'desc' => 'Custom styling setting only. Use full image urls for custom marker icons or input "theme" for our custom marker. For multiple addresses, separate icons by using the | symbol or use one for all. ex: Icon 1|Icon 2|Icon 3',
					'id' => 'map_custom_marker_icon',
					'type' => 'textarea',
					'title' => 'Custom Marker Icon',
				),
				array (
					'id' => 'google_map',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'Google Map Design Styling',
					'default' => '<h3 style=\'margin: 0;\'>Google Map Design Styling</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(10) "google_map"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(25) "Google Map Design Styling"
		["default"]=>
		string(53) "<h3 style=\'margin: 0;\'>Google Map Design Styling</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_search_page',
			'title' => 'Search Page',
			'fields' => array (
				array (
					'id' => 'search',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Search Options</h3>',
				),
				array (
					'desc' => 'Select the layout for the search results page.',
					'id' => 'search_layout',
					'type' => 'select',
					'options' => array (
						'Large' => 'Large',
						'Medium' => 'Medium',
						'Large Alternate' => 'Large Alternate',
						'Medium Alternate' => 'Medium Alternate',
						'Grid' => 'Grid',
						'Timeline' => 'Timeline',
					),
					'title' => 'Search Results Layout',
					'default' => 'Grid',
				),
				array (
					'desc' => 'Select the type of content to display in search results.',
					'id' => 'search_content',
					'type' => 'select',
					'options' => array (
						'Posts and Pages' => 'Posts and Pages',
						'Only Posts' => 'Only Posts',
						'Only Pages' => 'Only Pages',
					),
					'title' => 'Search Results Content',
					'default' => 'Posts and Pages',
				),
				array (
					'desc' => 'Check the box if you want to hide excerpt for search results.',
					'id' => 'search_excerpt',
					'type' => 'checkbox',
					'title' => 'Hide Search Results Excerpt',
				),
				array (
					'desc' => 'Set the number of search results per page.',
					'id' => 'search_results_per_page',
					'type' => 'text',
					'title' => 'Number of Search Results Per Page',
					'default' => '10',
				),
				array (
					'desc' => 'Check the box if you want to hide featured images for search results.',
					'id' => 'search_featured_images',
					'type' => 'checkbox',
					'title' => 'Hide Featured Images from Search Results',
				),
				array (
					'desc' => 'Select the position of the search bar on the search results page.',
					'id' => 'search_new_search_position',
					'type' => 'select',
					'options' => array (
						'top' => 'Above Search Results',
						'bottom' => 'Below Search Results',
						'hidden' => 'Hide',
					),
					'title' => 'Search Field Position',
					'default' => 'top',
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_extra',
			'title' => 'Extra',
			'fields' => array (
				array (
					'id' => 'misc_options',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Miscellaneous Options</h3>',
				),
				array (
					'desc' => 'Controls the side navigation animation for child pages, on click or hover.',
					'id' => 'sidenav_behavior',
					'options' => array (
						'Hover' => 'Hover',
						'Click' => 'Click',
					),
					'type' => 'select',
					'title' => 'Sidenav Behavior',
					'default' => 'hover',
				),
				array (
					'desc' => 'Check the box to enable the showing of posts without a featured image on portfolio archives and related posts/projects carousels.',
					'id' => 'featured_image_placeholder',
					'type' => 'checkbox',
					'title' => 'Image Placeholders',
					'default' => 1,
				),
				array (
					'desc' => 'Choose if the excerpt length should be based on words or characters.',
					'id' => 'excerpt_base',
					'options' => array (
						'Words' => 'Words',
						'Characters' => 'Characters',
					),
					'type' => 'select',
					'title' => 'Basis for Excerpt Length',
					'default' => 'words',
				),
				array (
					'desc' => 'Check the box to disable the read more sign [...] on excerpts throughout the site.',
					'id' => 'disable_excerpts',
					'type' => 'checkbox',
					'title' => 'Disable [...] on Excerpts',
				),
				array (
					'desc' => 'Check the box to have the read more sign [...] on excerpts link to single post page.',
					'id' => 'link_read_more',
					'type' => 'checkbox',
					'title' => 'Make [...] Link to Single Post Page',
				),
				array (
					'desc' => 'Check the box to allow comments on regular pages.',
					'id' => 'comments_pages',
					'type' => 'checkbox',
					'title' => 'Allow Comments on Pages',
				),
				array (
					'desc' => 'Check the box to disable featured images on regular pages.',
					'id' => 'featured_images_pages',
					'type' => 'checkbox',
					'title' => 'Disable Featured Images on Pages',
				),
				array (
					'desc' => 'Check the box to show featured images on FAQ archive page.',
					'id' => 'faq_featured_image',
					'type' => 'checkbox',
					'title' => 'FAQ Featured Images',
				),
				array (
					'desc' => 'Choose to show or hide filters, or to display them without \'All\'.',
					'id' => 'faq_filters',
					'options' => array (
						'yes' => 'Show',
						'yes_without_all' => 'Show without "All"',
						'no' => 'Hide',
					),
					'type' => 'select',
					'title' => 'FAQ Filters',
					'default' => 'show',
				),
				array (
					'desc' => 'Check to add \'nofollow\' attribute to all social links.',
					'id' => 'nofollow_social_links',
					'type' => 'checkbox',
					'title' => 'Add \'nofollow\' to social links',
				),
				array (
					'desc' => 'Check the box to allow social icons to open in a new window.',
					'id' => 'social_icons_new',
					'type' => 'checkbox',
					'title' => 'Open Social Icons in a New Window',
					'default' => 1,
				),
				array (
					'desc' => 'This option controls the height of all search, form input and select fields. ex: 20px.',
					'id' => 'form_input_height',
					'type' => 'text',
					'title' => 'Form Input and Select Height',
					'default' => '29px',
				),
				array (
					'desc' => 'This option controls the quality of the generated image sizes for every uploaded image. Ranges between 0 and 100 percent. Higher values lead to better image qualities but also higher file sizes.<br />NOTE: After changing this value, please (install and) run <a href="http://darlic/aione/wp-admin/plugin-install.php?tab=plugin-information&plugin=regenerate-thumbnails&TB_iframe=true&width=830&height=472" class="thickbox" title="Regenerate Thumbnails">Regenerate Thumbnails</a>',
					'id' => 'pw_jpeg_quality',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'WordPress jpeg Quality',
					'default' => '90',
				),
				array (
					'id' => 'related_posts',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Related Posts / Projects</h3>',
				),
				array (
					'desc' => 'This option controls the amount of related posts / projects that show up on each single portfolio and blog post. ex: 5',
					'id' => 'number_related_posts',
					'type' => 'text',
					'title' => 'Number of Related Posts / Projects',
					'default' => '5',
				),
				array (
					'desc' => 'Select the number of max columns to display.',
					'id' => 'related_posts_columns',
					'options' => array (
						1 => '1',
						2 => '2',
						3 => '3',
						4 => '4',
						5 => '5',
						6 => '6',
					),
					'type' => 'select',
					'title' => 'Related Posts / Projects Maximum Columns',
					'default' => '5',
				),
				array (
					'desc' => 'Insert the amount of spacing between items without \'px\'. ex: 40',
					'id' => 'related_posts_column_spacing',
					'type' => 'text',
					'title' => 'Related Posts / Projects Column Spacing',
					'default' => '44',
				),
				array (
					'desc' => 'Choose to show titles on rollover image, or below image.',
					'id' => 'related_posts_layout',
					'type' => 'select',
					'options' => array (
						'title_on_rollover' => 'Title on rollover',
						'title_below_image' => 'Title below image',
					),
					'title' => 'Related Posts / Projects Layout',
					'default' => 'title_on_rollover',
				),
				array (
					'desc' => 'Choose if the images are fixed (cropped) or auto (full image ratio) for related posts / projects. IMPORTANT: Fixed images work best with smaller site widths. Auto images work best with larger site widths.',
					'id' => 'related_posts_image_size',
					'type' => 'select',
					'options' => array (
						'cropped' => 'Fixed',
						'full' => 'Auto',
					),
					'title' => 'Related Posts / Projects Image Size',
					'default' => 'cropped',
				),
				array (
					'desc' => 'Check the box to enable to autoplay on the carousel.',
					'id' => 'related_posts_autoplay',
					'type' => 'checkbox',
					'title' => 'Related Posts / Projects Autoplay',
				),
				array (
					'desc' => 'Controls the speed of all carousel elements.	ex: 1000 = 1 second.',
					'id' => 'related_posts_speed',
					'type' => 'text',
					'title' => 'Related Posts / Projects Speed',
					'default' => '2500',
				),
				array (
					'desc' => 'Check the box to enable navigation buttons on the carousel.',
					'id' => 'related_posts_navigation',
					'type' => 'checkbox',
					'title' => 'Related Posts / Projects Show Navigation',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to enable mouse drag control on the carousel.',
					'id' => 'related_posts_swipe',
					'type' => 'checkbox',
					'title' => 'Related Posts / Projects Mouse Scroll',
				),
				array (
					'desc' => 'Insert the amount of items to scroll. Leave empty to scroll number of visible items.',
					'id' => 'related_posts_swipe_items',
					'type' => 'text',
					'title' => 'Related Posts / Projects Scroll Items',
				),
				array (
					'id' => 'rollovers',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Image Rollover Options</h3>',
				),
				array (
					'desc' => 'Check the box to show the rollover box on images.',
					'id' => 'image_rollover',
					'type' => 'checkbox',
					'title' => 'Image Rollover',
					'default' => 1,
				),
				array (
					'desc' => 'Select from which direction the rollover should start.',
					'id' => 'image_rollover_direction',
					'options' => array (
						'fade' => 'Fade',
						'left' => 'Left',
						'right' => 'Right',
						'bottom' => 'Bottom',
						'top' => 'Top',
						'center_horiz' => 'Center Horizontal',
						'center_vertical' => 'Center Vertical',
					),
					'type' => 'select',
					'title' => 'Rollover Image Direction',
					'default' => 'left',
				),
				array (
					'desc' => 'Controls the font size of the icons in the rollover. In pixels, default is 15.',
					'id' => 'image_rollover_icon_size',
					'type' => 'text',
					'title' => 'Rollover Image Icon Font Size',
					'default' => '15',
				),
				array (
					'desc' => 'Check the box to disable the link icon from image rollovers.',
					'id' => 'link_image_rollover',
					'type' => 'checkbox',
					'title' => 'Disable Link Icon From Image Rollover',
				),
				array (
					'desc' => 'Check the box to disable the image icon from image rollovers.',
					'id' => 'zoom_image_rollover',
					'type' => 'checkbox',
					'title' => 'Disable Image Icon From Image Rollover',
				),
				array (
					'desc' => 'Check the box to disable the title from image rollovers.',
					'id' => 'title_image_rollover',
					'type' => 'checkbox',
					'title' => 'Disable Title From Image Rollover',
				),
				array (
					'desc' => 'Check the box to disable the categories from image rollovers.',
					'id' => 'cats_image_rollover',
					'type' => 'checkbox',
					'title' => 'Disable Categories From Image Rollover',
				),
				array (
					'desc' => 'Check the box to disable the icon circle from images.',
					'id' => 'icon_circle_image_rollover',
					'type' => 'checkbox',
					'title' => 'Disable Icon Circle From Image Rollover',
				),
				array (
					'id' => 'rollovers',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Pagination Options</h3>',
				),
				array (
					'desc' => 'Controls the padding inside the box, ex: 10px or 10%.',
					'id' => 'pagination_box_padding',
					'type' => 'text',
					'title' => 'Pagination Box Padding',
					'default' => '2px 6px',
				),
				array (
					'desc' => 'Controls if "Previous" and "Next" text is displayed or not.',
					'id' => 'pagination_text_display',
					'type' => 'checkbox',
					'title' => 'Pagination Text Display',
					'default' => 1,
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_advanced',
			'title' => 'Advanced',
			'fields' => array (
				array (
					'id' => 'enable_disable_heading',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Enable / Disable Theme Features & Plugin Support</h3>',
				),
				array (
					'desc' => 'Check to disable smooth scrolling. This will remove the dark scrollbar and revert to the default browser scrollbar style.',
					'id' => 'smooth_scrolling',
					'type' => 'checkbox',
					'title' => 'Disable Smooth Scrolling',
					'default' => 1,
				),
				array (
					'desc' => 'Check to disable the oxo builder button on pages/posts.',
					'id' => 'disable_builder',
					'type' => 'checkbox',
					'title' => 'Disable Oxo Builder',
				),
				array (
					'desc' => 'Check to disable encoding in the Oxo Builder code block element.',
					'id' => 'disable_code_block_encoding',
					'type' => 'checkbox',
					'title' => 'Disable Code Block Encoding',
				),
				array (
					'desc' => 'Check to disable the theme\'s mega menu.',
					'id' => 'disable_megamenu',
					'type' => 'checkbox',
					'title' => 'Disable Mega Menu',
				),
				array (
					'desc' => 'Check the box to disable the Aione styles and use the default Revolution Slider styles.',
					'id' => 'aione_rev_styles',
					'type' => 'checkbox',
					'title' => 'Disable Aione Styles For Revolution Slider',
				),
				array (
					'desc' => 'Check the box to disable the Aione styles for dropdown/select fields site wide. This should be done if you experience any issues with 3rd party plugin dropdowns.',
					'id' => 'aione_styles_dropdowns',
					'type' => 'checkbox',
					'title' => 'Disable Aione Dropdown Styles',
				),
				array (
					'desc' => 'Check the box to disable CSS animations on shortcode items.',
					'id' => 'use_animate_css',
					'type' => 'checkbox',
					'title' => 'Disable CSS Animations',
				),
				array (
					'desc' => 'Check the box to disable CSS animations on mobiles only.',
					'id' => 'disable_mobile_animate_css',
					'type' => 'checkbox',
					'title' => 'Disable CSS Animations on Mobiles Only',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to disable CSS image hover animations on mobiles.',
					'id' => 'disable_mobile_image_hovers',
					'type' => 'checkbox',
					'title' => 'Disable CSS Image Hover Animations on Mobiles',
				),
				array (
					'desc' => 'Check the box to disable Youtube API scripts.',
					'id' => 'status_yt',
					'type' => 'checkbox',
					'title' => 'Disable Youtube API Scripts',
				),
				array (
					'desc' => 'Check the box to disable Vimeo API scripts.',
					'id' => 'status_vimeo',
					'type' => 'checkbox',
					'title' => 'Disable Vimeo API Scripts',
				),
				array (
					'desc' => 'Check the box to disable google map.',
					'id' => 'status_gmap',
					'type' => 'checkbox',
					'title' => 'Disable Google Map Scripts',
				),
				array (
					'desc' => 'Check the box to disable the ToTop script which adds the scrolling to top functionality.',
					'id' => 'status_totop',
					'type' => 'checkbox',
					'title' => 'Disable ToTop Script',
				),
				array (
					'desc' => 'Check the box to enable the ToTop script on mobile devices.',
					'id' => 'status_totop_mobile',
					'type' => 'checkbox',
					'title' => 'Enable ToTop Script on mobile',
				),
				array (
					'desc' => 'Check the box to disable oxo slider.',
					'id' => 'status_oxo_slider',
					'type' => 'checkbox',
					'title' => 'Disable Oxo Slider',
				),
				array (
					'desc' => 'Check the box to disable elastic slider.',
					'id' => 'status_eslider',
					'type' => 'checkbox',
					'title' => 'Disable Elastic Slider',
				),
				array (
					'desc' => 'Check the box to disable font awesome.',
					'id' => 'status_fontawesome',
					'type' => 'checkbox',
					'title' => 'Disable FontAwesome',
				),
				array (
					'desc' => 'Check the box to disable open graph meta tags which is mainly used when sharing pages on social networking sites like Facebook.',
					'id' => 'status_opengraph',
					'type' => 'checkbox',
					'title' => 'Disable Open Graph Meta Tags',
				),
				array (
					'desc' => 'Check the box to disable rich snippets data sitewide.',
					'id' => 'disable_date_rich_snippet_pages',
					'type' => 'checkbox',
					'title' => 'Disable Rich Snippets Sitewide',
				),
				array (
					'desc' => 'Enable / disable product gallery slider that is built-in with Aione. This is only useful for plugin compatibility.',
					'id' => 'disable_woo_gallery',
					'type' => 'checkbox',
					'title' => 'Disable Aione\'s Woocommerce Product Gallery Slider',
				),
				array (
					'desc' => '<strong>Notice:</strong> By default, all the javascript files are combined and minified. Activating this mode will load non-combined and non-minified javascript files, which is used for development only. This will have an impact on the performance of your site.',
					'id' => 'dev_mode',
					'type' => 'checkbox',
					'title' => 'Activate Developers Mode',
				),
				array (
					'id' => 'dynamic_css_compiler_heading',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'Dynamic CSS',
					'default' => '<h3 style=\'margin: 0;\'>Dynamic CSS</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(28) "dynamic_css_compiler_heading"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(11) "Dynamic CSS"
		["default"]=>
		string(39) "<h3 style=\'margin: 0;\'>Dynamic CSS</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Check the box to compile the dynamic CSS within the tag into a file. Please note that a separate file will be created for each of your pages & posts inside of the uploads/aione-styles folder.',
					'id' => 'dynamic_css_compiler',
					'type' => 'checkbox',
					'title' => 'Activate Compiler',
				),
				array (
					'desc' => 'Check the box to enable caching the dynamic CSS in your database.',
					'id' => 'dynamic_css_db_caching',
					'type' => 'checkbox',
					'title' => 'Enable db-caching for dynamic CSS',
					'default' => 1,
				),
				array (
					'desc' => 'For unique cases where you are using cloudflare and a cache server e.g. Varnish. Please enter your cache server IP to clear the theme options dynamic CSS cache. Please consult with your server admin for help.',
					'id' => 'cache_server_ip',
					'type' => 'text',
					'title' => 'Advanced: Cache Server IP',
				),
				array (
					'id' => 'dynamic_css_compiler_heading',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'Dynamic CSS',
					'default' => '<h3 style=\'margin: 0;\'>Dynamic CSS.</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(28) "dynamic_css_compiler_heading"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(11) "Dynamic CSS"
		["default"]=>
		string(40) "<h3 style=\'margin: 0;\'>Dynamic CSS.</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_woocommerce',
			'title' => 'WooCommerce',
			'fields' => array (
				array (
					'desc' => 'Select the design for the product boxes. This will automatically alter the grid element and grid box colors.',
					'id' => 'woocommerce_product_box_design',
					'type' => 'select',
					'options' => array (
						'classic' => 'Classic',
						'clean' => 'Clean',
					),
					'title' => 'WooCommerce Product Box Design',
					'default' => 'classic',
				),
				array (
					'desc' => 'Insert the number of products to display per page.',
					'id' => 'woo_items',
					'type' => 'text',
					'title' => 'Woocommerce Number of Products per Page',
					'default' => '12',
				),
				array (
					'desc' => 'Select the number of columns for the main shop page.',
					'id' => 'woocommerce_shop_page_columns',
					'type' => 'select',
					'options' => array (
						1 => '1',
						2 => '2',
						3 => '3',
						4 => '4',
						5 => '5',
						6 => '6',
					),
					'title' => 'Woocommerce Number of Product Columns',
					'default' => '4',
				),
				array (
					'desc' => 'Select the number of columns for the related and up-sell products on single post pages and cross-sells on cart page.',
					'id' => 'woocommerce_related_columns',
					'type' => 'select',
					'options' => array (
						1 => '1',
						2 => '2',
						3 => '3',
						4 => '4',
						5 => '5',
						6 => '6',
					),
					'title' => 'Woocommerce Related/Up-Sell/Cross-Sell Product Number of Columns',
					'default' => '4',
				),
				array (
					'desc' => 'Select the number of columns for the archive/category pages.',
					'id' => 'woocommerce_archive_page_columns',
					'type' => 'select',
					'options' => array (
						1 => '1',
						2 => '2',
						3 => '3',
						4 => '4',
						5 => '5',
						6 => '6',
					),
					'title' => 'Woocommerce Archive/Category Number of Product Columns',
					'default' => '3',
				),
				array (
					'desc' => 'Choose if the product tabs on the single product page are vertical or horizontal.',
					'id' => 'woocommerce_product_tab_design',
					'type' => 'select',
					'options' => array (
						'horizontal' => 'Horizontal Tabs',
						'vertical' => 'Vertical Tabs',
					),
					'title' => 'WooCommerce Product Tab Design',
					'default' => 'vertical',
				),
				array (
					'desc' => 'Check the box to disable the ordering boxes displayed on the shop page.',
					'id' => 'woocommerce_aione_ordering',
					'type' => 'checkbox',
					'title' => 'Disable Woocommerce Shop Page Ordering Boxes',
				),
				array (
					'desc' => 'Check the box to disable the product crossfade image effect on the shop page.',
					'id' => 'woocommerce_disable_crossfade_effect',
					'type' => 'checkbox',
					'title' => 'Disable Woocommerce Shop Page Crossfade Image Effect',
				),
				array (
					'desc' => 'Check the box to use Aione\'s one page checkout template.',
					'id' => 'woocommerce_one_page_checkout',
					'type' => 'checkbox',
					'title' => 'Use Woocommerce One Page Checkout',
				),
				array (
					'desc' => 'Check the box to show the order notes on the checkout page.',
					'id' => 'woocommerce_enable_order_notes',
					'type' => 'checkbox',
					'title' => 'Show Woocommerce Order Notes on Checkout',
					'default' => 1,
				),
				array (
					'desc' => 'Choose to show or hide the cart counter circle.',
					'id' => 'woocommerce_cart_counter',
					'type' => 'checkbox',
					'title' => 'WooCommerce Menu Cart Icon Counter',
				),
				array (
					'desc' => 'Check the box to show My Account link, uncheck to disable. Please note these will not show with Ubermenu.',
					'id' => 'woocommerce_acc_link_main_nav',
					'type' => 'checkbox',
					'title' => 'Show Woocommerce My Account Link in Main Menu',
				),
				array (
					'desc' => 'Check the box to show the Cart icon, uncheck to disable. Please note these will not show with Ubermenu.',
					'id' => 'woocommerce_cart_link_main_nav',
					'type' => 'checkbox',
					'title' => 'Show Woocommerce Cart Icon in Main Menu',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to show My Account link, uncheck to disable. Only works if a top menu is assigned in header content 1-2.	Not compatible with Ubermenu.',
					'id' => 'woocommerce_acc_link_top_nav',
					'type' => 'checkbox',
					'title' => 'Show Woocommerce My Account Link in Secondary Menu',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to show the Cart icon, uncheck to disable. Only works if a top menu is assigned in header content 1-2.	Not compatible with Ubermenu. ',
					'id' => 'woocommerce_cart_link_top_nav',
					'type' => 'checkbox',
					'title' => 'Show Woocommerce Cart Icon in Secondary Menu',
					'default' => 1,
				),
				array (
					'desc' => 'Check the box to show the social icons on product pages, uncheck to disable.',
					'id' => 'woocommerce_social_links',
					'type' => 'checkbox',
					'title' => 'Show Woocommerce Social Icons',
					'default' => 1,
				),
				array (
					'desc' => 'Select the box to display the grid/list toggle on the main shop page and category/archive shop pages.',
					'id' => 'woocommerce_toggle_grid_list',
					'type' => 'checkbox',
					'title' => 'Product Grid / List View',
					'default' => 1,
				),
				array (
					'desc' => 'Insert your text and it will appear in the first message box on the acount page.',
					'id' => 'woo_acc_msg_1',
					'type' => 'textarea',
					'title' => 'Account Area Message 1',
					'default' => 'Need Assistance? Call customer service at 888-555-5555.',
				),
				array (
					'desc' => 'Insert your text and it will appear in the second message box on the acount page.',
					'id' => 'woo_acc_msg_2',
					'type' => 'textarea',
					'title' => 'Account Area Message 2',
					'default' => 'E-mail them at info@yourshop.com',
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_bbpress',
			'title' => 'bbPress',
			'fields' => array (
				array (
					'desc' => 'Controls the background color for forum header rows.',
					'id' => 'bbp_forum_header_bg',
					'type' => 'color',
					'title' => 'bbPress Forum Header Background Color',
					'default' => '#ebeaea',
				),
				array (
					'desc' => 'CControls the font color for the text in the forum header rows.',
					'id' => 'bbp_forum_header_font_color',
					'type' => 'color',
					'title' => 'bbPress Forum Header Font Color',
					'default' => '#747474',
				),
				array (
					'desc' => 'Controls the border color for all forum surrounding borders.',
					'id' => 'bbp_forum_border_color',
					'type' => 'color',
					'title' => 'bbPress Forum Border Color',
					'default' => '#ebeaea',
				),
				array (
					'id' => 'bbpress_sidebars',
					'icon' => true,
					'position' => 'start',
					'type' => 'info',
					'title' => 'BBPress/BuddyPress',
					'default' => '<h3 style=\'margin: 0;\'>BBPress/BuddyPress</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(16) "bbpress_sidebars"
		["icon"]=>
		bool(true)
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(18) "BBPress/BuddyPress"
		["default"]=>
		string(46) "<h3 style=\'margin: 0;\'>BBPress/BuddyPress</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Check the box if you want to use global sidebars on all forum pages. Forums index page, profile page and search page does not need this option checked to display the sidebars selected below.',
					'id' => 'bbpress_global_sidebar',
					'type' => 'checkbox',
					'title' => 'Activate Global Sidebar',
				),
				array (
					'desc' => 'Select sidebar 1 that will display on forum and BuddyPress pages globally.',
					'id' => 'ppbress_sidebar',
					'type' => 'select',
					'options' => array (
						0 => 'None',
						1 => 'Blog Sidebar',
						2 => 'Footer Widget 1',
						3 => 'Footer Widget 2',
						4 => 'Footer Widget 3',
						5 => 'Footer Widget 4',
						6 => 'Slidingbar Widget 1',
						7 => 'Slidingbar Widget 2',
					),
					'title' => 'Global Sidebar 1',
					'default' => 'None',
				),
				array (
					'desc' => 'Select sidebar 2 that will display on forum and BuddyPress pages globally. Sidebar 2 can only be used if sidebar 1 is selected.',
					'id' => 'ppbress_sidebar_2',
					'type' => 'select',
					'options' => array (
						0 => 'None',
						1 => 'Blog Sidebar',
						2 => 'Footer Widget 1',
						3 => 'Footer Widget 2',
						4 => 'Footer Widget 3',
						5 => 'Footer Widget 4',
						6 => 'Slidingbar Widget 1',
						7 => 'Slidingbar Widget 2',
					),
					'title' => 'Global Sidebar 2',
					'default' => 'None',
				),
				array (
					'desc' => 'Select the sidebar 1 position for bbPress/BuddyPress pages. If sidebar 2 is selected, it will display on the opposite side.',
					'id' => 'bbpress_sidebar_position',
					'type' => 'select',
					'options' => array (
						'Right' => 'Right',
						'Left' => 'Left',
					),
					'title' => 'Global bbPress/BuddyPress Sidebar Position',
					'default' => 'Right',
				),
				array (
					'id' => 'bbpress_sidebars',
					'icon' => true,
					'position' => 'end',
					'type' => 'info',
					'title' => 'BBPress',
					'default' => '<h3 style=\'margin: 0;\'>BBPress</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(6) {
		["id"]=>
		string(16) "bbpress_sidebars"
		["icon"]=>
		bool(true)
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(7) "BBPress"
		["default"]=>
		string(35) "<h3 style=\'margin: 0;\'>BBPress</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_ec',
			'title' => 'Events Calendar',
			'fields' => array (
				array (
					'desc' => 'Text color for when primary color is in the background.',
					'id' => 'primary_overlay_text_color',
					'type' => 'color',
					'title' => 'Primary Color Overlay Text Color',
					'default' => '#ffffff',
				),
				array (
					'desc' => 'Controls the background color for the events calendar filter bar.',
					'id' => 'ec_bar_bg_color',
					'type' => 'color',
					'title' => 'Events Filter Bar Background Color',
					'default' => '#efeded',
				),
				array (
					'desc' => 'Controls the color of the event filter bar text.',
					'id' => 'ec_bar_text_color',
					'type' => 'color',
					'title' => 'Event Filter Bar Text Color',
					'default' => '#747474',
				),
				array (
					'desc' => 'Controls the background color for the numbered heading.',
					'id' => 'ec_calendar_heading_bg_color',
					'type' => 'color',
					'title' => 'Monthly Calendar Heading Background Color',
					'default' => '#b2b2b2',
				),
				array (
					'desc' => 'Controls the background color of each day in the calendar.',
					'id' => 'ec_calendar_bg_color',
					'type' => 'color',
					'title' => 'Monthly Calendar Background Color',
					'default' => '#b2b2b2',
				),
				array (
					'desc' => 'Controls the background color for the event tooltip.',
					'id' => 'ec_tooltip_bg_color',
					'type' => 'color',
					'title' => 'Tooltip Background Color',
					'default' => '#ffffff',
				),
				array (
					'desc' => 'Controls the body text color of the tooltip.',
					'id' => 'ec_tooltip_body_color',
					'type' => 'color',
					'title' => 'Tooltip Body Text Color',
					'default' => '#747474',
				),
				array (
					'desc' => 'Controls the various border color around events calendar.',
					'id' => 'ec_border_color',
					'type' => 'color',
					'title' => 'Border Color',
					'default' => '#e0dede',
				),
				array (
					'desc' => 'Choose the hover type for featured images.',
					'id' => 'ec_hover_type',
					'type' => 'select',
					'options' => array (
						'none' => 'none',
						'zoomin' => 'Zoom In',
						'zoomout' => 'Zoom Out',
						'liftup' => 'Lift Up',
					),
					'title' => 'Featured Image Hover Type',
					'default' => 'none',
				),
				array (
					'desc' => 'Select if the event image displays auto or covered in the list view. All other areas show the image as auto.',
					'id' => 'ec_bg_list_view',
					'type' => 'select',
					'options' => array (
						'cover' => 'cover',
						'auto' => 'auto',
					),
					'title' => 'Image Background Size For List View',
					'default' => 'cover',
				),
				array (
					'id' => 'ec_single_event_detail_section_heading',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Single Event Detail Section',
					'default' => '<h3 style=\'margin: 0;\'>Single Event Detail Section</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(38) "ec_single_event_detail_section_heading"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(27) "Single Event Detail Section"
		["default"]=>
		string(55) "<h3 style=\'margin: 0;\'>Single Event Detail Section</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Check the box to display the social sharing box.',
					'id' => 'events_social_sharing_box',
					'type' => 'checkbox',
					'title' => 'Social Sharing Box',
					'default' => 1,
				),
				array (
					'desc' => 'Controls the background color of the sidebar.',
					'id' => 'ec_sidebar_bg_color',
					'type' => 'color',
					'title' => 'Sidebar Background Color',
					'default' => '#f6f6f6',
				),
				array (
					'desc' => 'Enter a pixel or percentage based value, ex: 5px or 5%',
					'id' => 'ec_sidebar_padding',
					'type' => 'text',
					'title' => 'Sidebar Padding',
					'default' => '4%',
				),
				array (
					'desc' => 'In pixels, default is 13',
					'id' => 'ec_sidew_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Sidebar Widget Heading Font Size',
					'default' => '17',
				),
				array (
					'desc' => 'Controls the background color of the sidebar widget title.',
					'id' => 'ec_sidebar_widget_bg_color',
					'type' => 'color',
					'title' => 'Sidebar Widget Title Background Color',
					'default' => '#aoce4e',
				),
				array (
					'desc' => 'Controls the text color of the sidebar widget headings.',
					'id' => 'ec_sidebar_heading_color',
					'type' => 'color',
					'title' => 'Sidebar Widget Headings Color',
					'default' => '#333333',
				),
				array (
					'desc' => 'In pixels, default is 14',
					'id' => 'ec_text_font_size',
					'min' => '1',
					'step' => '1',
					'max' => '100',
					'edit' => 'yes',
					'type' => 'slider',
					'title' => 'Sidebar Text Font Size',
					'default' => '14',
				),
				array (
					'desc' => 'Controls the text color of the sidebar.',
					'id' => 'ec_sidebar_text_color',
					'type' => 'color',
					'title' => 'Sidebar Text Color',
					'default' => '#747474',
				),
				array (
					'desc' => 'Controls the link color of the sidebar.',
					'id' => 'ec_sidebar_link_color',
					'type' => 'color',
					'title' => 'Sidebar Link Color',
					'default' => '#333333',
				),
				array (
					'desc' => 'Controls the divider color of the sidebar.',
					'id' => 'ec_sidebar_divider_color',
					'type' => 'color',
					'title' => 'Sidebar Divider Color',
					'default' => '#e8e8e8',
				),
				array (
					'id' => 'ec_single_event_detail_section_heading',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Single Event Detail Section',
					'default' => '<h3 style=\'margin: 0;\'>Single Event Detail Section</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(38) "ec_single_event_detail_section_heading"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(27) "Single Event Detail Section"
		["default"]=>
		string(55) "<h3 style=\'margin: 0;\'>Single Event Detail Section</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'ec_content_sidebar_width',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Events Content + Sidebar Width',
					'default' => '<h3 style=\'margin: 0;\'>Events Content + Sidebar Width</h3><p>These settings are used on pages with 1 sidebar. Total values must add up to 100.</p>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(24) "ec_content_sidebar_width"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(30) "Events Content + Sidebar Width"
		["default"]=>
		string(146) "<h3 style=\'margin: 0;\'>Events Content + Sidebar Width</h3><p>These settings are used on pages with 1 sidebar. Total values must add up to 100.</p>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the width of the sidebar. In px or %, ex: 100% or 1170px.',
					'id' => 'ec_sidebar_width',
					'type' => 'text',
					'title' => 'Sidebar Width',
					'default' => '32%',
				),
				array (
					'id' => 'ec_content_sidebar_width',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Events Content + Sidebar Width',
					'default' => '<h3 style=\'margin: 0;\'>Events Content + Sidebar Width</h3><p>These settings are used on pages with 1 sidebar. Total values must add up to 100.</p>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(24) "ec_content_sidebar_width"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(30) "Events Content + Sidebar Width"
		["default"]=>
		string(146) "<h3 style=\'margin: 0;\'>Events Content + Sidebar Width</h3><p>These settings are used on pages with 1 sidebar. Total values must add up to 100.</p>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'ec_content_sidebar_sidebar_width',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Events Content + Sidebar + Sidebar Width',
					'default' => '<h3 style=\'margin: 0;\'>Events Content + Sidebar + Sidebar Width</h3><p>These settings are used on pages with 2 sidebars. Total values must add up to 100.</p>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(32) "ec_content_sidebar_sidebar_width"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(40) "Events Content + Sidebar + Sidebar Width"
		["default"]=>
		string(157) "<h3 style=\'margin: 0;\'>Events Content + Sidebar + Sidebar Width</h3><p>These settings are used on pages with 2 sidebars. Total values must add up to 100.</p>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Controls the width of the sidebar 1. In px or %, ex: 100% or 1170px.',
					'id' => 'ec_sidebar_2_1_width',
					'type' => 'text',
					'title' => 'Sidebar 1 Width',
					'default' => '21%',
				),
				array (
					'desc' => 'Controls the width of the sidebar 2. In px or %, ex: 100% or 1170px.',
					'id' => 'ec_sidebar_2_2_width',
					'type' => 'text',
					'title' => 'Sidebar 2 Width',
					'default' => '21%',
				),
				array (
					'id' => 'ec_content_sidebar_sidebar_width',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Events Content + Sidebar + Sidebar Width',
					'default' => '<h3 style=\'margin: 0;\'>Events Content + Sidebar + Sidebar Width</h3><p>These settings are used on pages with 2 sidebars. Total values must add up to 100.</p>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(32) "ec_content_sidebar_sidebar_width"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(40) "Events Content + Sidebar + Sidebar Width"
		["default"]=>
		string(157) "<h3 style=\'margin: 0;\'>Events Content + Sidebar + Sidebar Width</h3><p>These settings are used on pages with 2 sidebars. Total values must add up to 100.</p>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'id' => 'ec_global_sidebar_heading',
					'position' => 'start',
					'type' => 'info',
					'title' => 'Events Global Sidebar',
					'default' => '<h3 style=\'margin: 0;\'>Events Global Sidebar</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(25) "ec_global_sidebar_heading"
		["position"]=>
		string(5) "start"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(21) "Events Global Sidebar"
		["default"]=>
		string(49) "<h3 style=\'margin: 0;\'>Events Global Sidebar</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
				array (
					'desc' => 'Check the box if you want to use a global sidebar on all event pages. This option overrides the page options.',
					'id' => 'ec_global_sidebar',
					'type' => 'checkbox',
					'title' => 'Activate Global Sidebar',
				),
				array (
					'desc' => 'Select sidebar 1 that will display on all event pages.',
					'id' => 'ec_sidebar',
					'type' => 'select',
					'options' => array (
						0 => 'None',
						1 => 'Blog Sidebar',
						2 => 'Footer Widget 1',
						3 => 'Footer Widget 2',
						4 => 'Footer Widget 3',
						5 => 'Footer Widget 4',
						6 => 'Slidingbar Widget 1',
						7 => 'Slidingbar Widget 2',
					),
					'title' => 'Global Sidebar 1',
					'default' => 'None',
				),
				array (
					'desc' => 'Select sidebar 2 that will display on all event pages. Sidebar 2 can only be used if sidebar 1 is selected',
					'id' => 'ec_sidebar_2',
					'type' => 'select',
					'options' => array (
						0 => 'None',
						1 => 'Blog Sidebar',
						2 => 'Footer Widget 1',
						3 => 'Footer Widget 2',
						4 => 'Footer Widget 3',
						5 => 'Footer Widget 4',
						6 => 'Slidingbar Widget 1',
						7 => 'Slidingbar Widget 2',
					),
					'title' => 'Global Sidebar 2',
					'default' => 'None',
				),
				array (
					'desc' => 'Select the sidebar 1 position for event pages. If sidebar 2 is selected, it will display on the opposite side.',
					'id' => 'ec_sidebar_pos',
					'options' => array (
						'Right' => 'Right',
						'Left' => 'Left',
					),
					'type' => 'select',
					'title' => 'Global Sidebar Position',
					'default' => 'Right',
				),
				array (
					'id' => 'ec_global_sidebar_heading',
					'position' => 'end',
					'type' => 'info',
					'title' => 'Events Global Sidebar',
					'default' => '<h3 style=\'margin: 0;\'>Events Global Sidebar</h3>',
					'desc' => '<h3 style=\'color: red;\'>Found a field with an unknown type!</h3> <p>Perhaps this was a custom field and will need to be remade for use within Redux. This was the field\'s configuration:</p><pre style=\'overflow:auto;border: 2px dashed #eee;padding: 2px 5px; width: 100%;\'>array(5) {
		["id"]=>
		string(25) "ec_global_sidebar_heading"
		["position"]=>
		string(3) "end"
		["type"]=>
		string(9) "accordion"
		["title"]=>
		string(21) "Events Global Sidebar"
		["default"]=>
		string(49) "<h3 style=\'margin: 0;\'>Events Global Sidebar</h3>"
	}
	</pre>',
					'raw_html' => true,
				),
			),
			'icon' => 'el-icon-cog',
		),
		array (
			'id' => 'heading_custom_css',
			'title' => 'Custom CSS',
			'fields' => array (
				array (
					'id' => 'advanced_css_intro',
					'icon' => true,
					'type' => 'info',
					'raw' => '<h3 style=\'margin: 0;\'>Advanced CSS Customizations</h3>',
				),
				array (
					'id' => 'custom_css_info',
					'icon' => true,
					'type' => 'info',
					'raw' => 'Paste your CSS code, do not include any tags or HTML in the field. Any custom CSS entered here will override the theme CSS. In some cases, the !important tag may be needed. Don\'t URL encode image or svg paths. Contents of this field will be auto encoded.',
				),
				array (
					'id' => 'custom_css',
					'type' => 'textarea',
					'title' => 'CSS Code',
				),
			),
			'icon' => 'el-icon-cog',
		),
	);