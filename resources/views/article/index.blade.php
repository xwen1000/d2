@extends('../layouts.app')

@section('content')
<div class="container">
    @foreach($list as $v)
    <div>
        <h2><a href="/articles/{{$v->id}}">{{$v->title}}</a></h2>
        <p>{{$v->description}}</p>
        <p class="p1"><span class="time"> @datetime($v->updated_at) </span></p>
    </div>
    @endforeach
	{{ $list->links() }}
</div>
@endsection
