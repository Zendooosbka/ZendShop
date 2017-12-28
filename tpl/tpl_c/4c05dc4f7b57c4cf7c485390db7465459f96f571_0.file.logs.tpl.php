<?php
/* Smarty version 3.1.30, created on 2017-12-28 07:56:45
  from "/var/www/html/zendshop/tpl/tpl/logs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a44798d95dae5_69196771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c05dc4f7b57c4cf7c485390db7465459f96f571' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/logs.tpl',
      1 => 1514437004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a44798d95dae5_69196771 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default">
    <div class="panel-footer">
        <h5>Таблица логов</h5>
    </div>
    <div class="panel-body">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Дата лога</th>
                <th>Описание</th>
            </tr>
            </thead>
            <tbody>
            <?php echo $_smarty_tpl->tpl_vars['logstable']->value;?>

            </tbody>
        </table>
    </div>
</div><?php }
}
