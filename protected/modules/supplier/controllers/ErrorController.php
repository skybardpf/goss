<?php
/**
 * Управление ошибками.
 *
 * Class LoginController
 */
class ErrorController extends Controller
{
    public $layout = 'main';

	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			'error' => 'application.modules.supplier.controllers.Error.ErrorAction',
        );
	}
}