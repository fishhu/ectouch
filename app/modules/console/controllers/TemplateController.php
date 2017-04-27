<?php

namespace app\modules\console\controllers;

class TemplateController extends FoundationController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
