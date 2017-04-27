<?php

namespace app\modules\console\controllers;

class AuctionController extends FoundationController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
