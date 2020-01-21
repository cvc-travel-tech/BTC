<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\SettingRepository;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    private $request;
    private $repo;
    private $data;
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request, SettingRepository $repo)
    {
        $this->request = $request;
        $this->repo = $repo;
        $this->data = [
            'module' => 'Setting',
            'module-url' => route('admin.setting.index'),
            'create-url' => route('admin.setting.create'),
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

        $rows = $this->repo->getQuery();
        $inputVal = [];
        foreach ($rows as $row) {
            $inputVal[$row->group . '[' . $row->name . ']'] = $row->val;
        }
        $form = [
            'site' => [
                'site[sitename]' => [
                    'type' => 'text',
                    'tital' => 'Site Name',
                    'width' => '12',
                    'placeholder' => 'Pick a size...',
                ],
                'site[logo]' => [
                    'type' => 'img',
                    'tital' => 'Site Logo',
                    'width' => '3',
                    'placeholder' => 'Pick a size...',
                ],
                'site[tets]' => [
                    'type' => 'text',
                    'tital' => 'Site Name',
                    'width' => '12',
                    'placeholder' => 'Pick a size...',
                ],
            ],
            'admin' => [
                'admin[sitename]' => [
                    'type' => 'text',
                    'tital' => 'admin Name',
                    'width' => '12',
                    'placeholder' => 'Pick a size...',
                ],
                'admin[logo]' => [
                    'type' => 'img',
                    'tital' => 'admin Logo',
                    'width' => '3',
                    'placeholder' => 'Pick a size...',
                ],
            ]
        ];
        // dd();

        $data = $this->data;
        $data['page-doc'] = "Setting";
        return view('admin.Setting.index', compact('data', 'form', 'inputVal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $data = $this->repo->update($data, $this->request->all());
        $data = $this->repo->create($request->all());

        return redirect()->route('admin.setting.index')->with('successMsg', 'Property is updated .');
    }
}
