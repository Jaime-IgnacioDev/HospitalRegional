<?php
/* Smarty version 5.4.1, created on 2024-10-17 21:40:57
  from 'file:ajax.chat.conversation.messages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67118469789504_54976647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fb4b3770c4f1bf6e4268583fb4a86da5a03cceb' => 
    array (
      0 => 'ajax.chat.conversation.messages.tpl',
      1 => 1728989694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ajax.chat.messages.tpl' => 1,
  ),
))) {
function content_67118469789504_54976647 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/proyectotest/content/themes/default/templates';
if ($_smarty_tpl->getValue('conversation')['total_messages'] >= $_smarty_tpl->getValue('system')['max_results']) {?>
  <!-- see-more -->
  <div class="alert alert-chat see-more small js_see-more" data-id=<?php echo $_smarty_tpl->getValue('conversation')['conversation_id'];?>
 data-get="messages">
    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Loading Older Messages");?>
</span>
    <div class="loader loader_small x-hidden"></div>
  </div>
  <!-- see-more -->
<?php }?>

<ul>
  <?php $_smarty_tpl->renderSubTemplate('file:ajax.chat.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('messages'=>$_smarty_tpl->getValue('conversation')['messages']), (int) 0, $_smarty_current_dir);
?>
</ul><?php }
}
