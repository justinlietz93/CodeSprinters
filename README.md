# Marathon Running Administration Website

A web application for managing marathon registrations built with CodeIgniter for Agile Development class.

## Table of Contents
- [Requirements](#requirements)
- [Installing Requirements](#installing-requirements)
  - [Windows Users](#windows-users)
    - [Option 1: PHP Only](#option-1-recommended-install-php-only)
    - [Option 2: XAMPP/WampServer](#option-2-install-xampp--wampserver)
    - [Option 3: PHP Built-in Server](#option-3-using-php-built-in-server)
    - [Windows Troubleshooting](#windows-specific-troubleshooting)
  - [Linux Users](#linux-users)
    - [Option 1: PHP Built-in Server (Recommended)](#option-1-php-built-in-server-recommended)
    - [Using Docker](#using-docker)
    - [Using Apache](#using-apache)
  - [Mac Users](#mac-users)
    - [Option 1: PHP Built-in Server (Recommended)](#option-1-php-built-in-server-recommended-1)
    - [Using Docker](#using-docker-1)
    - [Using MAMP](#using-mamp)
- [Troubleshooting](#troubleshooting)
  - [Common Issues](#common-issues)
  - [Platform-Specific Notes](#platform-specific-notes)

## Requirements

- PHP 7.0 or higher
- MySQL/MariaDB
- Web server (Apache/Nginx) XAMPP/WampServer for Windows, or PHP's built-in server

## Setup Instructions

Choose your platform's install script:

### Windows:
Open Command Prompt as Administrator (right-click, "Run as Administrator") and run:
```batch
install_windows.bat
```

### Linux:
Open Terminal and run:
```bash
chmod +x install_requirements.sh
./install_requirements.sh
```

### Mac:
Open Terminal.app and run:
```bash
chmod +x install_mac.sh
./install_mac.sh
```

### Installing Requirements
A LAMP / WAMP / MAMP stack is required to run the application.

#### Windows Users

Option 1 (Recommended): Install PHP only
1. Download PHP for Windows from https://windows.php.net/download/
   - Choose the "VS16 x64 Thread Safe" zip file
   - Extract to `C:\php`
   - Add `C:\php` to your system PATH
2. Install MySQL from https://dev.mysql.com/downloads/installer/
   - Choose "MySQL Installer for Windows"
   - Run the installer and select "Server only" or "Custom" installation

Option 2: Install XAMPP / WampServer
1. Download XAMPP from https://www.apachefriends.org/
   or download WampServer from https://www.wampserver.com/
2. Run the installer
3. Select at minimum:
   - Apache
   - MySQL
   - PHP
4. Start XAMPP and ensure Apache and MySQL are running
   - Open XAMPP Control Panel
   - Click 'Start' next to Apache
   - Click 'Start' next to MySQL
   - Both should show green background when running
   - Click 'Admin' next to MySQL to verify phpMyAdmin opens in browser

4. Visit http://localhost/site in your web browser

5. Verify installation:
   - You should see the marathon registration homepage
   - If you see a database error:
     - Open phpMyAdmin (http://localhost/phpmyadmin)
     - Check if 'phpclass' database exists
     - Verify tables were created
     - Test accounts are created automatically:
       - Admin: admin@test.com / admin123
       - Runner: runner@test.com / runner123
   - If you see a blank page or 404:
     - Verify 'site' folder is directly in htdocs
     - Check XAMPP error logs (click 'Logs' in XAMPP Control Panel)

#### Option 2: Using WampServer
1. Install WampServer from https://www.wampserver.com/
   - Choose correct version (x64 for 64-bit Windows)
   - Install Visual C++ Redistributables if prompted
   - Install to default location (C:\wamp64)

2. Start WampServer
   - Look for the WampServer icon in system tray
   - Wait until icon turns green
   - Left-click icon to verify Apache and MySQL are running

3. Set up the project:
   - Navigate to where you downloaded/cloned the project
   - Run the setup script:
     ```cmd
     php setup.php
     ```
   - After setup completes, copy the 'site' folder to C:\wamp64\www\

4. Visit http://localhost/site in your web browser

#### Option 3: Using PHP Built-in Server
1. Install PHP
   - Download PHP zip from https://windows.php.net/download/
   - Extract to C:\php
   - Add C:\php to System Environment Variables PATH

2. Install MySQL
   - Download MySQL Installer from https://dev.mysql.com/downloads/installer/
   - Run installer and choose "Server only" or "Custom" installation
   - Note your root password during installation

3. Set up the project:
   - Open Command Prompt as Administrator
   - Navigate to project directory
   - Run setup script:
     ```cmd
     php setup.php
     ```
   - Start PHP server:
     ```cmd
     php -S localhost:8000 -t site/
     ```

4. Visit http://localhost:8000 in your web browser

5. To stop the server:
   - Press Ctrl+C in the terminal where the server is running
   - If Ctrl+C doesn't work:
     ```cmd
     # Find the process using port 8000
     netstat -ano | findstr :8000
     
     # Kill it using the process ID (replace PID with the number from above)
     taskkill /PID PID /F
     
     # Or use this one-liner to find and kill
     for /f "tokens=5" %a in ('netstat -aon ^| find ":8000"') do taskkill /f /pid %a
     ```

#### Windows-Specific Troubleshooting
- If PHP command not found:
  - Verify PHP is in PATH ([Guide to adding PHP to Windows PATH](https://help.learnosity.com/hc/en-us/articles/360000757757-Environment-Setup-Guide-PHP#installing-php-on-windows-1011))
  - Try using full path: `C:\php\php.exe`
- If MySQL connection fails:
  - For XAMPP:
    - Open XAMPP Control Panel
    - Check if MySQL is running (should be green)
    - If not, click 'Start' next to MySQL
  - For standalone MySQL:
    - Open Services (services.msc)
    - Look for "MySQL" service
    - Ensure it's running
  - Check MySQL credentials in config
- If ports are blocked:
  - Check antivirus/firewall settings
  - Try different ports (8080, 8888)
- XAMPP/WampServer issues:
  - Run as Administrator
  - Check Windows Services for conflicts
  - Verify ports 80 and 3306 are available

### Linux Users

1. Install required packages by running the install script:
   ```bash
   chmod +x install_requirements.sh
   ./install_requirements.sh
   ```

2. Set up MySQL:
   ```bash
   sudo mysql_secure_installation
   ```

3. Run the PHP setup script:
   ```bash
   php setup.php
   ```

4. Start the development server:
   ```bash
   php -S localhost:8000 -t site/
   ```

   Option 2: Using Apache (XAMPP/WampServer)
   - Copy the contents of this folder to your web server's document root
   - XAMPP: `C:\xampp\htdocs\`
   - WampServer: `C:\wamp64\www\`

4. Visit in browser:
   - Built-in server: http://localhost:8000
   - Apache: http://localhost/site

#### Using Docker
1. Install Docker and Docker Compose using the install script
2. Run:
   ```bash
   docker-compose up -d
   ```
3. Visit http://localhost:8000

#### Using Apache
1. Install Apache:
   ```bash
   sudo apt install apache2
   ```
2. Enable mod_rewrite:
   ```bash
   sudo a2enmod rewrite
   sudo systemctl restart apache2
   ```
3. Copy site files to web root:
   ```bash
   sudo cp -r site/ /var/www/html/
   ```
4. Visit http://localhost/site

#### Option 1: PHP Built-in Server (Recommended)
1. Install required packages:
   ```bash
   sudo apt install php8.2-cli php8.2-mysql mysql-server
   ```

2. Run the setup script:
   ```bash
   php setup.php
   ```

3. Start the development server:
   ```bash
   php -S localhost:8000 -t site/
   ```

4. Visit http://localhost:8000 in your browser

### Mac Users

1. Install requirements using Homebrew:
   ```bash
   # Install Homebrew if not installed
   /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
   
   # Install PHP, MySQL, and Composer
   brew install php mysql composer
   
   # Start MySQL
   brew services start mysql
   ```

2. Set up MySQL:
   ```bash
   mysql_secure_installation
   ```

3. Run the PHP setup script:
   ```bash
   php setup.php
   ```

4. Start the development server:
   ```bash
   php -S localhost:8000 -t site/
   ```

5. Visit http://localhost:8000 in your browser

Alternative options for Mac:

#### Using Docker
1. Install Docker Desktop for Mac from https://www.docker.com/products/docker-desktop
2. Run:
   ```bash
   docker-compose up -d
   ```
3. Visit http://localhost:8000

#### Using MAMP
1. Install MAMP from https://www.mamp.info/
2. Copy the 'site' folder to /Applications/MAMP/htdocs/
3. Start MAMP
4. Visit http://localhost:8888/site

### Troubleshooting

#### Common Issues
0. **PHP Extensions Missing**
   ```bash
   # If you see "could not find driver" error, install PHP MySQL extensions:
   sudo apt install php-mysql php-pdo
   
   # Verify extensions are installed:
   php -m | grep -i pdo
   php -m | grep -i mysql
   ```

1. **PHP 8.3 Deprecation Warnings**
    If you see multiple "Creation of dynamic property" warnings:
    - These are deprecation notices from PHP 8.3
    - They don't affect functionality
    - To suppress them, edit config.php and add:
      ```php
      error_reporting(E_ALL & ~E_DEPRECATED);
      ```
    - Or downgrade to PHP 8.2 which doesn't show these warnings

2. **Port Conflicts**
   - If port 8000 is in use, try a different port: `php -S localhost:8001 -t site/`
   - To find process using port: `sudo lsof -i :8000` or `sudo netstat -tulpn | grep 8000`
   - To kill process using port: `sudo kill $(lsof -t -i:8000)`
   - For XAMPP/MAMP users, check if Apache/MySQL ports are available

3. **Database Connection**
   - Verify MySQL is running
   - Check database credentials in `site/application/config/database.php`
   - For permission errors: `sudo mysql -u root -e "GRANT ALL ON phpclass.* TO 'dbuser'@'localhost';"`

4. **File Permissions**
   - Cache directory needs to be writable: `chmod -R 777 site/application/cache/`
   - On Linux/Mac: `sudo chown -R www-data:www-data site/` (for Apache)

5. **Docker Issues**
   - Ensure Docker daemon is running
   - Check container logs: `docker-compose logs`
   - Verify ports are not in use: `netstat -tulpn | grep 8000`

#### Platform-Specific Notes

**Windows:**
- Ensure PHP is in your system PATH
- Some antiviruses may block MySQL port
- Use backslashes in paths
- XAMPP/WampServer might conflict with IIS

**Linux:**
- SELinux might block Apache/MySQL
- Some distros require additional PHP modules
- Check logs: `tail -f /var/log/apache2/error.log`

**Mac:**
- Check PHP version if using built-in Apache
- Homebrew and MAMP PHP versions might conflict
- File permission issues in /Applications/MAMP/htdocs/
