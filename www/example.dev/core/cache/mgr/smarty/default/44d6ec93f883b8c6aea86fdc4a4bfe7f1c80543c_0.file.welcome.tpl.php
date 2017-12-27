<?php /* Smarty version 3.1.27, created on 2017-12-27 14:42:13
         compiled from "/var/www/example.dev/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5793413545a43b1457d3e31_17568494%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44d6ec93f883b8c6aea86fdc4a4bfe7f1c80543c' => 
    array (
      0 => '/var/www/example.dev/manager/templates/default/welcome.tpl',
      1 => 1514271075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5793413545a43b1457d3e31_17568494',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a43b1457d5060_64547047',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a43b1457d5060_64547047')) {
function content_5a43b1457d5060_64547047 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5793413545a43b1457d3e31_17568494';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>