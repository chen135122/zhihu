@extends('layouts.header')
@section('content')
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                    <h3>
                        {{ $data->title }}
                    </h3>
                    <p>
                        <a class="btn btn-primary btn-large" href="#">{{ $data->author }}</a>
                    </p>
                <img alt="140x140" src="{{ $data->cover_img }}" />
                    <p>
                        {{ $data->intro }}
                    </p>
                    <div class="jumbotron">
                        <p>
                            {{ $data->body }}
                        </p>

                    </div>
            </div>
        </div>
        <div style="text-align: center;margin-top:100px;">
        </div>

    </div>
@stop