<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 09:26:49
  from '/home/winelov/public_html/content/themes/default/templates/admin.wineries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed0d559207254_94430878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35ce7a4fd95b5b0d87c6854d72967c3b9fe81bf8' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/admin.wineries.tpl',
      1 => 1590744299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed0d559207254_94430878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/winelov/public_html/includes/libs/Smarty/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/home/winelov/public_html/includes/libs/Smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div class="card">
    <div class="card-header with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/wineries/add" class="btn btn-sm btn-success">
                    <i class="fa fa-plus-circle"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("Add New Winery");?>
</span>
                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "find") {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/wineries" class="btn btn-sm btn-light">
                    <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/wineries" class="btn btn-sm btn-light">
                    <i class="fa fa-arrow-circle-left"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("Go Back");?>
</span>
                </a>
                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/winery/<?php echo $_smarty_tpl->tpl_vars['data']->value['ID'];?>
" class="btn btn-sm btn-info">
                    <i class="fa fa-tv"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("View Detail");?>
</span>
                </a>
                <button type="button" class="btn btn-sm btn-danger js_admin-deleter" data-handle="winery" data-id="<?php echo $_smarty_tpl->tpl_vars['data']->value['ID'];?>
" data-redirect="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/wineries">
                    <i class="fa fa-trash-alt"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("Delete Winery");?>
</span>
                </button>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/wineries" class="btn btn-sm btn-light">
                    <i class="fa fa-arrow-circle-left"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("Go Back");?>
</span>
                </a>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?><i class="fa fa-leaf mr10"></i>Wineries<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?><i class="fa fa-edit mr10"></i>Edit<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "find") {?><i class="fa fa-search mr10"></i>Search<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?><i class="fa fa-plus mr10"></i>Add New Winery<?php }?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '' || $_smarty_tpl->tpl_vars['sub_view']->value == "regions" || $_smarty_tpl->tpl_vars['sub_view']->value == "countries" || $_smarty_tpl->tpl_vars['sub_view']->value == "wineries" || $_smarty_tpl->tpl_vars['sub_view']->value == "banned" || $_smarty_tpl->tpl_vars['sub_view']->value == "find") {?>
        
        <div class="card-body">

            <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
                <div class="form-row">
                    <div class="col-sm-12">
                        <div class="stat-panel bg-gradient-success">
                            <div class="stat-cell">
                                <i class="fa fa-leaf bg-icon"></i>
                                <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['wineries'];?>
</span><br>
                                <span class="text-lg"><?php echo __("Wineries");?>
</span><br>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>

            <!-- search form -->
            <div class="mb20">
                <form class="form-inline" action="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/wineries/find" method="get">
                    <div class="form-group mb0">
                        <div class="input-group">
                            <input type="text" class="form-control" name="query">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-search mr5"></i><?php echo __("Search");?>
</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="form-text small">
                    <?php echo __('Search by Name, email, website, street, city, state, region or country');?>

                </div>
            </div>
            <!-- search form -->

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Name");?>
</th>
                            <th><?php echo __("Email");?>
</th>
                            <th><?php echo __("Region");?>
</th>
                            <th><?php echo __("Country");?>
</th>
                            <th><?php echo __("Actions");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                <tr>
                                    <td><a><?php echo $_smarty_tpl->tpl_vars['row']->value['ID'];?>
</a></td>
                                    <td>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/winery/<?php echo $_smarty_tpl->tpl_vars['row']->value['Name'];?>
">
                                            <?php if ($_smarty_tpl->tpl_vars['row']->value['Logo_URL']) {?><img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['Logo_URL'];?>
"><?php }?>
                                            <?php echo smarty_modifier_truncate(smarty_modifier_replace($_smarty_tpl->tpl_vars['row']->value['Name'],'?',' '),22,"...",true);?>

                                        </a>
                                    </td>
                                    <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['email'],25,"...",true);?>
</td>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/region/<?php echo $_smarty_tpl->tpl_vars['row']->value['Region'];?>
" target="_blank">
                                            <?php echo smarty_modifier_truncate(smarty_modifier_replace($_smarty_tpl->tpl_vars['row']->value['Region'],'?',' '),15,"...",true);?>

                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/country/<?php echo $_smarty_tpl->tpl_vars['row']->value['Country'];?>
" target="_blank">
                                            <?php echo smarty_modifier_truncate(smarty_modifier_replace($_smarty_tpl->tpl_vars['row']->value['Country'],'?',' '),15,"...",true);?>

                                        </a>
                                    </td>
                                                                                                            <td>
                                        <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/wineries/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['ID'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="winery" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['ID'];?>
" data-redirect="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/wineries">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="6" class="text-center">
                                    <?php echo __("No data to show");?>

                                </td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

        </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
        
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-2 text-center mb20">
                    <img class="img-fluid img-thumbnail rounded-circle" src="<?php if ($_smarty_tpl->tpl_vars['data']->value['Logo_URL']) {
echo $_smarty_tpl->tpl_vars['data']->value['Logo_URL'];
} else {
echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/blank_winery.jpg<?php }?>">
                </div>
                <div class="col-12 col-md-5 mb20">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="float-right badge badge-lg badge-pill badge-secondary"><?php echo $_smarty_tpl->tpl_vars['data']->value['ID'];?>
</span>
                            <?php echo __("Winery ID");?>

                        </li>
                        <li class="list-group-item">
                            <span class="float-right badge badge-lg badge-pill badge-secondary"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['data']->value['email'],25,"...",true);?>
</span>
                            <?php echo __("Email");?>

                        </li>
                        <li class="list-group-item">
                            <span class="float-right badge badge-lg badge-pill badge-secondary"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['data']->value['website'],25,"...",true);?>
</span>
                            <?php echo __("Website");?>

                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-5 mb20">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="float-right badge badge-lg badge-pill badge-secondary"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['data']->value['facebook'],25,"...",true);?>
</span>
                            <?php echo __("Facebook");?>

                        </li>
                        <li class="list-group-item">
                            <span class="float-right badge badge-lg badge-pill badge-secondary"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['data']->value['twitter1'],25,"...",true);?>
</span>
                            <?php echo __("Twitter");?>

                        </li>
                        <li class="list-group-item">
                            <span class="float-right badge badge-lg badge-pill badge-secondary"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['data']->value['instagram1'],25,"...",true);?>
</span>
                            <?php echo __("Instagram");?>

                        </li>
                    </ul>
                </div>
            </div>

            <!-- tabs nav -->
            <ul class="nav nav-tabs mb20">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab">
                        <i class="fa fa-cog fa-fw mr5"></i><strong class="mr5"><?php echo __("Details");?>
</strong>
                    </a>
                </li>
            </ul>
            <!-- tabs nav -->

            <!-- tabs content -->
            <div class="tab-content">
                <!-- detail tab -->
                <div class="tab-pane active" id="detail">
                    <form class="js_ajax-forms " data-url="admin/wineries.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['ID'];?>
&do=edit_detail">
                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label required_detail">
                                <?php echo __("Name");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text d-none d-sm-block" id="edit_name"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/winery/</span>
                                    </div>
                                    <input type="text" class="form-control" name="Name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['Name'];?>
">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Business Name");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="business_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['business_name'];?>
">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Description");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-edit"></i></span>
                                    </div>
                                    <textarea type="text" class="form-control" name="description" rows="10"><?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>
</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label required_detail">
                                <?php echo __("Email");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Facebook Link");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-link"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="facebook" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['facebook'];?>
">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Instagram ID");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="instagram" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['instagram'];?>
">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Instagram Link");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-link"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="instagram1" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['instagram1'];?>
">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Twitter ID");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="twitter" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['twitter'];?>
">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Twitter Link");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="Twitter1" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['Twitter1'];?>
">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Website URL");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-external-link-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="website" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['website'];?>
">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Street");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-signs"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="street" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['street'];?>
">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("City");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="city" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['city'];?>
">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("State");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-pin"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="state" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['state'];?>
">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Zip");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marked"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="zip" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['zip'];?>
">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Region");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="Region" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['Region'];?>
">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Country");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-flag"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="Country" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['Country'];?>
" id="country_add_new" style="position: relative;">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Latitude");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-book"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="Lat" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['Lat'];?>
">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Longitude");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-atlas"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="Long" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['Long'];?>
">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Logo URL");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-image"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="Logo_URL" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['Logo_URL'];?>
">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-9 offset-md-3">
                                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                                <button type="button" class="btn btn-danger js_admin-deleter" data-handle="winery" data-id="<?php echo $_smarty_tpl->tpl_vars['data']->value['ID'];?>
" data-redirect="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/wineries">
                                    <i class="fa fa-trash-alt mr5"></i><?php echo __("Delete Winery");?>

                                </button>
                            </div>
                        </div>

                        <!-- success -->
                        <div class="alert alert-success mb0 mt20 x-hidden"></div>
                        <!-- success -->

                        <!-- error -->
                        <div class="alert alert-danger mb0 mt20 x-hidden"></div>
                        <!-- error -->
                    </form>
                </div>
                <!-- detail tab -->

            </div>
            <!-- tabs content -->
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>

        <div class="card-body">

            <!-- tabs nav -->
            <ul class="nav nav-tabs mb20">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab">
                        <i class="fa fa-cog fa-fw mr5"></i><strong class="mr5"><?php echo __("Details");?>
</strong>
                    </a>
                </li>
            </ul>
            <!-- tabs nav -->

            <!-- tabs content -->
            <div class="tab-content">
                <!-- detail tab -->
                <div class="tab-pane active" id="detail">
                    <form class="js_ajax-forms " data-url="admin/wineries.php?do=add_detail">
                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label required_detail">
                                <?php echo __("Name");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text d-none d-sm-block" id="edit_name"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/winery/</span>
                                    </div>
                                    <input type="text" class="form-control" name="Name" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Business Name");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="business_name" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Description");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-edit"></i></span>
                                    </div>
                                    <textarea type="text" class="form-control" name="description" rows="10"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label required_detail">
                                <?php echo __("Email");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="email" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Facebook Link");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-link"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="facebook" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Instagram ID");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="instagram" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Instagram Link");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-link"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="instagram1" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Twitter ID");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="twitter" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Twitter Link");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="Twitter1" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Website URL");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-external-link-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="website" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Street");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-signs"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="street" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("City");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="city" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("State");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-pin"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="state" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Zip");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marked"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="zip" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Region");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="Region" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Country");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-flag"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="Country" value="" id="country_add_new" style="position: relative;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Latitude");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-book"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="Lat" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Longitude");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-atlas"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="Long" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Logo URL");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-image"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="Logo_URL" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-9 offset-md-3">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle mr5"></i><?php echo __("Add Winery");?>
</button>
                                <a type="button" class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/wineries">
                                    <i class="fa fa-trash-alt mr5"></i><?php echo __("Cancel");?>

                                </a>
                            </div>
                        </div>

                        <!-- success -->
                        <div class="alert alert-success mb0 mt20 x-hidden"></div>
                        <!-- success -->

                        <!-- error -->
                        <div class="alert alert-danger mb0 mt20 x-hidden"></div>
                        <!-- error -->
                    </form>
                </div>
                <!-- detail tab -->

            </div>
            <!-- tabs content -->
        </div>
    <?php }?>
</div>
<?php echo '<script'; ?>
>

    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) { return false;}
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function(e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }
            }
        });
        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }
        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
    }

    /*An array containing all the country names in the world:*/
    var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

    /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
    autocomplete(document.getElementById("country_add_new"), countries);

<?php echo '</script'; ?>
>

<style>
    /*the container must be positioned relative:*/
    .autocomplete {
        position: relative;
        display: inline-block;
    }

    #country_add_new {
        padding: 10px;
        font-size: 16px;
    }

    #country_add_new[type=text] {
        width: 100%;
    }

    #country_add_new[type=submit] {
        background-color: DodgerBlue;
        color: #fff;
        cursor: pointer;
    }

    .autocomplete-items {
        position: absolute;
        /*overflow-y: scroll;*/
        border: 1px solid #d4d4d4;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        /*position the autocomplete items to be the same width as the container:*/
        top: 100%;
        left: 0;
        right: 0;
    }

    .autocomplete-items div {
        padding: 10px;
        cursor: pointer;
        background-color: #fff;
        border-bottom: 1px solid #d4d4d4;
    }

    /*when hovering an item:*/
    .autocomplete-items div:hover {
        background-color: #e9e9e9;
    }

    /*when navigating through the items using the arrow keys:*/
    .autocomplete-active {
        background-color: DodgerBlue !important;
        color: #ffffff;
    }
</style><?php }
}
