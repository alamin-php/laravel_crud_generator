# Laravel CRUD Generator

A simple and powerful Laravel CRUD Generator package to speed up your development process. This package automatically generates Models, Controllers, Requests, Migrations, Routes, and Views for your Laravel applications.

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
- Token-based authentication using Laravel Sanctum, with a Repository + Service pattern for clean and maintainable code.
- Clean & optimized code structure

---

## Installation

1. Clone the project:

```bash
git clone https://github.com/alamin-php/laravel_crud_generator.git
