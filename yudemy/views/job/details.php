<?php
/**
 * Created by PhpStorm.
 * User: APG
 * Date: 09.05.2020
 * Time: 19:29
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<a href="/index.php?r=job" class="btn btn-primary">Back to Jobs</a>

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
        </ul>
    <?php } ?>

    <?php
    if (!empty($job->category->name)) {
        ?>
        <ul class="list-group">
            <li class="list-group-item"><strong>Category: </strong><?=$job->category->name;?></li>
        </ul>
    <?php } ?>

    <?php
    if (!empty($job->type)) {
        ?>
        <ul class="list-group">
            <li class="list-group-item"><strong>Job Type: </strong><?=ucwords(str_replace('_', ' ', $job->type));?></li>
        </ul>
    <?php } ?>

    <?php
    if (!empty($job->requirements)) {
        ?>
        <ul class="list-group">
            <li class="list-group-item"><strong>Requirements: </strong><?=$job->requirements;?></li>
        </ul>
    <?php } ?>

    <?php
    if (!empty($job->salary_range)) {
        ?>
        <ul class="list-group">
            <li class="list-group-item"><strong>Salary: </strong><?=$job->salary_range;?></li>
        </ul>
    <?php } ?>

    <?php
    if (!empty($job->contact_email) && !empty($job->contact_phone)) {
        ?>
        <ul class="list-group">
            <li class="list-group-item"><strong>Contacts: </strong><?=$job->contact_email;?> | <?=$job->contact_phone;?></li>
        </ul>
    <?php } ?>

    <div class="well text-center">
        <a href="mailto:<?=$job->contact_email;?>" class="btn btn-success">Contact Employer</a>
    </div>
</div>
