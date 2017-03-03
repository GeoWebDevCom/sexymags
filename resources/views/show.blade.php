@extends("layout")
@section("title","草榴综合")
@section('content')
    <div class="row bg-blk">
        <div class="content">
            <ul class="list-group pd-tp">
                <h3 style="text-align: center">{{$title}}</h3>
                @foreach($pics as $pic)
                    <li class="list-group-item bg-blk mg-left"><img src="{{$pic->url}}" width="100%"> </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endsection