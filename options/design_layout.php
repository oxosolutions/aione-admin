<?php
/*********************************************************************************************
 *
 *  layout Options
 *
 *********************************************************************************************/

 $this->sections[] = array(
    'icon'      => 'el-icon-key',
    'title'     => __('layout Options', 'redux-framework-demo'),
    'fields'    => array(
    
                array (
		    'id' => 'layout',
		    'options' => array (
			 'Boxed' => 'Boxed',
			'Wide' => 'Wide',
			
		    ),
		    'type' => 'select',
		    'title' => __('Layout','redux-framework-demo'),
		    'subtitle'  => __('Layout.', 'redux-framework-demo'),
		    'desc' => __('Select boxed or wide layout..','redux-framework-demo'),
		    'default' => 'Wide',
		    'hint' => array(
			'title'   => __('Layout','redux-framework-demo'),
			'content' => __('Layout.','redux-framework-demo'),
		       )
		),
		array (
		    'id' => 'site_width',
		    'type' => 'text',
		    'title' => __('Site Width','redux-framework-demo'),
		    'subtitle'  => __('Declare the site width.', 'redux-framework-demo'),
		    'desc' => __('Controls the overall site width. In px or %, ex: 100% or 1170px. Default value is 940px.','redux-framework-demo'),
		    'default' => '940px',
		    'hint' => array(
			'title'   => __('Site Width','redux-framework-demo'),
			'content' => __('Site Width.','redux-framework-demo'),
		    )
                ),
		 array (
		    'id' => 'Page_Layout',
		    'type' => 'switch',
		    'title' => __('Page Layout','redux-framework-demo'),
		    'subtitle'  => __('Choose page layout.', 'redux-framework-demo'),
		    'desc' => __('Default value is One Sidebar.','redux-framework-demo'),
		    'on' => __('One sidebar', 'redux-framework-demo'),
		    'off' => __('Two sidebar', 'redux-framework-demo'),
		    'default'   => true,
		    'hint' => array(
			'title'   => __('Page Layout','redux-framework-demo'),
			'content' => __('Page Layout.','redux-framework-demo'),
		    )
		),
	    array( 
			'id'       => 'opt-raw',
			'icon' => true,
            'type' => 'info',
			'raw' => '<h3 style=\'margin: 0;\'>Sidebar Width</h3><p style=\'display: inline;\'>These settings are used on pages with 1 sidebar.</p><img src="http://colleges.populaa.com/wp-content/themes/hueman/functions/images/col-2cr.png" alt="">',
			
		),
		array (
			'id' => 'sidebar_width',
			'type' => 'text',
			'title' => __('Sidebar Width','redux-framework-demo'),
			'subtitle'  => __('width of sidebar.', 'redux-framework-demo'),
			'desc' => __('Controls the width of the sidebar. In px or %, ex: 100% or 1170px.','redux-framework-demo'),
			'default' => '25%',
			'hint' => array(
				'title'   => __('Sidebar Width','redux-framework-demo'),
				'content' => __('Sidebar Width.','redux-framework-demo'),
			)
		),
		/*array (
		    'id' => 'Content_Width',
		    'type' => 'text',
		    'title' => __('Content Width','redux-framework-demo'),
		    'subtitle'  => __('width of content.', 'redux-framework-demo'),
		    'desc' => __('Controls the width of the content area. In px or %, ex: 100% or 1170px.','redux-framework-demo'),
		    'default' => '79',
		    'hint' => array(
			'title'   => __('Content Width','redux-framework-demo'),
			'content' => __('Content Width.','redux-framework-demo'),
		    )
                ),*/
				
		array( 
			'id'       => 'opt-raw',
			'icon' => true,
            'type' => 'info',
			'raw' => '<h3 style=\'margin: 0;\'>Sidebar + Sidebar Width</h3><p style=\'display: inline;\'>These settings are used on pages with 2 sidebars.</p><img src="http://colleges.populaa.com/wp-content/themes/hueman/functions/images/col-3cm.png" alt="">',
			
		),
		array (
			'id' => 'sidebar_2_1_width',
			'type' => 'text',
			'title' => __('Sidebar 1 Width','redux-framework-demo'),
			'subtitle'  => __('width of sidebar1.', 'redux-framework-demo'),
			'desc' => __('Controls the width of the sidebar 1. In px or %, ex: 100% or 1170px.','redux-framework-demo'),
			'default' => '21%',
			'hint' => array(
				'title'   => __('Sidebar 1 Width','redux-framework-demo'),
				'content' => __('Sidebar 1 Width.','redux-framework-demo'),
			)
		),
		array (
			'id' => 'sidebar_2_2_width',
			'type' => 'text',
			'title' => __('Sidebar 2 Width','redux-framework-demo'),
			'subtitle'  => __('width of sidebar2.', 'redux-framework-demo'),
			'desc' => __('Controls the width of the sidebar 1. In px or %, ex: 100% or 1170px.','redux-framework-demo'),
			'default' => '21%',
			'hint' => array(
				'title'   => __('Sidebar 2 Width','redux-framework-demo'),
				'content' => __('Sidebar 2 Width.','redux-framework-demo'),
			)
		),
		
		
		array (
		    'id' => 'sidebar_padding',
		    'type' => 'text',
		    'title' => __('Sidebar Padding','redux-framework-demo'),
		    'subtitle'  => __('Sidebar Padding.', 'redux-framework-demo'),
		    'desc' => __('Enter a value in px or %, ex: 10% or 20px.','redux-framework-demo'),
		    'default' => '',
		    'hint' => array(
			'title'   => __('Sidebar Padding','redux-framework-demo'),
			'content' => __('Sidebar Padding.','redux-framework-demo'),
		    )
                ),
		array (
		    'id' => 'main_top_padding',
		    'type' => 'text',
		    'title' => __('Page Content Top Padding','redux-framework-demo'),
		    'subtitle'  => __('Page Content Top Padding.', 'redux-framework-demo'),
		    'desc' => __('(in pixels ex: 20px).','redux-framework-demo'),
		    'default' => '55px',
		    'hint' => array(
			'title'   => __('Page Content Top Padding','redux-framework-demo'),
			'content' => __('Page Content Top Padding.','redux-framework-demo'),
		    )
                ),
		array (
		    'id' => 'main_bottom_padding',
		    'type' => 'text',
		    'title' => __('Page Content Bottom Padding','redux-framework-demo'),
		    'subtitle'  => __('Page Content Bottom Padding.', 'redux-framework-demo'),
		    'desc' => __('(in pixels ex: 20px).','redux-framework-demo'),
		    'default' => '40px',
		    'hint' => array(
			'title'   => __('Page Content Bottom Padding','redux-framework-demo'),
			'content' => __('Page Content Bottom Padding.','redux-framework-demo'),
		    )
                ),
		array (
		    'id' => 'hundredp_padding',
		    'type' => 'text',
		    'title' => __('100% Width Template Left/Right Padding','redux-framework-demo'),
		    'subtitle'  => __('100% Width Template Left/Right Padding.', 'redux-framework-demo'),
		    'desc' => __('Select the left and right padding for the 100% width template main content area. Enter value in px. ex: 20px.','redux-framework-demo'),
		    'default' => '20px',
		    'hint' => array(
			'title'   => __('100% Width Template Left/Right Padding','redux-framework-demo'),
			'content' => __('100% Width Template Left/Right Padding.','redux-framework-demo'),
		    )
                ),
		array (
		    'id' => 'slidingbar_text_shadow',
		    'type' => 'switch',
		    'title' => __('Disable Sliding Bar Text Shadow','redux-framework-demo'),
		    'subtitle'  => __('Disable Sliding Bar Text Shadow.', 'redux-framework-demo'),
		    'desc' => __('YES to disable the text shadow in the Sliding Bar.','redux-framework-demo'),
		    '1' => __('Yes', 'redux-framework-demo'),
		    '0' => __('No', 'redux-framework-demo'),
		    'default'   => true,
		    'hint' => array(
			'title'   => __('Disable Sliding Bar Text Shadow','redux-framework-demo'),
			'content' => __('Disable Sliding Bar Text Shadow.','redux-framework-demo'),
		    )
		),
		array (
		    'id' => 'footer_text_shadow',
		    'type' => 'switch',
		    'title' => __('Disable Footer Text Shadow','redux-framework-demo'),
		    'subtitle'  => __('Disable Footer Text Shadow.', 'redux-framework-demo'),
		    'desc' => __('YES to disable the text shadow in the footer.','redux-framework-demo'),
		    '1' => __('Yes', 'redux-framework-demo'),
		    '0' => __('No', 'redux-framework-demo'),
		    'default'   => true,
		    'hint' => array(
			'title'   => __('Disable Footer Text Shadow','redux-framework-demo'),
			'content' => __('Disable Footer Text Shadow.','redux-framework-demo'),
		    )
		),
	)
   );
   
?>