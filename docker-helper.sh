#!/bin/bash

case "$1" in
    "setup")
        echo "🚀 Setting up Laravel E-commerce project..."
        
        # Build and start containers
        docker-compose up -d --build
        
        # Wait for containers to be ready
        echo "⏳ Waiting for containers to be ready..."
        sleep 20
        
        # Install Laravel dependencies
        echo "📦 Installing Composer dependencies..."
        docker-compose exec app composer install
        
        # Generate application key
        echo "🔑 Generating application key..."
        docker-compose exec app php artisan key:generate --force
        
        # Run migrations
        echo "🗄️ Running database migrations..."
        docker-compose exec app php artisan migrate --force
        
        # Install npm dependencies and build assets
        echo "🎨 Installing and building frontend assets..."
        docker-compose exec app npm install
        docker-compose exec app npm run build
        
        # Create storage link
        echo "🔗 Creating storage symbolic link..."
        docker-compose exec app php artisan storage:link
        
        # Set proper permissions
        echo "🔐 Setting proper permissions..."
        docker-compose exec app chown -R laravel:www-data /var/www/html/storage /var/www/html/bootstrap/cache
        docker-compose exec app chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
        
        # Clear all caches
        echo "🧹 Clearing caches..."
        docker-compose exec app php artisan config:clear
        docker-compose exec app php artisan cache:clear
        
        echo "✅ Setup complete!"
        echo "🌐 Visit: http://localhost:8282"
        echo "📧 MailHog UI: http://localhost:8765"
        echo "🗄️ Database: localhost:3344"
        ;;
        
    "start")
        echo "▶️ Starting containers..."
        docker-compose up -d
        ;;
        
    "stop")
        echo "⏹️ Stopping containers..."
        docker-compose down
        ;;
        
    "shell")
        echo "🐚 Accessing app container shell..."
        docker-compose exec app bash
        ;;
        
    "artisan")
        shift
        docker-compose exec app php artisan "$@"
        ;;
        
    "logs")
        echo "📋 Showing logs for ${2:-app}..."
        docker-compose logs -f ${2:-app}
        ;;
        
    *)
        echo "🛒 Laravel E-commerce Docker Helper"
        echo "Usage: $0 {setup|start|stop|shell|artisan|logs}"
        ;;
esac