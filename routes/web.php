<?php
use App\Models\Car;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/{post}/update', [PostController::class, 'update'])->name('posts.update');
Route::delete('posts/{post}/destroy', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts/{post}/status', [PostController::class, 'updateStatus'])->name('posts.updateStatus');


Route::get('/display-car', function(){
    $car = Car::create(
        'Toyota',
        'Corolla',
        2022,
);

    echo "<h1>Car information:</h1>
        <ul>
            <li><strong>Name: {$car->name}</strong></li>
            <li><strong>Model: {$car->model}</strong></li>
            <li><strong>Year: {$car->year}</strong></li>
        </ul>";

        });
?>

