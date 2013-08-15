<?php
/**
 * Поставщик гос. услуг.
 * 1. Поиск тикета
 * 2. Просмотр тикета
 *
 * Class SupplierController
 */
class SupplierController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			'index' => 'application.controllers.Supplier.IndexAction',
//			'ticket' => 'application.controllers.Supplier.TicketAction',
		);
	}

    public function filters()
    {
        return array(
            'accessControl',
        );
    }

    public function accessRules()
    {
        return array(
            array('allow',
                'actions'=>array('index'),
                'users'=>array('@'),
            ),
            array('deny',
//                'actions'=>array('delete'),
                'users'=>array('*'),
            ),
        );
    }
}