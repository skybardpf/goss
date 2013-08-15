<?php
/**
 * Управление заявками на выполнение гос. услуги.
 *
 * Class TicketController
 */
class TicketController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			'add' => 'application.controllers.Ticket.AddAction',
			'archive' => 'application.controllers.Ticket.ArchiveAction',
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
                'actions'=>array('add', 'archive'),
                'users'=>array('@'),
            ),
            array('deny',
//                'actions'=>array('delete'),
                'users'=>array('*'),
            ),
        );
    }
}