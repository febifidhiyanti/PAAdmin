<?php  
 namespace App\Http\Controllers;  
 use Illuminate\Http\Request;  
 use Kreait\Firebase;  
 use Kreait\Firebase\Factory;  
 use Kreait\Firebase\ServiceAccount;  
 use Kreait\Firebase\Database;  
 class FirebaseController extends Controller  
 {  
 //  
 public function index(){  
 $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/alhijra-versi1-firebase-adminsdk-up5ug-9b2b192e92.json');  
 $firebase = (new Factory)  
 ->withServiceAccount($serviceAccount)  
 ->withDatabaseUri('https://alhijra-versi1-default-rtdb.firebaseio.com/')  
 ->create();  
 $database = $firebase->getDatabase();  
 $newPost = $database  
 ->getReference('blog/posts')  
 ->push([  
 'title' => 'Post title',  
 'body' => 'This should probably be longer.'  
 ]);  
 //$newPost->getKey(); // => -KVr5eu8gcTv7_AHb-3-  
 //$newPost->getUri(); // => https://my-project.firebaseio.com/blog/posts/-KVr5eu8gcTv7_AHb-3-  
 //$newPost->getChild('title')->set('Changed post title');  
 //$newPost->getValue(); // Fetches the data from the realtime database  
 //$newPost->remove();  
 echo"<pre>";  
 print_r($newPost->getvalue());  
 }  
 }  
 ?>  