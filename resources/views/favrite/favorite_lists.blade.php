<ul class="media-list">
    @foreach ($favoritelists as $favoritelist)
        <li class="media mb-3">
            
            <div class="media-body">
                <div>
                    {!! link_to_route('users.show', $favoritelist->user->name, ['id' => $favoritelist->user->id]) !!} <span class="text-muted">投稿時間 {{ $favoritelist->created_at }}</span>
                </div>
                <div>
                    <p class="mb-0">{!! nl2br(e($favoritelist->content)) !!}</p>
                </div>
                <div>
                    @if (Auth::user()->is_favrite($favoritelist->id))
            {!! Form::open(['route' => ['favrite.delete', $favoritelist->id], 'method' => 'delete']) !!}
            {!! Form::submit('️お気に入り解除️', ['class' => "btn btn-danger btn-block btn-sm"]) !!}
            {!! Form::close() !!}
        @else
            {!! Form::open(['route' => ['favrite.store', $favoritelist->id]]) !!}
            {!! Form::submit('お気に入り️', ['class' => "btn btn-primary btn-block btn-sm"]) !!}
            {!! Form::close() !!}
        @endif
                        
                    
                </div>

            </div>
        </li>
    @endforeach
</ul>
{{ $favoritelists->links('pagination::bootstrap-4') }}