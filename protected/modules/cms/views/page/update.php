<?php$this->breadcrumbs = array(    Yii::t('main','Page') => array('index'),    $model->title => array('view', 'id' => $model->id),    Yii::t('main','Update'),);$this->menu = array(    array('label' =>Yii::t('main','Create Page'), 'icon' => 'plus', 'url' => array('create')),    array('label' =>Yii::t('main','Manage Page'),'icon'=>'cog','url'=>array('admin')),);?><h1><?php echo Yii::t('main','Update Page'); ?> #<?php echo $model->id; ?></h1>    <?php echo $this->renderPartial('_form', array('model' => $model)); ?>