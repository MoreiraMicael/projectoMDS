<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Denuncia;

class DenunciaController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $denuncia = \App\Denuncia::all();
    return view('denuncia.index', ['denuncia' => $denuncia]);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('createDenuncia');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {

    if( $request->hasFile('denuncia_foto')){
        $fotoDenuncia = $request->file('denuncia_foto');
        $fileName = $fotoDenuncia->getClientOriginalName();
        //$fileExtension = $fotoDenuncia->getClientOriginalExtension();
        //$size = $fotoDenuncia->getClientSize();
        $destinationPath = public_path('/images');
        $fotoDenuncia->move($destinationPath, $fileName);

        //$userImage = new UserImage;
        //$userImage->name = $name;
        //$userImage->size = $size;

        //dd($fileExtension);
        $denuncia = new Denuncia;
        $denuncia->user_id = request('user_id');
        $denuncia->local = request('local');
        $denuncia->descricao = request('descricao');
        /*
        talk the select file and move it public directory and make denuncias
        folder if doesn't exsit then give it that unique name.
        */
        $denuncia->denuncia_image->move($destinationPath('denuncia'), $fileName);
        $denuncia->save();
      } else {
        dd('No image was found');
    }
    // get current time and append the upload file extension to it,
    // then put that name to $photoName variable.
    //$fotoDenuncia = time().'.'.$request->denuncia_image->getClientOriginalExtension();



  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show(Denuncia $id)
  {
      return view('denuncia.show', ['denuncia' => $id]);
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
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
