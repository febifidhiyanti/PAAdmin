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


class PodcastController extends Controller
{
    private $database;

    public function __construct()
    {
        $this->database = \App\Services\FirebaseService::connect();
    }

    public function index(){
    
        $data = app('firebase.firestore')
        ->database()
        ->collection('podcasts')
        ->documents();

        if ($data->isEmpty()) {
            return collect();
        }

        $podcasts = collect($data->rows());

        return view('Podcast.index', [
            'podcasts' => $podcasts,
        ]);
            
    }

    public function show($id){
    
        $docRef =  app('firebase.firestore')
        ->database()->collection('podcasts')->document($id);
        $snapshot = $docRef->snapshot();
        $podcast = $snapshot;

        return view('Podcast.show', compact('podcast'));
            
    }
    
    public function create(Request $request) 
    {
       return view('Podcast.create');
    }

    public function store(Request $request)
    {
    $firestore = app('firebase.firestore')
                    ->database()
                    ->collection('podcasts')
                    ->newDocument();
 
    $firestore->set([
        'id' => $request->id,
        'title' => $request->title,
        'description' => $request->description,
        'image' => $request->image,
        'link' => $request->link,
        ]     
    );

    return redirect('/podcast');
    
    }

    public function edit($id) 
    {

        $docRef =  app('firebase.firestore')
        ->database()->collection('podcasts')->document($id);
        $snapshot = $docRef->snapshot();
        $podcast = $snapshot;

        return view('Podcast.edit', compact('podcast'));
    }

    public function update($id, Request $request){
        $docRef = app('firebase.firestore')
        ->database()->collection('podcasts')->document($id);
        $snapshot = $docRef->snapshot();
        // $user = $snapshot;
        $docRef->set([
            'id' => $request->id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'link' => $request->link,
        ]);

        return redirect('/podcast');
    }

    public function destroy($id){
        $docRef = app('firebase.firestore')
        ->database()->collection('podcasts')->document($id);
        $docRef->delete();

        return redirect('/podcast');
    }
    
}
