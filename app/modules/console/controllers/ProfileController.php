<?php

namespace app\modules\console\controllers;

class ProfileController extends FoundationController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
