<?php
/**
 * Потребитель.
 * 1. Поиск тикета
 * 2. Просмотр тикета
 *
 * Class ConsumerController
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
			'index' => 'application.modules.consumer.controllers.Ticket.IndexAction',
			'view' => 'application.modules.consumer.controllers.Ticket.ViewAction',
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
                'users'=>array('*'),
            ),
            array('allow',
                'actions'=>array('view'),
                'users'=>array('@'),
            ),
            array('deny',
//                'actions'=>array('delete'),
                'users'=>array('*'),
            ),
        );
    }
}