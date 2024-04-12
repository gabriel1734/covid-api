<?php

use Application\components\FooterComponent;
use Application\components\HeaderComponent;

$header = new HeaderComponent();
$footer = new FooterComponent();
?>
<?php echo $header->render(); ?>
<section class="about-section">
  <div class="about-main">
    <h1 class="h1-home">Sobre</h1>
    <p>Este projeto foi desenvolvido por <a href="https://github.com/gabriel1734">Gabriel Furniel</a>
    <h1>covid-api</h1>

    <h2>Sobre o Projeto</h2>

    <p>Este projeto foi desenvolvido como parte de um exercício para um processo seletivo de estágio. Consiste na construção de uma interface web que permite ao usuário obter informações sobre os casos de mortes por Covid-19. Os dados são obtidos por meio da API-Covid-19 disponível no servidor da Kidopi.</p>

    <h2>Funcionalidades</h2>

    <h3>1ª parte:</h3>

    <ul>
      <li>Página que permite escolher entre três países (Brazil, Canada ou Australia) e se comunica com a API-Covid-19.</li>
      <li>Exibe o número total de casos confirmados e mortes do país selecionado.</li>
      <li>Exibe os dados de cada estado do país selecionado.</li>
    </ul>

    <h3>2ª parte:</h3>

    <ul>
      <li>Armazena em um banco de dados (MySQL) a data e hora de todos os acessos feitos à API-Covid-19, juntamente com o país escolhido para a consulta.</li>
    </ul>

    <h3>3ª parte:</h3>

    <ul>
      <li>Página criada utilizando HTML, CSS e JS.</li>
      <li>No rodapé da página, mostra a data e o país procurado do último acesso à API-Covid-19.</li>
    </ul>

    <h3>Parte Bônus:</h3>

    <ul>
      <li>Interface web que permite ao usuário escolher dois países diferentes.</li>
      <li>Os países disponíveis para escolha são listados pela 'API-Países-Disponíveis'.</li>
      <li>Mostra a diferença da taxa de morte entre os países selecionados (taxa de morte do país todo).</li>
      <li>A taxa de morte é calculada pela fórmula: Taxa de morte = Mortes / Confirmados.</li>
    </ul>

    <h2>API-Covid-19:</h2>

    <h3>Retorno:</h3>

    <pre>
{
    "0": {
        "ProvinciaEstado": "Acre",
        "Pais": "Brazil",
        "Confirmados": 149378,
        "Mortos": 2027
    },
    "1": {
        "ProvinciaEstado": "Alagoas",
        "Pais": "Brazil",
        "Confirmados": 320552,
        "Mortos": 7118
    }
}
</pre>

    <h2>API-Países-Disponíveis:</h2>

    <h3>Retorno:</h3>

    <pre>
{
    "0": "Afghanistan",
    "1": "Albania",
    "2": "Algeria",
    "3": "Andorra",
    "4": "Angola",
    "5": "Antarctica"
}
</pre>

    <h2>Observações:</h2>

    <ol>
      <li>A arquitetura é toda baseada em MVC</li>
      <li>Os nomes dos países estão em inglês.</li>
      <li>Alguns países retornam apenas o valor total de casos confirmados e de mortes no país inteiro, sem os dados por estado.</li>
      <li>A API-Covid-19 retorna os dados de todos os estados do país.</li>
      <li>A API-Países-Disponíveis retorna o nome de todos os países disponíveis para obter os dados.</li>
    </ol>

    <h2>Tecnologias Utilizadas</h2>

    <ul>
      <li>PHP (Backend)</li>
      <li>HTML, CSS, JS (Frontend)</li>
      <li>MySQL (Banco de Dados)</li>
    </ul>

    <p><strong>Link do GitHub:</strong> <a href="https://github.com/gabriel1734/covid-api">https://github.com/gabriel1734/covid-api</a>
  </div>
</section>
<?php echo $footer->render(); ?>