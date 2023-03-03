<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publishing_company;
use App\Http\Requests\NxbRequest;
use App\Services\ProductService;

class NxbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $data['nxbs'] = Publishing_company::paginate(10);
        // $nxbs = $this->alo->getListNXB();
        return view('admin/nxb', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/addnxb');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NxbRequest $request)
    {
        if (Publishing_company::create($request->all())) {
            return redirect()->route('nxb.list')->with([
                'success' => 'created nxb success'
            ]);
        }
        return redirect()->back()->with([
            'fail' => 'created nxb Fail'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nxb = Publishing_company::where('Publishing_Company_ID', $id)->get();
        return view('admin/editnxb', compact('nxb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NxbRequest $request, $id)
    {
        $name = $request->Publishing_Company_Name;
        Publishing_company::where('Publishing_Company_ID', $id)->update([
            'Publishing_company_Name' => $name,
        ]);
        return redirect()->route('nxb.list')->with([
            'success' => 'update nxb successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Publishing_company::where('Publishing_Company_ID', $id)->delete();
        return redirect()->route('nxb.list')->with([
            'success' => 'delete nxb successfully'
        ]);
    }
}
