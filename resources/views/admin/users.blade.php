@extends('layouts.master-admin')

@section('content')
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Users Table</h4>
                            </div>
                        </div>


                        <div class="panel">

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="m-b-30">
                                            <button id="addToTable" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered table-striped" id="datatable-editable">
                                    <thead>
                                        <tr>
                                            <!--<th>Cnt</th>-->
                                            <th>User Avatar</th>
                                            <th>User Type</th>
                                            <th>Name</th>
                                            <th>User Name</th>
                                            <th>Password</th>
                                            <th>Email</th>
                                            <th>Result College</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user as $key)
                                      <tr class="gradeX">
                                        <td><img class="avatar" src="../img/uploads/{{$key->avatar}}"></td>
                                        <td>{{$key->userType}}</td>
                                        <td>{{$key->name}}</td>
                                        <td>{{$key->username}}</td>
                                        <td>{{$key->password}}</td>
                                        <td>{{$key->email}}</td>
                                        <td>{{$key->resultCollege}}</td>
                                        <td class="actions">
                                                  <a href="#" data-rel="{{$key->id}}" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                  <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                  <a href="#" data-rel="{{$key->id}}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                  <a href="#" data-rel="{{$key->id}}" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                      </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- end: page -->

                        </div> <!-- end Panel -->

                    </div> <!-- container -->

                </div> <!-- content -->
@endsection
