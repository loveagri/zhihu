@extends('admin.layouts.main')

@section('content')

    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-10 col-xs-6">
                    <div class="box">

                        <div class="box-header with-border">
                            <h3 class="box-title">Permission lists</h3>
                        </div>
                        <a type="button" class="btn " href="/admin/permissions/create" >add permission</a>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tbody><tr>
                                    <th style="width: 10px">#</th>
                                    <th>permission name</th>
                                    <th>description</th>
                                    <th>operation</th>
                                </tr>
                                @foreach($permissions as $permission)
                                    <tr>
                                        <td>{{$permission->id}}.</td>
                                        <td>{{$permission->name}}</td>
                                        <td>{{$permission->description}}</td>
                                        <td>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$permissions->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@stop
