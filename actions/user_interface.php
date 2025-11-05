<?php
include 'connection.php';
session_start();

$user_id = $_SESSION['id'];
if (!$user_id) {
    die("Usuário não autenticado.");
}

// Define a default periodoFiltro (e.g., last 7 days)
$periodoFiltro = "AND de.entry_date >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)";

// Check which button was pressed
if (isset($_POST['button_month_calc'])) {
    // Mês atual (desde o 1º dia do mês até hoje)
    $periodoFiltro = "AND de.entry_date BETWEEN DATE_FORMAT(CURDATE(), '%Y-%m-01') AND CURDATE()";
} elseif (isset($_POST['button_week'])) {
    // Últimos 7 dias
    $periodoFiltro = "AND de.entry_date >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)";
}

function getSingleValue($con, $sql, $user_id) {
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($value);
    $result = $stmt->fetch();
    $stmt->close();
    return $result ? $value : 0;
}

// Fruits
$fruits = [];
$stmt = $con->prepare("SELECT fruits, COUNT(*) as total FROM nutrition_entries ne JOIN daily_entries de ON ne.daily_entry_id = de.id WHERE de.user_id = ? $periodoFiltro GROUP BY fruits");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    $fruits[$row['fruits']] = $row['total'];
}
$stmt->close();

// Vegetables
$vegetables = [];
$stmt = $con->prepare("SELECT vegetables, COUNT(*) as total FROM nutrition_entries ne JOIN daily_entries de ON ne.daily_entry_id = de.id WHERE de.user_id = ? $periodoFiltro GROUP BY vegetables");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    $vegetables[$row['vegetables']] = $row['total'];
}
$stmt->close();

// Ultra_processed
$ultra_processed = [];
$stmt = $con->prepare("SELECT ultra_processed, COUNT(*) as total FROM nutrition_entries ne JOIN daily_entries de ON ne.daily_entry_id = de.id WHERE de.user_id = ? $periodoFiltro GROUP BY ultra_processed");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    $ultra_processed[$row['ultra_processed']] = $row['total'];
}
$stmt->close();

// Outros cálculos
$total_minutes = getSingleValue($con, "SELECT SUM(duration_minutes) FROM exercise_entries e JOIN daily_entries de ON e.daily_entry_id = de.id WHERE de.user_id = ? $periodoFiltro", $user_id);
$avg_water = getSingleValue($con, "SELECT AVG(cups_drank) FROM water_entries w JOIN daily_entries de ON w.daily_entry_id = de.id WHERE de.user_id = ? $periodoFiltro", $user_id);
$sleep_days = getSingleValue($con, "SELECT COUNT(*) FROM rest_entries r JOIN daily_entries de ON r.daily_entry_id = de.id WHERE de.user_id = ? AND slept_7_8h = 1 AND slept_before_22h = 1 $periodoFiltro", $user_id);
$spiritual_days = getSingleValue($con, "SELECT COUNT(*) FROM trust_entries t JOIN daily_entries de ON t.daily_entry_id = de.id WHERE de.user_id = ? AND spiritual_activity = 1 $periodoFiltro", $user_id);
?>
