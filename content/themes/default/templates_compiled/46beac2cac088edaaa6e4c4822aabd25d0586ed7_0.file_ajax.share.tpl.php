<?php
/* Smarty version 5.4.1, created on 2024-10-17 21:42:15
  from 'file:ajax.share.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671184b730c413_04687749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46beac2cac088edaaa6e4c4822aabd25d0586ed7' => 
    array (
      0 => 'ajax.share.tpl',
      1 => 1728989694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:__social_share.tpl' => 1,
  ),
))) {
function content_671184b730c413_04687749 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/proyectotest/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"share",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Share");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">

  <div style="margin: 25px auto;">
    <div class="input-group">
      <input type="text" disabled class="form-control" value="<?php echo $_smarty_tpl->getValue('share_link');?>
">
      <button type="button" class="btn btn-light js_clipboard" data-clipboard-text="<?php echo $_smarty_tpl->getValue('share_link');?>
" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Copy");?>
'>
        <i class="fas fa-copy"></i>
      </button>
    </div>
  </div>

  <?php if ($_smarty_tpl->getValue('system')['social_share_enabled']) {?>
    <div class="post-social-share border-bottom-0">
      <?php $_smarty_tpl->renderSubTemplate('file:__social_share.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_link'=>$_smarty_tpl->getValue('share_link')), (int) 0, $_smarty_current_dir);
?>
    </div>
  <?php }?>

</div><?php }
}
