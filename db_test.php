<?php
try {
    // Connect to database
    $db = new PDO(
        "mysql:host=localhost;dbname=phpclass",
        "dbuser",
        "dbdev123"
    );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Test queries to see if the database is working
    echo "Users in database:\n";
    $stmt = $db->query("SELECT `Users`.*, `UserTypes`.`Type` 
                       FROM `Users` 
                       JOIN `UserTypes` ON `Users`.`UserTypeID` = `UserTypes`.`UserTypeId`");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo sprintf("- %s (Type: %s)\n", $row['UserName'], $row['Type']);
    }

    echo "\nRaces in database:\n";
    $stmt = $db->query("SELECT * FROM `Race`");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo sprintf("- %s at %s\n", $row['raceName'], $row['raceLocation']);
    }

} catch (PDOException $e) {
    die("Database Error: " . $e->getMessage() . "\n");
} 