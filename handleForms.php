<?php 
require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewEngineerBtn'])) {
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $gender = trim($_POST['gender']);
    $experienceYears = trim($_POST['experienceYears']);
    $skills = trim($_POST['skills']);
    $certifications = trim($_POST['certifications']);
    $preferredLanguage = trim($_POST['preferredLanguage']);

    if (!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($experienceYears) && !empty($skills) && !empty($certifications) && !empty($preferredLanguage)) {
        $query = insertIntoEngineerRecords($pdo, $firstName, $lastName, $gender, $experienceYears, $skills, $certifications, $preferredLanguage);
        if ($query) {
            header("Location: ../index.php");
        } else {
            echo "Insertion failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}

if (isset($_POST['editEngineerBtn'])) {
    $engineer_id = $_GET['engineer_id'];
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $gender = trim($_POST['gender']);
    $experienceYears = trim($_POST['experienceYears']);
    $skills = trim($_POST['skills']);
    $certifications = trim($_POST['certifications']);
    $preferredLanguage = trim($_POST['preferredLanguage']);

    if (!empty($engineer_id) && !empty($firstName) && !empty($lastName) && !empty($gender) && !empty($experienceYears) && !empty($skills) && !empty($certifications) && !empty($preferredLanguage)) {
        $query = updateEngineerRecord($pdo, $engineer_id, $firstName, $lastName, $gender, $experienceYears, $skills, $certifications, $preferredLanguage);
        if ($query) {
            header("Location: ../index.php");
        } else {
            echo "Update failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}

if (isset($_POST['deleteEngineerBtn'])) {
    $query = deleteEngineerRecord($pdo, $_GET['engineer_id']);
    if ($query) {
        header("Location: ../index.php");
    } else {
        echo "Deletion failed";
    }
}
?>
