<div class="col-md-12">
    <h5>{{$collect->body}}</h5>
    @if(isset($collection[$collect->id]))
        @include('comments.list',['data'=>$collection[$collect->id]])
    @endif
    <hr>
</div>