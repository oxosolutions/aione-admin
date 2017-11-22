<?php

/*********************************************************************************************
 *
 *  Footer settings
 *
 *********************************************************************************************/

$this->sections[] = array(
    'icon'      => 'el-icon-fork',
    'title'     => __('Footer', 'redux-framework-demo'),
    'fields'    => array(
	
		array (
            'id' => 'general_footer_options',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>General Footer Options</h3>',
        ),
		array (
            'id' => 'footer_100_width',
            'type' => 'switch',
            'title' => __('100% Footer Width','redux-framework-demo'),
            'subtitle'  => __('Enables 100% Footer Width.', 'redux-framework-demo'),
            'desc' => __('Check this box to set footer width to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'hint' => array(
                'title'   => __('100% Footer Width','redux-framework-demo'),
                'content' => __('Check this box to set footer width to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'footer_special_effects',
            'type' => 'radio',
            'title' => __('Footer Special Effects','redux-framework-demo'),
            'subtitle'  => __('Choose Footer Special Effects', 'redux-framework-demo'),
            'desc' => __('Select your preferred footer special effect.','redux-framework-demo'),
            'default' => 'none',
            'hint' => array(
                'title'   => __('Footer Special Effects','redux-framework-demo'),
                'content' => __('Select your preferred footer special effect.','redux-framework-demo'),
            ),
			'options' => array (
                'none' => 'None',
                'footer_parallax_effect' => 'Footer Parallax Effect',
                'footer_area_bg_parallax' => 'Parallax Background Image',
                'footer_sticky' => 'Sticky Footer',
				'footer_sticky_with_parallax_bg_image' => 'Sticky Footer and Parallax Background Image'
            ),
        ),
		
		array (
            'id' => 'footer_sticky_height',
            'type' => 'text',
            'title' => __('Sticky Footer Height','redux-framework-demo'),
            'subtitle'  => __('Choose Height of Sticky Footer.', 'redux-framework-demo'),
            'desc' => __('The entire height of the footer area (widgets + copyright). Set a static height in px to enable sticky footer effect. eg: 200px.','redux-framework-demo'),
            'default' => '',
            'hint' => array(
                'title'   => __('Sticky Footer Height','redux-framework-demo'),
                'content' => __('The entire height of the footer area (widgets + copyright). Set a static height in px to enable sticky footer effect. eg: 200px.','redux-framework-demo'),
            )
        ),
		/*array (
            'id' => 'footer_text_shadow',
            'type' => 'switch',
            'title' => __('Disable Footer Text Shadow','redux-framework-demo'),
            'subtitle'  => __('', 'redux-framework-demo'),
            'desc' => __('YES to disable the text shadow in the footer.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'hint' => array(
                'title'   => __('Disable Footer Text Shadow','redux-framework-demo'),
                'content' => __('Disable Footer Text Shadow','redux-framework-demo'),
            )
        ),*/
		array (
            'id' => 'footer_widgets_area_options',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Footer Widgets Area Options</h3>',
        ),
        array (
            'id' => 'footer_widgets',
            'type' => 'switch',
            'title' => __('Footer Widgets','redux-framework-demo'),
            'subtitle'  => __('Enable Footer Widgets.', 'redux-framework-demo'),
            'desc' => __('YES to display footer widgets.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'hint' => array(
                'title'   => __('Footer Widgets','redux-framework-demo'),
                'content' => __('Footer Widgets.','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'footer_widgets_center_content',
            'type' => 'switch',
            'title' => __('Footer Widgets Center Content','redux-framework-demo'),
            'subtitle'  => __('Enable Footer Widgets Center Content.', 'redux-framework-demo'),
            'desc' => __('YES to display the footer widget area contents centered.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'hint' => array(
                'title'   => __('Footer Widgets Center Content','redux-framework-demo'),
                'content' => __('Footer Widgets Center Content.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'footer_widgets_columns',
            'options' => array (
                1 => '1',
                2 => '2',
                3 => '3',
                4 => '4',
                5 => '5',
                6 => '6',
                7 => '7',
            ),
            'type' => 'select',
            'title' => __('Number of Footer Columns','redux-framework-demo'),
            'subtitle'  => __('Choose Number of Footer Columns.', 'redux-framework-demo'),
            'desc' => __('Select the number of columns to display in the footer.','redux-framework-demo'),
            'default' => '4',
            'hint' => array(
                'title'   => __('Number of Footer Columns','redux-framework-demo'),
                'content' => __('Number of Footer Columns.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'footer_area_top_padding',
            'type' => 'text',
            'title' => __('Footer Top Padding','redux-framework-demo'),
            'subtitle'  => __('Choose Footer Top Padding.', 'redux-framework-demo'),
            'desc' => __('In pixels, eg: 20px','redux-framework-demo'),
            'default' => '43px',
            'hint' => array(
                'title'   => __('Footer Top Padding','redux-framework-demo'),
                'content' => __('Footer Top Padding.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'footer_area_bottom_padding',
            'type' => 'text',
            'title' => __('Footer Bottom Padding','redux-framework-demo'),
            'subtitle'  => __('Choose Footer Bottom Padding.', 'redux-framework-demo'),
            'desc' => __('In pixels, eg: 20px','redux-framework-demo'),
            'default' => '40px',
            'hint' => array(
                'title'   => __('Footer Bottom Padding','redux-framework-demo'),
                'content' => __('Footer Bottom Padding.','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'footer_area_left_padding',
            'type' => 'text',
            'title' => __('Footer Left Padding','redux-framework-demo'),
            'subtitle'  => __('Choose Footer Left Padding.', 'redux-framework-demo'),
            'desc' => __('In pixels or percentage, eg: 10px or 10%.','redux-framework-demo'),
            'default' => '0px',
            'hint' => array(
                'title'   => __('Footer Left Padding','redux-framework-demo'),
                'content' => __('Footer Left Padding.','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'footer_area_right_padding',
            'type' => 'text',
            'title' => __('Footer Right Padding','redux-framework-demo'),
            'subtitle'  => __('Choose Footer Right Padding.', 'redux-framework-demo'),
            'desc' => __('In pixels, eg: 20px','redux-framework-demo'),
            'default' => '0px',
            'hint' => array(
                'title'   => __('Footer Right Padding','redux-framework-demo'),
                'content' => __('Footer Right Padding.','redux-framework-demo'),
            )
        )

    )
);
////////////////////////////////////////////////////////////////////////////////////////////
$this->sections[] = array(
    'icon'      => 'el-icon-group',
    'title'     => __('Social Icon Options', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
        array (
            'id' => 'icons_footer',
            'type' => 'switch',
            'title' => __('Display Social Icons on Footer of the Page','redux-framework-demo'),
            'subtitle'  => __('Enable to Display Social Icons on Footer of the Page.', 'redux-framework-demo'),
            'desc' => __('YES to show social media icons on the footer of the page.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'hint' => array(
                'title'   => __('Display Social Icons on Footer of the Page','redux-framework-demo'),
                'content' => __('Display Social Icons on Footer of the Page.','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'footer_social_links_font_size',
            'type' => 'text',
            'title' => __('Footer Social Icons Font Size','redux-framework-demo'),
            'subtitle'  => __('Choose Footer Social Icons Font Size.', 'redux-framework-demo'),
            'desc' => __('In pixels, default is 16','redux-framework-demo'),
            'default' => '16',
            'hint' => array(
                'title'   => __('Footer Social Icons Font Size','redux-framework-demo'),
                'content' => __('Footer Social Icons Font Size.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'footer_social_links_icon_color',
            'type' => 'color',
            'title' => __('Footer Social Icons Custom Color','redux-framework-demo'),
            'subtitle'  => __('Choose Footer Social Icons Custom Color.', 'redux-framework-demo'),
            'desc' => __('Select a custom social icon color.','redux-framework-demo'),
            'default' => '#46494a',
            'hint' => array(
                'title'   => __('Footer Social Icons Custom Color','redux-framework-demo'),
                'content' => __('Footer Social Icons Custom Color.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'footer_social_links_boxed',
            'type' => 'select',
            'options' => array (
                'No' => 'No',
                'Yes' => 'Yes',
            ),
            'title' => __('Footer Social Icons Boxed','redux-framework-demo'),
            'subtitle'  => __('Select Footer Social Icons Boxed.', 'redux-framework-demo'),
            'desc' => __('YES to Enable Social Icons Boxed','redux-framework-demo'),
            'default' => 'No',
            'hint' => array(
                'title'   => __('Footer Social Icons Boxed','redux-framework-demo'),
                'content' => __('Footer Social Icons Boxed.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'footer_social_links_box_color',
            'type' => 'color',
            'title' => __('Footer Social Icons Custom Box Color','redux-framework-demo'),
            'subtitle'  => __('Choose Footer Social Icons Custom Box Color.', 'redux-framework-demo'),
            'desc' => __('Select a custom social icon box color.','redux-framework-demo'),
            'default' => '#222222',
            'hint' => array(
                'title'   => __('Footer Social Icons Custom Box Color','redux-framework-demo'),
                'content' => __('Footer Social Icons Custom Box Color.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'footer_social_links_boxed_radius',
            'type' => 'text',
            'title' => __('Footer Social Icons Boxed Radius','redux-framework-demo'),
            'subtitle'  => __('Choose Footer Social Icons Boxed Radius.', 'redux-framework-demo'),
            'desc' => __('In pixels, eg: 4px.','redux-framework-demo'),
            'default' => '4px',
            'hint' => array(
                'title'   => __('Footer Social Icons Boxed Radius','redux-framework-demo'),
                'content' => __('Footer Social Icons Boxed Radius.','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'footer_social_links_boxed_padding',
            'type' => 'text',
            'title' => __('Footer Social Icons Boxed Padding','redux-framework-demo'),
            'subtitle'  => __('Choose Footer Social Icons Boxed Padding.', 'redux-framework-demo'),
            'desc' => __('In pixels, default is 8','redux-framework-demo'),
            'default' => '8',
            'hint' => array(
                'title'   => __('Footer Social Icons Boxed Padding','redux-framework-demo'),
                'content' => __('Footer Social Icons Boxed Padding.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'footer_social_links_tooltip_placement',
            'type' => 'select',
            'options' => array (
                'Top' => 'Top',
                'Right' => 'Right',
                'Bottom' => 'Bottom',
                'Left' => 'Left',
                'None' => 'None',
            ),
            'title' => __('Footer Social Icons Tooltip Position','redux-framework-demo'),
            'subtitle'  => __('Controls the Tooltip position of the social icons in the footer.', 'redux-framework-demo'),
            'desc' => __('Select Tooltip Position fro the list','redux-framework-demo'),
            'default' => 'Top',
            'hint' => array(
                'title'   => __('Footer Social Icons Tooltip Position','redux-framework-demo'),
                'content' => __('Footer Social Icons Tooltip Position.','redux-framework-demo'),
            )
        )
    )
);
////////////////////////////////////////////////////////////////////////////////////////////
$this->sections[] = array(
    'icon'      => 'el-icon-asterisk',
    'title'     => __('Copyright Options', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
        array (
            'id' => 'footer_copyright',
            'type' => 'switch',
            'title' => __('Copyright Bar','redux-framework-demo'),
            'subtitle'  => __('Enables Copyright Bar.', 'redux-framework-demo'),
            'desc' => __('YES to display the copyright bar.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'hint' => array(
                'title'   => __('Copyright Bar','redux-framework-demo'),
                'content' => __('Copyright Bar.','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'footer_copyright_center_content',
            'type' => 'switch',
            'title' => __('Copyright Center Content','redux-framework-demo'),
            'subtitle'  => __('Enables Copyright Content to Center.', 'redux-framework-demo'),
            'desc' => __('YES to display the copyright bar contents centered.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'required' =>  array('footer_copyright','equals','1'),
            'hint' => array(
                'title'   => __('Copyright Center Content','redux-framework-demo'),
                'content' => __('Copyright Center Content.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'footer_text',
            'type' => 'textarea',
            'title' => __('Copyright Text','redux-framework-demo'),
            'subtitle'  => __('Text to be Displayed in Copyright Bar', 'redux-framework-demo'),
            'desc' => __('Enter the text. HTML markup can be used.','redux-framework-demo'),
            'default' => 'Copyright 2012 aione | All Rights Reserved | Powered by <a href="http://wordpress.org">WordPress</a>	|	<a href="http://oxosolutions.com">Theme Aione</a>',
            'required' =>  array('footer_copyright','equals','1'),
            'hint' => array(
                'title'   => __('Copyright Text','redux-framework-demo'),
                'content' => __('Copyright Text.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'copyright_top_padding',
            'type' => 'text',
            'title' => __('Copyright Top Padding','redux-framework-demo'),
            'subtitle'  => __('Choose Copyright Top Padding.', 'redux-framework-demo'),
            'desc' => __('In pixels, eg: 18px','redux-framework-demo'),
            'default' => '18px',
            'required' =>  array('footer_copyright','equals','1'),
            'hint' => array(
                'title'   => __('Copyright Top Padding','redux-framework-demo'),
                'content' => __('Copyright Top Padding.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'copyright_bottom_padding',
            'type' => 'text',
            'title' => __('Copyright Bottom Padding','redux-framework-demo'),
            'subtitle'  => __('Choose Copyright Bottom Padding.', 'redux-framework-demo'),
            'desc' => __('In pixels, eg: 18px','redux-framework-demo'),
            'default' => '16px',
            'required' =>  array('footer_copyright','equals','1'),
            'hint' => array(
            'title'   => __('Copyright Bottom Padding','redux-framework-demo'),
            'content' => __('Copyright Bottom Padding.','redux-framework-demo'),
        )
        )
    )
);


?>