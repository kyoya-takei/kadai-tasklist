<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="/">Task List</a>
        
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        @if (Auth::check())
            <div class="collapse navbar-collapse" id="nav-bar">
                <ul class="navbar-nav">
                    <li class="nav-item">{!! link_to_route('tasks.create', 'Add new task', null, ['class' => 'nav-link']) !!}</li>
                </ul>
            </div>
        @else
            <div class="collapse navbar-collapse" id="nav-bar">
                <ul class="navbar-nav">
                    <li class="nav-item">{!! link_to_route('signup.get', 'sign up', null, ['class' => 'nav-link']) !!}</li>
                </ul>
            </div>
        @endif
    </nav>
</header>
