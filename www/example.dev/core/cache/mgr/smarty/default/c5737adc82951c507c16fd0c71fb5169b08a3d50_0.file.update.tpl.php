<?php /* Smarty version 3.1.27, created on 2017-12-27 14:42:18
         compiled from "/var/www/example.dev/manager/templates/default/element/plugin/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:862546165a43b14a8680a6_97174907%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5737adc82951c507c16fd0c71fb5169b08a3d50' => 
    array (
      0 => '/var/www/example.dev/manager/templates/default/element/plugin/update.tpl',
      1 => 1514271075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '862546165a43b14a8680a6_97174907',
  'variables' => 
  array (
    'onPluginFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a43b14a88c971_03614450',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a43b14a88c971_03614450')) {
function content_5a43b14a88c971_03614450 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '862546165a43b14a8680a6_97174907';
?>
<div id="modx-panel-plugin-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onPluginFormPrerender']->value;

}
}
?>