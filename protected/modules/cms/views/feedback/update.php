<?php$this->breadcrumbs=array(    Yii::t('main','Feedback')=>array('index'),	$model->name=>array('view','id'=>$model->id),    Yii::t('main','reply'),);$this->menu=array(	array('label'=>Yii::t('main','View Feedback'), 'url'=>array('view', 'id'=>$model->id)),	array('label'=>Yii::t('main','Manage Feedback'), 'icon'=>'cog','url'=>array('admin')),);?><h1><?php echo Yii::t('main','Reply Feedback');?> <?php echo $model->id; ?></h1><?php echo $this->renderPartial('_form', array('model'=>$model)); ?>