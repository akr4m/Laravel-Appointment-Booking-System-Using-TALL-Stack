## Laravel Appointment Booking System Using TALL Stack

#### Laravel
#### Livewire
#### Tailwind
#### AlpineJs

Demo Project of An Booking System

### Screenshots

![Booking Page](https://user-images.githubusercontent.com/17238742/131124369-46db7fb6-8a40-4fd1-8976-b6cac2117ba8.jpg)
![Booking Complete](https://user-images.githubusercontent.com/17238742/131124379-efe00b08-033e-4b7f-8c08-975dac10bf55.jpg)


### Routes

```php

<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/bookings/create', CreateBooking::class);
Route::get('/bookings/{appointment:uuid}', ShowBooking::class)->name('bookings.show');

require __DIR__.'/auth.php';

```
