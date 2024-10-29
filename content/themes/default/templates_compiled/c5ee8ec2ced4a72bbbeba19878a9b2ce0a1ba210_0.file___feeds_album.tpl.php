<?php
/* Smarty version 5.4.1, created on 2024-10-29 07:30:47
  from 'file:__feeds_album.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67208f27013998_04064445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5ee8ec2ced4a72bbbeba19878a9b2ce0a1ba210' => 
    array (
      0 => '__feeds_album.tpl',
      1 => 1728989694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67208f27013998_04064445 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/proyectotest/content/themes/default/templates';
?><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="album-card">
    <?php if ($_smarty_tpl->getValue('album')['cover']['blur']) {?><div class="x-blured"><?php }?>
      <a class="album-cover" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('album')['path'];?>
/album/<?php echo $_smarty_tpl->getValue('album')['album_id'];?>
" style="background-image:url(<?php echo $_smarty_tpl->getValue('album')['cover']['source'];?>
);">
      </a>
      <?php if ($_smarty_tpl->getValue('album')['cover']['blur']) {?>
    </div><?php }?>
    <div class="album-details">
      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('album')['path'];?>
/album/<?php echo $_smarty_tpl->getValue('album')['album_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('album')['title']);?>
</a>
      <div>
        <?php echo $_smarty_tpl->getValue('album')['photos_count'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("photos");?>

        <div class="float-end">
          <?php if ($_smarty_tpl->getValue('album')['privacy'] == "me") {?>
            <i class="fa fa-lock" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with");?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Only Me");?>
'></i>
          <?php } elseif ($_smarty_tpl->getValue('album')['privacy'] == "friends") {?>
            <i class="fa fa-users" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with");?>
: <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>'></i>
          <?php } elseif ($_smarty_tpl->getValue('album')['privacy'] == "public") {?>
            <i class="fa fa-globe" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with");?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public");?>
'></i>
          <?php } elseif ($_smarty_tpl->getValue('album')['privacy'] == "custom") {?>
            <i class="fa fa-cog" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Custom People");?>
'></i>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</div><?php }
}
