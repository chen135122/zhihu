@extends('layouts.app')

@section('content')
    @include('vendor.ueditor.assets')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <form action="/questions/{{ $question->id }}" method="post">
                            {{ method_field('PATCH') }}
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="title">标题</label>
                                <input value="{{ $question->title }}" class="form-control" type="text" name="title" placeholder="标题" id="title" required/>
                            </div>
                            <div class="form-group">
                                <select name="topics[]" class="js-example-basic-multiple form-control" multiple="multiple">
                                    @foreach($question->topics as $topic)
                                        <option value="{{ $topic->id }} " selected="selected">{{ $topic->name }}</option>
                                        @endforeach
                                </select>
                            </div>
                            <!-- 编辑器容器 -->
                            <script id="container" name="body" type="text/plain" >{!! $question->body !!}</script>
                            <button class="btn btn-success pull-right" type="submit">发表文章</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container',{
            toolbars: [
                ['bold', 'italic', 'underline', 'strikethrough', 'blockquote', 'insertunorderedlist', 'insertorderedlist', 'justifyleft','justifycenter', 'justifyright',  'link', 'insertimage', 'fullscreen']
            ],
            elementPathEnabled: false,
            enableContextMenu: false,
            autoClearEmptyNode:true,
            wordCount:false,
            imagePopup:false,
            autotypeset:{ indent: true,imageBlockLine: 'center' }
        });
        ue.ready(function() {
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
        });
    </script>
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script>
        function formatTopic (topic) {

            return "<div class='select2-result-repository clearfix'>" +

            "<div class='select2-result-repository__meta'>" +

            "<div class='select2-result-repository__title'>" +

            topic.name ? topic.name : "Laravel"   +

                "</div></div></div>";

        }


        function formatTopicSelection (topic) {

            return topic.name || topic.text;

        }


        $(".js-example-basic-multiple").select2({

            tags: true,

            placeholder: '选择相关话题',

            minimumInputLength: 2,

            ajax: {

                url: '/api/topics',

                dataType: 'json',

                delay: 250,

                data: function (params) {

                    return {

                        q: params.term

                    };

                },

                processResults: function (data, params) {

                    return {

                        results: data

                    };

                },

                cache: true

            },

            templateResult: formatTopic,

            templateSelection: formatTopicSelection,

            escapeMarkup: function (markup) { return markup; }

        });
    </script>


@endsection