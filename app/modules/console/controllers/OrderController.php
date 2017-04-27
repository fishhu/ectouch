<?php

namespace app\modules\console\controllers;

class OrderController extends FoundationController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
