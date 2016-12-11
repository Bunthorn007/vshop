@extends('layouts/admin')

@section('header')
    <title>Create User</title>
@endsection

@section('logo')
    <a class="navbar-brand navbar-brand-center" href="index-2.html">
        <img class="navbar-brand-logo" src="../../img/logo-inverse.svg" alt="Elephant">
    </a>
@endsection

@section('user_icon')
    <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
        <img class="rounded" width="36" height="36" src="../../img/0180441436.jpg" alt="Teddy Wilson"> Teddy Wilson
        <span class="caret"></span>
    </button>
@endsection

@section('content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="icon icon-trash" style="color:#d9230f"></span>
            <span class="d-ib">Trash</span>
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
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
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
                                        <button class="btn-xs btn-outline-primary btn-pill" type="button">Delete</button>
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