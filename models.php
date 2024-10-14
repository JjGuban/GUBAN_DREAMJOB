<?php
require_once 'dbConfig.php';

function insertIntoEngineerRecords($pdo, $first_name, $last_name, $gender, $experience_years, $skills, $certifications, $preferred_language) {
    $sql = "INSERT INTO engineer_records (first_name, last_name, gender, experience_years, skills, certifications, preferred_language) VALUES (?,?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$first_name, $last_name, $gender, $experience_years, $skills, $certifications, $preferred_language]);
}

function seeAllEngineerRecords($pdo) {
    $sql = "SELECT * FROM engineer_records";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getEngineerByID($pdo, $engineer_id) {
    $sql = "SELECT * FROM engineer_records WHERE engineer_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$engineer_id]);
    return $stmt->fetch();
}

function updateEngineerRecord($pdo, $engineer_id, $first_name, $last_name, $gender, $experience_years, $skills, $certifications, $preferred_language) {
    $sql = "UPDATE engineer_records SET first_name = ?, last_name = ?, gender = ?, experience_years = ?, skills = ?, certifications = ?, preferred_language = ? WHERE engineer_id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$first_name, $last_name, $gender, $experience_years, $skills, $certifications, $preferred_language, $engineer_id]);
}

function deleteEngineerRecord($pdo, $engineer_id) {
    $sql = "DELETE FROM engineer_records WHERE engineer_id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$engineer_id]);
}
function seeAllEngineers($pdo) {
    $sql = "SELECT * FROM engineer_records";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    
    if ($executeQuery) {
        return $stmt->fetchAll();
    }
}

?>
