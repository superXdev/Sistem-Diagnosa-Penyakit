# Sistem Diagnosa Penyakit
Ini adalah implementasi sistem pakar dengan menggunakan metode Certainty Factor, project yang saya gunakan sebagai tugas akhir semester pada mata kuliah Sistem Pakar.

![App Screenshot](https://github.com/superXdev/Sistem-Diagnosa-Penyakit/blob/main/public/dist/img/screenshot/dashboard.png?raw=true)

  

## Tech Stack

**Client:** [ruangAdmin](https://github.com/indrijunanda/RuangAdmin), Bootstrap, Jquery, filePond

**Server:** PHP 7.3.x, Laravel 8.x

  
## Dependencies

- [Laravel Breeze](https://github.com/laravel/breeze)
- [spatie/laravel-permission](https://github.com/spatie/laravel-permission)
- [spatie/laravel-activitylog](https://github.com/spatie/laravel-activitylog)
- [akaunting/laravel-setting](https://github.com/akaunting/laravel-setting)
- [Laravel Modules](https://nwidart.com/laravel-modules/v1)

  
## Installation 

You can fork or clone this project

```sh
git clone https://github.com/superXdev/Sistem-Diagnosa-Penyakit
cd Sistem-Diagnosa-Penyakit
composer install
cp .env.example .env <-- edit db config
php artisan install
```
That's it!

### Sample data
Membuat banyak hasil diagnosa untuk contoh
```sh
php artisan generate:diagnosa <total>
```
Argument `<total>` bersifat opsional

## Admin credentials
- **Username:** admin
- **Password:** admin123

## Hasil Diagnosa
![diagnosa](https://github.com/superXdev/Sistem-Diagnosa-Penyakit/blob/main/public/dist/img/screenshot/diagnosa.png?raw=true)

## Running Tests

To run tests, run the following command

```
php artisan test
```

```
Tests:  29 passed
Time:   7.58s
```

## License

QAdmin is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). 
