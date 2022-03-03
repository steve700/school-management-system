@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper" style="min-height: 992.67px;">
        <div class="container-full">
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Edit User</h4>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form action="{{ route('user.update', $editData->id) }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>user role <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="user_type" id="select" required=""
                                                                class="form-control">
                                                                <option value="" selected="" disabled="">Select role
                                                                </option>
                                                                <option value="admin"
                                                                    {{ $editData->user_type == 'admin' ? 'selected' : '' }}>
                                                                    admin</option>
                                                                <option value="user"
                                                                    {{ $editData->user_type == 'user' ? 'selected' : '' }}>
                                                                    user</option>

                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>User Name <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control"
                                                                required="" value="{{ $editData->name }}">

                                                        </div>

                                                    </div>
                                                </div>
                                            </div> {{-- //end of rowww --}}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>User Email <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control"
                                                                required="" value="{{ $editData->email }}">

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">

                                                </div>
                                            </div> {{-- //end of rowww --}}



                                        </div>
                                    </div>

                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-info mb5" value="update">
                                    </div>
                                </form>

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </section>
        </div>
    </div>
@endsection
