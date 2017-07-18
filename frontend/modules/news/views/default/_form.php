<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use himiklab\thumbnail\EasyThumbnailImage;

/* @var $this yii\web\View */
/* @var $model frontend\modules\news\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'content')->textarea(['options' => ['rows' => 6]]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?php if(!$model->isNewRecord){ ?>
	    <div class="form-group">
	    	<div class="col-md-offset-2 col-md-10">
	    		<?php $image = $model->getImage(); ?>
                <img src="<?= $model->getImage()->getUrl('x200') ?>" alt="...">
	    	</div>
		</div>
    <?php } ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    document.getElementById('news-content').setAttribute('rows', 6);


</script>