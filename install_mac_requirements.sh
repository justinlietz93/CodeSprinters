#!/bin/bash

# Check if Homebrew is installed
if ! command -v brew &> /dev/null; then
    echo "Installing Homebrew..."
    /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
fi

# Install PHP and MySQL
brew install php mysql

# Start MySQL
brew services start mysql

# Run setup script
php setup.php

echo "Installation complete!"
echo "To start the server, run: php -S localhost:8000 -t site/"

echo
echo "NOTE: If assets (CSS/JS) don't load:"
echo "1. Open site/application/config/config.php"
echo "2. Find the base_url setting"
echo "3. If using PHP built-in server, use: \$config['base_url'] = 'http://localhost:8000/';"
echo "4. If using Apache, use: \$config['base_url'] = 'http://localhost/site/';"
echo 