<?php
/**
 * Class TicketException
 */
class TicketException extends CException{};

/**
 * Управление заявками на выполнение гос. услуги.
 *
 * Class TicketController
 */
class TicketController extends Controller
{
    public $layout = 'main';

	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			'index' => 'application.modules.supplier.controllers.Ticket.IndexAction',
			'add' => 'application.modules.supplier.controllers.Ticket.AddAction',
			'view' => 'application.modules.supplier.controllers.Ticket.ViewAction',
			'archive' => 'application.modules.supplier.controllers.Ticket.ArchiveAction',

            '_get_consumer_data' => 'application.modules.supplier.controllers.Ticket.GetConsumerDataAction',
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
//                'actions'=>array('add', 'archive'),
                'users'=>array('@'),
            ),
            array('deny',
//                'actions'=>array('delete'),
                'users'=>array('*'),
            ),
        );
    }
}