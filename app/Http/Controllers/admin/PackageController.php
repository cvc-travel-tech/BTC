<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PackageDatatables;
use App\Http\Controllers\Controller;
use App\Repositories\PackageRepository;
use App\Repositories\DestinationRepository;
use App\Http\Requests\PackageRequest;
use Illuminate\Http\Request;

class PackageController extends Controller
{

    private $request;
    private $repo;
    private $destinations;
    private $data;
    private $datatable;
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request, PackageDatatables $datatable, PackageRepository $repo, DestinationRepository $destinations)
    {
        $this->request = $request;
        $this->repo = $repo;
        $this->destinations = $destinations;
        $this->datatable = $datatable;
        $this->data = [
            'module' => 'Package',
            'module-url' => route('admin.package.index'),
            'create-url' => route('admin.package.create'),
        ];

        // $this->user = $user;
        // $this->middleware('feature.available:todo');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->data;
        $datatable = $this->datatable;
        $data['page-doc'] = "index";
        return $datatable->render('admin.Package.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $destinations = ;
        $form = $this->Form();
        $data = $this->data;
        $data['page-doc'] = "Create";
        return view('admin.Package.create', compact('data', 'form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageRequest $request)
    {
        //
        // dd($request->all());
        $data = $this->repo->create($request->all());
        return redirect()->route('admin.package.index')->with('successMsg', 'Property is updated .');
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Form()
    {
        //
        return  $form = [
            'name' => [
                'type' => 'text',
                'tital' => 'Name',
                'placeholder' => 'Pick a size...',
            ],
            'duration' => [
                'type' => 'text',
                'tital' => 'Duration',
                'placeholder' => 'Pick a size...',
            ],
            'overview' => [
                'type' => 'ckeditor',
                'tital' => 'Overview',
                'placeholder' => 'Pick a size...',
            ],
            'images' => [
                'type' => 'multi-image',
                'tital' => 'images',
                'width' => '12',
                'placeholder' => 'Pick a size...',
            ],
            'itinerary' => [
                'type' => 'ckeditor',
                'tital' => 'itinerary',
                'placeholder' => 'Pick a size...',
            ],
            'trip_video' => [
                'type' => 'text',
                'tital' => 'Trip Video',
                'placeholder' => 'Pick a size...',
            ],
            'inclusion' => [
                'type' => 'ckeditor',
                'tital' => 'itinerary',
                'placeholder' => 'Pick a size...',
            ],
 
            'trip_map' => [
                'type' => 'text',
                'tital' => 'Trip Map',
                'placeholder' => 'Pick a size...',
            ],
            'client_reviews' => [
                'type' => 'text',
                'tital' => 'Client Reviews',
                'placeholder' => 'Pick a size...',
            ],
            'flight_prices' => [
                'type' => 'number',
                'tital' => 'Flight Prices',
                'placeholder' => 'Pick a size...',
            ],

            'options' => [
                'type' => 'json',
                'tital' => 'options',
                'width' => '12',
                'inputs' => [
                    'Name' => [
                        'type' => 'text',
                        'tital' => 'Name',
                        'width' => '60%',
                        'placeholder' => 'Pick a size...',
                    ],
                    'price' => [
                        'type' => 'number',
                        'tital' => 'Price',
                        'placeholder' => 'Pick a size...',
                        'width' => '30%',
                    ],

                ]
                ],
            'daly' => [
                'type' => 'json',
                'tital' => 'daly',
                'width' => '12',
                'inputs' => [
                    'datepicker' => [
                        'type' => 'datepicker',
                        'tital' => 'datepicker',
                        'width' => '20%',
                        'placeholder' => 'Pick a size...',
                    ],
                    'solo' => [
                        'type' => 'number',
                        'tital' => 'solo',
                        'placeholder' => 'Pick a size...',
                        'width' => '20%',
                    ],
                    'p-p' => [
                        'type' => 'number',
                        'tital' => 'p-p',
                        'placeholder' => 'Pick a size...',
                        'width' => '20%',
                    ],
                    '3person' => [
                        'type' => 'number',
                        'tital' => '3person',
                        'placeholder' => 'Pick a size...',
                        'width' => '20%',
                    ],
                    'sgl' => [
                        'type' => 'number',
                        'tital' => 'sgl',
                        'placeholder' => 'Pick a size...',
                        'width' => '20%',
                    ],

                ]
            ]
        ];
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //
        $rows = $this->repo->findOrFail($slug);
        $rows['seo'] = $rows->getSeoMeta();
        $form = $this->Form();
        $data = $this->data;
        $data['page-doc'] = "Create";
        return view('admin.Package.edit', compact('data', 'form', 'rows'));
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
        $data = $this->repo->find($id);
        $data = $this->repo->update($data, $this->request->all());
        return redirect()->route('admin.package.index')->with('successMsg', 'Property is updated .');
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
