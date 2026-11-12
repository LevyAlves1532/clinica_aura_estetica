<section class="atelier" id="resultados" aria-labelledby="atelier-title">
    <div class="container atelier__container">
        <div class="atelier__header">
            <div>
                <p class="atelier__eyebrow">Protocolos de alta precisão</p>
                <h2 class="atelier__title" id="atelier-title">Atelier Facial Aura</h2>
            </div>

            <div class="atelier__filters" aria-label="Categorias de tratamentos">
                <?php $cFilterButton(['label' => 'Todos', 'active' => true]); ?>
                <?php $cFilterButton(['label' => 'Regeneração']); ?>
                <?php $cFilterButton(['label' => 'Sustentação']); ?>
                <?php $cFilterButton(['label' => 'Tecnologia laser']); ?>
            </div>
        </div>

        <div class="atelier__grid">
            <?php $cTreatmentCard([
                'image' => 'https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?auto=format&fit=crop&w=900&q=85',
                'imageAlt' => 'Paciente recebendo limpeza de pele em clínica estética',
                'tag' => 'Purificação',
                'title' => 'Limpeza de Pele &<br>Hidrodermoabrasão',
                'description' => 'Extração indolor assistida por sucção eletrostática suave, desintoxicação celular e infusão de peptídeos antioxidantes.',
                'duration' => '75 min',
            ]); ?>
            <?php $cTreatmentCard([
                'image' => 'https://images.unsplash.com/photo-1616394584738-fc6e612e71b9?auto=format&fit=crop&w=900&q=85',
                'imageAlt' => 'Paciente recebendo peeling facial em clínica estética',
                'tag' => 'Textura & Tom',
                'title' => 'Peelings Médicos & Renovação<br>Celular',
                'description' => 'Uniformização refinada da textura dérmica, controle de hipercromias e estímulo queratolítico sem descamações agressivas.',
                'duration' => '50 min',
            ]); ?>
            <?php $cTreatmentCard([
                'image' => 'https://images.unsplash.com/photo-1619451334792-150fd785ee74?auto=format&fit=crop&w=900&q=85',
                'imageAlt' => 'Profissional realizando microagulhamento facial',
                'tag' => 'Indução de Colágeno',
                'title' => 'Microagulhamento & Drug<br>Delivery',
                'description' => 'Estímulo biológico profundo com microcanais de absorção estéreis para infusão de fatores de crescimento e viço extremo.',
                'duration' => '60 min',
            ]); ?>
            <?php $cTreatmentCard([
                'image' => 'https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?auto=format&fit=crop&w=900&q=85',
                'imageAlt' => 'Paciente recebendo tratamento de laser facial',
                'tag' => 'Tecnologia Óptica',
                'title' => 'Laser & Fototerapia Avançada',
                'description' => 'Comprimento de onda ajustável para correção de vasinhos, manchas solares e fotoenvelhecimento de alta precisão dérmica.',
                'duration' => '45 min',
            ]); ?>
            <?php $cTreatmentCard([
                'image' => 'https://images.unsplash.com/photo-1616394584738-fc6e612e71b9?auto=format&fit=crop&w=900&q=85',
                'imageAlt' => 'Profissional realizando avaliação facial em paciente',
                'tag' => 'Arquitetura Facial',
                'title' => 'Bioestimuladores & Harmonização<br>Sutil',
                'description' => 'Redefinição milimétrica de sustentação e banco de colágeno a longo prazo, mantendo sua expressão autêntica inalterada.',
                'duration' => '60–90 min',
            ]); ?>
            <?php $cTreatmentCard([
                'image' => 'https://images.unsplash.com/photo-1611930022073-b7a4ba5fcccd?auto=format&fit=crop&w=900&q=85',
                'imageAlt' => 'Produtos de skincare da linha Aura',
                'tag' => 'Cosmiatria Pessoal',
                'title' => 'Skincare Atelier & Fórmulas<br>Magistrais',
                'description' => 'Elaboração de rotina dermocosmética manipulada conforme o pH, espessura e sensibilidade singular da sua barreira cutânea.',
                'duration' => '40 min',
            ]); ?>
        </div>

        <aside class="atelier__callout" aria-label="Agendamento de consulta inicial">
            <div>
                <h3>Não tem certeza de qual protocolo é ideal para você?</h3>
                <p>Nossa avaliação médica dermatológica mapeia detalhadamente as necessidades biológicas da sua pele antes de qualquer indicação clínica.</p>
            </div>
            <?php $cButton([
                'label' => 'Agendar consulta inicial',
                'url' => '#reserva',
                'class' => 'atelier__callout-button',
            ]); ?>
        </aside>
    </div>
</section>