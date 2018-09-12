<?php

class Controller_Cv extends Controller
{

	function action_index()
	{
		$this->view->generate(array('content' =>'cv_view.php', 'title' => "Ilvir Zakiryanov"), 'template_view.php');
	}
}
