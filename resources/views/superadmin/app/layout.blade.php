<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>YTU | Call App</title>
    <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="{{asset('assets/images/logo.png')}}">
    <meta name="apple-mobile-web-app-title" content="Call">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="{{asset('assets/images/logo.png')}}">

    <!-- style -->
    <link rel="stylesheet" href="{{asset('assets/animate.css/animate.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/glyphicons/glyphicons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/material-design-icons/material-design-icons.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('assets/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css" />
    <!-- build:css ../assets/styles/app.min.css -->
    <link rel="stylesheet" href="{{asset('assets/styles/app.css')}}" type="text/css" />
    <!-- endbuild -->
    <link rel="stylesheet" href="{{asset('assets/styles/font.css')}}" type="text/css" />
</head>
<body>
<div class="app" id="app">

    <!-- ############ LAYOUT START-->

    <!-- aside -->
    <div id="aside" class="app-aside modal nav-dropdown">
        <!-- fluid app aside -->
        <div class="left navside dark dk" data-layout="column">
            <div class="navbar no-radius">
                <!-- brand -->
                <a class="navbar-brand">
                    <div ui-include="'../assets/images/logo.svg'"></div>
                    <img src="../assets/images/logo.png" alt="." class="hide">
                    <span class="hidden-folded inline">YTU Call</span>
                </a>
                <!-- / brand -->
            </div>
            <div class="hide-scroll" data-flex>
                <nav class="scroll nav-light">

                    <ul class="nav" ui-nav>
                        <li class="nav-header hidden-folded">
                            <small class="text-muted">İçerik</small>
                        </li>

                        <li>
                            <a href="{{route('superAdmin')}}" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe3fc;
                        <span ui-include="'../assets/images/i_0.svg'"></span>
                      </i>
                    </span>
                                <span class="nav-text">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                                <span class="nav-label">
                      <b class="label rounded label-sm primary">5</b>
                    </span>
                                <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'../assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                                <span class="nav-text">İstekler</span>
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="{{route('request')}}" >
                                        <span class="nav-text">İstek</span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                                <span class="nav-icon">
                      <i class="material-icons">&#xe8f0;
                        <span ui-include="'../assets/images/i_2.svg'"></span>
                      </i>
                    </span>
                                <span class="nav-text">Profil</span>
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="{{route('profile')}}" >
                                        <span class="nav-text">Görüntüle</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('editProfile')}}" >
                                        <span class="nav-text">Düzenle</span>
                                    </a>
                                </li>
                                <li>

                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{route('')}}" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8d2;
                        <span ui-include="'../assets/images/i_3.svg'"></span>
                      </i>
                    </span>
                                <span class="nav-text">Widgets</span>
                            </a>
                        </li>

                        <li class="nav-header hidden-folded">
                            <small class="text-muted">Components</small>
                        </li>

                        <li>
                            <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                                <span class="nav-label">
                      <b class="label label-sm accent">8</b>
                    </span>
                                <span class="nav-icon">
                      <i class="material-icons">&#xe429;
                        <span ui-include="'../assets/images/i_4.svg'"></span>
                      </i>
                    </span>
                                <span class="nav-text">UI kit</span>
                            </a>
                            <ul class="nav-sub nav-mega nav-mega-3">
                                <li>
                                    <a href="arrow.html" >
                                        <span class="nav-text">Arrow</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="box.html" >
                                        <span class="nav-text">Box</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="button.html" >
                                        <span class="nav-text">Button</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="color.html" >
                                        <span class="nav-text">Color</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="dropdown.html" >
                                        <span class="nav-text">Dropdown</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="grid.html" >
                                        <span class="nav-text">Grid</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="icon.html" >
                                        <span class="nav-text">Icon</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="label.html" >
                                        <span class="nav-text">Label</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="list.html" >
                                        <span class="nav-text">List Group</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="modal.html" >
                                        <span class="nav-text">Modal</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="nav.html" >
                                        <span class="nav-text">Nav</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="progress.html" >
                                        <span class="nav-text">Progress</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="social.html" >
                                        <span class="nav-text">Social</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="sortable.html" >
                                        <span class="nav-text">Sortable</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="streamline.html" >
                                        <span class="nav-text">Streamline</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="timeline.html" >
                                        <span class="nav-text">Timeline</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="map.vector.html" >
                                        <span class="nav-text">Vector Map</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                                <span class="nav-label"><b class="label no-bg">9</b></span>
                                <span class="nav-icon">
                      <i class="material-icons">&#xe3e8;
                        <span ui-include="'../assets/images/i_5.svg'"></span>
                      </i>
                    </span>
                                <span class="nav-text">Pages</span>
                            </a>
                            <ul class="nav-sub nav-mega">
                                <li>
                                    <a href="profile.html" >
                                        <span class="nav-text">Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="setting.html" >
                                        <span class="nav-text">Setting</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="search.html" >
                                        <span class="nav-text">Search</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="faq.html" >
                                        <span class="nav-text">FAQ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="gallery.html" >
                                        <span class="nav-text">Gallery</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="invoice.html" >
                                        <span class="nav-text">Invoice</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="price.html" >
                                        <span class="nav-text">Price</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="blank.html" >
                                        <span class="nav-text">Blank</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="signin.html" >
                                        <span class="nav-text">Sign In</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="signup.html" >
                                        <span class="nav-text">Sign Up</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="forgot-password.html" >
                                        <span class="nav-text">Forgot Password</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="lockme.html" >
                                        <span class="nav-text">Lockme Screen</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="404.html" >
                                        <span class="nav-text">Error 404</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="505.html" >
                                        <span class="nav-text">Error 505</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                                <span class="nav-icon">
                      <i class="material-icons">&#xe39e;
                        <span ui-include="'../assets/images/i_6.svg'"></span>
                      </i>
                    </span>
                                <span class="nav-text">Form</span>
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="form.layout.html" >
                                        <span class="nav-text">Form Layout</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form.element.html" >
                                        <span class="nav-text">Form Element</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form.validation.html" >
                                        <span class="nav-text">Form Validation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form.select.html" >
                                        <span class="nav-text">Select</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form.editor.html" >
                                        <span class="nav-text">Editor</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form.picker.html">
                                        <span class="nav-text">Picker</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form.wizard.html">
                                        <span class="nav-text">Wizard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form.dropzone.html" class="no-ajax" >
                                        <span class="nav-text">File Upload</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                                <span class="nav-icon">
                      <i class="material-icons">&#xe896;
                        <span ui-include="'../assets/images/i_7.svg'"></span>
                      </i>
                    </span>
                                <span class="nav-text">Tables</span>
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="static.html" >
                                        <span class="nav-text">Static table</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="datatable.html" >
                                        <span class="nav-text">Datatable</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="footable.html" >
                                        <span class="nav-text">Footable</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                                <span class="nav-label hidden-folded">
                      <b class="label label-sm info">N</b>
                    </span>
                                <span class="nav-icon">
                      <i class="material-icons">&#xe1b8;
                        <span ui-include="'../assets/images/i_8.svg'"></span>
                      </i>
                    </span>
                                <span class="nav-text">Charts</span>
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="chart.html" >
                                        <span class="nav-text">Chart</span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                        <span class="nav-caret">
                          <i class="fa fa-caret-down"></i>
                        </span>
                                        <span class="nav-text">Echarts</span>
                                    </a>
                                    <ul class="nav-sub">
                                        <li>
                                            <a href="echarts-line.html" >
                                                <span class="nav-text">line</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="echarts-bar.html" >
                                                <span class="nav-text">Bar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="echarts-pie.html" >
                                                <span class="nav-text">Pie</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="echarts-scatter.html" >
                                                <span class="nav-text">Scatter</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="echarts-radar-chord.html" >
                                                <span class="nav-text">Radar &amp; Chord</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="echarts-gauge-funnel.html" >
                                                <span class="nav-text">Gauges &amp; Funnel</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="echarts-map.html" >
                                                <span class="nav-text">Map</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-header hidden-folded">
                            <small class="text-muted">Help</small>
                        </li>

                        <li class="hidden-folded" >
                            <a href="docs.html" >
                                <span class="nav-text">Documents</span>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
            <div class="b-t">
                <div class="nav-fold">
                    <a href="#">
        	    <span class="pull-left">
        	     <!-- <img src="../assets/images/a0.jpg" alt="..." class="w-40 img-circle">-->
        	    </span>
                        <span class="clear hidden-folded p-x">
        	      <span class="block _500">
                      {{$girisBilgi}}

                  </span>
        	      <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>online</small>
        	    </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- / -->

    <!-- content -->
    @yield('content')
    <!-- / -->

    <!-- theme switcher -->

    <!-- / -->

    <!-- ############ LAYOUT END-->

</div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
<script src="{{asset('libs/jquery/jquery/dist/jquery.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('libs/jquery/tether/dist/js/tether.min.js')}}"></script>
<script src="{{asset('libs/jquery/bootstrap/dist/js/bootstrap.js')}}"></script>
<!-- core -->
<script src="{{asset('libs/jquery/underscore/underscore-min.js')}}"></script>
<script src="{{asset('libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js')}}"></script>
<script src="{{asset('libs/jquery/PACE/pace.min.js')}}"></script>

<script src="{{asset('scripts/config.lazyload.js')}}"></script>

<script src="{{asset('scripts/palette.js')}}"></script>
<script src="{{asset('scripts/ui-load.js')}}"></script>
<script src="{{asset('scripts/ui-jp.js')}}"></script>
<script src="{{asset('scripts/ui-include.js')}}"></script>
<script src="{{asset('scripts/ui-device.js')}}"></script>
<script src="{{asset('scripts/ui-form.js')}}"></script>
<script src="{{asset('scripts/ui-nav.js')}}"></script>
<script src="{{asset('scripts/ui-screenfull.js')}}"></script>
<script src="{{asset('scripts/ui-scroll-to.js')}}"></script>
<script src="{{asset('scripts/ui-toggle-class.js')}}"></script>

<script src="{{asset('scripts/app.js')}}"></script>

<!-- ajax -->
<script src="{{asset('libs/jquery/jquery-pjax/jquery.pjax.js')}}"></script>
<script src="{{asset('scripts/ajax.js')}}"></script>
<!-- endbuild -->
</body>
</html>
