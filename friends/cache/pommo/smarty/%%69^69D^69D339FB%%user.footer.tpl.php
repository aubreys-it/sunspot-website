<?php /* Smarty version 2.6.13, created on 2013-02-05 04:57:32
         compiled from inc/user.footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'inc/user.footer.tpl', 8, false),)), $this); ?>
<br class="clear" />

</div>
<!-- end content -->

<div id="footer">

<p>- <?php $this->_tag_stack[] = array('t', array('escape' => 'no','url' => '<a href="http://pommo.sourceforge.net/">poMMo</a>')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Page fueled by %1 mailing management software<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> -</p>

</div>
<!-- end footer -->

</body>
</html>