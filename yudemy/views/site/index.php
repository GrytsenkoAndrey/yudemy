<?php

/* @var $this yii\web\View */

$this->title = 'My YUdemy';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>My YUdemy :: need a job?</h1>

        <?php
        $message = yii::$app->getSession()->getFlash('message');
        if ($message !== null) {
            ?>
            <div class="alert alert-success"><?=$message;?></div>
        <?php } ?>

        <p class="lead">Browse our open job or find employees.</p>

        <p>
            <a class="btn btn-lg btn-primary" href="index.php?r=job">Start Browsing</a>
            <a class="btn btn-lg btn-success" href="index.php?r=job/create">Create Listing</a>
        </p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Browse listing</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="index.php?r=job">Browse now &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Find Now</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="#">Find now &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Join Now</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="index.php?r=user/register">Join now &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
