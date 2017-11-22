<?php 
/*
*
*
* New Tab Sidebars
*
*
* */

//////////////////////////////////////////////////////////////////////

$this->sections[] = array(
    'icon'      => 'el-icon-hourglass',
    'title'     => __('Sidebars', 'redux-framework-demo'),
    'fields'    => array(
		array (
            'id' => 'header_info',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Pages</h3>',
        ),
		array (
            'id' => 'pages_global_sidebar',
            'type' => 'switch',
            'title' => __('Activate Global Sidebar','redux-framework-demo'),
            'subtitle'  => __('Set a global sidebar on all pages. This option overrides the page options.', 'redux-framework-demo'),
            'desc' => __('Yes if you want to use a global sidebar on all pages.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => 'No',
            'hint' => array(
                'title'   => __('Activate Global Sidebar','redux-framework-demo'),
                'content' => 'Activate Global Sidebar........',
            )
        ),
		array (
            'id' => 'pages_sidebar',
            'type' => 'select',
            'title' => __('Global Sidebar 1','redux-framework-demo'),
            'subtitle'  => __('Selected sidebar will display on all pages.', 'redux-framework-demo'),
            'desc' => __('Select sidebar 1 that will display on all pages.','redux-framework-demo'),
            'options' => aione_get_sidebars(),
			'default' => 'None',
            'required' => array('pages_global_sidebar','equals','1'),
			'hint' => array(
                'title'   => __('Global Sidebar 1','redux-framework-demo'),
                'content' => __('Global Sidebar 1','redux-framework-demo'),
            )
        ), 
		array (
            'id' => 'pages_sidebar_2',
            'type' => 'select',
            'title' => __('Global Sidebar 2','redux-framework-demo'),
            'subtitle'  => __('Selected sidebar will display on all pages. Sidebar 2 can only be used if sidebar 1 is selected', 'redux-framework-demo'),
            'desc' => __('Select sidebar 2 that will display on all pages. Sidebar 2 can only be used if sidebar 1 is selected','redux-framework-demo'),
            'options' => aione_get_sidebars(),
			'default' => 'None',
            'required' => array('pages_global_sidebar','equals','1'),
			'hint' => array(
                'title'   => __('Global Sidebar 2','redux-framework-demo'),
                'content' => __('Global Sidebar 2','redux-framework-demo'),
            )
        ), 
		array (
            'id' => 'default_sidebar_pos',
            'type' => 'select',
            'options' => array (
                'Right' => 'Right',
                'Left' => 'Left',
            ),
            'title' => __('Global Sidebar Position','redux-framework-demo'),
            'subtitle'  => __('Position of Global Sidebar', 'redux-framework-demo'),
            'desc' => __('Choose if the product tabs on the single product page are vertical or horizontal.','redux-framework-demo'),
            'default' => 'Right',
            'required' => array('pages_global_sidebar','equals','1'),
            'hint' => array(
                'title'   => __('Global Sidebar Position','redux-framework-demo'),
                'content' => __('Global Sidebar Position','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'header_info',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Portfolio Posts</h3>',
        ),
		array (
            'id' => 'portfolio_global_sidebar',
            'type' => 'switch',
            'title' => __('Activate Global Sidebar','redux-framework-demo'),
            'subtitle'  => __('Set a global sidebar on all single portfolio posts. This option overrides the portfolio options.', 'redux-framework-demo'),
            'desc' => __('Yes if you want to use a global sidebar on all single portfolio posts. This option overrides the portfolio options.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => 'No',
            'hint' => array(
                'title'   => __('Activate Global Sidebar','redux-framework-demo'),
                'content' => 'Activate Global Sidebar........',
            )
        ),
		array (
            'id' => 'portfolio_sidebar',
            'type' => 'select',
            'title' => __('Global Sidebar 1','redux-framework-demo'),
            'subtitle'  => __('Sidebar 1 that will display on all single portfolio posts.', 'redux-framework-demo'),
            'desc' => __('Select sidebar 1 that will display on all single portfolio posts.','redux-framework-demo'),
            'options' => aione_get_sidebars(),
			'default' => 'None',
            'required' => array('portfolio_global_sidebar','equals','1'),
			'hint' => array(
                'title'   => __('Global Sidebar 1','redux-framework-demo'),
                'content' => __('Global Sidebar 1','redux-framework-demo'),
            )
        ), 
		array (
            'id' => 'portfolio_sidebar_2',
            'type' => 'select',
            'title' => __('Global Sidebar 2','redux-framework-demo'),
            'subtitle'  => __('Sidebar 2 will display on all single portfolio posts. Sidebar 2 can only be used if sidebar 1 is selected', 'redux-framework-demo'),
            'desc' => __('Select sidebar 2 that will display on all single portfolio posts.','redux-framework-demo'),
            'options' => aione_get_sidebars(),
			'default' => 'None',
            'required' => array('portfolio_global_sidebar','equals','1'),
			'hint' => array(
                'title'   => __('Global Sidebar 2','redux-framework-demo'),
                'content' => __('Global Sidebar 2','redux-framework-demo'),
            )
        ), 
		array (
            'id' => 'portfolio_sidebar_position',
            'type' => 'select',
            'options' => array (
                'Right' => 'Right',
                'Left' => 'Left',
            ),
            'title' => __('Global Portfolio Sidebar Position','redux-framework-demo'),
            'subtitle'  => __('set the Global Portfolio Sidebar Position', 'redux-framework-demo'),
            'desc' => __('Select the sidebar 1 position for the portfolio. If sidebar 2 is selected, it will display on the opposite side.','redux-framework-demo'),
            'default' => 'Right',
            'required' => array('portfolio_global_sidebar','equals','1'),
            'hint' => array(
                'title'   => __('Global Portfolio Sidebar Position','redux-framework-demo'),
                'content' => __('Global Portfolio Sidebar Position','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'header_info',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Portfolio Archive/Category Pages</h3>',
        ),
		array (
            'id' => 'portfolio_archive_sidebar',
            'type' => 'select',
            'title' => __('Portfolio Archive/Category Sidebar 1','redux-framework-demo'),
            'subtitle'  => __('Select sidebar 1 that will display on the archive/category pages.', 'redux-framework-demo'),
            'desc' => __('Select sidebar 1 that will display on the archive/category pages.','redux-framework-demo'),
            'options' => aione_get_sidebars(),
			'default' => 'None',
			'hint' => array(
                'title'   => __('Portfolio Archive/Category Sidebar 1','redux-framework-demo'),
                'content' => __('Portfolio Archive/Category Sidebar 1','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'portfolio_archive_sidebar_2',
            'type' => 'select',
            'title' => __('Portfolio Archive/Category Sidebar 2','redux-framework-demo'),
            'subtitle'  => __('Select sidebar 2 that will display on the archive/category pages. Sidebar 2 can only be used if sidebar 1 is selected.', 'redux-framework-demo'),
            'desc' => __('Select sidebar 2 that will display on the archive/category pages.','redux-framework-demo'),
            'options' => aione_get_sidebars(),
			'default' => 'None',
			'hint' => array(
                'title'   => __('Portfolio Archive/Category Sidebar 2','redux-framework-demo'),
                'content' => __('Portfolio Archive/Category Sidebar 2','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'header_info',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Blog Posts</h3>',
        ),
		array (
            'id' => 'posts_global_sidebar',
            'type' => 'switch',
            'title' => __('Activate Global Sidebar','redux-framework-demo'),
            'subtitle'  => __('Set a global sidebar on all single posts. This option overrides the post options.', 'redux-framework-demo'),
            'desc' => __('Yes if you want to use a global sidebar on all single posts.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => 'No',
            'hint' => array(
                'title'   => __('Activate Global Sidebar','redux-framework-demo'),
                'content' => 'Activate Global Sidebar........',
            )
        ),
		array (
            'id' => 'posts_sidebar',
            'type' => 'select',
            'title' => __('Global Sidebar 1','redux-framework-demo'),
            'subtitle'  => __('Sidebar 1 that will display on all single portfolio posts.', 'redux-framework-demo'),
            'desc' => __('Select sidebar 1 that will display on all single posts.','redux-framework-demo'),
            'options' => aione_get_sidebars(),
			'default' => 'None',
            'required' => array('posts_global_sidebar','equals','1'),
			'hint' => array(
                'title'   => __('Global Sidebar 1','redux-framework-demo'),
                'content' => __('Global Sidebar 1','redux-framework-demo'),
            )
        ), 
		array (
            'id' => 'posts_sidebar_2',
            'type' => 'select',
            'title' => __('Global Sidebar 2','redux-framework-demo'),
            'subtitle'  => __('Sidebar 2 that will display on all single posts.', 'redux-framework-demo'),
            'desc' => __('Select sidebar 2 that will display on all single posts.','redux-framework-demo'),
            'options' => aione_get_sidebars(),
			'default' => 'None',
            'required' => array('posts_global_sidebar','equals','1'),
			'hint' => array(
                'title'   => __('Global Sidebar 2','redux-framework-demo'),
                'content' => __('Global Sidebar 2','redux-framework-demo'),
            )
        ), 
		array (
            'id' => 'blog_sidebar_position',
            'type' => 'select',
            'options' => array (
                'Right' => 'Right',
                'Left' => 'Left',
            ),
            'title' => __('Global Sidebar Position','redux-framework-demo'),
            'subtitle'  => __('Set the sidebar 1 position for the blog pages. If sidebar 2 is selected, it will display on the opposite side.', 'redux-framework-demo'),
            'desc' => __('Select the sidebar 1 position for the blog pages.','redux-framework-demo'),
            'default' => 'Right',
            'required' => array('posts_global_sidebar','equals','1'),
            'hint' => array(
                'title'   => __('Global Sidebar Position','redux-framework-demo'),
                'content' => __('Global Sidebar Position','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'header_info',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Blog Archive/Category Pages</h3>',
        ),
		array (
            'id' => 'blog_archive_sidebar',
            'type' => 'select',
            'title' => __('Blog Archive/Category Sidebar 1','redux-framework-demo'),
            'subtitle'  => __('Set the sidebar 1 that will display on the blog archive/category pages.', 'redux-framework-demo'),
            'desc' => __('Select the sidebar 1 that will display on the blog archive/category pages.','redux-framework-demo'),
            'options' => aione_get_sidebars(),
			'default' => 'None',
			'hint' => array(
                'title'   => __('Blog Archive/Category Sidebar 1','redux-framework-demo'),
                'content' => __('Blog Archive/Category Sidebar 1','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'blog_archive_sidebar_2',
            'type' => 'select',
            'title' => __('Portfolio Archive/Category Sidebar 2','redux-framework-demo'),
            'subtitle'  => __('Set the sidebar 2 that will display on the blog archive/category pages.', 'redux-framework-demo'),
            'desc' => __('Select sidebar 2 that will display on the archive/category pages. Sidebar 2 can only be used if sidebar 1 is selected.','redux-framework-demo'),
            'options' => aione_get_sidebars(),
			'default' => 'None',
			'hint' => array(
                'title'   => __('Portfolio Archive/Category Sidebar 2','redux-framework-demo'),
                'content' => __('Portfolio Archive/Category Sidebar 2','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'header_info',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Woocommerce Products</h3>',
        ),
		array (
            'id' => 'woo_global_sidebar',
            'type' => 'switch',
            'title' => __('Activate Global Sidebar','redux-framework-demo'),
            'subtitle'  => __('Set a global sidebar on the main shop page and all single product pages. This option overrides the woocommerce options.', 'redux-framework-demo'),
            'desc' => __('Yes if you want to use a global sidebar on the main shop page and all single product pages.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => 'No',
            'hint' => array(
                'title'   => __('Activate Global Sidebar','redux-framework-demo'),
                'content' => 'Activate Global Sidebar........',
            )
        ),
		array (
            'id' => 'woo_sidebar',
            'type' => 'select',
            'title' => __('Global Sidebar 1','redux-framework-demo'),
            'subtitle'  => __('Set sidebar 1 that will display on all single product pages.', 'redux-framework-demo'),
            'desc' => __('Select sidebar 1 that will display on all single product pages.','redux-framework-demo'),
            'options' => aione_get_sidebars(),
			'default' => 'None',
            'required' => array('woo_global_sidebar','equals','1'),
			'hint' => array(
                'title'   => __('Global Sidebar 1','redux-framework-demo'),
                'content' => __('Global Sidebar 1','redux-framework-demo'),
            )
        ), 
		array (
            'id' => 'woo_sidebar_2',
            'type' => 'select',
            'title' => __('Global Sidebar 2','redux-framework-demo'),
            'subtitle'  => __('Set sidebar 2 that will display on all single product pages. Sidebar 2 can only be used if sidebar 1 is selected', 'redux-framework-demo'),
            'desc' => __('Select sidebar 2 that will display on all single product pages.','redux-framework-demo'),
            'options' => aione_get_sidebars(),
			'default' => 'None',
            'required' => array('woo_global_sidebar','equals','1'),
			'hint' => array(
                'title'   => __('Global Sidebar 2','redux-framework-demo'),
                'content' => __('Global Sidebar 2','redux-framework-demo'),
            )
        ), 
		array (
            'id' => 'woo_sidebar_position',
            'type' => 'select',
            'options' => array (
                'Right' => 'Right',
                'Left' => 'Left',
            ),
            'title' => __('Global Woocommerce Sidebar Position','redux-framework-demo'),
            'subtitle'  => __('Set the sidebar 1 position for woocommerce. If sidebar 2 is selected, it will display on the opposite side.', 'redux-framework-demo'),
            'desc' => __('Select the sidebar 1 position for woocommerce.','redux-framework-demo'),
            'default' => 'Right',
            'required' => array('woo_global_sidebar','equals','1'),
            'hint' => array(
                'title'   => __('Global Woocommerce Sidebar Position','redux-framework-demo'),
                'content' => __('Global Woocommerce Sidebar Position','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'header_info',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>WooCommerce Archive/Category Pages</h3>',
        ),
		array (
            'id' => 'woocommerce_archive_sidebar',
            'type' => 'select',
            'title' => __('Woocommerce Archive/Category Sidebar 1','redux-framework-demo'),
            'subtitle'  => __('Set sidebar 1 that will display on the archive/category pages.', 'redux-framework-demo'),
            'desc' => __('Select sidebar 1 that will display on the archive/category pages.','redux-framework-demo'),
            'options' => aione_get_sidebars(),
			'default' => 'None',
			'hint' => array(
                'title'   => __('Woocommerce Archive/Category Sidebar 1','redux-framework-demo'),
                'content' => __('Woocommerce Archive/Category Sidebar 1','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'woocommerce_archive_sidebar_2',
            'type' => 'select',
            'title' => __('Woocommerce Archive/Category Sidebar 2','redux-framework-demo'),
            'subtitle'  => __('Set sidebar 2 that will display on the archive/category pages. Sidebar 2 can only be used if sidebar 1 is selected.', 'redux-framework-demo'),
            'desc' => __('Select sidebar 2 that will display on the archive/category pages.','redux-framework-demo'),
            'options' => aione_get_sidebars(),
			'default' => 'None',
			'hint' => array(
                'title'   => __('Woocommerce Archive/Category Sidebar 2','redux-framework-demo'),
                'content' => __('Woocommerce Archive/Category Sidebar 2','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'header_info',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Search Page</h3>',
        ),
		array (
            'id' => 'search_sidebar',
            'type' => 'select',
            'title' => __('Search Page Sidebar 1','redux-framework-demo'),
            'subtitle'  => __('Set sidebar 1 that will display on the search results page.', 'redux-framework-demo'),
            'desc' => __('Select sidebar 1 that will display on the search results page.','redux-framework-demo'),
            'options' => aione_get_sidebars(),
			'default' => 'None',
			'hint' => array(
                'title'   => __('Search Page Sidebar 1','redux-framework-demo'),
                'content' => __('Search Page Sidebar 1','redux-framework-demo'),
            )
        ), 
		array (
            'id' => 'search_sidebar_2',
            'type' => 'select',
            'title' => __('Search Page Sidebar 2','redux-framework-demo'),
            'subtitle'  => __('Set sidebar 2 that will display on the search results page. Sidebar 2 can only be used if sidebar 1 is selected.', 'redux-framework-demo'),
            'desc' => __('Select sidebar 2 that will display on the search results page.','redux-framework-demo'),
            'options' => aione_get_sidebars(),
			'default' => 'None',
			'hint' => array(
                'title'   => __('Search Page Sidebar 2','redux-framework-demo'),
                'content' => __('Search Page Sidebar 2','redux-framework-demo'),
            )
        ), 
		array (
            'id' => 'search_sidebar_position',
            'type' => 'select',
            'options' => array (
                'Right' => 'Right',
                'Left' => 'Left',
            ),
            'title' => __('Search Sidebar Position','redux-framework-demo'),
            'subtitle'  => __('Set the sidebar 1 position for the search pages. If sidebar 2 is selected, it will display on the opposite side.', 'redux-framework-demo'),
            'desc' => __('Select the sidebar 1 position for the search pages.','redux-framework-demo'),
            'default' => 'Right',
            'hint' => array(
                'title'   => __('Search Sidebar Position','redux-framework-demo'),
                'content' => __('Search Sidebar Position','redux-framework-demo'),
            )
        ),
    )
);
?>