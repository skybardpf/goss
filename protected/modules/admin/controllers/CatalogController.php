<?php
/**
 * Контроллер организаций
 * @author Burtsev Roman <roman@artektiv.ru>
 */
class CatalogController extends Controller
{
    public $layout = 'admin';

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        $this->render('index', array(
            'regionsCount'      => Region::model()->count(),
            'organizationsCount' => Organization::model()->count(),
            'servicesCount'      => Service::model()->count(),
            'suppliersCount'     => Supplier::model()->count(),
        ));
	}
}
