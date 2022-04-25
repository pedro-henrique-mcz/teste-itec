@extends('layout.main')

@section('title', 'Seplag')
 
@section('content')
    <section class="banner">
        <div class="container-banner">
            <div id="imageBg">
                <h1 class="title-banner" >Novas salas disponíveis</h1>
            </div>
            <div class="anterior" onclick="anterior()"><</div>
            <div class="proximo" onclick="proximo()">></div>
        </div>
    </section>
    <section class="blog container">
        <h2>Notícias</h2>
        <ul class="noticias">
            <li>
                <div class="card">
                    <img  class="card-img" src="assents/imgs/cards/card-teste.png" alt="notícias">
                    <div class="card-content">
                        <div class="card-info">
                            <img src="assents/icons/cards/today.png" alt="data"> 
                            <p>26/06/2021</p>
                            <img src="assents/icons/cards/watch_later.png" alt="hora">
                            <p>9:50</p>
                            <ul class="temas-lista">
                                <li>Tema</li>
                                <li>Tema</li>
                            </ul>
                        </div>
                        <h3 class="card-text">Governo do estado irá destinar 250 mil cestas básicas para familais alagoanas</h3>
                        <a href="saibamais">Leia mais</a>
                    </div>
                </div>
            </li>
            @foreach ($notice as $notices)
                <li>
                    <div class="card">
                        <img  class="card-img" src="assents/imgs/notices/{{$notices->image}}" alt="notícias">
                        <div class="card-content">
                            <div class="card-info">
                                <img src="assents/icons/cards/today.png" alt="data"> 
                                <p>26/06/2021</p>
                                <img src="assents/icons/cards/watch_later.png" alt="hora">
                                <p>9:50</p>
                                <ul class="temas-lista">
                                    <li>{{$notices->tema1}}</li>
                                    <li>{{$notices->tema2}}</li>
                                </ul>
                            </div>
                            <h3 class="card-text">{{$notices->title}}</h3>
                            <a href="saibamais">Leia mais</a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        <a href="/notice/create" class="create">+ notícias</a>
    </section>
    <section class="services">
        <div class="container">
            <h2>serviços</h2>
            <ul class="service-list">
                <li>
                    <img src="assents/icons/servicos/telefonia.png" alt="telefone">
                    <a href="">Telefones Úteis</a>
                </li>
                <li>
                    <img src="assents/icons/servicos/duvidas.png" alt="interrogação">
                    <a href="">Dúvidas Frequentes</a>
                </li>
                <li>
                    <img src="assents/icons/servicos/chat.png" alt="">
                    <a href="">Fale com SEDEASE</a>
                </li>
                <li>
                    <img src="assents/icons/servicos/papel.png" alt="telefone">
                    <a href="">Agência Alagoana</a>
                </li>
            </ul>
        </div>
    </section>
    <section class="midias">
        <div class="container">
            <h2>Siga a gente</h2>
            <ul>
                <li>
                    <a href=""><img src="/assents/icons/midias/face.png" alt="facebook"></a>
                </li>
                <li>
                    <a href=""><img src="/assents/icons/midias/insta.svg" alt=""></a>
                </li>
                <li>
                    <a href=""><img src="/assents/icons/midias/Group-1.svg" alt=""></a>
                </li>
                <li>
                    <a href=""><img src="/assents/icons/midias/Group-2.svg" alt=""></a>
                </li>
            </ul>
        </div>
    </section>
    <section class="mais-info">
        <div class="container">
            <div class="right-info">
                <img src="/assents/icons/more-info/logo_estado_branca.svg" alt="Logo Do Estado de Alagoas" class="logo-footer">
                <h2>Seplag</h2>
                <p class="titulo-interno">Secretaria de Estado do Planejamento, Gestão e Patrimônio</p>
                <div class="dados">
                    <ul>
                        <li>
                            <img src="assents/icons/more-info/Frame-1.png" alt="">
                            <p class="number">(82) 0000-0000</p>
                        </li>
                        <li>
                            <img src="assents/icons/more-info/Frame.png" alt="">
                            <p class="street">[Rua], n. 00 - CEP 00000-0000 - [Cidade]</p>
                        </li>
                        <li><a href="">ver mapa</a></li>
                    </ul>
                </div>
                <div class="midias-roda-pe">
                    <ul>
                        <li>
                            <a href=""><img src="/assents/icons/more-info/Group-4.png" alt="facebook"></a>
                        </li>
                        <li>
                            <a href=""><img src="/assents/icons/more-info/Group-1.png" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="/assents/icons/more-info/Group-2.png" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="/assents/icons/more-info/Group-3.png" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="left-info">
                <div class="list-roda-pe l1">
                    <ul>
                        <li><a href="">Inicio</a></li>
                        <li><a href="">Institucional</a></li>
                        <li><a href="">Notícias</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Arquivos Públicos</a></li>
                        <li><a href="">Legislação</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Alagoas</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>
                </div>
                <div class="list-roda-pe l2">
                    <ul>
                        <li><a href="">Inicio</a></li>
                        <li><a href="">Institucional</a></li>
                        <li><a href="">Notícias</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Arquivos Públicos</a></li>
                        <li><a href="">Legislação</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Alagoas</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection