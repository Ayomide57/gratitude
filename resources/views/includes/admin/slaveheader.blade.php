  <!--
    /////////////////////////////////////////////////////////////////////////
    //////////     HEADER  CONTENT     ///////////////
    //////////////////////////////////////////////////////////////////////
    -->
    <div id="header">

        <div class="logo-area clearfix">
            <a href="#" class="logo"></a>
        </div>
        <!-- //logo-area-->

        <div class="tools-bar">
            <ul class="nav navbar-nav nav-main-xs">
                <li><a href="#" class="icon-toolsbar nav-mini"><i class="fa fa-bars"></i></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right tooltip-area">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                        <em><strong>His</strong>, 
                       {{ Auth::user()->name  }}
                            </em> <i class="dropdown-icon fa fa-angle-down"></i>
                    </a>
                    <!-- //dropdown-menu-->
                </li>
                <li class="visible-lg">
                    <a href="#" class="h-seperate fullscreen" data-toggle="tooltip" title="Full Screen" data-container="body"  data-placement="left">
                        <i class="fa fa-expand"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- //tools-bar-->

    </div>
    <!-- //header-->


    <!--
    /////////////////////////////////////////////////////////////////////////
    //////////     SLIDE LEFT CONTENT     //////////
    //////////////////////////////////////////////////////////////////////
    -->
    <div id="nav">
        <div id="nav-title">
            <h3><strong>Hi</strong>, {{ Auth::user()->name  }}</h3>
        </div>
        <!-- //nav-title-->
        <div id="nav-scroll">
            <div class="avatar-slide">
						
								<span class="easy-chart avatar-chart" data-color="theme-inverse" data-percent="69" data-track-color="rgba(255,255,255,0.1)" data-line-width="5" data-size="118">
										<span class="percent"></span>
										<img alt="" src="assets/img/avatar.png" class="circle">
								</span>
                <!-- //avatar-chart-->

                <div class="avatar-detail">
                    <p><button class="btn btn-inverse btn-sm"><i class="fa fa-pencil"></i> Edit Profile</button></p>
                    <p><a href="#">@ Chaing Mai , TH</a></p>
                    <span>12,110 Sales</span>
                    <span>106 Follower</span>
                </div>
                <!-- //avatar-detail-->

                <div class="avatar-link btn-group btn-group-justified">
                    <a class="btn" href="profile.html"  title="Portfolio"><i class="fa fa-briefcase"></i></a>
                    <a class="btn"  data-toggle="modal" href="#md-notification" title="Notification">
                        <i class="fa fa-bell-o"></i><em class="green"></em>
                    </a>
                    <a class="btn"  data-toggle="modal" href="#md-messages"  title="Messages">
                        <i class="fa fa-envelope-o"></i><em class="active"></em>
                    </a>
                    <a class="btn" href="#menu-right" title="Contact List"><i class="fa fa-book"></i></a>
                </div>
                <!-- //avatar-link-->

            </div>
            <!-- //avatar-slide-->


            <div class="widget-collapse dark">
                <header>
                    <a data-toggle="collapse" href="#collapseSummary"><i class="collapse-caret fa fa-angle-up"></i> Summary Order </a>
                </header>
                <section class="collapse in" id="collapseSummary">
                    <div class="collapse-boby" style="padding:0">

                        <div class="widget-mini-chart align-xs-left">
                            <div class="pull-right" >
                                <div class="sparkline mini-chart" data-type="bar" data-color="warning" data-bar-width="10" data-height="35">2,3,4,5,7,4,5</div>
                            </div>
                            <p>This week's balance</p>
                            <h4>$12,788</h4>
                        </div>
                        <!-- //widget-mini-chart -->

                        <div class="widget-mini-chart align-xs-right">
                            <div class="pull-left">
                                <div class="sparkline mini-chart" data-type="bar" data-color="theme" data-bar-width="10" data-height="45">2,3,7,5,4,6,6,3</div>
                            </div>
                            <p>This week sales</p>
                            <h4>1,325 item</h4>
                        </div>
                        <!-- //widget-mini-chart -->

                    </div>
                    <!-- //collapse-boby-->

                </section>
                <!-- //collapse-->
            </div>
            <!-- //widget-collapse-->



            <div class="widget-collapse dark">
                <header>
                    <a data-toggle="collapse" href="#collapseTasks"><i class="collapse-caret fa fa-angle-down"></i> (2) Tasks processing </a>
                </header>
                <section class="collapse" id="collapseTasks">

                    <div class="collapse-boby">

                        <div class="widget-slider">
                            <p>Upload status</p>
                            <div class="progress progress-dark progress-xs tooltip-in">
                                <div class="progress-bar bg-darkorange" aria-valuetransitiongoal="75"></div>
                            </div>
                            <label class="progress-label">Master.zip 4 / 5 </label>
                            <!-- //progress-->

                            <div class="progress progress-dark progress-xs">
                                <div class="progress-bar bg-theme-inverse" aria-valuetransitiongoal="45"></div>
                            </div>
                            <label class="progress-label lasted">Profile 2 / 5 </label>
                            <!-- //progress-->

                        </div>
                        <!-- //widget-slider-->

                    </div>
                    <!-- //collapse-boby-->

                </section>
                <!-- //collapse-->
            </div>
            <!-- //widget-collapse-->



            <div class="widget-collapse dark">
                <header>
                    <a data-toggle="collapse" href="#collapseSetting"><i class="collapse-caret fa fa-angle-up"></i> Setting Option </a>
                </header>
                <section class="collapse in" id="collapseSetting">
                    <div class="collapse-boby" style="padding:0">

                        <ul class="widget-slide-setting">
                            <li>
                                <div class="ios-switch theme pull-right">
                                    <div class="switch"><input type="checkbox" name="option"></div>
                                </div>
                                <label>Switch <span>OFF</span></label>
                                <small>Lorem ipsum dolor sit amet</small>
                            </li>
                            <li>
                                <div class="ios-switch theme-inverse pull-right">
                                    <div class="switch"><input type="checkbox" name="option_1" checked></div>
                                </div>
                                <label>Switch <span>ON</span></label>
                                <small>Lorem ipsum dolor sit amet</small>
                            </li>
                        </ul>
                        <!-- //widget-slide-setting-->

                    </div>
                    <!-- //collapse-boby-->

                </section>
                <!-- //collapse-->
            </div>
            <!-- //widget-collapse-->


        </div>
        <!-- //nav-scroller-->
    </div>
    <!-- //nav-->


    <!--
    /////////////////////////////////////////////////////////////////////////
    //////////     TOP SEARCH CONTENT     ///////
    //////////////////////////////////////////////////////////////////////
    -->
    <div class="widget-top-search">
        <span class="icon"><a href="#" class="close-header-search"><i class="fa fa-times"></i></a></span>
        <form id="top-search">
            <h2><strong>Quick</strong> Search</h2>
            <div class="input-group">
                <input  type="text" name="q" placeholder="Find something..." class="form-control" />
							<span class="input-group-btn">
							<button class="btn" type="button" title="With Sound"><i class="fa fa-microphone"></i></button>
							<button class="btn" type="button" title="Visual Keyboard"><i class="fa fa-keyboard-o"></i></button>
							<button class="btn" type="button" title="Advance Search"><i class="fa fa-th"></i></button>
							</span>
            </div>
        </form>
    </div>
    <!-- //widget-top-search-->

