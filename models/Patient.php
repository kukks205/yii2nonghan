<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patient".
 *
 * @property integer $id
 * @property string $cid
 * @property string $prename
 * @property string $fname
 * @property string $lname
 * @property string $sex
 * @property integer $age
 * @property string $disease
 * @property string $reg_date
 * @property string $user
 */
class Patient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patient';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['age'], 'integer'],
            [['cid', 'prename', 'fname', 'lname', 'sex', 'disease', 'reg_date'], 'string', 'max' => 255],
            [['user'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cid' => 'Cid',
            'prename' => 'Prename',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'sex' => 'Sex',
            'age' => 'Age',
            'disease' => 'Disease',
            'reg_date' => 'Reg Date',
            'user' => 'User',
        ];
    }
}
