<header class="header">
    <div class="container header__container">
        <div>
            @auth

                <div class="user-login"> {{Auth()->user()->name}} </div>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <input type="submit" value="Вихід" class="exit__btn">
                </form>
                
            @endauth
            @guest

                <div class="auth-block">
                    <a href="{{route('login')}}">Вхід</a>    
                    <a href="{{route('register')}}">Реєстрація</a> 
                </div>
                
            @endguest
        </div>
        
        <div class="header__title">Реєстрація на курс</div>
    </div> 
</header>