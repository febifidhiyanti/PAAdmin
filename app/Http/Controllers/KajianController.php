<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use Kreait\Firebase\Firestore;
use Google\Cloud\Firestore\FirestoreClient;
use Illuminate\Support\Facades\Hash;


class KajianController extends Controller
{
    private $database;

    public function __construct()
    {
        $this->database = \App\Services\FirebaseService::connect();
    }

    public function index(){
    
        $data = app('firebase.firestore')
        ->database()
        ->collection('kajian')
        ->documents();

        if ($data->isEmpty()) {
            return collect();
        }

        $kajians = collect($data->rows());

        return view('Kajian.index', [
            'kajians' => $kajians,
        ]);
            
    }

    public function show($id){
    
        $docRef =  app('firebase.firestore')
        ->database()->collection('kajian')->document($id);
        $snapshot = $docRef->snapshot();
        $kajian = $snapshot;

        return view('Kajian.show', compact('kajian'));
            
    }
    
    public function create(Request $request) 
    {
       return view('Kajian.create');
    }

    public function store(Request $request)
    {
    $firestore = app('firebase.firestore')
                    ->database()
                    ->collection('kajian')
                    ->newDocument();
 
    $firestore->set([
            'id' => $request->id,
            'title' => $request->title,
            'link' => $request->link,
            'description' => $request->description,
            'image' => $request->image,
            'location' => $request->location,
            'detaillocation' => $request->detaillocation,
            'date' => $request->date,
            'ustad' => $request->ustad,
        ]     
    );

    return redirect('/kajian');
    
    }

    public function edit($id) 
    {

        $docRef =  app('firebase.firestore')
        ->database()->collection('kajian')->document($id);
        $snapshot = $docRef->snapshot();
        $kajian = $snapshot;

        return view('Kajian.edit', compact('kajian'));
    }

    public function update($id, Request $request){
        $docRef = app('firebase.firestore')
        ->database()->collection('kajian')->document($id);
        $snapshot = $docRef->snapshot();
        $docRef->set([
            'id' => $request->id,
            'title' => $request->title,
            'link' => $request->link,
            'description' => $request->description,
            'image' => $request->image,
            'location' => $request->location,
            'detaillocation' => $request->detaillocation,
            'date' => $request->date,
            'ustad' => $request->ustad,
        ]);

        return redirect('/kajian');
    }

    public function destroy($id){
        $docRef = app('firebase.firestore')
        ->database()->collection('kajian')->document($id);
        $docRef->delete();

        return redirect('/kajian');
    }
    
}
