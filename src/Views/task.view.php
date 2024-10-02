<?php
    require_once __DIR__ . '/partials/head.php';
?>

<form method="POST">
    <div class="form-group">
        <label for="taskTitle">Nom de la tâche :</label>
        <input type="text" class="form-control" id="taskTitle" name="taskTitle" placeholder="">
    </div>
    <div class="form-group">
        <label for="taskContent">Description de la tâche :</label>
        <textarea class="form-control" id="taskContent" name="taskContent" rows="3"></textarea>
    </div>
    <div>
        <label for="startDate">Date de début de la tâche</label>
        <input type="date" id="startDate" name="startDate">
    </div>
    <div>
        <label for="stopDate">Date de fin de la tâche</label>
        <input type="date" id="stopDate" name="stopDate" value="Date de fin de la tâche">
    </div>
    <button type="submit">Enregister la Tâche</button>
</form>

<?php
    require_once __DIR__ . '/partials/footer.php';
?>