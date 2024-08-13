<div class="sidebar">
<img src="{{ asset('images/logo.png') }}" alt="Logo" class="sidebar-logo">
    <ul>
        <li><a href="{{ url('/') }}">Início</a></li>
        <li><a href="{{ url('/dadosProducaoAcademica') }}">Dados de produção acadêmica</a></li>
        <li><a href="{{ url('/dadosInstitucionais') }}">Dados Institucionais</a></li>
        <li><a href="{{ url('/contact') }}">Dados gerais do portal</a></li>
        <li><a href="{{ url('/blog') }}">Dados por gênero</a></li>
        <li><a href="{{ url('/blog') }}">Dados por curso</a></li>
        <li><a href="{{ url('/blog') }}">Dados pós-graduação</a></li>
        <li><a href="{{ url('/blog') }}">Dados Graduação</a></li>
        <li><a href="{{ url('/blog') }}">Dados por ano</a></li>
        <li><a href="{{ url('/blog') }}">Dados por cor/raça</a></li>
        <li><a href="{{ url('/blog') }}">Dados por nacionalidade/localidade</a></li>
        <li><a href="{{ url('/blog') }}">Dados por ingresso</a></li>
       
    </ul>
</div>

<style>
    .sidebar {
        width: 200px;
        height: 100vh; /* Ocupa toda a altura da página */
        background-color: #052e70;
        padding: 15px;
        padding-right: 30px; /* Adiciona espaçamento à direita da sidebar */
        position: fixed; /* Fixa a sidebar na lateral da página */
        top: 0;
        left: 0;
        overflow-y: auto; /* Adiciona rolagem se o conteúdo exceder a altura */
        z-index: 1000; /* Garante que a sidebar fique acima do conteúdo */
    }

    .sidebar-logo {
        display: block;
        max-width: 80%; /* Garante que a imagem se ajuste à largura da sidebar */
        height: auto;
        margin-bottom: 6px; /* Espaçamento entre a imagem e a lista */
        margin-left: 14px;
        filter: brightness(0) invert(1); /* Torna a imagem branca */
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
        margin-top:30px;
    }

    .sidebar ul li {
        margin-bottom: 10px;
    }

    .sidebar ul li a {
        text-decoration: none;
        font-weight:bold;
        font-size:18px;
        color: #ffff;
        display: block;
        padding: 16px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .sidebar ul li a:hover {
        background-color: #007bff;
    }
</style>
