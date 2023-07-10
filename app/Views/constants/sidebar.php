   <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a href="<?php echo base_url()?>/admin/dashboard" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-label">ACTIONS</li>
                    <li>
                        <a class="has-arrow" href="<?php echo base_url()?>/javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Client</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url()?>/admin/addclient">Add Client</a></li>
                            <li><a href="<?php echo base_url()?>/admin/viewclient">View Clients</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?php echo base_url()?>/javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text"> MANAGE ORDERS</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url()?>/admin/addorder">Add Order</a></li>
                            <li><a href="<?php echo base_url()?>/admin/vieworder">View Order History</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">OTHERS</li>
                    <li>
                        <a href="<?php echo base_url()?>/admin/resetpass" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Reset Password</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->