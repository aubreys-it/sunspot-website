<?php /* Smarty version 2.6.13, created on 2012-04-23 07:25:40
         compiled from admin/mailings/mailing_status.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'admin/mailings/mailing_status.tpl', 7, false),)), $this); ?>
<?php ob_start(); ?><link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['theme']['shared']; ?>
css/default.mailings.css" />
<?php $this->_smarty_vars['capture']['head'] = ob_get_contents(); ob_end_clean();  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/admin.header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><img src="<?php echo $this->_tpl_vars['url']['theme']['shared']; ?>
images/icons/alert.png" class="navimage right" alt="thunderbolt icon" />
<?php $this->_tag_stack[] = array('t', array('escape' => false,'1' => "<a href='".($this->_tpl_vars['url']['base'])."admin/setup/setup_configure.php#mailings'>",'2' => '</a>')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Mailings take place in the background so feel free to close this page, visit other sites, or even turn off your computer. You can always return to this status page by visiting the Mailings section.  %1Throttle settings%2 can also be adjusted -- although you must pause and revive the mailing before changes take effect.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>

<div><?php $this->_tag_stack[] = array('t', array('1' => $this->_tpl_vars['mailing']['tally'])); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Sending message to %1 subscribers.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>

<div class="warn">
<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Mailing Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &raquo; <span id="status"></span>
</div>

<div id="commands">

	<div class="error uniq" id="init"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Initializing...<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>

	<div class="hidden uniq" id="started">
		<div class="first"><a class="cmd" href="#stop"><img src="<?php echo $this->_tpl_vars['url']['theme']['shared']; ?>
images/icons/pause-small.png" alt=" icon" /><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Pause Mailing<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></div>
		<div class="second"><a class="cmd" href="#restart"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Resume Mailing<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <img src="<?php echo $this->_tpl_vars['url']['theme']['shared']; ?>
images/icons/restart-small.png" alt="icon" /></a></div>
	</div>
	
	<div class="hidden uniq" id="stopped">
		<div class="first"><a class="cmd" href="#restart"><img src="<?php echo $this->_tpl_vars['url']['theme']['shared']; ?>
images/icons/restart-small.png" alt="icon" /> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Resume Mailing<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></div>
		<div class="second"><a class="cmd" href="#cancel"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Cancel Mailing<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>	<img src="<?php echo $this->_tpl_vars['url']['theme']['shared']; ?>
images/icons/stopped-small.png" alt="icon" /></a></div>
	</div>
	
	<div class="hidden uniq" id="frozen">
		<div class="first"><a class="cmd" href="#restart"><img src="<?php echo $this->_tpl_vars['url']['theme']['shared']; ?>
images/icons/restart-small.png" alt="icon" /><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Resume Mailing<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></div>
		<div class="second"><a class="cmd" href="#cancel"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Cancel Mailing<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>	<img src="<?php echo $this->_tpl_vars['url']['theme']['shared']; ?>
images/icons/stopped-small.png" alt="icon" /></a></div>
	</div>
	
		<div id="finished" class="hidden error uniq">
		<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Mailing Finished<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> -- <a href="admin_mailings.php"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Return to<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Mailings Page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
	</div>
	
		<div id="pause" class="hidden error uniq">
		<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Command Recieved. Please wait...<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</div>
	
</div>


<div id="barHead">
<?php $this->_tag_stack[] = array('t', array('escape' => 'no','1' => '<span id="sent">0</span>')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>%1 mails sent<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<img class="anim go" src="<?php echo $this->_tpl_vars['url']['theme']['shared']; ?>
images/loader.gif" alt="Processing" />
<img class="anim hidden stop" src="<?php echo $this->_tpl_vars['url']['theme']['shared']; ?>
images/icons/stopped-small.png" alt="Stopped" />

</div>

<div id="barBox">
	<div id="barTrack">
		<div id="bar"></div>
	</div>
</div>

<div id="barFoot"></div>

<form>
<fieldset>
<legend><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Last 50 notices<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>

<ul class="inpage_menu">
<li><a href="ajax/status_download.php?type=sent"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Sent Emails<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
<li><a href="ajax/status_download.php?type=unsent"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Unsent Emails<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
<li><a href="ajax/status_download.php?type=error"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Failed Emails<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
</ul>

<div id="notices"></div>

</fieldset>
</form>


<?php echo '
<script type="text/javascript">

var pommo = {
	status: null,
	poll: function(get){get = get || \'\';  $.getJSON("ajax/status_poll.php?id=';  echo $this->_tpl_vars['mailing']['id'];  echo '&"+get,pommo.process)},
	process: function(mailing) {
		$(\'#status\').html(mailing.statusText);
		
		// status >> 1: Processing  2: Stopped  3: Frozen  4: Finished    5: command Sent	
		$(\'#barHead img.go\').css({display:((mailing.status == 1)?\'inline\':\'none\')});
		$(\'#barHead img.stop\').css({display:((mailing.status == 1)?\'none\':\'inline\')});
		
		$(\'#sent\').html(mailing.sent);
		$(\'#barFoot\').html(mailing.percent+\'%\');
		$(\'#bar\').width(mailing.percent+\'%\');
		
		if (mailing.status != pommo.status) {
			pommo.status = mailing.status;
			var id = null;
			switch(mailing.status) {
				case 1: id = \'started\'; break;
				case 2: id = \'stopped\'; break;
				case 3: id = \'frozen\'; break;
				case 4: id = \'finished\'; break; 
			}
			$(\'#\'+id).show().siblings(\'div.uniq\').hide();
		}
		
		if (typeof(mailing.notices) == \'object\')
			for (i in mailing.notices)
				if (mailing.notices[i] != \'\')
					$(\'#notices\').prepend(\'<li>\'+mailing.notices[i]+\'</li>\');
	
		// TODO --> make a nice XPATH selector out of this...
		if ($(\'#notices li\').size() > 50) {
			$(\'#notices li\').each(function(i){ if (i > 40) $(this).remove(); });
		}		
		
	}
};

// continually ("hearbeat") poll the mailing
$(\'body\').ajaxStop(function(){ 
	if (pommo.status == 1)
		setTimeout(\'pommo.poll()\',4500);
});

$().ready(function(){ 

	// assign command events
	$(\'#commands a.cmd\').click(function() { 
		if(pommo.status != 5) {
			pommo.status = 5;
			$(\'#pause\').show().siblings(\'div.uniq\').hide();
			var cmd = $(this).attr(\'href\').replace(/.*\\#/,\'\');
			$.getJSON(
				\'ajax/status_cmd.php?cmd=\'+cmd,
				function(ret) { setTimeout(\'pommo.poll()\',1500); }
			);
		}
		return false;
	});
	
	// init
	pommo.poll(\'resetNotices=true\'); 
});

</script>
'; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/admin.footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>