<?php

namespace app\modules\console\controllers;

class GoodsController extends FoundationController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
