<?php

namespace App\Http\Controllers;

use App\Exports\ExportUser;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use SebastianBergmann\Exporter\Exporter;

class ExportExcelController extends Controller
{
    //
    public function welcome(){
        $users = User::all();
        return view('welcome',compact('users'));
    }
    public function export(){
        $users = User::select('id','name','email')->get();
        $array = [];
        foreach($users as $key => $user){
            $array[] = [
                'Id' => $user->id,
                'Name' => $user->name,
                'Email' => $user->email
            ];
        }

        $rows = count($array);
        $export = new ExportUser($array,$rows);
        return Excel::download($export,'users.xlsx');
    }

}
