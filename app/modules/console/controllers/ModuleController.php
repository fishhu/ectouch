<?php

namespace app\modules\console\controllers;

class ModuleController extends FoundationController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
