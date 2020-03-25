<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::t('app', 'Валюты');;
?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container">
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
    <div class="container">
        <!-- Info boxes -->
        <div class="row">

            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-dollar-sign"></i> <?= Html::encode($this->title); ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="TableSearch" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th><?= Yii::t('app', '№'); ?></th>
                                    <th><?= Yii::t('app', 'Валюты'); ?></th>
                                    <th><?= Yii::t('app', 'Курс к тенге'); ?></th>
                                    <th><?= Yii::t('app', 'Дата получения курса'); ?></th>
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

                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="4" style="text-align: center; color: red;"><?= Yii::t('app', 'Пусто!!!'); ?></td>
                                    </tr>
                                <?php endif; ?>

                            </tbody>
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