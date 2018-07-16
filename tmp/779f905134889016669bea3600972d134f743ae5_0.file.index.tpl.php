<?php
/* Smarty version 3.1.32, created on 2018-07-16 20:34:09
  from '/opt/lampp/htdocs/smarty-test/views/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b4ce5214c6be9_43356667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '779f905134889016669bea3600972d134f743ae5' => 
    array (
      0 => '/opt/lampp/htdocs/smarty-test/views/index.tpl',
      1 => 1531766045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4ce5214c6be9_43356667 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php }
}
