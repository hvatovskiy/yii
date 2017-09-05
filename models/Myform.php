<?php
/**
 * Created by PhpStorm.
 * User: goshan
 * Date: 23.08.2017
 * Time: 19:15
 */

namespace app\models;


use yii\base\Model;

class Myform extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name','email'],'required'],
            [['email'],'email'],
        ];
    }

}