<?php
/* Smarty version 3.1.32, created on 2018-07-22 11:18:29
  from '/opt/lampp/htdocs/smarty-test/views/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b544be5cd24d7_29121392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '779f905134889016669bea3600972d134f743ae5' => 
    array (
      0 => '/opt/lampp/htdocs/smarty-test/views/index.tpl',
      1 => 1532251107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b544be5cd24d7_29121392 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/smarty-test/smarty-3.1.32/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'/opt/lampp/htdocs/smarty-test/smarty-3.1.32/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>Hello

<br/>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
	<?php echo $_smarty_tpl->tpl_vars['p']->value;?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myArray']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
?>
    <li><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myColors']->value, 'color');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
?>
    <li><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<!-- PEOPLE array with key and value-->
<h2>People array with key and value </h2>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myPeople']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_3_saved = $_smarty_tpl->tpl_vars['value'];
?>
   <li><?php echo $_smarty_tpl->tpl_vars['value']->key;?>
: <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_3_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<!-- ANOTHER WAY HOW TO LOOP THROUGH AN ARRAY !!!!!!!!!
	also you can loop like this:
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myPeople']->value, 'value', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
$__foreach_value_4_saved = $_smarty_tpl->tpl_vars['value'];
?>
		<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 = <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
 <br/>
	<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_4_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
-->



<pre>
User Information:

Name: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

Address: <?php echo $_smarty_tpl->tpl_vars['address']->value;?>


</pre>

<h3>Alternation of the assign content</h3>
<pre>
Name: <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>

Addr: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value, ENT_QUOTES, 'UTF-8', true);?>

Date: <?php echo smarty_modifier_date_format(time(),"%A %D, %Y");?>

Month: <?php echo smarty_modifier_date_format(time(),"%c");?>


<?php echo smarty_modifier_date_format(time(),"%d.%m.%Y");?>


</pre>

<?php }
}
