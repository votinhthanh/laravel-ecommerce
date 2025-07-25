# Laravel E-commerce with Docker

A complete Laravel e-commerce application running on Docker with Redis, MySQL, and MailHog.

## Features

- **Laravel 11** - Latest Laravel framework
- **Docker Compose** - Multi-container development environment
- **MySQL 8.0** - Database
- **Redis** - Caching and session storage
- **Nginx** - Web server
- **MailHog** - Email testing
- **PHP 8.2** - Latest PHP with Redis extension

## Prerequisites

- Docker
- Docker Compose
- Git

## Quick Start

### 1. Clone the Repository

```bash
git clone 
cd laravel-ecommerce
```

### 2. Setup Environment

```bash
# Copy environment file
cp .env.example .env

# Update .env with these Docker settings:
APP_URL=http://localhost:8282
DB_HOST=db
DB_DATABASE=laravel_ecommerce
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_password
REDIS_HOST=redis
MAIL_HOST=mailhog
```

### 3. Start the Application

```bash
# Make helper script executable
chmod +x docker-helper.sh

# Run complete setup
./docker-helper.sh setup
```

### 4. Access the Application

- **Main Application**: http://localhost:8282
- **MailHog UI**: http://localhost:8765
- **Database**: localhost:3344

## Available Commands

### Container Management
```bash
# Start containers
./docker-helper.sh start

# Stop containers
./docker-helper.sh stop

# View logs
./docker-helper.sh logs [service]
```

### Laravel Commands
```bash
# Run artisan commands
./docker-helper.sh artisan migrate
./docker-helper.sh artisan make:controller ProductController

# Access container shell
./docker-helper.sh shell

# Run composer commands
./docker-helper.sh composer install
```

### Development Commands
```bash
# Install packages
./docker-helper.sh composer require package/name

# Run migrations
./docker-helper.sh artisan migrate

# Create models
./docker-helper.sh artisan make:model Product

# Clear caches
./docker-helper.sh artisan cache:clear
```

## Project Structure

```
laravel-ecommerce/
├── app/                    # Laravel application
├── docker/                 # Docker configuration
│   ├── nginx/             # Nginx configuration
│   └── php/               # PHP configuration
├── database/              # Migrations, seeders, factories
├── resources/             # Views, assets
├── routes/                # Web, API routes
├── docker-compose.yml     # Docker services
├── Dockerfile            # PHP-FPM container
└── docker-helper.sh      # Helper script
```

## Services

| Service | Container Name | Ports | Description |
|---------|----------------|-------|-------------|
| App | laravel-ecommerce-app | 9000 | PHP-FPM application |
| Web | laravel-ecommerce-webserver | 8282:80 | Nginx web server |
| Database | laravel-ecommerce-db | 3344:3306 | MySQL 8.0 |
| Redis | laravel-ecommerce-redis | 8386:6379 | Redis cache |
| Mail | laravel-ecommerce-mailhog | 8765:8025, 1234:1025 | Email testing |

## Development

### Adding New Features

1. Create migrations: `./docker-helper.sh artisan make:migration create_products_table`
2. Create models: `./docker-helper.sh artisan make:model Product`
3. Create controllers: `./docker-helper.sh artisan make:controller ProductController`
4. Add routes in `routes/web.php` or `routes/api.php`

### Database Operations

```bash
# Run migrations
./docker-helper.sh artisan migrate

# Rollback migrations
./docker-helper.sh artisan migrate:rollback

# Fresh migration (WARNING: Deletes all data)
./docker-helper.sh artisan migrate:fresh

# Seed database
./docker-helper.sh artisan db:seed
```

### Testing Redis

```bash
./docker-helper.sh shell
php artisan tinker

# In tinker:
use Illuminate\Support\Facades\Redis;
Redis::connection()->ping()  // Should return "PONG"

use Illuminate\Support\Facades\Cache;
Cache::put('test', 'value', 60)
Cache::get('test')  // Should return "value"
```

## Troubleshooting

### Common Issues

1. **500 Server Error**
   ```bash
   ./docker-helper.sh artisan key:generate
   ./docker-helper.sh artisan config:clear
   ```

2. **Permission Issues**
   ```bash
   ./docker-helper.sh shell
   chown -R laravel:www-data storage bootstrap/cache
   chmod -R 775 storage bootstrap/cache
   ```

3. **Database Connection**
   ```bash
   ./docker-helper.sh artisan migrate:status
   ```

4. **Redis Connection**
   ```bash
   ./docker-helper.sh logs redis
   ```

### Reset Everything

```bash
# Stop and remove all containers and volumes
docker-compose down -v

# Rebuild and restart
./docker-helper.sh setup
```

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Run tests
5. Submit a pull request

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
