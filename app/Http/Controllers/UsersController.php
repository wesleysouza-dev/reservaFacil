<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{

 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image_profile = Auth::user()->image_profile ?? 'admin/profile/avatar-1.jpg';
        
        return view('layouts.users.profile', compact('image_profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {       
        
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
        // sleep(2);
        $user = User::findOrFail($id);
        
        $input = $request->all();
        $input['phone'] = $this->onlyNumber($input['phone']);

        if ($input['password'] == null) {
            unset($input['password']);
        } else {
            $input['password'] = bcrypt($input['password']);
        }

        //upload
        if ($request->hasFile('image_profile')) {

            $name = uniqid(date('HisYmd'));
            $extension = $request->image_profile->extension();
            $nameFile = "{$name}.{$extension}";
    
            $upload = $request->image_profile->storeAs('admin/profile', $nameFile);
            $input['image_profile'] = $upload;

            //recupera imagem antiga do banco para excluir
            $user_thumb = new User;
            $img_delete = $user_thumb->getSingle($id)->image_profile;
            
            if ( $img_delete !== null && Storage::disk('local')->exists($img_delete)) {
                Storage::disk('local')->delete($img_delete);
            }
            
        }

        
        if ($user->update($input)) {
            return json_encode(['status' => true]);
        } else {
            return json_encode(['status' => false]);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }


    /* function extras */
    function onlyNumber($str) {
        return preg_replace("/[^0-9]/", "", $str);
    }
}
