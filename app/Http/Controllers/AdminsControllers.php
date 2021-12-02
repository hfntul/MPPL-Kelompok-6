<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Admin;
use App\Proposal;
use App\Banners;

class AdminsControllers extends Controller
{
    public function store(Request $request){

        //You should add validation before creating the user.
     
        $user = Admin::create([
           "email" => $request->email,
           "password" => bcrypt($request->password),
           "ormawa" => $request->ormawa,
        ]);
     
        if(!$user){
           return redirect('/register');
        } else {
            return redirect('/login');
        }
     
        // return response(["user" => $user], 200);
     
     }

     public function login(Request $request)
     {
        if (Auth::Attempt($request->only('email', 'password'))) {
            return redirect('/admin');
        }else{
             return redirect('/login');
        }
     }

     public function logout()
     {
      Auth::logout();
      return redirect('/');
     }

     public function createProposal(Request $request)
     {
        // $request->validate([
        //     'adminId' => 'required',
        //     'eventName' => 'required',
        //     'eventTimeHeld' => 'required',
        //     'file' => 'required|mimes:jpeg,png,jpg|max:5000',
        // ]);
        
        // // $file = $request->customFile('file');
        
        // $fileName = time().'.'.$request->file('file')->extension();  
   
        // $request->file->move(public_path('uploads'), $fileName);

        
        $proposal = Proposal::create([
            "admin_id" => Auth::user()->id,
            "eventName" => $request->judul,
            "eventTimeHeld" => $request->tanggalPel,
            "kabinet" => $request->kabinet,
            "propos" => $request->propos,
            "lpj" => $request->lpj,
            "poster" => $request->poster,
         ]);

         if(!$proposal){
            return redirect('/admin/acara/create')->with('success', 'Acara berhasil dibuat');;
         } else {
             return redirect('/admin/acara');
         }
         
     }

     public function createBanner(Request $request)
     {
        // $request->validate([
        //     'adminId' => 'required',
        //     'eventName' => 'required',
        //     'eventTimeHeld' => 'required',
        //     'file' => 'required|mimes:jpeg,png,jpg|max:5000',
        // ]);
        
        // // $file = $request->customFile('file');
        
        // $fileName = time().'.'.$request->file('file')->extension();  
   
        // $request->file->move(public_path('uploads'), $fileName);

        
        $banner = Banners::create([
            "admin_id" => Auth::user()->id,
            "nama" => Auth::user()->ormawa,
            "dueDate" => '2000-11-27',
            "link" => $request->link,
         ]);

         if(!$banner){
            return redirect('/admin/banner/create');
         } else {
             return redirect('/admin/banner/edit');
         }
     }
}
