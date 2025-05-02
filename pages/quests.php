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
        <label><input type="radio" name="frutas" value="sim"> Comeu frutas hoje?</label>
        <label><input type="radio" name="vegetais" value="sim"> Comeu vegetais hoje?</label>
        <label><input type="radio" name="ultraprocessado" value="sim"> Comeu ultraprocessados?</label>
      </div>

      <!-- Exercício -->
      <div class="card">
        <h3>🏃 Exercício</h3>
        <label><input type="radio" name="exercicio" value="sim"> Fez exercício?</label>
        <label>Quanto tempo? (min)</label>
        <input type="number" name="tempo_exercicio" min="0">
      </div>

      <!-- Água -->
      <div class="card">
        <h3>💧 Água</h3>
        <label>Quantos copos ou garrafas de água você bebeu hoje?</label>
        <input type="text" name="agua">
      </div>

      <!-- Luz Solar -->
      <div class="card">
        <h3>🌞 Luz Solar</h3>
        <label><input type="radio" name="sol" value="sim"> Se expôs ao sol hoje?</label>
        <label>Quanto tempo? (min)</label>
        <input type="text" name="tempo_sol">
      </div>

      <!-- Temperança -->
      <div class="card">
        <h3>⚖️ Temperança</h3>
        <label><input type="radio" name="alcool" value="sim"> Bebeu álcool?</label>
        <label><input type="radio" name="narcotico" value="sim"> Usou narcótico?</label>
      </div>

      <!-- Ar Livre -->
      <div class="card">
        <h3>🌳 Ar Livre</h3>
        <label>Quanto tempo ficou ao ar livre? (min)</label>
        <input type="number" name="tempo_ar" min="0">
      </div>

      <!-- Descanso -->
      <div class="card">
        <h3>🛌 Descanso</h3>
        <label><input type="radio" name="sono_adequado" value="sim"> Dormiu entre 7-8h?</label>
        <label><input type="radio" name="dormiu_cedo" value="sim"> Foi dormir antes das 22h?</label>
      </div>

      <!-- Confiança -->
      <div class="card">
        <h3>🙏 Confiança</h3>
        <label><input type="radio" name="espiritualidade" value="sim"> Fez prática espiritual?</label>
      </div>

      <!-- Botão -->
      <button type="submit">Enviar</button>
    </form>

    <a href="#" class="back-to-top">↑ Voltar ao topo</a>
  </div>
</body>
</html>
