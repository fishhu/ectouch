<?php

namespace app\modules\console\controllers;


/**
 * Default controller for the `console` module
 */
class DefaultController extends FoundationController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $isGuest = isset($_SESSION['ADMIN_ID']) ? 1 : 0;
        if(! $isGuest){
            //$this->redirect(['auth/login']);
        }
        return $this->render('index');
    }
}
