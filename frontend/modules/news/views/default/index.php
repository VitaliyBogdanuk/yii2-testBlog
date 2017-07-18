<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\news\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
  <?php foreach ($news as $model): ?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="<?= $model->getImage()->getUrl('x200') ?>" alt="...">
      <div class="caption">
        <h3><?= Html::encode($model->title) ?></h3>
        <p style="max-height: 300px; overflow: hidden;"><?= Html::encode($model->content) ?></p>
      </div>
    </div>
  </div>
  <?php endforeach ?>
</div>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'content:ntext',
            // 'image:ntext',
            'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    document.getElementById('w0').removeAttribute('class');


</script>