@extends('./layouts/admin')

@section('header')
    <title>User Info</title>
@endsection

@section('logo')
    <a class="navbar-brand navbar-brand-center" href="index-2.html">
        <img class="navbar-brand-logo" src="../img/logo-inverse.svg" alt="Elephant">
    </a>
@endsection

@section('user_icon')
    <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
        <img class="rounded" width="36" height="36" src="../img/0180441436.jpg" alt="Teddy Wilson"> Teddy Wilson
        <span class="caret"></span>
    </button>
@endsection

@section('content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="icon icon-th-large" style="color:#d9230f"></span>
            <span class="d-ib">User Management</span>
        </h1>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="demo-dynamic-tables-2" class="table table-middle nowrap">
                            <thead>
                            <tr>
                                <th>
                                    <label class="custom-control custom-control-primary custom-checkbox">
                                        <input class="custom-control-input" type="checkbox">
                                        <span class="custom-control-indicator"></span>
                                    </label>
                                </th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Date Of Birth</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <label class="custom-control custom-control-primary custom-checkbox">
                                        <input class="custom-control-input" type="checkbox">
                                        <span class="custom-control-indicator"></span>
                                    </label>
                                </td>
                                <td data-order="Bunthorn-KH">
                                <span class="icon-with-child m-r">
                                    <img class="circle" width="36" height="36" src="../../img/2079247459.jpg" alt="Bunthorn-KH">
                                    <span class="icon-child bg-facebook circle sq-8"></span>
                                </span>
                                    <strong>Bunthorn-KH</strong>
                                </td>
                                <td class="maw-320">
                                    <span class="truncate">bunthorn_kh@kbtgroup.com</span>
                                </td>
                                <td>Male</td>
                                <td>15-Feb-2016</td>
                                <td data-order="1">
                                    <span class="label label-info label-pill">Admin</span>
                                </td>
                                <td data-order="1">
                                    <span class="label label-info label-pill">Active</span>
                                </td>
                                <td>
                                    <div class="btn-group pull-right dropdown">
                                        <button class="btn btn-link link-muted" aria-haspopup="true" data-toggle="dropdown" type="button">
                                            <span class="icon icon-ellipsis-h icon-lg icon-fw"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="#"><span class="icon icon-sticky-note"></span> User Detail</a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="icon icon-edit"></span> Edit User</a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="icon icon-trash"></span> Delete User</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="custom-control custom-control-primary custom-checkbox">
                                        <input class="custom-control-input" type="checkbox">
                                        <span class="custom-control-indicator"></span>
                                    </label>
                                </td>
                                <td data-order="Ly Bopha">
                                <span class="icon-with-child m-r">
                                    <img class="circle" width="36" height="36" src="../../img/1099386850.jpg" alt="Ly Bopha">
                                    <span class="icon-child bg-warning circle sq-8"></span>
                                </span>
                                    <strong>Ly Bopha</strong>
                                </td>
                                <td class="maw-320">
                                    <span class="truncate">bopha_ly@kbtgroup.com</span>
                                </td>
                                <td>Female</td>
                                <td>01-Feb-2000</td>
                                <td data-order="1">
                                    <span class="label label-default label-pill">Guest</span>
                                </td>
                                <td data-order="1">
                                    <span class="label label-info label-pill">Active</span>
                                </td>
                                <td>
                                    <div class="btn-group pull-right dropdown">
                                        <button class="btn btn-link link-muted" aria-haspopup="true" data-toggle="dropdown" type="button">
                                            <span class="icon icon-ellipsis-h icon-lg icon-fw"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="#"><span class="icon icon-sticky-note"></span> User Detail</a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="icon icon-edit"></span> Edit User</a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="icon icon-trash"></span> Delete User</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @for($i=0; $i < 18; $i++)
                            <tr>
                                <td>
                                    <label class="custom-control custom-control-primary custom-checkbox">
                                        <input class="custom-control-input" type="checkbox">
                                        <span class="custom-control-indicator"></span>
                                    </label>
                                </td>
                                <td data-order="Ly Bopha">
                                <span class="icon-with-child m-r">
                                    <img class="circle" width="36" height="36" src="../../img/1099386850.jpg" alt="Ly Bopha">
                                    <span class="icon-child bg-warning circle sq-8"></span>
                                </span>
                                    <strong>Ly Bopha</strong>
                                </td>
                                <td class="maw-320">
                                    <span class="truncate">bopha_ly@kbtgroup.com</span>
                                </td>
                                <td>Female</td>
                                <td>01-Feb-2000</td>
                                <td data-order="1">
                                    <span class="label label-default label-pill">Guest</span>
                                </td>
                                <td data-order="1">
                                    <span class="label label-danger label-pill">Disable</span>
                                </td>
                                <td>
                                    <div class="btn-group pull-right dropdown">
                                        <button class="btn btn-link link-muted" aria-haspopup="true" data-toggle="dropdown" type="button">
                                            <span class="icon icon-ellipsis-h icon-lg icon-fw"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="/admin/user/1"><span class="icon icon-sticky-note"></span> User Detail</a>
                                            </li>
                                            <li>
                                                <a href="/admin/user/1/edit"><span class="icon icon-edit"></span> Edit User</a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="icon icon-trash"></span> Delete User</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')

@endsection