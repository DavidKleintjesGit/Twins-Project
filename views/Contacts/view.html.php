<?php defined('_JEXEC') or die;

class TwinsViewContacts extends JViewLegacy
{
    public $overview;
/*
    public function display($tpl = null)
    {
        // We don't need toolbar in the modal window.
        if ($this->getLayout() !== 'modal') {

            $this->state = $this->get("State");
            $this->addToolbar();
            $this->sidebar = JHtmlSidebar::render();
        }

        $overview = new JHtmlOverview($this);
        echo $overview->show();
    }*/
    
    function display($tpl = null)
	{
		// Get data from the model
		$this->items		= $this->get('Items');
		$this->pagination	= $this->get('Pagination');

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));

			return false;
		}

                // Set the toolbar
		$this->addToolBar();
                
		// Display the template
		parent::display($tpl);
        }

    public function addToolbar()
    {
        JToolbarHelper::title(JText::_('Contacts'));
	JToolbarHelper::addNew('contact.add');
	JToolbarHelper::editList('contact.edit');
	JToolbarHelper::deleteList('Weet je zeker abi?', 'contacts.delete');
    }
}	