

function openConnection() : PDO {
// Try to figure out what these should be for you
$dbhost    = "DB_HOST";//probably localhost
$dbuser    = "DB_USER";
$dbpass    = "DB_USER_PASSWORD";
$db        = "DB_NAME";

$driverOptions = [
PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

// Try to understand what happens here
$pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db, $dbuser, $dbpass, $driverOptions);

// Why we do this here
return $pdo;
}