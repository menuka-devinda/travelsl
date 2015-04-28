<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrator Panel</title>

<!-- CSS -->
<link href="<?= base_url() ?>style/transdmin.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?= base_url() ?>style/jNice.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style/css/jquery.lightbox-0.5.css" media="screen" />
<!--<link href="<?php echo base_url(); ?>style/template.css" rel="stylesheet" type="text/css" />-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>style/ie6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>style/ie7.css" /><![endif]-->

<!-- JavaScripts-->
<script type="text/javascript" src="<?= base_url() ?>js/jquery-1.2.1.pack.js"></script><!-- search username -->
<script type="text/javascript" src="<?= base_url() ?>js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url() ?>js/jNice.js"></script>
<script type="text/javascript" src="<?= base_url() ?>js/ckeditor/ckeditor.js"></script> <!-- news letter text area -->

<script type="text/javascript" src="<?php echo base_url(); ?>js/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/js/jquery.lightbox-0.5.js"></script>
<script type="text/javascript">
    $(function() {
       $('#gallery1 a').lightBox();
		 $('#gallery2 a').lightBox();
		  $('#gallery3 a').lightBox();
    });
    </script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/otl_validation.js"></script>
    <?php $this->lang->load('form');?>  
        <?php $this->lang->load('ads');?>  
        <?php $this->lang->load('form');?>  
        <?php $this->lang->load('menu');?>
 
        <?php $this->load->helper('url'); ?> 
     <?php $this->lang->load('upperBanner'); ?> 
      <?php $this->lang->load('lowerBanner'); ?>  
 <?php $this->lang->load('proceedure');?> 



</head>

<body>