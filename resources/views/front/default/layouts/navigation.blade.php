<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">
        <img src="https://www.w3schools.com/bootstrap4/bird.jpg" alt="logo" style="width:40px;">
    </a>

    <!-- Links -->
    <ul class="navbar-nav">
        @foreach ($global_menu as $item)
            <li class="nav-item">
                <a class="nav-link" href="{{ url($item["menu_link"]) }}">{{ $item["title"] }}</a>
            </li>
        @endforeach
    </ul>
</nav>