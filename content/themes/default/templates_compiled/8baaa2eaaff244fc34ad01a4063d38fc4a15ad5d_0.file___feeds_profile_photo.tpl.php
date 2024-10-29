<?php
/* Smarty version 5.4.1, created on 2024-10-22 00:36:09
  from 'file:__feeds_profile_photo.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6716f379c4c626_66114661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8baaa2eaaff244fc34ad01a4063d38fc4a15ad5d' => 
    array (
      0 => '__feeds_profile_photo.tpl',
      1 => 1728989694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6716f379c4c626_66114661 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/proyectotest/content/themes/default/templates';
?><div class="col-4 mb10">
  <div class="pg_photo pointer <?php if ($_smarty_tpl->getValue('_filter') == "avatar") {?>js_profile-picture-change<?php } else { ?>js_profile-cover-change<?php }?>" data-id=<?php echo $_smarty_tpl->getValue('id');?>
 data-type=<?php echo $_smarty_tpl->getValue('type');?>
 data-image="<?php echo $_smarty_tpl->getValue('photo')['source'];?>
" style="background-image:url(<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('photo')['source'];?>
);">
  </div>
</div><?php }
}
