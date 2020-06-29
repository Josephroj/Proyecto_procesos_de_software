<?php

class UsuarioController extends BaseController
{

	public function postAutenticarusuario()
	{
		
		$login=Input::get("txtlogin");
		$password=Input::get("txtpassword");

		$items=Cliente::where("correo","=",$login)
		->get();

		if (count($items)>0)
			 {
				$password_encriptado=$items[0]->password; 
				if ($items[0]->verificado==0) {
					return Redirect::back()->withErrors(["claveerrorsa"=>"Su cuenta no ha sido activada, verifique su correo"]);
				}
				if (Hash::check($password,$password_encriptado)) 
				{
					Session::put("clientes",json_encode($items[0]));
					return Redirect::to("/");
				}
				else
				{
					return Redirect::back()->withErrors(["claveerrors"=>"Usuario o password incorrectos"]);
				}
			}
			else
			{
				return Redirect::back()->withErrors(["loginerror"=>"Usuario o password incorrectos"]);
			}


	}

	public function getCerrarsesion()
	{
		Session::forget("clientes");
		return Redirect::to("/");

	}
	public function postGuardarusuario()
	{
		$correo=Input::get("txtCorreo");
		$dni=Input::get("txtdni");

		$bdcorreo=Cliente::where("correo","=",$correo)
		->get();

		$dbdni=Cliente::where("dni","=",$dni)
		->get();

		if (count($bdcorreo)>0) 
		{
			return Redirect::to("/login")->withErrors(["error"=>"El correo ya existe"])->withInput();

		}

		if (count($dbdni)>0) 
		{
			return Redirect::to("/login")->withErrors(["error"=>"El DNI ya existe"])->withInput();
		}


		$usuario = new Cliente();
		$usuario->nombre=Input::get("txtNombres");
		$usuario->correo=Input::get("txtCorreo");
		$usuario->apellidos=Input::get("txtapellido");
		$usuario->dni=Input::get("txtdni");
		$usuario->distrito=Input::get("cbodistrito");
		$usuario->direccion=Input::get("txtdireccion");
		$usuario->direccion2=Input::get("txtdireccion2");
		$usuario->telefono=Input::get("txttelefono");
		$usuario->password=Hash::make(Input::get("txtpassword"));

		$usuario->save();

		$token=new Token();
		$token->token=base64_encode(random_bytes(64));
		$token->idcliente=$usuario->id;
		$token->fecha_caducidad=new DateTime();

		$token->save();


		$parametros=new stdClass();
		$parametros->token=$token->token;
		$parametros->nombre_cliente=$usuario->nombre;
		$parametros->login_cliente=$usuario->correo;

		Mail::send('clientes.correo_registro', array('parametros' => $parametros), function($message) use ($usuario)
		{

		    $message->to($usuario->correo, $usuario->nombre)->subject("Activación de cuenta");
		});		

		return Redirect::to("/login")->withErrors(["error"=>".."])
		->withInput();
	}



	public function getActivarcuenta()
	{

		$error_activacion="";
		$token_value=$_GET["token"];		
		$tokens=Token::where("token","=",$token_value)->get();

		if(count($tokens)>0)
		{

			$token=$tokens[0];

			$usuario=Cliente::find($token->idcliente);
			//echo json_encode($usuario);

			$usuario->verificado=1;
			$usuario->save();

			$token->valido=0;
			$token->save();

			return View::make("clientes.frmClienteActivado");

		}


		$error_activacion="El codigo de activación no es válido";

		return View::make("clientes.frmErrorActivacion")->with("error",$error_activacion);
	}
	
	public function postLinkresetpassword()
			{
			$email=Input::get("txtCorreo");
			$usuarios=Cliente::where("correo","=",$email)->get();
			if(count($usuarios)>0)
			{
			$token=new Tokens();
			$token->idusuario = $usuarios[0]->id;
			$token->token=base64_encode(random_bytes(50));
			$token->estado=true;
			$token->save();

			$data['txtCorreo']=$email;
			$data['nombre']=$usuarios[0]->nombre;
			//enviar correo
			Mail::send('emails.confirmacion_cuenta',array('token'=>$token->token),function($message) use ($data)
			{
			$message->to($data["txtCorreo"],'TOURPERU S.R.L')->subject('Recuperar contraseña');       
			});
			return Redirect::back()->withErrors(["error"=>"El Correo se
			enbió correctamente para el cambio de contraseña"])->withInput();
			}
			else
			{
			return Redirect::back()->withErrors(["error"=>"NO podemos encontrar 
			a un usuario con ese correo electronico"])->withInput();
			}


			}

		public function getReestablecerpassword()
		{
			$error_activacion="";
			$token_value=$_GET["token"];		
			$tokens=Tokens::where("token","=",$token_value)->get();



			if(count($tokens)>0)
			{

				$token=$tokens[0];

				//$usuario=Cliente::find($token->idusuario);

				$token->estado=0;
				$token->save();

				return View::make("emails.recuperar")->with("tokens",$tokens);
			}
		}

		//reestablecer contraseña con token
		public function postGuardarnuevopassword()
		{

			$dbcorreoelectronico=Cliente::where("correo","=",
			Input::get("correoelectronico"))->get();

			$password=Input::get("txtpassword");
			$confirmarpassword=Input::get("txtconfirmar");

			if( $password != $confirmarpassword)
			{
				return Redirect::back()->withErrors(["error"=>"la contraseñas no 
				coinciden, verificar que sean iguales"])->withInput();
			}
			if(count($dbcorreoelectronico)>0 )
			{
				$cliente=Cliente::find(Input::get("idcliente"));
				$cliente->password=Hash::make(Input::get("txtpassword"));
				$cliente->save();
				return Redirect::to('/login');
			}
			else
			{
				return Redirect::back()->withErrors(["error"=>"NO podemos encontrar
				a un usuario con ese correo electronico"])->withInput();
			}
		}

		//---------------------------------------////////////////////////////////////////////
			
		public function postValidartoken()
		
		{
		$token=Input::get('txttoken');
		$cliente=DB::table('tokens')->select('token','idusuarios')->where('token','=',$token)->get();
		if ($cliente) 
		{
			//return Redirect::to('/')->with('clientelistar',$cliente);	
			return View::make("emails.recuperar")->with("clientelistar",$cliente);		
		}
		else
		{
			return Redirect::to("/token")->withErrors(["errortoken"=>"Usuario o password incorrectos"]);
		}		
	}

		public function getReenviaractivacion()
	{
		$token_value=$_GET["token"];

		$tokens=Token::where("token","=",$token_value)->get();


		//return $token_value;

		if(count($tokens)>0)
		{
			$token=$tokens[0];

			$usuario=Cliente::find($token->idcliente);


			$token=new Token();
			$token->token=base64_encode(random_bytes(64));
			$token->idcliente=$usuario->id;
			$token->fecha_caducidad=new DateTime();
			$token->fecha_caducidad->add(new DateInterval("P3D"));
			$token->save();


			$parametros=new stdClass();
			$parametros->token=$token->token;
			$parametros->nombre_cliente=$usuario->nombres;
			$parametros->login_cliente=$usuario->login;


			Mail::send('clientes.correo_registro', array('parametros' => $parametros), function($message) use ($usuario)
			{

			    $message->to($usuario->correo_electronico, $usuario->nombres)->subject("Activación de cuenta");
			});


		}
	}


	public function postActualizartoken()
	{
		$clave=Input::get('txtpassword');
		$cliente=Cliente::find(Input::get("idusuarios"));
		$cliente->password=Hash::make($clave);
		$cliente->save();

		return Redirect::to('/login')->withErrors(["erroractual"=>"Usuario o password incorrectos"]);
	}
		public function getRandomtext()
	{

		return  urlencode(base64_encode(random_bytes(64)));

	}

	public function getTomorrowday()
	{
		return  json_encode(new DateTime('tomorrow'));
	}

	public function getUrl()
	{
		 return  Request::root();
	}

}