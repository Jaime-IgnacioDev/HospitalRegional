<?php
/* Smarty version 5.4.1, created on 2024-10-15 22:57:01
  from 'file:emails/activation_email.txt' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_670ef33dcbf781_87435039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba5da5f1ab0823cfcb7a6b40affbb7117fed1d46' => 
    array (
      0 => 'emails/activation_email.txt',
      1 => 1728989694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_670ef33dcbf781_87435039 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/proyectotest/content/themes/default/templates/emails';
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hi");?>
 <?php echo $_smarty_tpl->getValue('name');?>
,

<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("To complete the activation process, please follow this link");?>
:
<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/activation/<?php echo $_smarty_tpl->getValue('email_verification_code');?>


<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Activiation Code");?>
: <?php echo $_smarty_tpl->getValue('email_verification_code');?>


<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Welcome to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>


<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Team");
}
}
