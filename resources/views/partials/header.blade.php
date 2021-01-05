<header ref="header">
    <div class="logo image">
        <img src="{{ asset('image/logo.png') }}" alt="logo">
    </div>
    <nav>
        <ul class="list">

            @foreach ($menu as $element)
                @if ($name == $element['path'])
                    <li class='active'>
                        <a href="{{ route($element['path']) }}">{{ $element['name'] }}</a>
                    </li>
                @else
                    <li>
                        <a href="{{ route($element['path']) }}">{{ $element['name'] }}</a>
                    </li>
                @endif    
            @endforeach

        </ul>
        <div class="mobile-nav">
            <div 
            class="hamburger"
            :class="showMenu ? 'left' : ''" 
            @click="showMenu = !showMenu"
            >
                <i class="fas fa-bars" v-if="!showMenu"></i>
                <i class="fas fa-arrow-up" v-if="showMenu"></i>
            </div>
            <div class="menu-mobile"
            v-if="showMenu" 
            >
                <ul class="mobile-list">

                    @foreach ($menu as $element)
                        @if ($name == $element['path'])
                            <li class='active'>
                                <a href="{{ route($element['path']) }}">{{ $element['name'] }}</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route($element['path']) }}">{{ $element['name'] }}</a>
                            </li>
                        @endif    
                    @endforeach

                </ul>
        
            </div>
        </div>
    </nav>
</header>