@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper" style="min-height: 992.67px;">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <!-- Main content -->
            <section class="content">
                <div class="row">


                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">User list</h3>
                                <a href="{{ route('user.add') }}" style="float:right;"
                                    class="btn btn-rounded btn-success mb-5">Add User</a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_length" id="example1_length"><label>Show <select
                                                            name="example1_length" aria-controls="example1"
                                                            class="form-control form-control-sm">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select> entries</label></div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div id="example1_filter" class="dataTables_filter"><label>Search:<input
                                                            type="search" class="form-control form-control-sm"
                                                            placeholder="" aria-controls="example1"></label></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="example1" class="table table-bordered table-striped dataTable"
                                                    role="grid" aria-describedby="example1_info">
                                                    <thead>
                                                        <tr>
                                                            <th width='5%'>sl</th>
                                                            <th>Role</th>
                                                            <th>name</th>
                                                            <th>Email</th>
                                                            <th width='25%'>Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>


                                                        @foreach ($alldata as $key => $user)
                                                            <tr>
                                                                <td>{{ $key + 1 }}</td>
                                                                <td>{{ $user->user_type }}</td>
                                                                <td>{{ $user->name }}</td>
                                                                <td>{{ $user->email }}</td>
                                                                <td>
                                                                    <a href="{{ route('user.edit', $user->id) }}"
                                                                        class="btn btn-success mb-5">edit</a>
                                                                    <a href="{{ route('user.delete', $user->id) }}"
                                                                        class="btn btn-danger mb-5" id="delete">delete</a>
                                                                </td>

                                                            </tr>
                                                        @endforeach

                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="example1_info" role="status"
                                                    aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="example1_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled"
                                                            id="example1_previous"><a href="#" aria-controls="example1"
                                                                data-dt-idx="0" tabindex="0"
                                                                class="page-link">Previous</a></li>
                                                        <li class="paginate_button page-item active"><a href="#"
                                                                aria-controls="example1" data-dt-idx="1" tabindex="0"
                                                                class="page-link">1</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="example1" data-dt-idx="2" tabindex="0"
                                                                class="page-link">2</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="example1" data-dt-idx="3" tabindex="0"
                                                                class="page-link">3</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="example1" data-dt-idx="4" tabindex="0"
                                                                class="page-link">4</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="example1" data-dt-idx="5" tabindex="0"
                                                                class="page-link">5</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="example1" data-dt-idx="6" tabindex="0"
                                                                class="page-link">6</a></li>
                                                        <li class="paginate_button page-item next" id="example1_next"><a
                                                                href="#" aria-controls="example1" data-dt-idx="7"
                                                                tabindex="0" class="page-link">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->


                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->

        </div>
    </div>
@endsection

{{-- steve
admin@gmail.com
$2y$10$YnOLPx1EfZwVQ/.ojZ1Y6O0K.GmEAO/TzTBebo9Q.hml/0FViDBxC
profile-photos/fQfX6ODRdJcfIS2NUujG3cfF7aQktBxh4GafI2VV.jpg --}}
