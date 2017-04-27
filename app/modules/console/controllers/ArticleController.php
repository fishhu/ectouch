<?php

namespace app\modules\console\controllers;

class ArticleController extends FoundationController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
