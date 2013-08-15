<?php
/**
 * Контроллер пользователей
 * @author Burtsev Roman <roman@artektiv.ru>
 */
class SupplierController extends Controller
{
    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow', // allow authenticated users to perform any action
                'users'=>array('*'),
            ),
//            array('deny',  // deny all users
//                'users'=>array('*'),
//            ),
        );
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model = new Supplier();

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Supplier']))
        {
            $model->attributes = $_POST['Supplier'];

            if ($model->save())
                $this->redirect(array('index'));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Supplier']))
        {
            $model->attributes = $_POST['Supplier'];
            if ($model->save())
                $this->redirect(array('index'));
        }

        $this->render('update', array(
            'model'=>$model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        $model = $this->loadModel($id);

        $model->delete();

        $this->redirect(array('index'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Supplier');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Supplier the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = Supplier::model()->findByPk($id);
        if($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    public function getOrganizations()
    {
        $dbQuery = Organization::model()->findAll();
        $items = array('' => 'Не выбрана');
        foreach($dbQuery as $item) {
            $items[$item->id] = CHtml::encode($item->name);
        }
        return $items;
    }

    public function getRegion()
    {
        $dbQuery = Region::model()->findAll();
        $items = array('' => 'Не выбран');
        foreach($dbQuery as $item) {
            $items[$item->id] = CHtml::encode($item->name);
        }
        return $items;
    }

    public function getRoles()
    {
        $dbQuery = SupplierRole::model()->findAll();
        $items = array('' => 'Не выбрана');
        foreach($dbQuery as $item) {
            $items[$item->id] = CHtml::encode($item->name);
        }
        return $items;
    }
}