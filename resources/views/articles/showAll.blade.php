@extends('layouts.header')
@section('content')
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                @foreach($data as $list )
                    <a href="{{ url('/article/'.$list->id) }}">
                    <div class="row clearfix list_hover" style="margin-top: 20px;padding-bottom: 30px;padding-top: 30px">
                        <div class="col-md-4 column">
                            <img class="img-responsive" alt="140x140" src="{{ $list->cover_img }}" />
                        </div>
                        <div class="col-md-8 column">
                            <h3>
                                {{ $list->title }}
                            </h3> <span class="label label-default">{{ $list->author }}</span>
                            <p style="font-size: 20px">
                                {{ $list->intro }}
                            </p>
                        </div>
                    </div>
                    </a>
                    <hr>
                    @endforeach
            </div>
        </div>
        <div style="text-align: center;margin-top:100px;">
            {{ $data->links() }}
        </div>

    </div>
@stop