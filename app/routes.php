<?php

/*
|--------------------------------------------------------------------------
| Application Routes - P3b
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
	
});

Route::get('lorem', function()
{
	// Fetch all request data.
    $data = (Input::get('paragraphs'));
    
    //Create a new validator instance.
    $validator = Validator::make(
    	array('paragraph' => $data),	
    	array('paragraph' => 'numeric|min:1|max:99')
    );
    
    if ($validator->fails()) {
       return Redirect::to('/');
    }
    
    $generator = new Lorem();
	$chunks = $generator->getParagraphs($data);
    
	return View::make('lorem')
		->with('paragraphs', $data)
		->with('chunks', $chunks);
		
	
});

Route::get('users', function() 
{
	// Fetch all request data.
    $data = (Input::all());
	
	// Create an array to hold fake users
    $fake_users = array(
    	$fake_user = array(
    		));
     
    //Create a new validator instance to check that the number of users 
    //selected is in bounds (between 5 and 99).
    $validator = Validator::make(
    	array('users' => $data['users']),	
    	array('users' => 'numeric|min:5|max:99')
    );
    
    //redirect to home page if validation fails
    if ($validator->fails()) {
    	 return Redirect::to('/');
    }
    
	//create a Faker instance 
	$faker = Faker::create();
	
    // fill the array with Faker data
    for($j = 0; $j < $data['users']; $j++) {
        
        $fake_users[$j]["name"] = $faker->name;
        
        if ( $data['birthday'] == "1" ) {
        	$fake_users[$j]["birthday"] = $faker->date($format = 'Y-m-d', $max = 'now');
        }
        else {
        	$fake_users[$j]["birthday"] = NULL;
        }
        
        if ( $data['profile'] == "1" ) {
        	$fake_users[$j]["profile"] = $faker->text;
        }
        else {
        	$fake_users[$j]["profile"] = NULL;
        }
    }
    //return users View with data.
	return View::make('users')
		->with('fake_users', $fake_users)
		->with('num_requested', $data['users'])
		->with('num_elems', count($data));

});


Route::any('color_extractor', function(){
 //var_dump(Input::file('file'));
 $file = Input::file('file')->getRealPath();
 $name = Input::file('file')->getClientOriginalName();
 
 //Create a new validator instance.
$validator = Validator::make(
	array('file' => $name),	
	array('file' => 'regex:[[^\s]+(\.png)]')
);

//redirect to home page if validation fails
if ($validator->fails()) {
   return Redirect::to('/');
}
 
 $client = new ColorExtract;
 $image = $client->loadPng($file);
 $palette = $image->extract(5);
	
 return View::make('color_extractor')
		->with('palette', $palette);

});

Route::get('password_gen', function() {
	
	// Fetch all request data.
    $data = (Input::all());
    
    $validator = Validator::make(
    	array('num_words' => $data['num_words']),	
    	array('num_words' => 'numeric|min:3|max:8')
    );
    
    //redirect to home page if validation fails
    if ($validator->fails()) {
    	 return Redirect::to('/');
    }
    
    $generator = new PasswordGen();
	$pwd = $generator->pickPassword($data['num_words'],$data['symbol'],$data['digit'],$data['cap']);
    
    return View::make('password_gen')
		->with('pwd', $pwd);
});

?>


   











