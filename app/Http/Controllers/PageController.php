<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function goToAbout(){
        
        return view('Pages.about');
    }

    public function goToServices(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design.', 'Android Studio.', 'Programming.','DBSM.']
        );
        return view('Pages.services') ->with($data);
    }

    public function goToHome(){
        
        return view('home');
    }


}
