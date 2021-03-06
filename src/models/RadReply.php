<?php

namespace zhilchenko\freeradius\models;

use Yii;

/**
 * This is the model class for table "{{%radreply}}".
 *
 * @property integer $id
 * @property string $username
 * @property string $attribute
 * @property string $op
 * @property string $value
 */
class RadReply extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%radreply}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'attribute'], 'string', 'max' => 64],
            [['op'], 'string', 'max' => 2],
            [['value'], 'string', 'max' => 253],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'attribute' => Yii::t('app', 'Attribute'),
            'op' => Yii::t('app', 'Op'),
            'value' => Yii::t('app', 'Value'),
        ];
    }
}
