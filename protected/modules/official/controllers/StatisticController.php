<?php
/**
 * Статистика по заявкам
 *
 * Class StatisticController
 */
class StatisticController extends Controller
{
    public $layout = 'main';

	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			'index' => 'application.modules.official.controllers.Statistic.IndexAction',
//			'add' => 'application.modules.supplier.controllers.Ticket.AddAction',
//			'view' => 'application.modules.supplier.controllers.Ticket.ViewAction',
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