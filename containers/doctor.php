<section class="doctor" id="depoimentos" aria-labelledby="doctor-title">
    <div class="container doctor__container">
        <div class="doctor__visual">
            <div class="doctor__portrait-wrapper">
                <img
                    class="doctor__portrait"
                    src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&amp;fit=crop&amp;w=900&amp;q=85"
                    alt="Dra. Elena Rossi em seu consultório"
                >
            </div>

            <div class="doctor__credential">
                <span class="material-symbols-outlined" aria-hidden="true">school</span>
                <div>
                    <strong>Membro titular SBD</strong>
                    <span>Sociedade Brasileira de Dermatologia</span>
                </div>
            </div>
        </div>

        <div class="doctor__content">
            <p class="doctor__eyebrow">Direção médica especializada</p>
            <h2 class="doctor__title" id="doctor-title">Dra. Elena Rossi</h2>
            <p class="doctor__registration">CRM/SP 148.920 · RQE 82.411 · Especialista em Medicina Estética Regenerativa</p>
            <p class="doctor__description">
                Graduada e pós-graduada pela Faculdade de Medicina da Universidade de São Paulo (USP) com Fellow clínico em Cosmiatria Avançada e Tecnologias Lasers no Harvard Medical Center. Elena atua com a convicção de que o verdadeiro luxo dermatológico reside no equilíbrio imperceptível.
            </p>

            <blockquote class="doctor__quote">
                “Acreditamos na estética que não se nota como procedimento, mas como um frescor luminoso que revela quem você é em sua versão mais descansada e autêntica.”
            </blockquote>

            <div class="doctor__formations" aria-label="Formações e certificações">
                <?php $cFormationCard([
                    'title' => 'USP',
                    'description' => 'Formação Acadêmica',
                ]); ?>
                <?php $cFormationCard([
                    'title' => 'Harvard',
                    'description' => 'Fellow Dermatológico',
                ]); ?>
                <?php $cFormationCard([
                    'title' => 'Biossegurança',
                    'description' => 'Certificação Grau 5',
                ]); ?>
            </div>
        </div>
    </div>
</section>