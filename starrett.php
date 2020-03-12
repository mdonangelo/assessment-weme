<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Corporate Innovation Assessment.</title>

	<link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" sizes="180x180" href="images/icon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/icon/favicon-16x16.png">
	<link rel="manifest" href="images/icon/site.webmanifest">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

</head>

<body>

	<header>
		<div class="logo">
			<img src="images/weme.png" alt="logo da weme">
		</div>
		<a href="javascript:void(0)" class="openbtn" onclick="openNav()">&#9776;</a>
		<nav id="myNav">
			<ul>
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<li><a href="result.php">> estágios</a></li>
				<li><a href="result.php#asUsual">#1 as usual</a></li>
				<li><a href="result.php#awareExperimenting">#2 aware and experimenting</a></li>
				<li><a href="result.php#firstNarratives">#3 first narratives</a></li>
				<li><a href="result.php#structuredCapable">#4 structured and capable</a></li>
				<li><a href="result.php#strategicSpread">#5 strategic and spread</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="full-height" id="home">
		<div class="content">
			<h1>Starrett.</h1>
			<h1 style="font-size: 1.5em;">Corporate Innovation Assessment</h1>
			<h2>Um modelo de <b>assessment de inovação corporativa</b> para ajuda a categorizar a Starrett e, a partir disso, saber quais são os <b>pontos focais de esforço em determinado estágio de maturidade de inovação</b> da empresa.</h2>
			<a href="#leadership" class="iniciar">
				<div class="btn"><img src="images/right-arrow.png" alt=""></div>
				<div class="text">iniciar o assessment</div>
			</a>
		</div>
	</div>

	<form action="#resultado" method="post">

	<input type="hidden" name="nome" value=" ">
	<input type="hidden" name="empresa" value="Starrett Planejamento Estratégico">
	<input type="hidden" name="email" value=" ">
	<input type="hidden" name="cargo" value=" ">

	<!-- COMEÇO LEADERSHIP -->
	<div class="full-height azul" id="leadership">
		<div class="content">
			<h3>#1 leadership.</h3>
			<h5>Propriedade para <b>direcionar a estrutura da organização por meio da liderança</b> que determina o destino de evolução dos negócios.</h5>

			<div class="flex">
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="1" name="leadership">
						
					</label>
					<p>Liderança é resistente à mudança e possui um viés hierárquico familiar.</p>
					<p>O foco é direcionado para as capabilities internas (BSC) e não no usuário.</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="2" name="leadership">
						
					</label>
					<p>Tecnologias disruptivas começam a ser vistas como novas oportunidades para testar e aprender, principalmente por early-adopters que lideram as primeiras iniciativas.</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="3" name="leadership">
						
					</label>
					<p>Existe atenção da liderança para iniciativas de inovação.</p>
					<p>Remoção de barreiras e compartilhamento de narrativas de sucesso trazidas pela inovação (inside/outside).</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="4" name="leadership">
						
					</label>
					<p>Toda organização reconhece a necessidade de mudança e os esforços são mais ambiciosos e formalmente organizados.</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="5" name="leadership">
						
					</label>
					<p>A organização é suportada por um modelo de gestão horizontal ao invés de uma hierarquia tradicional.</p>
					<p>A liderança orquestra a estratégia guiada pelo contexto futuro.</p>
				</div>
			</div>

			<a href="#peopleAndExperimenting" class="iniciar">
				<div class="btn"><img src="images/right-arrow-blue.png" alt=""></div>
				<div class="text">próximo</div>
			</a>
		</div>
	</div>
	<!-- FIM LEADERSHIP -->

	<!-- COMEÇO PEOPLE AND EXPERIMENTING -->
	<div class="full-height" id="peopleAndExperimenting">
		<div class="content">
			<h3>#2 people & operations.</h3>
			<h5><b>Quem está envolvido na Transformação Digital</b>, os papéis que desempenham e as responsabilidades , bem como a gestão da transformação, incluindo papéis, processos, sistemas e modelos de suporte.</h5>

			<div class="flex">
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="1" name="peopleAndOperations">
						
					</label>
					<p>Responsabilidades e processos digitais não são formalizados ou não recebem apoio e incentivo.</p>
					<p>Existe medo e aversão da digitalização pois a cultura da empresa é avessa ao risco.</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="3" name="peopleAndOperations">
						
					</label>
					<p>Times selecionados no processo de inovação com capacidade e recursos enxutos de execução (corporate customer development).</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="2" name="peopleAndOperations">
						
					</label>
					<p>A interação com clientes para compreensão de jornada e experimentos gera a necessidade de colaboração entre departamentos.</p> 
					<p>Experimentação mais conservadora, cultura não tolerante ao erro.</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="5" name="peopleAndOperations">
						
					</label>
					<p>Novos modelos, papéis e investimentos mudam em direção à inovação para acelerar a transformação digital e as oportunidades para o crescimento.</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="4" name="peopleAndOperations">
						
					</label>
					<p>Há um momento notável (e oficial) nesse estágio e a mudança é algo que toda a organização começa a reconhecer e a apreciar.</p>
					<p>Experimentos formalizados e mais ousados, cultura tolerante ao erro.</p>
				</div>
			</div>

			<a href="#structure" class="iniciar">
				<div class="btn"><img src="images/right-arrow.png" alt=""></div>
				<div class="text">próximo</div>
			</a>
		</div>
	</div>
	<!-- FIM PEOPLE AND EXPERIMENTING -->

	<!-- COMEÇO SCTRUCTURE -->
	<div class="full-height azul" id="structure">
		<div class="content">
			<h3>#3 structure.</h3>
			<h5>Como a cultura de inovação está estabelecida e a capacidade da organização em <b>responder aos desafios</b> com uma estratégia, sua estrutura organizacional e a articulação entre os departamentos.</h5>

			<div class="flex">
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="5" name="structure">
						
					</label>
					<p>A cultura de inovação se torna prioridade e a empresa se torna inovadora, adaptável e tráz o erro e seu aprendizado como parte do processo evolutivo.</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="1" name="structure">
						
					</label>
					<p>Departamentos não são colaborativos, contribuindo para uma visão fragmentada e desarticulada da jornada do cliente.</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="3" name="structure">
						
					</label>
					<p>Reconhecimento de padrões de sucesso para a validação e iteração de estruturas de inovação.</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="4" name="structure">
						
					</label>
					<p>A organização consegue responder mais rapidamente e estabelece uma estratégia de inovação focada no usuário. Cada departamento entende seu papel para trabalhar em direção a uma visão única de transformação digital.</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="2" name="structure">
						
					</label>
					<p>A cultura de experimentação incentiva os primeiros pilotos, mesmo a empresa ainda atuando majoritariamente em silos. </p>
				</div>
			</div>

			<a href="#dataAnalytics" class="iniciar">
				<div class="btn"><img src="images/right-arrow-blue.png" alt=""></div>
				<div class="text">próximo</div>
			</a>
		</div>
	</div>
	<!-- FIM STRUCTURE -->

	<!-- COMEÇO DATA & ANALYTICS -->
	<div class="full-height" id="dataAnalytics">
		<div class="content">
			<h3>#4 data & analytics.</h3>
			<h5>Como a organização <b>estrutura e utiliza os dados</b>, mensura as iniciativas e gera insights relevantes para apresentá-los e manejá-los dentro da organização.</h5>


			<div class="flex">
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="4" name="dataAnalytics">
						
					</label>
					<p>Foco na otimização de estruturas de inovação embasada por resultados.</p>
					<p>Dados guiam as decisões da organização.</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="2" name="dataAnalytics">
						
					</label>
					<p>Foco na mensuração do contato dos colaboradores com o tema inovação.</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="3" name="dataAnalytics">
						
					</label>
					<p>Dados focados na geração de track records.</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="1" name="dataAnalytics">
						
					</label>
					<p>As atividades são direcionadas pelo feeling da liderança sem embasamento claro.</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="5" name="dataAnalytics">
						
					</label>
					<p>Dados não apenas guiam as decisões, agora são fontes importantes para a geração de insights., usufruindo de análise preditiva e correlação em diferentes esferas.</p>
				</div>
			</div>

			<a href="#technology" class="iniciar">
				<div class="btn"><img src="images/right-arrow.png" alt=""></div>
				<div class="text">próximo</div>
			</a>
		</div>
	</div>
	<!-- FIM DATA & ANALYTICS -->

	<!-- COMEÇO TECHNOLOGY -->
	<div class="full-height azul" id="technology">
		<div class="content">
			<h3>#5 technology.</h3>
			<h5><b>Estudo e implementação de tecnologias</b> direcionadas ao Customer Experience e introdução do contexto exponencial aplicado aos negócios.</h5>

			<div class="flex">
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="2" name="technology">
						
					</label>
					<p>Introdução do contexto tecnológico exponencial.</p>
					<p>Incentivo à utilização de tecnologias simples (RPAs, APIs).</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="5" name="technology">
						
					</label>
					<p>Existe um investimento e estudo contínuos em tecnologia de ponta, para não apenas reagir ao novo contexto tecnológico, e sim protagonizá-lo.</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="1" name="technology">
						
					</label>
					<p>A tecnologia é vista como mais um nicho de indústria, não fazendo parte das pautas da liderança.</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="4" name="technology">
						
					</label>
					<p>A organização possui capabilities internas para melhorias incrementais e agilidade com integrações com sistemas externos e contratação de terceiros.</p>
					<p>Tecnologia tem um roadmap claro para o direcionamento da empresa no contexto futuro.</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="3" name="technology">
						
					</label>
					<p>Desenvolvimento de tecnologias com nível conservador de complexidade. (IoT as a service, APIs, RPAs).</p>
					<p>Experimentação de POCs com startups, visando melhorias de primeiro horizonte.</p>
				</div>
			</div>

			<a href="#ambidexterity" class="iniciar">
				<div class="btn"><img src="images/right-arrow-blue.png" alt=""></div>
				<div class="text">próximo</div>
			</a>
		</div>
	</div>
	<!-- FIM TECHNOLOGY -->

	<!-- COMEÇO INNOVATION AMBIDEXTERITY -->
	<div class="full-height" id="ambidexterity">
		<div class="content">
			<h3>#6 innovation ambidexterity.</h3>
			<h5>Habilidade para conciliar duas operações aparentemente antagônicas: <b>excelência operacional e inovação</b>, direcionando investimentos em diferentes horizontes (presentes e futuros).</h5>

			<div class="flex">
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="1" name="ambidexterity">
						
					</label>
					<p>Não existem iniciativas robustas visando o futuro.</p>
					<p>O foco está na agregação de valor aos acionistas no curto prazo.</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="2" name="ambidexterity">
						
					</label>
					<p>Foco em atividades de 1º Horizonte para primeiros experimentos com frameworks de inovação.</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="3" name="ambidexterity">
						
					</label>
					<p>Foco no 1º Horizonte de Inovação para resultados claros de bottomline.</p>
					<p>Experimentação do 2º Horizonte com o intuito de aprendizado.</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="4" name="ambidexterity">
						
					</label>
					<p>Melhorias de 1º Horizonte saem da estratégia e são levadas como atividades de rotina.</p>
					<p>Lançamento dos primeiros produtos/serviços vindos de iniciativas de 2º Horizonte.</p>
					<p>Criam-se estruturas para incubação do 3º Horizonte.</p>
				</div>
				<div class="box">
					<label class="selecao-btn">
						<input type="radio" value="5" name="ambidexterity">
						
					</label>
					<p>Temos uma proporção clara de esforço em todos os horizontes de inovação. e.g. 80% 15% 5%, respectivamente, para 1º, 2º e 3º Horizontes.</p>
				</div>
			</div>

			<button class="iniciar" name="analisar">
				<div class="btn"><img src="images/right-arrow.png" alt=""></div>
				finalizar
			</button>
			
		</div>
	</div>
	<!-- FIM INNOVATION AMBIDEXTERITY -->
	</form>

	<?php
	if(isset($_POST['analisar'])){

		if(empty($_POST['leadership']) || empty($_POST['peopleAndOperations']) || empty($_POST['structure']) || empty($_POST['dataAnalytics']) || empty($_POST['technology']) || empty($_POST['ambidexterity'])){
			echo "<div class=\"preto\" id=\"resultado\" style=\"padding:5em 0;\"><h4>Ops! Antes preencha todos os campos :)</h4></div>";
		}else{
			$leadership = $_POST['leadership'];
			$peopleAndOperations = $_POST['peopleAndOperations'];
			$structure = $_POST['structure'];
			$dataAnalytics = $_POST['dataAnalytics'];
			$technology = $_POST['technology'];
			$ambidexterity = $_POST['ambidexterity'];

			$valorTotal = round(($leadership+$peopleAndOperations+$structure+$dataAnalytics+$technology+$ambidexterity)/6, 2);

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

			date_default_timezone_set('America/Sao_Paulo'); 
			// Salvar arquivo
			$data = "\r\n################################################ \r\n".
			"Submissão da DHL: \r\n".
			"Leadership: ".$leadership."\r\n".
			"People & Operations: ".$peopleAndOperations."\r\n".
			"Structure: ".$structure."\r\n".
			"Data Analytics: ".$dataAnalytics."\r\n".
			"Technology: ".$technology."\r\n".
			"Ambidexterity: ".$ambidexterity."\r\n".
			"Valor total: ".$valorTotal."\r\n".
			"Horário de submissão: ".date('d/m/Y - H:m:s')."\r\n".
			$fp = fopen('empresas.txt', 'a');
			fwrite($fp, $data);
			fclose($fp);

			include_once("../admin/classes/Assessment.class.php");
			$objAssessment = new Assessment();
			$objAssessment->inserir($_POST, $valorTotal);

	?>
	<div class="full-height preto" id="resultado">
		<div class="content">
			<b>SEU ESTÁGIO DE INOVAÇÃO:</b>
			
			<h2><?=$valorTotal;?></h2>
			
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
				<b>Leadership:</b> <?=$leadership;?> | <b>People & Operations:</b> <?=$peopleAndOperations;?> | <b>Structure:</b> <?=$structure;?> | <b>Data analytics:</b> <?=$dataAnalytics;?> | <b>Technology:</b> <?=$technology;?> | <b>Ambidexterity:</b> <?=$ambidexterity;?>
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
	<?php
		}
	}
	?>

	<div style="width: 100%; padding:1em 0; text-align: center;">
		<img src="images/weme.png" alt="logo da weme">
	</div>
<script src="js/jquery-3.4.1.min.js"></script>

<script>
	// Menu responsivo
	function openNav() {
	  document.getElementById("myNav").style.display = "flex";
	}

	function closeNav() {
	  document.getElementById("myNav").style.display = "none";
	}

	// Smooth scroll
	$(document).ready(function(){
		$('a[href^="#"]').on('click', function (e) {
			e.preventDefault();

			var target = this.hash;
			var $target = $(target);

			$('html, body').animate({
				'scrollTop': $target.offset().top
			}, 1000, 'swing');
		});
	});	
</script>

</body>
</html>