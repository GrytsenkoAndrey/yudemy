<?php
/**
 * Created by PhpStorm.
 * User: APG
 * Date: 09.05.2020
 * Time: 19:29
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = $job->title;
?>
<div class="maincontent">
<a href="/index.php?r=job" class="btn btn-success">Back to Jobs</a>
    <span class="pull-right">
        <a href="/index.php?r=job/edit&id=<?=$job->id;?>" class="btn btn-primary">Edit Job</a>
        <a onclick="return confirm('are you sure?');" href="/index.php?r=job/delete&id=<?=$job->id;?>" class="btn btn-danger">Delete Job</a>
    </span>

<div class="row">
    <h2 class="page-header">
        <?=$job->title;?>
        <small>In <?=$job->city;?>, <?=$job->address;?></small>
    </h2>
    <?php if (!empty($job->description)) { ?>
    <div class="well">
        <h4>Job description:</h4>
        <p><?=$job->description;?></p>
    </div>
    <?php } ?>

    <?php
    if (!empty($job->create_date)) {
        $mydate = strtotime($item->create_date);
        $dtFormat = date("F j,Y g:i a", $mydate);
        ?>
        <ul class="list-group">
            <li class="list-group-item"><strong>Listened date: </strong><?=$dtFormat;?></li>
    <?php } ?>

    <?php
    if (!empty($job->category->name)) {
        ?>
            <li class="list-group-item"><strong>Category: </strong><?=$job->category->name;?></li>
    <?php } ?>

    <?php
    if (!empty($job->type)) {
        ?>
            <li class="list-group-item"><strong>Job Type: </strong><?=ucwords(str_replace('_', ' ', $job->type));?></li>
    <?php } ?>

    <?php
    if (!empty($job->requirements)) {
        ?>
            <li class="list-group-item"><strong>Requirements: </strong><?=$job->requirements;?></li>
    <?php } ?>

    <?php
    if (!empty($job->salary_range)) {
        ?>
            <li class="list-group-item"><strong>Salary: </strong><?=$job->salary_range;?></li>
    <?php } ?>

    <?php
    if (!empty($job->contact_email) && !empty($job->contact_phone)) {
        ?>
            <li class="list-group-item"><strong>Contacts: </strong><?=$job->contact_email;?> | <?=$job->contact_phone;?></li>
    <?php } ?>
        </ul>
    <div class="well text-center">
        <a href="mailto:<?=$job->contact_email;?>" class="btn btn-success">Contact Employer</a>
    </div>
</div>
</div>