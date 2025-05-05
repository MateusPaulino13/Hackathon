<?php include 'actions/user_interface.php'; ?>
<form method="post" action="">
    <h2>Resumo</h2>
    <ul>
        <li><strong>Frutas:</strong>
            <ul>
                <?php foreach ($fruits as $type => $count) echo "<li>$type: $count dias</li>"; ?>
            </ul>
        </li>
        <li><strong>Vegetais:</strong>
            <ul>
                <?php foreach ($vegetables as $type => $count) echo "<li>$type: $count dias</li>"; ?>
            </ul>
        </li>
        <li><strong>Alimentos Ultraprocessados:</strong>
            <ul>
                <?php foreach ($ultra_processed as $type => $count) echo "<li>$type: $count dias</li>"; ?>
            </ul>
        </li>
        <li><strong>Tempo total de exercício:</strong>
            <?php
            $totalMinutes = $total_minutes;
            if ($totalMinutes === null) {
                echo "Nenhum exercício registrado.";
            } else {
                echo $totalMinutes . " minutos";
            }
            ?>
        </li>
        <li><strong>Média de água por dia:</strong>
            <?php
            $averageWater = round($avg_water, 2);
            if ($averageWater === null) {
                echo "Nenhum registro de água.";
            } else {
                echo $averageWater . " copos";
            }
            ?>
        </li>
        <li><strong>Dias com sono ideal:</strong>
            <?php
            if ($sleep_days === null) {
                echo "Nenhum dia com sono ideal.";
            } else {
                echo $sleep_days . " dias";
            }
            ?>
        </li>
        <li><strong>Dias com atividade espiritual:</strong>
            <?php
            if ($spiritual_days === null) {
                echo "Nenhuma atividade espiritual registrada.";
            } else {
                echo $spiritual_days . " dias";
            }
            ?>
        </li>
        <button type="submit" class="button_month_calc" name="button_month_calc">Ver Mês</button>
        <button type="submit" class="button_week" name="button_week">Ver Semana</button>
    </ul>
</form>
