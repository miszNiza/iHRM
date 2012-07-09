<!-- Right side -->
<div id="rightSide">

    <!-- Top fixed navigation -->
    <div class="topNav">
        <div class="wrapper">
            <div class="welcome"><a href="#" title=""><img src="<?php echo site_url('assets/images'); ?>/userPic.png" alt="" /></a><span>Welcome, Admin!</span></div>
            <div class="userNav">
                <ul>
                    <li><a href="#" title=""><img src="<?php echo site_url('assets/images'); ?>/icons/topnav/profile.png" alt="" /><span>Profile</span></a></li>
                    <li><a href="#" title=""><img src="<?php echo site_url('assets/images'); ?>/icons/topnav/tasks.png" alt="" /><span>Tasks</span></a></li>
                    <li class="dd"><a title=""><img src="<?php echo site_url('assets/images'); ?>/icons/topnav/messages.png" alt="" /><span>Notifications</span><span class="numberTop">25</span></a>
                        <ul class="userDropdown">
                            <li><a href="#" title="" class="sAdd">new message</a></li>
                            <li><a href="#" title="" class="sInbox">inbox</a></li>
                            <li><a href="#" title="" class="sOutbox">outbox</a></li>
                            <li><a href="#" title="" class="sTrash">trash</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title=""><img src="<?php echo site_url('assets/images'); ?>/icons/topnav/settings.png" alt="" /><span>Settings</span></a></li>
                    <li><a href="login.html" title=""><img src="<?php echo site_url('assets/images'); ?>/icons/topnav/logout.png" alt="" /><span>Logout</span></a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    
    <!-- Responsive header -->
    <div class="resp">
        <div class="respHead">
            <a href="index.html" title=""><img src="<?php echo site_url('assets/images'); ?>/uda_logo.png" alt="" /></a>
        </div>
        
        <div class="cLine"></div>
        <div class="smalldd">
            <span class="goTo"><img src="<?php echo site_url('assets/images'); ?>/icons/light/home.png" alt="" />Dashboard</span>
            <ul class="smallDropdown">
                <li><a href="index.html" title=""><img src="<?php echo site_url('assets/images'); ?>/icons/light/home.png" alt="" />Dashboard</a></li>
                <li><a href="charts.html" title=""><img src="<?php echo site_url('assets/images'); ?>/icons/light/stats.png" alt="" />Reports</a></li>
            </ul>
        </div>
        <div class="cLine"></div>
    </div>
    
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Personal Information Module</h5>
                <span>Personal Information</span>
            </div>
            <div class="middleNav">
                <ul>
                    <li class="mUser"><a title=""><span class="users"></span></a>
                        <ul class="mSub1">
                            <li><a href="#" title="">Add user</a></li>
                            <li><a href="#" title="">Statistics</a></li>
                            <li><a href="#" title="">Claims</a></li>
							<li><a href="#" title="">Leave</a></li>
							<li><a href="#" title="">Loans</a></li>
							<li><a href="#" title="">Bookings</a></li>
                        </ul>
                    </li>
                    <li class="mMessages"><a title=""><span class="messages"></span></a>
                        <ul class="mSub2">
                            <li><a href="#" title="">New Notifications<span class="numberRight">25</span></a></li>
                            <li><a href="#" title="">Unread Notifications<span class="numberRight">12</span></a></li>
                            <li><a href="#" title="">All Notifications</a></li>
                        </ul>
                    </li>
                    <li class="mFiles"><a href="#" title="File Vault" class="tipN"><span class="files"></span></a></li>
                    <li class="mOrders"><a title=""><span class="orders"></span><span class="numberMiddle">8</span></a>
                        <ul class="mSub4">
                            <li><a href="#" title="">Pending Claims</a></li>
                            <li><a href="#" title="">Approved Claims</a></li>
                            <li><a href="#" title="">Denied Claims</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    
    <div class="line"></div>
    
    <!-- Main content wrapper -->
    <div class="wrapper">
        
        <?php $this->load->view('pim/forms/personal',$data); ?>
        
     
    </div>
    
    <!-- Footer line -->
    <div id="footer">
        <div class="wrapper">All rights reserved. <a href="" title="">UDA HOLDINGS BERHAD</a></div>
    </div>

</div>