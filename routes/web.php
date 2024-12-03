<?php

use App\Http\Controllers\ABCController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AgeCheck;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/","welcome");

// through an controller 
Route::get("home",[UserController::class,"getHome"]);
// getting data from param through controller 
Route::get("user/{name}",[UserController::class,"getName"]);

// FORM
Route::get("login",[UserController::class,"loginForm"]);
Route::post("adduser",[UserController::class,"login"]);




// ROUTE GROUPING BY 
        // Prefix
        // controller

// URL Generation        Named Routes 
// Route::prefix('page')->group(function(){ //Prefix Done 
//         // Route::view("/a","url.pagea")->name('page_a')->middleware(AgeCheck::class);//Route level middelware;
//         Route::view("/a","url.pagea")->name('page_a')->middleware(AgeCheck::class);//Route level middelware;
//         Route::view("/b","url.pageb")->name('page_b');
//         Route::view("/c","url.pagec")->name('page_c');
//         Route::view("/c/{name}","url.pagec")->name('page_c_param');
//         // for redirection for a named routes are as to_route('page_c_param'['name'=>'osho']);
// });

// Route::controller(ABCController::class)->group(function(){ //Controller Done 
//     Route::get("page/a","viewA")->name('page_a');
//     Route::get("page/b","viewB")->name('page_b');
//     Route::get("page/c","viewC")->name('page_c');
//     Route::get("page/c/{name}","viewCParam")->name('page_c_param');
//     // for redirection for a named routes are as to_route('page_c_param'['name'=>'osho']);
// });


// Middelware 
      //REQ=>MIDDELWARE=>CONTROLLER
//types
     //global      Done 
     //Route       Done 
     //Group
// make cmd        php artisan make:middeleware middlewareClass
Route::middleware('middelware1')->group(function(){ //Group Level Middelware 
    // Route::view("/a","url.pagea")->name('page_a')->middleware(AgeCheck::class);//Route level middelware;
    Route::view("page/a","url.pagea")->name('page_a');//Route level middelware;
    Route::view("page/b","url.pageb")->name('page_b');
    Route::view("page/c","url.pagec")->name('page_c');
    Route::view("page/c/{name}","url.pagec")->name('page_c_param');
    // for redirection for a named routes are as to_route('page_c_param'['name'=>'osho']);
});





// MYSQL                               
//    open xampp 
//    create a db laravel
//    .env enter connection mysql and db laravel uncomment 
//    migration perform     php artisan migrate 
//    php artisan make:migration create_student_table
//    add filed in the generated migration 
// //    run php artisan migrate
// Route::get("add",[StudentController::class,'index']);
// Route::view('/showstudent','showstudent');
// Route::post('/addstudent',[StudentController::class,'addStudent']);
// Route::get('/delete/{id}',[StudentController::class,'deleteStudent']);
// Route::post('/update/{id}',[StudentController::class,'updateStudent']);
// Route::get('/update/{id}',[StudentController::class,'updateUi']);
// CRUD                                  ---Eloquent Model : Query Builder           
// Student::all();
// Student::insert(['name'=>'osho','phone'=>"+91-67456253623361"]);
// Student::where("id",1)->get();
// Student::where("id",3)->delete();
// Student::where("id",4)->update(['name','osho']);
//CRUD                                   ---Database:Query Builder                             
// DB::table('student')->all();
// DB::table('student')->insert(['name'=>'osho','phone'=>"+91-67456253623361"]);
// DB::table('student')->where("id",1)->get();
// DB::table('student')->where("id",3)->delete();
// DB::table('student')->where("id",4)->update(['name','osho']);





// Route Method 
// Route::method(uri,callback);
// Methods 
         // get - load page
              //<form action="/path" method="get"></form>
         // post - create a resource
            //   <form action="/path" method="post">
            //   @csrf
            //   </form>
         // put - update multiple
            //   <form action="/path" method="post">
            //   @csrf
            //   <input type="hidden" name="_method" value="put" />
            //   </form>
         // patch - update single resource 
            //   <form action="/path" method="post">
            //   @csrf
            //   <input type="hidden" name="_method" value="patch" />
            //   </form>
         // delete - delete resource 
            //   <form action="/path" method="post">
            //   @csrf
            //   <input type="hidden" name="_method" value="delete" />
            //   </form>
         // option - default send by the browser 
         // view - load view same as get 

// Route Function 
         // any - all method apply on a single route 
            //ex:- Route::any('users',[UserController::class,'getuser'])

         //match - grouped method apply on a single route 
             //ex:- Route::match(['get','post'],'/student',[StudentController::class,'student']);

// HTTP Request Class 
        //in Controller fn parameter Request $req
             //$req->method()       -> get 
             //$req->path()         -> /student
             //$req->url()          -> /add
             //$req->input('name')  -> golu
             //$req->email          -> awd@gmail.com
             //$req->isMathod('post") -> true/false
             //$req->is('user')       -> true/false
             //$req->ip()             ->198:678:23:54


// SESSION 
        //type       normal / flash 
       //view login 
Route::get('/loginpage',[SessionController::class,'index']);
Route::get('/login',[SessionController::class,'login']);
Route::get('/profile',[SessionController::class,'profile']);
Route::get('/logout',[SessionController::class,'logout']);
// flash session 
//       used for error 

// method for 
         //session 
                // $req->session()->put('key',val);
                // $req->session()->pull('key');
         //flash session 
                //$req->session()->flash('key',val);
                // IN VIEW 
                    //session('key')
                    //session()->reflash() stop the refresh
                    //session()->keep(['key']) stop on off session 
              
// Storage file uploading 
//     create a migration and model for the string storage path in db 
//     create a view input for uploading image 
//     create controller for upload and store path in db and redirect to list of images 
// Route::get("/upload",[StorageController::class,"index"]);
// Route::post("/upload",[StorageController::class,"upload"]);
// Route::get("/list",[StorageController::class,"list"]);


// localization 
Route::get('/home',[UserController::class,'home']);
Route::get('/lang/{lang}',[UserController::class,'changeLang']);




// Pagination in laravel
// Student::paginate(10)
// view    {{$students->link()}}
// multi deletion Student::destroy([ids...]);

// EXTRA 
          //1.Component and Layouts
          //2.Template Layouts
          //3.stub customization 
          //4.migration / seeding / Accessor /Mutator /Relationship 
          //5.Send Email
          //6.Str
          //7.Route Model Binding 
          //8.