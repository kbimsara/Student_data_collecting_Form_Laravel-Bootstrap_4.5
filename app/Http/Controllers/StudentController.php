<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;

use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
    public function save(Request $request)
    {
        //create student object
        $student = new StudentModel;

        $this->validate($request, [
            'name' => 'required|min:5|max:20',
            'phone' => 'required|min:10|max:10',
            'email' => 'required|min:5|max:30',
            'address' => 'required|min:5|max:20',
            'img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->address = $request->address;
        //image upload process
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            // $extention = $file->getClientOriginalExtension();
            $newImg = $file->getClientOriginalName();
            $file->move('images/', $newImg);
            $student->image = $newImg;
        }
        $student->save();

        // $image_path = $request->file('img')->store('public');
        // $request->file('img')->storeAs($request->img, 'public/images');

        // $image_path = $request->file('img')->storeAS($request->img, 'public/images');

        Alert::success('Data Saved', 'Operation Complete');

        // $data_all=$student::all();
        // return view('index');
        // return view('index')->with('data',$data_all);
        return redirect()->back();
    }

    public function view()
    {
        $data = new StudentModel;

        $data_all = $data::all();
        return view('index')->with('data', $data_all);
    }

    public function delete($id)
    {
        $data = new StudentModel;

        $student = $data::find($id);
        $image_path = 'images/' . $student->image;
        if (file_exists($image_path)) {
            @unlink($image_path);
        }
        $student->delete();

        Alert::success('Data Deleted', 'Operation Complete');

        // $data_all=$data::all();
        // return view('index')->with('data',$data_all);
        return redirect()->back();
    }

    public function updateView($id)
    {
        $data = new StudentModel;

        $student = $data::find($id);
        return view('update')->with('data', $student);
    }

    public function updateData(Request $request)
    {
        $data = new StudentModel;

        $this->validate($request, [
            'name' => 'required|min:5|max:20',
            'phone' => 'required|min:10|max:10',
            'email' => 'required|min:5|max:30',
            'address' => 'required|min:5|max:20',
            'img' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $id = $request->id;
        $student = $data::find($id);

        // dd($student);

        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->email = $request->email;
        if ($request->img != null) {
            // $student->img=$request->img;
            //image upload process
            $image_path = 'images/' . $student->image;
            if (file_exists($image_path)) {
                @unlink($image_path);
            }
        }
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            // $extention = $file->getClientOriginalExtension();
            $newImg = $file->getClientOriginalName();
            $file->move('images/', $newImg);
            $student->image = $newImg;
        }
        $student->address = $request->address;
        $student->save();

        Alert::success('Data Updated', 'Operation Complete');

        $data_all = $data::all();
        return view('index')->with('data', $data_all);
    }
}
