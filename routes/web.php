<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
  //session()->forget('sessionkey');
  if (!session('sessionkey')) {

    $respondent = new App\ajax_respondents;
    $respondent->sessionkey = uniqid();
    $respondent->save();

    session(['sessionkey' => $respondent->sessionkey]);

    return view('questions.index');
  }
  else{

    return view('questions.index');
  }

});

Route::get('what-should-we-call-you', function () {//first-view
  
    return view('questions.name');
  
});

Route::get('are-you-ready-for-your-adventure', function () {//second-view

  $respondent = App\ajax_respondents::where('sessionkey', '=', session('sessionkey'))->get()->first();

  return view('questions.ready', compact('respondent'));

});

Route::get('where-would-you-go', function () {

    return view('questions.place');

});

Route::get('your-mobile-number', function () {

    return view('questions.number');

});

Route::get('your-email-address', function () {

    return view('questions.email');

});

Route::get('metrobank-credit-cards', function () {

  $respondent = App\ajax_respondents::where('sessionkey', '=', session('sessionkey'))->get()->first();
  //dd($respondent);

  return view('questions.cards', compact('respondent'));

});

Route::get('your-birthday', function () {

    return view('questions.birthday');

});

Route::get('best-gift-youve-ever-received', function () {

    return view('questions.best_gift');

});

Route::get('what-would-you-do', function () {

  return view('questions.todo');

});

Route::get('existing-card-with-other-banks', function () {

  return view('questions.other_card');

});

Route::post('savename', 'QuestionController@savename');

Route::post('saveplace', 'QuestionController@saveplace');

Route::post('savenumber', 'QuestionController@savenumber');

Route::post('savetodo', 'QuestionController@savetodo');

Route::post('saveemail', 'QuestionController@saveemail');

Route::post('savebirthday', 'QuestionController@savebirthday');

Route::post('savegift', 'QuestionController@savegift');

Route::post('saveothercard', 'QuestionController@saveothercard');

Route::post('cardForm', 'QuestionController@saveSelectedCard');

/*TEST*/
Route::get('test', function () {

	//dump(UrlSigner::sign('https://myapp.com/protected-route', 5));
	//dd(UrlSigner::validate('https://myapp.com/protected-route?expires=1521360332&signature=6d528cb7cf7843e0b39578b320527073'));
	// $r = new App\Respondents;
	// $r->title = "Mr.";
	// $r->firstname = "Arth3";
	// $r->lastname = "Daño";
	// $r->placetogo = "221B Baker Street";
	// $r->email = "arth@kestrelddm.com";
	// $r->thingtodo = "Sleep";
	// $r->birthday = "09/21/1996";
	// $r->gift = "404";
	// $r->mobile_number = "0999292929";
	// $r->save();
	// dd($r);
	//dump("Current DateTime ".date('Y-m-d G:i:s'));

  $respondents = App\Respondents::where('created_at', '>=', date('Y-m-d', time() - 60 * 60 * 24) . ' 16:59:59')->get();
  $respondents = App\Respondents::where('firstname', '!=', null)->get();

  foreach ($respondents as $key => $respondent) {
    $toExcel[] = [
      'Date' => date_format($respondent->created_at, 'M d Y'),
      'Time' => date_format($respondent->created_at, 'G:i:s'),
      'Full Name' => $respondent->title . " " . $respondent->firstname . " " . $respondent->lastname,
      'Gender' => (strpos($respondent->title, 's') !== false) ? 'Female' : 'Male',
      'Birthday' => date_format(date_create($respondent->birthday), 'M d Y'),
      'Mobile Number' => $respondent->mobile_number,
      'Email Address' => $respondent->email,
    ];
  }

  if (isset($toExcel) && sizeof($toExcel) > 0) {

    $report = Excel::create('MCC Acquisition ' . date("M d Y"), function ($excel) use ($toExcel) {

      $excel->sheet('MCC Acquisition ' . date("M d, Y"), function ($sheet) use ($toExcel) {
        $sheet->fromArray($toExcel);
      });

    })->store('xls', storage_path('exports'));
    chmod(storage_path('exports/MCC Acquisition ' . date("M d Y") . '.xls'), 774);
    Mail::to('arth@kestrelddm.com')->send(new App\Mail\SendReport($report->storagePath));
    unlink(storage_path('exports/MCC Acquisition ' . date("M d Y") . '.xls'));
    dd($report->storagePath);
    dd("Done");
  }
});