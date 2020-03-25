<?php

namespace app\modules\api\models;

use Yii;
use app\modules\admin\models\Currencies;

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
class Currency extends Currencies
{

    public function fields()
    {
        return [
            'ids' => 'id',
            'title' => 'name',
            'money' => 'rate',
            'сourseDate' => 'date',
        ];
    }
}
