<?php
$acl = new ACL();
if ($acl->hasPermission(getModuleMeta("todolist", "admin_permission")) and ViewBag::get("items") > 0) {
    ?>
<h2 class="accordion-header"><?php translate("todo_tasks");?></h2>
<div class="accordion-content">
<?php if(count(ViewBag::get("items")) > 0){?>
	<ul>
<?php foreach(ViewBag::get("items") as $item){?>
<li><?php Template::escape($item->getTitle());?></li>
<?php }?>
	</ul>
	<?php }?>
	<a href="<?php echo ModuleHelper::buildAdminURL("todolist");?>"
		class="btn btn-primary"><?php translate("open_todolist");?></a>
</div>
<?php }?>