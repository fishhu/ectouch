<?php

namespace app\modules\console\controllers;

class NavigatorController extends FoundationController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
