<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>8Health</title>
  <link rel="shortcut icon" href="assets/images/8.png" type="image/x-icon" />
  <link rel="stylesheet" href="assets/styles/style.css" />
  <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7"
      crossorigin="anonymous"
    /> -->
</head>

<body>
  <header>
    <nav class="nav-bar">
      <div class="logo">
        <img class="image" src="assets/images/8HealthNAVBAR.png" alt="" />
      </div>

      <div class="menu-toggle" onclick="document.querySelector('.nav-list').classList.toggle('active')">
        <span></span>
        <span></span>
        <span></span>
      </div>

    <ul class="nav-list">
      <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="pages/fint.php" class="nav-link">Dicas</a></li>
      <li class="nav-item"><a href="pages/quests.php" class="nav-link">Tarefas</a></li>
    </ul>
    

      <div class="login-button">
        <button><a href="#">Login</a></button>
      </div>
    </nav>
  </header>

  <h1>Bem-vindo ao 8Health</h1>
  <div class="intro">
  <p>
      O 8Health tem como objetivo te ajudar a cuidar melhor da sua saúde física, mental e espiritual.
      Baseado nos <strong>8 Remédios Naturais</strong>, você poderá monitorar seus hábitos e receber análises sobre seu progresso semanal e mensal.
    </p>
    <p>
      O conceito dos 8 Remédios Naturais tem origem em estudos de saúde natural e holística,
      popularizado pela escritora e educadora Ellen G. White no século XIX.
      Ele propõe que a verdadeira saúde é alcançada através de equilíbrio entre práticas naturais e consistentes.
    </p>
  </div>

  <div class="grid-container">
    <div class="remedio">
      <h2>🍎 Nutrição</h2>
      <p>Alimente-se com equilíbrio, focando em vegetais, frutas e alimentos naturais.</p>
    </div>
    <div class="remedio">
      <h2>💧 Água</h2>
      <p>AHidrate-se com água pura e suficiente ao longo do dia.</p>
    </div>
    <div class="remedio">
      <h2>🌳 Ar Puro</h2>
      <p>RBusque ambientes ao ar livre e respire profundamente.</p>
    </div>
    <div class="remedio">
      <h2>🌞 Luz Solar</h2>
      <p>Exponha-se ao sol moderadamente para obter vitamina D e bem-estar.</p>
    </div>
    <div class="remedio">
      <h2>🏃 Exercício</h2>
      <p>Movimente-se diariamente para fortalecer seu corpo e mente.</p>
    </div>
    <div class="remedio">
      <h2>🛌 Descanso</h2>
      <p>Durma bem e respeite os ciclos naturais do corpo.</p>
    </div>
    <div class="remedio">
      <h2>⚖️ Temperança</h2>
      <p>Evite excessos e vícios, mantendo o equilíbrio emocional e físico.</p>
    </div>
    <div class="remedio">
      <h2>🙏 Confiança em Deus</h2>
      <p>Alimente sua fé, sua espiritualidade e propósito de vida.</p>
    </div>
  </div>
  <div class="cta-button">
      <a href="pages/quests.php">Comece sua jornada de saúde</a>
  </div>

  <script src="assets/script/script.js"></script>
  <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
      crossorigin="anonymous"
    ></script> -->
</body>

</html>