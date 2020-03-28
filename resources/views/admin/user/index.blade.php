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
                            <h3 class="box-title">user list</h3>
                        </div>
                        <a type="button" class="btn " href="/admin/users/create" >add user</a>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tbody><tr>
                                    <th style="width: 10px">#</th>
                                    <th>用户名称</th>
                                    <th>操作</th>
                                </tr>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}.</td>
                                    <td>{{$user->name}}</td>
                                    <td>
                                        <a type="button" class="btn" href="/admin/users/{{$user->id}}/role" >Role management</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$users->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content -->
@stop
