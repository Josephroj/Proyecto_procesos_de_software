	<?php

class UsuarioController extends BaseController
{
	public function postAutenticarusuario()
	{

		$login=Input::get("txtlogin");
		$password=Input::get("txtpassword");

		$items=Admin::where("login","=",$login)
		->get();

		if(count($items)>0 and Hash::check($password,$items[0]->password))
		{
			Session::put("usuarios",json_encode($items[0]));
			return Redirect::to("/index/inicioadmin");
		}		
	else
		{
			return Redirect::back()->withErrors(["loginerror"=>"Usuario o password incorrectos"]);
		}
	}

	public function getCerrarsesion()
	{
		Session::forget("usuarios");
		Auth::logout();
		return Redirect::to("/");
	}

//registrar usuario metodo
	public function postGuardarusuarioadministrador()
	{	
		$dbcorreo=Admin::where("correo","=",Input::get("email"))->get();
		$dbusuario=Admin::where("login","=",Input::get("login"))->get();
		$login=Admin::where("login","=",Input::get("login"))
		->get();
		if(count($login)>0)
		{
			return Redirect::back()->withErrors(["error"=>"El login ya existe"])->withInput();
		}
		if(count($dbcorreo)>0)
		{
			return Redirect::back()->withErrors(["error"=>"El Correo Electronico  ya existe"])->withInput();
		}
		if(count($dbusuario)>0)
		{
			return Redirect::back()->withErrors(["error"=>"El Usuario ya existe"])->withInput();
		}
		else
		{

		$admin = new Admin();
		$admin->nombre=Input::get("nombres");
		$admin->correo=Input::get("email");
		$admin->login=Input::get("login");
		$admin->password=Hash::make(Input::get("password"));
		$admin->save();

		return Redirect::back()->withErrors(["error"=>"El Usuario esta Registrado Satisfactoriamente"])->withInput();
		}
	}
}
