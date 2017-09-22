<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Pengunjung {

	public function index()
	{
		$this->layout->load_frontend('home/index', ['title' => 'Ujian Online']);
	}
}

?>
