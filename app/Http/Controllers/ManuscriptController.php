<?php

namespace App\Http\Controllers;

use App\Manuscript;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ManuscriptController extends Controller
{

    private function formatImageString(String $imageString) {
        $images = explode("\r\n", $imageString);
        $newImages = array();
        foreach($images as &$image) {
            $newImage = str_replace("open?", "uc?", $image);
            array_push($newImages, $newImage);
        }
        return join(",", $newImages);

    }

    private function createImageArray(String $imagesString)  {
        $images = explode(",", $imagesString);
        return $images;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manuscripts.create')
            ->with('manuscript', (new Manuscript()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = DB::table('users')->get();
        $user = $users[0];
        $formattedImageString = $this->formatImageString($request->images);
        $manuscript = Manuscript::create([            
            'physical_location' => $request->physical_location,
            'classmark' => $request->classmark,
            'place_of_origin' => $request->place_of_origin,
            'date_of_creation'=>$request->date_of_creation,
            'associated_persons' => $request->associated_persons,
            'physical_description' => $request->physical_description,
            'material'=> $request->material,
            'format' => $request->format,
            'binding' => $request->binding,
            'images' => $formattedImageString,
            'user_id' => $user->id,
        ]);
        $manuscriptImages = $this->createImageArray($formattedImageString);
        return view('manuscripts.show', ['manuscript' => $manuscript, 'manuscriptImages' => $manuscriptImages]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Manuscript  $manuscript
     * @return \Illuminate\Http\Response
     */
    public function show(Manuscript $manuscript)
    {
        $manuscriptImages = $this->createImageArray($manuscript->images);
        return view('manuscripts.show', ['manuscript' => $manuscript, 'manuscriptImages' => $manuscriptImages]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manuscript  $manuscript
     * @return \Illuminate\Http\Response
     */
    public function edit(Manuscript $manuscript)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manuscript  $manuscript
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manuscript $manuscript)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manuscript  $manuscript
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manuscript $manuscript)
    {
        //
    }

    public function BigPurrs() {
        $users = DB::table('users')->get();
        $user = $users[0];
        return view('bigpurrs', ['user' => $user]);

    }
}
