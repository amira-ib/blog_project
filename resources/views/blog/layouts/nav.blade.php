<nav class="navbar sticky-top navbar-expand-lg navbar-dark nav-color" style="opacity: 0.9;">

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" style="margin-right: 25px" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 18px">
        <!-- Links -->
        <ul class="navbar-nav navbar-center">
            <li class="nav-item active">
                <a class="nav-link nav_word-spacing" href="{{route('home.index')}}">Главная <span class="sr-only">(current)</span></a>
            </li>
            @foreach($sections as $section)
                <li class="nav-item">
                    <a href="{{route('home.sectionArticles',
                ['section_id' => $section->id,
                'section_name' => $section->name])
                }}" class="nav-link nav_">
                        {{$section->name}}
                    </a>
                </li>
            @endforeach
        </ul>
        <!-- Links -->
    </div>
    <!-- Collapsible content -->
</nav>