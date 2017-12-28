<?php
/* Smarty version 3.1.30, created on 2017-12-24 01:07:58
  from "/var/www/html/zendshop/tpl/tpl/company-add-product-attribute.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ed3be1efe95_40127895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95df25db6b58415f2314caeee00d4b9fc8f4af56' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/company-add-product-attribute.tpl',
      1 => 1514065956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3ed3be1efe95_40127895 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group">
    <label for="attrid"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</label>
    <input type="text" id="attrid" name="attr_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="form-control">
</div>
<?php }
}
