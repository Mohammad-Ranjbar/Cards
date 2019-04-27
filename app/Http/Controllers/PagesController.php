<?php

namespace App\Http\Controllers;

use App\Jobs\CompileReports;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;



class PagesController extends Controller
{
    //

    protected $mailer;

    /**
     * PagesController constructor.
     * @param $mailer
     */
    public function __construct()
    {

    }

    public function store(Request $request)
    {

        $this->validate($request,[

            'email.*'=> 'required|email'

        ],[

            'email.*' => 'this email is not formated'
        ]);

//        dd($request->all());

        return 'okay';
    }

    public function index()
    {
        $job= new CompileReports();
        $this->dispatch($job);


        return 'Done !';



    }


}
