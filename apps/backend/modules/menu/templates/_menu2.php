<ul class="nav nav-list ">
    <?php
    $menuIds = array();
    $LinkingRoleMenu = $sf_user->getAttribute('user')->getRole()->getMenu();
    foreach ($LinkingRoleMenu as $link) {
        array_push($menuIds, $link->getMenuId());
    }
    foreach ($menus as $menu) {
        if (in_array($menu->getMenuId(), $menuIds)) {
            $IsMainCurrent = ($currentMenu->getParent()->getMenuId() == $menu->getMenuId());
            ?>
            <li class="<?php
            if ($IsMainCurrent) {
                echo "hsub open";
            }
            ?>">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon glyphicon <?php echo $menu->getMenuDesc() ?>"></i>
                    <span  class="menu-text">
                        <?php
                        echo $menu->getMenuName();
                        ?>
                    </span>
                    <b class="arrow glyphicon glyphicon-angle-down"></b>
                </a> 
                <b class="arrow"></b>
                <ul class="submenu <?php echo $IsMainCurrent ? "nav-show" : "nav-hide"; ?>" style="<?php echo $IsMainCurrent ? "display:block" : "height: 0px;"; ?>" >
                    <?php
                    foreach ($menu->getChildren() as $child) {
                        if (in_array($child->getMenuId(), $menuIds)) {
                            $IsChildMenu = ($currentMenu->getMenuId() == $child->getMenuId());
                            ?>    
                            <li class="<?php if ($IsChildMenu) echo "active" ?>">
                                <a class="sub_menu" menuid="<?php echo $child->getMenuId() ?>"
                                <?php echo ($child->getIsAjax() ? 'onclick="ajaxModule(\'' . $child->getMenuState() . '\')"' : '') ?> 
                                   href="<?php echo ($child->getIsAjax() ? '#' : $child->getMenuState()) ?>?m=<?php echo $child->getMenuId() ?>" >                                                    
                                    <i class="menu-icon glyphicon <?php echo $child->getMenuDesc() ?> <?php if ($IsChildMenu) echo "active" ?>"></i>
                                    <?php
                                    echo $child->getMenuName();
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
