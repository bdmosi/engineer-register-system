<?php $this->pageTitle=Yii::app()->name . ' - '."Restore";
$this->breadcrumbs=array(
	"Login" => array('/user/login'),
            "Restore",
);

?>

<h1>Restore Password</h1>

<?php if(Yii::app()->user->hasFlash('recoveryMessage')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('recoveryMessage'); ?>
</div>
<?php else: ?>

<div class="form">
<?php echo CHtml::beginForm(); ?>

	<?php echo CHtml::errorSummary($model); ?>
	
	<div class="row">
		<?php echo CHtml::activeLabel($model,'email'); ?>
		<?php echo CHtml::activeTextField($model,'email') ?>
		<p>Please enter your login or email address</p>
	</div>
	
	<div class="row submit">
		<?php echo CHtml::submitButton("Restore"); ?>
	</div>

<?php echo CHtml::endForm(); ?>
</div><!-- form -->
<?php endif; ?>