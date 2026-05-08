<?php
use App\Models\Event;
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


Route::get('display-event', function(){

$event1 = new Event("Vasaras Koncerts", "2024-08-15", 0);
$event1->getInfo();
$event1->addAttendee(1500);
$event2 = new Event("Rīgas Maratons", "2025-04-20", 1500);
$event2->getInfo();

    echo "<h1>Events: </h1>
        <ul>
            <li><strong>Nosaukums: {$event1->title}</strong></li>
            <li><strong>Datums: {$event1->year}</strong></li>
            <li><strong>Dalībnieku skaits: {$event1->attendeeCount}</strong></li>
        </ul>
        <ul>
            <li><strong>Nosaukums: {$event2->title}</strong></li>
            <li><strong>Datums: {$event2->year}</strong></li>
            <li><strong>Dalībnieku skaits: {$event2->attendeeCount}</strong></li>
        </ul>";

});

?>




