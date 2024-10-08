<?php

use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/my', function () {
//     return view('tasks.my-task');
// })->name('tasksssssss');

Route::get('/', [\App\Http\Controllers\DashboradController::class, 'index'])->middleware(['auth', 'verified'])->name('index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('404', function () {
    return view('404');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::group(['middleware' => ['role:Admin']], function () {

       // Route::resource('projects', TaskController::class);
    });
    Route::group(['middleware' => ['role:Manager']], function () {
        // Routes for Admin
    });
    Route::group(['middleware' => ['role:Team Member']], function () {
        // Routes for Admin
    });


    // لعرض المشاريع المرتبطة بالمستخدم المصادق
    Route::get('/my-projects', [ProjectController::class, 'myProjects'])->name('projects.myProjects');
    Route::get('/my-projects/all', [ProjectController::class, 'index'])->name('projects.all');

// لتحديث حالة المشروع إلى approved
    Route::patch('/projects/update-status', [ProjectController::class, 'acceptInvitations'])->name('projects.updateStatus');
    Route::get('/my-projects/invite/{id}', [ProjectController::class, 'add_user_to_project'])->name('projects.team.add');

    Route::post('projects/{id}/add-user', [ProjectController::class, 'addUser'])->name('projects.addUser');
    Route::resource('projects', ProjectController::class);

    // المسار المخصص لإنشاء مهمة مرتبطة بمشروع
    Route::get('projects/{project}/tasks/create', [TaskController::class, 'create'])->name('tasks.create');

    Route::post('projects/{project}/tasks/create', [TaskController::class, 'create'])->name('tasks.store');

    // استثناء دالة create من الـ resource لتجنب التضارب
    Route::resource('tasks', TaskController::class)->except(['create']);


    // مجموعة مسارات الـ Checklists المرتبطة بكل مهمة
    Route::prefix('tasks/{task}/checklists')->group(function () {
        Route::get('/', [ChecklistController::class, 'index'])->name('checklists.index');
        Route::get('/create', [ChecklistController::class, 'create'])->name('checklists.create');
        Route::post('/', [ChecklistController::class, 'store'])->name('checklists.store');
        Route::get('/{checklist}', [ChecklistController::class, 'show'])->name('checklists.show'); // هذا هو الراوت المطلوب
        Route::get('/{checklist}/edit', [ChecklistController::class, 'edit'])->name('checklists.edit');
        Route::put('/{checklist}', [ChecklistController::class, 'update'])->name('checklists.update');
        Route::delete('/{checklist}', [ChecklistController::class, 'destroy'])->name('checklists.destroy');
    });

    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::resource('/notifications', NotificationController::class);


});



require __DIR__.'/auth.php';
