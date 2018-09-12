<?php

class Controller_Newstyle extends Controller
{

	function action_index()
	{
			$this->view->generate(['content' =>'newstyle_view.php', 'title' => "New Style"], 'cleartemplate_view.php');
	}

}
