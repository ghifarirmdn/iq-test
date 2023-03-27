<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OlahNilaiController extends Controller
{
    
    public function index (Request $request) 
    {
        $file = Storage::get("public/data.json");
        $data = json_decode($file, true);

        $title = 'olah-nilai';

        return view('olah-nilai', compact('data', 'title'));
    }

    public function create()
    {
        return view('tambah-nilai', ["title" => "tambah-nilai",]);
    }

    public function store(Request $request)
    {
        $file = Storage::get("public/data.json");
        $data = json_decode($file, true);

        $data[] = array(
            "id" => $request->id,
            "name" => $request->name,
            "sekolah" => $request->sekolah,
            "tgl_tes" => $request->tgl_tes,
            "tgl_lahir" => $request->tgl_lahir,
            "iq" => $request->iq,
            "t1" => $request->t1,
            "t3" => $request->t3,
            "t4" => $request->t4,
            "t6" => $request->t6,
            "extraversion" => $request->extraversion,
            "neuroticism" => $request->neuroticism,
            "agreeableness" => $request->agreeableness,
            "conscient" => $request->conscient,
            "openness" => $request->openness,
            "visual" => $request->visual,
            "auditory" => $request->auditory,
            "kinesthetic" => $request->kinesthetic,
        );

        $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
        $file = Storage::put("public/data.json", $jsonfile);

        return redirect('/olah-nilai');
    }

    public function edit($id)
    {
        $file = Storage::get("public/data.json");
        $data = json_decode($file, true);
        $data = collect($data)->firstWhere('id', $id);
        $jsonfile = $data;
        // $jsonfile = $data[(int)$id];
        $title = 'olah-nilai';
        return view('/edit-nilai', compact('jsonfile', 'title'));
    }

    public function update(Request $request, $id)
    {
        $file = Storage::get("public/data.json");
        $data = json_decode($file, true);

        $data = collect($data)->firstWhere('id', $id);

        $data = array(
            "id" => $request->id,
            "name" => $request->name,
            "sekolah" => $request->sekolah,
            "tgl_tes" => $request->tgl_tes,
            "tgl_lahir" => $request->tgl_lahir,
            "iq" => $request->iq,
            "t1" => $request->t1,
            "t3" => $request->t3,
            "t4" => $request->t4,
            "t6" => $request->t6,
            "extraversion" => $request->extraversion,
            "neuroticism" => $request->neuroticism,
            "agreeableness" => $request->agreeableness,
            "conscient" => $request->conscient,
            "openness" => $request->openness,
            "visual" => $request->visual,
            "auditory" => $request->auditory,
            "kinesthetic" => $request->kinesthetic,
        );
        $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
        $file = Storage::put("public/data.json", $jsonfile);

        $title = 'olah-nilai';
        
        return view('olah-nilai', compact('data'));
    }

    public function destroy($id)
    {   
        $file = Storage::get("public/data.json");
        $data = json_decode($file, true);
        $index = array_search($id, array_column($data, 'id'));
        array_splice($data, $index, 1);
        
        $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
        $file = Storage::put("public/data.json", $jsonfile);

        return redirect('/olah-nilai');
    }
}
