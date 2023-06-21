<?php
/* Smarty version 4.3.1, created on 2023-06-21 01:45:53
  from 'app:installupgrade.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64925651bc7359_40724680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f93a2ca2f8c951f060630ff114f85fb48da6b71b' => 
    array (
      0 => 'app:installupgrade.tpl',
      1 => 1686940611,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:common/formErrors.tpl' => 1,
  ),
),false)) {
function content_64925651bc7359_40724680 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128672324964925651bb8b17_49653851', "page");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_128672324964925651bb8b17_49653851 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_128672324964925651bb8b17_49653851',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h1 class="app__pageHeading">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.upgradeApplication"),$_smarty_tpl ) );?>

	</h1>

	<div class="app__contentPanel">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.upgradeInstructions",'version'=>$_smarty_tpl->tpl_vars['version']->value->getVersionString(false),'baseUrl'=>$_smarty_tpl->tpl_vars['baseUrl']->value),$_smarty_tpl ) );?>


		<form class="pkp_form" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"installUpgrade"),$_smarty_tpl ) );?>
">
			<?php $_smarty_tpl->_subTemplateRender("app:common/formErrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<?php if ($_smarty_tpl->tpl_vars['isInstallError']->value) {?>
				<p>
					<span class="pkp_form_error"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.installErrorsOccurred"),$_smarty_tpl ) );?>
:</span>
					<ul class="pkp_form_error_list">
						<li><?php if ($_smarty_tpl->tpl_vars['dbErrorMsg']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.error.databaseError",'error'=>$_smarty_tpl->tpl_vars['dbErrorMsg']->value),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['errorMsg']->value),$_smarty_tpl ) );
}?></li>
					</ul>
				</p>
			<?php }?>

			<div class="formButtons">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"submit",'id'=>"installButton",'label'=>"installer.upgradeApplication"),$_smarty_tpl ) );?>

			</div>

		</form>
	</div>
<?php
}
}
/* {/block "page"} */
}
