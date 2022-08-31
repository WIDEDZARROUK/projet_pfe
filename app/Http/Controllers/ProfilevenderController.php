<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Commadmins;
use App\Models\Product;

class ProfilevenderController extends Controller
{
    public function acc()
    {
        return view('vendeur.profile');
    }

    public function UpdateProfile(Request $request){
        $user=User::find(Auth::user()->id);
        if($user){
           $user->name=$request->name;
           $user->email=$request->email; 
           $user->imagevendeur=$request->imagevendeur;
           $user->nomsociete=$request->nomsociete;
           $user->prenom=$request->prenom;
           $user->numerosiret=$request->numerosiret;
           $user->numerocart=$request->numerocart;
           $user->phone=$request->phone;
           $user->description=$request->description;
           $user->address=$request->address;
           

           $user->save();
           return Redirect()->back()->with('success', 'mise a jour profile');
      }
      else {  return Redirect()->back();  }
   }

    

  public function listcommend()
  {
    $blockcomm = Commadmins::all()
         ->where('statut',0);//refusé commande

    $commadmins = Commadmins::all();
    return view ('admin.list-commend', ['commadmins'=> $commadmins,'blockcomm'=>$blockcomm]);
  }

  
  public function acceptecommande(Request $req, $id)
    {
      $commadmins = Commadmins::find($id);
      $commadmins->statut=1;
      $commadmins->save();
      return Redirect()->back()->with('success', 'commande passée');
    }
    
  public function refusecommande( Request $req, $id)
      {
        $commadmins = Commadmins::find($id);
        $commadmins->statut = 0;
        $commadmins->save();
        return Redirect()->back()->with('success', 'commande refusé');
      }


}
