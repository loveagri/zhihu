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
                            <h3 class="box-title">Topic lists</h3>
                        </div>
                        <a type="button" class="btn " href="/admin/topics/create" >add topic</a>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tbody><tr>
                                    <th style="width: 10px">#</th>
                                    <th>Topic name</th>
                                    <th>operation</th>
                                </tr>
                                @foreach ($topics as $topic)
                                    <tr>
                                        <td>{{$topic->id}}</td>
                                        <td>{{$topic->name}}</td>
                                        <td>
                                            <a type="button" class="btn resource-delete" delete-url="/admin/topics/{{$topic->id}}" href="javascript:;" >Delete</a>
                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@stop
