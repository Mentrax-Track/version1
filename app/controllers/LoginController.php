<?php

class LoginController extends \BaseController {

	public function showLogin()
	{
		if(Auth::check())
		{
			return Redirect::to('/');
		}
		return View::make('users.login');
	}

}
