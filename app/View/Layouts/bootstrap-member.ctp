<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <?php echo $this->Html->css(array('bootstrap.min', 'cakephp.quick'));?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <?php echo $this->Html->script(array('html5shiv', 'respond.min'));?>
    <![endif]-->
</head>

<body>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 sidebar">
        <div class="text-panel">
            <?php echo $this->Html->image('user-img.png', array('class'=>'img-circle'));?>
            <h3>CakePHP Quick Start</h3>
            <hr>
            <p>
                Here is the details text you want to display for your application.
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 col-lg-offset-3">
        <!--@Navigation-->
        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.navbar-collapse -->
            </div>
        </div>
        <!--@Navigation end-->
        <div class="contentMain">
            <?php echo $this->fetch('content'); //Our main application content goes here?>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php echo $this->Html->script(array('jquery-1.10.2.min', 'bootstrap.min'));?>
</body>
</html>