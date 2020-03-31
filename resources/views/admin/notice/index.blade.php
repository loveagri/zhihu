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
                            <h3 class="box-title">Notice lists</h3>
                        </div>
                        <a type="button" class="btn " href="/admin/notices/create">Add notice</a>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tbody><tr>
                                    <th style="width: 10px">#</th>
                                    <th>Notice name</th>
                                    <th>operation</th>
                                </tr>
                               @foreach ($notices as $key => $notice)
                                   <tr>
                                       <td>{{$key+1}}</td>
                                       <td>{{$notice->title}}</td>
                                       <td>{!! str_limit($notice->content,100,'...') !!}</td>
                                   </tr>
                               @endforeach

                                </tbody>
                            </table>
                            {{$notices->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@stop
