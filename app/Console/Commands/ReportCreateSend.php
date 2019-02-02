<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\ajax_respondents;
use App\Respondents;
use Illuminate\Support\Facades\Storage;

class ReportCreateSend extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report:create-send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create and send report';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $respondents = Respondents::where('created_at', '>=', date('Y-m-d', time() - 60 * 60 * 24).' 16:59:59')->get();//get all entries (today) where hour >= 4:59pm

        foreach($respondents as $key => $respondent){

            $toExcel[] = [
                'Date' => date_format($respondent->created_at, 'M d Y'),
                'Time' => date_format($respondent->created_at, 'G:i:s'),
                'Full Name' => $respondent->title." ".$respondent->firstname." ".$respondent->lastname,
                'Gender' => (strpos($respondent->title, 's') !== false) ? 'Female' : 'Male',
                'Birthday' => date_format(date_create($respondent->birthday), 'M d Y'),
                'Mobile Number' => $respondent->mobile_number,
                'Email Address' => $respondent->email,
            ];
        }

        if(isset($toExcel) && sizeof($toExcel) > 0){//if there's more than one entry

            $report = \Excel::create('MCC Acquisition '.date("M d Y"), function($excel) use ($toExcel) {

                $excel->sheet('MCC Acquisition '.date("M d, Y"), function($sheet) use ($toExcel)
                {
                    $sheet->fromArray($toExcel);
                });

            })->store('xls');//store to /storage/exports/
            chmod(storage_path('exports/MCC Acquisition '.date("M d Y").'.xls'), 774);
            \Mail::to('arth@kestrelddm.com')->send(new \App\Mail\SendReport($report->storagePath));//send email

            unlink(storage_path('exports/MCC Acquisition '.date("M d Y").'.xls'));//delete file
        }
    }
}
