@extends('manages.index')

@section('content')
    <section class="wrapper">
        <!-- Form validations -->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Chỉnh sửa bài viết
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            {!! Form::model($news, ['url' => 'manages/news/' . $news->news_id , 'method' => 'PUT',
                            'class' => 'form-validate form-horizontal', 'id' => 'selectform', 'files' => 'true']) !!}
                            @include('manages.news.form')
                            {!! Form::close() !!}
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
@endsection
