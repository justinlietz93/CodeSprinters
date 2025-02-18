@echo off
echo Installing requirements for Windows...

:: Check if PHP is installed
where php >nul 2>nul
if %ERRORLEVEL% NEQ 0 (
    echo PHP not found. Downloading PHP...
    powershell -Command "Invoke-WebRequest -Uri 'https://windows.php.net/downloads/releases/php-8.2.16-Win32-vs16-x64.zip' -OutFile 'php.zip'"
    echo Extracting PHP...
    powershell -Command "Expand-Archive -Path 'php.zip' -DestinationPath 'C:\php' -Force"
    echo Adding PHP to PATH...
    setx PATH "%PATH%;C:\php"
    del php.zip
)

:: Check if MySQL is installed
where mysql >nul 2>nul
if %ERRORLEVEL% NEQ 0 (
    echo MySQL not found. Downloading MySQL installer...
    powershell -Command "Invoke-WebRequest -Uri 'https://dev.mysql.com/get/Downloads/MySQLInstaller/mysql-installer-community-8.0.36.0.msi' -OutFile 'mysql-installer.msi'"
    echo Installing MySQL...
    start /wait msiexec /i mysql-installer.msi /quiet
    del mysql-installer.msi
)

echo Running setup script...
php setup.php

echo Installation complete!
echo To start the server, run: php -S localhost:8000 -t site/

echo.
echo NOTE: If assets (CSS/JS) don't load:
echo 1. Open site/application/config/config.php
echo 2. Find the base_url setting
echo 3. If using PHP built-in server, use: $config['base_url'] = 'http://localhost:8000/';
echo 4. If using XAMPP/Apache, use: $config['base_url'] = 'http://localhost/site/';
echo.

pause 