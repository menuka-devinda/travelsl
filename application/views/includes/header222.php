<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="oldtimers,stolencars,netherland stolen cars, oldtimerslost, lost cars. stolen cars, netherland oldtimers, lost oldtimers,Security vintage, vintage car, vintage cars, security, immobilizer, immobilizer, immobilizer, alarms, track and trace, level transmitter, level transmitters,
              tracking, tracking, vehicle tracking, vehicle tracking, pac,Oldtimer Nederland, Uw oldtimer site | klassieker, klassiekers, classics, classic car, oldtimers, oldtimer, classic, oldtimerverzekering, klassiekerverzekering, verzekering, vraag, aanbod, tweedehands, adverteren, advertentie,  oude,
              ratis, restaurateur, revisie, motorrevisie, motor, auto, " />
		<meta name="description" content="OldtimersLost.com is an international database with the aim to 
                      reduce thefts of oldtimers. This database is linked with an alert system so (currently) 
                      over 3,000 people will immediately get a email or SMS alert after a registered vehicle is reported as stolen." />
        <meta name="robots" content="index, follow" />

<META NAME="GOOGLEBOT" CONTENT="INDEX, FOLLOW">
    <script type="text/javascript">
window.___gcfg = {lang: 'en'};
(function() 
{var po = document.createElement("script");
po.type = "text/javascript"; po.async = true;po.src = "https://apis.google.com/js/plusone.js";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(po, s);
})();</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30013486-1']);
  _gaq.push(['_setDomainName', 'oldtimerslost.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

        
        <title><?php if(isset($title)){
		                  echo $title;
				   }else{
				   
				   echo $title='Oldtimerslost.com ';
				   }   
				?>
	    </title>
        <link href="<?php echo base_url(); ?>style/template.css" rel="stylesheet" type="text/css" /> 
         <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style/css/jquery.lightbox-0.5.css" media="screen" />
        <script type="text/javascript" src="<?php echo base_url(); ?>js/otl_validation.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/js/jquery.lightbox-0.5.js"></script>
		 <link rel="stylesheet" href="<?php echo base_url(); ?>style/layout2.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url(); ?>style/css/thickbox.css" type="text/css" media="screen" />
        <script type="text/javascript" src="<?php echo base_url(); ?>js/js/thickbox.js"></script>
 
 
 <script type="text/javascript" src="<?= base_url() ?>js/query.js"></script>

 
 
    <script type="text/javascript">
    $(function() {
       $('#gallery1 a').lightBox();
		 $('#gallery2 a').lightBox();
		  $('#gallery3 a').lightBox();
    });
    </script>
    
    
        <?php $this->lang->load('form');?>  
        <?php $this->lang->load('ads');?>  
  
        <?php $this->lang->load('menu');?>   
        <?php $this->lang->load('upperBanner');?> 
     <?php $this->lang->load('lowerBanner');?> 
 <?php $this->lang->load('proceedure');?> 
        <?php $this->load->helper('url'); ?>  
       

 <script type="text/javascript">
				
				var tooltip=function(){
 var id = 'tt';
 var top = 3;
 var left = 3;
 var maxw = 300;
 var speed = 10;
 var timer = 20;
 var endalpha = 95;
 var alpha = 0;
 var tt,t,c,b,h;
 var ie = document.all ? true : false;
 return{
  show:function(v,w){
   if(tt == null){
    tt = document.createElement('div');
    tt.setAttribute('id',id);
    t = document.createElement('div');
    t.setAttribute('id',id + 'top');
    c = document.createElement('div');
    c.setAttribute('id',id + 'cont');
    b = document.createElement('div');
    b.setAttribute('id',id + 'bot');
    tt.appendChild(t);
    tt.appendChild(c);
    tt.appendChild(b);
    document.body.appendChild(tt);
    tt.style.opacity = 0;
    tt.style.filter = 'alpha(opacity=0)';
    document.onmousemove = this.pos;
   }
   tt.style.display = 'block';
   c.innerHTML = v;
   tt.style.width = w ? w + 'px' : 'auto';
   if(!w && ie){
    t.style.display = 'none';
    b.style.display = 'none';
    tt.style.width = tt.offsetWidth;
    t.style.display = 'block';
    b.style.display = 'block';
   }
  if(tt.offsetWidth > maxw){tt.style.width = maxw + 'px'}
  h = parseInt(tt.offsetHeight) + top;
  clearInterval(tt.timer);
  tt.timer = setInterval(function(){tooltip.fade(1)},timer);
  },
  pos:function(e){
   var u = ie ? event.clientY + document.documentElement.scrollTop : e.pageY;
   var l = ie ? event.clientX + document.documentElement.scrollLeft : e.pageX;
   tt.style.top = (u - h) + 'px';
   tt.style.left = (l + left) + 'px';
  },
  fade:function(d){
   var a = alpha;
   if((a != endalpha && d == 1) || (a != 0 && d == -1)){
    var i = speed;
   if(endalpha - a < speed && d == 1){
    i = endalpha - a;
   }else if(alpha < speed && d == -1){
     i = a;
   }
   alpha = a + (i * d);
   tt.style.opacity = alpha * .01;
   tt.style.filter = 'alpha(opacity=' + alpha + ')';
  }else{
    clearInterval(tt.timer);
     if(d == -1){tt.style.display = 'none'}
  }
 },
 hide:function(){
  clearInterval(tt.timer);
   tt.timer = setInterval(function(){tooltip.fade(-1)},timer);
  }
 };
}();
	
</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId;=224388380919592";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<?php $this->lang->load('form');?>  
        <?php $this->lang->load('ads');?>  
        <?php $this->lang->load('form');?>  
        <?php $this->lang->load('menu');?>          
        <?php $this->load->helper('url'); ?>  		
   
      
		
    </head>
    <body>
<div align="center">
	<div id="header-wrap"> <!-- start header -->
    	<div id="header">
             <div id="logo-area"></div>
             <div id="login-area">
             <?php if($this->session->userdata('username')){  ?>
               
	      <table width="373px" border="0">
               <tr>
                 <td> <span class="login">
                         
                      </span>
                     <br />
                 </td>
                 <td> 
                    <a style="color:red;" href="<?php echo base_url()?><?php $this->lang->lang() ?>user/changeDetails">
                       <?= lang('login.Settings')?>
                     </a>  
                         
                     <br />
                 </td>
                 <td> <?php  $is_logged_in = $this->session->userdata('is_logged_in');
                             $user_level = $this->session->userdata('user_level');
                               if ($is_logged_in && $user_level == 1)
                               {
                                   ?>
                     <a style="color:red;" href="<?php echo base_url()?><?php $this->lang->lang() ?>admin/viewAllAdds" target="_blank">
                      Control panel  
                     </a>
                             <?php  }  ?>  </td>
               </tr>
			   
               <tr>
		 <td>
                     <span><?= lang('login.welcomemsg')?> </span>
		 </td>
                 
		 <td>
                      <span>  <?php echo $this->session->userdata('username'); ?>! </span>
		 </td>
				 
                 <td>
                      <?= form_open(base_url() . $this->lang->lang() . '/user/logout');?>
                       <input type="submit" name="logout"  value="<?=lang('form.logout')?>" style="background:url(<?php echo base_url()?>images/search.png); background-repeat:no-repeat; vertical-align:middle; width:75px; height:21px; border:hidden; color:#ffffff; font-size:12px; padding-bottom:5px;"/>
                 </td>
                      </form>
           
                 <br>
               </tr>
                  
                 <tr>
                     <td></td>
                     <td></td>
                    <td></td>
                 </tr>
                 <tr> 
                    <td></td>
                    <td></td>
                    <td></td>
                 </tr>
                    
                    
     </table>

			   <?php } 			 
			 else{  ?>
			 
			  <?php echo form_open(base_url() . $this->lang->lang() . '/user/login');?>
			 
                   
                   
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
                 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name() ?>" value="<?php echo $this->security->get_csrf_hash() ?>" />
                 <input type="hidden" name="is_submit" value="1" />
                 <input type="submit" name="submit" onclick="return validate_loginInputs()"  value="<?= lang('form.login')?>" style="background:url(<?php echo base_url()?>images/search.png); color:#FFFFFF; background-repeat:no-repeat; width:72px; height:21px; border:hidden; font-size:12px; padding-bottom:5px;"  />
                 <br />
                 </td>
                 </tr>
                 <tr><td>
                 <input type="checkbox" id="remember" name="remember"/><span id="remember"><?= lang('form.remember')?></span>
                 </td>
                 <td>
                 
                 
                 
                 <a href="<?= base_url()?><?= $this->lang->lang() ?>/user/forgot_password" id="forgot"> <?= lang('form.forgot')?></a><br/></td>
                 <td></td>
                 <tr><td></td>
                 <td>
                 <a href="<?= base_url()?><?= $this->lang->lang() ?>/user/register" id="newuser"><?= lang('form.newuser')?> </a>
                 </td>
                 <td></td>
                 </tr>
                 </table>
                 </form>
                 <?php } ?>
		          <div id="social_media" style="width:390px;">
				  
                        
						 <div id="topSocial">
							<ul>                  
							<li><a class="twitter tip" href="http://twitter.com/oldtimerslost" target="_blank" title="Follow Us on Twitter!"></a></li>
							<li><a class="facebook" href="http://www.facebook.com/pages/Oldtimerslostcom/194929117258377" target="_blank" title="Join Us on Facebook!"></a></li>

							</ul>
						</div>	 
				                   
                           </div>
             </div>
         </div>
           
    </div><!-- Ends header -->
    <!-- BEGIN: MAIN NAVIGATION -->
 <div id="main-wrapper" style="overflow: auto; ">   
<div id="ot-mainnavwrap">
	<div id="ot-navtext" style="position:relative; top:-30px;">
    <p>
    <?= lang('bannerdisc')?>
    
    </p>
    </div>
	<div id="ot-mainnav" class="clearfix">
   
	
	</div>
</div>
<div id="ot-menu">
    <div id="menu-area">
   	<ul class="ads-menu">
        <li><a href="<?=base_url()?><?= $this->lang->lang()?>/home" style="padding-bottom:4px;"><?= lang('menu.home')?></a></li>
        <li><a href="<?=base_url()?><?= $this->lang->lang()?>/user/register" style="padding-bottom:4px;"><?= lang('menu.register')?></a></li>
        <li><a href="<?=base_url()?><?= $this->lang->lang()?>/aboutus" style="padding-bottom:4px;"><?= lang('menu.workflow')?></a></li>
        <li><a href="<?=base_url()?><?= $this->lang->lang()?>/contactus" style="padding-bottom:4px;"><?= lang('menu.contact')?></a></li>
         <?php if($this->session->userdata('user_id')){ ?>
        <li><a href="<?=base_url()?><?= $this->lang->lang()?>/advertisment/myoldtimers" style="padding-bottom:4px;"><?= lang('menu.myotl')?></a></li>
        <?php  } ?>
        
        
	</ul>
    </div>
    <div id="lang-area">
     <div id="flag-area">          
   <span style=" color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;"> Select Your Language- </span>
   <div id="lang-flag" class="lang-flag" style=" width:33px; height:18px; position:relative; top:-14px; left:90px;"><a href="<?=base_url() . $this->lang->switch_uri('en')?>"><img src="<?=base_url()?>images/flag1.png" border="0" /></a></div>
    <div id="lang-flag" class="lang-flag" style="width:33px; height:18px; position:relative; top:-32px; left:128px;"><a href="<?=base_url() . $this->lang->switch_uri('de')?>"><img src="<?=base_url()?>images/flag2.png" border="0" /></a></div>
    <div id="lang-flag" class="lang-flag" style="width:33px; height:18px; position:relative; top:-50px;  left:166px;"><a href="<?=base_url() . $this->lang->switch_uri('nl')?>"><img src="<?=base_url()?>images/flag3.png" border="0" /></a></div>
     <div id="lang-flag" class="lang-flag" style="width:33px; height:18px; position:relative; top:-68px; left:204px;"><a href="<?=base_url() . $this->lang->switch_uri('fr')?>"><img src="<?=base_url()?>images/flag4.png" border="0" /></a></div>
   </div>
    </div>
</div>

<!-- END: MAIN NAVIGATION -->