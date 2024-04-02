use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MensajesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rutas para login y botones logout
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/admin', [AdminController::class, 'index'])
        ->middleware('auth.admin')
        ->name('admin.index');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register.index');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('/login', [SessionsController::class, 'create'])->name('login.index');
    Route::post('/login', [SessionsController::class, 'store'])->name('login.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [SessionsController::class, 'destroy'])->name('login.destroy');
    Route::get('/pdadmin', [ProductController::class, 'index'])->name('pdadmin');
    Route::post('/mensajes', [MensajesController::class, 'store'])->name('mensajes.store');
    Route::get('/inicio', [SessionsController::class, 'create'])->name('login');
});

// Routes para las vistas que llevarán crud
Route::get('/products', function () {
    return view('productos');
})->name('productos');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/products/tacos', function () {
    return view('products.tacos');
})->name('tacos');

Route::get('/admin/pdadmin', function () {
    return view('admin.pdadmin');
})->name('pdadmin');

Route::get('/admin/noadmin', function () {
    return view('admin.noadmin');
})->name('noadmin');

Route::get('/admin/coadmin', function () {
    return view('admin.coadmin');
})->name('coadmin');
