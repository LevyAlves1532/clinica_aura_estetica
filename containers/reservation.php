<section class="reservation" id="reserva" aria-labelledby="reservation-title">
    <div class="container">
        <div class="reservation__card">
            <div class="reservation__content">
                <p class="reservation__eyebrow">Atendimento exclusivo</p>
                <h2 class="reservation__title" id="reservation-title">Dê o primeiro passo para a melhor versão da sua pele.</h2>
                <p class="reservation__description">
                    Nossos atendimentos semanais são estritamente limitados para assegurar pontualidade irrepreensível, acolhimento relaxante e dedicação total a você.
                </p>

                <ul class="reservation__benefits" aria-label="Diferenciais do atendimento">
                    <?php $cReservationBenefit([
                        'icon' => 'schedule',
                        'description' => 'Consultas com intervalo de 30 min para desinfecção e privacidade',
                    ]); ?>
                    <?php $cReservationBenefit([
                        'icon' => 'verified_user',
                        'description' => 'Concierge dedicado no pré e pós-atendimento',
                    ]); ?>
                    <?php $cReservationBenefit([
                        'icon' => 'local_parking',
                        'description' => 'Valet cortesia no local',
                    ]); ?>
                </ul>

                <div class="reservation__contact">
                    <p class="reservation__contact-label">Prefere agilizar via mensagem?</p>
                    <?php $cButton([
                        'label' => 'Conversar com o concierge no WhatsApp',
                        'suffixIcon' => '<span class="material-symbols-outlined" aria-hidden="true">chat</span>',
                        'url' => '#reserva',
                        'color' => 'secondary',
                        'class' => 'reservation__contact-button',
                    ]); ?>
                </div>
            </div>

            <div class="reservation__panel" role="group" aria-labelledby="reservation-form-title">
                <h3 class="reservation__panel-title" id="reservation-form-title">Solicitar Pré-Reserva</h3>
                <p class="reservation__panel-description">
                    Preencha os campos abaixo e nosso concierge entrará em contato em até 2 horas úteis.
                </p>

                <div class="reservation__fields">
                    <?php $cFormField([
                        'id' => 'reservation-name',
                        'label' => 'Nome completo',
                        'placeholder' => 'Como prefere ser chamado(a)?',
                    ]); ?>
                    <?php $cFormField([
                        'id' => 'reservation-phone',
                        'label' => 'WhatsApp / Telefone',
                        'type' => 'tel',
                        'placeholder' => '(11) 90000-0000',
                    ]); ?>
                    <?php $cFormField([
                        'id' => 'reservation-treatment',
                        'label' => 'Tratamento de maior interesse',
                        'type' => 'select',
                        'placeholder' => 'Selecione uma opção de cuidado',
                        'options' => ['Regeneração', 'Sustentação', 'Tecnologia laser'],
                    ]); ?>
                    <?php $cFormField([
                        'label' => 'Período de preferência',
                        'type' => 'choices',
                        'options' => ['Manhã', 'Tarde', 'Sábado'],
                    ]); ?>
                </div>

                <?php $cButton([
                    'label' => 'Solicitar agendamento privativo',
                    'suffixIcon' => '<span class="material-symbols-outlined" aria-hidden="true">event_available</span>',
                    'url' => '#reserva',
                    'class' => 'reservation__submit',
                ]); ?>

                <p class="reservation__privacy">Em conformidade rigorosa com a LGPD. Seus dados nunca serão compartilhados.</p>
            </div>
        </div>
    </div>
</section>
