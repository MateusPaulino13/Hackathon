<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='main.css'>
    <!-- <script src='main.js'></script> -->
</head>
<body>
    <form action="actions/form.php" method="post" class="container mt-4">
   
    <!-- Nutrition -->
  <fieldset class="border p-3 mb-4">
    <legend class="w-auto px-2">Nutrition</legend>

    <div class="mb-3">
      <label for="fruits" class="form-label">Fruits</label>
      <select name="fruits" id="fruits" class="form-select">
        <option value="none">None</option>
        <option value="once">Once</option>
        <option value="more_than_once">More than once</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="vegetables" class="form-label">Vegetables</label>
      <select name="vegetables" id="vegetables" class="form-select">
        <option value="none">None</option>
        <option value="once">Once</option>
        <option value="more_than_once">More than once</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="ultra_processed" class="form-label">Ultra-processed food</label>
      <select name="ultra_processed" id="ultra_processed" class="form-select">
        <option value="none">None</option>
        <option value="once">Once</option>
        <option value="more_than_once">More than once</option>
      </select>
    </div>
  </fieldset>

  <!-- Exercise -->
  <fieldset class="border p-3 mb-4">
    <legend class="w-auto px-2">Exercise</legend>

    <div class="form-check mb-2">
      <input class="form-check-input" type="checkbox" name="did_exercise" id="did_exercise" value="1">
      <label class="form-check-label" for="did_exercise">Did exercise</label>
    </div>

    <div class="mb-3">
      <label for="duration_minutes" class="form-label">Duration (minutes)</label>
      <input type="number" name="duration_minutes" id="duration_minutes" class="form-control" min="0">
    </div>
  </fieldset>

  <!-- Water -->
  <fieldset class="border p-3 mb-4">
    <legend class="w-auto px-2">Water</legend>

    <div class="mb-3">
      <label for="cups_drank" class="form-label">Cups drank</label>
      <input type="number" name="cups_drank" id="cups_drank" class="form-control" min="0">
    </div>
  </fieldset>

  <!-- Sun -->
  <fieldset class="border p-3 mb-4">
    <legend class="w-auto px-2">Sunlight</legend>

    <div class="form-check mb-2">
      <input class="form-check-input" type="checkbox" name="sun_exposed" id="sun_exposed" value="1">
      <label class="form-check-label" for="sun_exposed">Got sun exposure</label>
    </div>

    <div class="mb-3">
      <label for="sun_duration" class="form-label">Duration (minutes)</label>
      <input type="number" name="sun_duration" id="sun_duration" class="form-control" min="0">
    </div>
  </fieldset>

  <!-- Temperance -->
  <fieldset class="border p-3 mb-4">
    <legend class="w-auto px-2">Temperance</legend>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="drank_alcohol" id="drank_alcohol" value="1">
      <label class="form-check-label" for="drank_alcohol">Drank alcohol</label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="used_tobacco" id="used_tobacco" value="1">
      <label class="form-check-label" for="used_tobacco">Used tobacco</label>
    </div>
  </fieldset>

  <!-- Air -->
  <fieldset class="border p-3 mb-4">
    <legend class="w-auto px-2">Air</legend>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="outdoor_activity" id="outdoor_activity" value="1">
      <label class="form-check-label" for="outdoor_activity">Outdoor activity</label>
    </div>
  </fieldset>

  <!-- Rest -->
  <fieldset class="border p-3 mb-4">
    <legend class="w-auto px-2">Rest</legend>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="slept_7_8h" id="slept_7_8h" value="1">
      <label class="form-check-label" for="slept_7_8h">Slept 7–8 hours</label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="slept_before_22h" id="slept_before_22h" value="1">
      <label class="form-check-label" for="slept_before_22h">Slept before 22h</label>
    </div>
  </fieldset>

  <!-- Trust -->
  <fieldset class="border p-3 mb-4">
    <legend class="w-auto px-2">Trust</legend>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="spiritual_activity" id="spiritual_activity" value="1">
      <label class="form-check-label" for="spiritual_activity">Spiritual activity</label>
    </div>
  </fieldset>

  <div class="text-end">
    <button type="submit" class="btn btn-primary">Submit Entry</button>
  </div>
    </form>

</body>
</html>