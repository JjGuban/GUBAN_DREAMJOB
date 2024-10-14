<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Engineer</title>
</head>
<body>
    <h3>Are you sure you want to delete this engineer?</h3>
    <form action="core/handleForms.php?engineer_id=<?php echo $_GET['engineer_id']; ?>" method="POST">
        <p><input type="submit" name="deleteEngineerBtn" value="Yes, Delete"></p>
    </form>
</body>
</html>
