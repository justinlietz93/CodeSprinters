<?php

// Detect OS for path handling ( works for windows, linux, and mac)
$is_windows = strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';
$ds = DIRECTORY_SEPARATOR;

echo "Setting up local development environment...\n";

// Check PHP version
$php_version = PHP_VERSION;
echo "Found PHP version: $php_version\n";

if (version_compare($php_version, '7.0.0', '<')) {
    die("Error: PHP 7.0 or higher is required\n");
}

// Check required extensions
$required_extensions = ['pdo', 'pdo_mysql', 'mysqli'];
foreach ($required_extensions as $ext) {
    if (!extension_loaded($ext)) {
        $install_cmd = $is_windows 
            ? "Please install the PHP MySQL extensions through your PHP manager"
            : "Please run: sudo apt install php-mysql php-pdo";
        die("Error: Required PHP extension '$ext' is not installed.\n$install_cmd\n");
    }
}

// Database configuration
echo "\nDatabase Setup\n";
echo "Enter MySQL root password (leave blank if none): ";
$root_password = trim(fgets(STDIN));

try {
    // Connect to MySQL
    // Windows MySQL sometimes needs 127.0.0.1 instead of localhost
    $host = $is_windows ? '127.0.0.1' : 'localhost';
    $root_conn = new PDO("mysql:host=$host", "root", $root_password);
    
    $root_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create database and user
    $root_conn->exec("CREATE DATABASE IF NOT EXISTS phpclass");
    // Handle different MySQL versions/platforms
    try {
        $root_conn->exec("CREATE USER IF NOT EXISTS 'dbuser'@'localhost' IDENTIFIED BY 'dbdev123'");
    } catch (PDOException $e) {
        // Older MySQL versions don't support IF NOT EXISTS for CREATE USER
        $root_conn->exec("CREATE USER 'dbuser'@'localhost' IDENTIFIED BY 'dbdev123'");
    }
    $root_conn->exec("GRANT ALL PRIVILEGES ON phpclass.* TO 'dbuser'@'localhost'");
    $root_conn->exec("FLUSH PRIVILEGES");
    
    echo "Database and user created successfully\n";
    
    // Connect to the new database
    $db = new PDO(
        "mysql:host=localhost;dbname=phpclass",
        "dbuser",
        "dbdev123"
    );
    
    // Create tables
    $schema = file_get_contents('database_schema.sql');
    $db->exec($schema);
    
    echo "Database tables created successfully\n";
    echo "Test users created:\n";
    echo "Admin - Email: admin@test.com, Password: admin123\n";
    echo "Runner - Email: runner@test.com, Password: runner123\n";
    
} catch (PDOException $e) {
    die("Database Error: " . $e->getMessage() . "\n");
}

// Create cache directory
$cache_dir = __DIR__ . '/site/application/cache';
if (!file_exists($cache_dir)) {
    mkdir($cache_dir, 0777, true);
}

// Create asset directories if they don't exist
$asset_dirs = [
    __DIR__ . '/site/assets/css',
    __DIR__ . '/site/assets/js',
    __DIR__ . '/site/assets/img'
];

foreach ($asset_dirs as $dir) {
    if (!file_exists($dir)) {
        mkdir($dir, 0777, true);
    }
}

// Update config file
$config_file = __DIR__ . '/site/application/config/config.php';
$config_contents = file_get_contents($config_file);
$config_contents = preg_replace(
    "/\\\$config\['base_url'\]\s*=\s*'.*?'/",
    "\$config['base_url'] = 'http://localhost/site/'",
    $config_contents
);
file_put_contents($config_file, $config_contents);

echo "\nSetup complete!\n";
echo "To run the application:\n";
echo "Option 1: Using PHP's built-in server (Recommended):\n";
echo "1. Run: php -S localhost:8000 -t site/\n";
echo "2. Visit http://localhost:8000 in your web browser\n";
echo "\nOption 2: Using Apache (XAMPP/WampServer):\n";
echo "1. Ensure your web server is running\n";
echo "2. Copy the contents of the codesprinters folder to your web server's document root\n";
echo "3. Visit http://localhost/site in your web browser\n";

// Windows-specific instructions
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    echo "\nFor Windows users:\n";
    echo "If using Option 2, document root locations are:\n";
    echo "- XAMPP: C:\\xampp\\htdocs\\\n";
    echo "- WampServer: C:\\wamp64\\www\\\n";
} 