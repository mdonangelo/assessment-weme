<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	

<?php

include_once("../admin/classes/Assessment.class.php");
			$objAssessment = new Assessment();

			$leadership = 0;
			$peopleAndOperations = 0;
			$structure = 0;
			$dataAnalytics = 0;
			$technology = 0;
			$ambidexterity = 0;
			$resultadoFinal = 0;
			$contador = 0;

			foreach($objAssessment->selecionaTodos() as $v){
				$leadership += $v['leadership'];
				$peopleAndOperations += $v['peopleAndOperations'];
				$structure += $v['structure'];
				$dataAnalytics += $v['dataAnalytics'];
				$technology += $v['technology'];
				$ambidexterity += $v['ambidexterity'];
				$resultadoFinal  += $v['resultadoFinal'];
				$contador++;
			}

			$valorTotal = ($resultadoFinal/$contador);

			$resultadoArray = 
			array(
				array(
					"as usual",

					"<ul>
						<li>Aversão ao risco</li>
						<li>Cultura inibe ideação, experimentação e intraempreendedorismo</li>
						<li>Compliance desestimula pensamento inovador</li>
						<li>Crescimento e mudança é parte do roadmap</li>
						<li>Liderança toma decisão em estratégia de longo prazo</li>
						<li>Digital não é uma direção formal.</li>
					<ul>",

					"
					<h4>leadership</h4>
					<p>Liderança é resistente à mudança e possui um viés hierárquico familiar.</p>
					<p>O foco é direcionado para as capabilities internas (BSC) e não no usuário.</p>
					<h4>people & operations</h4>
					<p>Responsabilidades e processos digitais não são formalizados ou não recebem apoio e incentivo.</p>
					<p>Existe medo e aversão da digitalização pois a cultura da empresa é avessa ao risco.</p>
					<h4>structure</h4>
					<p>Departamentos não são colaborativos, contribuindo para uma visão fragmentada e desarticulada da jornada do cliente.</p>
					<h4>data & analytics</h4>
					<p>As atividades são direcionadas pelo feeling da liderança sem embasamento claro.</p>
					<h4>technology</h4>
					<p>A tecnologia é vista como mais um nicho de indústria, não fazendo parte das pautas da liderança.</p>
					<h4>innovation ambidexterity</h4>
					<p>Não existem iniciativas robustas visando o futuro.</p>
					<p>O foco está na agregação de valor aos acionistas no curto prazo.</p>
					"
					),

				array(
					"aware and experimenting",

					"<ul>
						<li>Tendências inspiram early adopters a experimentar</li>
						<li>Há envolvimento porque agentes de mudança reconhecem novas oportunidades</li>
						<li>Tudo é feito de forma isolada sem o benefício do compartilhamento</li>
					</ul>",

					"
					<h4>leadership</h4>
					<p>Tecnologias disruptivas começam a ser vistas como novas oportunidades para testar e aprender, principalmente por early-adopters que lideram as primeiras iniciativas.</p>
					<h4>people & operations</h4>
					<p>A interação com clientes para compreensão de jornada e experimentos gera a necessidade de colaboração entre departamentos.</p>
					<p>Experimentação mais conservadora, cultura não tolerante ao erro.</p>
					<h4>structure</h4>
					<p>A cultura de experimentação incentiva os primeiros pilotos, mesmo a empresa ainda atuando majoritariamente em silos. </p>
					<h4>data & analytics</h4>
					<p>Foco na mensuração do contato dos colaboradores com o tema inovação.</p>
					<h4>technology</h4>
					<p>Introdução do contexto tecnológico exponencial.</p>
					<p>Incentivo à utilização de tecnologias simples (RPAs, APIs).</p>
					<h4>innovation ambidexterity</h4>
					<p>Foco em atividades de 1º Horizonte para primeiros experimentos com frameworks de inovação.</p>
					"
					),

				array(
					"first narratives",

					"<ul>
						<li>O senso de urgência para modernizar a experiência do cliente acelera</li>
						<li>Early adopter e agentes de mudança estão juntos e colaboram</li>
						<li>Investimento estratégico em pessoas, processos e tecnologias</li>
					</ul>",

					"
					<h4>leadership</h4>
					<p>Existe atenção da liderança para iniciativas de inovação.</p>
					<p>Remoção de barreiras e compartilhamento de narrativas de sucesso trazidas pela inovação (inside/outside).</p>
					<h4>people & operations</h4>
					<p>Times selecionados no processo de inovação com capacidade e recursos enxutos de execução (corporate customer development).</p>
					<h4>structure</h4>
					<p>Reconhecimento de padrões de sucesso para a validação e iteração de estruturas de inovação.</p>
					<h4>data & analytics</h4>
					<p>Dados focados na geração de track records.</p>
					<h4>technology</h4>
					<p>Desenvolvimento de tecnologias com nível conservador de complexidade. (IoT as a service, APIs, RPAs).</p>
					<p>Experimentação de POCs com startups, visando melhorias de primeiro horizonte.</p>
					<h4>innovation ambidexterity</h4>
					<p>Foco no 1º Horizonte de Inovação para resultados claros de bottomline.</p>
					<p>Experimentação do 2º Horizonte com o intuito de aprendizado.</p>
					"
					),

				array(
					"structured and capable",

					"<ul>
						<li>Agentes de mudança têm sucesso criando senso de urgência</li>
						<li>Patrocínio de executivo de alto escalão</li>
						<li>O tema tem atenção do C-level</li>
						<li>Esforços em transformação digital é uma prioridade da companhia</li>
						<li>Roadmap com objetivos de curto e longo prazos (horizontes)</li>
						<li>Investimento dedicado em infraestrutura e operações</li>
						<li>Novo conjunto de habilidades</li>
					</ul>",

					"
					<h4>leadership</h4>
					<p>Toda organização reconhece a necessidade de mudança e os esforços são mais ambiciosos e formalmente organizados.</p>
					<h4>people & operations</h4>
					<p>Há um momento notável (e oficial) nesse estágio e a mudança é algo que toda a organização começa a reconhecer e a apreciar.</p>
					<p>Experimentos formalizados e mais ousados, cultura tolerante ao erro.</p>
					<h4>structure</h4>
					<p>A organização consegue responder mais rapidamente e estabelece uma estratégia de inovação focada no usuário. Cada departamento entende seu papel para trabalhar em direção a uma visão única de transformação digital.</p>
					<h4>data & analytics</h4>
					<p>Foco na otimização de estruturas de inovação embasada por resultados.</p>
					<p>Dados guiam as decisões da organização.</p>
					<h4>technology</h4>
					<p>A organização possui capabilities internas para melhorias incrementais e agilidade com integrações com sistemas externos e contratação de terceiros.</p>
					<p>Tecnologia tem um roadmap claro para o direcionamento da empresa no contexto futuro.</p>
					<h4>innovation ambidexterity</h4>
					<p>Melhorias de 1º Horizonte saem da estratégia e são levadas como atividades de rotina.</p>
					<p>Lançamento dos primeiros produtos/serviços vindos de iniciativas de 2º Horizonte.</p>
					<p>Criam-se estruturas para incubação do 3º Horizonte. </p>
					"
					),

				array(
					"strategic and spread",

					"<ul>
						<li>Novos modelos e teams</li>
						<li>Digital é parte de como o negócio opera e compete</li>
						<li>Inovação faz parte do DNA da companhia</li>
						<li>São estabelecidos times formais para rastrear clientes e tendências tecnológicas</li>
						<li>Patrocínio e investimento em startups</li>
						<li>Programas relacionados aos principais processos de avanço da empresa</li>
					</ul>",

					"
					<h4>leadership</h4>
					<p>A organização é suportada por um modelo de gestão horizontal ao invés de uma hierarquia tradicional.</p>
					<p>A liderança orquestra a estratégia guiada pelo contexto futuro.</p>
					<h4>people & operations</h4>
					<p>Novos modelos, papéis e investimentos mudam em direção à inovação para acelerar a transformação digital e as oportunidades para o crescimento.</p>
					<h4>structure</h4>
					<p>A cultura de inovação se torna prioridade e a empresa se torna inovadora, adaptável e tráz o erro e seu aprendizado como parte do processo evolutivo.</p>
					<h4>data & analytics</h4>
					<p>Dados não apenas guiam as decisões, agora são fontes importantes para a geração de insights., usufruindo de análise preditiva e correlação em diferentes esferas.</p>
					<h4>technology</h4>
					<p>Existe um investimento e estudo contínuos em tecnologia de ponta, para não apenas reagir ao novo contexto tecnológico, e sim protagonizá-lo.</p>
					<h4>innovation ambidexterity</h4>
					<p>Temos uma proporção clara de esforço em todos os horizontes de inovação. e.g. 80% 15% 5%, respectivamente, para 1º, 2º e 3º Horizontes.</p>
					"
				)
			);

			if($valorTotal >= 0 && $valorTotal < 2){
				$contador = 2;
				$posicao = 0;
			}elseif($valorTotal >= 2 && $valorTotal < 3){
				$contador = 2;
				$posicao = 1;
			}elseif($valorTotal >= 3 && $valorTotal < 4){
				$contador = 2;
				$posicao = 2;
			}elseif($valorTotal >= 4 && $valorTotal < 5){
				$contador = 2;
				$posicao = 3;
			}elseif($valorTotal >= 5){
				$contador = 1;
				$posicao = 4;
			}

?>


<div class="full-height preto" id="resultado">
		<div class="content">
			<b>SEU ESTÁGIO DE INOVAÇÃO:</b>
			
			<h2><?=round($valorTotal, 2);?></h2>
			
			<div style="overflow-x: auto;">
				<section style="position: relative; min-width: 490px;">
				  <ol class="progress-bar">
				    <li class="<?php if(($valorTotal > 0 && $valorTotal < 2) || $valorTotal == 1) echo 'is-active'; ?>">
				    	<span>as<br> usual</span>
				    </li>  
				    <li class="<?php if(($valorTotal > 1 && $valorTotal < 3) || $valorTotal == 2) echo 'is-active'; ?>">
				    	<span>aware and<br> experimenting</span>
				    </li>  
				    <li class="<?php if(($valorTotal > 2 && $valorTotal < 4) || $valorTotal == 3) echo 'is-active'; ?>">
				    	<span>first<br> narratives</span>
				    </li>
				    <li class="<?php if(($valorTotal > 3 && $valorTotal < 5) || $valorTotal == 4) echo 'is-active'; ?>">
				    	<span>structured<br> and capable</span>
				    </li>  
				    <li class="<?php if(($valorTotal > 4 && $valorTotal < 6) || $valorTotal == 5) echo 'is-active'; ?>">
				    	<span>strategic<br> and spread</span>
				    </li>
				  </ol>
				  <div class="barra" style="">
				  	<div class="progresso" style="width: <?=($valorTotal-1)*25;?>%;"></div>
				  </div>
				</section>
			</div>
			<br>
			<p style="margin-top: 1em; color:#737373;">
				<b>Leadership:</b> <?=round($leadership/count($objAssessment->selecionaTodos()),2);?> | <b>People & Operations:</b> <?=round($peopleAndOperations/count($objAssessment->selecionaTodos()),2);?> | <b>Structure:</b> <?=round($structure/count($objAssessment->selecionaTodos()),2);?> | <b>Data analytics:</b> <?=round($dataAnalytics/count($objAssessment->selecionaTodos()),2);?> | <b>Technology:</b> <?=round($technology/count($objAssessment->selecionaTodos()),2);?> | <b>Ambidexterity:</b> <?=round($ambidexterity/count($objAssessment->selecionaTodos()),2);?>
			</p>

			<br>
			<div class="flex">
				<?php
				if($contador == 1){
				?>
				<div class="box-1">
					<h3><?=$resultadoArray[$posicao][0];?></h3>
					<?=$resultadoArray[$posicao][1];?>
					<hr>
					<?=$resultadoArray[$posicao][2];?>
				</div>
				<?php
				}elseif ($contador == 2) {
				?>
				<div class="box-1-2">
					<h3><?=$resultadoArray[$posicao][0];?></h3>
					<?=$resultadoArray[$posicao][1];?>
					<hr>
					<?=$resultadoArray[$posicao][2];?>
				</div>
				<div class="box-1-2">
					<h3><?=$resultadoArray[1+$posicao][0];?></h3>
					<?=$resultadoArray[1+$posicao][1];?>
					<hr>
					<?=$resultadoArray[1+$posicao][2];?>
				</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>

	</body>
</html>
