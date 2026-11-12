<section class="journey" id="jornada" aria-labelledby="journey-title">
    <div class="container journey__container">
        <header class="journey__header">
            <p class="journey__eyebrow">Fluxo transparente</p>
            <h2 class="journey__title" id="journey-title">Sua Jornada no Atelier</h2>
            <p class="journey__description">
                Cada detalhe do seu acolhimento foi projetado para assegurar conforto, escuta atenta e máxima segurança clínica do primeiro contato ao pós-procedimento.
            </p>
        </header>

        <div class="journey__grid">
            <?php $cJourneyItem([
                'number' => '01',
                'title' => 'Agendamento Privativo',
                'description' => 'Reserva direta com nosso concierge exclusivo, assegurando horário exclusivo sem filas ou encontros em sala de espera.',
            ]); ?>
            <?php $cJourneyItem([
                'number' => '02',
                'title' => 'Avaliação & Mapeamento',
                'description' => 'Consulta minuciosa de 60 minutos, escuta sensível dos seus objetivos e diagnóstico cutâneo digital tridimensional.',
            ]); ?>
            <?php $cJourneyItem([
                'number' => '03',
                'title' => 'Protocolo Sob Medida',
                'description' => 'Execução precisa com tecnologia regulamentada, anestesia tópica de alta eficácia e acolhimento focado em conforto integral.',
            ]); ?>
            <?php $cJourneyItem([
                'number' => '04',
                'title' => 'Longevidade & Suporte',
                'description' => 'Revisão médica presencial, precisão cosmética personalizada e acompanhamento por canal prioritário da clínica.',
                'active' => true,
            ]); ?>
        </div>
    </div>
</section>