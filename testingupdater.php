<?php
/*
    Plugin Name: Testing Updater
    Plugin URI: http://95west.co
    Description: Thanks for choosing 95 West! We are here to help you. On top of making some tweaks to better your website, this plugin makes it easy for you to reach us for any concerns or questions you might have!
    Version: 0.2
    Author: 95 West
    Author URI: https://95west.co/
*/

defined('ABSPATH') or die( 'No script kiddies please!' );


class TestingUpdater {
		
	protected $username = 'terrancewoest';
	protected $repo = 'TestingUpdater';
	protected $key;

	public function __construct()
	{
		require_once('Updater/GitHubUpdater.php');
		$this->init();
	}

	private function init()
	{
		if ( is_admin() ) {

		    new GitHubUpdater(__FILE__, $this->username, $this->repo);

		}
	}

}

new TestingUpdater;