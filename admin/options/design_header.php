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
            'required' => array('header_enable','equals','1'),
            'hint' => array(
                'title'   => __('Show Tagline','redux-framework-demo'),
                'content' => __('Tagine is a slogan for your businesrl. Choose <strong>YES<\/strong> to shs\/brand or any other sub-title you want to show on your website headeow Tagline on the header, Choose <strong>NO<\/strong> to remove it. Default value is <strong>YES<\/strong>.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_show_navigation',
            'type' => 'switch',
            'title' =>  __('Show Naviagtion', 'redux-framework-demo'),
            'subtitle'  => __('Enable Navigation on header', 'redux-framework-demo'),
            'desc' => __('', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'compiler' => array('header_show_navigation_class'),
            'required' => array('header_enable','equals','1'),
            'hint' => array(
                'title'   => __('Show Navigation','redux-framework-demo'),
                'content' => __('Navigation is the main\/primary menu on your website header. Choose <strong>YES<\/strong> to show Navigation on the header, Choose <strong>NO<\/strong> to remove it. Default value is <strong>YES<\/strong>.','redux-framework-demo'),
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
            'default'   => 1,
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
            'default'   => 1,
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
            'default'   => 1,
            'compiler' => array(''),
            'required' => array('header_enable','equals','1'),
            'hint' => array(
                'title'   => __('Enable Sticky Header','redux-framework-demo'),
                'content' => __('Select YES to enable a fixed header when scrolling, NO to disable','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_sticky_tablet',
            'type' => 'switch',
            'title' =>  __('Enable Sticky Header on Tablets', 'redux-framework-demo'),
            'subtitle'  => __('To enable a fixed header when scrolling on Tablets', 'redux-framework-demo'),
            'desc' => __('Select YES to enable a fixed header when scrolling on tablets, NO to disable', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'compiler' => array(''),
            'required' => array('header_enable','equals','1'),
            'hint' => array(
                'title'   => __('Enable Sticky Header on Tablets','redux-framework-demo'),
                'content' => __('Select YES to enable a fixed header when scrolling on Tablets, NO to disable','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_sticky_mobile',
            'type' => 'switch',
            'title' =>  __('Enable Sticky Header on Mobiles', 'redux-framework-demo'),
            'subtitle'  => __('To enable a fixed header when scrolling on Mobiles', 'redux-framework-demo'),
            'desc' => __('Select YES to enable a fixed header when scrolling on mobiles, NO to disable', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'compiler' => array(''),
            'required' => array('header_enable','equals','1'),
            'hint' => array(
                'title'   => __('Enable Sticky Header on Mobiles','redux-framework-demo'),
                'content' => __('Select YES to enable a fixed header when scrolling on Mobiles, NO to disable','redux-framework-demo'),
            )
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
            'title' =>  __('Show Sliding Bar', 'redux-framework-demo'),
            'subtitle'  => __('Enable the top sliding bar.', 'redux-framework-demo'),
            'desc' => __('', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'compiler' => array(),
            'required' => array(),
            'hint' => array(
                'title'   => __('Show Sliding Bar','redux-framework-demo'),
                'content' => __('Sliding Bar is the area hidden at the top of website which can be slides down on clicking on <strong>+(Plus)<\/strong> button on right corner. Choose <strong>YES<\/strong> to show sliding bar, Choose <strong>NO<\/strong> to hide it. Default value is <strong>YES<\/strong>.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'mobile_slidingbar_widgets',
            'type' => 'switch',
            'title' =>  __('Disable Sliding Bar On Mobile', 'redux-framework-demo'),
            'subtitle'  => __('Disable Sliding Bar On Mobile', 'redux-framework-demo'),
            'desc' => __('Disable the top Sliding Bar on mobile devices.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'compiler' => array(''),
            'required' => array('slidingbar_widgets','equals','1'),
            'hint' => array(
                'title'   => __('','redux-framework-demo'),
                'content' => __('','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'slidingbar_top_border',
            'type' => 'switch',
            'title' =>  __('Enable Top Border on Sliding Bar', 'redux-framework-demo'),
            'subtitle'  => __('Enable Top Border on Sliding Bar', 'redux-framework-demo'),
            'desc' => __('YES to Enable a top border on the Sliding Bar.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'compiler' => array(''),
            'required' => array('slidingbar_widgets','equals','1'),
            'hint' => array(
                'title'   => __('Enable Top Border on Sliding Bar','redux-framework-demo'),
                'content' => __('Enable Top Border on Sliding Bar','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'slidingbar_bg_color_transparency',
            'type' => 'switch',
            'title' =>  __('Enable Transparency on the Sliding Bar', 'redux-framework-demo'),
            'subtitle'  => __('Enable Transparency on the Sliding Bar', 'redux-framework-demo'),
            'desc' => __('Check the box to enable transparency on the Sliding Bar.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'compiler' => array(''),
            'required' => array('slidingbar_widgets','equals','1'),
            'hint' => array(
                'title'   => __('Enable Transparency on the Sliding Bar','redux-framework-demo'),
                'content' => __('Enable Transparency on the Sliding Bar.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'slidingbar_open_on_load',
            'type' => 'switch',
            'title' =>  __('Sliding Bar Open On Page Load', 'redux-framework-demo'),
            'subtitle'  => __('Sliding Bar Open On Page Load', 'redux-framework-demo'),
            'desc' => __('Check the box to have the sliding bar open when the page loads.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'compiler' => array(''),
            'required' => array('slidingbar_widgets','equals','1'),
            'hint' => array(
                'title'   => __('Sliding Bar Open On Page Load','redux-framework-demo'),
                'content' => __('Sliding Bar Open On Page Load','redux-framework-demo'),
            )
        )
    )
);
/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el el-th',
    'title'     => __('Main Menu', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
        array (
            'id' => 'main_nav_show_home_icon',
            'type' => 'switch',
            'title' =>  __('Show Home Icon', 'redux-framework-demo'),
            'subtitle'  => __('Enable home icon on main menu', 'redux-framework-demo'),
            'desc' => __('', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'compiler' => array('main_nav_show_home_icon'),
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('Show Home Icon','redux-framework-demo'),
                'content' => __('This option Enables\/Disables <strong>Home Icon<\/strong> on main menu. Choose <strong>YES<\/strong> to home icon on main menu, Choose <strong>NO<\/strong> to remove it. Default value is <strong>YES<\/strong>','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'main_nav_show_home_link',
            'type' => 'switch',
            'title' =>  __('Show Home Link', 'redux-framework-demo'),
            'subtitle'  => __('Enable home link on main menu', 'redux-framework-demo'),
            'desc' => __('', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'compiler' => array('main_nav_show_home_link'),
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('Show Home link','redux-framework-demo'),
                'content' => __('This option Enables\/Disables <strong>Home link<\/strong> on main menu. Choose <strong>YES<\/strong> to home link on main menu, Choose <strong>NO<\/strong> to remove it. Default value is <strong>YES<\/strong>','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'main_nav_show_description',
            'type' => 'switch',
            'title' =>  __('Show Menu Description', 'redux-framework-demo'),
            'subtitle'  => __('Enable menu description on main menu', 'redux-framework-demo'),
            'desc' => __('', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'compiler' => array('main_nav_show_description'),
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('Show Menu Description','redux-framework-demo'),
                'content' => __('This option Enables\/Disables <strong>Description<\/strong> on main menu. Choose <strong>YES<\/strong> to show description on main menu, Choose <strong>NO<\/strong> to remove it. Default value is <strong>NO<\/strong>','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'main_nav_search_icon',
            'type' => 'switch',
            'title' =>  __('Show Search Icon in Main Menu', 'redux-framework-demo'),
            'subtitle'  => __('Enable Search on main menu', 'redux-framework-demo'),
            'desc' => __('', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'compiler' => array('main_nav_show_search_icon'),
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('Show Search Icon in Main Menu','redux-framework-demo'),
                'content' => __('This option Enables\/Disables <strong>Search Icon<\/strong> on main menu. Choose <strong>YES<\/strong> to show Search Icon on main menu, Choose <strong>NO<\/strong> to remove it. Default value is <strong>YES<\/strong>','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'menu_display_dropdown_indicator',
            'type' => 'switch',
            'title' =>  __('Dropdown Menu Indicator', 'redux-framework-demo'),
            'subtitle'  => __('Enable arrow indicators next to parent level menu items', 'redux-framework-demo'),
            'desc' => __('Check the box to enable arrow indicators next to parent level menu items', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'compiler' => array('main_nav_show_dropdown_indicator'),
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('Dropdown Menu Indicator','redux-framework-demo'),
                'content' => __('Enable arrow indicators next to parent level menu items','redux-framework-demo'),
            )
        ),
    )
);