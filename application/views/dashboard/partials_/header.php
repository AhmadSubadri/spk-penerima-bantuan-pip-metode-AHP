<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php echo SITE_NAME . ": " . ucfirst($this->uri->segment(1)) . " - " . ucfirst($this->uri->segment(2)) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url() ?>dashboard/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>dashboard/css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="<?= base_url() ?>dashboard/css/skins/blue.css">
    <link rel="stylesheet" href="<?= base_url() ?>dashboard/libs/select2/select2.min.css" />
    <script src="<?= base_url() ?>dashboard/js/jquery-1.11.0.min.js"></script>
    <script src="<?= base_url(); ?>dashboard/libs/select2/select2.min.js"></script>

    <link href="<?= base_url() ?>dashboard/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <style>
        body {
            background-image: linear-gradient(#129EA4, white);
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100%;
            display: block;
            position: relative;
            margin: 0;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <?php $this->load->view('dashboard/partials_/nav'); ?>
    <div id="layoutSidenav">
        <?php $this->load->view('dashboard/partials_/sidebar'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">