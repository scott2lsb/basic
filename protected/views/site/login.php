<?php$this->pageTitle=Yii::app()->name . ' - 会员登录';$this->breadcrumbs=array(	'会员登录',);?><div id="left">    <div style="position:relative;" class="art_list">          <h3 class="blk_t">会员登录</h3>        <div id="sta_content">            <p>请输入您的登录信息：</p><div class="form"><?php $form=$this->beginWidget('CActiveForm', array(	'id'=>'login-form',	'enableAjaxValidation'=>true,)); ?>	<p class="note">带星号（<span class="required">*</span>）的是必须的。</p>	<div class="row">		<?php echo $form->labelEx($model,'username'); ?>		<?php echo $form->textField($model,'username'); ?>		<?php echo $form->error($model,'username'); ?>	</div>	<div class="row">		<?php echo $form->labelEx($model,'password'); ?>		<?php echo $form->passwordField($model,'password'); ?>		<?php echo $form->error($model,'password'); ?>	</div>	<div class="row rememberMe">		<?php echo $form->checkBox($model,'rememberMe'); ?>		<?php echo $form->label($model,'rememberMe'); ?>		<?php echo $form->error($model,'rememberMe'); ?>		<?php echo CHtml::submitButton('登录'); ?>	</div><?php $this->endWidget(); ?></div><!-- form -->        </div>    </div></div>