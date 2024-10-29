<?php
/* Smarty version 5.4.1, created on 2024-10-09 01:49:02
  from 'file:_addresses.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6705e10e533116_07733447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f486ace2ff13946e96668b6db53d8cb04bfc9cb' => 
    array (
      0 => '_addresses.tpl',
      1 => 1688838761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_6705e10e533116_07733447 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\HospitalRegional\\content\\themes\\default\\templates';
?><div class="payment-plans">
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('addresses'), 'address');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('address')->value) {
$foreach0DoElse = false;
?>
    <div class="payment-plan">
      <div class="text-xxlg"><?php echo $_smarty_tpl->getValue('address')['address_title'];?>
</div>
      <div><?php echo $_smarty_tpl->getValue('address')['address_details'];?>
</div>
      <div><?php echo $_smarty_tpl->getValue('address')['address_city'];?>
</div>
      <div><?php echo $_smarty_tpl->getValue('address')['address_country'];?>
</div>
      <div><?php echo $_smarty_tpl->getValue('address')['address_zip_code'];?>
</div>
      <div><?php echo $_smarty_tpl->getValue('address')['address_phone'];?>
</div>
      <div class="mt10 row g-1">
        <div class="col-12 <?php if ($_smarty_tpl->getValue('_small')) {?>col-md-8<?php } else { ?>col-md-9<?php }?> mb5">
          <div class="d-grid">
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-url="users/addresses.php?do=edit&id=<?php echo $_smarty_tpl->getValue('address')['address_id'];?>
" class="text-link ml10">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>

            </button>
          </div>
        </div>
        <div class="col-12 <?php if ($_smarty_tpl->getValue('_small')) {?>col-md-4<?php } else { ?>col-md-3<?php }?>">
          <div class="d-grid">
            <button type="button" class="btn btn-sm btn-light js_address-deleter" data-id="<?php echo $_smarty_tpl->getValue('address')['address_id'];?>
">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"delete",'class'=>"danger-icon",'width'=>"18px",'height'=>"18px"), (int) 0, $_smarty_current_dir);
?>
            </button>
          </div>
        </div>
      </div>
    </div>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  <div data-toggle="modal" data-url="users/addresses.php?do=add" class="payment-plan new address">
    <i class="fa fa-plus mr5"></i>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New");?>

  </div>
</div><?php }
}
