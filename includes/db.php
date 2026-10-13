<?php
/** Connect to MySQL using environment variables supplied by Docker Compose. */
function getDatabaseConnection(): ?mysqli
{
    mysqli_report(MYSQLI_REPORT_OFF);
    $host = getenv('DB_HOST') ?: '127.0.0.1';
    $user = getenv('DB_USER') ?: '';
    $password = getenv('DB_PASSWORD') ?: '';
    $database = getenv('DB_NAME') ?: '';
    $port = (int)(getenv('DB_PORT') ?: 3306);

    if ($user === '' || $database === '') {
        return null;
    }

    $connection = @new mysqli($host, $user, $password, $database, $port);
    if ($connection->connect_error) {
        return null;
    }
    $connection->set_charset('utf8mb4');
    return $connection;
}
