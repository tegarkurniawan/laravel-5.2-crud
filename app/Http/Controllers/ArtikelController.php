<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Artikel;

class ArtikelController extends Controller
{
    public function index(){

    	$data = Artikel::get();

    	return view('artikel.artikel-index',compact('data'));
    }

    public function create(){

    	return view('artikel.artikel-create');

    }

    public function store(Request $request){

    	$input = $request->all();
    	if ($request->file('foto')) {

            $image = $request->file('foto');

            $imageName = $image->getClientOriginalName();
                    
            $input['foto'] = $imageName;

            $destinationPath = 'img';

            $request->file('foto')->move($destinationPath, $imageName);
        
        } else {
            
            $input['foto'] = 'default.png';
        
        }
    	Artikel::create($input);

    	return redirect()->route('artikel-index');
    }

    public function edit($id){

    	$data = Artikel::findOrfail($id);

    	return view('artikel.artikel-edit',compact('data'));

    }

    public function update(Request $request, $id){

    	$data = Artikel::findOrfail($id);

    	$input = $request->all();

    	if ($request->file('foto')) {

            $image = $request->file('foto');

            $imageName = $image->getClientOriginalName();
                    
            $input['foto'] = $imageName;

            $destinationPath = 'img';

            $request->file('foto')->move($destinationPath, $imageName);
        
        }

        $data->update($input);

        return redirect()->route('artikel-index');

    }

    public function delete($id){

    	$data = Artikel::findOrfail($id);

    	$data->delete();

    	return redirect()->route('artikel-index');
    }
}
