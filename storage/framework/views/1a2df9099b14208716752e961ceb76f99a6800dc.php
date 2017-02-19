<ul class="nav navbar-nav">
    <li class="dropdown nav-item"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="https://d13yacurqjgara.cloudfront.net/users/120724/screenshots/3261034/resist-flag_1x.jpg"
		alt="Alternate Text" class="user-tiny" /> &nbsp;<?php echo e(Auth::user()->name); ?>

        <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li>
                <div class="navbar-content">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="https://d13yacurqjgara.cloudfront.net/users/120724/screenshots/3261034/resist-flag_1x.jpg"
                                alt="Alternate Text" class="user" />
                        </div>
                        <div class="col-md-7">
                            <div style="color: #253340;"><?php echo e(Auth::user()->name); ?></div>
                            <p class="text-muted small">
                                <?php echo e(Auth::user()->email); ?><br />Notifications <span style="color:#009900;">ON</span><br />
								<span href="/logout"  class="text-muted small" style="text-decoration: underline; color:#cc0000;">Sign Out</a></p>
                            <div class="divider">
                            </div>
                            <a href="#" class="btn btn-cta-primary btn-sm">Update Profile</a>
                        </div>
                    </div>
                </div>
                
            </li>
        </ul>
    </li>
</ul>