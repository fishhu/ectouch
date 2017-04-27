<?php

namespace app\modules\console\controllers;

class AdsController extends FoundationController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
