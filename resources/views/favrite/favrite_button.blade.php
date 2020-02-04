@if (Auth::user()->is_favrite($micropost->id))
        {!! Form::open(['route' => ['favrite.delete', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('️お気に入り解除️', ['class' => "btn btn-danger btn-block btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favrite.store', $micropost->id]]) !!}
            {!! Form::submit('お気に入り️', ['class' => "btn btn-primary btn-block btn-sm"]) !!}
        {!! Form::close() !!}
    @endif