<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-secondary bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">tasklist</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    <a class="navbar-brand" href="#">{{ Auth::user()->name }}</a>
                    
                       
                    {{--ログアウトへのリンク--}}
                    <li class="nav-item">{!! link_to_route('logout.get','ログアウト',[],['class' => 'nav-link']) !!}</li>
                @else    
                {{--ユーザ登録ページへのリンク--}}
                <li>{!! link_to_route('signup.get','アカウント作成',[],['class' => 'nav-link']) !!}</li>
                {{--ログインページへのリンク--}}
                <li class="nav-item">{!! link_to_route('login','ログイン',[],['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>