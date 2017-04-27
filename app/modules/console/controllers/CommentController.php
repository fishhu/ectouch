<?php

namespace app\modules\console\controllers;

class CommentController extends FoundationController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
