@extends('superadmin.app.layout')

@section('content')


    <!-- content -->
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
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href data-toggle="dropdown">
                                <i class="fa fa-fw fa-plus text-muted"></i>
                                <span>New</span>
                            </a>
                            <div ui-include="'../views/blocks/dropdown.new.html'"></div>
                        </li>
                    </ul>

                    <div ui-include="'../views/blocks/navbar.form.html'"></div>
                    <!-- / -->
                </div>
                <!-- / navbar collapse -->

                <!-- navbar right -->
                <ul class="nav navbar-nav ml-auto flex-row">
                    <li class="nav-item dropdown pos-stc-xs">
                        <a class="nav-link mr-2" href data-toggle="dropdown">
                            <i class="material-icons">&#xe7f5;</i>
                            <span class="label label-sm up warn">3</span>
                        </a>
                        <div ui-include="'../views/blocks/dropdown.notification.html'"></div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link p-0 clear" href="#" data-toggle="dropdown">
                  <span class="avatar w-32">
                    <img src="../assets/images/a0.jpg" alt="...">
                    <i class="on b-white bottom"></i>
                  </span>
                        </a>
                        <div ui-include="'../views/blocks/dropdown.user.html'"></div>
                    </li>
                    <li class="nav-item hidden-md-up">
                        <a class="nav-link pl-2" data-toggle="collapse" data-target="#collapse">
                            <i class="material-icons">&#xe5d4;</i>
                        </a>
                    </li>
                </ul>
                <!-- / navbar right -->
            </div>
        </div>
        <div class="app-footer">
            <div class="p-2 text-xs">
                <div class="pull-right text-muted py-1">
                    &copy; Copyright <strong>Flatkit</strong> <span class="hidden-xs-down">- Built with Love v1.1.3</span>
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
            <div class="padding">
                <div class="box">
                    <div class="box-header">
                        <h2>Toplantı İstekleri</h2>
                        <small>Toplantı istekleri listesi</small>
                    </div>
                    <div class="box-body">
                        Arama: <input id="filter" type="text" class="form-control input-sm w-auto inline m-r"/>
                    </div>
                    <div>
                        <table class="table m-b-none" ui-jp="footable" data-filter="#filter" data-page-size="5">
                            <thead>
                            <tr>
                                <th data-toggle="true">
                                  İsim
                                </th>
                                <th>
                                    Soyisim
                                </th>
                                <th data-hide="phone,tablet">
                                   Ünvan
                                </th>
                                <th data-hide="phone,tablet" data-name="Date Of Birth">
                                    Tarih
                                </th>
                                <th data-hide="phone">
                                    Durum
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Kaan</td>
                                <td><a href>Yılmaz</a></td>
                                <td>Mühendis</td>
                                <td data-value="78025368997">22 Haziran 2023</td>
                                <td data-value="1"><span class="label success" title="Active">Onaylandı</span></td>
                            </tr>
                            <tr>
                                <td>Batuhan</td>
                                <td><a href>Yanar</a></td>
                                <td>Mühendis</td>
                                <td data-value="78025368997">22 Haziran 2023</td>
                                <td data-value="1"><span class="label success" title="Disabled">Bekleniyor</span></td>
                            </tr>
                            <tr>
                                <td>Adem</td>
                                <td>Can</td>
                                <td>Mühendis</td>
                                <td data-value="-22133780420">19 Haziran 1969</td>
                                <td data-value="3"><span class="label warning" title="Suspended">Reddedildi</span>
                                </td>
                            </tr>

                            </tbody>
                            <tfoot class="hide-if-no-paging">
                            <tr>
                                <td colspan="5" class="text-center">
                                    <ul class="pagination"></ul>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <!-- ############ PAGE END-->

        </div>
    </div>
    <!-- / -->

@endsection
