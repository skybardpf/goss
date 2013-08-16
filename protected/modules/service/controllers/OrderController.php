<?php
/**
 * Class OrderController
 *
 * Интеграция со стороннимим сервисами.
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class OrderController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
            'create' => 'application.modules.service.controllers.Order.CreateAction',
            'get_status' => 'application.modules.service.controllers.Order.GetStatusAction',
		);
	}
}