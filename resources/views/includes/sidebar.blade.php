<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Task</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('task.index')}}">Task</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('task.create')}}">Create Task</a></li>
                </ul>
            </div>

        <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">
                <i class="mdi mdi-account-card-details menu-icon "> </i> <span class="menu-title "> About</span>
            </a>

        </li>

        </li>

    </ul>
</nav>
