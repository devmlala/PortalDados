<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-left">
            <p><strong>Escritório de Apoio Institucional ao Pesquisador (EAIP)</strong></p>
            <p>Rua do Lago, 717 - Sala 116</p>
            <p>CEP: 05508-080 - São Paulo / SP</p>
        </div>
        <div class="footer-right">
            <p>Fones: (11) 2648-1316, 2648-1590 e 3091-0400</p>
            <p>E-mail: <a href="mailto:eaipfflch@usp.br" class="footer-link">eaipfflch@usp.br</a></p>
            <p>Horário de atendimento: 9h-11h e das 13h30-16h</p>
        </div>
    </div>
</footer>

<style>
    .site-footer {
        position: fixed;
        bottom: 0;
        left: 0; /* Garante que o footer comece na extrema esquerda */
        width: 100%;
        background-color: #a9a9a9;
        color: #fff;
        text-align: center;
        padding: 10px 0;
        font-size: 14px;
    }

    .footer-container {
        display: flex;
        justify-content: space-between;
        max-width: 1000px; /* Limita a largura total do footer */
        margin: 0 auto; /* Centraliza o container */
        margin-left: 550px;
    }

    .footer-left, .footer-right {
        flex: 1;
        padding: 0 20px;
    }

    .footer-left p, .footer-right p {
        margin: 5px 0;
        line-height: 1.6;
    }

    .footer-link {
        color: #fff;
        text-decoration: underline;
    }

    .footer-link:hover {
        color: #007bff;
    }
</style>