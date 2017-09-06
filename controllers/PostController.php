<?php
/**
 * Created by PhpStorm.
 * User: goshan
 * Date: 22.08.2017
 * Time: 18:47
 */

namespace app\controllers;


use app\models\Myform;


class PostController extends AppController
{
    public function actionIndex($name='')
    {
        $var = 'lolkek4eburek';
        $vor = 'lulz';
        return $this->render('index', compact('var','vor','name'));
    }

    public function actionForm()
    {
        $form=new Myform();
        $form->attributes=\Yii::$app->request->post(
            'Myform'
        );
        return $this->render('form',compact('form'));
    }
}