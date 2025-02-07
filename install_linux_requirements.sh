#!/bin/bash

# THIS SCRIPT IS FOR UBUNTU 22.04+ LTS
# WILL NOT WORK ON WINDOWS OR MACOS

# Update package list
sudo apt update

# Install PHP and required extensions
sudo apt install -y \
    php8.2-cli \
    php8.2-fpm \
    php8.2-mysql \
    php8.2-common \
    php8.2-json \
    php8.2-curl \
    php8.2-mbstring \
    php8.2-xml \
    php8.2-zip \
    php-mysql \
    php-pdo

# Install MySQL
sudo apt install -y mysql-server

# Install development tools
sudo apt install -y \
    git \
    composer \
    curl

# Optional: Install Docker
# Add Docker's official GPG key
sudo apt-get update
sudo apt-get install -y ca-certificates curl gnupg
sudo install -m 0755 -d /etc/apt/keyrings
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /etc/apt/keyrings/docker.gpg
sudo chmod a+r /etc/apt/keyrings/docker.gpg

# Add the repository to Apt sources
echo \
  "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/ubuntu \
  $(. /etc/os-release && echo "$VERSION_CODENAME") stable" | \
  sudo tee /etc/apt/sources.list.d/docker.list > /dev/null

sudo apt update
sudo apt install -y docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin

# Add current user to docker group
sudo usermod -aG docker $USER

echo "Installation complete! You may need to log out and back in for docker permissions to take effect."

# After installation, verify PDO is enabled
echo "Verifying PHP extensions..."
php -m | grep -i pdo
php -m | grep -i mysql

# Restart PHP FPM if needed
sudo systemctl restart php8.2-fpm || true

# Run setup script
php setup.php

echo "Installation complete!"
echo "To start the server, run: php -S localhost:8000 -t site/" 