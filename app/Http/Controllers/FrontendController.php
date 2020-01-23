<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\BlogRepository;
use App\Repositories\PackageRepository;

class FrontendController extends Controller
{
    private $Blog;
    private $Package;

        /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(BlogRepository $Blog , PackageRepository $Package)
    {
        $this->Blog = $Blog;
        $this->Package = $Package;
    }

    public function index()
    {
        $features = setting('site', 'features');
        // dd();
        $titles = json_encode(collect(setting('site', 'titles'))->pluck('tital'));
        return view('index', compact('features', 'titles'));
    }


    public function about()
    {
        return view('about');
    }


    public function blog()
    {
        $blogs = $this->Blog->getQuery();
        return view('blog', compact('blogs'));
    }


    public function family_package()
    {
        return view('family-package');

    }  
    
    
    public function contact()
    {
        return view('contact');

    }  
    
    
    public function travel_free()
    {
        return view('travel-free');

    }  


    public function logiin()
    {
        return view('login');

    } 
    
    public function Packages_details($slug)
    {
        $row = $this->Package->findOrFail($slug);
        
        return view('Packages_details', compact( 'row'));
    } 
    

}
