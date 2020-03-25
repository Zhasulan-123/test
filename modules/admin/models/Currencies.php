<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "currencies".
 *
 * @property int $id
 * @property string $name
 * @property float $rate
 * @property string $date
 * @property string $created_at
 * @property string|null $updated_at
 */
class Currencies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'currencies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'rate', 'date', 'created_at'], 'required'],
            [['rate'], 'number'],
            [['date', 'created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 10],
        ];
    }
}
