<?php

namespace app\modules\console\controllers;

class TopicController extends FoundationController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
