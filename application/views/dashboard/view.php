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
                <h5>Uda Holdings Berhad</h5>
                <span>IHRM Revolution</span>
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
    
    <!-- Page statistics and control buttons area -->
    <div class="statsRow">
        <div class="wrapper">
        	<div class="controlB">
            	<ul>
                	<li><a href="#" title=""><img src="<?php echo site_url('assets/images'); ?>/icons/control/32/plus.png" alt="" /><span>Add new record</span></a></li>
                    <li><a href="#" title=""><img src="<?php echo site_url('assets/images'); ?>/icons/control/32/database.png" alt="" /><span>New manual entry</span></a></li>
                    <li><a href="#" title=""><img src="<?php echo site_url('assets/images'); ?>/icons/control/32/hire-me.png" alt="" /><span>Add new user</span></a></li>
                    <li><a href="#" title=""><img src="<?php echo site_url('assets/images'); ?>/icons/control/32/statistics.png" alt="" /><span>Check statistics</span></a></li>
                    <li><a href="#" title=""><img src="<?php echo site_url('assets/images'); ?>/icons/control/32/comment.png" alt="" /><span>Alerts</span></a></li>
                    <li><a href="#" title=""><img src="<?php echo site_url('assets/images'); ?>/icons/control/32/order-149.png" alt="" /><span>Applications</span></a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    
    <div class="line"></div>
    
    <!-- Main content wrapper -->
    <div class="wrapper">
    
         <!-- Notifications -->
        <div class="nNote nWarning hideit">
            <p><strong>WARNING: </strong>This is a warning message. You can use this to warn users on any events</p>
        </div>
        <div class="nNote nInformation hideit">
            <p><strong>INFORMATION: </strong>This is a message for information, can be any general information.</p>
        </div>   
        <div class="nNote nSuccess hideit">
            <p><strong>SUCCESS: </strong>This is a success message to alert admin</p>
        </div>  
        <div class="nNote nFailure hideit">
            <p><strong>FAILURE: </strong>This is a very critical system failure message</p>
        </div>
        
        <!-- Chart -->
        <div class="widget chartWrapper">
            <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/stats.png" alt="" class="titleIcon" /><h6>Staff Movement</h6></div>
            <div class="body"><div class="chart"></div></div>
        </div>
        
        <!-- Widgets -->
        <div class="widgets">
            <div class="oneTwo">
            
                <!-- Partners list widget -->
                <div class="widget">
                    <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/users.png" alt="" class="titleIcon" /><h6>Latest Activity</h6></div>
                    <ul class="partners">
                        <li>
                            <a href="#" title="" class="floatL"><img src="<?php echo site_url('assets/images'); ?>/user.png" alt="" /></a>
                            <div class="pInfo">
                                <a href="#" title=""><strong>Dave Armstrong</strong></a>
                                <i>Creative director at Google Inc. Zurich, has applied for a leave</i>	
                            </div>
                            <div class="pLinks">
                                <a href="#" title="Direct call" class="tipW"><img src="<?php echo site_url('assets/images'); ?>/icons/pSkype.png" alt="" /></a>
                                <a href="#" title="Send an email" class="tipW"><img src="<?php echo site_url('assets/images'); ?>/icons/pEmail.png" alt="" /></a>
                            </div>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <a href="#" title="" class="floatL"><img src="<?php echo site_url('assets/images'); ?>/user.png" alt="" /></a>
                                <div class="pInfo">
                                <a href="#" title=""><strong>Nora McDonald</strong></a>
                                <i>Lead developer, Alaska, has updated status to "out of town"</i>	
                            </div>
                            <div class="pLinks">
                                <a href="#" title="Direct call" class="tipW"><img src="<?php echo site_url('assets/images'); ?>/icons/pSkype.png" alt="" /></a>
                                <a href="#" title="Send an email" class="tipW"><img src="<?php echo site_url('assets/images'); ?>/icons/pEmail.png" alt="" /></a>
                            </div>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <a href="#" title="" class="floatL"><img src="<?php echo site_url('assets/images'); ?>/user.png" alt="" /></a>
                            <div class="pInfo">
                                <a href="#" title=""><strong>Natalie Zimmerman</strong></a>
                                <i>Logged in 20 times today!</i>	
                            </div>
                            <div class="pLinks">
                                <a href="#" title="Direct call" class="tipW"><img src="<?php echo site_url('assets/images'); ?>/icons/pSkype.png" alt="" /></a>
                                <a href="#" title="Send an email" class="tipW"><img src="<?php echo site_url('assets/images'); ?>/icons/pEmail.png" alt="" /></a>
                            </div>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <a href="#" title="" class="floatL"><img src="<?php echo site_url('assets/images'); ?>/user.png" alt="" /></a>
                            <div class="pInfo">
                                <a href="#" title=""><strong>Maria Paradeux</strong></a>
                                <i>Has approved a staff leave</i>	
                            </div>
                            <div class="pLinks">
                                <a href="#" title="Direct call" class="tipW"><img src="<?php echo site_url('assets/images'); ?>/icons/pSkype.png" alt="" /></a>
                                <a href="#" title="Send an email" class="tipW"><img src="<?php echo site_url('assets/images'); ?>/icons/pEmail.png" alt="" /></a>
                            </div>
                            <div class="clear"></div>
                        </li>
                    </ul>
                </div>
            
                <!-- Website stats widget -->
                <div class="widget">
                    <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/stats.png" alt="" class="titleIcon" /><h6>Leave Ratio</h6></div>
                    <table cellpadding="0" cellspacing="0" width="100%" class="sTable">
                        <thead>
                            <tr>
                                <td width="80">Amount</td>
                                <td>Description</td>
                                <td width="80">Changes</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center"><a href="#" title="" class="webStatsLink">36</a></td>
                                <td>approved leave applications</td>
                                <td><span class="statsPlus">0.32%</span></td>
                            </tr>
                            <tr>
                                <td align="center"><a href="#" title="" class="webStatsLink">65</a></td>
                                <td>new leave applications</td>
                                <td><span class="statsMinus">82.3%</span></td>
                            </tr>
                            <tr>
                                <td align="center"><a href="#" title="" class="webStatsLink">45</a></td>
                                <td>rejected leave applications</td>
                                <td><span class="statsPlus">100%</span></td>
                            </tr>
                            <tr>
                                <td align="center"><a href="#" title="" class="webStatsLink">86</a></td>
                                <td>KIV leave applications</td>
                                <td><span class="statsPlus">4.99%</span></td>
                            </tr>
                            <tr>
                                <td align="center"><a href="#" title="" class="webStatsLink">354</a></td>
                                <td>pending leave applications</td>
                                <td><span class="statsMinus">9.67%</span></td>
                            </tr>
                        </tbody>
                    </table>   
                </div>
            
                <!-- Latest update widget -->
                <div class="widget">
                    <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/refresh4.png" alt="" class="titleIcon" /><h6>Latest updates</h6></div>
                    
                    <div class="updates">
                    	<div class="newUpdate">
                            <div class="uDone">
                                <a href="#" title=""><strong>A new server is on the board!</strong></a>
                                <span>We've just set up a new server. Our gurus ...</span>
                            </div>
                            <div class="uDate"><span class="uDay">08</span>feb</div>
                            <div class="clear"></div>
                        </div>
                        
                    	<div class="newUpdate">
                            <span class="uAlert">
                                <a href="#" title=""><strong>[ URGENT ] ex.ua was closed by government</strong></a>
                                <span>But already everything was solved. It will ...</span>
                            </span>
                            <span class="uDate"><span class="uDay">08</span>feb</span>
                            <div class="clear"></div>
                        </div>
                        
                    	<div class="newUpdate">
                            <span class="uDone">
                                <a href="#" title=""><strong>The goal was reached!</strong></a>
                                <span>We just passed 1000 sales! Congrats to all</span>
                            </span>
                            <span class="uDate"><span class="uDay">07</span>feb</span>
                            <div class="clear"></div>
                        </div>
                        
                    	<div class="newUpdate">
                            <span class="uNotice">
                                <a href="#" title=""><strong>Meat a new team member - Don Corleone</strong></a>
                                <span>Very dyplomatic and flexible sales manager</span>
                            </span>
                            <span class="uDate"><span class="uDay">06</span>feb</span>
                            <div class="clear"></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        
        	<!-- 2 columns widgets -->
            <div class="oneTwo">
            
                <!-- Search -->
                <div class="searchWidget">
                    <form action="">
                        <input type="text" name="search" placeholder="Enter search text..." />
                        <input type="submit" name="find" value="" />
                    </form>
                </div>
            
                <!-- Purchase info widget -->
                <div class="widget">
                    <div class="title">
                    	<img src="<?php echo site_url('assets/images'); ?>/icons/dark/money.png" alt="" class="titleIcon" />
                        <h6>Daily Claim Summary</h6>
                        <div class="topIcons">
                            <a href="#" class="tipS" title="Download statement"><img src="<?php echo site_url('assets/images'); ?>/icons/downloadTop.png" alt="" /></a>
                            <a href="#" class="tipS" title="Print invoice"><img src="<?php echo site_url('assets/images'); ?>/icons/printTop.png" alt="" /></a>
                            <a href="#" class="tipS" title="Edit"><img src="<?php echo site_url('assets/images'); ?>/icons/editTop.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="newOrder">
                        <div class="userRow">
                            <a href="#" title=""><img src="<?php echo site_url('assets/images'); ?>/user.png" alt="" class="floatL" /></a>
                            <ul class="leftList">
                                <li><a href="#" title=""><strong>Julia Maria Shine</strong></a></li>
                                <li>Order status:</li>
                            </ul>
                            <ul class="rightList">
                                <li><a href="#" title=""> <strong>#2112</strong></a></li>
                                <li class="orderIcons"><span class="oUnfinished"></span><span class="oShipped tipN" title="Loaned a company car"></span><span class="oPaid tipN" title="Paid on Feb 1st, 2012"></span></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    
                        <div class="cLine"></div>
                        
                        <div class="orderRow">
                            <ul class="leftList">
                                <li>Date and time:</li>
                                <li>Approved amount:</li>
                                <li>Rejected amount</li>
                            </ul>
                            <ul class="rightList">
                                <li><strong>Jan 31, 2012</strong> |  12:51</li>
                                <li><strong class="green">RM5,514.36</strong></li>
                                <li><strong class="orange">- RM1,158.54</strong></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                        
                        <div class="cLine"></div>
                        <div class="totalAmount"><h6 class="floatL blue">Total:</h6><h6 class="floatR blue">RM12,157.99</h6><div class="clear"></div></div>
                    </div>
                </div>                
        
                <!-- New users widget -->
                <div class="widget">
                    <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/add.png" alt="" class="titleIcon" /><h6>Highest paid</h6></div>
                    <div class="wUserInfo">
                        <a href="#" title="" class="wUserPic"><img src="<?php echo site_url('assets/images'); ?>/user.png" alt="" /></a>
                        <ul class="leftList">
                            <li><a href="#" title=""><strong>Eugene Kopyov</strong></a></li>
                            <li><a href="#" title="">eugene@kopyov.com</a></li>
                        </ul>
                        <ul class="rightList">
                            <li><a href="#" class="green"><strong>RM12,248.21</strong></a></li>
                            <li><a href="#" class="red">12 sales</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="cLine"></div>
                    
                    <div class="wUserInfo">
                        <a href="#" title="" class="wUserPic"><img src="<?php echo site_url('assets/images'); ?>/user.png" alt="" /></a>
                        <ul class="leftList">
                            <li><a href="#" title=""><strong>Valery Dow</strong></a></li>
                            <li><a href="#" title="">valery@dow.com</a></li>
                        </ul>
                        <ul class="rightList">
                            <li><a href="#" class="green"><strong>RM4,048</strong></a></li>
                            <li><a href="#" class="red">15 sales</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="cLine"></div>
                    
                    <div class="wUserInfo">
                        <a href="#" title="" class="wUserPic"><img src="<?php echo site_url('assets/images'); ?>/user.png" alt="" /></a>
                        <ul class="leftList">
                            <li><a href="#" title=""><strong>Liam Paterson</strong></a></li>
                            <li><a href="#" title="">liam@paterson.com</a></li>
                        </ul>
                        <ul class="rightList">
                            <li><a href="#" class="green"><strong>RM94,127.20</strong></a></li>
                            <li><a href="#" class="red">32 sales</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="cLine"></div>
                    
                    <div class="wUserInfo">
                        <a href="#" title="" class="wUserPic"><img src="<?php echo site_url('assets/images'); ?>/user.png" alt="" /></a>
                        <ul class="leftList">
                            <li><a href="#" title=""><strong>Steve Downey</strong></a></li>
                            <li><a href="#" title="">steve@downey.com</a></li>
                        </ul>
                        <ul class="rightList">
                            <li><a href="#" class="green"><strong>RM2,483.02</strong></a></li>
                            <li><a href="#" class="red">16 sales</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                
            	<!-- My tasks table widget -->
                <div class="widget">
                    <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/timer.png" alt="" class="titleIcon" /><h6>My tasks</h6><div class="num"><a href="#" class="blueNum">+245</a></div></div>
                    <table cellpadding="0" cellspacing="0" width="100%" class="sTable taskWidget">
                        <thead>
                            <tr>
                                <td>Description</td>
                                <td width="100">Status</td>
                                <td width="60">Acts</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="taskPr"><a href="#" title="">Finish all claim summary</a></td>
                                <td><span class="green f11">in progress</span></td>
                                <td class="actBtns"><a href="#" title="Update" class="tipS"><img src="<?php echo site_url('assets/images'); ?>/icons/edit.png" alt="" /></a><a href="#" title="Remove" class="tipS"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td>
                            </tr>
                            <tr>
                                <td class="taskP"><a href="#" title="">Get staff reports done</a></td>
                                <td><span class="lGrey f11">pending</span></td>
                                <td class="actBtns"><a href="#" title="Update" class="tipS"><img src="<?php echo site_url('assets/images'); ?>/icons/edit.png" alt="" /></a><a href="#" title="Remove" class="tipS"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td>
                            </tr>
                            <tr>
                                <td class="taskP"><a href="#" title="">Input 3Q sales</a></td>
                                <td><span class="lGrey f11">pending</span></td>
                                <td class="actBtns"><a href="#" title="Update" class="tipS"><img src="<?php echo site_url('assets/images'); ?>/icons/edit.png" alt="" /></a><a href="#" title="Remove" class="tipS"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td>
                            </tr>
                            <tr>
                                <td class="taskD"><a href="#" title="">Start beta testing</a></td>
                                <td><span class="red f11">done</span></td>
                                <td class="actBtns"><a href="#" title="Update" class="tipS"><img src="<?php echo site_url('assets/images'); ?>/icons/edit.png" alt="" /></a><a href="#" title="Remove" class="tipS"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td>
                            </tr>
                        </tbody>
                    </table> 
                </div>
                <div class="clear"></div>

            </div>
            <div class="clear"></div>
        </div>
    	
        <!-- Events calendar -->
        <div class="widget">
            <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/monthCalendar.png" alt="" class="titleIcon" /><h6>Events</h6></div>
            <div class="calendar"></div>
        </div>
    
        
    </div>
    
    <!-- Footer line -->
    <div id="footer">
        <div class="wrapper">All rights reserved. <a href="" title="">UDA HOLDINGS BERHAD</a></div>
    </div>

</div>