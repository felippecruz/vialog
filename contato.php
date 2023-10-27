<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shorticon icon"
    href="https://d1jfoe5og03v22.cloudfront.net/EmpresaLogo/via-log-transporte-d18f87fa-8f93-4507-ae48-e66f0c13bf37.gif">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>
</head>
<body>
<?php
include('contaheader.php')
  ?>
    <main>

    <section id=contato>

  
  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h2 class="w3-wide w3-center">CONTATO<i class="bi bi-object-ungroup" aria-hidden="true"></i></h2>
    <p class="w3-opacity w3-center"><i>Envie-nos uma mensagem</i></p>
    <form action="https://formsubmit.co/vialogtransportes140@gmail.com" method="POST">
      <input type="hidden" name="_template" value="basic">
      <input class="w3-input w3-border" type="text" id="name" name="nome" placeholder="Nome" required name="Nome">
      <input class="w3-input w3-section w3-border" type="text" id="email" name="email" placeholder="Email" required
      name="Email">
      <input class="w3-input w3-section w3-border" type="text" id="assunto" name="assunto" placeholder="Assunto"
      required name="Assunto">
      <input class="w3-input w3-section w3-border" type="text" id="message" name="mensagem" placeholder="Mensagem"
      required name="Menssagem">
      <input type="hidden" name="_next" value="https://vialogtransporte.log.br/obrigado.php">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> ENVIAR
      </button>
    </form>
  </div>
  <div class="w3-row w3-padding-32">
    <div class="w3-col m6 w3-large w3-margin-bottom">
      <i class="bi bi-geo-alt" style="width:30px"></i> São Lúis, BR<br>
      <i class="bi bi-phone" style="width:30px"></i> <a href="callto:+551124834352"> +55 (11) 2483 -
        4352</a><br>
      <i class="bi bi-envelope" style="width:30px"> </i><a href="/cdn-cgi/l/email-protection#cfb9aaa1abaebcfffee1bcbfa08fb9a6aea3a0a8bbbdaea1bcbfa0bdbbaabce1aca0a2e1adbd"><span class="__cf_email__" data-cfemail="7503101b11140645445b06051a35031c14191a120107141b06051a070110065b161a185b1707">[email&#160;protected]</span></a><br>
    </div>
  </div>

</section>

    </main>

    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <!---script src="assets/js/script.js"></script---->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>