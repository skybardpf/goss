<?php
/**
 * Форма авторизации.
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class LoginAction extends CAction
{
    public function run(){
        $model = new SupplierLoginForm;

        $class = get_class($model);

        // if it is ajax validation request
        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form'){
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if(isset($_POST[$class]))
        {
            $model->attributes=$_POST[$class];
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->login())
                $this->controller->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->controller->render('login', array('model'=>$model));
    }
}