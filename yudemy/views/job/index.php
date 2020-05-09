<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1 class="page-header">Jobs <a href="/index.php?r=job/create" class="btn btn-primary pull-right" title="Create">Create</a></h1>

<?php
$message = yii::$app->getSession()->getFlash('message');
if ($message !== null) {
    ?>
    <div class="alert alert-success"><?=$message;?></div>
<?php } ?>

<div class="row">

    <?php foreach ($jobs as $item) { ?>
    <div class="col-xs-12 col-sm-6 col-md-3 myjob">
        <h3><?=$item->title;?></h3>
        <p><strong>Description: </strong><?=$item->description;?></p>
        <p><strong>City: </strong><?=$item->city;?></p>
        <p><strong>Address: </strong><?=$item->address;?></p>
        <p><strong>Listed on: </strong><?=$item->create_date;?></p>
    </div>
    <?php } ?>

</div>

<?=LinkPager::widget(['pagination' => $pagination]);?>
