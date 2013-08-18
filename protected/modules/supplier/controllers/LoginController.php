<?php
/**
 * Управление авторизацией.
 *
 * Class LoginController
 */
class LoginController extends Controller
{
    public $layout = 'main';

	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			'login' => 'application.modules.supplier.controllers.Login.LoginAction',
			'logout' => 'application.modules.supplier.controllers.Login.LogoutAction',
        );
	}
}