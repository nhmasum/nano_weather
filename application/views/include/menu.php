<!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container">
    <div id="mainnav" style="background: #46a741;">
        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                    <ul id="mainnav-menu" class="list-group">
                        <?php
                        $page = @$this->uri->segment(1);
                        $page2 = @$this->uri->segment(2);
                        ?>
                        <!--Menu list item-->
                        <li class="<?php echo ($page=='super_admin' && $page2=='index') ? 'active-link' : ''?>">
                            <a href="<?php echo base_url('super_admin/index')?>">
                                <i class="fa fa-dashboard"></i>
                                <span class="menu-title">
                                    <strong>Dashboard</strong>
                                    <span class="label label-success pull-right">Top</span>
                                </span>
                            </a>
                        </li>
                        <li class="active <?php echo ($page=='zone') ? 'active-link' : ''?>" style="background: #33822f;">
                            <a href="#">
                                <i class="fa fa-car"></i>
                                <span class="menu-title">Zone</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="<?php echo ($page=='zone' && $page2=='zone_list') ? 'active-link' : ''?>">
                                    <a href="<?php echo base_url('zone/zone_list')?>">Zone List</a>
                                </li>
                                <li class="<?php echo ($page=='zone' && $page2=='add') ? 'active-link' : ''?>">
                                    <a href="<?php echo base_url('zone/add')?>">Add New Zone</a>
                                </li>
                            </ul>
                        </li>
                        <li class="active <?php echo ($page=='super_admin' && ($page2 =='add_admin' || $page2 == 'edit_admin' || $page2 == 'admin_list')) ? 'active-link' : ''?>" style="background: #33822f;">
                            <a href="#">
                                <i class="fa fa-car"></i>
                                <span class="menu-title">Admins</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="<?php echo ($page=='super_admin' && $page2=='admin_list') ? 'active-link' : ''?>">
                                    <a href="<?php echo base_url('super_admin/admin_list')?>">Admin List</a>
                                </li>
                                <li class="<?php echo ($page=='super_admin' && $page2=='add_admin') ? 'active-link' : ''?>">
                                    <a href="<?php echo base_url('super_admin/add_admin')?>">Add New admin</a>
                                </li>
                            </ul>
                        </li>
                        <li class="active <?php echo ($page=='vehicle') ? 'active-link' : ''?>" style="background: #33822f;">
                            <a href="#">
                                <i class="fa fa-car"></i>
                                <span class="menu-title">Vehicles</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="<?php echo ($page=='vehicle' && $page2=='vehicle_list') ? 'active-link' : ''?>">
                                    <a href="<?php echo base_url('vehicle/vehicle_list')?>">Vehicle List</a>
                                </li>
                                <li class="<?php echo ($page=='vehicle' && $page2=='add_vehicle') ? 'active-link' : ''?>">
                                    <a href="<?php echo base_url('vehicle/add_vehicle')?>">Add New vehicle</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->
    </div>
</nav>
<!--===================================================-->
<!--END MAIN NAVIGATION-->
			
			