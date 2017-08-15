@foreach($data as $list)
    @include('comments.comment',['collect'=>$list])
@endforeach