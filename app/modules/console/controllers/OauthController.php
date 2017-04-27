<?php

namespace app\modules\console\controllers;

class OauthController extends FoundationController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
