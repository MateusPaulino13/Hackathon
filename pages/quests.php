<?php include "../actions/quests.php"?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Autoavaliação de Saúde</title>
  <link rel="stylesheet" href="../assets/styles/quests.css">
  <link rel="stylesheet" href="../assets/styles/style.css" />
  </head>
<body>
  <?php require("../includes/navbar.html") ?>

  <div class="form-container">
    <h1>Autoavaliação de Saúde</h1>
    <form action="#" method="post">
      
      <!-- Nutrição -->
      <div class="card">
        <h3>🍎 Nutrição</h3>
        <label><input type="radio" name="fruits" value="sim"> Comeu frutas hoje?</label>
        <label><input type="radio" name="vegetables" value="sim"> Comeu vegetais hoje?</label>
        <label><input type="radio" name="ultra_processed" value="sim"> Comeu ultraprocessados?</label>
      </div>

      <!-- Exercício -->
      <div class="card">
        <h3>🏃 Exercício</h3>
        <label><input type="radio" name="did_exercise" value="1"> Fez exercício?</label>
        <label>Quanto tempo? (min)</label>
        <input type="number" name="duration_minutes" min="0">
      </div>

      <!-- Água -->
      <div class="card">
        <h3>💧 Água</h3>
        <label>Quantos copos ou garrafas de água você bebeu hoje?</label>
        <input type="number" name="cups_drank" min="0">
      </div>

      <!-- Luz Solar -->
      <div class="card">
        <h3>🌞 Luz Solar</h3>
        <label><input type="radio" name="sun_exposed" value="1"> Se expôs ao sol hoje?</label>
        <label>Quanto tempo? (min)</label>
        <input type="number" name="sun_duration" min="0">
      </div>

      <!-- Temperança -->
      <div class="card">
        <h3>⚖️ Temperança</h3>
        <label><input type="radio" name="drank_alcohol" value="1"> Bebeu álcool?</label>
        <label><input type="radio" name="used_tobacco" value="1"> Usou narcótico?</label>
      </div>

      <!-- Ar Livre -->
      <div class="card">
        <h3>🌳 Ar Livre</h3>
        <label><input type="radio" name="outdoor_activity" value="1"> Ficou ao ar livre?</label>
      </div>

      <!-- Descanso -->
      <div class="card">
        <h3>🛌 Descanso</h3>
        <label><input type="radio" name="slept_7_8h" value="1"> Dormiu entre 7-8h?</label>
        <label><input type="radio" name="slept_before_22h" value="1"> Foi dormir antes das 22h?</label>
      </div>

      <!-- Confiança -->
      <div class="card">
        <h3>🙏 Confiança</h3>
        <label><input type="radio" name="spiritual_activity" value="1"> Fez prática espiritual?</label>
      </div>
      <!-- Botão -->
      <button type="submit">Enviar</button>
    </form>

    <a href="#" class="back-to-top">↑ Voltar ao topo</a>
  </div>
</body>
</html>
