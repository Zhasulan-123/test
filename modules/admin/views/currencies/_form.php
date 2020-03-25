<form id="FormUpdate" action="/admin/currencies/update?id=<?= $model->id; ?>" role="form">
    <div class="modal-header">
        <h4 class="modal-title"><?= Yii::t('app', 'Редактированя Валюты'); ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->getCsrfToken(); ?>" />
        <!-- input states -->
        <div class="form-group">
            <label class="control-label" for="title"><?= Yii::t('app', 'Валюты'); ?></label>
            <input type="text" name="Currencies[name]" value="<?= $model->name; ?>" class="form-control" id="title" placeholder="<?= Yii::t('app', 'Название'); ?>">
        </div>
        <div class="form-group">
            <label class="control-label" for="title"><?= Yii::t('app', 'Курс к тенге'); ?></label>
            <input type="text" name="Currencies[rate]" value="<?= $model->rate; ?>" class="form-control" id="title" placeholder="<?= Yii::t('app', 'Название'); ?>">
        </div>
        <div class="form-group">
            <label class="control-label" for="title"><?= Yii::t('app', 'Дата получения курса'); ?></label>
            <input type="text" name="Currencies[date]" value="<?= $model->date; ?>" class="form-control" id="title" placeholder="<?= Yii::t('app', 'Название'); ?>">
        </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?= Yii::t('app', 'Закрыть'); ?></button>
        <button type="button" class="btn btn-primary" id="submitUpdate"><?= Yii::t('app', 'Обновить'); ?></button>
    </div>
</form>