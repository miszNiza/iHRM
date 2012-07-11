<?php
/**
 *  Top Navigation menu
 *  
 */
    
    $user = $this->session->userdata('user');
    
?>
<!-- Top fixed navigation -->
<div class="topNav">
    <div class="wrapper">
        <div class="welcome"><a href="#" title=""><img src="<?php echo site_url('assets/images'); ?>/userPic.png" alt="" /></a><span>Welcome, <?php echo $user->username; ?>!</span></div>
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
                <li><a href="<?php echo site_url('logout'); ?>" title="Log Out"><img src="<?php echo site_url('assets/images'); ?>/icons/topnav/logout.png" alt="" /><span>Logout</span></a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php //print_r($user); ?>