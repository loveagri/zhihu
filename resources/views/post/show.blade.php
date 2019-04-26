@extends('layouts.main')

@section('content')
    <div class="col-sm-8 blog-main mt-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <h2>你好好</h2>
                    <a  href="/posts/edit">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <a  href="/posts/edit">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
                <small>Dapibus ac facilisis in</small>
                <p>
                    Laravel是PHP工程化开发的趋势，本课程使用大量Laravel基础及高级组件，结合Mysql异步消息队列、ElasticSearch搜索引擎、Debugbar调试利器、Laravel性能优化等技术开发前后台完整的社交网站“简书”
                </p>
                <button class="btn btn-primary">赞</button>
            </div>
        </div>
    </div>
@stop
