$mongoClient = new MongoDB\Client("mongodb+srv://root:runners@clusterrunners.qaayv9q.mongodb.net/?retryWrites=true&w=majority");
$database = $mongoClient->selectDatabase('your_database_name');

// Insert UserTypes
$userTypesCollection = $database->UserTypes;
$userTypesCollection->insertMany([
    ['_id' => new MongoDB\BSON\ObjectId('644d45f1e0e3e53802a01a1a'), 'Type' => 'Admin'],
    ['_id' => new MongoDB\BSON\ObjectId('644d45f1e0e3e53802a01a1b'), 'Type' => 'Organizer'],
    ['_id' => new MongoDB\BSON\ObjectId('644d45f1e0e3e53802a01a1c'), 'Type' => 'Runner']
]);

// Insert Users
$usersCollection = $database->Users;
$usersCollection->insertMany([
    [
        '_id' => new MongoDB\BSON\ObjectId('644d45f1e0e3e53802a02b1a'),
        'UserTypeID' => new MongoDB\BSON\ObjectId('644d45f1e0e3e53802a01a1a'),
        'UserName' => 'admin@test.com',
        'Password' => 'admin123'
    ],
    [
        '_id' => new MongoDB\BSON\ObjectId('644d45f1e0e3e53802a02b1b'),
        'UserTypeID' => new MongoDB\BSON\ObjectId('644d45f1e0e3e53802a01a1c'),
        'UserName' => 'runner@test.com',
        'Password' => 'runner123'
    ]
]);

// Insert Race
$raceCollection = $database->Race;
$raceCollection->insertOne([
    '_id' => new MongoDB\BSON\ObjectId('644d45f1e0e3e53802a03c1a'),
    'Name' => 'Marathon',
    'Description' => 'Annual Marathon Event',
    'Date' => new MongoDB\BSON\UTCDateTime(strtotime("2025-03-30T09:00:00") * 1000),
    'Kilometers' => 42.195,
    'Status' => 'Scheduled'
]);

// Insert RaceRunners
$raceRunnersCollection = $database->RaceRunners;
$raceRunnersCollection->insertOne([
    '_id' => new MongoDB\BSON\ObjectId('644d45f1e0e3e53802a04d1a'),
    'RaceId' => new MongoDB\BSON\ObjectId('644d45f1e0e3e53802a03c1a'),
    'UserId' => new MongoDB\BSON\ObjectId('644d45f1e0e3e53802a02b1b'),
    'Time' => 120.5
]);