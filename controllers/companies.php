<?php defined('_JEXEC') or die;

class TwinsControllerCompanies extends JControllerAdmin
{
	public $view_list = "companies";
	
	public function __construct($config = array())
	{
		parent::__construct($config);
	}
	
	public function getModel($name = 'company', $prefix = 'TwinsModel', $config=array('ignore_request' => true))
	{
		return parent::getModel($name, $prefix, $config);
	}
}