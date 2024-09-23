# Live Stream Application

## Description
This is a Live Stream application built with Laravel and Agora SDK. The application allows users to stream live video and audio in real-time.

## Features
- Real-time video and audio streaming using Agora
- User-friendly interface
- Ability to copy and share stream link

## Prerequisites
- [PHP](https://www.php.net/) (version >= 8.0)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) (for frontend assets)
- Access to [Agora.io](https://www.agora.io/en/) to obtain an App ID

## Getting Started

### Step 1: Clone the repository
```bash
git clone https://github.com/abdelrhmanMohmaed/livestream-app.git
cd livestream-app

### Step 2: Install Dependencies
```bash
composer install
npm install


### Step 3: Set Up Environment
```bash
cp .env.example .env
php artisan key:generate


### Step 4: Start the Application
```bash
php artisan serve

http://localhost:8000



### خطوات الحصول على مفتاح Agora:
1. قم بزيارة [Agora.io](https://www.agora.io/en/).
2. قم بإنشاء حساب جديد إذا لم يكن لديك حساب بالفعل.
3. بعد تسجيل الدخول، انتقل إلى "Console" وأنشئ مشروعًا جديدًا.
4. ستحصل على App ID الخاص بك، والذي تحتاجه في `.env` الخاص بالمشروع.

إذا كنت بحاجة إلى أي تفاصيل إضافية أو تعديلات، فلا تتردد في السؤال!


