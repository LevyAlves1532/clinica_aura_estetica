<header class="site-header">
    <div class="container site-header__container">
        <a class="site-header__brand" href="#inicio" aria-label="Aura Estética Avançada - início">
            <span class="site-header__brand-mark" aria-hidden="true">⌁</span>
            <span class="site-header__brand-copy">
                <strong>AURA</strong>
                <span>Estética Avançada</span>
            </span>
        </a>

        <button class="site-header__menu-toggle" type="button" aria-expanded="false" aria-controls="main-navigation">
            <span class="site-header__menu-icon" aria-hidden="true"><span></span><span></span><span></span></span>
            <span class="sr-only">Abrir menu</span>
        </button>

        <nav class="site-header__navigation" id="main-navigation" aria-label="Navegação principal">
            <a href="#clinica">Tratamentos</a>
            <a href="#depoimentos">A clínica</a>
            <a href="#resultados-clinicos">Resultados</a>
            <a href="#testimonials">Depoimentos</a>
            <a href="#faq">FAQ</a>
        </nav>

        <div class="site-header__actions">
            <?php $cButton([
                'label' => 'Agendar avaliação',
                'url' => '#avaliacao',
                'class' => 'button--header',
            ]); ?>
            <a class="site-header__profile" href="#clinica" aria-label="Conheça a Dra. Elena Rossi">
                <img
                    src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&amp;fit=crop&amp;w=120&amp;q=80"
                    alt="Dra. Elena Rossi"
                >
            </a>
        </div>
    </div>
</header>
