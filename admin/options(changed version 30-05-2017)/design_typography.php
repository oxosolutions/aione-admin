<?php
/*********************************************************************************************
 *
 *  Typography
 *
 *********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el el-text-height',
    'title'     => __('Typography', 'redux-framework-demo'),
    'fields'    => array(

        array(
            'id'            => 'typography_body',
            'type'          => 'typography',
            'title'         => __('Body Font styles', 'redux-framework-demo'),
            'compiler'      => true,  // Use if you want to hook in your own CSS compiler
            'google'        => false,    // Disable google fonts. Won't work if you haven't defined your google api key
            'font-backup'   => false,    // Select a backup non-google font in addition to a google font
            'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
            'subsets'       => false, // Only appears if google is true and subsets not set to false
            'font-size'     => true,
            'line-height'   => true,
            'word-spacing'  => false,  // Defaults to false
            'letter-spacing'=> false,  // Defaults to false
            'color'         => false,
            'text-align'     => false,
            'font-weight'     => false,
            'preview'       => true, // Disable the previewer
            'all_styles'    => false,    // Enable all Google Font style/weight variations to be added to the page
            'output'        => array('body'), // An array of CSS selectors to apply this font style to dynamically
            //'compiler'      => array('body'), // An array of CSS selectors to apply this font style to dynamically
            'units'         => 'px', // Defaults to px
            'subtitle'      => __('Typography options for body.', 'redux-framework-demo'),
            'desc' =>  __('Body Font styles.','redux-framework-demo'),
            'default'       => array(
                'font-family'   => 'Arial, Helvetica, sans-serif',
                'google'        => true,
                'font-size'     => '13',
                'line-height'   => '20'),
            'hint' => array(
                'title'   => __('Body Font styles','redux-framework-demo'),
                'content' => __('Body Font styles','redux-framework-demo'),
            )
        ),
        /*
                array(
                    'id'            => 'google_body',
                    'type'          => 'typography',
                    'title'         => __('Typography', 'redux-framework-demo'),
                    'compiler'      => true,  // Use if you want to hook in your own CSS compiler
                    'google'        => true,    // Disable google fonts. Won't work if you haven't defined your google api key
                    'font-backup'   => false,    // Select a backup non-google font in addition to a google font
                    'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
                    'subsets'       => false, // Only appears if google is true and subsets not set to false
                    'font-size'     => true,
                    'line-height'   => true,
                    'word-spacing'  => false,  // Defaults to false
                    'letter-spacing'=> false,  // Defaults to false
                    'color'         => true,
                    'text-align'     => false,
                    'font-weight'     => false,
                    'preview'       => true, // Disable the previewer
                    'all_styles'    => false,    // Enable all Google Font style/weight variations to be added to the page
                    'output'        => array('#site_title a'), // An array of CSS selectors to apply this font style to dynamically
                    'compiler'      => array('#site_title a'), // An array of CSS selectors to apply this font style to dynamically
                    'units'         => 'px', // Defaults to px
                    'subtitle'      => __('Typography option with each property can be called individually.', 'redux-framework-demo'),
                    'default'       => array(
                        'color'         => '#333',
                        'font-style'    => '700',
                        'font-family'   => 'Abel',
                        'google'        => true,
                        'font-size'     => '33px',
                        'line-height'   => '40px'),
                ),
                array(
                    'id'            => 'google_nav',
                    'type'          => 'typography',
                    'title'         => __('Typography', 'redux-framework-demo'),
                    //'compiler'      => true,  // Use if you want to hook in your own CSS compiler
                    'google'        => true,    // Disable google fonts. Won't work if you haven't defined your google api key
                    'font-backup'   => true,    // Select a backup non-google font in addition to a google font
                    //'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
                    //'subsets'       => false, // Only appears if google is true and subsets not set to false
                    //'font-size'     => false,
                    //'line-height'   => false,
                    //'word-spacing'  => true,  // Defaults to false
                    //'letter-spacing'=> true,  // Defaults to false
                    //'color'         => false,
                    //'preview'       => false, // Disable the previewer
                    'all_styles'    => true,    // Enable all Google Font style/weight variations to be added to the page
                    'output'        => array('h2.site-description, .entry-title'), // An array of CSS selectors to apply this font style to dynamically
                    'compiler'      => array('h2.site-description-compiler'), // An array of CSS selectors to apply this font style to dynamically
                    'units'         => 'px', // Defaults to px
                    'subtitle'      => __('Typography option with each property can be called individually.', 'redux-framework-demo'),
                    'default'       => array(
                        'color'         => '#333',
                        'font-style'    => '700',
                        'font-family'   => 'Abel',
                        'google'        => true,
                        'font-size'     => '33px',
                        'line-height'   => '40px'),
                ),
                array(
                    'id'            => 'google_headings',
                    'type'          => 'typography',
                    'title'         => __('Typography', 'redux-framework-demo'),
                    //'compiler'      => true,  // Use if you want to hook in your own CSS compiler
                    'google'        => true,    // Disable google fonts. Won't work if you haven't defined your google api key
                    'font-backup'   => true,    // Select a backup non-google font in addition to a google font
                    //'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
                    //'subsets'       => false, // Only appears if google is true and subsets not set to false
                    //'font-size'     => false,
                    //'line-height'   => false,
                    //'word-spacing'  => true,  // Defaults to false
                    //'letter-spacing'=> true,  // Defaults to false
                    //'color'         => false,
                    //'preview'       => false, // Disable the previewer
                    'all_styles'    => true,    // Enable all Google Font style/weight variations to be added to the page
                    'output'        => array('h2.site-description, .entry-title'), // An array of CSS selectors to apply this font style to dynamically
                    'compiler'      => array('h2.site-description-compiler'), // An array of CSS selectors to apply this font style to dynamically
                    'units'         => 'px', // Defaults to px
                    'subtitle'      => __('Typography option with each property can be called individually.', 'redux-framework-demo'),
                    'default'       => array(
                        'color'         => '#333',
                        'font-style'    => '700',
                        'font-family'   => 'Abel',
                        'google'        => true,
                        'font-size'     => '33px',
                        'line-height'   => '40px'),
                ),
                array(
                    'id'            => 'google_footer_headings',
                    'type'          => 'typography',
                    'title'         => __('Typography', 'redux-framework-demo'),
                    //'compiler'      => true,  // Use if you want to hook in your own CSS compiler
                    'google'        => true,    // Disable google fonts. Won't work if you haven't defined your google api key
                    'font-backup'   => true,    // Select a backup non-google font in addition to a google font
                    //'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
                    //'subsets'       => false, // Only appears if google is true and subsets not set to false
                    //'font-size'     => false,
                    //'line-height'   => false,
                    //'word-spacing'  => true,  // Defaults to false
                    //'letter-spacing'=> true,  // Defaults to false
                    //'color'         => false,
                    //'preview'       => false, // Disable the previewer
                    'all_styles'    => true,    // Enable all Google Font style/weight variations to be added to the page
                    'output'        => array('h2.site-description, .entry-title'), // An array of CSS selectors to apply this font style to dynamically
                    'compiler'      => array('h2.site-description-compiler'), // An array of CSS selectors to apply this font style to dynamically
                    'units'         => 'px', // Defaults to px
                    'subtitle'      => __('Typography option with each property can be called individually.', 'redux-framework-demo'),
                    'default'       => array(
                        'color'         => '#333',
                        'font-style'    => '700',
                        'font-family'   => 'Abel',
                        'google'        => true,
                        'font-size'     => '33px',
                        'line-height'   => '40px'),
                ),
                */
    ),
);
/*********************************************************************************************/

$this->sections[] = array(
    'icon'      => 'el-icon-credit-card',
    'title'     => __('Header', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
        array(
            'id'            => 'typography_topbar',
            'type'          => 'typography',
            'title'         => __('Topbar', 'redux-framework-demo'),
            'compiler'      => true,  // Use if you want to hook in your own CSS compiler
            'google'        => true,    // Disable google fonts. Won't work if you haven't defined your google api key
            'font-backup'   => false,    // Select a backup non-google font in addition to a google font
            'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
            'subsets'       => false, // Only appears if google is true and subsets not set to false
            'font-size'     => true,
            'line-height'   => true,
            'word-spacing'  => false,  // Defaults to false
            'letter-spacing'=> false,  // Defaults to false
            'color'         => false,
            'text-align'     => false,
            'font-weight'     => true,
            'preview'       => true, // Disable the previewer
            'all_styles'    => false,    // Enable all Google Font style/weight variations to be added to the page
            //'output'        => array('#topbar'), // An array of CSS selectors to apply this font style to dynamically
            //'compiler'      => array('#main h1'), // An array of CSS selectors to apply this font style to dynamically
            'units'         => 'px', // Defaults to px
            'subtitle'      => __('Set Font options for Topbar.', 'redux-framework-demo'),
            'desc' =>  __('Font Options Topbar.','redux-framework-demo'),
            'default'       => array(
                'font-family'   => 'Arial, Helvetica, sans-serif',
                'google'        => true,
                'font-size'     => '13',
                'line-height'   => '20'),
            'hint' => array(
                'title'   => __('Topbar','redux-framework-demo'),
                'content' => __('Set Font options for Topbar.','redux-framework-demo'),
            )
        ),
        array(
            'id'            => 'typography_header',
            'type'          => 'typography',
            'title'         => __('Typography Header', 'redux-framework-demo'),
            'compiler'      => true,  // Use if you want to hook in your own CSS compiler
            'google'        => true,    // Disable google fonts. Won't work if you haven't defined your google api key
            'font-backup'   => false,    // Select a backup non-google font in addition to a google font
            'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
            'subsets'       => false, // Only appears if google is true and subsets not set to false
            'font-size'     => true,
            'line-height'   => true,
            'word-spacing'  => false,  // Defaults to false
            'letter-spacing'=> false,  // Defaults to false
            'color'         => false,
            'text-align'     => false,
            'font-weight'     => false,
            'preview'       => true, // Disable the previewer
            'all_styles'    => false,    // Enable all Google Font style/weight variations to be added to the page
            //'output'        => array('#header'), // An array of CSS selectors to apply this font style to dynamically
            //'compiler'      => array('h1,h2,h3'), // An array of CSS selectors to apply this font style to dynamically
            'units'         => 'px', // Defaults to px
            'subtitle'      => __('Set Font options for Header.', 'redux-framework-demo'),
            'desc' =>  __('Font options for Header.','redux-framework-demo'),
            'default'       => array(
                'font-style'    => '700',
                'font-family'   => 'Arial, Helvetica, sans-serif',
                'google'        => true,
                'font-size'     => '18',
                'line-height'   => '22'),
            'hint' => array(
                'title'   => __('Typography Header','redux-framework-demo'),
                'content' => __('Set Font options for Header.','redux-framework-demo'),
            )
        ),
        array(
            'id'            => 'typography_header_site_title',
            'type'          => 'typography',
            'title'         => __('Site Title', 'redux-framework-demo'),
            'compiler'      => true,  // Use if you want to hook in your own CSS compiler
            'google'        => true,    // Disable google fonts. Won't work if you haven't defined your google api key
            'font-backup'   => false,    // Select a backup non-google font in addition to a google font
            'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
            'subsets'       => false, // Only appears if google is true and subsets not set to false
            'font-size'     => true,
            'line-height'   => true,
            'word-spacing'  => false,  // Defaults to false
            'letter-spacing'=> false,  // Defaults to false
            'color'         => false,
            'text-align'     => false,
            'font-weight'     => false,
            'preview'       => true, // Disable the previewer
            'all_styles'    => false,    // Enable all Google Font style/weight variations to be added to the page
            //'output'        => array('#site_title a'), // An array of CSS selectors to apply this font style to dynamically
            //'compiler'      => array('#site_title a'), // An array of CSS selectors to apply this font style to dynamically
            'units'         => 'px', // Defaults to px
            'subtitle'      => __('Set Font options for site title.', 'redux-framework-demo'),
            'desc' =>  __('Font options for Site Title.','redux-framework-demo'),
            'default'       => array(
                'font-style'    => '700',
                'font-family'   => 'Arial, Helvetica, sans-serif',
                'google'        => true,
                'font-size'     => '46px',
                'line-height'   => '46px'),
            'hint' => array(
                'title'   => __('Site Title','redux-framework-demo'),
                'content' => __('Set Font options for site title.','redux-framework-demo'),
            )
        ),
        array(
            'id'            => 'typography_header_tagline',
            'type'          => 'typography',
            'title'         => __('Tagline', 'redux-framework-demo'),
            'compiler'      => true,  // Use if you want to hook in your own CSS compiler
            'google'        => true,    // Disable google fonts. Won't work if you haven't defined your google api key
            'font-backup'   => false,    // Select a backup non-google font in addition to a google font
            'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
            'subsets'       => false, // Only appears if google is true and subsets not set to false
            'font-size'     => true,
            'line-height'   => true,
            'word-spacing'  => false,  // Defaults to false
            'letter-spacing'=> false,  // Defaults to false
            'color'         => false,
            'text-align'     => false,
            'font-weight'     => false,
            'preview'       => true, // Disable the previewer
            'all_styles'    => false,    // Enable all Google Font style/weight variations to be added to the page
            //'output'        => array('#site_description'), // An array of CSS selectors to apply this font style to dynamically
            //'compiler'      => array('#site_description'), // An array of CSS selectors to apply this font style to dynamically
            'units'         => 'px', // Defaults to px
            'subtitle'      => __('Set Font options for site tagline.', 'redux-framework-demo'),
            'desc' =>  __('Font options for site tagline.','redux-framework-demo'),
            'default'       => array(
                'font-style'    => '300',
                'font-family'   => 'Arial, Helvetica, sans-serif',
                'google'        => true,
                'font-size'     => '18',
                'line-height'   => '0'),
            'hint' => array(
                'title'   => __('Tagline','redux-framework-demo'),
                'content' => __('Set Font options for site tagline.','redux-framework-demo'),
            )
        ),
		array(
            'id'            => 'typography_header_main_menu',
            'type'          => 'typography',
            'title'         => __('Header Main Menu', 'redux-framework-demo'),
            'compiler'      => true,  // Use if you want to hook in your own CSS compiler
            'google'        => true,    // Disable google fonts. Won't work if you haven't defined your google api key
            'font-backup'   => false,    // Select a backup non-google font in addition to a google font
            'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
            'subsets'       => false, // Only appears if google is true and subsets not set to false
            'font-size'     => true,
            'line-height'   => false,
            'word-spacing'  => false,  // Defaults to false
            'letter-spacing'=> false,  // Defaults to false
            'color'         => false,
            'text-align'     => false,
            'font-weight'     => true,
            'preview'       => true, // Disable the previewer
            'all_styles'    => false,    // Enable all Google Font style/weight variations to be added to the page
            //'output'        => array(''), // An array of CSS selectors to apply this font style to dynamically
            //'compiler'      => array('#site_description'), // An array of CSS selectors to apply this font style to dynamically
            'units'         => 'px', // Defaults to px
            'subtitle'      => __('Set Font options for main menu.', 'redux-framework-demo'),
            'desc' =>  __('Font options for Header Main Menu.','redux-framework-demo'),
            'default'       => array(
                'font-weight'    => '300',
                'font-family'   => 'Arial, Helvetica, sans-serif',
                'google'        => true,
                'font-size'     => '18',
                'line-height'   => '22'),
            'hint' => array(
                'title'   => __('Header Main Menu','redux-framework-demo'),
                'content' => __('Set Font options for main menu.','redux-framework-demo'),
            )
        ),
        
    )
);

/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-file',
    'title'     => __('Page', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
        array(
            'id'            => 'typography_h1',
            'type'          => 'typography',
            'title'         => __('Heading H1', 'redux-framework-demo'),
            'compiler'      => true,  // Use if you want to hook in your own CSS compiler
            'google'        => true,    // Disable google fonts. Won't work if you haven't defined your google api key
            'font-backup'   => false,    // Select a backup non-google font in addition to a google font
            'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
            'subsets'       => false, // Only appears if google is true and subsets not set to false
            'font-size'     => true,
            'line-height'   => true,
            'word-spacing'  => false,  // Defaults to false
            'letter-spacing'=> false,  // Defaults to false
            'color'         => false,
            'text-align'     => false,
            'font-weight'     => false,
            'preview'       => true, // Disable the previewer
            'all_styles'    => false,    // Enable all Google Font style/weight variations to be added to the page
            //'output'        => array('#main h1'), // An array of CSS selectors to apply this font style to dynamically
            //'compiler'      => array('#main h1'), // An array of CSS selectors to apply this font style to dynamically
            'units'         => 'px', // Defaults to px
            'subtitle'      => __('Font style for H1.', 'redux-framework-demo'),
            'desc' =>  __('Font style for Heading H1.','redux-framework-demo'),
            'default'       => array(
                'font-family'   => 'Arial, Helvetica, sans-serif',
                'google'        => true,
                'font-size'     => '46',
                'line-height'   => '40'),
            'hint' => array(
                'title'   => __('Heading H1','redux-framework-demo'),
                'content' => __('Font style for H1.','redux-framework-demo'),
            )
        ),
        array(
            'id'            => 'typography_h2',
            'type'          => 'typography',
            'title'         => __('Heading H2', 'redux-framework-demo'),
            'compiler'      => true,  // Use if you want to hook in your own CSS compiler
            'google'        => true,    // Disable google fonts. Won't work if you haven't defined your google api key
            'font-backup'   => false,    // Select a backup non-google font in addition to a google font
            'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
            'subsets'       => false, // Only appears if google is true and subsets not set to false
            'font-size'     => true,
            'line-height'   => true,
            'word-spacing'  => false,  // Defaults to false
            'letter-spacing'=> false,  // Defaults to false
            'color'         => false,
            'text-align'     => false,
            'font-weight'     => false,
            'preview'       => true, // Disable the previewer
            'all_styles'    => false,    // Enable all Google Font style/weight variations to be added to the page
            //'output'        => array('#main h2'), // An array of CSS selectors to apply this font style to dynamically
            //'compiler'      => array('#main h2'), // An array of CSS selectors to apply this font style to dynamically
            'units'         => 'px', // Defaults to px
            'subtitle'      => __('Set Font style for H2.', 'redux-framework-demo'),
            'desc' =>  __('Font style for Heading H2.','redux-framework-demo'),
            'default'       => array(
                'font-family'   => 'Arial, Helvetica, sans-serif',
                'google'        => true,
                'font-size'     => '33',
                'line-height'   => '30'),
            'hint' => array(
                'title'   => __('Heading H2','redux-framework-demo'),
                'content' => __('Set Font style for H2.','redux-framework-demo'),
            )
        ),
        array(
            'id'            => 'typography_h3',
            'type'          => 'typography',
            'title'         => __('Heading H3', 'redux-framework-demo'),
            'compiler'      => true,  // Use if you want to hook in your own CSS compiler
            'google'        => true,    // Disable google fonts. Won't work if you haven't defined your google api key
            'font-backup'   => false,    // Select a backup non-google font in addition to a google font
            'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
            'subsets'       => false, // Only appears if google is true and subsets not set to false
            'font-size'     => true,
            'line-height'   => true,
            'word-spacing'  => false,  // Defaults to false
            'letter-spacing'=> false,  // Defaults to false
            'color'         => false,
            'text-align'     => false,
            'font-weight'     => false,
            'preview'       => true, // Disable the previewer
            'all_styles'    => false,    // Enable all Google Font style/weight variations to be added to the page
            //'output'        => array('#main h3'), // An array of CSS selectors to apply this font style to dynamically
            //'compiler'      => array('#main h3'), // An array of CSS selectors to apply this font style to dynamically
            'units'         => 'px', // Defaults to px
            'subtitle'      => __('Set Font style for H2.', 'redux-framework-demo'),
            'desc' =>  __('Font style for Heading H3.','redux-framework-demo'),
            'default'       => array(
                'font-family'   => 'Arial, Helvetica, sans-serif',
                'google'        => true,
                'font-size'     => '22',
                'line-height'   => '28'),
            'hint' => array(
                'title'   => __('Heading H3','redux-framework-demo'),
                'content' => __('Set Font style for H2.','redux-framework-demo'),
            )
        ),
		array(
            'id'            => 'typography_h4',
            'type'          => 'typography',
            'title'         => __('Heading H4', 'redux-framework-demo'),
            'compiler'      => true,  // Use if you want to hook in your own CSS compiler
            'google'        => true,    // Disable google fonts. Won't work if you haven't defined your google api key
            'font-backup'   => false,    // Select a backup non-google font in addition to a google font
            'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
            'subsets'       => false, // Only appears if google is true and subsets not set to false
            'font-size'     => true,
            'line-height'   => true,
            'word-spacing'  => false,  // Defaults to false
            'letter-spacing'=> false,  // Defaults to false
            'color'         => false,
            'text-align'     => false,
            'font-weight'     => false,
            'preview'       => true, // Disable the previewer
            'all_styles'    => false,    // Enable all Google Font style/weight variations to be added to the page
            //'output'        => array('#main h4'), // An array of CSS selectors to apply this font style to dynamically
            //'compiler'      => array('#main h4'), // An array of CSS selectors to apply this font style to dynamically
            'units'         => 'px', // Defaults to px
            'subtitle'      => __('Set Font style for H4.', 'redux-framework-demo'),
            'desc' =>  __('Font style for Heading H4.','redux-framework-demo'),
            'default'       => array(
                'font-family'   => 'Arial, Helvetica, sans-serif',
                'google'        => true,
                'font-size'     => '20',
                'line-height'   => '25'),
            'hint' => array(
                'title'   => __('Heading H4','redux-framework-demo'),
                'content' => __('Set Font style for H4.','redux-framework-demo'),
            )
        ),
    )
);



/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-fork',
    'title'     => __('Footer', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
        array(
            'id'            => 'typography_footer_title',
            'type'          => 'typography',
            'title'         => __('Footer Widget Heading Font Size', 'redux-framework-demo'),
            'compiler'      => true,  // Use if you want to hook in your own CSS compiler
            'google'        => true,    // Disable google fonts. Won't work if you haven't defined your google api key
            'font-backup'   => false,    // Select a backup non-google font in addition to a google font
            'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
            'subsets'       => false, // Only appears if google is true and subsets not set to false
            'font-size'     => true,
            'line-height'   => true,
            'word-spacing'  => false,  // Defaults to false
            'letter-spacing'=> false,  // Defaults to false
            'color'         => false,
            'text-align'     => false,
            'font-weight'     => false,
            'preview'       => true, // Disable the previewer
            'all_styles'    => false,    // Enable all Google Font style/weight variations to be added to the page
            //'output'        => array('#main h4'), // An array of CSS selectors to apply this font style to dynamically
            //'compiler'      => array('#main h1'), // An array of CSS selectors to apply this font style to dynamically
            'units'         => 'px', // Defaults to px
            'subtitle'      => __('Set Font style for Footer Widget Heading Font Size.', 'redux-framework-demo'),
            'desc' =>  __('Font style for Footer Widget Heading Font Size.','redux-framework-demo'),
            'default'       => array(
                'font-family'   => 'Arial, Helvetica, sans-serif',
                'google'        => true,
                'font-size'     => '13',
                'line-height'   => '20'),
            'hint' => array(
                'title'   => __('Footer Widget Heading Font Size','redux-framework-demo'),
                'content' => __('Set Font style for Footer Widget Heading Font Size.','redux-framework-demo'),
            )
        ),
		array(
            'id'            => 'typography_copyright_title',
            'type'          => 'typography',
            'title'         => __('Copyright Font Size.', 'redux-framework-demo'),
            'compiler'      => true,  // Use if you want to hook in your own CSS compiler
            'google'        => true,    // Disable google fonts. Won't work if you haven't defined your google api key
            'font-backup'   => false,    // Select a backup non-google font in addition to a google font
            'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
            'subsets'       => false, // Only appears if google is true and subsets not set to false
            'font-size'     => true,
            'line-height'   => true,
            'word-spacing'  => false,  // Defaults to false
            'letter-spacing'=> false,  // Defaults to false
            'color'         => false,
            'text-align'     => false,
            'font-weight'     => false,
            'preview'       => true, // Disable the previewer
            'all_styles'    => false,    // Enable all Google Font style/weight variations to be added to the page
            //'output'        => array('#main h1'), // An array of CSS selectors to apply this font style to dynamically
            //'compiler'      => array('#main h1'), // An array of CSS selectors to apply this font style to dynamically
            'units'         => 'px', // Defaults to px
            'subtitle'      => __('Set Font style for Copyright.', 'redux-framework-demo'),
            'desc' =>  __('Font style for Copyright Font Size.','redux-framework-demo'),
            'default'       => array(
                'font-family'   => 'Arial, Helvetica, sans-serif',
                'google'        => true,
                'font-size'     => '12',
                'line-height'   => '20'),
            'hint' => array(
                'title'   => __('Copyright Font Size','redux-framework-demo'),
                'content' => __('Set Font style for Copyright.','redux-framework-demo'),
            )
        ),

    )
);


?>