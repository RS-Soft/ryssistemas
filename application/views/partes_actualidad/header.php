<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/estilos.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/actualidad/style.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/iconoWEB.png">

  <!-- SHARETHIS-->
  <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c95a81afb6af900122ecbda&product=sticky-share-buttons' async='async'></script>

  <!-- EMOJI-MASTER-->
    <script src="<?php echo base_url(); ?>emoji-master/jquery-3.3.1.min.js"></script> 
    <link rel="stylesheet" href="<?php echo base_url(); ?>emoji-master/emojionearea.min.css">
    <script src="<?php echo base_url(); ?>emoji-master/emojionearea.min.js"></script>


  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css">

  <!-- Custom Fonts -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/simple-line-icons/css/simple-line-icons.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/stylish-portfolio.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/stylish-portfolio.css">
    
    <title><?php echo ($titulo); ?></title>

</head>

<body id="page-top">

<br><br>

<div class="container">
  <!-- Flash message. Es un mensaje para informar al usuario que que fue registrado correctamente-->
  <!--      ATRAPAMOS LOS MENSAJES PROVENIENTES DE LOS CONTROLADORES "Post", "Categories", "Users"-->
  <?php if($this->session->flashdata('user_registered')) : ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
  <?php endif; ?>
  
  <?php if($this->session->flashdata('post_created')) : ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('post_updated')) : ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('category_created')) : ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('post_deleted')) : ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('login_failed')) : ?>
  <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('user_loggedin')) : ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('user_loggedout')) : ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('category_deleted')) : ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
  <?php endif; ?>

    <?php if($this->session->flashdata('comment_created')) : ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('comment_created').'</p>'; ?>
  <?php endif; ?>