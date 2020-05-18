<?php
/**
 * Register Social Links List
 *
 * @package    Powerkit
 * @subpackage Modules/Helper
 */

/**
 * Set list social
 *
 * @param array $list Array social params.
 * @return array Array social params.
 */
function powerkit_social_links_list( $list = array() ) {

	// Facebook.
	$list['facebook'] = array(
		'id'     => 'facebook',
		'name'   => esc_html__( 'Facebook', 'powerkit' ),
		'label'  => esc_html__( 'Likes', 'powerkit' ),
		'link'   => esc_url( 'https://facebook.com/%powerkit_social_links_facebook_user%' ),
		'fields' => array(
			'powerkit_social_links_facebook_user' => esc_html__( 'Facebook User', 'powerkit' ),
		),
	);

	// Twitter.
	$list['twitter'] = array(
		'id'     => 'twitter',
		'name'   => esc_html__( 'Twitter', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => esc_url( 'https://twitter.com/%powerkit_social_links_twitter_user%' ),
		'fields' => array(
			'powerkit_social_links_twitter_user' => esc_html__( 'Twitter User', 'powerkit' ),
		),
	);

	// Instagram.
	$list['instagram'] = array(
		'id'     => 'instagram',
		'name'   => esc_html__( 'Instagram', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => esc_url( 'https://www.instagram.com/%powerkit_social_links_instagram_user%' ),
		'fields' => array(
			'powerkit_social_links_instagram_user' => esc_html__( 'Instagram User', 'powerkit' ),
		),
	);

	// Pinterest.
	$list['pinterest'] = array(
		'id'     => 'pinterest',
		'name'   => esc_html__( 'Pinterest', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => esc_url( 'https://pinterest.com/%powerkit_social_links_pinterest_user%' ),
		'fields' => array(
			'powerkit_social_links_pinterest_user' => esc_html__( 'Pinterest User', 'powerkit' ),
		),
	);

	// YouTube.
	$list['youtube'] = array(
		'id'     => 'youtube',
		'name'   => esc_html__( 'YouTube', 'powerkit' ),
		'label'  => esc_html__( 'Subscribers', 'powerkit' ),
		'link'   => array(
			'powerkit_social_links_youtube_channel_type' => array(
				'user'    => esc_url( 'https://www.youtube.com/user/%powerkit_social_links_youtube_slug%' ),
				'channel' => esc_url( 'https://www.youtube.com/channel/%powerkit_social_links_youtube_slug%' ),
			),
		),
		'fields' => array(
			'powerkit_social_links_youtube_channel_type' => array(
				'title'   => esc_html__( 'YouTube Channel Type', 'powerkit' ),
				'options' => array(
					'user'    => esc_html__( 'User', 'powerkit' ),
					'channel' => esc_html__( 'Channel', 'powerkit' ),
				),
			),
			'powerkit_social_links_youtube_slug'  => esc_html__( 'YouTube User or Channel ID', 'powerkit' ),
		),
	);

	// Telegram.
	$list['telegram'] = array(
		'id'     => 'telegram',
		'name'   => esc_html__( 'Telegram', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => 'https://t.me/%powerkit_social_links_telegram_chat%',
		'fields' => array(
			'powerkit_social_links_telegram_chat' => esc_html__( 'Telegram Channel ID', 'powerkit' ),
		),
	);

	// Vimeo.
	$list['vimeo'] = array(
		'id'     => 'vimeo',
		'name'   => esc_html__( 'Vimeo', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => esc_url( 'https://vimeo.com/%powerkit_social_links_vimeo_user%' ),
		'fields' => array(
			'powerkit_social_links_vimeo_user' => esc_html__( 'Vimeo User ID', 'powerkit' ),
		),
	);

	// SoundCloud.
	$list['soundcloud'] = array(
		'id'     => 'soundcloud',
		'name'   => esc_html__( 'SoundCloud', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => esc_url( 'https://soundcloud.com/%powerkit_social_links_soundcloud_user_id%' ),
		'fields' => array(
			'powerkit_social_links_soundcloud_user_id' => esc_html__( 'SoundCloud User ID', 'powerkit' ),
		),
	);

	// Spotify.
	$list['spotify'] = array(
		'id'     => 'spotify',
		'name'   => esc_html__( 'Spotify', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => array(
			'powerkit_social_links_spotify_type' => array(
				'user'   => esc_url( 'https://open.spotify.com/user/%powerkit_social_links_spotify_user%' ),
				'show'   => esc_url( 'https://open.spotify.com/show/%powerkit_social_links_spotify_user%' ),
				'artist' => esc_url( 'https://open.spotify.com/artist/%powerkit_social_links_spotify_user%' ),
			),
		),
		'fields' => array(
			'powerkit_social_links_spotify_type' => array(
				'title'   => esc_html__( 'Spotify Type', 'powerkit' ),
				'options' => array(
					'user'   => esc_html__( 'User', 'powerkit' ),
					'show'   => esc_html__( 'Show', 'powerkit' ),
					'artist' => esc_html__( 'Artist', 'powerkit' ),
				),
			),
			'powerkit_social_links_spotify_user' => esc_html__( 'Spotify User or Show ID', 'powerkit' ),
		),
	);

	// Dribbble.
	$list['dribbble'] = array(
		'id'     => 'dribbble',
		'name'   => esc_html__( 'Dribbble', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => esc_url( 'https://dribbble.com/%powerkit_social_links_dribbble_user%' ),
		'fields' => array(
			'powerkit_social_links_dribbble_user' => esc_html__( 'Dribbble User ID', 'powerkit' ),
		),
	);

	// Behance.
	$list['behance'] = array(
		'id'     => 'behance',
		'name'   => esc_html__( 'Behance', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => esc_url( 'https://www.behance.net/%powerkit_social_links_behance_user%' ),
		'fields' => array(
			'powerkit_social_links_behance_user' => esc_html__( 'Behance User ID', 'powerkit' ),
		),
	);

	// GitHub.
	$list['github'] = array(
		'id'     => 'github',
		'name'   => esc_html__( 'GitHub', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => esc_url( 'https://github.com/%powerkit_social_links_github_user%' ),
		'fields' => array(
			'powerkit_social_links_github_user' => esc_html__( 'GitHub User ID', 'powerkit' ),
		),
	);

	// Odnoklassniki.
	$list['ok'] = array(
		'id'     => 'ok',
		'name'   => esc_html__( 'Odnoklassniki', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => array(
			'powerkit_social_links_ok_type' => array(
				'profile'      => esc_url( 'https://ok.ru/profile/%powerkit_social_links_ok_slug%' ),
				'profile_name' => esc_url( 'https://ok.ru/%powerkit_social_links_ok_slug%' ),
				'group'        => esc_url( 'https://ok.ru/group/%powerkit_social_links_ok_slug%' ),
				'group_name'   => esc_url( 'https://ok.ru/%powerkit_social_links_ok_slug%' ),
			),
		),
		'fields' => array(
			'powerkit_social_links_ok_type' => array(
				'title'   => esc_html__( 'Type', 'powerkit' ),
				'options' => array(
					'profile'      => esc_html__( 'Profile ID', 'powerkit' ),
					'profile_name' => esc_html__( 'Profile Name', 'powerkit' ),
					'group'        => esc_html__( 'Group ID', 'powerkit' ),
					'group_name'   => esc_html__( 'Group Name', 'powerkit' ),
				),
			),
			'powerkit_social_links_ok_slug' => esc_html__( 'Odnoklassniki Slug / ID', 'powerkit' ),
		),
	);

	// VK.
	$list['vk'] = array(
		'id'     => 'vk',
		'name'   => esc_html__( 'VK', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => array(
			'powerkit_social_links_vk_type' => array(
				'group' => esc_url( 'https://vk.com/%powerkit_social_links_vk_id%' ),
				'user'  => esc_url( 'https://vk.com/%powerkit_social_links_vk_id%' ),
			),
		),
		'fields' => array(
			'powerkit_social_links_vk_type' => array(
				'title'   => esc_html__( 'Profile Type', 'powerkit' ),
				'options' => array(
					'group' => esc_html__( 'Group', 'powerkit' ),
					'user'  => esc_html__( 'User', 'powerkit' ),
				),
			),
			'powerkit_social_links_vk_id' => esc_html__( 'Group or User ID', 'powerkit' ),
		),
	);

	// Xing.
	$list['xing'] = array(
		'id'     => 'xing',
		'name'   => esc_html__( 'Xing', 'powerkit' ),
		'label'  => esc_html__( 'Follow', 'powerkit' ),
		'link'   => array(
			'powerkit_social_links_xing_type' => array(
				'personal' => esc_url( 'https://www.xing.com/profile/%powerkit_social_links_xing_slug%' ),
				'company'  => esc_url( 'https://www.xing.com/companies/%powerkit_social_links_xing_slug%' ),
			),
		),
		'fields' => array(
			'powerkit_social_links_xing_type' => array(
				'title'   => esc_html__( 'Profile Type', 'powerkit' ),
				'options' => array(
					'personal' => esc_html__( 'Personal', 'powerkit' ),
					'company'  => esc_html__( 'Company', 'powerkit' ),
				),
			),
			'powerkit_social_links_xing_slug' => esc_html__( 'Xing Company or User ID', 'powerkit' ),
		),
	);

	// LinkedIn.
	$list['linkedin'] = array(
		'id'     => 'linkedin',
		'name'   => esc_html__( 'LinkedIn', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => array(
			'powerkit_social_links_linkedin_channel_type' => array(
				'personal' => esc_url( 'https://www.linkedin.com/in/%powerkit_social_links_linkedin_slug%' ),
				'business' => esc_url( 'https://www.linkedin.com/company/%powerkit_social_links_linkedin_slug%' ),
			),
		),
		'fields' => array(
			'powerkit_social_links_linkedin_channel_type' => array(
				'title'   => esc_html__( 'Profile Type', 'powerkit' ),
				'options' => array(
					'personal' => esc_html__( 'Personal', 'powerkit' ),
					'business' => esc_html__( 'Business', 'powerkit' ),
				),
			),
			'powerkit_social_links_linkedin_slug'         => esc_html__( 'LinkedIn Company or User ID', 'powerkit' ),
		),
	);

	// Twitch.
	$list['twitch'] = array(
		'id'     => 'twitch',
		'name'   => esc_html__( 'Twitch', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => 'https://www.twitch.tv/%powerkit_social_links_twitch_user_id%',
		'fields' => array(
			'powerkit_social_links_twitch_user_id' => esc_html__( 'Twitch Channel ID', 'powerkit' ),
		),
	);

	// Flickr.
	$list['flickr'] = array(
		'id'     => 'flickr',
		'name'   => esc_html__( 'Flickr', 'powerkit' ),
		'label'  => esc_html__( 'Follow', 'powerkit' ),
		'link'   => 'https://www.flickr.com/photos/%powerkit_social_links_flickr_user_id%',
		'fields' => array(
			'powerkit_social_links_flickr_user_id' => esc_html__( 'User ID', 'powerkit' ),
		),
	);

	// Snapchat.
	$list['snapchat'] = array(
		'id'     => 'snapchat',
		'name'   => esc_html__( 'Snapchat', 'powerkit' ),
		'label'  => esc_html__( 'Follow', 'powerkit' ),
		'link'   => 'https://www.snapchat.com/add/%powerkit_social_links_snapchat_user%',
		'fields' => array(
			'powerkit_social_links_snapchat_user' => esc_html__( 'Account Name', 'powerkit' ),
		),
	);

	// Medium.
	$list['medium'] = array(
		'id'     => 'medium',
		'name'   => esc_html__( 'Medium', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => 'https://medium.com/%powerkit_social_links_medium_user%',
		'fields' => array(
			'powerkit_social_links_medium_user' => esc_html__( 'Medium Username', 'powerkit' ) . '<p class="description">Example: @user_name</p>',
		),
	);

	// Strava.
	$list['strava'] = array(
		'id'     => 'strava',
		'name'   => esc_html__( 'Strava', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => 'https://www.strava.com/athletes/%powerkit_social_links_strava_user%',
		'fields' => array(
			'powerkit_social_links_strava_user' => esc_html__( 'Strava User ID', 'powerkit' ),
		),
	);

	// Tumblr.
	$list['tumblr'] = array(
		'id'     => 'tumblr',
		'name'   => esc_html__( 'Tumblr', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_tumblr_url%',
		'fields' => array(
			'powerkit_social_links_tumblr_url' => esc_html__( 'Tumblr URL', 'powerkit' ),
		),
	);

	// Reddit.
	$list['reddit'] = array(
		'id'     => 'reddit',
		'name'   => esc_html__( 'Reddit', 'powerkit' ),
		'label'  => esc_html__( 'Subscribers', 'powerkit' ),
		'link'   => array(
			'powerkit_social_links_reddit_type' => array(
				'subreddit' => esc_url( 'https://www.reddit.com/r/%powerkit_social_links_reddit_user%' ),
				'user'      => esc_url( 'https://www.reddit.com/user/%powerkit_social_links_reddit_user%' ),
			),
		),
		'fields' => array(
			'powerkit_social_links_reddit_type' => array(
				'title'   => esc_html__( 'Type', 'powerkit' ),
				'options' => array(
					'subreddit' => esc_html__( 'Subreddit', 'powerkit' ),
					'user'      => esc_html__( 'User', 'powerkit' ),
				),
			),
			'powerkit_social_links_reddit_user' => esc_html__( 'Subreddit Name or Reddit User ', 'powerkit' ),
		),
	);

	// Bloglovin.
	$list['bloglovin'] = array(
		'id'     => 'bloglovin',
		'name'   => esc_html__( 'Bloglovin', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_bloglovin_url%',
		'fields' => array(
			'powerkit_social_links_bloglovin_url' => esc_html__( 'Bloglovin URL', 'powerkit' ),
		),
	);

	// Weibo.
	$list['weibo'] = array(
		'id'     => 'weibo',
		'name'   => esc_html__( 'Weibo', 'powerkit' ),
		'label'  => esc_html__( 'Follow', 'powerkit' ),
		'link'   => 'https://www.weibo.com/%powerkit_social_links_weibo_user%',
		'fields' => array(
			'powerkit_social_links_weibo_user' => esc_html__( 'Username', 'powerkit' ),
		),
	);

	// WeChat.
	$list['wechat'] = array(
		'id'     => 'wechat',
		'name'   => esc_html__( 'WeChat', 'powerkit' ),
		'label'  => esc_html__( 'Follow', 'powerkit' ),
		'link'   => 'https://web.wechat.com/%powerkit_social_links_wechat_user%',
		'fields' => array(
			'powerkit_social_links_wechat_user' => esc_html__( 'Username', 'powerkit' ),
		),
	);

	// Steam.
	$list['steam'] = array(
		'id'     => 'steam',
		'name'   => esc_html__( 'Steam', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_steam_url%',
		'fields' => array(
			'powerkit_social_links_steam_url' => esc_html__( 'Steam URL', 'powerkit' ),
		),
	);

	// TripAdvisor.
	$list['tripadvisor'] = array(
		'id'     => 'tripadvisor',
		'name'   => esc_html__( 'TripAdvisor', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_tripadvisor_url%',
		'fields' => array(
			'powerkit_social_links_tripadvisor_url' => esc_html__( 'TripAdvisor URL', 'powerkit' ),
		),
	);

	// Thumbtack.
	$list['thumbtack'] = array(
		'id'     => 'thumbtack',
		'name'   => esc_html__( 'Thumbtack', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_thumbtack_url%',
		'fields' => array(
			'powerkit_social_links_thumbtack_url' => esc_html__( 'Thumbtack URL', 'powerkit' ),
		),
	);

	// Android.
	$list['android'] = array(
		'id'     => 'android',
		'name'   => esc_html__( 'Android', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_android_url%',
		'fields' => array(
			'powerkit_social_links_android_url' => esc_html__( 'Android URL', 'powerkit' ),
		),
	);

	// Apple.
	$list['apple'] = array(
		'id'     => 'apple',
		'name'   => esc_html__( 'Apple', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_apple_url%',
		'fields' => array(
			'powerkit_social_links_apple_url' => esc_html__( 'Apple URL', 'powerkit' ),
		),
	);

	// Meetup.
	$list['meetup'] = array(
		'id'     => 'meetup',
		'name'   => esc_html__( 'Meetup', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_meetup_url%',
		'fields' => array(
			'powerkit_social_links_meetup_url' => esc_html__( 'Meetup URL', 'powerkit' ),
		),
	);

	// 500px.
	$list['500px'] = array(
		'id'     => '500px',
		'name'   => esc_html__( '500px', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_500px_url%',
		'fields' => array(
			'powerkit_social_links_500px_url' => esc_html__( '500px URL', 'powerkit' ),
		),
	);

	// Yelp.
	$list['yelp'] = array(
		'id'     => 'yelp',
		'name'   => esc_html__( 'Yelp', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_yelp_url%',
		'fields' => array(
			'powerkit_social_links_yelp_url' => esc_html__( 'Yelp URL', 'powerkit' ),
		),
	);

	// CodePen.
	$list['codepen'] = array(
		'id'     => 'codepen',
		'name'   => esc_html__( 'CodePen', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_codepen_url%',
		'fields' => array(
			'powerkit_social_links_codepen_url' => esc_html__( 'CodePen URL', 'powerkit' ),
		),
	);

	// GitHub.
	$list['github'] = array(
		'id'     => 'github',
		'name'   => esc_html__( 'GitHub', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => esc_url( 'https://github.com/%powerkit_social_links_github_user%' ),
		'fields' => array(
			'powerkit_social_links_github_user' => esc_html__( 'GitHub User ID', 'powerkit' ),
		),
	);

	// GitLab.
	$list['gitlab'] = array(
		'id'     => 'gitlab',
		'name'   => esc_html__( 'GitLab', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_gitlab_url%',
		'fields' => array(
			'powerkit_social_links_gitlab_url' => esc_html__( 'GitLab URL', 'powerkit' ),
		),
	);

	// Bitbucket.
	$list['bitbucket'] = array(
		'id'     => 'bitbucket',
		'name'   => esc_html__( 'Bitbucket', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_bitbucket_url%',
		'fields' => array(
			'powerkit_social_links_bitbucket_url' => esc_html__( 'Bitbucket URL', 'powerkit' ),
		),
	);

	// freeCodeCamp.
	$list['freecodecamp'] = array(
		'id'     => 'freecodecamp',
		'name'   => esc_html__( 'freeCodeCamp', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_freecodecamp_url%',
		'fields' => array(
			'powerkit_social_links_freecodecamp_url' => esc_html__( 'freeCodeCamp URL', 'powerkit' ),
		),
	);

	// JSFiddle.
	$list['jsfiddle'] = array(
		'id'     => 'jsfiddle',
		'name'   => esc_html__( 'JSFiddle', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_jsfiddle_url%',
		'fields' => array(
			'powerkit_social_links_jsfiddle_url' => esc_html__( 'JSFiddle URL', 'powerkit' ),
		),
	);

	// Delicious.
	$list['delicious'] = array(
		'id'     => 'delicious',
		'name'   => esc_html__( 'Delicious', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_delicious_url%',
		'fields' => array(
			'powerkit_social_links_delicious_url' => esc_html__( 'Delicious URL', 'powerkit' ),
		),
	);

	// DeviantArt.
	$list['deviantart'] = array(
		'id'     => 'deviantart',
		'name'   => esc_html__( 'DeviantArt', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_deviantart_url%',
		'fields' => array(
			'powerkit_social_links_deviantart_url' => esc_html__( 'DeviantArt URL', 'powerkit' ),
		),
	);

	// Foursquare.
	$list['foursquare'] = array(
		'id'     => 'foursquare',
		'name'   => esc_html__( 'Foursquare', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_foursquare_url%',
		'fields' => array(
			'powerkit_social_links_foursquare_url' => esc_html__( 'Foursquare URL', 'powerkit' ),
		),
	);

	// Houzz.
	$list['houzz'] = array(
		'id'     => 'houzz',
		'name'   => esc_html__( 'Houzz', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_houzz_url%',
		'fields' => array(
			'powerkit_social_links_houzz_url' => esc_html__( 'Houzz URL', 'powerkit' ),
		),
	);

	// Product Hunt.
	$list['producthunt'] = array(
		'id'     => 'producthunt',
		'name'   => esc_html__( 'Product Hunt', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_producthunt_url%',
		'fields' => array(
			'powerkit_social_links_producthunt_url' => esc_html__( 'Product Hunt URL', 'powerkit' ),
		),
	);

	// Slideshare.
	$list['slideshare'] = array(
		'id'     => 'slideshare',
		'name'   => esc_html__( 'Slideshare', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_slideshare_url%',
		'fields' => array(
			'powerkit_social_links_slideshare_url' => esc_html__( 'Slideshare URL', 'powerkit' ),
		),
	);

	// Goodreads.
	$list['goodreads'] = array(
		'id'     => 'goodreads',
		'name'   => esc_html__( 'Goodreads', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_goodreads_url%',
		'fields' => array(
			'powerkit_social_links_goodreads_url' => esc_html__( 'Goodreads URL', 'powerkit' ),
		),
	);

	// Mastodon.
	$list['mastodon'] = array(
		'id'     => 'mastodon',
		'name'   => esc_html__( 'Mastodon', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_mastodon_url%',
		'fields' => array(
			'powerkit_social_links_mastodon_url' => esc_html__( 'Mastodon URL', 'powerkit' ),
		),
	);

	// PixelFed.
	$list['pixelfed'] = array(
		'id'     => 'pixelfed',
		'name'   => esc_html__( 'PixelFed', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_pixelfed_url%',
		'fields' => array(
			'powerkit_social_links_pixelfed_url' => esc_html__( 'PixelFed URL', 'powerkit' ),
		),
	);

	// Micro.blog.
	$list['microblog'] = array(
		'id'     => 'microblog',
		'name'   => esc_html__( 'Micro.blog', 'powerkit' ),
		'label'  => esc_html__( 'Followers', 'powerkit' ),
		'link'   => '%powerkit_social_links_microblog_url%',
		'fields' => array(
			'powerkit_social_links_microblog_url' => esc_html__( 'Micro.blog URL', 'powerkit' ),
		),
	);

	// Phone.
	$list['phone'] = array(
		'id'     => 'phone',
		'name'   => esc_html__( 'Phone', 'powerkit' ),
		'label'  => esc_html__( 'phone', 'powerkit' ),
		'link'   => 'tel:%powerkit_social_links_phone_tel%',
		'fields' => array(
			'powerkit_social_links_phone_tel' => esc_html__( 'Phone', 'powerkit' ),
		),
	);

	// Viber.
	$list['viber'] = array(
		'id'     => 'viber',
		'name'   => esc_html__( 'Viber', 'powerkit' ),
		'label'  => esc_html__( 'Call', 'powerkit' ),
		'link'   => 'tel:%powerkit_social_links_viber_tel%',
		'fields' => array(
			'powerkit_social_links_viber_tel' => esc_html__( 'Phone', 'powerkit' ),
		),
	);

	// WhatsApp.
	$list['whatsapp'] = array(
		'id'     => 'whatsapp',
		'name'   => esc_html__( 'WhatsApp', 'powerkit' ),
		'label'  => esc_html__( 'Call', 'powerkit' ),
		'link'   => 'tel:%powerkit_social_links_whatsapp_tel%',
		'fields' => array(
			'powerkit_social_links_whatsapp_tel' => esc_html__( 'Phone', 'powerkit' ),
		),
	);

	// Mail.
	$list['mail'] = array(
		'id'     => 'mail',
		'name'   => esc_html__( 'Mail', 'powerkit' ),
		'label'  => esc_html__( 'Send', 'powerkit' ),
		'link'   => 'mailto:%powerkit_social_links_email%',
		'fields' => array(
			'powerkit_social_links_email' => esc_html__( 'Email', 'powerkit' ),
		),
	);

	// RSS.
	$list['rss'] = array(
		'id'     => 'rss',
		'name'   => esc_html__( 'RSS', 'powerkit' ),
		'label'  => esc_html__( 'Feed', 'powerkit' ),
		'link'   => '%powerkit_social_links_rss_url%',
		'fields' => array(
			'powerkit_social_links_rss_url' => esc_html__( 'RSS URL', 'powerkit' ),
		),
	);

	return $list;
}
add_filter( 'powerkit_social_links_list', 'powerkit_social_links_list' );
