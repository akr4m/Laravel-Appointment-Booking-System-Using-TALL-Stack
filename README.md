## Laravel Appointment Booking System Using TALL Stack

#### Laravel
#### Livewire
#### Tailwind
#### AlpineJs

Demo Project of An Booking System

### Screenshots

#### Booking Page
![Booking Page](https://user-images.githubusercontent.com/17238742/131124597-7a4ec985-af7e-41fb-be77-45105c46104d.jpg)

#### After Booking
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
