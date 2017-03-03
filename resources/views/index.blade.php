@extends("layout")
@section('title','首页')
@section('content')
<div class="row bg-blk">
    <div class="content">
        <ul class="list-group pd-tp">
            @foreach($titles as $title)
                <li class="list-group-item bg-blk mg-left"><a href="{{url($cat .'/' . $title->id)}}" class="bg-blk" target="_blank">{{$title->title}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
@include('paginate', ['paginator' => $titles])
@endsection