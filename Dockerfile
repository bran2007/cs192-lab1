# Use official PHP + Apache image
FROM php:8.2-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy your app's files to the working directory
COPY . .

# Expose port 80 (for web traffic)
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
