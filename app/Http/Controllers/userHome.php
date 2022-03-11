<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\phones;
use App\Exports\UserExport;
use App\Models\role;
use PDF;
class userHome extends Controller
{
    public function index()
    {
        $name="do manh hung";
        $userArray=[
            "name"=>"manhhung",
            "yearsOld"=>"19",
            "sex"=>"male"
        ];
        return view("userHome",compact("name","userArray"));
    }
    public function addUserPhone()
    {
        $user=new User();
        $user->name="hungdo1";
        $user->email="dohung@fds.com4".encrypt("secret");
        $user->password=encrypt("secret");
        $user->save();
        $phone=new phones();
        $phone->phone="090855562qweqwe8";
        $user->phone()->save($phone);
        return "requested hung do";
    }
    public function fetchPhone(Request $request)
    {
        $phone=User::find($request->id)->phone;
        return $phone;
    }
    public function exportFile(Type $var = null)
    {
        return Excel::download(new UserExport,"abc.xlsx");
    }
    public function addUserRole()
    {
        $user=new User();
        $user->name="hungdo1".encrypt("secret");
        $user->email="dohung@fds.com4".encrypt("secret");
        $user->password=encrypt("secret");
        $user->save();
        $roleValue=[1,2];
        $user->roles()->attach($roleValue);
        return "requested manh hung do";
    }
    public function findUser(Request $request)
    {
        $user=User::find($request->id)->roles;
        return $user;
    }
    public function listAllData()
    {
        $users=User::select("name","email","password")->get();
        return view("displayView",compact("users"));
    }
    public function downloadPDF()
    {
        $users=User::select("name","email","password")->get();
        $pdf=PDF::loadView("displayView",compact("users"));
        return $pdf->download("hungdo.pdf");
    }
    public function searchView()
    {
        return view("searchUser");
    }
    public function searchStore(Request $request)
    {
        $input = $request->all();

        $data = User::select("name")
                  ->where("name","LIKE","%{$input['query']}%")
                  ->get();
   
        return response()->json($data);
    }
}
