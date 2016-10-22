<?php
/*********************************************************************************************
 *
 *  Social Media
 *
 *********************************************************************************************/
 $this->sections[] = array (
	'icon'      => 'el-icon-group',
    'title' => __('Social Media','redux-framework-demo'),
    'fields' => array (
	
		array(
			'id'       => 'social_sorter',
			'type'     => 'sortable',
			'title'    => __('Sortable Text Option', 'redux-framework-demo'),
			'subtitle' => __('Define and reorder these however you want.', 'redux-framework-demo'),
			'desc'     => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'mode'     => 'text',
			'options' => array(
				 'facebook_link' => '',
				 'flickr_link' => '',
				 'rss_link' => '',
				 'twitter_link' => '',
				 'vimeo_link' => '',
				 'youtube_link' => '',
				 'instagram_link' => '',
				 'pinterest_link' => '',
				 'tumblr_link' => '',
				 'google_link' => '',
				 'dribbble_link' => '',
				 'digg_link' => '',
				 'linkedin_link' => '',
				 'blogger_link' => '',
				 'skype_link' => '',
				 'forrst_link' => '',
				 'myspace_link' => '',
				 'deviantart_link' => '',
				 'yahoo_link' => '',
				 'reddit_link' => '',
				 'paypal_link' => '',
				 'dropbox_link' => '',
				 'soundcloud_link' => '',
				 'vk_link' => '',
				 'email_link' => '',
			),
		),

        /* array (
			'id' => 'facebook_link',
			'title' => __('Facebook','redux-framework-demo'),
			'desc' => __('Insert your custom link to show the Facebook icon. Leave blank to hide icon.','redux-framework-demo'),
			'default' => '',
			'type' => 'text',
		),
		array (
			'title' => __('Flickr','redux-framework-demo'),
			'desc' => __('Insert your custom link to show the Flickr icon. Leave blank to hide icon.','redux-framework-demo'),
			'id' => 'flickr_link',
			'std' => '',
			'type' => 'text',
		),
		 array (
			'title' => __('RSS','redux-framework-demo'),
			'desc' => __('Insert your custom link to show the RSS icon. Leave blank to hide icon.','redux-framework-demo'),
			'id' => 'rss_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => __('Twitter','redux-framework-demo'),
			'desc' => __('Insert your custom link to show the Twitter icon. Leave blank to hide icon.','redux-framework-demo'),
			'id' => 'twitter_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => 'Vimeo',
			'desc' => 'Insert your custom link to show the Vimeo icon. Leave blank to hide icon.',
			'id' => 'vimeo_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => 'Youtube',
			'desc' => 'Insert your custom link to show the Youtube icon. Leave blank to hide icon.',
			'id' => 'youtube_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => 'Instagram',
			'desc' => 'Insert your custom link to show the Instagram icon. Leave blank to hide icon.',
			'id' => 'instagram_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => 'Pinterest',
			'desc' => 'Insert your custom link to show the Pinterest icon. Leave blank to hide icon.',
			'id' => 'pinterest_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => 'Tumblr',
			'desc' => 'Insert your custom link to show the Tumblr icon. Leave blank to hide icon.',
			'id' => 'tumblr_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => 'Google+',
			'desc' => 'Insert your custom link to show the Google+ icon. Leave blank to hide icon.',
			'id' => 'google_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => 'Dribbble',
			'desc' => 'Insert your custom link to show the Dribbble icon. Leave blank to hide icon.',
			'id' => 'dribbble_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => 'Digg',
			'desc' => 'Insert your custom link to show the Digg icon. Leave blank to hide icon.',
			'id' => 'digg_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => 'LinkedIn',
			'desc' => 'Insert your custom link to show the LinkedIn icon. Leave blank to hide icon.',
			'id' => 'linkedin_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => 'Blogger',
			'desc' => 'Insert your custom link to show the Blogger icon. Leave blank to hide icon.',
			'id' => 'blogger_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => 'Skype',
			'desc' => 'Insert your custom link to show the Skype icon. Leave blank to hide icon.',
			'id' => 'skype_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => 'Forrst',
			'desc' => 'Insert your custom link to show the Forrst icon. Leave blank to hide icon.',
			'id' => 'forrst_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => 'Myspace',
			'desc' => 'Insert your custom link to show the Myspace icon. Leave blank to hide icon.',
			'id' => 'myspace_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => 'Deviantart',
			'desc' => 'Insert your custom link to show the Deviantart icon. Leave blank to hide icon.',
			'id' => 'deviantart_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => 'Yahoo',
			'desc' => 'Insert your custom link to show the Yahoo icon. Leave blank to hide icon.',
			'id' => 'yahoo_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => 'Reddit',
			'desc' => 'Insert your custom link to show the Redditt icon. Leave blank to hide icon.',
			'id' => 'reddit_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => 'Paypal',
			'desc' => 'Insert your custom link to show the Paypal icon. Leave blank to hide icon.',
			'id' => 'paypal_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => 'Dropbox',
			'desc' => 'Insert your custom link to show the Dropbox icon. Leave blank to hide icon.',
			'id' => 'dropbox_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => 'Soundclound',
			'desc' => 'Insert your custom link to show the Soundcloud icon. Leave blank to hide icon.',
			'id' => 'soundcloud_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => 'VK',
			'desc' => 'Insert your custom link to show the VK icon. Leave blank to hide icon.',
			'id' => 'vk_link',
			'std' => '',
			'type' => 'text',
		),
		array (
			'title' => 'Email Address',
			'desc' => 'Insert your custom link to show the mail icon. Leave blank to hide icon.',
			'id' => 'email_link',
			'std' => '',
			'type' => 'text',
		),*/
            


		array (
            'id' => 'custom_color_scheme_element',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Custom Social Icon</h3>',
        ),
        array (
            'id' => 'custom_icon_name',
            'type' => 'text',
            'title' => __('Custom Icon Name','redux-framework-demo'),
            'subtitle'  => __('Custom Icon Name.', 'redux-framework-demo'),
            'desc' =>  __('This is the icon name that shows in the hover tooltip.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Custom Icon Name','redux-framework-demo'),
                'content' => __('Custom Icon Name','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'custom_icon_image',
            'type' => 'media',
            'title' => __('Custom Icon Image','redux-framework-demo'),
            'subtitle'  => __('Custom Icon Image.', 'redux-framework-demo'),
            'desc' =>  __('Select an image file for your custom icon.','redux-framework-demo'),
            'url' => true,
            'hint' => array(
                'title'   => __('Custom Icon Image','redux-framework-demo'),
                'content' => __('Custom Icon Image','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'custom_icon_image_retina',
            'type' => 'media',
            'title' => __('Custom Icon Image Retina','redux-framework-demo'),
            'subtitle'  => __('Custom Icon Image Retina.', 'redux-framework-demo'),
            'desc' =>  __('Select an image file for the retina version of the icon. It should be 2x the size of main icon.','redux-framework-demo'),
            'url' => true,
            'hint' => array(
                'title'   => __('Custom Icon Image Retina','redux-framework-demo'),
                'content' => __('Custom Icon Image Retina','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'retina_icon_width',
            'type' => 'text',
            'title' => __('Standard Icon Width for Retina Icon','redux-framework-demo'),
            'subtitle'  => __('Standard Icon Width for Retina Icon.', 'redux-framework-demo'),
            'desc' =>  __('If retina icon is added, enter the standard icon (1x) version width, do not enter the retina icon width.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Standard Icon Width for Retina Icon','redux-framework-demo'),
                'content' => __('Standard Icon Width for Retina Icon','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'retina_icon_height',
            'type' => 'text',
            'title' => __('Standard Icon Height for Retina Icon','redux-framework-demo'),
            'subtitle'  => __('Standard Icon Height for Retina Icon.', 'redux-framework-demo'),
            'desc' =>  __('If retina icon is added, enter the standard icon (1x) version height, do not enter the retina icon height.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Standard Icon Height for Retina Icon','redux-framework-demo'),
                'content' => __('Standard Icon Height for Retina Icon','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'custom_icon_link',
            'type' => 'text',
            'title' => __('Custom Icon Link','redux-framework-demo'),
            'subtitle'  => __('Custom Icon Link.', 'redux-framework-demo'),
            'desc' =>  __('Insert a link for your custom icon.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Custom Icon Link','redux-framework-demo'),
                'content' => __('Custom Icon Link','redux-framework-demo'),
            )
        ),
    )
);


 