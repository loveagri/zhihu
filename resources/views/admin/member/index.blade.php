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
                            <h3 class="box-title">Member lists</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Member</th>
                                    <th>operation</th>
                                </tr>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-default post-audit"
                                                    post-id="{{$post->id}}" post-action-status="1">Pass
                                            </button>
                                            <button type="button" class="btn btn-block btn-default post-audit"
                                                    post-id="{{$post->id}}" post-action-status="-1">Reject
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                            {{$posts->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@stop
