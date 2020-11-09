<?php $CSS = 'Portfolio.css';
    include '../App/Models/Texts.php';
?>

<section class="intro">

    <div id="header_portfolio">
        <h1 id="presentation-portfolio">
            <div href="" class="presentation-txt" data-period="2000" data-type='[ "Bienvenue sur mon portfolio", "J aime developper", "J aime les jolies choses", "Bon visionnage" ]'>
                <span class="wrap"></span>
            </div>
            <div class="typed-slash"></div>
        </h1>
        
        <div id="clock">

        </div>
        <div id="weather">
            <h1>
                <span id="city"></span>
                <span id="tooltip">Modifier la ville</span>
            </h1>
            <i></i>
            <h2>
                <span id="temperature"></span> °C (<span id="conditions"></span>)
            </h2>
        </div>
        <div id="country-bg">
        </div>
    </div>

	<div class="intro-block">
        <div class="cards-list">

            <div class="cards-unity">
                <div class="bg__card">
                    <div class="p1 card">
                        <div class="card-img"></div>
                        <div class="desc-card">
                            <p class="card-title">Webagency</p>
                            <p class="tags">Tags Tags Tags</p>
                        </div>    
                    </div>
                </div>
            </div>
                <div class="cards-unity">
                    <div class="bg__card">
                    <div class="p2 card">
                        <div class="card-img"></div>
                        <div class="desc-card">
                            <p class="card-title">Webagency</p>
                            <p class="tags">Tags Tags Tags</p>
                        </div>
                    </div>
                </div>
            </div>
                <div class="cards-unity">
                    <div class="bg__card">
                        <div class="p3 card">
                            <div class="card-img"></div>
                            <div class="desc-card">
                                <p class="card-title">Webagency</p>
                                <p class="tags">Tags Tags Tags</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cards-unity">
                    <div class="bg__card">
                    <div class="p4 card">
                        <div class="card-img"></div>
                        <div class="desc-card">
                            <p class="card-title">Webagency</p>
                            <p class="tags">Tags Tags Tags</p>
                        </div>
                    </div>
                </div>
            </div>
                <div class="cards-unity">
                    <div class="bg__card">
                    <div class="p5 card">
                        <div class="card-img"></div>
                        <div class="desc-card">
                            <p class="card-title">Webagency</p>
                            <p class="tags">Tags Tags Tags</p>
                        </div>
                    </div>
                </div>
            </div>
                <div class="cards-unity">
                    <div class="bg__card">
                    <div class="p6 card">
                        <div class="card-img"></div>
                        <div class="desc-card">
                            <p class="card-title">Webagency</p>
                            <p class="tags">Tags Tags Tags</p>
                        </div>
                    </div>
                </div>

                
                </div>
            </div>
        </div>
	</div>
		
</section>

<script src="<?= SCRIPTS . 'JS' . DIRECTORY_SEPARATOR . 'portfolio.js'?>"></script>
