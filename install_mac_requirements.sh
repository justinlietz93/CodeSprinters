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