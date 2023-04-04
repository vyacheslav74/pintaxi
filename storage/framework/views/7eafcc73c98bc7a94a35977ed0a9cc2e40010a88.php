<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Title -->
    <title><?php echo e(Setting::get('site_title')); ?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset(Setting::get('site_icon'))); ?>"/>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('asset/admin/vendor/bootstrap4/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asset/admin/vendor/themify-icons/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asset/admin/vendor/font-awesome/css/font-awesome.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('asset/admin/assets/css/core.css')); ?>">

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->
</head>
<body>

    <?php $background = asset('http://gaia-int.com/admin/assets/img/daryan-shamkhali-109777-unsplash.jpg'); ?>

    <body class="img-cover" style="background-image: url(<?php echo e($background); ?>);">
    
    <div class="container-fluid">

    <?php echo $__env->yieldContent('content'); ?>

    </div>

        <!-- Vendor JS -->
        <script type="text/javascript" src="<?php echo e(asset('asset/admin/vendor/jquery/jquery-1.12.3.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('asset/admin/vendor/tether/js/tether.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('asset/admin/vendor/bootstrap4/js/bootstrap.min.js')); ?>"></script>
    </body>
</html>
