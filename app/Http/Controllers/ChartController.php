<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Auth;


class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // Get users grouped by age
        $groups = DB::table('users')
        ->select('address', DB::raw('count(*) as total'))
        ->groupBy('address')
        ->pluck('total', 'address')->all();

        // Generate random colours for the groups
        for ($i=0; $i<=count($groups); $i++) 
        {
          $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }

        // Prepare the data for returning with the view
        $chart = new Chart;
        $chart->labels = (array_keys($groups));
        $chart->dataset = (array_values($groups));
        $chart->colours = $colours;
        return view('charts.charts1', compact('chart'));
}

public function index2()
{
   // Get users grouped by age
    $groups = DB::table('commadmins')
    ->select('statut', DB::raw('count(*) as total'))
    ->groupBy('statut')
    ->pluck('total', 'statut')->all();

    // Generate random colours for the groups
    for ($i=0; $i<=count($groups); $i++) 
    {
      $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
    }

    // Prepare the data for returning with the view
    $chart = new Chart;
    $chart->labels = (array_keys($groups));
    $chart->dataset = (array_values($groups));
    $chart->colours = $colours;
    return view('charts.charts2', compact('chart'));
}

     public function index3()
{
   // Get users grouped by age
    $groups = DB::table('products')
    ->select('statut', DB::raw('count(*) as total'))
    ->groupBy('statut')
    ->pluck('total', 'statut')->all();

    // Generate random colours for the groups
    for ($i=0; $i<=count($groups); $i++) 
    {
      $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
    }

    // Prepare the data for returning with the view
    $chart = new Chart;
    $chart->labels = (array_keys($groups));
    $chart->dataset = (array_values($groups));
    $chart->colours = $colours;
    return view('charts.charts3', compact('chart'));
}


public function index4()
{
   // Get users grouped by age
    $groups = DB::table('commadmins')
    ->select('adresse_user', DB::raw('count(*) as total'))
    ->where('nom_soc',Auth::user()->nomsociete) 
    ->groupBy('adresse_user')
    

    ->pluck('total', 'adresse_user')->all();
    // Generate random colours for the groups
    for ($i=0; $i<=count($groups); $i++) 
    {
      $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
    }

    // Prepare the data for returning with the view
    $chart = new Chart;
    $chart->labels = (array_keys($groups));
    $chart->dataset = (array_values($groups));
    $chart->colours = $colours;
    return view('charts.chartsvendeur1', compact('chart'));
}


public function indexslivreurs()
{
   // Get users grouped by age
   $groups = DB::table('livreurs')
   ->select('ville', DB::raw('count(*) as total'))
   ->where('id_user',Auth::user()->id) 
   ->groupBy('ville')
   ->pluck('total', 'ville')->all();
   
   // Generate random colours for the groups
   for ($i=0; $i<=count($groups); $i++) 
   {
     $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
   }

   // Prepare the data for returning with the view
   $chart = new Chart;
   $chart->labels = (array_keys($groups));
   $chart->dataset = (array_values($groups));
   $chart->colours = $colours;
    return view('charts.slproduit', compact('chart'));
}

public function indexspostvendeur()
{
  $groups = DB::table('commentairs')
  ->select('post_id', DB::raw('count(*) as total'))
  
  ->groupBy('post_id')
  ->pluck('total', 'post_id')->all();

  // Generate random colours for the groups
  for ($i=0; $i<=count($groups); $i++) 
  {
    $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
  }

  // Prepare the data for returning with the view
  $chart = new Chart;
  $chart->labels = (array_keys($groups));
  $chart->dataset = (array_values($groups));
  $chart->colours = $colours;

    return view('charts.vendeurproduit', compact('chart'));
}

public function indexsnomprodvendor()
{
  $groups = DB::table('commadmins')
  ->select('nom_prduit', DB::raw('count(*) as total'))
  ->where('nom_soc',Auth::user()->nomsociete) 

  ->groupBy('nom_prduit')
  ->pluck('total', 'nom_prduit')->all();

  // Generate random colours for the groups
  for ($i=0; $i<=count($groups); $i++) 
  {
    $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
  }

  // Prepare the data for returning with the view
  $chart = new Chart;
  $chart->labels = (array_keys($groups));
  $chart->dataset = (array_values($groups));
  $chart->colours = $colours;

    return view('charts.nomprodvendor', compact('chart'));
}

}
