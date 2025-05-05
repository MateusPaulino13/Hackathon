<?php  
include 'connection.php';
session_start(); 
$user_id = $_SESSION['id'];  
$today = date("Y-m-d");
$now = date("Y-m-d H:i:s");

// Begin transaction early to cover all inserts
$con->begin_transaction();
try {
    // Daily table
    $stmt = $con->prepare("SELECT id FROM daily_entries WHERE user_id = ? AND entry_date = ?");
    $stmt->bind_param("is", $user_id, $today);
    $stmt->execute();
    $stmt->bind_result($daily_entry_id);
    $stmt->fetch();
    $stmt->close();

    if (!$daily_entry_id) {
        $insert = $con->prepare("INSERT INTO daily_entries (user_id, entry_date, created_at) VALUES (?, ?, ?)");
        $insert->bind_param("iss", $user_id, $today, $now);
        $insert->execute();
        $daily_entry_id = $insert->insert_id;
        $insert->close();
    }

    // Nutrition table 
    $fruits = $_POST['fruits'] ?? 'none';
    $vegetables = $_POST['vegetables'] ?? 'none';
    $ultra_processed = $_POST['ultra_processed'] ?? 'none';

    $stmt = $con->prepare("INSERT INTO nutrition_entries (daily_entry_id, fruits, vegetables, ultra_processed) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $daily_entry_id, $fruits, $vegetables, $ultra_processed);
    $stmt->execute();
    $stmt->close();

    // Exercise table
    $did_exercise = isset($_POST['did_exercise']) ? 1 : 0;
    $duration_minutes = (int) ($_POST['duration_minutes'] ?? 0);

    $stmt = $con->prepare("INSERT INTO exercise_entries (daily_entry_id, did_exercise, duration_minutes) VALUES (?, ?, ?)");
    $stmt->bind_param("iii", $daily_entry_id, $did_exercise, $duration_minutes);
    $stmt->execute();
    $stmt->close();

    // Water entries
    $cups_drank = (int) ($_POST["cups_drank"] ?? 0);

    $stmt = $con->prepare("INSERT INTO water_entries (daily_entry_id, cups_drank) VALUES (?, ?)");
    $stmt->bind_param("ii", $daily_entry_id, $cups_drank);
    $stmt->execute();
    $stmt->close();

    // Sun entries
    $exposed = isset($_POST['sun_exposed']) ? 1 : 0;
    $sun_duration = (int) ($_POST['sun_duration'] ?? 0);

    $stmt = $con->prepare("INSERT INTO sun_entries (daily_entry_id, exposed, duration_minutes) VALUES (?, ?, ?)");
    $stmt->bind_param("iii", $daily_entry_id, $exposed, $sun_duration);
    $stmt->execute();
    $stmt->close();

    // Temperance entries
    $drank_alcohol = isset($_POST['drank_alcohol']) ? 1 : 0;
    $used_tobacco = isset($_POST['used_tobacco']) ? 1 : 0;

    $stmt = $con->prepare("INSERT INTO temperance_entries (daily_entry_id, drank_alcohol, used_tobacco) VALUES (?, ?, ?)");
    $stmt->bind_param("iii", $daily_entry_id, $drank_alcohol, $used_tobacco);
    $stmt->execute();
    $stmt->close();

    // Air entries
    $outdoor_activity = isset($_POST['outdoor_activity']) ? 1 : 0;

    $stmt = $con->prepare("INSERT INTO air_entries (daily_entry_id, outdoor_activity) VALUES (?, ?)");
    $stmt->bind_param("ii", $daily_entry_id, $outdoor_activity);
    $stmt->execute();
    $stmt->close();

    // Rest entries
    $slept_7_8h = isset($_POST['slept_7_8h']) ? 1 : 0;
    $slept_before_22h = isset($_POST['slept_before_22h']) ? 1 : 0;

    $stmt = $con->prepare("INSERT INTO rest_entries (daily_entry_id, slept_7_8h, slept_before_22h) VALUES (?, ?, ?)");
    $stmt->bind_param("iii", $daily_entry_id, $slept_7_8h, $slept_before_22h);
    $stmt->execute();
    $stmt->close();

    // Trust entries
    $spiritual_activity = isset($_POST['spiritual_activity']) ? 1 : 0;

    $stmt = $con->prepare("INSERT INTO trust_entries (daily_entry_id, spiritual_activity) VALUES (?, ?)");
    $stmt->bind_param("ii", $daily_entry_id, $spiritual_activity);
    $stmt->execute();
    $stmt->close();

    $con->commit();
} catch (Exception $e) {
    $con->rollback();
    echo "Failed to save data: " . $e->getMessage();
}
?>