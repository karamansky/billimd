<?php namespace Billi\Forms;

if( !defined( 'ABSPATH' ) ) exit;

class CF7
{
	
	public function __construct()
	{
		$this->applyActions();
	}
	
	/**
	 * Add actions and filters
	 */
	public function applyActions()
	{
		add_filter('wpcf7_recaptcha_threshold', [$this, 'updateReCaptchaScore'], 10, 1);
	}
	
	
	/**
	 * Update reCaptcha v.3 Score
	 */
	public function updateReCaptchaScore($threshold)
	{
		$threshold = 0.7; // increase threshold to 0.7
		
		return $threshold;
	}
}

new CF7();

class_alias( 'Billi\Forms\CF7', 'CF7' );
