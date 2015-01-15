<?php

use yii\helpers\Html;
use kartik\grid\GridView;

//use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PatientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Patients';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-index">

    <h1><?= Html::encode($this->title) ?></h1>
<?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <p>
<?= Html::a('Create Patient', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php  echo
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        /*'pjax' => TRUE,
        'export' => FALSE,
        'panel' => [
            'before' => '',
            'after' => ''
        ],*/
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'cid',
            'prename',
            'fname',
            'lname',
            // 'sex',
            [
                'attribute' => 'age',
                'value' => function($data) {
                    return $data->age . " ปี";
                }
            ],
            // 'disease',
            // 'reg_date',
            // 'user',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);

    ?>

    <?php 
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pjax' => TRUE,
        
      'pjaxSettings'=>[
        'neverTimeout'=>true,    
        'beforeGrid'=>'ทดสอบการตั้งค่า pjax',
        'afterGrid'=>'ทดสอบการตั้งค่า pjax',
        ],
        
 'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i> Countries</h3>',
        'type'=>'success',
        'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Create Patient', ['create'], ['class' => 'btn btn-success']),
        'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
        'footer'=>false
    ],
        
        'responsive' => true,
        'hover' => true,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'cid',
            'prename',
            'fname',
            'lname',
            // 'sex',
            [
                'attribute' => 'age',
                'value' => function($data) {
                    return $data->age . " ปี";
                }
            ],
            // 'disease',
            // 'reg_date',
            // 'user',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

</div>
