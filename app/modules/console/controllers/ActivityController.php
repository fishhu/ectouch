<?php

namespace app\modules\console\controllers;

class ActivityController extends FoundationController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
