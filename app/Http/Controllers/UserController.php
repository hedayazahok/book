<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;
use App\College;
use App\Department;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $id=Auth::id();
        $books=Book::where('id_user',$id)->get();
        return view('users.info')->with('books',$books);
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
    public function edit()
    {
        $colleges=College::get();
        $departments =Department::get();

        return view('users.setting')->with(['colleges'=>$colleges,'departments'=>$departments ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id =Auth::user()->id;
        $user=User::where('id',$id)->first();
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->id_department=$request['id_department'];
        $user->phone=$request['phone'];
        $user->social_media=$request['social_media'];
        if($request['password']){
            $user->password= Hash::make($request['password']);

        }
    $user->save();

        return redirect()->route('profile')->with('success','تم تعديل بياناتك الشخصيه بنجاح');
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
}
