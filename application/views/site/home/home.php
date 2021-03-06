<?php print_r(get_navegador()); ?>

	<header>
		<div class="container">
		    <div class="row">
		        <div class="col-lg-12 balao text-left">
				<p>"<?php echo $fraseAt ?>"</p>
				<small>Frase gerada automagicamente a cada vez que acessa o site, evite atualizar para não cansar o sistema. Ele é um cara muito ocupado.</small>
			</div>
		    </div>
		    <div class="row">
		        <div class="col-lg-12 balao text-left">
				<p><strong>Sistema diz:</strong> <?php echo $fraseTempo ?></p>
			</div>
		    </div>
		    <div class="row">
		        <div class="col-lg-12">
				<img class="img-responsive img-circle" src="<?php echo site_url('/assets/site/img/profile.jpeg')?>" alt="" style="max-height: 200px; border: 12px solid #2c2c2c;">
			</div>
		    </div>
		    <div class="row">
		        <div class="col-lg-12">
		            
		            <div class="intro-text">
		                <span class="skills">Analista de Sistemas - Programador - <?php echo $skillVerdadeiraRandom ?></span>
		                <hr class="line-simbol">
				<a target="_blanck" href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
				<a target="_blanck" href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
				<a target="_blanck" href="github.com/eduardobach" class="btn-social btn-outline"><i class="fa fa-fw fa-github"></i></a>
		            </div>
		        </div>
		    </div>
		</div>
	    </header>

	    <section id="portfolio">
		<div class="container">
		    <div class="row">
		        <div class="col-lg-12 text-center">
		            <h2>Portfolio</h2>
		            <hr class="line-primary">
		        </div>
		    </div>
		    <div class="row">
		        <div class="col-sm-4 portfolio-item">
		            <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
		                <div class="caption">
		                    <div class="caption-content">
		                        <i class="fa fa-search-plus fa-3x"></i>
		                    </div>
		                </div>
		                <img src="img/portfolio/cabin.png" class="img-responsive" alt="">
		            </a>
		        </div>
		        <div class="col-sm-4 portfolio-item">
		            <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
		                <div class="caption">
		                    <div class="caption-content">
		                        <i class="fa fa-search-plus fa-3x"></i>
		                    </div>
		                </div>
		                <img src="img/portfolio/cake.png" class="img-responsive" alt="">
		            </a>
		        </div>
		    </div>
		</div>
	    </section>



	    <section class="success" id="objetivos">
		<div class="container">
		    <div class="row">
		        <div class="col-lg-12 text-center">
		            <h2>Por quê?</h2>
		            <hr class="line-simbol">
		        </div>
		    </div>
		    <div class="row">
		        <div class="col-lg-4">
				<h2>Empregador</h2>
		            <p>Caso você leitor seja um atual/futuro empregador dos meus serviços, favor desconciderar toda a sátira e bom humor aqui demonstrado, saiba que sou um trabalhador empenhado e de bom coração.</p>
		        </div>
		        <div class="col-lg-4">
				<h2>Amigo</h2>
		            <p>Para os meus amigos que visitarem este singelo endereço fico agradecido por investirem parte do seu precioso tempo comigo.</p>
		        </div>
		    </div>
		</div>
	    </section>

	    <section class="success" id="quando">
		<div class="container">
		    <div class="row">
		        <div class="col-lg-12 text-center">
		            <h2>Quando?</h2>
		            <hr class="line-simbol">
		        </div>
		    </div>
		    <div class="row">
		        <div class="col-lg-8 col-lg-offset-2">
		            <p>Entrei nessa vida de <strong>Garoto de Programa</strong> com 16 anos de idade e apartir de então não consegui sair, faço meu serviço porquê traz comida para mesa da minha família. Comovido com minha história <a href="#contato">me contrate</a>.</p>
		        </div>
		    </div>
		</div>
	    </section>

	    <section id="contato">
		<div class="container">
		    <div class="row">
		        <div class="col-lg-12 text-center">
		            <h2>Contato</h2>
		            <hr class="line-primary">
		        </div>
		    </div>
		    <div class="row">
		        <div class="col-lg-8 col-lg-offset-2">
		            <form name="sentMessage" id="contactForm" novalidate>
		                <div class="row control-group">
		                    <div class="form-group col-xs-12 floating-label-form-group controls">
		                        <label>Nome</label>
		                        <input type="text" class="form-control" placeholder="Nome" id="name" required data-validation-required-message="Informe seu nome.">
		                        <p class="help-block text-danger"></p>
		                    </div>
		                </div>
		                <div class="row control-group">
		                    <div class="form-group col-xs-12 floating-label-form-group controls">
		                        <label>Email</label>
		                        <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Informe seu email.">
		                        <p class="help-block text-danger"></p>
		                    </div>
		                </div>
		                <div class="row control-group">
		                    <div class="form-group col-xs-12 floating-label-form-group controls">
		                        <label>Telefone</label>
		                        <input type="tel" class="form-control" placeholder="Telefone" id="phone" required data-validation-required-message="Informe sei número de telefone.">
		                        <p class="help-block text-danger"></p>
		                    </div>
		                </div>
		                <div class="row control-group">
		                    <div class="form-group col-xs-12 floating-label-form-group controls">
		                        <label>Mensagem</label>
		                        <textarea rows="5" class="form-control" placeholder="Mensagem" id="message" required data-validation-required-message=""></textarea>
		                        <p class="help-block text-danger"></p>
		                    </div>
		                </div>
		                <br>
		                <div id="success"></div>
		                <div class="row">
		                    <div class="form-group col-xs-12">
		                        <button type="submit" class="btn btn-success btn-lg">Enviar</button>
		                    </div>
		                </div>
		            </form>
		        </div>
		    </div>
		</div>
	    </section>

	    <footer class="text-center">
		<div class="footer-above">
		    <div class="container">
		        <div class="row">
		            <div class="footer-col col-md-4">
		                <h3>Local</h3>
		                <p>New Hamburgo<br>
				Estados Unidos do Sul, Brasil</p>
		            </div>
		            <div class="footer-col col-md-4">
		                <ul class="list-inline">
		                    <li>
		                        <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
		                    </li>
		                    <li>
		                        <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
		                    </li>
		                    <li>
		                        <a href="github.com/eduardobach" class="btn-social btn-outline"><i class="fa fa-fw fa-github"></i></a>
		                    </li>
		                </ul>
		            </div>
		            <div class="footer-col col-md-4">
		                <h3>Súplica</h3>
		                <p>Peço encarecidamente que piadas comigo sejam feitas em minha frente, fico muito triste de não poder rir da minha insignificância junto contigo.</p>
		            </div>
		        </div>
		    </div>
		</div>
		<div class="footer-below" id="copyright">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-12">
		                Copyright &copy; 2015 Eduardo Bach
		            </div>
		        </div>
		    </div>
		</div>
	    </footer>

	    <div class="scroll-top page-scroll visible-xs visible-sm">
		<a class="btn btn-primary" href="#page-top">
		    <i class="fa fa-chevron-up"></i>
		</a>
	    </div>

	    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
		    <div class="close-modal" data-dismiss="modal">
		        <div class="lr">
		            <div class="rl">
		            </div>
		        </div>
		    </div>
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-8 col-lg-offset-2">
		                <div class="modal-body">
		                    <h2>Project Title</h2>
		                    <hr class="line-primary">
		                    <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
		                    <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
		                    <ul class="list-inline item-details">
		                        <li>Client:
		                            <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
		                            </strong>
		                        </li>
		                        <li>Date:
		                            <strong><a href="http://startbootstrap.com">April 2014</a>
		                            </strong>
		                        </li>
		                        <li>Service:
		                            <strong><a href="http://startbootstrap.com">Web Development</a>
		                            </strong>
		                        </li>
		                    </ul>
		                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	    </div>
	    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
		    <div class="close-modal" data-dismiss="modal">
		        <div class="lr">
		            <div class="rl">
		            </div>
		        </div>
		    </div>
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-8 col-lg-offset-2">
		                <div class="modal-body">
		                    <h2>Project Title</h2>
		                    <hr class="line-primary">
		                    <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
		                    <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
		                    <ul class="list-inline item-details">
		                        <li>Client:
		                            <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
		                            </strong>
		                        </li>
		                        <li>Date:
		                            <strong><a href="http://startbootstrap.com">April 2014</a>
		                            </strong>
		                        </li>
		                        <li>Service:
		                            <strong><a href="http://startbootstrap.com">Web Development</a>
		                            </strong>
		                        </li>
		                    </ul>
		                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	    </div>
	    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
		    <div class="close-modal" data-dismiss="modal">
		        <div class="lr">
		            <div class="rl">
		            </div>
		        </div>
		    </div>
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-8 col-lg-offset-2">
		                <div class="modal-body">
		                    <h2>Project Title</h2>
		                    <hr class="line-primary">
		                    <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
		                    <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
		                    <ul class="list-inline item-details">
		                        <li>Client:
		                            <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
		                            </strong>
		                        </li>
		                        <li>Date:
		                            <strong><a href="http://startbootstrap.com">April 2014</a>
		                            </strong>
		                        </li>
		                        <li>Service:
		                            <strong><a href="http://startbootstrap.com">Web Development</a>
		                            </strong>
		                        </li>
		                    </ul>
		                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	    </div>
	    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
		    <div class="close-modal" data-dismiss="modal">
		        <div class="lr">
		            <div class="rl">
		            </div>
		        </div>
		    </div>
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-8 col-lg-offset-2">
		                <div class="modal-body">
		                    <h2>Project Title</h2>
		                    <hr class="line-primary">
		                    <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
		                    <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
		                    <ul class="list-inline item-details">
		                        <li>Client:
		                            <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
		                            </strong>
		                        </li>
		                        <li>Date:
		                            <strong><a href="http://startbootstrap.com">April 2014</a>
		                            </strong>
		                        </li>
		                        <li>Service:
		                            <strong><a href="http://startbootstrap.com">Web Development</a>
		                            </strong>
		                        </li>
		                    </ul>
		                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	    </div>
	    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
		    <div class="close-modal" data-dismiss="modal">
		        <div class="lr">
		            <div class="rl">
		            </div>
		        </div>
		    </div>
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-8 col-lg-offset-2">
		                <div class="modal-body">
		                    <h2>Project Title</h2>
		                    <hr class="line-primary">
		                    <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
		                    <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
		                    <ul class="list-inline item-details">
		                        <li>Client:
		                            <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
		                            </strong>
		                        </li>
		                        <li>Date:
		                            <strong><a href="http://startbootstrap.com">April 2014</a>
		                            </strong>
		                        </li>
		                        <li>Service:
		                            <strong><a href="http://startbootstrap.com">Web Development</a>
		                            </strong>
		                        </li>
		                    </ul>
		                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	    </div>
	    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
		    <div class="close-modal" data-dismiss="modal">
		        <div class="lr">
		            <div class="rl">
		            </div>
		        </div>
		    </div>
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-8 col-lg-offset-2">
		                <div class="modal-body">
		                    <h2>Project Title</h2>
		                    <hr class="line-primary">
		                    <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
		                    <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
		                    <ul class="list-inline item-details">
		                        <li>Client:
		                            <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
		                            </strong>
		                        </li>
		                        <li>Date:
		                            <strong><a href="http://startbootstrap.com">April 2014</a>
		                            </strong>
		                        </li>
		                        <li>Service:
		                            <strong><a href="http://startbootstrap.com">Web Development</a>
		                            </strong>
		                        </li>
		                    </ul>
		                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	    </div>
