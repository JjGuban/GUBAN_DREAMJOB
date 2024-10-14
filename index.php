<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Engineer Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }
        .container {
            width: 90%;
            margin: auto;
        }
        .form-container {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        label, input, textarea {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        input, textarea {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            cursor: pointer;
            border: none;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        td a {
            color: #007bff;
            text-decoration: none;
        }
        td a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>Software Engineer Management System</h2>

    <div class="container">
        <div class="form-container">
            <h3>Register a Software Engineer</h3>
            <form action="core/handleForms.php" method="POST">
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" required>

                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" required>

                <label for="gender">Gender</label>
                <input type="text" name="gender" required>

                <label for="experienceYears">Experience (Years)</label>
                <input type="text" name="experienceYears" required>

                <label for="skills">Skills</label>
                <textarea name="skills" rows="3" required></textarea>

                <label for="certifications">Certifications</label>
                <textarea name="certifications" rows="3" required></textarea>

                <label for="preferredLanguage">Preferred Language</label>
                <input type="text" name="preferredLanguage" required>

                <input type="submit" name="insertNewEngineerBtn" value="Register Engineer">
            </form>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Experience (Years)</th>
                    <th>Skills</th>
                    <th>Certifications</th>
                    <th>Preferred Language</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $allEngineers = seeAllEngineers($pdo); ?>
                <?php foreach ($allEngineers as $row) { ?>
                <tr>
                    <td><?php echo $row['engineer_id']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['experience_years']; ?></td>
                    <td><?php echo $row['skills']; ?></td>
                    <td><?php echo $row['certifications']; ?></td>
                    <td><?php echo $row['preferred_language']; ?></td>
                    <td>
                        <a href="editengineer.php?engineer_id=<?php echo $row['engineer_id']; ?>">Edit</a> |
                        <a href="deleteengineer.php?engineer_id=<?php echo $row['engineer_id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
