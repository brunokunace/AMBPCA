<header>
    <nav class="navigation">
        <div class="container">
            <div class="row">
                <div class="logo-wrap col-md-1 col-xs-6">
                    <a href="#">AMPBCA</a>
                </div>
                <div class="menu-wrap col-md-11 col-xs-6 ">
                    <ul class="menu">
                        <li class="{{ active('home') }}">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <span>AMPBCA</span>
                            <ul class="submenu">
                                <li><a href="#">Cadastre-se</a></li>
                                <li><a href="#">Sugestões</a></li>
                                <li><a href="#">Depoimentos</a></li>
                                <li><a href="#">Associados</a></li>
                            </ul>
                        </li>
                        <li class="{{ active('serviceworkers') }}">
                            <a href="{{ route('serviceworkers') }}">Prestadores de Serviços</a>
                        </li>
                        <li class="{{ active('laws') }}">
                            <a href="{{ route('laws') }}">Legislação</a>
                        </li>
                        <li class="{{ active('calendar') }}">
                            <a href="{{ route('calendar') }}">Calendário</a>
                        </li>
                        <li class="{{ active('contactus') }}">
                            <a href="{{ route('contactus') }}">Contate-nos</a>
                        </li>
                        <li class="{{ active('blog') }}">
                            <a href="{{ route('blog') }}">Notícias</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--[ MOBILE-MENU-AREA START ]-->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="mobile-area">
                            <div class="mobile-menu">
                                <nav id="mobile-nav">
                                    <ul>
                                        <li class="{{ active('home') }}">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li><a href="#">AMPBCA</a>
                                            <ul>
                                                <li><a href="#">Cadastre-se</a></li>
                                                <li><a href="#">Sugestões</a></li>
                                                <li><a href="#">Depoimentos</a></li>
                                                <li><a href="#">Associados</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Prestadores de Serviço</a>
                                        </li>
                                        <li>
                                            <a href="#">Legislação</a>
                                        </li>
                                        <li>
                                            <a href="#">Calendário</a>
                                        </li>
                                        <li class="{{ active('contactus') }}">
                                            <a href="{{ route('contactus') }}">Contate-nos</a>
                                        </li>
                                        <li class="{{ active('blog') }}">
                                            <a href="{{ route('blog') }}">Notícias</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--[ MOBILE-MENU-AREA END  ]-->
    </nav>

</header>