<h1 align="center">GESTION_RH</h1>
<p align="center"><i>Empowering HR Management with Seamless Efficiency</i></p>
<p align="center">
  <img src="https://img.shields.io/github/last-commit/amineboubekri/gestion_RH?style=for-the-badge" alt="last commit"/>
  <img src="https://img.shields.io/badge/last%20update-March%202024-blue?style=for-the-badge" alt="last update"/>
  <img src="https://img.shields.io/badge/language-blade-bluegray?style=for-the-badge"/>
  <img src="https://img.shields.io/badge/code%20share-44.1%25-blue?style=for-the-badge"/>
  <img src="https://img.shields.io/github/languages/count/amineboubekri/gestion_RH?style=for-the-badge" alt="language count"/>
</p>

---

<p align="center"><i><b>Built with the tools and technologies:</b></i></p>
<p align="center">
  <img src="https://img.shields.io/badge/JSON-black?style=for-the-badge&logo=json" />
  <img src="https://img.shields.io/badge/Markdown-000000?style=for-the-badge&logo=markdown" />
  <img src="https://img.shields.io/badge/npm-CB3837?style=for-the-badge&logo=npm&logoColor=white" />
  <img src="https://img.shields.io/badge/Autoprefixer-DD3735?style=for-the-badge&logo=autoprefixer&logoColor=white" />
  <img src="https://img.shields.io/badge/PostCSS-DD3A0A?style=for-the-badge&logo=postcss&logoColor=white" />
  <img src="https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=composer&logoColor=white" />
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" />
  <br/>
  <img src="https://img.shields.io/badge/Vue.js-4FC08D?style=for-the-badge&logo=vue.js&logoColor=white" />
  <img src="https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white" />
  <img src="https://img.shields.io/badge/XML-0060ac?style=for-the-badge&logo=xml&logoColor=white" />
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=vite&logoColor=white" />
  <img src="https://img.shields.io/badge/Axios-5A29E4?style=for-the-badge&logo=axios&logoColor=white" />
</p>

---

## 📌 Overview

**GESTION_RH** is a developer tool designed to simplify and empower human resource management using Laravel and modern tools.

### 🔍 Why GESTION_RH?

- 🎯 **PHPUnit Config:** Structured testing environment for robust development.
- 🐳 **Laravel Sail:** Docker support for easier local development.
- ⚡ **Vite + Vue.js:** Fast, reactive frontend development.
- 🔐 **Authentication:** Secure login with 2FA and API tokens.
- 📄 **PDF Reports:** Custom templates for document generation.

---

## 🚀 Getting Started

### Prerequisites

This project requires the following dependencies:
- PHP
- Composer
- npm
- Docker

---

### Installation

Clone the repository:
```bash
git clone https://github.com/amineboubekri/gestion_RH
cd gestion_RH
```

Install dependencies:
```bash
composer install
npm install
```

(Optional) Build Docker image:
```bash
docker build -t amineboubekri/gestion_RH .
```

### ▶️ Usage

Run with Docker:
```bash
docker run -it amineboubekri/gestion_RH
```

Run with PHP:
```bash
php artisan serve
```

Run frontend:
```bash
npm run dev
```

### ✅ Testing

GESTION_RH uses PHPUnit for testing.

With Docker:
```bash
docker exec -it gestion_rh_container vendor/bin/phpunit
```

With Composer:
```bash
vendor/bin/phpunit
```

With npm:
```bash
npm test
```

<p align="center"><a href="#">⬆ Return to Top</a></p>
