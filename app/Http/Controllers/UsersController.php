<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;
use App\Exports\InvoicesExport;
use App\Imports\UsersImport;

class UsersController extends Controller 
{
    //
    /*
    *@return BinaryFileResponse
    */
    public function export(){
        return Excel::download(new UserExport(), 'users.xlsx');
    }

    public function exportView(){
        return Excel::download(new InvoicesExport, 'invoices.xlsx');
    }

    public function import(){
        Excel::import(new UsersImport, storage_path('/app/public/users.xlsx'));
        return ('Import completed successfully');
    }
}
