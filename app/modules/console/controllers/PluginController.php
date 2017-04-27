<?php

namespace app\modules\console\controllers;

class PluginController extends FoundationController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
