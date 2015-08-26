<?php

namespace app\controllers;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $param = ['a'=>12,'b'=>8];
        return $this->render('index',$param);
    }

}
