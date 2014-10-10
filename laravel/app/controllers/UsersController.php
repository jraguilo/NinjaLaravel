<?php

class UsersController extends BaseController {

  public function showRegister()
  {
    return View::make('users.register');
  }
  
  public function showLogin()
  {
    return View::make('users.login');
  }
  
  public function handleLogin()
  {
    $data = Input::only(['username', 'password']);
    
    if(Auth::attempt(['username' => $data['username'], 'password' => $data['password']]))
    {
      return Redirect::to('/');
    }
  }
}
