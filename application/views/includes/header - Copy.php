<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?= $page_heading ?></title>
        <link href="<?php echo base_url(); ?>style/template.css" rel="stylesheet" type="text/css" />  
        <?php $this->lang->load('form');?>  
        <?php $this->lang->load('ads');?>  
             
    </head>

    <body>
    
<div align="center">
<div id="main-wrapper">
	<div id="header-wrap"> <!-- start header -->
    	<div id="header">
             <div id="logo-area"></div>
             <div id="login-area">
             <?php if($this->session->userdata('username')){  ?>
                <?= form_open(base_url() . $this->lang->lang() . '/user/logout');?>
               <table width="200" border="0" style="position:relative; left:115px; top:18px;">
               <tr>
               <td width="100"> HI <?php echo $this->session->userdata('username'); ?></td>
               
               <td><input type="submit" name="logout"  value="<?= lang('form.logout')?>" style="background:url(<?=base_url()?>images/search.png); background-repeat:no-repeat; width:72px; height:22px; border:hidden; color:#990000;"/></td>
               
               </tr>
               
               
               </table>
               
               </form>
			 <?php } 
			 
			 else{  ?>
			 
			  <?= form_open(base_url() . $this->lang->lang() . '/user/login');?>
			 
                   
                   
                 <table width="373px" border="0">
                 <tr>
                 <td> <span class="login"><?= lang('form.username')?></span><br /></td>
                 <td> <span class="login"><?= lang('form.password')?></span><br /></td>
                 <td></td>
                 </tr>
               <tr><td>
                
                 <input  name="username" id="username" type="text" class="input-text" width="150px" style="width:150px;"/></td>
                 <td>
                 
                 <input  name="password" id="password" type="password" class="input-text" width="150px" style="width:150px;"/></td>
                 <td>
                 <input type="submit" name="is_submit"  value="<?= lang('form.login')?>" style="background:url(<?=base_url()?>images/search.png); color:#FFFFFF; background-repeat:no-repeat; width:72px; height:21px; border:hidden; font-size:12px; padding-bottom:5px" />
                 <!--<a href="#" class="button-link"><div style="background:url(<?=base_url()?>images/search.png); background-repeat:no-repeat; width:72px; height:23px; padding-top:2.5px; float:right;" align="center";><span class="button-font">Login</span></div></a> --><br />
                 </td>
                 </tr>
                 <tr><td>
                 <input type="checkbox" id="remember"/><span id="remember"><?= lang('form.remember')?></span>
                 </td>
                 <td>
                 
                 
                 
                 <a href="#" id="forgot"> <?= lang('form.forgot')?></a><br/></td>
                 <td></td>
                 <tr><td></td>
                 <td>
                 <a href="<?=base_url()?><?= $this->lang->lang() ?>/user/register" id="newuser"> <?= lang('form.newuser')?> </a>
                 </td>
                 <td></td>
                 </tr>
                
                 </table>
                 </form>
                 <?php } ?>
             </div>
         </div>
    </div><!-- Ends header -->
    <!-- BEGIN: MAIN NAVIGATION -->
<div id="ot-mainnavwrap">
	<div id="ot-navtext">
    <p>
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy<br/> text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It 
    
    </p>
    </div>
	<div id="ot-mainnav" class="clearfix">
   
	
	</div>
</div>
<div id="ot-menu">
    <div id="menu-area">
   	<ul class="ads-menu">
         <li><a href="<?=base_url()?><?= $this->lang->lang()?>/home" style="padding-bottom:4px;"><?=lang('menu.home')?></a></li>
        <li><a href="<?=base_url()?><?= $this->lang->lang()?>/user/registerform" style="padding-bottom:4px;">Register</a></li>
        <li><a href="<?=base_url()?><?= $this->lang->lang()?>/aboutus" style="padding-bottom:4px;">Workflow</a></li>
        <li><a href="<?=base_url()?><?= $this->lang->lang()?>/contactus" style="padding-bottom:4px;">Contact Us</a></li>
	</ul>
    </div>
    <div id="lang-area">
     <div id="flag-area">          
   <span style=" color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;"> Select Your Language- </span>
   <div id="lang-flag" class="lang-flag" style=" width:33px; height:18px; position:relative; top:-14px; left:90px;"><a href="<?=base_url() . $this->lang->switch_uri('en')?>"><img src="<?=base_url()?>images/flag1.png" border="0" /></a></div>
    <div id="lang-flag" class="lang-flag" style="width:33px; height:18px; position:relative; top:-32px; left:125px;"><a href="<?=base_url() . $this->lang->switch_uri('en')?>"><img src="<?=base_url()?>images/flag2.png" border="0" /></a></div>
    <div id="lang-flag" class="lang-flag" style="width:33px; height:18px; position:relative; top:-50px;  left:160px;"><a href="<?=base_url() . $this->lang->switch_uri('en')?>"><img src="<?=base_url()?>images/flag3.png" border="0" /></a></div>
     <div id="lang-flag" class="lang-flag" style="width:33px; height:18px; position:relative; top:-68px; left:196px;"><a href="<?=base_url() . $this->lang->switch_uri('fr')?>"><img src="<?=base_url()?>images/flag4.png" border="0" /></a></div>
   </div>
    </div>
</div>

<!-- END: MAIN NAVIGATION -->