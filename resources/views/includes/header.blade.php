<header>
    <div class="header">
        <div class="container sup-container">
            <div class="logo">
                <a href="/">
                    <img loading="lazy" src="{{ asset('assets/img/logo.svg') }}" alt="">
                </a>
            </div>
            <div class="sup-menu">
                @foreach(Menu::getByName('Login') as $login)
                <div class="login {{ $login['class'] }}">
                    <div class="button">
                        <a class="btn btn-login" href="{{ $login['link'] }}">
                          <span>{{ $login['label'] }}</span>
                        </a>
                    </div>
                </div>
                @endforeach
                <div class="request">
                    <div class="button">
                        <a class="btn btn-request" href="/about#formSubmitTitle">
                          <span>Request Price</span>
                        </a>
                    </div>
                </div>
                <div class="mob-menu">
                    <a href="#" class="menu"><img loading="lazy" src="{{ asset('assets/img/menu.svg') }}" alt=""></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="main-menu">
                <nav>
                    <ul class="list-menu topmenu">
                    @foreach(Menu::getByName('Main Menu') as $menu)
                        <li class="category-item-wrapper list-item-menu">
                            <a href="{{ $menu['link'] }}" title="">{{ $menu['label'] }}</a>
                            @if( $menu['child'] )
                            <ul class="submenu">
                                @foreach( $menu['child'] as $child )
                                    <li class="category-item-wrapper list-item-menu"><a href="{{ $child['link'] }}" title="">{{ $child['label'] }}</a></li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                    @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<div id="menu">
    <div class="title"><a class="close" href="#">&#215;</a></div>
    <nav>
        <ul class="list-menu topmenu">
        @foreach(Menu::getByName('Main Menu') as $menu)
            <li class="category-item-wrapper list-item-menu">
                @if( $menu['child'] )
                    <a href="{{ $menu['link'] }}" title="" class="flex-link">{{ $menu['label'] }} <img loading="lazy" src="{{ asset('assets/img/arrow.svg') }}" alt=""></a>
                @else
                    <a href="{{ $menu['link'] }}" title="">{{ $menu['label'] }}</a>
                @endif
                @if( $menu['child'] )
                <ul class="submenu">
                    @foreach( $menu['child'] as $child )
                        <li class="category-item-wrapper list-item-menu"><a href="{{ $child['link'] }}" title="">{{ $child['label'] }}</a></li>
                    @endforeach
                </ul>
                @endif
            </li>
        @endforeach
        </ul>
    </nav>
</div>