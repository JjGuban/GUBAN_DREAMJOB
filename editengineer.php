<?php require_once 'core/models.php'; ?>
<?php $engineer = getEngineerByID($pdo, $_GET['engineer_id']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Engineer</title>
</head>
<body>
    <h3>Edit Engineer</h3>
    <form action="core/handleForms.php?engineer_id=<?php echo $_GET['engineer_id']; ?>" method="POST">
        <p><label for="firstName">First Name</label> <input type="text" name="firstName" value="<?php echo $engineer['first_name']; ?>"></p>
        <p><label for="lastName">Last Name</label> <input type="text" name="lastName" value="<?php echo $engineer['last_name']; ?>"></p>
        <p><label for="gender">Gender</label> <input type="text" name="gender" value="<?php echo $engineer['gender']; ?>"></p>
        <p><label for="experienceYears">Experience (Years)</label> <input type="text" name="experienceYears" value="<?php echo $engineer['experience_years']; ?>"></p>
        <p><label for="skills">Skills</label> <textarea name="skills"><?php echo $engineer['skills']; ?></textarea></p>
        <p><label for="certifications">Certifications</label> <textarea name="certifications"><?php echo $engineer['certifications']; ?></textarea></p>
        <p><label for="preferredLanguage">Preferred Language</label> <input type="text" name="preferredLanguage" value="<?php echo $engineer['preferred_language']; ?>"></p>
        <p><input type="submit" name="editEngineerBtn"></p>
    </form>
</body>
</html>
