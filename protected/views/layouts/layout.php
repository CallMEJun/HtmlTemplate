<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="">
    <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
    <meta name="author" content="Huban Creative">
    
    <!-- Base Css Files -->
    <link href="/assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
    <link href="/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/assets/libs/fontello/css/fontello.css" rel="stylesheet" />
    <link href="/assets/libs/animate-css/animate.min.css" rel="stylesheet" />
    <link href="/assets/libs/nifty-modal/css/component.css" rel="stylesheet" />
    <link href="/assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" /> 
    <link href="/assets/libs/ios7-switch/ios7-switch.css" rel="stylesheet" /> 
    <link href="/assets/libs/pace/pace.css" rel="stylesheet" />
    <link href="/assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" />
    <link href="/assets/libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
    <link href="/assets/libs/jquery-icheck/skins/all.css" rel="stylesheet" />
    <!-- Code Highlighter for Demo -->
    <link href="/assets/libs/prettify/github.css" rel="stylesheet" />
    <!-- Extra CSS Libraries Start -->
    <link href="/assets/libs/rickshaw/rickshaw.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/morrischart/morris.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/jquery-clock/clock.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/bootstrap-calendar/css/bic_calendar.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/jquery-weather/simpleweather.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/bootstrap-xeditable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/extra/style.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/jquery-datatables/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/jquery-notifyjs/styles/metro/notify-metro.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/bootstrap-validator/css/bootstrapValidator.min.css" rel="stylesheet" type="text/css" />
    <!-- Extra CSS Libraries End -->
    <link href="/assets/libs/extra/style-responsive.css" rel="stylesheet" />
</head>

<body class='fixed-left'>
    <div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <div class="topbar-left">
                <div class="logo">
                    <h1><a href="#"><img src="/images/yrwork-logo.png" alt="Logo"></a></h1>
                </div>
                <button class="button-menu-mobile open-left">
                <i class="fa fa-bars"></i>
                </button>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-collapse2">
                        <!-- <ul class="nav navbar-nav hidden-xs">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th"></i></a>
                                <div class="dropdown-menu grid-dropdown">
                                    <div class="row stacked">
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="notes-app" data-status="active"><i class="icon-edit"></i>Notes</a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="todo-app" data-status="active"><i class="icon-check"></i>Todo List</a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="calc" data-status="inactive"><i class="fa fa-calculator"></i>Calculator</a>
                                        </div>
                                    </div>
                                    <div class="row stacked">
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="weather-widget" data-status="active"><i class="icon-cloud-3"></i>Weather</a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="calendar-widget2" data-status="active"><i class="icon-calendar"></i>Calendar</a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="stock-app" data-status="inactive"><i class="icon-chart-line"></i>Stocks</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li class="language_bar dropdown hidden-xs">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">English (US) <i class="fa fa-caret-down"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Italian</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </li>
                        </ul> -->
                        <ul class="nav navbar-nav navbar-right top-navbar">
                            <li class="dropdown iconify hide-phone">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span class="label label-danger absolute"></span></a>
                                <!-- <ul class="dropdown-menu dropdown-message">
                                    <li class="dropdown-header notif-header"><i class="icon-bell-2"></i> New Notifications<a class="pull-right" href="#"><i class="fa fa-cog"></i></a></li>
                                    <li class="unread">
                                        <a href="#">
                                            <p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                                                <br /><i>2 minutes ago</i>
                                            </p>
                                        </a>
                                    </li>
                                    <li class="unread">
                                        <a href="#">
                                            <p><strong>John Doe</strong> Created an photo album  <strong>&#34;Fappening&#34;</strong>
                                                <br /><i>8 minutes ago</i>
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p><strong>John Malkovich</strong> Added 3 products
                                                <br /><i>3 hours ago</i>
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p><strong>Sonata Arctica</strong> Send you a message <strong>&#34;Lorem ipsum dolor...&#34;</strong>
                                                <br /><i>12 hours ago</i>
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p><strong>Johnny Depp</strong> Updated his avatar
                                                <br /><i>Yesterday</i>
                                            </p>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <div class="btn-group btn-group-justified">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-sm btn-primary"><i class="icon-ccw-1"></i> Refresh</a>
                                            </div>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-sm btn-danger"><i class="icon-trash-3"></i> Clear All</a>
                                            </div>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-sm btn-success">See All <i class="icon-right-open-2"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul> -->
                            </li>
                            <li class="dropdown iconify hide-phone">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="label label-danger absolute"></span></a>
                                <!-- <ul class="dropdown-menu dropdown-message">
                                    <li class="dropdown-header notif-header"><i class="icon-mail-2"></i> New Messages</li>
                                    <li class="unread">
                                        <a href="#" class="clearfix">
                                            <img src="/images/account-default.png" class="xs-avatar ava-dropdown" alt="Avatar">
                                            <strong>John Doe</strong><i class="pull-right msg-time">5 minutes ago</i><br />
                                            <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                        </a>
                                    </li>
                                    <li class="unread">
                                        <a href="#" class="clearfix">
                                            <img src="/images/account-default.png" class="xs-avatar ava-dropdown" alt="Avatar">
                                            <strong>Sandra Kraken</strong><i class="pull-right msg-time">22 minutes ago</i><br />
                                            <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <img src="/images/account-default.png" class="xs-avatar ava-dropdown" alt="Avatar">
                                            <strong>Zoey Lombardo</strong><i class="pull-right msg-time">41 minutes ago</i><br />
                                            <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer"><div class=""><a href="#" class="btn btn-sm btn-block btn-primary"><i class="fa fa-share"></i> See all messages</a></div></li>
                                </ul> -->
                            </li>
                            <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                            <!-- <li class="dropdown topbar-profile">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src="/images/account-default.png"></span> Jane <strong>Doe</strong> <i class="fa fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">My Profile</a></li>
                                    <li><a href="#">Change Password</a></li>
                                    <li><a href="#">Account Setting</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-help-2"></i> Help</a></li>
                                    <li><a href="lockscreen.html"><i class="icon-lock-1"></i> Lock me</a></li>
                                    <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Logout</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="right-opener">
                                <a href="javascript:;" class="open-right"><i class="fa fa-angle-double-left"></i><i class="fa fa-angle-double-right"></i></a>
                            </li> -->
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->
        <!-- Left Sidebar Start -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
               <!-- Search form -->
                <form role="search" class="navbar-form">
                    <div class="form-group">
                        <input type="text" placeholder="Search" class="form-control">
                        <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                    </div>
                </form>
                <div class="clearfix"></div>
                <!--- Profile -->
                <div class="profile-info">
                    <div class="col-xs-4">
                      <a href="profile.html" class="rounded-image profile-image"><img src="/images/account-default.png"></a>
                    </div>
                    <div class="col-xs-8">
                        <div class="profile-text">Welcome <b><?php echo Yii::app()->user->name?></b></div>
                        <div class="profile-buttons">
                          <!-- <a href="javascript:;"><i class="fa fa-envelope-o pulse"></i></a> -->
                          <!-- <a href="#connect" class="open-right"><i class="fa fa-comments"></i></a> -->
                          <a href="/logout" title="退出登陆"><i class="fa fa-power-off text-red-1"></i></a>
                        </div>
                    </div>
                </div>
                <!--- Divider -->
                <div class="clearfix"></div>
                <hr class="divider" />
                <div class="clearfix"></div>
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>
                        <li class='has_sub'>
                            <a href='/' class="url root">
                                <i class='icon-feather'></i>
                                <span>主页</span>
                            </a>
                        </li>
                        <li class="has_sub has_child">
                            <a href="javascript:void(0);" class="">
                                <i class="icon-users"></i>
                                <span>用户管理</span>
                                <span class="pull-right">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </a>
                            <ul>
                                <li>
                                    <a href='/user/list' class="url">
                                        <span>用户列表</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div></div>
            <div class="clearfix"></div>
            <div class="clearfix"></div><br><br><br>
        </div>
        <!-- Left Sidebar End -->
        
    	<!-- CONTENT -->
        <div class="content-page">
             <div class="content">
            	<section id='content'>
            		<?php echo $content ?>
            	</section>
        </div>
    </div>
    <!-- Modal Logout -->
    <div class="md-modal md-just-me" id="logout-modal">
        <div class="md-content">
            <h3><strong>Logout</strong> Confirmation</h3>
            <div>
                <p class="text-center">Are you sure want to logout from this awesome system?</p>
                <p class="text-center">
                <button class="btn btn-danger md-close">Nope!</button>
                <a href="login.html" class="btn btn-success md-close">Yeah, I'm sure</a>
                </p>
            </div>
        </div>
    </div>        
    <!-- Modal End -->

    <!-- <div class="md-modal md-3d-flip-vertical" id="task-progress">
        <div class="md-content">
            <h3><strong>Task Progress</strong> Information</h3>
            <div>
                <p>CLEANING BUGS</p>
                <div class="progress progress-xs for-modal">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="sr-only">80&#37; Complete</span>
                  </div>
                </div>
                <p>POSTING SOME STUFF</p>
                <div class="progress progress-xs for-modal">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                    <span class="sr-only">65&#37; Complete</span>
                  </div>
                </div>
                <p>BACKUP DATA FROM SERVER</p>
                <div class="progress progress-xs for-modal">
                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                    <span class="sr-only">95&#37; Complete</span>
                  </div>
                </div>
                <p>RE-DESIGNING WEB APPLICATION</p>
                <div class="progress progress-xs for-modal">
                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    <span class="sr-only">100&#37; Complete</span>
                  </div>
                </div>
                <p class="text-center">
                <button class="btn btn-danger btn-sm md-close">Close</button>
                </p>
            </div>
        </div>
    </div> -->
    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/js/libs/jquery/jquery-1.11.1.min.js"></script>
    <script src="/js/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="/js/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>
    <script src="/js/libs/jquery-detectmobile/detect.js"></script>
    <script src="/js/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
    <script src="/js/libs/ios7-switch/ios7.switch.js"></script>
    <script src="/js/libs/fastclick/fastclick.js"></script>
    <script src="/js/libs/jquery-blockui/jquery.blockUI.js"></script>
    <script src="/js/libs/bootstrap-bootbox/bootbox.min.js"></script>
    <script src="/js/libs/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="/js/libs/jquery-sparkline/jquery-sparkline.js"></script>
    <script src="/js/libs/nifty-modal/js/classie.js"></script>
    <script src="/js/libs/nifty-modal/js/modalEffects.js"></script>
    <script src="/js/libs/sortable/sortable.min.js"></script>
    <script src="/js/libs/bootstrap-fileinput/bootstrap.file-input.js"></script>
    <script src="/js/libs/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="/js/libs/bootstrap-select2/select2.min.js"></script>
    <script src="/js/libs/magnific-popup/jquery.magnific-popup.min.js"></script> 
    <script src="/js/libs/pace/pace.min.js"></script>
    <script src="/js/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="/js/libs/jquery-icheck/icheck.min.js"></script>
    <script src="/js/template.js"></script>

    <!-- Demo Specific JS Libraries -->
    <script src="/js/libs/prettify/prettify.js"></script>

    <script src="/js/libs/extra/init.js"></script>
    <!-- Page Specific JS Libraries -->
    <script src="/js/libs/d3/d3.v3.js"></script>
    <script src="/js/libs/rickshaw/rickshaw.min.js"></script>
    <script src="/js/libs/raphael/raphael-min.js"></script>
    <!-- <script src="/js/libs/morrischart/morris.min.js"></script> -->
    <script src="/js/libs/jquery-knob/jquery.knob.js"></script>
    <script src="/js/libs/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/js/libs/jquery-jvectormap/js/jquery-jvectormap-us-aea-en.js"></script>
    <script src="/js/libs/jquery-clock/clock.js"></script>
    <script src="/js/libs/jquery-easypiechart/jquery.easypiechart.min.js"></script>
    <script src="/js/libs/jquery-weather/jquery.simpleWeather-2.6.min.js"></script>
    <script src="/js/libs/bootstrap-xeditable/js/bootstrap-editable.min.js"></script>
    <script src="/js/libs/bootstrap-calendar/js/bic_calendar.min.js"></script>
    <script src="/js/libs/extra/apps/calculator.js"></script>
    <script src="/js/libs/extra/apps/todo.js"></script>
    <script src="/js/libs/extra/apps/notes.js"></script>
    <script src="/js/libs/jquery-datatables/js/jquery.dataTables.min.js"></script>
    <script src="/js/libs/jquery-datatables/js/dataTables.bootstrap.js"></script>
    <script src="/js/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
    <script src="/js/chelper.js"></script>
    <script src="/js/libs/bootstrap-validator/js/bootstrapValidator.min.js"></script>
    <script src="/js/libs/jquery-notifyjs/notify.min.js"></script>
    <script src="/js/libs/jquery-notifyjs/styles/metro/notify-metro.js"></script>
    <script src="/js/libs/extra/pages/notifications.js"></script>
    <!-- <script src="/js/libs/extra/pages/datatables.js"></script> -->
    <!-- <script src="/js/libs/extra/pages/index.js"></script> -->
    <script src="/js/libs/extra/pages/advanced-forms.js"></script>
    <script type="text/javascript">
        $('.md-close').on('click',function(){
            $(this).parents('.md-modal').removeClass('md-show');
        });

        $(function(){
            var url_array = (window.location.href).split('/'),
                url = '';
            url = "/"+url_array[3]+"/"+url_array[4];
            // console.log(url);
            $('#sidebar-menu li a.url').each(function(){
                if(url_array[3] == ''){
                    $('.root').addClass('active');
                } else if($(this).attr('href') == url){
                    console.log($(this).attr('href'));
                    $(this).addClass('active');
                    $(this).parents('ul').siblings('a').addClass('active').addClass('subdrop');
                    $(this).parents('ul').css('display','block');
                    $(this).parents('ul').siblings('a').find('.fa').removeClass('fa-angle-down').addClass('fa-angle-up');
                }
            });

            $('#sidebar-menu .has_sub').each(function(){
                $(this).on('click',function(){
                    if(!$(this).hasClass('has_child')){
                        $(this).children('a').addClass('active');
                        $(this).siblings().children('a').removeClass('active');
                        var uri = $(this).children('a').attr('href');
                        location.href = uri;
                    }
                });
            });
        })
    </script>
</body>
</html>