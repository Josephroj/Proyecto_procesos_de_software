<?php

class HomeController extends BaseController {


	public function getIndex()
	{
		return View::make('login.loginadministrativo');
	}

		public function getInicioadmin()
	{

		return View::make("home.index");
	}
		public function getRegistrar()
	{

		return View::make("home.registrarusuario");
	}


}
