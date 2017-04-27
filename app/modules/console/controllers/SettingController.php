<?php

namespace app\modules\console\controllers;

class SettingController extends FoundationController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionShop()
    {
        return $this->render('shop');
    }

}
