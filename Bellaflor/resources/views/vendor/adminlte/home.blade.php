@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="Colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Pemodule</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500,600" rel="stylesheet">
		
	</head>
	<body>
		<div class="main-wrapper-first">
			<div class="hero-area relative">
				
				<div class="banner-area">
					<div class="overlay overlay-bg"></div>
					<div class="container">
						<div class="row height align-items-center justify-content-center">
							<div class="col-lg-7">
								<div class="banner-content text-center">
									<h4>Douglas P. Santos</h4>
									<h1>Informações</h1>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-wrapper">
			<!-- Start Feature Area -->
			<section class="featured-area pt-100 pb-100">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6">
							<div class="feature-left">
								<h2>
									<br>Quem sou ?<br>
									
								</h2>
								<p>	
									Sou um estudante de Ciência da computação, cursando o 5º semestre no IFC-Videira.<br>
									Meu nome é Douglas Prado dos Santos, tenho 19 anos e sou brasileiro. Atualmente moro em videira.<br>

									<br>Almejo crescer na área de TI, com principais focos no desenvolvimento web e mobile.<br>
									Portanto, acredito que a oportunidade de estagiar na prefeitura municipal de Videira<br>
									me traria um grande desenvolvimento profissional e pessoal.

								</p>
								
							</div>
						</div>
						<div class="col-md-6">
							<div class="feature-right active-feature-carousel">
								<div class="single-slider item">
									<img src="img/pp.jpg" alt="">
								</div>								
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Feature Area -->
			<!-- Start parallux Area -->
			<section class="parallux-area pt-100 pb-100 relative" data-parallax="scroll" data-image-src="img/parallux-bg.jpg">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-end">
						<div class="col-lg-5 col-md-6 col-sm-12">
							<h2>
								Capacidades 
								<span>Técnicas</span> 
							</h2>
							<h4>
								( Relevantes à vaga )
							</h4>
							<p>
							<br>1. PHP - Laravel.<br>
								2. SQL - MySQL, PostgreSQL.<br>
								3. JAVA - Android.<br>
								4. Git Hub.<br>
								5. HTML - CSS - Bootstrap.<br>
							</p>
							
						</div>
					</div>
				</div>
			</section>
			<!-- End parallux Area -->
			<!-- Start service Area -->
			<section class="service-area">
				<div class="container">
				<h2>Projetos realizados - Experiência</h2>
				<h4>( Relevantes à vaga )<br><br></h4>
					<div class="row">
						<div class="col-md-6">
							<div>
								<div class="overlay overlay-content">
									<h4 class="text-uppercase">aplicativo android para auxiliar vendas</h4>
									<p>
									Aplicativo mobile que auxilia vendedores da empresa Bella-flor, fornecendo:<br>
									Gerência de clientes e produtos.<br>
									Realização de vendas com relatórios. <br>
									Comunicação de venda instantânea com a central.<br>
									Armazenamento online.<br>

									<br>Ferramentas utilizadas:<br><br>
									- JAVA (Android)<br>
									- SQL (MySQL)<br>
									- XML <br>

									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div>
								<div class="overlay overlay-content">
									<h4 class="text-uppercase">processo seletivo - ( Laravel )</h4>
									<p>
									Desenvolvimento web, simulando um processo seletivo real, onde é possível: <br>
									Registrar-se no processo seletivo.<br>
									Inscrever-se nos cursos com editais aberto.<br>
									Acompanhar as vagas, e seu status de aprovação.<br>

									<br>Ferramentas utilizadas:<br><br>
									- PHP (Laravel)<br>
									- SQL (MySQL)<br>
									- HTMl - CSS - Bootstrap<br>
									- Git Hub.<br>

									</p>
								</div>
							</div>
						</div>					
					</div>
				</div>
			</section>		
	</body>
</html>
		
@endsection
