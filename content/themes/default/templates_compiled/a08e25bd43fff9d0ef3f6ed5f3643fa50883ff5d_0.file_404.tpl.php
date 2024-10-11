<?php
/* Smarty version 5.4.1, created on 2024-10-09 01:55:53
  from 'file:404.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6705e2a90f2ba8_96738654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a08e25bd43fff9d0ef3f6ed5f3643fa50883ff5d' => 
    array (
      0 => '404.tpl',
      1 => 1685451980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_6705e2a90f2ba8_96738654 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\HospitalRegional\\content\\themes\\default\\templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mt20 sg-offcanvas">
  <div class="row">

    <!-- side panel -->
    <div class="col-12 d-block d-sm-none sg-offcanvas-sidebar">
      <?php $_smarty_tpl->renderSubTemplate('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-12 sg-offcanvas-mainbar">
      <div class="notfound-wrapper">
        <div class="notfound">
          <div class="notfound-circle">
            <i class="far fa-frown"></i>
          </div>
          <h1>404</h1>
          <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Oops! Page Not Be Found");?>
</h2>
          <p class="mt10"><?php echo $_smarty_tpl->getValue('message');?>
</p>
          <a class="btn btn-primary rounded-pill" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Back to homepage");?>
</a>
        </div>
      </div>
    </div>
    <!-- content panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}