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
}
