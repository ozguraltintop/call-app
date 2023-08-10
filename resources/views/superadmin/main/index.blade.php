@extends('superadmin.app.layout')

@section('content')
    <div id="content" class="app-content box-shadow-z0" role="main">
        <div class="app-header white box-shadow">
            <div class="navbar navbar-toggleable-sm flex-row align-items-center">
                <!-- Open side - Naviation on mobile -->
                <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
                    <i class="material-icons">&#xe5d2;</i>
                </a>
                <!-- / -->

                <!-- Page title - Bind to $state's title -->
                <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>

                <!-- navbar collapse -->
                <div class="collapse navbar-collapse" id="collapse">
                    <!-- link and dropdown -->


                    <div ui-include="'../views/blocks/navbar.form.html'"></div>
                    <!-- / -->
                </div>
                <!-- / navbar collapse -->

                <!-- navbar right -->

            </div>
        </div>
        <div class="app-footer">
            <div class="p-2 text-xs">
                <div class="pull-right text-muted py-1">
                    &copy; Copyright <strong>CALL</strong> <span class="hidden-xs-down"></span>
                    <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
                </div>
                <div class="nav">
                    <a class="nav-link" href="../">About</a>
                    <a class="nav-link" href="http://themeforest.net/user/flatfull/portfolio?ref=flatfull">Get it</a>
                </div>
            </div>
        </div>
        <div ui-view class="app-body" id="view">

            <!-- ############ PAGE START-->
            <div class="p-a white lt box-shadow">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="mb-0 _300">Hoşgeldiniz</h4>
                        <small class="text-muted">YTU <strong>4</strong> Meet Uygulaması</small>
                    </div>

                </div>
            </div>
            <div class="padding">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="box p-a">
                            <div class="pull-left m-r">
	            <span class="w-48 rounded  accent">
	              <i class="material-icons">&#xe151;</i>
	            </span>
                            </div>
                            <div class="clear">
                                <h4 class="m-0 text-lg _300"><a href>125 <span class="text-sm">İstek</span></a></h4>
                                <small class="text-muted">6 kabul edildi.</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4">
                        <div class="box p-a">
                            <div class="pull-left m-r">
	            <span class="w-48 rounded primary">
	              <i class="material-icons">&#xe54f;</i>
	            </span>
                            </div>
                            <div class="clear">
                                <h4 class="m-0 text-lg _300"><a href>40 <span class="text-sm">Gönderildi</span></a></h4>
                                <small class="text-muted">38 kabul edildi.</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4">
                        <div class="box p-a">
                            <div class="pull-left m-r">
	            <span class="w-48 rounded warn">
	              <i class="material-icons">&#xe8d3;</i>
	            </span>
                            </div>
                            <div class="clear">
                                <h4 class="m-0 text-lg _300"><a href>600 <span class="text-sm">Kayıtlı Kullanıcı</span></a></h4>
                                <small class="text-muted">555 vips.</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                     <div class="col-sm-6 col-md-4">
                         <div class="box">
                             <div class="box-header">
                                 <h3>projects monitor</h3>
                                 <small>calculated in last 30 days</small>
                             </div>
                             <div class="box-tool">
                                 <ul class="nav">
                                     <li class="nav-item inline">
                                         <a class="nav-link">
                                             <i class="material-icons md-18">&#xe863;</i>
                                         </a>
                                     </li>
                                     <li class="nav-item inline dropdown">
                                         <a class="nav-link" data-toggle="dropdown">
                                             <i class="material-icons md-18">&#xe5d4;</i>
                                         </a>
                                         <div class="dropdown-menu dropdown-menu-scale pull-right">
                                             <a class="dropdown-item" href>this week</a>
                                             <a class="dropdown-item" href>this month</a>
                                             <a class="dropdown-item" href>this week</a>
                                             <div class="dropdown-divider"></div>
                                             <a class="dropdown-item">today</a>
                                         </div>
                                     </li>
                                 </ul>
                             </div>
                             <div class="box-body">
                                 <div class="text-center m-b">
                                     <div class="btn-group" data-toggle="buttons">
                                         <label class="btn btn-sm white">
                                             <input type="radio" name="options" autocomplete="off"> month
                                         </label>
                                         <label class="btn btn-sm white">
                                             <input type="radio" name="options" autocomplete="off"> day
                                         </label>
                                     </div>
                                 </div>
                                 <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
                   [
                     { data: [[1, 3.6], [2, 3.5], [3, 6], [4, 4], [5, 4.3], [6, 3.5], [7, 3.6]],
                       points: { show: true, radius: 0},
                         splines: { show: true, tension: 0.45, linewidth: 2, fill: 1 }
                     },
                     { data: [[1, 3], [2, 2.6], [3, 3.2], [4, 3], [5, 3.5], [6, 3], [7, 3.5]],
                       points: { show: true, radius: 0},
                         splines: { show: true, tension: 0.45, linewidth: 2, fill: 1 }
                     },
                     { data: [[1, 2], [2, 1.6], [3, 2.4], [4, 2.1], [5, 1.7], [6, 1.5], [7, 1.7]],
                       points: { show: true, radius: 0},
                         splines: { show: true, tension: 0.45, linewidth: 2, fill: 1 }
                     }
                   ],
                   {
                     colors: ['#a88add','#0cc2aa','#fcc100'],
                     series: { shadowsize: 3 },
                     xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
                     yaxis:{ show: true, font: { color: '#ccc' }},
                     grid: { hoverable: true, clickable: true, borderwidth: 0, color: 'rgba(120,120,120,0.5)' },
                     tooltip: true,
                     tooltipopts: { content: '%x.0 is %y.4',  defaulttheme: false, shifts: { x: 0, y: -40 } }
                   }
                 " style="height:188px" >
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-6 col-md-4">
                         <div class="box">
                             <div class="box-header">
                                 <h3>tasks</h3>
                                 <small>calculated in last 7 days</small>
                             </div>
                             <div class="box-tool">
                                 <ul class="nav">
                                     <li class="nav-item inline">
                                         <a class="nav-link">
                                             <i class="material-icons md-18">&#xe863;</i>
                                         </a>
                                     </li>
                                     <li class="nav-item inline dropdown">
                                         <a class="nav-link" data-toggle="dropdown">
                                             <i class="material-icons md-18">&#xe5d4;</i>
                                         </a>
                                         <div class="dropdown-menu dropdown-menu-scale pull-right">
                                             <a class="dropdown-item" href>this week</a>
                                             <a class="dropdown-item" href>this month</a>
                                             <a class="dropdown-item" href>this week</a>
                                             <div class="dropdown-divider"></div>
                                             <a class="dropdown-item">today</a>
                                         </div>
                                     </li>
                                 </ul>
                             </div>
                             <div class="box-body">
                                 <div class="text-center m-b">
                                     <div class="btn-group" data-toggle="buttons">
                                         <label class="btn btn-sm rounded white">
                                             <input type="radio" name="options" autocomplete="off"> this month
                                         </label>
                                         <label class="btn btn-sm rounded white">
                                             <input type="radio" name="options" autocomplete="off"> this week
                                         </label>
                                     </div>
                                 </div>
                                 <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
                   [
                     { data: [[1, 2], [2, 4], [3, 5], [4, 7], [5, 6], [6, 4], [7, 5], [8, 4]] }
                   ],
                   {
                     bars: { show: true, fill: true,  barwidth: 0.25, linewidth: 1, fillcolor: { colors: [{ opacity: 0.8 }, { opacity: 1}] }, align: 'center' },
                     colors: ['#a88add'],
                     series: { shadowsize: 3 },
                     xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
                     yaxis:{ show: true, font: { color: '#ccc' }},
                     grid: { hoverable: true, clickable: true, borderwidth: 0, color: 'rgba(120,120,120,0.5)' },
                     tooltip: true,
                     tooltipopts: { content: '%x.0 is %y.4',  defaulttheme: false, shifts: { x: 0, y: -40 } }
                   }
                 " style="height:188px" >
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-12 col-md-4">
                         <div class="box">
                             <div class="box-header">
                                 <h3>sales</h3>
                                 <small>calculated in last 7 days</small>
                             </div>
                             <div class="box-tool">
                                 <ul class="nav">
                                     <li class="nav-item inline">
                                         <a class="nav-link">
                                             <i class="material-icons md-18">&#xe863;</i>
                                         </a>
                                     </li>
                                     <li class="nav-item inline dropdown">
                                         <a class="nav-link" data-toggle="dropdown">
                                             <i class="material-icons md-18">&#xe5d4;</i>
                                         </a>
                                         <div class="dropdown-menu dropdown-menu-scale pull-right">
                                             <a class="dropdown-item" href>this week</a>
                                             <a class="dropdown-item" href>this month</a>
                                             <a class="dropdown-item" href>this week</a>
                                             <div class="dropdown-divider"></div>
                                             <a class="dropdown-item">today</a>
                                         </div>
                                     </li>
                                 </ul>
                             </div>
                             <div class="box-body">
                                 <div class="text-center m-b">
                                     <div class="btn-group" data-toggle="buttons">
                                         <label class="btn btn-sm rounded white">
                                             <input type="radio" name="options" autocomplete="off"> market
                                         </label>
                                         <label class="btn btn-sm rounded white">
                                             <input type="radio" name="options" autocomplete="off"> referral
                                         </label>
                                     </div>
                                 </div>
                                 <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
                   [
                     { data: [[3, 1], [2, 2], [6, 3], [5, 4], [7, 5]] }
                   ],
                   {
                     bars: { horizontal: true, show: true, fill: true,  barwidth: 0.3, linewidth: 1, fillcolor: { colors: [{ opacity: 0.8 }, { opacity: 1}] }, align: 'center' },
                     colors: ['#0cc2aa'],
                     series: { shadowsize: 3 },
                     xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
                     yaxis:{ show: true, font: { color: '#ccc' }},
                     grid: { hoverable: true, clickable: true, borderwidth: 0, color: 'rgba(120,120,120,0.5)' },
                     tooltip: true,
                     tooltipopts: { content: '%x.0 is %y.4',  defaulttheme: false, shifts: { x: 0, y: -40 } }
                   }
                 " style="height:188px" >
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 -->
            </div>

            <!-- ############ PAGE END-->

        </div>
    </div>
@endsection
