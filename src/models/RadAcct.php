<?php

namespace zhilchenko\freeradius\models;

use Yii;

/**
 * This is the model class for table "{{%radacct}}".
 *
 * @property integer $radacctid
 * @property string $acctsessionid
 * @property string $acctuniqueid
 * @property string $username
 * @property string $groupname
 * @property string $realm
 * @property string $nasipaddress
 * @property string $nasportid
 * @property string $nasporttype
 * @property string $acctstarttime
 * @property string $acctupdatetime
 * @property string $acctstoptime
 * @property integer $acctinterval
 * @property integer $acctsessiontime
 * @property string $acctauthentic
 * @property string $connectinfo_start
 * @property string $connectinfo_stop
 * @property integer $acctinputoctets
 * @property integer $acctoutputoctets
 * @property string $calledstationid
 * @property string $callingstationid
 * @property string $acctterminatecause
 * @property string $servicetype
 * @property string $framedprotocol
 * @property string $framedipaddress
 */
class RadAcct extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%radacct}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['acctstarttime', 'acctupdatetime', 'acctstoptime'], 'safe'],
            [['acctinterval', 'acctsessiontime', 'acctinputoctets', 'acctoutputoctets'], 'integer'],
            [['acctsessionid', 'username', 'groupname', 'realm'], 'string', 'max' => 64],
            [['acctuniqueid', 'nasporttype', 'acctauthentic', 'acctterminatecause', 'servicetype', 'framedprotocol'], 'string', 'max' => 32],
            [['nasipaddress', 'nasportid', 'framedipaddress'], 'string', 'max' => 15],
            [['connectinfo_start', 'connectinfo_stop', 'calledstationid', 'callingstationid'], 'string', 'max' => 50],
            [['acctuniqueid'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'radacctid'          => Yii::t('app', 'Radacctid'),
            'acctsessionid'      => Yii::t('app', 'Acctsessionid'),
            'acctuniqueid'       => Yii::t('app', 'Acctuniqueid'),
            'username'           => Yii::t('app', 'Username'),
            'groupname'          => Yii::t('app', 'Groupname'),
            'realm'              => Yii::t('app', 'Realm'),
            'nasipaddress'       => Yii::t('app', 'Nasipaddress'),
            'nasportid'          => Yii::t('app', 'Nasportid'),
            'nasporttype'        => Yii::t('app', 'Nasporttype'),
            'acctstarttime'      => Yii::t('app', 'Acctstarttime'),
            'acctupdatetime'     => Yii::t('app', 'Acctupdatetime'),
            'acctstoptime'       => Yii::t('app', 'Acctstoptime'),
            'acctinterval'       => Yii::t('app', 'Acctinterval'),
            'acctsessiontime'    => Yii::t('app', 'Acctsessiontime'),
            'acctauthentic'      => Yii::t('app', 'Acctauthentic'),
            'connectinfo_start'  => Yii::t('app', 'Connectinfo Start'),
            'connectinfo_stop'   => Yii::t('app', 'Connectinfo Stop'),
            'acctinputoctets'    => Yii::t('app', 'Acctinputoctets'),
            'acctoutputoctets'   => Yii::t('app', 'Acctoutputoctets'),
            'calledstationid'    => Yii::t('app', 'Calledstationid'),
            'callingstationid'   => Yii::t('app', 'Callingstationid'),
            'acctterminatecause' => Yii::t('app', 'Acctterminatecause'),
            'servicetype'        => Yii::t('app', 'Servicetype'),
            'framedprotocol'     => Yii::t('app', 'Framedprotocol'),
            'framedipaddress'    => Yii::t('app', 'Framedipaddress'),
        ];
    }
}
