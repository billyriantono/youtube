<?php

return [
	
	/**
	 * Application Name.
	 */
	'application_name' => getenv('YOUTUBE_APPLICATION_NAME'),

	/**
	 * Client ID.
	 */
	'client_id' => getenv('GOOGLE_CLIENT_ID'),

	/**
	 * Client Secret.
	 */
	'client_secret' => getenv('GOOGLE_CLIENT_SECRET'),

	/**
	 * Route Base URI. You can use this to prefix all route URI's.
	 * Example: 'admin', would prefix the below routes with 'http://domain.com/admin/'
	 */
	'route_base_uri' => '',

	/**
	 * Redirect URI, this does not include your TLD.
	 * Example: 'callback' would be http://domain.com/callback
	 */
	'redirect_uri' => getenv('YOUTUBE_REDIRECT_URI'),

	/**
	 * The autentication URI in with you will require to first authorize with Google.
	 */
	'authentication_uri' => getenv('YOUTUBE_AUTHENTICATION_URI'),

	/**
	 * After redirection URI ,for example you want do another things after getting the access token like channel name
	 */
	'after_redirect_url' => getenv('YOUTUBE_AFTER_REDIRECT_URI'),
	/**
	 * Access Type
	 */
	'access_type' => 'offline',

	/**
	 * Approval Prompt
	 */
	'approval_prompt' => getenv('GOOGLE_APPROVAL_PROMPT'),

	/**
	 * Scopes.
	 */
	'scopes' => [
		'https://www.googleapis.com/auth/youtube',
		'https://www.googleapis.com/auth/youtube.upload',
		'https://www.googleapis.com/auth/youtube.readonly'
	],

	/**
	 * Developer key.
	 */
	'developer_key' => getenv('GOOGLE_DEVELOPER_KEY')

];