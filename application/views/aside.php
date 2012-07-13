<!-- Left side content -->
<div id="leftSide">
    <div class="logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo site_url('assets/images'); ?>/uda_logo.png" alt="" /></a></div>
    
    <div class="sidebarSep mt0"></div>
    
    <!-- Search widget -->
    <form action="" class="sidebarSearch">
        <input type="text" name="search" placeholder="search..." id="ac" />
        <input type="submit" value="" />
    </form>
    
    <div class="sidebarSep"></div>
    
    <!-- Left navigation -->
    <ul id="menu" class="nav">
        <li class="dash"><a href="<?php echo site_url(); ?>" title="" class="<?php if($module=='dashboard') echo 'active'; ?>"><span>Dashboard</span></a></li>
        <li class="charts"><a href="charts.html" title=""><span>Reports</span></a></li>
        <li class="forms"><a href="<?php echo site_url('pim/employees'); ?>" title="Personal Information Management" class="exp <?php if($module=='pim') echo 'active'; ?>" <?php if($module=='pim') echo 'id="current"'; ?>><span>PIM</span></a>
            <ul class="sub">
                <li <?php if($form['template'] == 'personal') echo 'class="this"'; ?>>
                    <a href="<?php echo site_url('pim/personal'); ?>" title="">Personal Information</a>
                </li>
                <li <?php if($form['template'] == 'contact') echo 'class="this"'; ?>>
                    <a href="<?php echo site_url('pim/contact'); ?>" title="">Contacts</a>
                </li>
                <li <?php if($form['template'] == 'education') echo 'class="this"'; ?>>
                    <a href="<?php echo site_url('pim/education'); ?>" title="">Education</a>
                </li>
                <li <?php if($form['template'] == 'skills') echo 'class="this"'; ?>>
                    <a href="<?php echo site_url('pim/skills'); ?>" title="">Skills And Competency</a>
                </li>
                <li <?php if($form['template'] == 'professional_development') echo 'class="this"'; ?>>
                    <a href="<?php echo site_url('pim/professional_development'); ?>" title="">Professional Development</a>
                </li>
                <li <?php if($form['template'] == 'occupational_information') echo 'class="this"'; ?>>
                    <a href="<?php echo site_url('pim/occupational'); ?>" title="">Occupational</a>
                </li>
                <li <?php if($form['template'] == 'family_information') echo 'class="this"'; ?>>
                    <a href="<?php echo site_url('pim/family'); ?>" title="">Family Details</a>
                </li>
                <li <?php if($form['template'] == 'employment_information') echo 'class="this"'; ?>>
                    <a href="<?php echo site_url('pim/employment'); ?>" title="">Employment</a>
                </li>
                <li <?php if($form['template'] == 'compensation_benefits') echo 'class="this"'; ?>>
                    <a href="<?php echo site_url('pim/compensation_benefits'); ?>" title="">Compensation &amp; Benefits</a>
                </li>
                <li <?php if($form['template'] == 'ea') echo 'class="this"'; ?>>
                    <a href="<?php echo site_url('pim/ea'); ?>" title="">EA Information</a>
                </li>
                <li <?php if($form['template'] == 'medical') echo 'class="this"'; ?>>
                    <a href="<?php echo site_url('pim/medical'); ?>" title="">Medical</a>
                </li>
                <li <?php if($form['template'] == 'disciplinary') echo 'class="this"'; ?>>
                    <a href="<?php echo site_url('pim/disciplinary'); ?>" title="">Disciplinary Records</a>
                </li>
                <li <?php if($form['template'] == 'service') echo 'class="this"'; ?>>
                    <a href="<?php echo site_url('pim/service'); ?>" title="">Service History</a>
                </li>
                <li <?php if($form['template'] == 'appraisal') echo 'class="this"'; ?>>
                    <a href="<?php echo site_url('pim/appraisal'); ?>" title="">Appraisal</a>
                </li>
                <li <?php if($form['template'] == 'leave') echo 'class="this"'; ?>>
                    <a href="<?php echo site_url('pim/leave'); ?>" title="">Leave</a>
                </li>
                <li <?php if($form['template'] == 'benefeciary') echo 'class="this"'; ?>>
                    <a href="<?php echo site_url('pim/beneficiary'); ?>" title="">Benefeciary Information</a>
                </li>
            </ul>
        </li>
		<li class="benefits"><a href="#" title="" class="exp"><span>Compensation & Benefits</span></a>
            <ul class="sub">
                <li><a href="#" title="">Medical</a></li>
				<li><a href="#" title="">Car Booking</a></li>
				<li><a href="#" title="">Accomodation Booking</a></li>
                <li class="last"><a href="#" title="">Loan & Subsidary</a></li>
				
            </ul>
        </li>
		<li class="talent"><a href="#" title="" class="exp"><span>Talent Management</span></a>
            <ul class="sub">
                <li><a href="#" title="">Training & Development</a></li>
				<li class="last"><a href="#" title="">Performance management</a></li>
				
            </ul>
        </li>
		<li class="security"><a href="#" title="" class="exp"><span>Security Management</span></a>
            <ul class="sub">
                <li><a href="#" title="">Audit Trails</a></li>
				<li class="last"><a href="#" title="">Security & Log</a></li>
				
            </ul>
        </li>
		<li class="files"><a href="#" title=""><span>File manager</span></a></li>
    </ul>
</div>