<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 015 15.04.19
 * Time: 10:32
 */

namespace app\models;
use yii\db\ActiveRecord;

class TCards extends ActiveRecord
{
    public static function tableName()
    {
        return 'Cards';
    }

    public function getUser(){
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}