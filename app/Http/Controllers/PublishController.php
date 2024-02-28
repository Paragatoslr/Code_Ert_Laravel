<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Chapters;
use Illuminate\Http\Request;
use Log;
use DB;

class PublishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chapters = Chapters::all();
        return view('admin.publish.index', compact('chapters'));
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
        $validated = $request->validate([
            'chapter_name' => 'required|string|min:2|max:255',
            'chapter_image' => 'required|image|mimes:jpeg,jpg,bmp,png',
        ],[
            'chapter_name.required' => 'Chapter name is required',
            'chapter_name.string' => 'Chapter name should be a string',
            'chapter_name.min' => 'Chapter name must have 2 characters or more',
            'chapter_name.max' => 'Chapter name must have less 255 characters',
            'chapter_image.required' => 'Chapter image is required',
            'chapter_image.image' => 'Chapter image must be a image',
            'chapter_image.mimes' => 'Chapter image must be jpeg, jpg, bmp, or png',

        ]);
        try{
            DB::beginTransaction();


                $destinationPath = 'chapters';
                $photoExtension = $validated['chapter_image']->getClientOriginalExtension();
                $file = 'image'.uniqid().'.'.$photoExtension;
                $validated['chapter_image']->move($destinationPath, $file);


            Chapters::create([
                'user_id' => Auth::user()->id,
                'chapter_name' => $validated['chapter_name'],
                'chapter_image' => $file
            ]);

            DB::commit();
        }catch(\Exception $e){
            Log::error($e);
			DB::rollback();

			return redirect()
				->back()
				->with('flash_error', 'Something went wrong, please try again later.')
				->withInput();
        }

        return redirect()->back()->with('flash_success', 'Profile updated successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chapter = Chapters::find($id);
        return view('admin.publish.view', compact('chapter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.publish.edit');
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
}
