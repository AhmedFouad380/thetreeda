<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\sellersImport;
use App\Mail\SellerRegister;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\DataTables;
use Auth;
class SellerController extends Controller
{
    public function index()
    {
        return view('admin.Seller.index');
    }
    public function datatable(Request $request)
    {
        $data = Seller::orderBy('id', 'desc');

        return DataTables::of($data)
            ->addColumn('checkbox', function ($row) {
                $checkbox = '';
                $checkbox .= '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="' . $row->id . '" />
                                </div>';
                return $checkbox;
            })
            ->editColumn('name', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->name . '</span>
                                   <br> <small class="text-gray-600">' . $row->email . '</small>';
                return $name;
            })

            ->editColumn('is_active', function ($row) {
                $is_active = '<div class="badge badge-light-success fw-bolder">مفعل</div>';
                $not_active = '<div class="badge badge-light-danger fw-bolder">غير مفعل</div>';
                if ($row->is_active == 'active') {
                    return $is_active;
                } else {
                    return $not_active;
                }
            })

            ->addColumn('actions', function ($row) {
                $actions = ' <a href="' . url("Seller-edit/" . $row->id) . '" class="btn btn-active-light-info"><i class="bi bi-pencil-fill"></i> تعديل </a>';
                $actions .= ' <a href="' . url("SendMail/" . $row->id) . '" class="btn btn-primary"><i class="fs-20px bi bi-mailbox2"></i>   </a>';
                return $actions;

            })
            ->rawColumns(['actions', 'checkbox', 'name', 'is_active'])
            ->make();

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate(request(), [
            'ar_name' => 'required|string',
            'en_name' => 'required|string',
            'email' => 'required|email|unique:sellers',
            'password' => 'required|confirmed',
            'phone' => 'required|unique:sellers|min:8',
            'is_active' => 'nullable|string',

        ]);


        $user = new Seller;
        $user->ar_name=$request->ar_name;
        $user->en_name=$request->en_name;
        $user->owner_name=$request->owner_name;
        $user->ar_description=$request->ar_description;
        $user->en_description=$request->en_description;
        $user->phone=$request->phone;
        $user->password=Hash::make($request->password);
        $user->email=$request->email;
        $user->is_active=$request->is_active;
        $user->image=$request->image;
        $user->cover=$request->cover;
        $user->country_id=$request->country_id;
        $user->category_id=$request->category_id;
        $user->code=$request->code;
        $user->save();


        if($request->is_maill == 'active'){
            $mailData = [
                'name' => $request->owner_name,
                'email' => $user->email,
                'password' => $request->password
            ];
            Mail::to($request->email)->send(new SellerRegister($mailData));
        }

        return redirect()->back()->with('message', 'تم الاضافة بنجاح ');


    }

    public function SendMail($id){

        $password = rand(10000000,99999999);
        $user = Seller::findOrFail($id);
        $user->password=Hash::make($password);
        $mailData = [
            'name' => $user->owner_name,
            'email' => $user->email,
            'password' => $password
        ];
        Mail::to($user->email)->send(new SellerRegister($mailData));
        return redirect()->back()->with('message', 'تم الارسال بنجاح ');

    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Seller::findOrFail($id);
        return view('admin.Seller.edit', compact('employee'));
    }


    public function Profile()
    {
        $employee = Seller::findOrFail(Auth::guard('seller')->id());
        return view('admin.Seller.Profile', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $this->validate(request(), [
            'ar_name' => 'required|string',
            'en_name' => 'required|string',
            'id' => 'required|exists:sellers,id',
            'email' => 'required|email|unique:sellers,email,' . $request->id,
            'password' => 'nullable|confirmed',
            'phone' => 'required|min:8|unique:sellers,phone,' . $request->id,
            'is_active' => 'nullable|string',

        ]);

        if(Auth::guard('seller')->check()){
            $user = Seller::findOrFail(Auth::guard('seller')->id());
        }else{
            $user = Seller::findOrFail($request->id);
        }

        $user = Seller::findOrFail($request->id);
        $user->ar_name=$request->ar_name;
        $user->en_name=$request->en_name;
        $user->owner_name=$request->owner_name;
        $user->ar_description=$request->ar_description;
        $user->en_description=$request->en_description;
        $user->phone=$request->phone;
        if($request->password){
        $user->password=Hash::make($request->password);
        }
        $user->email=$request->email;
        if($request->is_active) {
            $user->is_active = $request->is_active;
        }
        $user->image=$request->image;
        $user->cover=$request->cover;
        $user->country_id=$request->country_id;
        $user->category_id=$request->category_id;
        $user->video_link=$request->video_link;
        $user->video_title=$request->video_title;
        $user->video_description=$request->video_description;
        $user->code=$request->code;
        $user->save();

        if(Auth::guard('seller')->check()){
            return back()->with('message', 'تم التعديل بنجاح ');
        }else{
            return redirect(url('Sellers_setting'))->with('message', 'تم التعديل بنجاح ');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            Seller::whereIn('id', $request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed']);
        }
        return response()->json(['message' => 'Success']);
    }
    public function ImportSeller(Request $request){
        Excel::import(new sellersImport(), $request->file('file')->store('files'));

        try {

        return redirect()->back()->with('message', 'تم الاضافة بنجاح ');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'عفوا حدث خطا  ');
        }

    }
}
