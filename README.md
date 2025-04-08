# Laravel CRUD Generator

A simple and powerful Laravel CRUD Generator to speed up your development process. This CRUD Generator automatically generates Models, Controllers, Requests, Migrations, Routes, and Views for your Laravel applications.

## Features

- Generate full CRUD operations with customizable fields and relations.
- Auto-generate:
  - A Model with fillable attributes
  - A Migration with appropriate data types and indexes
  - A Controller with CRUD methods following RESTful conventions
  - A Form Request for validation
  - API routes in api.php
  - Blade views using reusable components (TailwindCSS)
  - Relationships based on the --relations flag (e.g., belongsToMany)
- Customizable stub files
- Token-based authentication using Laravel Sanctum, with a Service-Repository Pattern for clean and maintainable code.
- Clean & optimized code structure

---

## Installation

```bash
1. Clone the project:
git clone https://github.com/alamin-php/laravel_crud_generator.git

2. Run composer update:
composer update

3. Example Command with --relation flag:
php artisan make:crud Project1 --fields="name:string, description:text, status:enum(open,closed)" --relations="tasks:hasMany"

4. Example Command without --relation flag:
php artisan make:crud Task1 --fields="title:string, description:text, status:boolean"
