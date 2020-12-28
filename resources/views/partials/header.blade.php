<header>
    <div class="logo image">
        <img src="{{ asset('image/logo.png') }}" alt="logo">
    </div>
    <nav>
        <ul class="list">
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a href="#">Prodotti</a>
            </li>
            <li>
                <a href="{{ route('news') }}">News</a>
            </li>
        </ul>
        <div class="mobile-nav">
            <div 
            class="hamburger" 
            @click="showMenu = !showMenu"
            >
                @{{ saluto }}
            </div>
            <div class="menu-mobile" v-if="showMenu">
                <ul class="mobile-list">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a href="#">Prodotti</a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}">News</a>
                    </li>
                </ul>
        
            </div>
        </div>
    </nav>
</header>