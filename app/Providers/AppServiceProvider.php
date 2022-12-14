<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Paginator::useBootstrap();

        // $user = 5;
        // $employee = DB::table('users')
        //                 ->join('employees', 'users.id', '=', 'employees.users_id')
        //                 ->select('employees.oid')
        //                 ->where('users.id', '=', $user)
        //                 ->get();

        // $employeeData = json_decode( json_encode($employee), true);
        
        // $designation = DB::table('designation_employees')
        //                 ->where('designation_employees.employees_id', '=', $employeeData[0]['oid'])
        //                 ->select('designation_employees.designation_role', 'designation_employees.program_id')
        //                 ->get();  

        // $designationData = json_decode( json_encode($designation), true);

        // View::share('empDes', $designationData);
    }
}
