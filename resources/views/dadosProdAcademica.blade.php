@extends('layouts.app')

@section('title', 'Dados de Produção Acadêmica')

@section('content')
    <h1 style="font-weight: bold; font-size: 40px;">Dados de Produção Acadêmica</h1>

    <div class="dropdown">
        <button class="dropdown-btn">Selecione uma opção</button>
        <div class="dropdown-content">
            <a href="#" onclick="showTable('table1')">Programas de Pós-Graduação</a>
            <a href="#" onclick="showTable('table2')">Defesas</a>
            <a href="#" onclick="showTable('table3')">Pesquisa</a>
        </div>
    </div>

    <div id="table1" class="table-container" style="display:none;">
        <h2>Pós-Graduação por Porgrama</h2>
        <table>
            <thead>
                <tr>
                    <th>Programa</th>
                    <th>Docentes</th>
                    <th>Discentes</th>
                    <th>Egressos</th>
                </tr>
            </thead>
            <tbody>
                <!-- Adicione aqui os dados da primeira parte da Tabela 1 -->
                <tr><td>Ciência Política</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Antropologia Social</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Estudos Lingüísticos e Literários em Inglês</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Filologia e Língua Portuguesa</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Filosofia</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Geografia Física</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Geografia Humana</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>História Econômica</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>História Social</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Humanidades, Direitos e Outras Legitimidades</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Estudos Comparados de Literaturas de Língua Portuguesa</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Letras Clássicas</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Literatura Portuguesa</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Língua Espanhola e Literaturas Espanhola e Hispano-Americana</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Língua e Literatura Alemã</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Língua, Literatura e Cultura Italianas</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Língua, Literatura e Cultura Japonesa</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Teoria Literária e Literatura Comparada</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Estudos Lingüísticos, Literários e Tradutológicos em Francês</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Estudos Linguísticos</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Estudos Literários e Culturais</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Estudos da Tradução</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Semiótica e Lingüística Geral</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Literatura Brasileira</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Letras em Rede Nacional</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
                <tr><td>Sociologia</td><td>Dados 2</td><td>Dados 3</td><td>Dados 4</td></tr>
            </tbody>
        </table>

        <h2>Pós-Graduação por Departamento</h2>
        <table>
            <thead>
                <tr>
                    <th>Departamento</th>
                    <th>Docentes</th>
                </tr>
            </thead>
            <tbody>
                <!-- Adicione aqui os dados da segunda parte da Tabela 1 -->
                <tr><td>Antropologia</td><td>0</td></tr>
                <tr><td>Ciência Política</td><td>0</td></tr>
                <tr><td>Filosofia</td><td>0</td></tr>
                <tr><td>História</td><td>0</td></tr>
                <tr><td>Letras Clássicas e Vernáculas</td><td>0</td></tr>
                <tr><td>Letras Modernas</td><td>0</td></tr>
            </tbody>
        </table>
    </div>


    
    <div id="table2" class="table-container" style="display:none;">
        <h2 id="defesas-title" style="font-weight: bold; font-size: 24px; margin-top: 20px;">Defesas em <span id="selected-year">----</span></h2>

        <div class="defesas-count">
            <p>Mestrado: <span id="mestrado-count">000</span></p>
            <p>Doutorado: <span id="doutorado-count">000</span></p>
            <p>Doutorado Direto: <span id="doutorado-direto-count">000</span></p>
        </div>

        <div class="filters">
            <div class="filter-item">
                <label for="year-select">Selecionar ano da defesa:</label>
                <select id="year-select">
                    <option value="">Selecione o ano</option>
                    <!-- Adicione os anos disponíveis aqui -->
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <!-- ... -->
                </select>
            </div>

            <div class="filter-item">
                <label for="program-select">Selecionar Programa:</label>
                <select id="program-select">
                    <option value="">Selecione o programa</option>
                    <!-- Adicione os programas disponíveis aqui -->
                    <option value="Programa A">Programa A</option>
                    <option value="Programa B">Programa B</option>
                    <option value="Programa C">Programa C</option>
                    <!-- ... -->
                </select>
            </div>

            <button id="filter-button">Filtrar</button>
        </div>

        <div id="results-table" style="display:none; margin-top: 20px;">
            <table>
                <thead>
                    <tr>
                        <th>Aluno(a)</th>
                        <th>Data da Defesa</th>
                        <th>Nível</th>
                        <th>Programa</th>
                        <th>Título</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Os resultados filtrados serão inseridos aqui -->
                </tbody>
            </table>
        </div>
    </div>

    <div id="table3" class="table-container" style="display:none;">
    <table class="styled-table">
    <thead>
        <tr>
            <th>Departamento</th>
            <th>IC (Com Bolsa)</th>
            <th>IC (Sem Bolsa)</th>
            <th>Pós-Doutorandos (Com Bolsa)</th>
            <th>Pós-Doutorandos (Sem Bolsa)</th>
            <th>Pesquisadores Colaboradores Ativos</th>
            <th>Projetos de Pesquisa dos Docentes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Filosofia</td>
            <td>10</td>
            <td>5</td>
            <td>8</td>
            <td>3</td>
            <td>15</td>
            <td>12</td>
        </tr>
        <tr>
            <td>Antropologia</td>
            <td>100</td>
            <td>50</td>
            <td>80</td>
            <td>30</td>
            <td>150</td>
            <td>120</td>
        </tr>
        <tr>
            <td>História</td>
            <td>1</td>
            <td>5</td>
            <td>8</td>
            <td>3</td>
            <td>15</td>
            <td>12</td>
        </tr>
        <!-- Adicione mais linhas conforme necessário -->
    </tbody>
</table>
    </div>

@endsection

<style>
    .dropdown {
        margin-top: 20px;
        position: relative;
        display: inline-block;
    }

    .dropdown-btn {
        background-color: #f0f0f0;
        color: black;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        width: 100%;
        text-align: left;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 200px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        cursor: pointer;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .table-container {
        margin-top: 20px;
        text-align: left;
    }

    .defesas-count p {
        margin: 5px 0;
        font-size: 16px;
    }

    .filters {
        margin-top: 20px;
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .filter-item {
        display: flex;
        flex-direction: column;
    }

    .filter-item label {
        margin-bottom: 5px;
        font-weight: bold;
    }

    .filter-item select {
        padding: 5px;
        font-size: 14px;
    }

    #filter-button {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        border: none;
    }

    table th, table td {
        padding: 15px;
        text-align: left;
        border: none;
        border-bottom: 1px solid #ccc;
    }

    table thead tr {
        background-color: #ccc;
        font-size: 18px;
        font-weight: bold;
    }

    table tbody tr:nth-child(odd) {
        background-color: #f2f2f2;
    }

    table tbody tr:nth-child(even) {
        background-color: #ffffff;
    }

    table tbody tr {
        height: 40px;
    }

    .defesas-count {
    background-color: #f0f0f0; /* Cor de fundo para destaque */
    padding: 15px; /* Espaçamento interno para dar mais espaço */
    border-radius: 8px; /* Bordas arredondadas para um visual mais suave */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Sombra para dar profundidade */
    margin-top: 15px; /* Espaço acima para separá-la do conteúdo superior */
    width: 200px;
}

.defesas-count p {
    font-weight: bold; /* Negrito para destacar os textos */
    font-size: 16px; /* Tamanho da fonte */
    margin: 5px 0; /* Espaçamento entre os parágrafos */
}
</style>

<script>
    function showTable(tableId) {
        const tables = ['table1', 'table2', 'table3'];
        tables.forEach(id => {
            document.getElementById(id).style.display = (id === tableId) ? 'block' : 'none';
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        const filterButton = document.getElementById('filter-button');
        const yearSelect = document.getElementById('year-select');
        const programSelect = document.getElementById('program-select');
        const resultsTable = document.getElementById('results-table');
        const resultsTbody = resultsTable.querySelector('tbody');
        const selectedYearSpan = document.getElementById('selected-year');

        filterButton.addEventListener('click', function() {
            const selectedYear = yearSelect.value;
            const selectedProgram = programSelect.value;

            if (!selectedYear) {
                alert('Por favor, selecione um ano da defesa.');
                return;
            }

            // Atualiza o título com o ano selecionado
            selectedYearSpan.textContent = selectedYear;

            // Simulação de dados - substitua esta parte com uma chamada real à sua base de dados
            const dummyData = [
                { aluno: 'Aluno 1', data: '2023-05-10', nivel: 'Mestrado', programa: 'Programa A', titulo: 'Título 1' },
                { aluno: 'Aluno 2', data: '2023-06-15', nivel: 'Doutorado', programa: 'Programa B', titulo: 'Título 2' },
                { aluno: 'Aluno 3', data: '2023-07-20', nivel: 'Doutorado Direto', programa: 'Programa C', titulo: 'Título 3' },
                // ... mais dados
            ];

            // Filtra os dados com base nos filtros selecionados
            const filteredData = dummyData.filter(item => {
                const matchYear = item.data.startsWith(selectedYear);
                const matchProgram = selectedProgram ? item.programa === selectedProgram : true;
                return matchYear && matchProgram;
            });

            // Atualiza os contadores
            const mestradoCount = filteredData.filter(item => item.nivel === 'Mestrado').length;
            const doutoradoCount = filteredData.filter(item => item.nivel === 'Doutorado').length;
            const doutoradoDiretoCount = filteredData.filter(item => item.nivel === 'Doutorado Direto').length;

            document.getElementById('mestrado-count').textContent = mestradoCount.toString().padStart(3, '0');
            document.getElementById('doutorado-count').textContent = doutoradoCount.toString().padStart(3, '0');
            document.getElementById('doutorado-direto-count').textContent = doutoradoDiretoCount.toString().padStart(3, '0');

            // Limpa os resultados anteriores
            resultsTbody.innerHTML = '';

            // Popula a tabela com os dados filtrados
            filteredData.forEach(item => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.aluno}</td>
                    <td>${item.data}</td>
                    <td>${item.nivel}</td>
                    <td>${item.programa}</td>
                    <td>${item.titulo}</td>
                `;
                resultsTbody.appendChild(row);
            });

            // Exibe a tabela de resultados
            resultsTable.style.display = 'block';
        });
    });
</script>


