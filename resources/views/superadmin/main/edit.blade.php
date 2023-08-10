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
                    &copy; Copyright <strong>YTU </strong> <span class="hidden-xs-down">- CALL</span>
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
            <div class="row no-gutter">

                <div class="col-sm-9 col-lg-10 light lt">
                    <div class="tab-content pos-rlt">
                        <div class="tab-pane active" id="tab-1">
                            <div class="p-a-md dker _600">Profil Düzenle</div>
                            <form role="form" class="p-a-md col-md-6">
                                <div class="form-group">
                                    <label>Profil Resmi</label>
                                    <div class="form-file">
                                        <input type="file">
                                        <button class="btn white">Yeni Fotoğraf Yükle</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Adı</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Soyadı</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Unvan</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Kullanıcı Adı</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Web Sitesi</label>
                                    <input type="text" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-info m-t">Güncelle</button>
                            </form>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <div class="p-a-md dker _600">Account settings</div>
                            <form role="form" class="p-a-md col-md-6">
                                <div class="form-group">
                                    <label>Client ID</label>
                                    <input type="text" disabled class="form-control" value="d6386c0651d6380745846efe300b9869">
                                </div>
                                <div class="form-group">
                                    <label>Secret Key</label>
                                    <input type="text" disabled class="form-control" value="3f9573e88f65787d86d8a685aeb4bd13">
                                </div>
                                <div class="form-group">
                                    <label>App Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>App URL</label>
                                    <input type="text" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-info m-t">Update</button>
                            </form>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <div class="p-a-md dker _600">Emails</div>
                            <form role="form" class="p-a-md col-md-6">
                                <p>E-mail me whenever</p>
                                <div class="checkbox">
                                    <label class="ui-check">
                                        <input type="checkbox"><i class="dark-white"></i> Anyone posts a comment
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label class="ui-check">
                                        <input type="checkbox"><i class="dark-white"></i> Anyone follow me
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label class="ui-check">
                                        <input type="checkbox"><i class="dark-white"></i> Anyone send me a message
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label class="ui-check">
                                        <input type="checkbox"><i class="dark-white"></i> Anyone invite me to group
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-info m-t">Update</button>
                            </form>
                        </div>
                        <div class="tab-pane" id="tab-4">
                            <div class="p-a-md dker _600">Notifications</div>
                            <form role="form" class="p-a-md col-md-6">
                                <p>Notice me whenever</p>
                                <div class="checkbox">
                                    <label class="ui-check">
                                        <input type="checkbox"><i class="dark-white"></i> Anyone seeing my profile page
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label class="ui-check">
                                        <input type="checkbox"><i class="dark-white"></i> Anyone follow me
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label class="ui-check">
                                        <input type="checkbox"><i class="dark-white"></i> Anyone send me a message
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label class="ui-check">
                                        <input type="checkbox"><i class="dark-white"></i> Anyone invite me to group
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-info m-t">Update</button>
                            </form>
                        </div>
                        <div class="tab-pane" id="tab-5">
                            <div class="p-a-md dker _600">Security</div>
                            <div class="p-a-md">
                                <div class="clearfix m-b-lg">
                                    <form role="form" class="col-md-6 p-a-0">
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>New Password Again</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-info m-t">Update</button>
                                    </form>
                                </div>

                                <p><strong>Delete account?</strong></p>
                                <button type="submit" class="btn btn-danger m-t" data-toggle="modal" data-target="#modal">Delete Account</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- .modal -->
            <div id="modal" class="modal fade animate black-overlay" data-backdrop="false">
                <div class="row-col h-v">
                    <div class="row-cell v-m">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content flip-y">
                                <div class="modal-body text-center">
                                    <p class="p-y m-t"><i class="fa fa-remove text-warning fa-3x"></i></p>
                                    <p>Are you sure to delete your account?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn white p-x-md" data-dismiss="modal">No</button>
                                    <button type="button" class="btn btn-danger p-x-md" data-dismiss="modal">Yes</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- / .modal -->

            <!-- ############ PAGE END-->

        </div>
    </div>
@endsection
