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


class BookController extends Controller
{
    private $database;

    public function __construct()
    {
        $this->database = \App\Services\FirebaseService::connect();
    }

    public function index(){
    
        $data = app('firebase.firestore')
        ->database()
        ->collection('books')
        ->documents();

        if ($data->isEmpty()) {
            return collect();
        }

        $books = collect($data->rows());

        return view('Book.index', [
            'books' => $books,
        ]);
            
    }

    public function show($id){
    
        $docRef =  app('firebase.firestore')
        ->database()->collection('books')->document($id);
        $snapshot = $docRef->snapshot();
        $book = $snapshot;

        return view('Book.show', compact('book'));
            
    }
    
    public function create(Request $request) 
    {
       return view('Book.create');
    }

    public function store(Request $request)
    {
    $firestore = app('firebase.firestore')
                    ->database()
                    ->collection('books')
                    ->newDocument();
 
    $firestore->set([
            'id' => $request->id,
            'title' => $request->title,
            'author' => $request->author,
            'descriptions' => $request->descriptions,
            'deskripsi2' => $request->deskripsi2,
            'images' => $request->images,
            'linkBuys' => $request->linkBuys,
            'pages' => $request->pages,
            'date' => $request->date,
            'price' => $request->price,
        ]     
    );

    return redirect('/books');
    
    }

    public function edit($id) 
    {

        $docRef =  app('firebase.firestore')
        ->database()->collection('books')->document($id);
        $snapshot = $docRef->snapshot();
        $book = $snapshot;

        return view('Book.edit', compact('book'));
    }

    public function update($id, Request $request){
        $docRef = app('firebase.firestore')
        ->database()->collection('books')->document($id);
        $snapshot = $docRef->snapshot();
        $user = $snapshot;
        $docRef->set([
            'id' => $request->id,
            'title' => $request->title,
            'author' => $request->author,
            'descriptions' => $request->descriptions,
            'deskripsi2' => $request->deskripsi2,
            'images' => $request->images,
            'linkBuys' => $request->linkBuys,
            'pages' => $request->pages,
            'date' => $request->date,
            'price' => $request->price,
        ]);

        return redirect('/books');
    }

    public function destroy($id){
        $docRef = app('firebase.firestore')
        ->database()->collection('books')->document($id);
        $docRef->delete();

        return redirect('/books');
    }
    
}
