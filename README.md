# ✨ Clínica Estética Premium

Site institucional responsivo para a clínica fictícia Aura Estética Avançada. A página apresenta tratamentos faciais, equipe médica, informações sobre a jornada de atendimento, perguntas frequentes e um formulário de pré-reserva.

## ✨ Funcionalidades

- Página única composta por seções PHP reutilizáveis.
- Layout responsivo para dispositivos móveis, tablets e desktops.
- Menu de navegação com rolagem suave e versão expansível para telas pequenas.
- Perguntas frequentes em formato de acordeão.
- Formatação e validação do telefone informado no formulário.
- Pré-reserva preparada para envio pelo WhatsApp.
- Uso de elementos semânticos e atributos ARIA para apoiar a acessibilidade.

## 🛠️ Tecnologias utilizadas

| Tecnologia | Finalidade |
| :--- | :--- |
| PHP | Composição das seções e renderização dos componentes reutilizáveis |
| HTML5 | Estrutura e conteúdo da página |
| CSS3 | Estilos, layout responsivo e identidade visual |
| JavaScript | Menu, navegação, FAQ e interação do formulário |
| Google Fonts | Fontes Playfair Display e Plus Jakarta Sans |
| Material Symbols | Ícones da interface |

## 📋 Requisitos

- PHP **8.0 ou superior**.
- Navegador moderno.
- Conexão com a internet para carregar fontes, ícones e imagens externas.

O projeto não utiliza gerenciador de dependências nem requer banco de dados ou configuração de servidor adicional para a demonstração local.

## 🚀 Executando localmente

1. Abra um terminal na pasta do projeto.
2. Inicie o servidor embutido do PHP:

   ```bash
   php -S localhost:8000
   ```

3. Acesse [http://localhost:8000](http://localhost:8000) no navegador.
4. Para encerrar o servidor, pressione `Ctrl+C` no terminal.

Também é possível servir os arquivos usando um servidor web com suporte a PHP, apontando o diretório público para a raiz do projeto.

## 💬 Interações da página

- **Navegação:** os links do menu levam às seções da página. Em telas pequenas, o botão do cabeçalho abre e fecha o menu.
- **FAQ:** ao abrir uma pergunta, as demais são recolhidas.
- **Telefone:** o campo aceita números digitados e aplica a formatação de celular brasileiro com DDD.
- **Pré-reserva:** após o preenchimento dos campos obrigatórios, o formulário abre o WhatsApp com uma mensagem contendo os dados informados. Não há envio para um servidor, armazenamento ou integração com agenda.

> O formulário direciona para o número de WhatsApp configurado em `assets/js/app.js`. Atualize esse número antes de usar o site em outro contexto.

## 🧱 Estrutura do projeto

```text
.
├── index.php                 # Documento HTML e composição da página
├── components.php            # Registro de componentes PHP reutilizáveis
├── components/               # Componentes de interface parametrizados
│   ├── button.php
│   ├── faq-item.php
│   ├── feature-card.php
│   ├── filter-button.php
│   ├── form-field.php
│   ├── formation-card.php
│   ├── journey-item.php
│   ├── metric.php
│   ├── regeneration-card.php
│   ├── reservation-benefit.php
│   ├── testimonial-card.php
│   └── treatment-card.php
├── containers/               # Seções completas incluídas em index.php
│   ├── atelier.php
│   ├── banner.php
│   ├── doctor.php
│   ├── faq.php
│   ├── footer.php
│   ├── header.php
│   ├── journey.php
│   ├── regeneration.php
│   ├── reservation.php
│   ├── standards.php
│   └── testimonials.php
└── assets/
    ├── css/
    │   └── app.css           # Estilos e regras responsivas
    └── js/
        └── app.js            # Interações da página
```

## 🧩 Organização dos componentes

`index.php` inclui `components.php`, que registra funções para renderizar os arquivos em `components/` com os dados recebidos. As seções em `containers/` usam essas funções para compor o conteúdo da página, mantendo os elementos repetidos separados da estrutura principal.

Para ajustar a identidade visual, edite `assets/css/app.css`. Para alterar textos e conteúdo, edite o arquivo da seção correspondente em `containers/`. O JavaScript e as configurações de interatividade ficam em `assets/js/app.js`.

## ⚠️ Observações

- As imagens são carregadas do Unsplash e podem ser alteradas nos arquivos em `containers/`.
- O formulário é uma demonstração de pré-reserva via WhatsApp; não existe backend para processar ou armazenar dados.
- Os botões de categoria dos tratamentos estão presentes na interface, mas não há lógica implementada para filtrar os cartões.