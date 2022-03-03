@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper" style="min-height: 992.67px;">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <!-- Main content -->
            <section class="content">
                <div class="row">


                    <div class="col-12">

                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-black"
                                style="background: url('../images/gallery/full/10.jpg') center center;">
                                <h3 class="widget-user-username">User Name:{{ $user->name }}</h3>

                                <a href="{{ route('profile.edit') }}" style="float:right;"
                                    class="btn btn-rounded btn-success mb-5">Edit Profile</a>
                                <h4 class="widget-user-desc">User role:{{ $user->user_type }}</h4>

                            </div>
                            <div class="widget-user-image">
                                <img class="rounded-circle"
                                    src="{{ !empty($user->image) ? url('upload/user_images/' . $user->image) : url('upload/no_image.jpg') }}"
                                    alt="User Avatar">
                            </div>
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">mobile no</h5>
                                            <span class="description-text">{{ $user->mobile }}</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 br-1 bl-1">
                                        <div class="description-block">
                                            <h5 class="description-header">Address</h5>
                                            <span class="description-text">{{ $user->address }}</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">Gender</h5>
                                            <span class="description-text">{{ $user->gender }}</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
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
