<nav class="navbar navbar-expand-lg navbar-dark bg-dark" data-v-41458b80="">
    <a href="{{ route('mainPage') }}" class="router-link-active router-link-exact-active navbar-brand" data-v-41458b80="" aria-current="page">
        <img id="logo" src="{{ asset('../images/icon.png') }}" data-v-41458b80="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" data-v-41458b80="">
        <span class="navbar-toggler-icon" data-v-41458b80=""></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" data-v-41458b80="">
        <form class="form-inline ml-auto mr-auto" data-v-41458b80="">
            <div class="input-group" data-v-41458b80=""><input size="100" type="text" class="form-control" placeholder="Поиск" aria-label="Username" aria-describedby="basic-addon1" data-v-41458b80="">
                <div class="input-group-prepend" data-v-41458b80=""><span class="input-group-text" id="search-button-navbar" data-v-41458b80=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" data-v-41458b80=""><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" data-v-41458b80=""></path></svg></span></div></div></form><!--      DropDowns--><ul class="navbar-nav ml-auto" data-v-41458b80="">

            <li class="nav-item dropdown" data-v-41458b80="">
                <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-v-41458b80=""> Мой аккаунт </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" data-v-41458b80="">
                    <a href="{{ route('favourites') }}" class="dropdown-item" data-v-41458b80="">Избранное</a>
                    @guest()
                        <a href="{{ route('login') }}" class="dropdown-item" data-v-41458b80="">Войти</a>
                    @endguest
                    @auth()
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <input style="cursor: pointer" type="submit" value="Выйти" class="dropdown-item" data-v-41458b80="">
                        </form>
                    @endauth
                    <a href="{{ route('register') }}" class="dropdown-item" data-v-41458b80="">Зарегистрироваться</a>
                    <!--v-if--></div></li><li class="nav-item" data-v-41458b80="">
                <a href="{{ route('orders') }}" class="nav-link text-light" data-v-41458b80="">Заказы</a>
            </li>
            <li class="nav-item" data-v-41458b80="">
                <div id="cart" data-v-41458b80="">
                    <span id="nav-cart-count" data-v-41458b80="">0</span>
                    <a href="{{ route('basket') }}" class="text-light" data-v-41458b80="">
                        <i class="fa fa-shopping-cart" data-v-41458b80="" style="font-size: 36px;"></i>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
