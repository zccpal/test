<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\Poststatus;
use common\models\Adminuser;
/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tags')->textarea(['rows' => 6]) ?>
     <?php
 
     $allstatus=Poststatus::find()->select(['name','id'])->from('poststatus')->indexBy('id')->column();
     ?>
    <?= $form->field($model, 'status')->dropDownList($allstatus,['prompt'=>'请选择状态']) ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'update_time')->textInput() ?>

 <?php
     $author=Adminuser::find()->all();
     $allauthor=ArrayHelper::map($author,'id','nickname');
?>
    <?= $form->field($model, 'author_id')->dropDownList($allauthor) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新增' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
