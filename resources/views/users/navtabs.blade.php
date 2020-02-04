<ul class="nav nav-tabs nav-justified mb-3">
    <li class="nav-item"><a href="{{ route('users.show', ['id' => $user->id]) }}" class="nav-link {{ Request::is('users/' . $user->id) ? 'active' : '' }}">タイムライン <span class="badge badge-secondary">{{ $count_microposts }}</span></a></li>
    <li class="nav-item"><a href="{{ route('users.followings', ['id' => $user->id]) }}" class="nav-link {{ Request::is('users/*/followings') ? 'active' : '' }}">フォロー <span class="badge badge-secondary">{{ $count_followings }}</span></a></li>
    <li class="nav-item"><a href="{{ route('users.followers', ['id' => $user->id]) }}" class="nav-link {{ Request::is('users/*/followers') ? 'active' : '' }}">フォロワー <span class="badge badge-secondary">{{ $count_followers }}</span></a></li>
  <li class="nav-item"><a href="{{ route('favrite.show', ['id' => $user->id]) }}" class="nav-link {{ Request::is('favrite/' . $user->id) ? 'active' : '' }}">お気に入り <span class="badge badge-secondary">{{$count_Favorite_users}}</span></a></li>

</ul>