<?php defined('_JEXEC') or die;

class TwinsController extends JControllerLegacy
{
	protected $default_view = 'blanks';

	public function display($cachable = false, $urlparams = false)
	{
		parent::display();

		return $this;
	}
}