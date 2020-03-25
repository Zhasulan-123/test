<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Yii::t('app', 'Валюты');
?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <!-- <h1 class="m-0 text-dark"></h1> -->
            </div><!-- /.col -->
            <div class="col-sm-6">
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">

            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-dollar-sign"></i> <?= Html::encode($this->title); ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="TableSearch" class="table table-bordered table-striped past_up">
                            <thead>
                                <tr>
                                    <th><?= Yii::t('app', '№'); ?></th>
                                    <th><?= Yii::t('app', 'Валюты'); ?></th>
                                    <th><?= Yii::t('app', 'Курс к тенге'); ?></th>
                                    <th><?= Yii::t('app', 'Дата получения курса'); ?></th>
                                    <th><?= Yii::t('app', 'Дата создания'); ?></th>
                                    <th><?= Yii::t('app', 'Дата редактированя'); ?></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th style="width: 10px"><?= Yii::t('app', '#'); ?></th>
                                    <th><span><?= Yii::t('app', 'Поиск'); ?></span></th>
                                    <th><span><?= Yii::t('app', 'Поиск'); ?></span></th>
                                    <th><span><?= Yii::t('app', 'Поиск'); ?></span></th>
                                    <th><span><?= Yii::t('app', 'Поиск'); ?></span></th>
                                    <th><span><?= Yii::t('app', 'Поиск'); ?></span></th>
                                    <th style="width: 40px"></th>
                                    <th style="width: 40px"></th>
                                </tr>
                            </thead>
                            <tbody>
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

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th><?= Yii::t('app', '№'); ?></th>
                                    <th><?= Yii::t('app', 'Валюты'); ?></th>
                                    <th><?= Yii::t('app', 'Курс к тенге'); ?></th>
                                    <th><?= Yii::t('app', 'Дата получения курса'); ?></th>
                                    <th><?= Yii::t('app', 'Дата создания'); ?></th>
                                    <th><?= Yii::t('app', 'Дата редактированя'); ?></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->

<!-- Modal -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<?php $this->registerJsFile('@web/js/currenciesUpdate.js', ['depends' => 'app\assets\JqueryAsset']); ?>