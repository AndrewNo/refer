<?php

namespace App\Http\Controllers;

use App\BadDomain;
use Illuminate\Http\Request;

class BadDomainController extends Controller
{
    public function index()
    {
        $data['domains'] = BadDomain::all();

        return view('bad_domain', $data);
    }

    public function addDomain(Request $request)
    {

        $domain = new BadDomain();
        $domain->name = $request->name;
        $domain->save();

        $data['domains'] = BadDomain::all();

        return view('domain_list', $data);
    }
}
