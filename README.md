# kpgts2021 Karangpraga

## Setup and Install

(On ubuntu)

1. Install needed packages
   ```bash
   sudo apt update
   sudo apt install nginx mysql-server composer libssl-dev php-zip php-mbstring php-xml php-fpm php-mysql       php-common
   ```
1. Create user for your mysql, and create database named "kpgts2021"
1. `git clone https://github.com/JonathanGun/kpgts2021-karangpraga.git`
1. `cd kpgts2021-karangpraga/kpgts2021`
1. `composer update`
1. `cp .env.example .env`
1. `php artisan key:generate`
1. `php artisan migrate`

Lengkapnya klik di [sini](https://docs.google.com/document/d/1hXBgrkTfMA9TtdKIDRkPJEoVy08ClrnKnk4JQw9FIxE/edit?usp=sharing)

Jika masih bingung silakan tanya langsung aja ke akun github ini