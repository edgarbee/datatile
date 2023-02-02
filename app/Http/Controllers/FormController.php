<?php

namespace App\Http\Controllers;
use App;
use App\Models\Form;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Mews\Purifier\Facades\Purifier;

class FormController extends Controller
{
    public function formSubmit(Request $request) {

        $validator  = Validator::make($request->all(), [
            'email' => 'required|email',
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
            'company' => 'required|string|max:30',
            'job_title' => 'required|string|max:30',
            'country' => 'required',
            'message' => 'required|string|max:500'
        ]);

        if ($validator->fails())
        {
            return response()->json([
                'error' => $validator->errors()->all()
            ]);
        }
    
        Form::create([
            'email' => $request->get('email'),
            'first_name' => Purifier::clean($request->get('first_name')),
            'last_name' => Purifier::clean($request->get('last_name')),
            'company' => Purifier::clean($request->get('company')),
            'job_title' => Purifier::clean($request->get('job_title')),
            'country' => $request->get('country'),
            'message' => Purifier::clean($request->get('message'))
        ]);

        $emailTo = DB::table('email_setting')->first();

        $to = $emailTo->email;
        $subject = 'New application';
        $headers = "From: admin@datatile.eu <admin@datatile.eu> \r\n";

        $body = '
        <html>
        <head>
        <title>New application</title>
        </head>
        <body>
            <h2>New application</h2>
            <p><b>First name: </b> '.$request->get('first_name').' </p>
            <p><b>Last name: </b> '.$request->get('last_name').' </p>
            <p><b>Email: </b>'.$request->get('email').'</p>
            <p><b>Company: </b>'.$request->get('company').'</p>
            <p><b>Job title: </b>'.$request->get('job_title').'</p>
            <p><b>Country: </b>'.$request->get('country').'</p>
            <p><b>Message:</b><br>'.$request->get('message').'</p>
        </body>
        </html>';

        $headers .= "Content-type: text/html; charset=utf-8 \r\n";

        mail($to, $subject, $body, $headers);

        return response()->json(['success' => 'Thanks for the feedback!']);
    }

    public function search(Request $request)
    {
        if($request->ajax()) {

            $output = '';

            $data = Post::where('title', 'like', '%'.$request->search.'%')
                ->orwhere('subtitle', 'like', '%'.$request->search.'%')
                ->orderBy('id', 'desc')
                ->get();

            $total_row = $data->count();

            if ($total_row>0){

                foreach ($data as $row) {
                    $output .= '<div class="search-item"><a href="'.route('binshopsblog.single', ['blogPostSlug'=>$row->slug, 'locale' => App::getLocale()]).'"><h5>'.$row->title.'</h5></a></div>';
                }

            }

            else {
                $output = '<div class="search-item">No results</div>';
            }

            return $output;

        }
    }
}
