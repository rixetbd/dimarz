<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('backend.employee.employee',[
            'users'=>$users,
        ]);
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

        $request->validate([
            'name' => 'required',
            'email' =>'required',
            'phone' => 'required',
            'experience' => 'required',
            'salary' => 'required',
            'vacation' => 'required',
            'address' => 'required',
            'city' => 'required',
        ]);

        if(empty($request->id)){

            $user = User::where('id', '=',$request->name)->first();
            $newID = Employee::insertGetId([
                'name' => $user->name,
                'slug' => Str::slug($user->name). '-'.Str::slug($request->phone),
                'email' => $user->email,
                'phone' => $request->phone,
                'experience' => $request->experience,
                'nid_no' => $request->nid_no,
                'salary' => $request->salary,
                'picture'=>($user->avatar != ''?$user->avatar:null),
                'vacation' => $request->vacation,
                'address' => $request->address,
                'city' => $request->city,
                'created_at' => Carbon::now()
            ]);

            if($request->hasFile('picture'))
            {
                $image = $request->file('picture');
                $filename = Str::slug($user->name). '-'.Str::slug($request->phone). '.' . $image->getClientOriginalExtension();
                $path = base_path('uploads/users/' . $filename);
                Image::make($image)->fit(1000, 1000)->save($path);

                Employee::find($newID)->update([
                    'picture'=>$filename,
                ]);

                $user_img_path = base_path('uploads/users/'.$user->avater);
                if(File::exists($user_img_path)) {
                    File::delete($user_img_path);
                }
                User::find($request->name)->update([
                    'avatar'=>$filename,
                ]);
            }

        }else{
            $employee = Employee::where('id', $request->id)->first();
            $employee->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'experience' => $request->experience,
                'nid_no' => $request->nid_no,
                'salary' => $request->salary,
                'vacation' => $request->vacation,
                'address' => $request->address,
                'city' => $request->city,
            ]);

            if($request->hasFile('picture'))
            {
                $img_path = base_path('uploads/employee/'.$employee->picture);
                if(File::exists($img_path)) {
                    File::delete($img_path);
                }

                $image = $request->file('picture');
                $filename = Str::slug($request->name). '-'.Str::slug($request->phone). '.' . $image->getClientOriginalExtension();
                $path = base_path('uploads/employee/' . $filename);
                Image::make($image)->fit(1000, 1000)->save($path);

                $employee->update(['picture'=>$filename]);
            }
        }

        return response()->json([
            'success' => 'success',
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
    public function edit(Request $request)
    {
        $employee = Employee::where('id', $request->id)->first();
        return response()->json(['employee' => $employee]);
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
    public function destroy(Request $request)
    {
        $employee = Employee::where('id', $request->id)->first();
        // $img_path = base_path('uploads/employee/'.$employee->picture);
        // if(File::exists($img_path)) {
        //     File::delete($img_path);
        // }
        $employee->delete();
        return response()->json(['success' => 'success',]);
    }

    public function autoemployees()
    {
        $employee = Employee::all();
        foreach ($employee as $value) {
            $data[] = [
                'id'=>$value->id,
                'name'=>$value->name,
                'email'=>$value->email,
                'phone'=>$value->phone,
                'picture'=>($value->picture != ''?$value->picture:'default.png'),
                'salary'=>$value->salary,
                'experience'=>$value->experience,
                'vacation'=>$value->vacation,
                'address'=>$value->address,
                'city'=>$value->city,
            ];
        }
        return $data;
    }
}
