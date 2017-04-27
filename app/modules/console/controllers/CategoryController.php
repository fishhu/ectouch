<?php

namespace app\modules\console\controllers;

class CategoryController extends FoundationController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
