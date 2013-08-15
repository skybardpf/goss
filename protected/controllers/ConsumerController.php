<?php
/**
 * Потребитель.
 * 1. Поиск тикета
 * 2. Просмотр тикета
 *
 * Class SupplierController
 */
class ConsumerController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			'index' => 'application.controllers.Supplier.IndexAction',
			'ticket' => 'application.controllers.Supplier.TicketAction',
		);
	}
}