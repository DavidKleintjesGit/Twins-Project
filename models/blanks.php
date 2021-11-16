<?php defined('_JEXEC') or die;

class TwinsModelBlanks extends JModelList
{
    
    protected function getListQuery()
	{
		// Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);

		// Create the base select statement.
		$query->select('*')
                ->from($db->quoteName('n8hje_blank'));

		return $query;
	}
}