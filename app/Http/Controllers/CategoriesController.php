<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories=Categories::where('etat',0)->get();
        $type=0;
        return view('pages.categorie.index', compact('categories','type'));
    }

    public function indexArchiv()
    {
        $categories=Categories::where('etat',1)->get();
        $type=1;
        return view('pages.categorie.index', compact('categories','type'));
    }

    public function action($id)
    {
        $categorie = Categories::find($id);
        return view('pages.categorie.action' , compact('categorie'));
    }

    public function makeAction(Request $request){
        $logoName='';
        if ($request->hasFile('img')) {
            $logo = $request->file('img');
            $logoName = time() . '_' . $logo->getClientOriginalName();
            $logo->move(public_path('img'), $logoName);
        }
        if($request->id == -1){
            Categories::create([
                'nom'=> $request->input('nom'),
                'logo'=> $logoName,
            ]);
        }else{
            $catg=Categories::find($request->id);
            $catg->nom=$request->input('nom');
            if($logoName!='')
                $catg->logo=$logoName;
            $catg->save();
        }
        
        return redirect()->route('categorie.index');
    }


    public function archive($id,$etat){
        $catg=Categories::find($id);
        $catg->etat=$etat;
        $catg->save();
        return redirect()->route('categorie.index');
    }
}
