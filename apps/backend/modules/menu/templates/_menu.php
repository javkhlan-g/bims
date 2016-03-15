<ul class="nav nav-list ">
    <?php
    $menuIds = array();
    $LinkingRoleMenu = $sf_user->getAttribute('user')->getRoles()->getMenu();
    foreach ($LinkingRoleMenu as $link) {
        array_push($menuIds, $link->getMenuId());
    }
    foreach ($menus as $menu) {
        if (in_array($menu->getMenuId(), $menuIds)) {
            ?>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon glyphicon <?php echo $menu->getMenuDesc() ?>"></i>
                    <span  class="menu-text">
                        <?php
                        echo ($sf_user->getCulture()=='mn'?$menu->getMenuName():$menu->getMenuEng());
                        ?>
                    </span>
                    <b class="arrow glyphicon glyphicon-angle-down"></b>
                </a> 
                <b class="arrow"></b>
                <ul class="submenu nav-hide" style="height: 0px" >
                    <?php
                    foreach ($menu->getChildren() as $child) {
                        if (in_array($child->getMenuId(), $menuIds)) {
                            ?>    
                            <li class="">
                                <a class="sub_menu" onclick="loadWindow(<?php echo $child->getMenuId() ?>,'<?php echo ($sf_user->getCulture()=='mn'?$child->getMenuName():$child->getMenuEng()) ?>','<?php echo $child->getMenuState() ?>')"
                                   href="#" >                                                    
                                    <span class="glyphicon <?php echo $child->getMenuDesc() ?>" style="font-size:12px"></span>
                                    <?php
                                    echo ($sf_user->getCulture()=='mn'?$child->getMenuName():$child->getMenuEng());
                                    ?>
                                </a>
                                <b class="arrow"></b>
                            </li>       
                            <?php
                        }
                    }
                    ?>
                </ul> 
            </li>
            <?php
        }
    }
    ?>    
</ul><!-- /.nav-list -->
<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i class="ace-icon glyphicon glyphicon-arrow-right" data-icon2="ace-icon glyphicon glyphicon-arrow-right" data-icon1="ace-icon glyphicon glyphicon-arrow-left"></i>
</div>
<script>
    function loadWindow(id,title,url) {

        if ($('#tt').tabs('exists', title)){
            $('#tt').tabs('select', title);

        } else {
            data = '<iframe onload="javascript:resizeIframe('+id+');" src="' + url + '" id="'+id+'" width="100%" style="border:none"></iframe>';
            $('#tt').tabs('add',{
                title:title,
                content:data,
                closable:id!=0?true:false
            });
        }

        //$('#main-content').html(data);
    }

</script>