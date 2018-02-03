<?php

namespace App\Http\Controllers;

use App\BadDomain;
use App\Click;
use Illuminate\Http\Request;

class ClickController extends Controller
{

    public function index()
    {
        $data['clicks'] = Click::all();

        return view('welcome', $data);
    }

    public function click(Request $request)
    {

        $check_domain = BadDomain::where('name', 'LIKE', '%' . $request->server('HTTP_REFERER') . '%')->get();

        if ($check_domain->isNotEmpty()){
            $check_click = Click::where('ref', 'LIKE', '%' . $request->server('HTTP_REFERER') . '%')->first();
            $check_click->bad_domain = $check_click->bad_domain + 1;
            $check_click->save();

            $id_click = hash('md5', $request->param1 . $request->param2) . $check_click->id;

            return redirect()->route('error', [$id_click]);
        }


        $check_bundle = Click::where('ua', $request->server('HTTP_USER_AGENT'))->where('ip', $request->ip())->where('ref', $request->server('HTTP_REFERER'))->where('param1', $request->param1)->first();

        if ($check_bundle === null) {
            $new_click = new Click();
            $new_click->ua = $request->server('HTTP_USER_AGENT');
            $new_click->ip = $request->ip();
            $new_click->ref = $request->server('HTTP_REFERER');
            $new_click->param1 = $request->param1;
            $new_click->param2 = $request->param2;
            $new_click->save();

            $id_click = hash('md5', $request->param1 . $request->param2) . $new_click->id;

            return redirect()->route('succes', [$id_click]);
        }

        $check_bundle->error = $check_bundle->error + 1;
        $check_bundle->save();

        $id_click = hash('md5', $request->param1 . $request->param2) . $check_bundle->id;

        return redirect()->route('error', [$id_click]);
    }

    public function succes($id_click)
    {
        $click_id = substr($id_click, 32);
        $click = Click::find($click_id);

        return view('succes', ['click' => $click]);

    }

    public function error()
    {
        return view('error');
    }

    public function sort(Request $request)
    {
        $data['clicks'] = Click::orderBy($request->column, $request->order)->get();

        return view('sort', $data);
    }
}
