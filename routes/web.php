<?php
use App\Livewire\Admin\AdminHome;
use App\Livewire\Admin\AllUser;
use App\Livewire\Admin\AdminCreateProperty;
use App\Livewire\Admin\AdminViewProperty;
use App\Livewire\Admin\AdminShowProperty;
use App\Livewire\Admin\AdminViewInquiry;
use App\Http\Controllers\HomeController;
use App\Livewire\Home\PropertyList;
use App\Livewire\Home\PropertyBooking;
use App\Livewire\Home\UserAddProperty;
use App\Livewire\Home\UserViewProperty;
use App\Livewire\Home\UserShowProperty;
use App\Livewire\Home\UserSetting;
use App\Livewire\Home\AboutUs;

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', [HomeController::class, 'Home'])->name('home');
Route::get('/home/property-booking/{id}', PropertyBooking::class);
Route::get('/home/property-list', PropertyList::class);
Route::get('/home/user-add-property', UserAddProperty::class);
Route::get('/home/user-view-property', UserViewProperty::class);
Route::get('/home/user-setting', UserSetting::class);
Route::get('/home/about-us', AboutUs::class);
Route::get('/home/user-show-property/{id}', UserShowProperty::class);

//admin route
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('admin/admin-home', AdminHome::class)->name('admin.home');
    Route::get('/admin/property/{id}', AdminShowProperty::class)->name('admin.property.show');
    Route::get('/admin/admin-view-inquiry', AdminViewInquiry::class)->name('admin.inquiries');
    Route::get('admin/admin-create-property', AdminCreateProperty::class)->name('admin.admin-add-prop');
    Route::get('admin/admin-view-property', AdminViewProperty::class)->name('admin.admin-view-prop');
    Route::get('admin/all-user', AllUser::class)->name('admin.users');
    
    // Add more admin routes here
});
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
