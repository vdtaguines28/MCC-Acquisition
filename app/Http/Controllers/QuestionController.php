<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ajax_respondents;
use App\Respondents;

class QuestionController extends Controller
{
  public function savename(Request $request)//name
  {

    request()->validate([

      'title' => 'required',
      'firstname' => 'required|regex:/^[\pL\s\-]+$/u',
      'lastname' => 'required|regex:/^[\pL\s\-]+$/u',
    ]);

    //validate
    $respondent = ajax_respondents::where('sessionkey', '=', session('sessionkey'))->get()->first();
    $respondent->title = $request->title;
    $respondent->firstname = $request->firstname;
    $respondent->lastname = $request->lastname;
    $respondent->progress = "11100000000";
    $respondent->save();

    return redirect('are-you-ready-for-your-adventure');//second-view
  }

  public function saveplace(Request $request)//place to go
  {

    request()->validate([
      'TelCheck' => 'required',
    ]);

    $respondent = ajax_respondents::where('sessionkey', '=', session('sessionkey'))->get()->first();
    if (!empty($respondent->sessionkey) && !empty($respondent->title) && !empty($respondent->firstname) && !empty($respondent->lastname)) {

      $respondent->placetogo = $request->TelCheck;
      $respondent->progress = "11110000000";
      $respondent->save();

    } else {

      return redirect('what-should-we-call-you');
    }

    return redirect('your-mobile-number');//fourth-view
  }

  public function savenumber(Request $request)//number
  {

    request()->validate([
      'Number' => 'required|alpha_num',
    ]);

    $respondent = ajax_respondents::where('sessionkey', '=', session('sessionkey'))->get()->first();
    $respondent->mobile_number = $request->Number;
    $respondent->progress = "11111000000";
    $respondent->save();

    $respondent->complete = true;
    $respondent->save();

    return redirect('what-would-you-do');
  }

  public function savetodo(Request $request)//thing todo
  {
    request()->validate([
      'TimeCheck' => 'required',
    ]);

    $respondent = ajax_respondents::where('sessionkey', '=', session('sessionkey'))->get()->first();
    $respondent->thingtodo = $request->TimeCheck;
    $respondent->progress = "11111100000";
    $respondent->save();

    return redirect('your-email-address');
  }

  public function saveemail(Request $request)//email
  {

    request()->validate([
      'Email' => 'required|email',
    ]);

    $respondent = ajax_respondents::where('sessionkey', '=', session('sessionkey'))->get()->first();
    $respondent->email = $request->Email;
    $respondent->progress = "11111110000";
    $respondent->save();

    return redirect('your-birthday');
  }

  public function savebirthday(Request $request)//birthday
  {

    request()->validate([
      'bday_month' => 'required',
      'bday_day' => 'required',
      'bday_year' => 'required',
    ]);

    $respondent = ajax_respondents::where('sessionkey', '=', session('sessionkey'))->get()->first();
    $respondent->birthday = $request->bday_month . ' ' . $request->bday_day . ', ' . $request->bday_year;
    $respondent->progress = "11111111000";
    $respondent->save();

    return redirect('best-gift-youve-ever-received');
  }

  public function savegift(Request $request)//best gift
  {

    request()->validate([
      'GiftCheck' => 'required',
    ]);

    $respondent = ajax_respondents::where('sessionkey', '=', session('sessionkey'))->get()->first();
    $respondent->gift = $request->GiftCheck;
    $respondent->progress = "11111111100";
    $respondent->save();

    return redirect('existing-card-with-other-banks');
  }

  public function saveothercard(Request $request)//other card
  {

    $respondent = ajax_respondents::where('sessionkey', '=', session('sessionkey'))->get()->first();
    $respondent->card = $request->card;
    $respondent->progress = "11111111110";
    $respondent->complete = true;
    $respondent->save();

    return redirect('metrobank-credit-cards');
  }

  public function saveSelectedCard(Request $request)
  {

    $respondent = ajax_respondents::where('sessionkey', '=', session('sessionkey'))->get()->first();
    $respondent->card_name = $request->cardName;
    $respondent->progress = "11111111111";
    $respondent->save();

    /*Save TO respondents*/
    $finished_respondents = new Respondents;
    $finished_respondents->title = $respondent->title;
    $finished_respondents->firstname = $respondent->firstname;
    $finished_respondents->lastname = $respondent->lastname;
    $finished_respondents->placetogo = $respondent->placetogo;
    $finished_respondents->email = $respondent->email;
    $finished_respondents->thingtodo = $respondent->thingtodo;
    $finished_respondents->birthday = $respondent->birthday;
    $finished_respondents->gift = $respondent->gift;
    $finished_respondents->mobile_number = $respondent->mobile_number;
    $finished_respondents->card = $respondent->card;
    $finished_respondents->card_name = $respondent->card_name;

    return \Redirect::to('https://www.metrobankcard.com/OnlineServices/CardApplication/Apply');

    // return redirect('metrobank-credit-cards');

  }
}