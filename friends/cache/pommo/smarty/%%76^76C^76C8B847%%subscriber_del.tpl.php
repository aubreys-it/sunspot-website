<?php /* Smarty version 2.6.13, created on 2013-02-11 06:20:27
         compiled from admin/subscribers/ajax/subscriber_del.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'admin/subscribers/ajax/subscriber_del.tpl', 1, false),)), $this); ?>
<p><?php $this->_tag_stack[] = array('t', array('escape' => 'no')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enter email addresses of subscribers in the box below. Seperate emails with commas, spaces, or line breaks.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>

<form class="json" action="ajax/manage.rpc.php?call=delSubscriber" method="post">

<div class="output alert"></div>

<fieldset>
<legend><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Remove Subscribers<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>

<div>
<label for="emails"><strong class="required"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email Addresses:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong></label>
<textarea name="emails" cols="40" rows="8"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enter Emails...<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></textarea>
</div>

</fieldset>

<div class="buttons">

<input type="submit" value="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Remove Subscribers<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" />

<input type="hidden" name="status" value="<?php echo $this->_tpl_vars['status']; ?>
" />

<input type="reset" value="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Reset<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" />

</div>

</form>

<?php echo '
<script type="text/javascript">
$().ready(function(){

	var box = $(\'textarea[@name=emails]\');
	var orig = box.val();
	
	poMMo.callback.delSubscriber = function(ids) {
		poMMo.grid.delRow(ids);
		box.val("");
	};

	box.focus(function() {
		if ($(this).val() == orig)
			$(this).val("");
	});

	box.blur(function() {
		if($.trim($(this).val()) == \'\')
			$(this).val(orig);
	});
	
	var rows = poMMo.grid.getRowIDs();
	if(rows) {
		var emails = new Array();
		var row = null;
		for (i=0; i<rows.length; i++) {
			row = poMMo.grid.getRow(rows[i]);
			emails.push(row.email);
		}
		box.val(emails.join("\\n"));
	}
});
</script>
'; ?>