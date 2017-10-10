<?php
/* @var $this \yii\web\View */
/* @var $model \justcoded\yii2\src\forms\PermissionForm */
/* @var $relModel \justcoded\yii2\src\forms\PermissionRelForm */
/* @var $permission \justcoded\yii2\src\models\Permission */

$this->title                   = 'Update Permission';
$this->params['breadcrumbs'][] = ['label' => 'Permissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['heading']       = 'Permissions';
$this->params['subheading']    = 'Update Permission';
?>

<div class="permissions-update">

	<?= $this->render('_form', [
		'model' => $model,
		'permission' => $permission,
		'relModel' => $relModel,
	]) ?>

</div>

