# Goldiva Minerals

A modern web application built with Laravel for managing mineral resources and operations.

## 🔗 Live Demo

- **Frontend:** [https://goldivaminerals.com](https://goldivaminerals.com)
- **Admin Panel:** `/admin` (login required)

## ✨ Features

### Admin Dashboard
- 📊 **Real-time Analytics** — Track visitors with detailed metrics (country, city, device, browser, OS)
- 📈 **Visitor Charts** — 7-day visitor trends with Chart.js
- 🏆 **Top Countries & Pages** — Most visited pages and visitor origins
- 📦 **Content Management** — Manage Blogs, Services, Products, Gallery, and Contact Messages

### Modules
- **📝 Blogs** — Full CRUD with categories, authors, published dates, and status
- **🛠️ Services** — Showcase services with icons and images
- **📦 Products** — Product catalog with descriptions and images
- **🖼️ Gallery** — Image gallery management
- **📧 Contact Messages** — Track and manage customer inquiries
- **👥 Users & Roles** — Role-based access control (Admin, Site Manager)

### Analytics Tracking
- 🌎 **Geolocation** — Country and city detection via IP
- 📱 **Device Detection** — Desktop vs Mobile tracking
- 🌐 **Browser & OS** — Detailed visitor browser and operating system info
- 🔗 **Referral Tracking** — Know where your visitors come from

## 🛠 Tech Stack

- **Framework:** Laravel 11
- **Database:** SQLite (default) / MySQL
- **Admin Panel:** AdminLTE 3
- **Frontend:** Blade Templates + Vite
- **PHP:** 8.2+
- **Analytics:** Custom middleware with ip-api.com

## 🚀 Getting Started

### Prerequisites

- PHP 8.2+
- Composer
- Node.js 18+
- SQLite or MySQL

### Installation

```bash
# Clone the repository
git clone https://github.com/mycosoft/goldiva-minerals.git
cd goldiva-minerals

# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run database migrations
php artisan migrate

# Seed roles and permissions
php artisan db:seed --class=RolesAndPermissionsSeeder

# Create admin user
php artisan tinker --execute="App\Models\User::create(['name'=>'Admin','email'=>'admin@goldiva.com','password'=>bcrypt('password')]);"

# Start the development server
php artisan serve
```

**Admin Login:**
- Email: `admin@goldiva.com`
- Password: `password`

### Building Assets

```bash
# Development
npm run dev

# Production
npm run build
```

## 📁 Project Structure

```
├── app/
│   ├── Http/
│   │   ├── Controllers/Admin/  # Admin controllers
│   │   └── Middleware/         # TrackPageVisits middleware
│   └── Models/                 # Eloquent models
├── config/
│   └── adminlte.php           # AdminLTE configuration
├── database/
│   ├── migrations/            # Database migrations
│   └── seeders/              # Database seeders
├── resources/
│   └── views/admin/          # Admin panel views
├── routes/
│   └── web.php               # Web routes
└── tests/                    # Test files
```

## 🔐 Roles & Permissions

| Role | Permissions |
|------|-------------|
| **Admin** | Full access to all modules |
| **Site Manager** | Blogs, Services, Gallery, Products, Contacts |

## 📊 Analytics Data

The dashboard displays:
- Total visits & today's visits
- 7-day visitor trend chart
- Top 5 countries by visitors
- Top 5 most visited pages
- Device type distribution
- Recent visitor details (IP, country, device, browser, page, time)

## 🙏 Credits

- [Laravel](https://laravel.com)
- [AdminLTE](https://adminlte.io)
- [Spatie Laravel Permission](https://spatie.be/laravel-permission)
- [MiniMax AI](https://minimax.io) — Analytics tracking powered by MiniMax

## 📄 License

MIT License
