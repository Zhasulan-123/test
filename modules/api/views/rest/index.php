<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::t('app', 'Валюты api');;
?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?= Html::encode($this->title); ?></h1>
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
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="card-title m-0"><?= Yii::t('app', 'Список курсов валют GET /currencies'); ?></h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">https://localhost:80/api/currencies?_format=json</h6><br>
                        <h6 class="card-title">https://localhost:80/api/currencies?_format=xml</h6>
                    </div>
                </div>
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="card-title m-0"><?= Yii::t('app', 'Курс валют GET /currencies/{id}'); ?></h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">https://localhost:80/api/currencies/view?id=40&_format=json</h6><br>
                        <h6 class="card-title">https://localhost:80/api/currencies/view?id=40&_format=xml</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->