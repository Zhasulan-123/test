<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<?php if (!empty($select)) : ?>
    <?php $i = 1;
    foreach ($select as $item) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= Html::encode($item['name']); ?></td>
            <td><?= Html::encode($item['rate']); ?></td>
            <td><?= Html::encode($item['date']); ?></td>
            <td><?= Html::encode($item['created_at']); ?></td>
            <td><?= Html::encode($item['updated_at']); ?></td>

            <td>
                <a class="click_update" href="<?= Url::to(['currencies/update', 'id' => $item['id']]); ?>" data-id="<?= $item['id']; ?>">
                    <i class="fas fa-pen"></i>
                </a>
            </td>
            <td>
                <a class="click_delete" style="color: red;" href="<?= Url::to(['currencies/delete', 'id' => $item['id']]); ?>" data-id="<?= $item['id']; ?>">
                    <i class="fas fa-trash-alt"></i>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
<?php else : ?>
    <tr>
        <td colspan="8" style="text-align: center; color: red;"><?= Yii::t('app', 'Пусто!!!'); ?></td>
    </tr>
<?php endif; ?>