<?php

/* @var $this yii\web\View */

$this->title = Yii::t('app', 'Администратор');;
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

            <div class="col-12">
                <!-- interactive chart -->
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            <?= Yii::t('app', 'Интерактивная диаграмма области'); ?>
                        </h3>

                        <div class="card-tools">
                            <?= Yii::t('app', 'В реальном времени'); ?>
                            <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                                <button type="button" class="btn btn-default btn-sm active" data-toggle="on">On</button>
                                <button type="button" class="btn btn-default btn-sm" data-toggle="off">Off</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="interactive" style="height: 300px;"></div>
                    </div>
                    <!-- /.card-body-->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->