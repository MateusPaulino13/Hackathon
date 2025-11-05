<?php include "../actions/user_interface.php"; ?>

<nav style="display: flex; justify-content: space-between; background: #f0f0f0; padding: 10px;">
    <div>
        <a href="pages/home.php">Início</a> |
        <a href="pages/quests.php"> Preencher Formulário</a>
    </div>
    <div>
        <a href="action/logoff.php" style="color: red;">🚪 Sair</a>
    </div>
</nav>

<!-- Container -->
<div class="summary-container" style="max-width: 800px; margin: 20px auto; padding: 20px; background: #fff; border-radius: 12px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    <form method="post" action="">
        <h2>Resumo</h2>
        <ul>
            <li><strong>Frutas:</strong>
                <?php if (!empty($fruits)) : ?>
                    <ul>
                        <?php foreach ($fruits as $type => $count) echo "<li>$type: $count dias</li>"; ?>
                    </ul>
                <?php else: ?>
                    Nenhum dado registrado sobre frutas.
                <?php endif; ?>
            </li>

            <li><strong>Vegetais:</strong>
                <?php if (!empty($vegetables)) : ?>
                    <ul>
                        <?php foreach ($vegetables as $type => $count) echo "<li>$type: $count dias</li>"; ?>
                    </ul>
                <?php else: ?>
                    Nenhum dado registrado sobre vegetais.
                <?php endif; ?>
            </li>

            <li><strong>Alimentos Ultraprocessados:</strong>
                <?php if (!empty($ultra_processed)) : ?>
                    <ul>
                        <?php foreach ($ultra_processed as $type => $count) echo "<li>$type: $count dias</li>"; ?>
                    </ul>
                <?php else: ?>
                    Nenhum dado registrado sobre ultraprocessados.
                <?php endif; ?>
            </li>

            <li><strong>Tempo total de exercício:</strong>
                <?php
                if ($total_minutes === null) {
                    echo "Nenhum exercício registrado.";
                } else {
                    echo $total_minutes . " minutos";
                }
                ?>
            </li>

            <li><strong>Média de água por dia:</strong>
                <?php
                if ($avg_water === null) {
                    echo "Nenhum registro de água.";
                } else {
                    echo round($avg_water, 2) . " copos";
                }
                ?>
            </li>

            <li><strong>Dias com sono ideal:</strong>
                <?php
                echo ($sleep_days === null) ? "Nenhum dia com sono ideal." : "$sleep_days dias";
                ?>
            </li>

            <li><strong>Dias com atividade espiritual:</strong>
                <?php
                echo ($spiritual_days === null) ? "Nenhuma atividade espiritual registrada." : "$spiritual_days dias";
                ?>
            </li>
        </ul>

        <div style="margin-top: 20px;">
            <button type="submit" class="button_month_calc" name="button_month_calc">📅 Ver Mês</button>
            <button type="submit" class="button_week" name="button_week">🗓️ Ver Semana</button>
        </div>
    </form>
</div>
