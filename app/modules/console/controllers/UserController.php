<?php

namespace app\modules\console\controllers;

class UserController extends FoundationController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
