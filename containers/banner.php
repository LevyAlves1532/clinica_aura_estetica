<div class="hero container hero__container" id="inicio">
    <section class="hero__content" aria-labelledby="hero-title">
        <p class="hero__eyebrow">
            <span class="hero__eyebrow-icon" aria-hidden="true">✦</span>
            <span>+12 anos de excelência médica · Dra. Elena Rossi (CRM 148.920 / RQE)</span>
        </p>

        <h1 class="hero__title" id="hero-title">
            Sua pele, cuidada com <em>ciência</em>, sensibilidade e sofisticação.
        </h1>

        <p class="hero__description">
            Protocolos dermatológicos de alta precisão desenhados sob medida para realçar sua beleza autêntica, com naturalidade e conforto absoluto em uma atmosfera de quiet luxury.
        </p>

        <div class="hero__actions">
            <?php $cButton([
                'label' => 'Agende sua avaliação exclusiva',
                'suffixIcon' => '<span aria-hidden="true">→</span>',
                'url' => '#reserva',
            ]); ?>
            <?php $cButton([
                'label' => 'Conheça os protocolos',
                'url' => '#resultados',
                'color' => 'secondary',
            ]); ?>
        </div>

        <div class="hero__metrics" id="avaliacao" aria-label="Indicadores da clínica">
            <?php $cMetric([
                'icon' => '♙',
                'value' => '+3.500',
                'key' => 'Pacientes atendidos',
            ]) ?>
            <?php $cMetric([
                'icon' => '♙',
                'value' => '100%',
                'key' => 'Atendimento privativo',
            ]) ?>
            <?php $cMetric([
                'icon' => '♙',
                'value' => 'ANVISA & FDA',
                'key' => 'Tecnologia certificada',
            ]) ?>
        </div>
    </section>

    <section class="hero__visual" id="protocolos" aria-label="Tratamento facial">
        <div class="hero__image-frame">
            <img
                class="hero__image"
                src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?auto=format&amp;fit=crop&amp;w=1100&amp;q=85"
                alt="Mulher recebendo tratamento facial em uma clínica estética"
            >
        </div>

        <aside class="hero__callout">
            <span class="hero__callout-icon" aria-hidden="true">
                <span class="material-symbols-outlined">
                    wand_stars
                </span>
            </span>
            <div>
                <strong>Mapeamento 3D</strong>
                <span>Diagnóstico Celular</span>
                <p>Biometria facial minuciosa antes de qualquer intervenção, respeitando suas feições naturais.</p>
            </div>
        </aside>
    </section>
</div>
