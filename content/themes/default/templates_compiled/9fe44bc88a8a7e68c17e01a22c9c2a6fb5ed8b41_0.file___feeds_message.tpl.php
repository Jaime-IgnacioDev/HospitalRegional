<?php
/* Smarty version 5.4.1, created on 2024-10-17 21:40:57
  from 'file:__feeds_message.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671184697969f4_57442302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fe44bc88a8a7e68c17e01a22c9c2a6fb5ed8b41' => 
    array (
      0 => '__feeds_message.tpl',
      1 => 1728989694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_671184697969f4_57442302 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/proyectotest/content/themes/default/templates';
?><li>
  <div class="conversation clearfix <?php if ($_smarty_tpl->getValue('message')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id']) {?>right<?php }?>" id="<?php echo $_smarty_tpl->getValue('message')['message_id'];?>
">
    <?php if ($_smarty_tpl->getValue('message')['user_id'] != $_smarty_tpl->getValue('user')->_data['user_id']) {?>
      <div class="conversation-user">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('message')['user_name'];?>
">
          <img src="<?php echo $_smarty_tpl->getValue('message')['user_picture'];?>
" alt="">
        </a>
      </div>
    <?php }?>
    <div class="conversation-body">
      <!-- message text -->
      <div class="text <?php if ($_smarty_tpl->getValue('message')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id']) {?>js_chat-color-me<?php }?>">
        <?php echo $_smarty_tpl->getValue('message')['message'];?>

        <?php if ($_smarty_tpl->getValue('message')['image']) {?>
          <span class="text-link js_lightbox-nodata <?php if ($_smarty_tpl->getValue('message')['message'] != '') {?>mt5<?php }?>" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('message')['image'];?>
">
            <img alt="" class="img-fluid" src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('message')['image'];?>
">
          </span>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('message')['voice_note']) {?>
          <audio class="js_audio" id="audio-<?php echo $_smarty_tpl->getValue('message')['message_id'];?>
" controls preload="auto" style="width: 100%; min-width: 120px;">
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('message')['voice_note'];?>
" type="audio/mpeg">
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('message')['voice_note'];?>
" type="audio/mp3">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your browser does not support HTML5 audio");?>

          </audio>
        <?php }?>
      </div>
      <!-- message text -->

      <!-- message time -->
      <div class="time js_moment" data-time="<?php echo $_smarty_tpl->getValue('message')['time'];?>
">
        <?php echo $_smarty_tpl->getValue('message')['time'];?>

      </div>
      <!-- message time -->

      <!-- seen status -->
      <?php if ($_smarty_tpl->getValue('last_seen_message_id') == $_smarty_tpl->getValue('message')['message_id']) {?>
        <div class="seen">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Seen by");?>
 <?php echo $_smarty_tpl->getValue('conversation')['seen_name_list'];?>

        </div>
      <?php }?>
      <!-- seen status -->
    </div>
  </div>
</li><?php }
}
