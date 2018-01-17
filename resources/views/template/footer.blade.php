<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="about widget clearfix">
                    <div class="logo-wrap text-center">
                        <img src="{{asset('img/logo-AMPBCA.png')}}" alt="Logo" class="footer-logo"/>
                    </div>
                    <p>A Associação de Moradores e Proprietários do bairro Chácara das Andorinhas é uma entidade civil de direito privado sem fins lucrativos, fundada em 07 de abril de 2003, com sede provisória a Rua H, 90, criada em especial para organizar  e manter as areas de uso comum, disciplinar a construção, ocupação e uso do solo do loteamento com vistas transformá-lo em "condomínio fechado" conforme dispõe o nosso Estatuto.</p>
                    <div class="social-media-icons">
                        <a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                        <a href="#"><i class="fa fa-google-plus"></i><span>Google +</span></a>
                        <a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                        <a href="#"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                        <a href="#"><i class="fa fa-skype"></i><span>Skype</span></a>

                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-12 ">
                <div class="quick-links widget clearfix">
                    <h4 class="title">Links Úteis</h4>
                    <div class="links">
                        <a href="{{ route('home') }}"><i class="fa fa-angle-double-right"></i>Home</a>
                        <a href="{{ route('serviceworkers') }}"><i class="fa fa-angle-double-right"></i>Prestadores de Serviço</a>
                        <a href="{{ route('laws') }}"><i class="fa fa-angle-double-right"></i>Legislação</a>
                        <a href="{{ route('calendar') }}"><i class="fa fa-angle-double-right"></i>Calendário</a>
                        <a href="{{ route('contactus') }}"><i class="fa fa-angle-double-right"></i>Contate-nos</a>
                        <a href="{{ route('blog') }}"><i class="fa fa-angle-double-right"></i>Notícias</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="subcribe widget clearfix">
                    <h4 class="title">Se Inscreva!</h4>
                    <p>Cadastre seu email para receber novidades e informações da associação</p>
                    <form action="#">
                        <div class="field">
                            <input type="email" name="e-mail" placeholder="Seu E-mail">
                        </div>
                        <div class="field">
                            <button class="btn btn-min btn-solid"><span>Inscreva</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bar">
        <div class="container">
            <h5>Copyright ©2018 Associação de Moradores e Proprietários do Bairro Chácara das Andorinhas. Todos os direitos reservados</h5>
        </div>
    </div>
</footer>