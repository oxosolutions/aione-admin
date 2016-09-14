<?php
/**
ReduxFramework Sample Config File
For full documentation, please visit: https://docs.reduxframework.com
 * */


// ACTUAL DECLARATION OF SECTIONS



/*********************************************************************************************
 *
 *  pages settings
 *
 *********************************************************************************************/
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
$woo =  'woocommerce/woocommerce.php';
 
if ( is_plugin_active( $woo ) ) { 
$this->sections[] = array(
    'icon'      => 'el-icon-shopping-cart',
    'title'     => __('Woocommerce ', 'redux-framework-demo'),
    'fields'    => array(

		array (
            'id' => 'woocommerce_product_box_design',
            'type' => 'select',
            'title' => __('WooCommerce Product Box Design','redux-framework-demo'),
            'subtitle'  => __('WooCommerce Product Box Design', 'redux-framework-demo'),
            'desc' => __('Select the design for the product boxes. This will automatically alter the grid element and grid box colors.','redux-framework-demo'),
            'options' => array (
                'classic' => 'Classic',
                'clean' => 'Clean',
            ),
            'default' => 'classic',
            'hint' => array(
                'title'   => __('WooCommerce Product Box Design','redux-framework-demo'),
                'content' => __('WooCommerce Product Box Design','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'woo_items',
            'type' => 'text',
            'title' => __('Woocommerce Number of Products per Page','redux-framework-demo'),
            'subtitle'  => __('Woocommerce Number of Products per Page', 'redux-framework-demo'),
            'desc' => __('Insert the number of products to display per page.','redux-framework-demo'),
            'default' => '12',
            'hint' => array(
                'title'   => __('Woocommerce Number of Products per Page','redux-framework-demo'),
                'content' => __('Woocommerce Number of Products per Page','redux-framework-demo'),
            )
        ),
		array (
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
            'title' => __('Woocommerce Number of Product Columns','redux-framework-demo'),
            'subtitle'  => __('Woocommerce Number of Product Columns', 'redux-framework-demo'),
            'desc' => __('Select the number of columns for the main shop page.','redux-framework-demo'),
            'default' => '4',
            'hint' => array(
                'title'   => __('Woocommerce Number of Product Columns','redux-framework-demo'),
                'content' => __('Woocommerce Number of Product Columns','redux-framework-demo'),
            )
        ),
		array (
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
            'title' => __('Woocommerce Related/Up-Sell/Cross-Sell Product Number of Columns','redux-framework-demo'),
            'subtitle'  => __('Woocommerce Related/Up-Sell/Cross-Sell Product Number of Columns', 'redux-framework-demo'),
            'desc' => __('Select the number of columns for the related and up-sell products on single post pages and cross-sells on cart page.','redux-framework-demo'),
            'default' => '4',
            'hint' => array(
                'title'   => __('Woocommerce Related/Up-Sell/Cross-Sell Product Number of Columns','redux-framework-demo'),
                'content' => __('Woocommerce Related/Up-Sell/Cross-Sell Product Number of Columns','redux-framework-demo'),
            )
        ),
		array (
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
            'title' => __('Woocommerce Archive/Category Number of Product Columns','redux-framework-demo'),
            'subtitle'  => __('Woocommerce Archive/Category Number of Product Columns', 'redux-framework-demo'),
            'desc' => __('Select the number of columns for the archive/category pages.','redux-framework-demo'),
            'default' => '3',
            'hint' => array(
                'title'   => __('Woocommerce Archive/Category Number of Product Columns','redux-framework-demo'),
                'content' => __('Woocommerce Archive/Category Number of Product Columns','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'woocommerce_product_tab_design',
            'type' => 'select',
            'options' => array (
                'horizontal' => 'Horizontal Tabs',
                'vertical' => 'Vertical Tabs',
            ),
            'title' => __('WooCommerce Product Tab Design','redux-framework-demo'),
            'subtitle'  => __('WooCommerce Product Tab Design', 'redux-framework-demo'),
            'desc' => __('Choose if the product tabs on the single product page are vertical or horizontal.','redux-framework-demo'),
            'default' => 'vertical',
            'hint' => array(
                'title'   => __('WooCommerce Product Tab Design','redux-framework-demo'),
                'content' => __('WooCommerce Product Tab Design','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'woocommerce_archive_sidebar',
            'type' => 'select',
            'options' => array (
                0 => 'None',
                1 => 'Blog Sidebar',
                2 => 'Footer Widget 1',
                3 => 'Footer Widget 2',
                4 => 'Footer Widget 3',
                5 => 'Footer Widget 4',
                6 => 'SlidingBar Widget 1',
                7 => 'SlidingBar Widget 2',
                8 => 'SlidingBar Widget 3',
                9 => 'SlidingBar Widget 4',
            ),
            'title' => __('Woocommerce Archive/Category Sidebar','redux-framework-demo'),
            'subtitle'  => __('Woocommerce Archive/Category Sidebar.', 'redux-framework-demo'),
            'desc' => __('Select the sidebar that will be added to the archive/category pages.','redux-framework-demo'),
            'default' => 'None',
            'hint' => array(
                'title'   => __('Woocommerce Archive/Category Sidebar','redux-framework-demo'),
                'content' => __('Woocommerce Archive/Category Sidebar','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'woocommerce_aione_ordering',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Woocommerce Shop Page Ordering Boxes','redux-framework-demo'),
            'subtitle'  => __('Disable Woocommerce Shop Page Ordering Boxes.', 'redux-framework-demo'),
            'desc' => __('YES to disable the ordering boxes displayed on the shop page.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable Woocommerce Shop Page Ordering Boxes','redux-framework-demo'),
                'content' => __('Disable Woocommerce Shop Page Ordering Boxes','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'woocommerce_disable_crossfade_effect',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Woocommerce Shop Page Crossfade Image Effect','redux-framework-demo'),
            'subtitle'  => __('Disable Woocommerce Shop Page Crossfade Image Effect', 'redux-framework-demo'),
            'desc' => __('Check the box to disable the product crossfade image effect on the shop page.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable Woocommerce Shop Page Crossfade Image Effect','redux-framework-demo'),
                'content' => __('Disable Woocommerce Shop Page Crossfade Image Effect','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'woocommerce_one_page_checkout',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Use Woocommerce One Page Checkout','redux-framework-demo'),
            'subtitle'  => __('Use Woocommerce One Page Checkout.', 'redux-framework-demo'),
            'desc' => __('YES to use aione\'s one page checkout template.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Use Woocommerce One Page Checkout','redux-framework-demo'),
                'content' => __('Use Woocommerce One Page Checkout','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'woocommerce_enable_order_notes',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Show Woocommerce Order Notes on Checkout','redux-framework-demo'),
            'subtitle'  => __('Show Woocommerce Order Notes on Checkout.', 'redux-framework-demo'),
            'desc' => __('YES to show the order notes on the checkout page..','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Show Woocommerce Order Notes on Checkout','redux-framework-demo'),
                'content' => __('Show Woocommerce Order Notes on Checkout','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'woocommerce_cart_counter',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('WooCommerce Menu Cart Icon Counter','redux-framework-demo'),
            'subtitle'  => __('WooCommerce Menu Cart Icon Counter', 'redux-framework-demo'),
            'desc' => __('Choose to show or hide the cart counter circle.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('WooCommerce Menu Cart Icon Counter','redux-framework-demo'),
                'content' => __('WooCommerce Menu Cart Icon Counter','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'woocommerce_acc_link_top_nav',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Show Woocommerce My Account Link in Secondary Menu','redux-framework-demo'),
            'subtitle'  => __('Show Woocommerce My Account Link in Secondary Menu.', 'redux-framework-demo'),
            'desc' => __('YES to show My Account link, NO to disable. Please note this will not show with Ubermenu.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Show Woocommerce My Account Link in Secondary Menu','redux-framework-demo'),
                'content' => __('Show Woocommerce My Account Link in Secondary Menu','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'woocommerce_cart_link_top_nav',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Show Woocommerce Cart Icon in Secondary Menu','redux-framework-demo'),
            'subtitle'  => __('Show Woocommerce Cart Icon in Secondary Menu.', 'redux-framework-demo'),
            'desc' => __('YES to show the Cart icon, uncheck to disable. Please note this will not show with Ubermenu.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Show Woocommerce Cart Icon in Secondary Menu','redux-framework-demo'),
                'content' => __('Show Woocommerce Cart Icon in Secondary Menu','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'woocommerce_acc_link_main_nav',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Show Woocommerce My Account Link in Main Menu','redux-framework-demo'),
            'subtitle'  => __('Show Woocommerce My Account Link in Main Menu.', 'redux-framework-demo'),
            'desc' => __('YES to show My Account link, NO to disable. Please note these will not show with Ubermenu.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Show Woocommerce My Account Link in Main Menu','redux-framework-demo'),
                'content' => __('Show Woocommerce My Account Link in Main Menu','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'woocommerce_cart_link_main_nav',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Show Woocommerce Cart Icon in Main Menu','redux-framework-demo'),
            'subtitle'  => __('Show Woocommerce Cart Icon in Main Menu', 'redux-framework-demo'),
            'desc' => __('YES to show the Cart icon, NO to disable. Please note these will not show with Ubermenu.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Show Woocommerce Cart Icon in Main Menu','redux-framework-demo'),
                'content' => __('Show Woocommerce Cart Icon in Main Menu','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'woocommerce_social_links',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Show Woocommerce Social Icons','redux-framework-demo'),
            'subtitle'  => __('Show Woocommerce Social Icons.', 'redux-framework-demo'),
            'desc' => __('YES to show the social icons on product pages, NO to disable.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Show Woocommerce Social Icons','redux-framework-demo'),
                'content' => __('Show Woocommerce Social Icons','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'woocommerce_toggle_grid_list',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Product Grid / List View','redux-framework-demo'),
            'subtitle'  => __('Product Grid / List View', 'redux-framework-demo'),
            'desc' => __('Select the box to display the grid/list toggle on the main shop page and category/archive shop pages.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Product Grid / List View','redux-framework-demo'),
                'content' => __('Product Grid / List View','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'woo_acc_msg_1',
            'type' => 'textarea',
            'title' => __('Account Area Message 1','redux-framework-demo'),
            'subtitle'  => __('Account Area Message 1.', 'redux-framework-demo'),
            'desc' => __('Insert your text and it will appear in the first message box on the acount page.','redux-framework-demo'),
            'default' => 'Need Assistance? Call customer service at 888-555-5555.',
            'hint' => array(
                'title'   => __('Account Area Message 1','redux-framework-demo'),
                'content' => __('Account Area Message 1','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'woo_acc_msg_2',
            'type' => 'textarea',
            'title' => __('Account Area Message 2','redux-framework-demo'),
            'subtitle'  => __('Account Area Message 2.', 'redux-framework-demo'),
            'desc' => __('Insert your text and it will appear in the second message box on the acount page.','redux-framework-demo'),
            'default' => 'E-mail them at info@yourshop.com',
            'hint' => array(
                'title'   => __('Account Area Message 2','redux-framework-demo'),
                'content' => __('Account Area Message 2','redux-framework-demo'),
            )
        )

    )
);
}
/*
            *
             *
             *
             * New Tab
             *
             *
             * */

//////////////////////////////////////////////////////////////////////



$this->sections[] = array(
    'icon'      => 'el-icon-path',
    'title'     => __('Portfolio ', 'redux-framework-demo'),
    'fields'    => array(

        array (
            'id' => 'blog_single_post',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>General Portfolio Options</h3>',
        ),
        array (
            'id' => 'portfolio_items',
            'type' => 'text',
            'title' => __('Number of Portfolio Items Per Page','redux-framework-demo'),
            'subtitle'  => __('Number of Portfolio Items Per Page.', 'redux-framework-demo'),
            'desc' => __('Insert the number of posts to display per page.','redux-framework-demo'),
            'default' => '10',
            'hint' => array(
                'title'   => __('Number of Portfolio Items Per Page','redux-framework-demo'),
                'content' => __('Number of Portfolio Items Per Page','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'portfolio_archive_layout',
            'type' => 'select',
            'options' => array (
                'Portfolio One Column' => 'Portfolio One Column',
                'Portfolio Two Column' => 'Portfolio Two Column',
                'Portfolio Three Column' => 'Portfolio Three Column',
                'Portfolio Four Column' => 'Portfolio Four Column',
                'Portfolio One Column Text' => 'Portfolio One Column Text',
                'Portfolio Two Column Text' => 'Portfolio Two Column Text',
                'Portfolio Three Column Text' => 'Portfolio Three Column Text',
                'Portfolio Four Column Text' => 'Portfolio Four Column Text',
                'Portfolio Grid' => 'Portfolio Grid',
            ),
            'title' => __('Portfolio Archive/Category Layout','redux-framework-demo'),
            'subtitle'  => __('Portfolio Archive/Category Layout.', 'redux-framework-demo'),
            'desc' => __('Select the layout for only the archive/category pages.','redux-framework-demo'),
            'default' => 'Portfolio One Column',
            'hint' => array(
                'title'   => __('Portfolio Archive/Category Layout','redux-framework-demo'),
                'content' => __('Portfolio Archive/Category Layout','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'portfolio_column_spacing',
            'type' => 'text',
            'title' => __('Portfolio Archive/Category Column Spacing','redux-framework-demo'),
            'subtitle'  => __('Portfolio Archive/Category Column Spacing', 'redux-framework-demo'),
            'desc' => __('Insert the amount of spacing between portfolio items without "px".ex: 12','redux-framework-demo'),
            'default' => '12',
            'hint' => array(
                'title'   => __('Portfolio Archive/Category Column Spacing','redux-framework-demo'),
                'content' => __('Portfolio Archive/Category Column Spacing','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'portfolio_archive_sidebar',
            'type' => 'select',
            'options' => array (
                0 => 'None',
                1 => 'Blog Sidebar',
                2 => 'Footer Widget 1',
                3 => 'Footer Widget 2',
                4 => 'Footer Widget 3',
                5 => 'Footer Widget 4',
                6 => 'SlidingBar Widget 1',
                7 => 'SlidingBar Widget 2',
                8 => 'SlidingBar Widget 3',
                9 => 'SlidingBar Widget 4',
            ),
            'title' => __('Portfolio Archive/Category Sidebar','redux-framework-demo'),
            'subtitle'  => __('Portfolio Archive/Category Sidebar.', 'redux-framework-demo'),
            'desc' => __('Select the sidebar that will be added to the archive/category pages.','redux-framework-demo'),
            'default' => 'None',
            'hint' => array(
                'title'   => __('Portfolio Archive/Category Sidebar','redux-framework-demo'),
                'content' => __('Portfolio Archive/Category Sidebar','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'portfolio_content_length',
            'type' => 'select',
            'options' => array (
                'Excerpt' => 'Excerpt',
                'Full Content' => 'Full Content',
            ),
            'title' => __('Excerpt or Full Portfolio Content','redux-framework-demo'),
            'subtitle'  => __('Excerpt or Full Portfolio Content.', 'redux-framework-demo'),
            'desc' => __('Choose to display an excerpt or full portfolio content on archive / portfolio pages. Note: The "Full Content" option will override the page excerpt settings.','redux-framework-demo'),
            'default' => 'Excerpt',
            'hint' => array(
                'title'   => __('Excerpt or Full Portfolio Content','redux-framework-demo'),
                'content' => __('Excerpt or Full Portfolio Content','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'excerpt_length_portfolio',
            'type' => 'text',
            'title' => __('Excerpt Length','redux-framework-demo'),
            'subtitle'  => __('Excerpt Length.', 'redux-framework-demo'),
            'desc' => __('Insert the number of words you want to show in the post excerpts.','redux-framework-demo'),
            'default' => '55',
            'hint' => array(
                'title'   => __('Excerpt Length','redux-framework-demo'),
                'content' => __('Excerpt Length','redux-framework-demo'),
            )
        ),
		array (
				'id' => 'portfolio_strip_html_excerpt',
				'type' => 'switch',
				'title' =>  __('Strip HTML from Excerpt', 'redux-framework-demo'),
				'subtitle'  => __('Strip HTML from Excerpt', 'redux-framework-demo'),
				'desc' => __('Set Yes if you want to strip HTML from the excerpt content only.', 'redux-framework-demo'),
				'on' => __('YES', 'redux-framework-demo'),
				'off' => __('NO ', 'redux-framework-demo'),
				'default'   => true,
				'hint' => array(
					'title'   => __('Strip HTML from Excerpt','redux-framework-demo'),
					'content' => __('Strip HTML from Excerpt','redux-framework-demo'),
			)
		),
        array (
            'id' => 'grid_pagination_type',
            'type' => 'select',
            'options' => array (
                'Pagination' => 'Pagination',
                'Infinite Scroll' => 'Infinite Scroll',
            ),
            'title' => __('Pagination Type','redux-framework-demo'),
            'subtitle'  => __('Pagination Type.', 'redux-framework-demo'),
            'desc' => __('Select the pagination type for Portfolio layouts.','redux-framework-demo'),
            'default' => 'pagination',
            'hint' => array(
                'title'   => __('Pagination Type','redux-framework-demo'),
                'content' => __('Pagination Type','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'portfolio_text_layout',
            'type' => 'select',
            'options' => array (
                'boxed' => 'Boxed',
                'unboxed' => 'Unboxed',
            ),
            'title' => __('Portfolio Text Layout','redux-framework-demo'),
            'subtitle'  => __('Portfolio Text Layout', 'redux-framework-demo'),
            'desc' => __('Select if the portfolio text layouts are boxed or unboxed.','redux-framework-demo'),
            'default' => 'unboxed',
            'hint' => array(
                'title'   => __('Portfolio Text Layout','redux-framework-demo'),
                'content' => __('Portfolio Text Layout','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'portfolio_slug',
            'type' => 'text',
            'title' => __('Portfolio Slug','redux-framework-demo'),
            'subtitle'  => __('Portfolio Slug.', 'redux-framework-demo'),
            'desc' => __('Change/Rewrite the permalink when you use the permalink type as %postname%. <strong>Make sure to regenerate permalinks.</strong>','redux-framework-demo'),
            'default' => 'portfolio-items',
            'hint' => array(
                'title'   => __('Portfolio Slug','redux-framework-demo'),
                'title'   => __('Portfolio Slug','redux-framework-demo'),
                'content' => __('Portfolio Slug','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'portfolio_featured_image_size',
            'type' => 'select',
            'options' => array (
                'cropped' => 'Fixed',
                'full' => 'Auto',
            ),
            'title' => __('Portfolio Featured Image Size','redux-framework-demo'),
            'subtitle'  => __('Portfolio Featured Image Size', 'redux-framework-demo'),
            'desc' => __('Choose if the featured images are fixed (cropped) or auto (full image ratio) for all portfolio column page templates. IMPORTANT: Fixed images work best with smaller site widths. Auto images work best with larger site widths.','redux-framework-demo'),
            'default' => 'cropped',
            'hint' => array(
                'title'   => __('Portfolio Featured Image Size','redux-framework-demo'),
                'content' => __('Portfolio Featured Image Size','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_single_post',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Portfolio Single Post Page Options</h3>',
        ),
        array (
            'id' => 'portfolio_featured_images',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Featured Image / Video on Single Post Page','redux-framework-demo'),
            'subtitle'  => __('Featured Image / Video on Single Post Page.', 'redux-framework-demo'),
            'desc' => __('YES to display featured images and videos on single post pages.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Featured Image / Video on Single Post Page','redux-framework-demo'),
                'content' => __('Featured Image / Video on Single Post Page','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'portfolio_pn_nav',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => FALSE,
            'title' => __('Disable Previous/Next Pagination','redux-framework-demo'),
            'subtitle'  => __('Disable Previous/Next Pagination.', 'redux-framework-demo'),
            'desc' => __('YES to disable previous/next pagination.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable Previous/Next Pagination','redux-framework-demo'),
                'content' => __('Disable Previous/Next Pagination','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'portfolio_disable_first_featured_image',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => FALSE,
            'title' => __('Disable First Featured Image','redux-framework-demo'),
            'subtitle'  => __('Disable First Featured Image', 'redux-framework-demo'),
            'desc' => __('Disable the 1st featured image on single post pages.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable First Featured Image','redux-framework-demo'),
                'content' => __('Disable First Featured Image','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'portfolio_featured_image_width',
            'type' => 'select',
            'title' => __('Width (Content Columns for Featured Image)','redux-framework-demo'),
            'subtitle'  => __('Width (Content Columns for Featured Image)', 'redux-framework-demo'),
            'desc' => __('Choose if the featured image is full or half width.','redux-framework-demo'),
            'options' => array (
                'full' => 'Full Width',
                'half' => 'Half Width',
            ),
            'default' => 'full',
            'hint' => array(
                'title'   => __('Width (Content Columns for Featured Image)','redux-framework-demo'),
                'content' => __('Width (Content Columns for Featured Image)','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'portfolio_width_100',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => FALSE,
            'title' => __('Use 100% Width Page','redux-framework-demo'),
            'subtitle'  => __('Use 100% Width Page', 'redux-framework-demo'),
            'desc' => __('Choose to set posts to 100% browser width.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Use 100% Width Page','redux-framework-demo'),
                'content' => __('Use 100% Width Page','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'portfolio_project_desc_title',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => TRUE,
            'title' => __('Show Project Description Title','redux-framework-demo'),
            'subtitle'  => __('Show Project Description Title', 'redux-framework-demo'),
            'desc' => __('Choose to show or hide the project description title.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Show Project Description Title','redux-framework-demo'),
                'content' => __('Show Project Description Title','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'portfolio_project_details',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => TRUE,
            'title' => __('Show Project Details','redux-framework-demo'),
            'subtitle'  => __('Show Project Details', 'redux-framework-demo'),
            'desc' => __('Choose to show or hide the project details text.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Show Project Details','redux-framework-demo'),
                'content' => __('Show Project Details','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'portfolio_link_icon_target',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => FALSE,
            'title' => __('Open Post Links In New Window','redux-framework-demo'),
            'subtitle'  => __('Open Post Links In New Window', 'redux-framework-demo'),
            'desc' => __('Choose to open the single post page, project url and copyright url links in a new window.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Open Post Links In New Window','redux-framework-demo'),
                'content' => __('Open Post Links In New Window','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'portfolio_comments',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => FALSE,
            'title' => __('Show Comments','redux-framework-demo'),
            'subtitle'  => __('Show Comments.', 'redux-framework-demo'),
            'desc' => __('YES to enable comments on portfolio items.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Show Comments','redux-framework-demo'),
                'content' => __('Show Comments','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'portfolio_author',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => FALSE,
            'title' => __('Show Author','redux-framework-demo'),
            'subtitle'  => __('Show Author.', 'redux-framework-demo'),
            'desc' => __('YES to enable Author on portfolio items.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Show Author','redux-framework-demo'),
                'content' => __('Show Author','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'portfolio_social_sharing_box',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Social Sharing Box','redux-framework-demo'),
            'subtitle'  => __('Social Sharing Box.', 'redux-framework-demo'),
            'desc' => __('YES to display the social sharing box.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Social Sharing Box','redux-framework-demo'),
                'content' => __('Social Sharing Box','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'portfolio_related_posts',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Related Posts','redux-framework-demo'),
            'subtitle'  => __('Related Posts.', 'redux-framework-demo'),
            'desc' => __('YES to display related posts.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Related Posts','redux-framework-demo'),
                'content' => __('Related Posts','redux-framework-demo'),
            )
        )
    )
);

/*
             *
              *
              *
              * New Tab Slideshows
              *
              *
              * */

//////////////////////////////////////////////////////////////////////
$this->sections[] = array(
    'icon'      => 'el-icon-screenshot',
    'title'     => __('Slideshows', 'redux-framework-demo'),
    'desc'      => __('<p class="description">This is the Description. Again HTML is allowed</p>', 'redux-framework-demo'),
    'fields'    => array(
        array (

            'id' => 'posts_slideshow_number',
            'type' => 'text',
            'title' => __('Posts Slideshow Images','redux-framework-demo'),
            'subtitle'  => __('Posts Slideshow Images.', 'redux-framework-demo'),
            'desc' => __('This option controls the number of featured image boxes for blog/portfolio slideshows.','redux-framework-demo'),
            'default' => '5',
            'hint' => array(
                'title'   => __('Posts Slideshow Images','redux-framework-demo'),
                'content' => __('Posts Slideshow Images','redux-framework-demo'),
            )
        ),
        array (

            'id' => 'slideshow_autoplay',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Autoplay','redux-framework-demo'),
            'subtitle'  => __('Autoplay.', 'redux-framework-demo'),
            'desc' => __('YES to autoplay the slideshow.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Autoplay','redux-framework-demo'),
                'content' => __('Autoplay','redux-framework-demo'),
            )
        ),
        array (

            'id' => 'slideshow_smooth_height',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Enable Smooth Height','redux-framework-demo'),
            'subtitle'  => __('Enable Smooth Height.', 'redux-framework-demo'),
            'desc' => __('YES to enable smooth height on slideshows when using images with different heights. Please note, smooth height is disabled on blog grid layout.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Enable Smooth Height','redux-framework-demo'),
                'content' => __('Enable Smooth Height','redux-framework-demo'),
            )
        ),
        array (

            'id' => 'slideshow_speed',
            'type' => 'text',
            'title' => __('Slideshow speed','redux-framework-demo'),
            'subtitle'  => __('Slideshow speed.', 'redux-framework-demo'),
            'desc' => __('Controls the speed of slideshows for the [slider] shortcode and sliders within posts. ex: 1000 = 1 second.','redux-framework-demo'),
            'default' => '7000',
            'hint' => array(
                'title'   => __('Slideshow speed','redux-framework-demo'),
                'content' => __('Slideshow speed','redux-framework-demo'),
            )
        ),
        array (

            'id' => 'pagination_video_slide',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Pagination circles below video slides','redux-framework-demo'),
            'subtitle'  => __('Pagination circles below video slides.', 'redux-framework-demo'),
            'desc' => __('YES if you want to show pagination circles below a video slide for the slider shortcode. Leave it unchecked to hide them on video slides.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Pagination circles below video slides','redux-framework-demo'),
                'content' => __('Pagination circles below video slides','redux-framework-demo'),
            )
        ),
        array (

            'id' => 'slider_nav_box_width',
            'type' => 'text',
            'title' => __('Navigation Box Width','redux-framework-demo'),
            'subtitle'  => __('Navigation Box Width', 'redux-framework-demo'),
            'desc' => __('Enter a pixel value for width, ex: 30px','redux-framework-demo'),
            'default' => '30px',
            'hint' => array(
                'title'   => __('Navigation Box Width','redux-framework-demo'),
                'content' => __('Navigation Box Width','redux-framework-demo'),
            )
        ),
        array (

            'id' => 'slider_nav_box_height',
            'type' => 'text',
            'title' => __('Navigation Box Height','redux-framework-demo'),
            'subtitle'  => __('Navigation Box Height', 'redux-framework-demo'),
            'desc' => __('Enter a pixel value for height, ex: 30px','redux-framework-demo'),
            'default' => '30px',
            'hint' => array(
                'title'   => __('Navigation Box Height','redux-framework-demo'),
                'content' => __('Navigation Box Height','redux-framework-demo'),
            )
        ),
		array (

            'id' => 'slider_arrow_size',
            'type' => 'text',
            'title' => __('Navigation Arrow Size','redux-framework-demo'),
            'subtitle'  => __('Navigation Arrow Size', 'redux-framework-demo'),
            'desc' => __('Enter a pixel value for the arrow size, ex: 14px','redux-framework-demo'),
            'default' => '14px',
            'hint' => array(
                'title'   => __('Navigation Arrow Size','redux-framework-demo'),
                'content' => __('Navigation Arrow Size','redux-framework-demo'),
            )
        ),


    )

);

/*
             *
              *
              *
              * New Tab Elastic Slider
              *
              *
              * */

//////////////////////////////////////////////////////////////////////
$this->sections[] = array(
    'icon'      => 'el-icon-star',
    'title'     => __('Elastic Slider', 'redux-framework-demo'),
    'desc'      => __('<p class="description">This is the Description. Again HTML is allowed</p>', 'redux-framework-demo'),
    'fields'    => array(
        array (
            'id' => 'tfes_slider_width',
            'type' => 'text',
            'title' => __('Slider Width','redux-framework-demo'),
            'subtitle'  => __('Slider Width.', 'redux-framework-demo'),
            'desc' => __('In pixels or percentage, ex: 100% or 100.','redux-framework-demo'),
            'default' => '100%',
            'hint' => array(
                'title'   => __('Slider Width','redux-framework-demo'),
                'content' => __('Slider Width','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'tfes_slider_height',
            'type' => 'text',
            'title' => __('Slider Height','redux-framework-demo'),
            'subtitle'  => __('Slider Height.', 'redux-framework-demo'),
            'desc' => __('In pixels, ex: 100px.','redux-framework-demo'),
            'default' => '400px',
            'hint' => array(
                'title'   => __('Slider Height','redux-framework-demo'),
                'content' => __('Slider Height','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'tfes_animation',
            'options' => array (
                'sides' => 'sides',
                'center' => 'center',
            ),
            'type' => 'select',
            'title' => __('Animation','redux-framework-demo'),
            'subtitle'  => __('Animation.', 'redux-framework-demo'),
            'desc' => __('Slides animate from sides or center.','redux-framework-demo'),
            'default' => 'sides',
            'hint' => array(
                'title'   => __('Animation','redux-framework-demo'),
                'content' => __('Animation','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'tfes_autoplay',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Autoplay','redux-framework-demo'),
            'subtitle'  => __('Autoplay.', 'redux-framework-demo'),
            'desc' => __('YES to autoplay the slides.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Autoplay','redux-framework-demo'),
                'content' => __('Autoplay','redux-framework-demo'),
            )

        ),
        array (
            'id' => 'tfes_interval',
            'type' => 'text',
            'title' => __('Slideshow Interval','redux-framework-demo'),
            'subtitle'  => __('Slideshow Interval.', 'redux-framework-demo'),
            'desc' => __('Select the slideshow speed, 1000 = 1 second.','redux-framework-demo'),
            'default' => '3000',
            'hint' => array(
                'title'   => __('Slideshow Interval','redux-framework-demo'),
                'content' => __('Slideshow Interval','redux-framework-demo'),
            )
        ),
        array (

            'id' => 'tfes_speed',
            'type' => 'text',
            'title' => __('Sliding Speed','redux-framework-demo'),
            'subtitle'  => __('Sliding Speed.', 'redux-framework-demo'),
            'desc' => __('Select the animation speed, 1000 = 1 second.','redux-framework-demo'),
            'default' => '800',
            'hint' => array(
                'title'   => __('Sliding Speed','redux-framework-demo'),
                'content' => __('Sliding Speed','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'tfes_width',
            'type' => 'text',
            'title' => __('Thumbnail Width','redux-framework-demo'),
            'subtitle'  => __('Thumbnail Width.', 'redux-framework-demo'),
            'desc' => __('Enter the width for thumbnail without \'px\' ex: 100.','redux-framework-demo'),
            'default' => '150',
            'hint' => array(
                'title'   => __('Thumbnail Width','redux-framework-demo'),
                'content' => __('Thumbnail Width','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'es_title_font_size',
            'type' => 'text',
            'title' => __('Title Font Size (px)','redux-framework-demo'),
            'subtitle'  => __('Title Font Size (px).', 'redux-framework-demo'),
            'desc' => __('Default is 42','redux-framework-demo'),
            'default' => '42',
            'hint' => array(
                'title'   => __('Title Font Size (px)','redux-framework-demo'),
                'content' => __('Title Font Size (px)','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'es_caption_font_size',
            'type' => 'text',
            'title' => __('Caption Font Size (px)','redux-framework-demo'),
            'subtitle'  => __('Caption Font Size (px).', 'redux-framework-demo'),
            'desc' => __('Default is 20','redux-framework-demo'),
            'default' => '20',
            'hint' => array(
                'title'   => __('Caption Font Size (px)','redux-framework-demo'),
                'content' => __('Caption Font Size (px)','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'es_title_color',
            'type' => 'color',
            'title' => __('Title Color','redux-framework-demo'),
            'subtitle'  => __('Title Color.', 'redux-framework-demo'),
            'desc' => __('Controls the text color of the title font.','redux-framework-demo'),
            'default' => '#333333',
            'hint' => array(
                'title'   => __('Title Color','redux-framework-demo'),
                'content' => __('Title Color','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'es_caption_color',
            'type' => 'color',
            'title' => __('Caption Color','redux-framework-demo'),
            'subtitle'  => __('Caption Color.', 'redux-framework-demo'),
            'desc' => __('Controls the text color of the caption font.','redux-framework-demo'),
            'default' => '#747474',
            'hint' => array(
                'title'   => __('Caption Color','redux-framework-demo'),
                'content' => __('Caption Color','redux-framework-demo'),
            )
        ),

    )

);
/*
             *
              *
              *
              * New Tab LIGHTBOX
              *
              *
              * */

//////////////////////////////////////////////////////////////////////
$this->sections[] = array(
    'icon'      => 'el-icon-wrench',
    'title'     => __('Lightbox', 'redux-framework-demo'),
    'desc'      => __('<p class="description">This is the Description. Again HTML is allowed</p>', 'redux-framework-demo'),
    'fields'    => array(
        
		array (
            'id' => 'status_lightbox',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Lightbox','redux-framework-demo'),
            'subtitle'  => __('Disable Lightbox', 'redux-framework-demo'),
            'desc' => __('YES to disable Lightbox','redux-framework-demo'),
           'hint' => array(
             'title'   => __('Disable Lightbox','redux-framework-demo'),
             'content' => __('Disable Lightbox','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'status_lightbox_single',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Lightbox On Single Post Pages Only','redux-framework-demo'),
            'subtitle'  => __('Disable Lightbox On Single Post Pages Only', 'redux-framework-demo'),
            'desc' => __('YES to disable Lightbox only on single posts and portfolio pages.','redux-framework-demo'),
           'hint' => array(
             'title'   => __('Disable Lightbox On Single Post Pages Only','redux-framework-demo'),
             'content' => __('Disable Lightbox On Single Post Pages Only','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'lightbox_behavior',
            'type' => 'select',
            'title' => __('Lightbox Behavior','redux-framework-demo'),
            'subtitle'  => __('Lightbox Behavior', 'redux-framework-demo'),
            'desc' => __('Select what the lightbox will display for portfolio and blog posts.','redux-framework-demo'),
            'options' => array (
                'all' => 'First featured image of every post',
                'individual' => 'Only featured images of individual post', 
            ),
            'default' => 'all',
            'hint' => array(
                'title'   => __('Lightbox Behavior','redux-framework-demo'),
                'content' => __('Lightbox Behavior','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'lightbox_skin',
            'type' => 'select',
            'title' => __('Lightbox Skin','redux-framework-demo'),
            'subtitle'  => __('Lightbox Skin', 'redux-framework-demo'),
            'desc' => __('Choose a skin for the lightbox.','redux-framework-demo'),
            'options' => array (
                'light' => 'Light',
                'dark'  => 'Dark', 
				'mac'   => 'Mac',
				'metro-black'  => 'Metro Black',
				'metro-white'  => 'Metro White',
				'parade'  => 'Parade',
				'smooth'  => 'Smooth',
            ),
            'default' => 'metro-white',
            'hint' => array(
                'title'   => __('Lightbox Skin','redux-framework-demo'),
                'content' => __('Lightbox Skin','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'lightbox_path',
            'type' => 'select',
            'title' => __('Thumbnails Position','redux-framework-demo'),
            'subtitle'  => __('Thumbnails Position', 'redux-framework-demo'),
            'desc' => __('Choose position of thumbnails.','redux-framework-demo'),
            'options' => array (
                'vertical' => 'Right',
                'horizontal' => 'Bottom', 
            ),
            'default' => 'all',
            'hint' => array(
                'title'   => __('Thumbnails Position','redux-framework-demo'),
                'content' => __('Thumbnails Position','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'lightbox_animation_speed',
            'type' => 'select',
            'options' => array (
                'Fast' => 'Fast',
                'Slow' => 'Slow',
                'Normal' => 'Normal',
            ),
            'title' => __('Animation Speed','redux-framework-demo'),
            'subtitle'  => __('Animation Speed.', 'redux-framework-demo'),
            'desc' => __('Set the speed of the animation.','redux-framework-demo'),
            'default' => 'fast',
            'hint' => array(
					'title'   => __('Animation Speed','redux-framework-demo'),
					'content' => __('Animation Speed','redux-framework-demo'),
             )

        ),
		array (
            'id' => 'lightbox_arrows',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Show Arrows','redux-framework-demo'),
            'subtitle'  => __('Show Arrows', 'redux-framework-demo'),
            'desc' => __('YES to show arrows.','redux-framework-demo'),
           'hint' => array(
             'title'   => __('Show Arrows','redux-framework-demo'),
             'content' => __('Show Arrows','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'lightbox_gallery',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Show Gallery Start/Stop Button','redux-framework-demo'),
            'subtitle'  => __('Show Gallery Start/Stop Button', 'redux-framework-demo'),
            'desc' => __('YES to show the gallery start and stop button.','redux-framework-demo'),
           'hint' => array(
             'title'   => __('Show Gallery Start/Stop Button','redux-framework-demo'),
             'content' => __('Show Gallery Start/Stop Button','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'lightbox_autoplay',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Autoplay the Lightbox Gallery','redux-framework-demo'),
            'subtitle'  => __('Autoplay the Lightbox Gallery.', 'redux-framework-demo'),
            'desc' => __('YES to autoplay the lightbox gallery.','redux-framework-demo'),
             'hint' => array(
             'title'   => __('Autoplay the Lightbox Gallery','redux-framework-demo'),
             'content' => __('Autoplay the Lightbox Gallery','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'lightbox_slideshow_speed',
            'type' => 'text',
            'title' => __('Slideshow Speed','redux-framework-demo'),
            'subtitle'  => __('Slideshow Speed.', 'redux-framework-demo'),
            'desc' => __('If autoplay is enabled, set the slideshow speed, 1000 = 1 second.','redux-framework-demo'),
            'default' => '5000',
              'hint' => array(
              'title'   => __('Slideshow Speed','redux-framework-demo'),
              'content' => __('Slideshow Speed','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'lightbox_opacity',
            'type' => 'text',
            'title' => __('Background Opacity','redux-framework-demo'),
            'subtitle'  => __('Background Opacity.', 'redux-framework-demo'),
            'desc' => __('Set the opacity of background, <br />0.1 (lowest) to 1 (highest).','redux-framework-demo'),
            'default' => '0.8',
           'hint' => array(
           'title'   => __('Background Opacity','redux-framework-demo'),
           'content' => __('Background Opacity','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'lightbox_title',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Show Title','redux-framework-demo'),
            'subtitle'  => __('Show Title', 'redux-framework-demo'),
            'desc' => __('YES to show the image title in the lightbox.','redux-framework-demo'),
            'hint' => array(
            'title'   => __('Show Title','redux-framework-demo'),
             'content' => __('Show Title','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'lightbox_desc',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Show Caption','redux-framework-demo'),
            'subtitle'  => __('Show Caption.', 'redux-framework-demo'),
            'desc' => __('YES to show the image caption in the lightbox.','redux-framework-demo'),
            'hint' => array(
				   'title'   => __('Show Caption','redux-framework-demo'),
				   'content' => __('Show Caption','redux-framework-demo'),
				)
        ),
        array (
            'id' => 'lightbox_social',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Social Sharing','redux-framework-demo'),
            'subtitle'  => __('Social Sharing.', 'redux-framework-demo'),
            'desc' => __('YES to show social sharing buttons on lightbox.','redux-framework-demo'),
            'hint' => array(
            'title'   => __('Social Sharing','redux-framework-demo'),
            'content' => __('Social Sharing','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'lightbox_deeplinking',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Deeplinking','redux-framework-demo'),
            'subtitle'  => __('Deeplinking.', 'redux-framework-demo'),
            'desc' => __('YES to deeplink images in the lightbox.','redux-framework-demo'),
            'hint' => array(
				'title'   => __('Deeplinking','redux-framework-demo'),
				'content' => __('Deeplinking','redux-framework-demo'),
				)
        ),
        array (
            'id' => 'lightbox_post_images',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Show Post Images in Lightbox','redux-framework-demo'),
            'subtitle'  => __('Show Post Images in Lightbox.', 'redux-framework-demo'),
            'desc' => __('YES to show post images that are inside the post content area in the lightbox.','redux-framework-demo'),
           'hint' => array(
           'title'   => __('Show Post Images in Lightbox','redux-framework-demo'),
          'content' => __('Show Post Images in Lightbox','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'lightbox_video_width',
            'type' => 'text',
            'title' => __('Slideshow Video Width','redux-framework-demo'),
            'subtitle'  => __('Slideshow Video Width', 'redux-framework-demo'),
            'desc' => __('Set the width that will be used for videos inside the lightbox. In pixel, ex. 800px','redux-framework-demo'),
			'default' => '1280px',
            'hint' => array(
				'title'   => __('Slideshow Video Width','redux-framework-demo'),
				'content' => __('Slideshow Video Width','redux-framework-demo'),
				)
        ),
		array (
            'id' => 'lightbox_video_height',
            'type' => 'text',
            'title' => __('Slideshow Video Height','redux-framework-demo'),
            'subtitle'  => __('Slideshow Video Height', 'redux-framework-demo'),
            'desc' => __('Set the height that will be used for videos inside the lightbox. In pixel, ex. 600px','redux-framework-demo'),
			'default' => '720px',
            'hint' => array(
				'title'   => __('Slideshow Video Height','redux-framework-demo'),
				'content' => __('Slideshow Video Height','redux-framework-demo'),
				)
        ),
    )

    );




/*
             *
              *
              *
              * New Tab Extra
              *
              *
              * */

//////////////////////////////////////////////////////////////////////
$this->sections[] = array(
    'icon'      => 'el-icon-scissors',
    'title'     => __('Extra', 'redux-framework-demo'),
    'desc'      => __('<p class="description">This is the Description. Again HTML is allowed</p>', 'redux-framework-demo'),
    'fields'    => array(
        array (
            'id' => 'misc_options',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Miscellaneous Options</h3>',
        ),
		array (
            'id' => 'sidenav_behavior',
            'options' => array (
                'Hover' => 'Hover',
                'Click' => 'Click',
            ),
            'type' => 'select',
            'title' => __('Sidenav Behavior','redux-framework-demo'),
            'subtitle'  => __('Sidenav Behavior.', 'redux-framework-demo'),
            'desc' => __('Controls the side navigation animation for child pages, on click or hover.','redux-framework-demo'),
            'default' => 'hover',
            'hint' => array(
                'title'   => __('Sidenav Behavior','redux-framework-demo'),
                'content' => __('Sidenav Behavior','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'featured_image_placeholder',
            'type' => 'switch',
            'title' => __('Image Placeholders','redux-framework-demo'),
            'subtitle'  => __('Image Placeholders', 'redux-framework-demo'),
            'desc' => __('Yes to enable the showing of posts without a featured image on portfolio archives and related posts/projects carousels.','redux-framework-demo'),
			'on' => __('YES', 'redux-framework-demo'),
			'off' => __('NO ', 'redux-framework-demo'),
			'default'   => true,
            'hint' => array(
                'title'   => __('Image Placeholders','redux-framework-demo'),
                'content' => __('Image Placeholders','redux-framework-demo'),
            )
        ),
        
        /*array (
            'id' => 'number_related_posts',
            'type' => 'text',
            'title' => __('Number of Related Posts / Projects','redux-framework-demo'),
            'subtitle'  => __('Number of Related Posts / Projects.', 'redux-framework-demo'),
            'desc' => __('This option controls the amount of related projects / posts that show up on each single portfolio and blog post. ex: 5','redux-framework-demo'),
            'default' => '5',
            'hint' => array(
                'title'   => __('Number of Related Posts / Projects','redux-framework-demo'),
                'content' => __('Number of Related Posts / Projects','redux-framework-demo'),
            )
        ),*/
        array (
            'id' => 'excerpt_base',
            'options' => array (
                'Words' => 'Words',
                'Characters' => 'Characters',
            ),
            'type' => 'select',
            'title' => __('Basis for Excerpt Length','redux-framework-demo'),
            'subtitle'  => __('Basis for Excerpt Length.', 'redux-framework-demo'),
            'desc' => __('Choose if the excerpt length should be based on words or characters.','redux-framework-demo'),
            'default' => 'words',
            'hint' => array(
                'title'   => __('Basis for Excerpt Length','redux-framework-demo'),
                'content' => __('Basis for Excerpt Length','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'disable_excerpts',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable [...] on Excerpts','redux-framework-demo'),
            'subtitle'  => __('Disable [...] on Excerpts.', 'redux-framework-demo'),
            'desc' => __('YES to disable the read more sign [...] on excerpts throughout the site.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable [...] on Excerpts','redux-framework-demo'),
                'content' => __('Disable [...] on Excerpts','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'link_read_more',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Make [...] Link to Single Post Page','redux-framework-demo'),
            'subtitle'  => __('Make [...] Link to Single Post Page.', 'redux-framework-demo'),
            'desc' => __('YES to have the read more sign [...] on excerpts link to single post page.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Make [...] Link to Single Post Page','redux-framework-demo'),
                'content' => __('Make [...] Link to Single Post Page','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'comments_pages',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Allow Comments on Pages','redux-framework-demo'),
            'subtitle'  => __('Allow Comments on Pages.', 'redux-framework-demo'),
            'desc' => __('YES to allow comments on regular pages.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Allow Comments on Pages','redux-framework-demo'),
                'content' => __('Allow Comments on Pages','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'featured_images_pages',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Featured Images on Pages','redux-framework-demo'),
            'subtitle'  => __('Disable Featured Images on Pages', 'redux-framework-demo'),
            'desc' => __('YES to disable featured images on regular pages.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable Featured Images on Pages','redux-framework-demo'),
                'content' => __('Disable Featured Images on Pages','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'faq_featured_image',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('FAQ Featured Images','redux-framework-demo'),
            'subtitle'  => __('FAQ Featured Images.', 'redux-framework-demo'),
            'desc' => __('YES to show featured images on FAQ archive page.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('FAQ Featured Images','redux-framework-demo'),
                'content' => __('FAQ Featured Images','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'faq_filters',
            'type' => 'select',
            'title' => __('FAQ Filters','redux-framework-demo'),
            'subtitle'  => __('FAQ Filters', 'redux-framework-demo'),
            'desc' => __('Choose to show or hide filters, or to display them without "All".','redux-framework-demo'),
            'options' => array (
                'yes' => 'Show',
                'yes_without_all' => 'Show without "All"',
                'no' => 'Hide',
            ),
            'default' => 'yes',
            'hint' => array(
                'title'   => __('FAQ Filters','redux-framework-demo'),
                'content' => __('FAQ Filters','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'nofollow_social_links',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Add rel="nofollow" to social links','redux-framework-demo'),
            'subtitle'  => __('Add rel="nofollow" to social links.', 'redux-framework-demo'),
            'desc' => __('YES to add rel="nofollow" attribute to all social links.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Add rel="nofollow" to social links','redux-framework-demo'),
                'content' => __('Add rel="nofollow" to social links','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'social_icons_new',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Open Social Icons in a New Window','redux-framework-demo'),
            'subtitle'  => __('Open Social Icons in a New Window.', 'redux-framework-demo'),
            'desc' => __('YES to allow social icons to open in a new window.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Open Social Icons in a New Window','redux-framework-demo'),
                'content' => __('Open Social Icons in a New Window','redux-framework-demo'),
            )

        ),
		array (
            'id' => 'form_input_height',
            'type' => 'text',
            'title' => __('Form Input and Select Height','redux-framework-demo'),
            'subtitle'  => __('Form Input and Select Height', 'redux-framework-demo'),
            'desc' => __('This option controls the height of all search, form input and select fields. ex: 20px.','redux-framework-demo'),
			'default' => '29px',
            'hint' => array(
                'title'   => __('Form Input and Select Height','redux-framework-demo'),
                'content' => __('Form Input and Select Height','redux-framework-demo'),
            )

        ),
		array (
            'id' => 'pw_jpeg_quality',
            'type' => 'text',
            'title' => __('WordPress jpeg Quality','redux-framework-demo'),
            'subtitle'  => __('WordPress jpeg Quality', 'redux-framework-demo'),
            'desc' => __('This option controls the quality of the generated image sizes for every uploaded image. 
							Ranges between 0 and 100 percent. Higher values lead to better image qualities but also higher file sizes.
							NOTE: After changing this value, please (install and) run Regenerate Thumbnails
							','redux-framework-demo'),
			'default' => '90',
            'hint' => array(
                'title'   => __('WordPress jpeg Quality','redux-framework-demo'),
                'content' => __('WordPress jpeg Quality','redux-framework-demo'),
            )

        ),
		array (
            'id' => 'projects',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Related Posts / Projects</h3>',
        ),
		array (
            'id' => 'number_related_posts',
            'type' => 'text',
            'title' => __('Number of Related Posts / Projects','redux-framework-demo'),
            'subtitle'  => __('Number of Related Posts / Projects', 'redux-framework-demo'),
            'desc' => __('This option controls the amount of related posts / projects that show up on each single portfolio and blog post. ex: 5','redux-framework-demo'),
			'default' => '5',
            'hint' => array(
                'title'   => __('Number of Related Posts / Projects','redux-framework-demo'),
                'content' => __('Number of Related Posts / Projects','redux-framework-demo'),
            )

        ),
		array (
            'id' => 'related_posts_columns',
            'type' => 'select',
            'title' => __('Related Posts / Projects Maximum Columns','redux-framework-demo'),
            'subtitle'  => __('Related Posts / Projects Maximum Columns', 'redux-framework-demo'),
            'desc' => __('Select the number of max columns to display.','redux-framework-demo'),
            'options' => array (
                '1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4',
				'5' => '5',
				'6' => '6',
            ),
            'default' => '5',
            'hint' => array(
                'title'   => __('Related Posts / Projects Maximum Columns','redux-framework-demo'),
                'content' => __('Related Posts / Projects Maximum Columns','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'related_posts_column_spacing',
            'type' => 'text',
            'title' => __('Related Posts / Projects Column Spacing','redux-framework-demo'),
            'subtitle'  => __('Related Posts / Projects Column Spacing', 'redux-framework-demo'),
            'desc' => __('Insert the amount of spacing between items without "px". ex: 40','redux-framework-demo'),
			'default' => '44',
            'hint' => array(
                'title'   => __('Related Posts / Projects Column Spacing','redux-framework-demo'),
                'content' => __('Related Posts / Projects Column Spacing','redux-framework-demo'),
            )

        ),
		array (
            'id' => 'related_posts_layout',
            'type' => 'select',
            'title' => __('Related Posts / Projects Layout','redux-framework-demo'),
            'subtitle'  => __('Related Posts / Projects Layout', 'redux-framework-demo'),
            'desc' => __('Choose to show titles on rollover image, or below image.','redux-framework-demo'),
            'options' => array (
                'title_on_rollover' => 'Title on rollover',
                'title_below_image' => 'Title below image',
            ),
            'default' => 'title_on_rollover',
            'hint' => array(
                'title'   => __('Related Posts / Projects Layout','redux-framework-demo'),
                'content' => __('Related Posts / Projects Layout','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'related_posts_image_size',
            'type' => 'select',
            'title' => __('Related Posts / Projects Image Size','redux-framework-demo'),
            'subtitle'  => __('Related Posts / Projects Image Size', 'redux-framework-demo'),
            'desc' => __('Choose if the images are fixed (cropped) or auto (full image ratio) for related posts / projects. IMPORTANT: Fixed images work best with smaller site widths. Auto images work best with larger site widths.','redux-framework-demo'),
            'options' => array (
                'cropped' => 'Fixed',
                'full' => 'Auto',
            ),
            'default' => 'cropped',
            'hint' => array(
                'title'   => __('Related Posts / Projects Image Size','redux-framework-demo'),
                'content' => __('Related Posts / Projects Image Size','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'related_posts_autoplay',
            'type' => 'switch',
            'title' =>  __('Related Posts / Projects Autoplay', 'redux-framework-demo'),
            'subtitle'  => __('Related Posts / Projects Autoplay', 'redux-framework-demo'),
            'desc' => __('Yes to enable to autoplay on the carousel.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'hint' => array(
                'title'   => __('Related Posts / Projects Autoplay','redux-framework-demo'),
                'content' => __('Related Posts / Projects Autoplay','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'related_posts_speed',
            'type' => 'text',
            'title' => __('Related Posts / Projects Speed','redux-framework-demo'),
            'subtitle'  => __('Related Posts / Projects Speed', 'redux-framework-demo'),
            'desc' => __('Controls the speed of all carousel elements. ex: 1000 = 1 second.','redux-framework-demo'),
			'default' => '2500',
            'hint' => array(
                'title'   => __('Related Posts / Projects Speed','redux-framework-demo'),
                'content' => __('Related Posts / Projects Speed','redux-framework-demo'),
            )

        ),
		array (
            'id' => 'related_posts_navigation',
            'type' => 'switch',
            'title' =>  __('Related Posts / Projects Show Navigation', 'redux-framework-demo'),
            'subtitle'  => __('Related Posts / Projects Show Navigation', 'redux-framework-demo'),
            'desc' => __('Yes to enable navigation buttons on the carousel.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'hint' => array(
                'title'   => __('Related Posts / Projects Show Navigation','redux-framework-demo'),
                'content' => __('Related Posts / Projects Show Navigation','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'related_posts_swipe',
            'type' => 'switch',
            'title' =>  __('Related Posts / Projects Mouse Scroll', 'redux-framework-demo'),
            'subtitle'  => __('Related Posts / Projects Mouse Scroll', 'redux-framework-demo'),
            'desc' => __('Yes to enable mouse drag control on the carousel.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'hint' => array(
                'title'   => __('Related Posts / Projects Mouse Scroll','redux-framework-demo'),
                'content' => __('Related Posts / Projects Mouse Scroll','redux-framework-demo'),
            )
        ),

        array (
            'id' => 'rollovers',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Image Rollover Options</h3>',
        ),
        array (
            'id' => 'image_rollover',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Image Rollover','redux-framework-demo'),
            'subtitle'  => __('Image Rollover.', 'redux-framework-demo'),
            'desc' => __('YES to show the rollover box on images.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Image Rollover','redux-framework-demo'),
                'content' => __('Image Rollover','redux-framework-demo'),
            )

        ),
		array (
            'id' => 'image_rollover_direction',
            'type' => 'select',
            'title' => __('Rollover Image Direction','redux-framework-demo'),
            'subtitle'  => __('Rollover Image Direction', 'redux-framework-demo'),
            'desc' => __('Select from which direction the rollover should start.','redux-framework-demo'),
            'options' => array (
                'fade' => 'Fade',
                'left' => 'Left',
				'Right' => 'Right',
				'Bottom' => 'Bottom',
				'Top' => 'Top',
				'center_horiz' => 'Center Horizontal',
				'center_vertical' => 'Center Vertical',
            ),
            'default' => 'left',
            'hint' => array(
                'title'   => __('Rollover Image Direction','redux-framework-demo'),
                'content' => __('Rollover Image Direction','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'image_rollover_icon_size',
            'type' => 'text',
            'title' => __('Rollover Image Icon Font Size','redux-framework-demo'),
            'subtitle'  => __('Rollover Image Icon Font Size', 'redux-framework-demo'),
            'desc' => __('Controls the font size of the icons in the rollover. In pixels, default is 15.','redux-framework-demo'),
			'default' => '15',
            'hint' => array(
                'title'   => __('Rollover Image Icon Font Size','redux-framework-demo'),
                'content' => __('Rollover Image Icon Font Size','redux-framework-demo'),
            )

        ),
        array (
            'id' => 'link_image_rollover',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Link Icon From Image Rollover','redux-framework-demo'),
            'subtitle'  => __('Disable Link Icon From Image Rollover.', 'redux-framework-demo'),
            'desc' => __('YES to disable the link icon from image rollovers. Note: This option will override the post settings.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable Link Icon From Image Rollover','redux-framework-demo'),
                'content' => __('Disable Link Icon From Image Rollover','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'zoom_image_rollover',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Image Icon From Image Rollover','redux-framework-demo'),
            'subtitle'  => __('Disable Image Icon From Image Rollover.', 'redux-framework-demo'),
            'desc' => __('YES to disable the image icon from image rollovers. Note: This option will override the post settings.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable Image Icon From Image Rollover','redux-framework-demo'),
                'content' => __('Disable Image Icon From Image Rollover','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'title_image_rollover',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Title From Image Rollover','redux-framework-demo'),
            'subtitle'  => __('Disable Title From Image Rollover.', 'redux-framework-demo'),
            'desc' => __('YES to disable the title from image rollovers.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable Title From Image Rollover','redux-framework-demo'),
                'content' => __('Disable Title From Image Rollover','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'cats_image_rollover',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Categories From Image Rollover','redux-framework-demo'),
            'subtitle'  => __('Disable Categories From Image Rollover.', 'redux-framework-demo'),
            'desc' => __('YES to disable the categories from image rollovers.','redux-framework-demo'),
            'hint' => array(
				'title'   => __('Disable Categories From Image Rollover','redux-framework-demo'),
				'content' => __('Disable Categories From Image Rollover','redux-framework-demo'),
			)
        ),
		array (
            'id' => 'icon_circle_image_rollover',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Icon Circle From Image Rollover','redux-framework-demo'),
            'subtitle'  => __('Disable Icon Circle From Image Rollover', 'redux-framework-demo'),
            'desc' => __('YES to disable the icon circle from images.','redux-framework-demo'),
            'hint' => array(
				'title'   => __('Disable Icon Circle From Image Rollover','redux-framework-demo'),
				'content' => __('Disable Icon Circle From Image Rollover','redux-framework-demo'),
			)
        ),
		array (
            'id' => 'pagination_heading',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Pagination Options</h3>',
        ),
		array (
            'id' => 'pagination_box_padding',
            'type' => 'text',
            'title' => __('Pagination Box Padding','redux-framework-demo'),
            'subtitle'  => __('Pagination Box Padding', 'redux-framework-demo'),
            'desc' => __('Controls the padding inside the box, ex: 10px or 10%.','redux-framework-demo'),
			'default' => '2px 6px',
            'hint' => array(
                'title'   => __('Pagination Box Padding','redux-framework-demo'),
                'content' => __('Pagination Box Padding','redux-framework-demo'),
            )

        ),
		array (
            'id' => 'pagination_text_display',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Pagination Text Display','redux-framework-demo'),
            'subtitle'  => __('Pagination Text Display', 'redux-framework-demo'),
            'desc' => __('Controls if "Previous" and "Next" text is displayed or not.','redux-framework-demo'),
            'hint' => array(
				'title'   => __('Pagination Text Display','redux-framework-demo'),
				'content' => __('Pagination Text Display','redux-framework-demo'),
			)
        ),
        /*array (
            'id' => 'image_rollover_opacity',
            'type' => 'text',
            'title' => __('Image Rollover Opacity','redux-framework-demo'),
            'subtitle'  => __('Image Rollover Opacity.', 'redux-framework-demo'),
            'desc' => __('Select the opacity of the rollover. <br />0.1 (lowest) to 1 (highest).','redux-framework-demo'),
            'default' => '1',
            'hint' => array(
                'title'   => __('Image Rollover Opacity','redux-framework-demo'),
                'content' => __('Image Rollover Opacity','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'bbpress_only',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>BBPress Options</h3>',
        ),
        array (
            'id' => 'bbpress_global_sidebar',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('BBPress Use Global Sidebar','redux-framework-demo'),
            'subtitle'  => __('BBPress Use Global Sidebar.', 'redux-framework-demo'),
            'desc' => __('YES if you want to use one global sidebar on all forum pages.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('BBPress Use Global Sidebar','redux-framework-demo'),
                'content' => __('BBPress Use Global Sidebar','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'ppbress_sidebar',
            'type' => 'select',
            'options' => array (
                0 => 'None',
                1 => 'Blog Sidebar',
                2 => 'Footer Widget 1',
                3 => 'Footer Widget 2',
                4 => 'Footer Widget 3',
                5 => 'Footer Widget 4',
                6 => 'SlidingBar Widget 1',
                7 => 'SlidingBar Widget 2',
                8 => 'SlidingBar Widget 3',
                9 => 'SlidingBar Widget 4',
            ),
            'title' => __('BBPress Global Sidebar','redux-framework-demo'),
            'subtitle'  => __('BBPress Global Sidebar.', 'redux-framework-demo'),
            'desc' => __('Select the sidebar that will display on forum pages globally.','redux-framework-demo'),
            'default' => 'None',
            'hint' => array(
                'title'   => __('BBPress Global Sidebar','redux-framework-demo'),
                'content' => __('BBPress Global Sidebar','redux-framework-demo'),
            )
        ),*/


    )

);
/*
             *
              *
              *
              * New Tab Advanced
              *
              *
              * */

//////////////////////////////////////////////////////////////////////
$this->sections[] = array(
    'icon'      => 'el-icon-idea',
    'title'     => __('Advanced', 'redux-framework-demo'),
    'desc'      => __('<p class="description">This is the Description. Again HTML is allowed</p>', 'redux-framework-demo'),
    'fields'    => array(

        array (
            'id' => 'enable_disable_heading',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Enable / Disable Theme Features & Plugin Support</h3>',
        ),
		array (
            'id' => 'smooth_scrolling',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Disable Smooth Scrolling','redux-framework-demo'),
            'subtitle'  => __('Disable Smooth Scrolling', 'redux-framework-demo'),
            'desc' => __('YES to disable smooth scrolling. This will remove the dark scrollbar and revert to the default browser scrollbar style.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable Smooth Scrolling','redux-framework-demo'),
                'content' => __('Disable Smooth Scrolling','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'disable_builder',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Page Builder','redux-framework-demo'),
            'subtitle'  => __('Disable Page Builder', 'redux-framework-demo'),
            'desc' => __('YES to disable the Page builder button on pages/posts.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable Page Builder','redux-framework-demo'),
                'content' => __('Disable Page Builder','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'disable_code_block_encoding',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Code Block Encoding','redux-framework-demo'),
            'subtitle'  => __('Disable Code Block Encoding', 'redux-framework-demo'),
            'desc' => __('YES to disable encoding in the Page Builder code block element.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable Code Block Encoding','redux-framework-demo'),
                'content' => __('Disable Code Block Encoding','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'disable_megamenu',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Mega Menu','redux-framework-demo'),
            'subtitle'  => __('Disable Mega Menu.', 'redux-framework-demo'),
            'desc' => __('YES to disable the theme\'s mega menu.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable Mega Menu','redux-framework-demo'),
                'content' => __('Disable Mega Menu','redux-framework-demo'),
            )
        ),
        
        array (
            'id' => 'aione_rev_styles',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable aione Styles For Revolution Slider','redux-framework-demo'),
            'subtitle'  => __('Disable aione Styles For Revolution Slider.', 'redux-framework-demo'),
            'desc' => __('YES to disable the aione styles and use the default Revolution Slider styles.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable aione Styles For Revolution Slider','redux-framework-demo'),
                'content' => __('Disable aione Styles For Revolution Slider','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'ubermenu',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('UberMenu Plugin Support','redux-framework-demo'),
            'subtitle'  => __('UberMenu Plugin Support.', 'redux-framework-demo'),
            'desc' => __('YES if you are are using UberMenu, this option adds UberMenu support without editing any code.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('UberMenu Plugin Support','redux-framework-demo'),
                'content' => __('UberMenu Plugin Support','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'use_animate_css',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable CSS Animations','redux-framework-demo'),
            'subtitle'  => __('Disable CSS Animations.', 'redux-framework-demo'),
            'desc' => __('YES to disable CSS animations on shortcode items.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable CSS Animations','redux-framework-demo'),
                'content' => __('Disable CSS Animations','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'disable_mobile_animate_css',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Disable CSS Animations on Mobiles Only','redux-framework-demo'),
            'subtitle'  => __('Disable CSS Animations on Mobiles Only.', 'redux-framework-demo'),
            'desc' => __('YES to disable CSS animations on mobiles only.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable CSS Animations on Mobiles Only','redux-framework-demo'),
                'content' => __('Disable CSS Animations on Mobiles Only','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'disable_mobile_image_hovers',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable CSS Image Hover Animations on Mobiles','redux-framework-demo'),
            'subtitle'  => __('Disable CSS Image Hover Animations on Mobiles', 'redux-framework-demo'),
            'desc' => __('YES to disable CSS image hover animations on mobiles.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable CSS Image Hover Animations on Mobiles','redux-framework-demo'),
                'content' => __('Disable CSS Image Hover Animations on Mobiles','redux-framework-demo'),
            )
        ),
        /*array (
            'id' => 'status_lightbox',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Lightbox','redux-framework-demo'),
            'subtitle'  => __('Disable Lightbox.', 'redux-framework-demo'),
            'desc' => __('YES to disable Lightbox.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable Lightbox','redux-framework-demo'),
                'content' => __('Disable Lightbox','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'status_lightbox_single',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Lightbox On Single Posts Pages Only','redux-framework-demo'),
            'subtitle'  => __('Disable Lightbox On Single Posts Pages Only.', 'redux-framework-demo'),
            'desc' => __('YES to disable Lightbox only on single posts and portfolio pages..','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable Lightbox On Single Posts Pages Only','redux-framework-demo'),
                'content' => __('Disable Lightbox On Single Posts Pages Only','redux-framework-demo'),
            )
        ),*/
        array (
            'id' => 'status_yt',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Youtube API Scripts','redux-framework-demo'),
            'subtitle'  => __('Disable Youtube API Scripts.', 'redux-framework-demo'),
            'desc' => __('YES to disable Youtube API scripts.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable Youtube API Scripts','redux-framework-demo'),
                'content' => __('Disable Youtube API Scripts','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'status_vimeo',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Vimeo API Scripts','redux-framework-demo'),
            'subtitle'  => __('Disable Vimeo API Scripts.', 'redux-framework-demo'),
            'desc' => __('YES to disable Vimeo API scripts.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable Vimeo API Scripts','redux-framework-demo'),
                'content' => __('Disable Vimeo API Scripts','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'status_gmap',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Google Map Scripts','redux-framework-demo'),
            'subtitle'  => __('Disable Google Map Scripts.', 'redux-framework-demo'),
            'desc' => __('YES to disable google map.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable Google Map Scripts','redux-framework-demo'),
                'content' => __('Disable Google Map Scripts','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'status_totop',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable ToTop Script','redux-framework-demo'),
            'subtitle'  => __('Disable ToTop Script.', 'redux-framework-demo'),
            'desc' => __('YES to disable the ToTop script which adds the scrolling to top functionality.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable ToTop Script','redux-framework-demo'),
                'content' => __('Disable ToTop Script','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'status_totop_mobile',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Enable ToTop Script on mobile','redux-framework-demo'),
            'subtitle'  => __('Enable ToTop Script on mobile.', 'redux-framework-demo'),
            'desc' => __('YES to enable the ToTop script on mobile devices.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Enable ToTop Script on mobile','redux-framework-demo'),
                'content' => __('Enable ToTop Script on mobile','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'status_oxo_slider',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Aione Slider','redux-framework-demo'),
            'subtitle'  => __('Disable Aione Slider.', 'redux-framework-demo'),
            'desc' => __('YES to disable aione slider.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable Aione Slider','redux-framework-demo'),
                'content' => __('Disable Aione Slider','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'status_eslider',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Elastic Slider','redux-framework-demo'),
            'subtitle'  => __('Disable Elastic Slider.', 'redux-framework-demo'),
            'desc' => __('YES to disable elastic slider.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable Elastic Slider','redux-framework-demo'),
                'content' => __('Disable Elastic Slider','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'status_fontawesome',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable FontAwesome','redux-framework-demo'),
            'subtitle'  => __('Disable FontAwesome.', 'redux-framework-demo'),
            'desc' => __('YES to disable font awesome.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable FontAwesome','redux-framework-demo'),
                'content' => __('Disable FontAwesome','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'disable_date_rich_snippet_pages',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Rich Snippets Sitewide','redux-framework-demo'),
            'subtitle'  => __('Disable Rich Snippets Sitewide', 'redux-framework-demo'),
            'desc' => __('YES to disable rich snippets data sitewide.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable Rich Snippets Sitewide','redux-framework-demo'),
                'content' => __('Disable Rich Snippets Sitewide','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'disable_woo_gallery',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Disable Aione Woocommerce Product Gallery Slider','redux-framework-demo'),
            'subtitle'  => __('Disable Aione Woocommerce Product Gallery Slider', 'redux-framework-demo'),
            'desc' => __('YES to disable product gallery slider that is built-in with Aione. This is only useful for plugin compatibility.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Disable Aione Woocommerce Product Gallery Slider','redux-framework-demo'),
                'content' => __('Disable Aione Woocommerce Product Gallery Slider','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'dev_mode',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Activate Developers Mode','redux-framework-demo'),
            'subtitle'  => __('Activate Developers Mode', 'redux-framework-demo'),
            'desc' => __('Notice: By default, all the javascript files are combined and minified. Activating this mode will load non-combined and non-minified javascript files, which is used for development only. This will have an impact on the performance of your site.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Activate Developers Mode','redux-framework-demo'),
                'content' => __('Activate Developers Mode','redux-framework-demo'),
            )
        ),


    )

);
