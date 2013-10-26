<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootswatch/2.3.2/flatly/bootstrap.min.css" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <title>Cichy Bohater</title>
</head>
<body>
<div class="container-fluid" style="padding-top: 100px;">
    <div class="row-fluid">
        <div class="hero-unit">
            <h1>Cichy Bohater</h1>
        </div>
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
<!--                <a class="brand" href="#">Domino's Mapa</a>-->
                <ul class="nav">
                    <li><a href="<?php echo $this->Html->url(array('action' => 'index')); ?>">Cichy Bohater</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row-fluid">
        <?php if($this->Session->read('Message.flash.message')) { ?><div class="alert alert-info"><?php echo $this->Session->flash(); ?></div><?php } ?>
        <?php if($this->Session->read('Message.auth.message')) { ?><div class="alert alert-info"><?php echo $this->Session->flash('auth'); ?></div><?php } ?>
    </div>
    <?php echo $content_for_layout; ?>
</div>
</div>
</body>
</html>