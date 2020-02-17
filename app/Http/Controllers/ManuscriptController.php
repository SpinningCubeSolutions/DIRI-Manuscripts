<?php

namespace App\Http\Controllers;

use App\Manuscript;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;


class ManuscriptController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->only(['create', 'store','edit','update','destroy']);
    }


    private function formatImageString(String $imageString) {
        $images = explode("\r\n", $imageString);
        $newImages = array();
        foreach($images as &$image) {
            $newImage = str_replace("open?", "uc?", $image);
            array_push($newImages, $newImage);
        }
        return join(",", $newImages);

    }

    private static function createImageArray(String $imagesString)  {
        $images = explode(",", $imagesString);
         $imageData = [];
         foreach($images as $img) {
             $strParts = explode("|", $img);
             $width_height = explode(":", $strParts[1]);
             $imageData[] = ['image_link' =>  $strParts[0], 'width' => $width_height[0], 'height' => $width_height[1]];
         }
        return $imageData;
    }

    // public static function getDisplayImage(Manuscript $manuscript, $imageNumber = 1) {
    //     // Return 'No Preview' image if there are no manuscript images
    //     if(!isset($manuscript) or !isset($manuscript->images) or $manuscript->images == "" or $manuscript->images == " ") {
    //         return '/img/NoPreview.jpg';
    //     }
    //     try {
    //         $images = explode(",", $manuscript->images);
    //         if($images == false or empty($images)) {
    //             return '/img/NoPreview.jpg'; //If an empty string is passed in, return the 'No Preview' image
    //         } elseif(count($images == 1)) {
    //             return $images[0]; //If there is only one image, return it
    //         }
    //         $image = $images[$imageNumber];
    //         $imageLink = explode("|", $image);
    //         return $imageLink[0];
    //     } catch (\Exception $e) {
    //         return '/img/NoPreview.jpg';
    //     }
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manuscripts = Manuscript::all();
        return view('manuscripts.index', ['manuscripts' => $manuscripts]);
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
            'subject' => $request->subject,
            'author' => $request->author,
            'place_of_origin' => $request->place_of_origin,
            'date_of_creation'=>$request->date_of_creation,
            'associated_persons' => $request->associated_persons,
            'physical_description' => $request->physical_description,
            'material'=> $request->material,
            'format' => $request->format,
            'binding' => $request->binding,
            'images' => $formattedImageString,
            'preview_image' => $request->preview_image,
            'user_id' => Auth::id(),
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

    public function viewer(Manuscript $manuscript) {
        $manuscriptImages = $this->createImageArray($manuscript->images);
        return view('manuscripts.viewer', ['manuscript' => $manuscript, 'manuscriptImages' => $manuscriptImages]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manuscript  $manuscript
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manuscript = Manuscript::findOrFail($id);
        $images = str_replace(",", "\n", $manuscript->images);
        return view('manuscripts.edit', ['manuscript' => $manuscript, 'images' => $images]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manuscript  $manuscript
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $manuscript = Manuscript::findOrFail($id);
        $formattedImageString = $this->formatImageString($request->images);
        $manuscript->physical_location = $request->physical_location;
        $manuscript->classmark = $request->classmark;
        $manuscript->subject = $request->subject;
        $manuscript->author = $request->author;
        $manuscript->place_of_origin = $request->place_of_origin;
        $manuscript->date_of_creation = $request->date_of_creation;
        $manuscript->associated_persons = $request->associated_persons;
        $manuscript->physical_description = $request->physical_description;
        $manuscript->material= $request->material;
        $manuscript->format = $request->format;
        $manuscript->binding = $request->binding;
        $manuscript->images = $formattedImageString;
        $manuscript->preview_image = $request->preview_image;
        $manuscript->save();

        return view('manuscripts.show', ['manuscript' => $manuscript, 'manuscriptImages' => $this->createImageArray($manuscript->images)]);

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

    public function showSearchForm() {
        return view('manuscripts.search');
    }

    public function search(Request $request) {
        $param = $request->search_parameters;
        $searchResults = new Collection();
        $pl_res = Manuscript::where('physical_location', 'LIKE','%'.$param.'%')->get();
        $cm_res = Manuscript::where('classmark', 'LIKE','%'.$param.'%')->get();
        $po_res = Manuscript::where('place_of_origin', 'LIKE','%'.$param.'%')->get();
        $doc_res = Manuscript::where('date_of_creation', 'LIKE','%'.$param.'%')->get();
        $sub_res = Manuscript::where('subject', 'LIKE','%'.$param.'%')->get();
        $aut_res = Manuscript::where('author', 'LIKE','%'.$param.'%')->get();
        $aspn_res = Manuscript::where('associated_persons', 'LIKE','%'.$param.'%')->get();
        $pd_res = Manuscript::where('physical_description', 'LIKE','%'.$param.'%')->get();
        $mat_res = Manuscript::where('material', 'LIKE','%'.$param.'%')->get();
        $fmt_res = Manuscript::where('format', 'LIKE','%'.$param.'%')->get();
        $bnd_res = Manuscript::where('binding', 'LIKE','%'.$param.'%')->get();

        $searchResults = $pl_res->merge($cm_res)
                                ->merge($po_res)
                                ->merge($doc_res)
                                ->merge($sub_res)
                                ->merge($aut_res)
                                ->merge($aspn_res)
                                ->merge($pd_res)
                                ->merge($mat_res)
                                ->merge($fmt_res)
                                ->merge($bnd_res);

        return view('manuscripts.searchresults', ['manuscripts' => $searchResults, 'searchTerm' => $param]);
    }

    public function searchOne(Request $request) {
        $param = $request->search_parameters;
        $category = $request->category;
        $searchResults = Manuscript::where($category, 'LIKE','%'.$param.'%')->get();

        return view('manuscripts.searchresults', ['manuscripts' => $searchResults, 'searchTerm' => $param]);
    }
}
