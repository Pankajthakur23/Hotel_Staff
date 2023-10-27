<?php

namespace App\Http\Controllers;

use App\Models\Employees_Details;
use App\Models\Hotel_Staff;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create()
    {
      return view('create');
    }
    public function store(Request $request)
    {
        Hotel_Staff::create($request->all());
        return redirect('Index');

    }
    public function Index()
    {
       $data=Hotel_Staff::all();
       return view('Index',compact('data'));
    }
    public function edit($id)
    {
        $data=Hotel_Staff::find($id);
        return view('edit',compact('data'));
    }
    public function update(Request $request, Hotel_Staff $hotel_Staff)
    {

        $hotel_Staff->update($request->all());
        return redirect('Index');

    }
    public function delete( Hotel_Staff $hotel_Staff)
    {

        $hotel_Staff->delete();
        return redirect('Index');

    }

}
