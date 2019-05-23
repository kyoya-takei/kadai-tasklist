<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        @if (Auth::check())
            <a class="navbar-brand" href="/tasks">Task List</a>
        @else
            <a class="navbar-brand" href="/">Task List</a>
        @endif
        
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        @if (Auth::check())
            <div class="collapse navbar-collapse" id="nav-bar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">{!! link_to_route('tasks.create', 'Add new task', null, ['class' => 'nav-link']) !!}</li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name}}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'Logout', [], ['class' => 'nav-link']) !!}</li>
                        </ul>
                    </li>
                </ul>
            </div>
        @else
            <div class="collapse navbar-collapse" id="nav-bar">
                <ul class="navbar-nav mr-auto"></ul>
                <ul class="navbar-nav">
                    <li class="nav-item">{!! link_to_route('signup.get', 'sign up', null, ['class' => 'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('login.get', 'Login', [], ['class' => 'nav-link']) !!}</li>
                </ul>
            </div>
        @endif
    </nav>
</header>
