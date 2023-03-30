<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller
{
    public function contact(Request $request)
    {
        $db = DB::table('contact_porto')->where('email', $request->email)->count();
        // echo $db;
        // die();

        $captcha_response = trim($request->get('g-recaptcha-response'));
        // echo $captcha_response;
        // die();
        if ($captcha_response != '') {
            if ($db > 3) {
                return redirect()->back()->with('banyak', 'asas');
            } else {
                DB::table('contact_porto')->insert([
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'subject' => $request->subject,
                    'pesan' => $request->pesan
                ]);
                return redirect()->back()->with('sukses', 'ssss');
            }
        } else {
            return redirect()->back()->with('capca', 'asa');
        }
    }


    public function contact2(Request $request)
    {
        DB::table('contact_porto')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'subject' => "saassa",
            'pesan' => $request->pesan
        ]);
        return redirect()->back()->with('sukses', 'ssss');
    }

    public function download()
    {
        return response()->download(public_path('element/cv.pdf'));
    }

    public function pagination(Request $request)
    {
        $perPage = 2; // Number of items to display per page
        $page = $request->input('page', 1); // Get the current page from the request or default to 1

        // Get the total number of items in the database
        $total = DB::table('articles_categories')->count();

        // Calculate the number of pages based on the total and perPage variables
        $lastPage = ceil($total / $perPage);

        // Calculate the offset (starting point) for the current page
        $offset = ($page - 1) * $perPage;

        // Get the data for the current page
        $data =  DB::table('articles_categories')->offset($offset)
            ->limit($perPage)
            ->get();

        // Return the data as JSON
        return response()->json([
            'data' => $data,
            'currentPage' => $page,
            'lastPage' => $lastPage,
            'perPage' => $perPage,
            'total' => $total,
        ]);
    }

    function fetch_data(Request $request)
    {
        if ($request->ajax()) {
            $pr = DB::table('project')->paginate(3);
            return view('test', compact('pr'))->render();
        }
    }
}
