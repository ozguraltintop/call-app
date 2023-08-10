@extends('superadmin.app.layout')

@section('content')
    <div class="padding" >
        <div class="row" >
            <div class="col-6 col-md-4">
            </div>
            <div class="col-6 col-md-4" >
                <div class="box" style="background-color:white">
                    <div class="box-tool">
                        <ul class="nav">
                            <li class="nav-item inline dropdown">
                                <a class="nav-link text-muted" data-toggle="dropdown">
                                    <i class="material-icons md-18">&#xe164;</i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-scale pull-right dark">
                                    <a class="dropdown-item" href>Activities</a>
                                    <a class="dropdown-item" href>Feed</a>
                                    <a class="dropdown-item" href>Photo</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">Follow</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="p-a-md text-center">
                        <p><img src="{{asset('assets/images/ozgur.jpg')}}" class="img-circle w-xs" style="width: 150px"></p>
                        <h3>Özgür Altıntop</h3>
                        <p><small>Uygulama Destek Uzmanı</small></p>
                        <div>
                            <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook indigo"></i>
                            </a>
                            <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter light-blue"></i>
                            </a>
                            <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                                <i class="fa fa-google-plus"></i>
                                <i class="fa fa-google-plus red"></i>
                            </a>
                        </div>
                        <div class="text-center m-t">
                            <a href class="btn btn-sm rounded primary w-sm m-y-xs">Mail</a>
                            <a href class="btn btn-sm rounded btn-outline b-primary w-sm">Mesaj</a>
                        </div>
                    </div>
                    <div class="row no-gutter b-t b-b">
                        <div class="col-sm-6 b-r">
                            <a class="p-a block text-center">
                                <span class="block _600">3219</span>
                                <span>Katıldığı Toplantı Sayısı</span>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a class="p-a block text-center">
                                <span class="block _600">4</span>
                                <span>Müsait Gün Sayısı</span>
                            </a>
                        </div>
                    </div>
                    <div class="p-a" align="center">
                        <a href class="text-ellipsis"><i class="fa fa-link text-muted m-r-sm"></i> apack.com/subdomain</a>
                        <a href class="text-ellipsis"><i class="fa fa-globe text-muted m-r-sm"></i> ozguraltintop.com</a>
                    </div>
                </div>
                <div class="box light lt">
                    <div class="box-body">
                        <a href class="pull-left m-r">
                            <img src="{{asset('assets/images/ozgur.jpg')}}" class="img-circle w-40">
                        </a>
                        <div class="clear p-a-xs">
                            <a href>@ozguraltintop</a>
                            <small class="block text-muted"> Dahili : 188</small>
                            <a href class="btn btn-sm btn-rounded white m-t-xs"><i class="fa fa-twitter m-t-xs"></i> Takip</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
