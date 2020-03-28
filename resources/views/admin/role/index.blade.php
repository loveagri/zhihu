@extends('admin.layouts.main')

@section('content')

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-10 col-xs-6">
                    <div class="box">

                        <div class="box-header with-border">
                            <h3 class="box-title">Role lists</h3>
                        </div>
                        <a type="button" class="btn " href="/admin/roles/create">Add role</a>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Role name</th>
                                    <th>Role description</th>
                                    <th>operation</th>
                                </tr>
                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{$role->id}}.</td>
                                        <td>{{$role->name}}</td>
                                        <td>{{$role->description}}</td>
                                        <td>
                                            <a type="button" class="btn" href="/admin/roles/{{$role->id}}/permission">Permission Management</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$roles->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content -->
@stop
