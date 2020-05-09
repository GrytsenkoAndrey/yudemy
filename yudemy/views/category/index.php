<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;

?>
<h1 class="page-header">Category</h1>

<ul class="list-group">
    <?php foreach ($category as $item) { ?>
    <li class="list-group-item"><a href="/index.php?r=job&category=<?=$item->id;?>" title="<?=$item->name;?>"><?=$item->name;?></a></li>
    <?php } ?>
</ul>

<?=LinkPager::widget(['pagination' => $pagination]);?>
