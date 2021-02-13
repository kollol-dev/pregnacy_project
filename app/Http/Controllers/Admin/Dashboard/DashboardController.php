<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Models\User;
use App\Models\Blog;
use App\Models\Service;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = User::where('role', 'doctor')->limit(10)->orderBy('id', 'desc')->get();
        $patients = User::where('role', 'doctor')->limit(10)->orderBy('id', 'desc')->get();
        $blogs = Blog::limit(10)->orderBy('id', 'desc')->get();

        return view('admin.dashboard.index', compact(['doctors', 'patients', 'blogs']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }





    public function getDoctors()
    {
        $doctors = User::where('role', 'doctor')->get();
        return view('admin.dashboard.doctor')->with('doctors', $doctors);
    }



    public function addDoctor(Request $request)
    {

        $this->validate($request, array(
            'name'  => 'required | string | max:255',
            'email' => 'required | string | email | max:191 | unique:users',
            'password'  => 'required | string | max:255',
            'phone'  => 'required | string | max:11',
            'address'  => 'required | string | max:500'
        ));

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'role' => 'doctor'
        ]);

        return redirect('/admin/dashboard/doctor');
    }



    public function addDoctorBlade()
    {
        return view('admin.dashboard.create-doctor');
    }

    public function deleteDoctorBlade($id)
    {
        User::where('id', $id)->delete();

        return redirect('/admin/dashboard/doctor');
    }


    public function getServices()
    {
        $services = Service::with('patient')->get();
        return view('admin.service.service', compact(['services']));
    }
}
