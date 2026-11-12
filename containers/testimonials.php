<section class="testimonials" id="testimonials" aria-labelledby="testimonials-title">
    <div class="container testimonials__container">
        <header class="testimonials__header">
            <div>
                <p class="testimonials__eyebrow">Experiências vivenciadas</p>
                <h2 class="testimonials__title" id="testimonials-title">Vozes de Confiança</h2>
            </div>

            <div class="testimonials__summary" aria-label="Avaliação média de 4.9 de 5">
                <span class="testimonials__stars" aria-hidden="true">★★★★★</span>
                <strong>4.9 / 5.0</strong>
                <span>· Mais de 240 avaliações</span>
            </div>
        </header>

        <div class="testimonials__grid">
            <?php $cTestimonialCard([
                'initial' => 'C',
                'quote' => 'O que mais me impressionou na clínica Aura foi a discrição e a ausência de pressão estética. A Dra. Elena identificou exatamente o que eu incomodava e nunca sugerir excessos. O resultado foi um rosto renovado e radiante.',
                'name' => 'Camila Montebelo',
                'details' => '42 anos · Executiva de Mercado',
            ]); ?>
            <?php $cTestimonialCard([
                'initial' => 'R',
                'quote' => 'Pontualidade impecável e ambiente privativo acolhedor. Faço a hidrodermoabrasão e o laser de renovação com frequência e não troco por nenhum outro lugar no Brasil. A atenção pós-procedimento é outro diferencial raro.',
                'name' => 'Rodrigo F. Vianna',
                'details' => '38 anos · Arquiteto',
            ]); ?>
            <?php $cTestimonialCard([
                'initial' => 'M',
                'quote' => 'Eu tinha muito receio de perder meus traços ou ficar com a pele marcada. O bioestimulador aplicado pela Dra. Elena devolveu sustentação com tanta naturalidade que meus amigos apenas comentam que pareço mais descansada.',
                'name' => 'Marina Castanho',
                'details' => '51 anos · Designer de Joias',
            ]); ?>
        </div>
    </div>
</section>