<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {

	public function index()
	{
		$this->render('main/index');
	}

  public function logout()
	{
    $this->session->sess_destroy();
    redirect('login/index');
  }
}
