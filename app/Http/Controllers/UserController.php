<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;
use Validator;
use Session;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = User::paginate(2);
        return view('users.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new User;
        return view('users.form', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $this->validate($request, [
            'first_name'  => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'keywords'  => 'required|string|max:255',
            'file'  => 'required|mimes:pdf,doc,txt|max:2048',

        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            Storage::disk('public')->putFile('file', $file);
            $data['file'] = $file->hashName();
        }

        $user = new User($data);
        $user->save();
        return redirect()->route('users.index')->with('success_message', 'Add user successfully.');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = User::findOrFail($id);
        return view('users.view', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = User::findOrFail($id);
        return view('users.form', compact('item'));
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
        $data = $request->all();
        $this->validate($request, [
            'first_name'  => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'keywords'  => 'required|string|max:255',
            'file'  => 'required|mimes:pdf,doc,txt|max:2048',
        ]);
        $item = User::findOrFail($id);
        if ($request->hasFile('file')) {
            if($item->file){
                Storage::disk('public')->delete('file/'.$item->file);
            }
            $file = $request->file('file');
            Storage::disk('public')->putFile('file', $file);
            $data['file'] = $file->hashName();
        }


        $item->fill($data)->save();
        Session::flash('flash_message', 'User successfully updated!');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = User::findOrFail($id);
        if($item->file){
            Storage::disk('public')->delete('file/'.$item->file);
        }
        $item->delete();
        return redirect()->route('users.index')->with('success_message', 'Deleted user successfully!');
    }


    public function downloadFile($file_id)
    {
        $file = User::findOrFail($file_id);
        $fullPathToFile = storage_path() . "\app\public\\file\\" . $file->file;
        if (file_exists($fullPathToFile)) {
            return response()->download($fullPathToFile);
        }
    }


    public function usersSearch(Request $request)
    {
        $first_name = $request->all()['first_name'];
        $last_name = $request->all()['last_name'];
        $keywords = $request->all()['keywords'];



        if(!empty($first_name)&& empty($last_name) && empty($keywords)){

            $users = User::where('first_name', 'LIKE', "%$first_name%")->get();

        }elseif(!empty($last_name) && empty($first_name) && empty($keywords)){

            $users = User::where('last_name', 'LIKE', "%$last_name%")->get();

        }elseif(!empty($keywords ) && empty($first_name ) && empty($last_name)){

            $users = User::where('keywords', 'LIKE', "%$keywords%")->get();

        }elseif(!empty($first_name) || !empty($last_name) || !empty($keywords)){
            $users = User::orwhere('first_name', 'LIKE', "%$first_name%")
                        ->orwhere('last_name', 'LIKE', "%$last_name%")
                        ->orwhere('keywords', 'LIKE', "%$keywords%")
                        ->get();

        }

        return $users->toJson();






    }
}
