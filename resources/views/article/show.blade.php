@extends('../layouts.app')

@section('content')
<div class="container">
        <h2>{{$data->title}}</h2>
        <p>{{$data->description}}</p>
        <p class="p1"><span class="time"> @datetime($data->updated_at) </span></p>
        <div class="content">
        	{!!$data->content!!}
        </div>
    </div>
</div>
@endsection
