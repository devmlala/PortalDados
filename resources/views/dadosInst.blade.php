@extends('layouts.app')

@section('title', 'Dados Institucionais')

@section('content')
<div class="container">
    <h1 class="title">Colegiados</h1>

    <div class="dropdown">
        <button class="dropdown-toggle">Selecione uma opção</button>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item" data-target="comissao">Comissão</a>
            <a href="#" class="dropdown-item" data-target="conselho">Conselho</a>
            <a href="#" class="dropdown-item" data-target="nucleo">Núcleo de Apoio</a>
            <a href="#" class="dropdown-item" data-target="congregacao">Congregação</a>
        </div>
    </div>

    <div id="comissao" class="expandable-list hidden">
        <div class="list-wrapper">
            <h3>Comissão</h3>
            <ul>
                <li>Comissão - Comissão Coordenadora do Curso de Bacharelado Ciências Socias (CoC)</li>
                <li>Comissão - Comissão Coordenadora do Curso de Bacharelado em Filosofia (CoC)</li>
                <li>Comissão - Comissão Coordenadora do Curso de Bacharelado em Geografia (CoC)</li>
                <li>Comissão - Comissão Coordenadora do Curso de Bacharelado em História (CoC)</li>
                <li>Comissão - Comissão Coordenadora do Curso de Bacharelado em Letras - Ciclo Básico (CoC)</li>
                <!-- Adicione mais itens conforme necessário -->
            </ul>
        </div>
    </div>

    <div id="conselho" class="expandable-list hidden">
        <div class="list-wrapper">
            <h3>Conselho</h3>
            <ul>
                <li>Conselho - Faculdade de Filosofia, Letras e Ciências Humanas (CTA)</li>
                <li>Conselho - Conselho do Departamento de Teoria Literária e Literatura Comparada (CoDepto)</li>
                <li>Conselho - Conselho do Departamento de Sociologia (CoDepto)</li>
                <li>Conselho - Conselho do Departamento de Lingüística (CoDepto)</li>
                <li>Conselho - Conselho do Departamento de Letras Orientais (CoDepto)</li>
                <!-- Adicione mais itens conforme necessário -->
            </ul>
        </div>
    </div>

    <div id="nucleo" class="expandable-list hidden">
        <div class="list-wrapper">
            <h3>Núcleo de Apoio</h3>
            <ul>
                <li>Núcleo de Apoio - Centro de Estudos Ameríndios (NAP)</li>
                <li>Núcleo de Apoio - Núcleo de Estudos da Violência (NAP)</li>
                <li>Núcleo de Apoio - Núcleo de Pesquisa em Etimologia e História da Língua Portuguesa (NAP)</li>
                <li>Núcleo de Apoio - Núcleo de Pesquisa em Relações Internacionais (NAP)</li>
                <!-- Adicione mais itens conforme necessário -->
            </ul>
        </div>
    </div>

    <div id="congregacao" class="expandable-list hidden">
        <div class="list-wrapper">
            <h3>Congregação</h3>
            <ul>
                <li>Congregação - Faculdade de Filosofia, Letras e Ciências Humanas (CONGREG)</li>
                <!-- Adicione mais itens conforme necessário -->
            </ul>
        </div>
    </div>
</div>
@endsection

<style>
    .container {
        margin: 20px;
    }

    .title {
        font-size: 40px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .dropdown {
        margin-bottom: 20px;
        position: relative;
    }

    .dropdown-toggle {
        background-color: #e9e9e9;
        padding: 10px;
        border: none;
        cursor: pointer;
        font-size: 18px;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        background-color: #f3f3f3;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        padding: 10px;
        border-radius: 5px;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown-item {
        padding: 10px;
        text-decoration: none;
        color: #333;
        display: block;
        font-size: 16px;
    }

    .expandable-list {
        display: none;
        margin-top: 20px;
        display: flex;
        justify-content: center; /* Centraliza horizontalmente */
    }

    .list-wrapper {
        background-color: #f5f5f5; /* Cor de fundo cinza claro */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 50%; /* Ajuste o tamanho conforme necessário */
    }

    .expandable-list ul {
        list-style-type: none;
        padding: 0;
    }

    .expandable-list li {
        margin: 10px 0;
        font-size: 18px;
    }

    .dropdown-item:hover {
        background-color: #ddd;
    }

    .hidden {
        display: none; /* Esconde os elementos com a classe 'hidden' */
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.dropdown-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Esconde todas as listas
                document.querySelectorAll('.expandable-list').forEach(list => {
                    list.classList.add('hidden');
                });
                
                // Exibe a lista selecionada
                const targetId = this.getAttribute('data-target');
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    targetElement.classList.remove('hidden');
                }
            });
        });
    });
</script>