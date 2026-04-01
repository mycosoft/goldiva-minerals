# Goldiva Minerals

A modern web application built with Laravel for managing mineral resources and operations.

## Tech Stack

- **Framework:** Laravel 11
- **Database:** MySQL/SQLite
- **Frontend:** Blade Templates + Vite
- **PHP:** 8.2+

## Getting Started

### Prerequisites

- PHP 8.2+
- Composer
- Node.js 18+
- MySQL or SQLite

### Installation

```bash
# Clone the repository
git clone https://github.com/mycosoft/goldiva-minerals.git
cd goldiva-minerals

# Install dependencies
composer install
npm install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Start the development server
php artisan serve
```

### Running Tests

```bash
php artisan test
```

## Project Structure

```
├── app/              # Application code
├── config/           # Configuration files
├── database/         # Migrations and seeders
├── public/           # Public assets
├── resources/        # Views and assets
├── routes/           # Application routes
└── tests/            # Test files
```

## License

MIT License
