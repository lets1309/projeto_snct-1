<!DOCTYPE html>
<html lang="pt-BR">
<?php
include '../layout/head.php';
include '../bd/session.php';

?>

<body class="body_quiz">
    <?php
    include '../layout/cabecalho.php';
    ?>
    <div class="container-biomas">
        <h1>Biomas Brasileiros</h1>

        <div class="bioma-individual">
            <h2 class="h2_quiz">Amazônia</h2>
            <p>A Amazônia é o maior bioma brasileiro e a maior floresta tropical do mundo. Abriga uma vasta
                biodiversidade, com mais de 30 milhões de espécies de plantas e animais, muitos dos quais ainda não
                foram descobertos. É crucial para o equilíbrio climático do planeta e abriga comunidades indígenas que
                dependem de seus recursos para viver.</p>
        </div>

        <div class="bioma-individual">
            <h2 class="h2_quiz">Cerrado</h2>
            <p>O Cerrado é um bioma de savana tropical, caracterizado por uma vegetação diversificada, com árvores de
                tronco tortuoso e gramíneas. É o segundo maior bioma brasileiro e é conhecido por sua riqueza em fauna,
                incluindo diversas espécies endêmicas. O Cerrado desempenha um papel vital na produção de água e na
                conservação do solo, mas enfrenta sérias ameaças devido à expansão agrícola.</p>
        </div>

        <div class="bioma-individual">
            <h2 class="h2_quiz">Caatinga</h2>
            <p>O Caatinga é um bioma exclusivo do Brasil, adaptado a um clima semiárido. Sua vegetação é composta
                principalmente por arbustos espinhosos e cactos. Apesar das condições adversas, a Caatinga possui uma
                rica biodiversidade, com muitas espécies endêmicas. A preservação desse bioma é crucial para a
                manutenção da cultura e dos modos de vida das comunidades que ali habitam.</p>
        </div>

        <div class="bioma-individual">
            <h2 class="h2_quiz">Pantanal</h2>
            <p>O Pantanal é a maior área alagada do mundo e um dos biomas mais ricos em biodiversidade. É conhecido por
                sua fauna exuberante, que inclui jacarés, capivaras e diversas aves migratórias. Durante a estação das
                chuvas, a região se transforma em um vasto lago, proporcionando um habitat único para muitas espécies. O
                Pantanal é fundamental para a regulação hídrica e a conservação ambiental.</p>
        </div>

        <div class="bioma-individual">
            <h2 class="h2_quiz">Campos Sulinos</h2>
            <p>Os Campos Sulinos são caracterizados por extensas áreas de gramíneas, com algumas árvores esparsas. Este
                bioma abriga uma variedade de fauna, incluindo espécies ameaçadas, como o cervo-do-pantanal. A região é
                crucial para a preservação da biodiversidade e desempenha um papel importante na agricultura, mas
                enfrenta pressão devido à urbanização e ao cultivo de monoculturas.</p>
        </div>

        <div class="bioma-individual">
            <h2 class="h2_quiz">Mata Atlântica</h2>
            <p>A Mata Atlântica é um bioma costeiro que se estende ao longo da costa brasileira, conhecido por sua rica
                biodiversidade e endemismo. Este ecossistema é lar de inúmeras espécies de plantas e animais, muitos dos
                quais estão ameaçados de extinção devido à urbanização e à exploração descontrolada. A conservação da
                Mata Atlântica é vital para o equilíbrio ecológico e a proteção das águas.</p>
        </div>

        <div class="quiz-biomas">
            <h2>Quiz sobre Biomas Brasileiros</h2>
            <form action="resultado_quiz.php" method="POST">
                <p>1. Qual é o maior bioma do Brasil?</p>
                <input type="radio" name="q1" value="Amazônia"> Amazônia<br>
                <input type="radio" name="q1" value="Cerrado"> Cerrado<br>
                <input type="radio" name="q1" value="Caatinga"> Caatinga<br>
                <br>

                <p>2. Qual bioma é conhecido por ser uma área alagada?</p>
                <input type="radio" name="q2" value="Pantanal"> Pantanal<br>
                <input type="radio" name="q2" value="Mata Atlântica"> Mata Atlântica<br>
                <input type="radio" name="q2" value="Campos Sulinos"> Campos Sulinos<br>
                <br>

                <p>3. Qual bioma é caracterizado por vegetação xerófila?</p>
                <input type="radio" name="q3" value="Caatinga"> Caatinga<br>
                <input type="radio" name="q3" value="Cerrado"> Cerrado<br>
                <input type="radio" name="q3" value="Amazônia"> Amazônia<br>
                <br>

                <p>4. A Mata Atlântica é ameaçada por:</p>
                <input type="radio" name="q4" value="Urbanização"> Urbanização<br>
                <input type="radio" name="q4" value="Reflorestamento"> Reflorestamento<br>
                <input type="radio" name="q4" value="Desmatamento"> Desmatamento<br>
                <br>

                <p>5. O que caracteriza os Campos Sulinos?</p>
                <input type="radio" name="q5" value="Vegetação de floresta"> Vegetação de floresta<br>
                <input type="radio" name="q5" value="Gramíneas"> Gramíneas<br>
                <input type="radio" name="q5" value="Cactos"> Cactos<br>
                <br>

                <p>6.  Qual é uma das principais ameaças à Floresta Amazônica?</p>
                <input type="radio" name="q6" value="Desmatamento para atividades agrícolas  e pecuária"> Desmatamento para atividades agrícolas e pecuária <br>
                <input type="radio" name="q6" value="Queimadas"> Queimadas <br>
                <input type="radio" name="q6" value="Agricultura de soja"> Agricultura de soja <br>
                <br>

                <p>7.A Mata Atlântica é um dos biomas mais ameaçados do Brasil. Qual das opções a seguir é uma das principais causas disso? </p>
                <input type="radio" name="q7" value="Baixo índice de biodiversidade"> Baixo índice de biodiversidade <br>
                <input type="radio" name="q7" value="Desmatamento"> Desmatamento <br>
                <input type="radio" name="q7" value=" Elevado desmatamento para urbanização e agricultura"> Elevado desmatamento para urbanização e agricultura <br>
                <br>

                <p>8.Qual é um exemplo de planta adaptada ao clima da Caatinga?:</p>
                <input type="radio" name="q8" value="Cactos e arbusto espinhosos"> Cactos e arbusto espinhosos <br>
                <input type="radio" name="q8" value="Ipê-amarelo"> Ipê-amarelo <br>
                <input type="radio" name="q8" value="Pinheiros"> Pinheiros<br>
                <br>

                <p> 9.  O que ameaça a biodiversidade do Cerrado? </p>
                <input type="radio" name=  "q9" value="Desmatamento e queimadas"> Desmatamento e queimadas <br>
                <input type="radio" name=  "q9" value="Expansão da indústria pesqueira">Expansão da indústria pesqueira <br>
                <input type="radio" name=  "q9" value="Expansão da agricultura e pecuária"> Expansão da agricultura e  pecuária <br>
                <br>

                <p>10.O Pantanal é um dos maiores biomas úmidos do planeta. Qual é uma característica importante dele? </p>
                <input type="radio" name="q10" value="Área alagada">Àrea alagada <br>
                <input type="radio" name="q10" value="Ocorrência apenas em áreas montanhosas"> Ocorrência apenas em áreas montanhosas <br>
                <input type="radio" name="q10" value=" Frequentes alagamentos sazonais que promovem grande biodiversidade"> Frequentes alagamentos sazonais que promovem grande biodiversidade  <br>
                <br>
                
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
</body>

</html>