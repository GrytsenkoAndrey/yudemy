<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;

?>
<h1 class="page-header">Category <a href="/index.php?r=category/create" class="btn btn-primary pull-right" title="Create">Create</a></h1>

<?php
$message = yii::$app->getSession()->getFlash('message');
if ($message !== null) {
?>
    <div class="alert alert-success"><?=$message;?></div>
<?php } ?>

<ul class="list-group">
    <?php foreach ($category as $item) { ?>
    <li class="list-group-item"><a href="/index.php?r=job&category=<?=$item->id;?>" title="<?=$item->name;?>"><?=$item->name;?></a></li>
    <?php } ?>
</ul>

<?=LinkPager::widget(['pagination' => $pagination]);?>
