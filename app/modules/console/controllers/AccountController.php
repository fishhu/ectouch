<?php

namespace app\modules\console\controllers;

class AccountController extends FoundationController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
