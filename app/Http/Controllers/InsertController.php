<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disttype;
use App\Nrctype;
use App\Nrc;
use App\Pdf;

use App\Http\Requests\NrcInsertFormRequest;
class InsertController extends Controller
{
    public function index(){

        $dists=Disttype::all();
        $types=Nrctype::all();
        return view('insert',compact('dists','types'));

    }
    public function store(NrcInsertFormRequest $request){
        $name=$request->get('name');
        $distName=$request->get('distName');
        $typeName=$request->get('typeName');
        $num=$request->get('number');

        $dists=Disttype::where('name','=',$distName)
            ->get();

        foreach ($dists as $dist) {
            $dist_id = $dist->id;
        }

        $types=Nrctype::where('type','=',$typeName)
            ->get();

        foreach ($types as $type) {
            $type_id = $type->id;
        }


        Nrc::create([
            'name'=>$name,
            'dist_id'=>$dist_id,
            'nrc_type_id'=>$type_id,
            'nrc_no'=>$num,
        ]);


        $nrcs=Nrc::where('nrc_no','=',$num)
            ->where('dist_id','=',$dist_id)
            ->where('nrc_type_id','=',$type_id)->get();

        foreach ($nrcs as $nrc) {
            $nrc_id = $nrc->id;
        }

        $files=$request->file('file10');
        $fileAry=array();
        if(!empty($files)){
            foreach($files as $file){
                $filename=uniqid().'_'.$file->getClientOriginalName();
                array_push($fileAry,$filename);
                $file->move(public_path().'/uploades/',$filename);
                
            }

            Pdf::create([
                'nrc_id'=>$nrc_id,
                'file_name'=>serialize($fileAry),
                'pdf_type'=>1,
            ]);

        }

        $files=$request->file('file18');
        $fileAry=array();
        if(!empty($files)){
            foreach($files as $file){
                $filename=uniqid().'_'.$file->getClientOriginalName();
                array_push($fileAry,$filename);
                $file->move(public_path().'/uploades/',$filename);
                
            }
            Pdf::create([
                'nrc_id'=>$nrc_id,
                'file_name'=>serialize($fileAry),
                'pdf_type'=>2,
            ]);

        }
        $files=$request->file('file30');
        $fileAry=array();
        if(!empty($files)){
            foreach($files as $file){
                $filename=uniqid().'_'.$file->getClientOriginalName();
                array_push($fileAry,$filename);
                $file->move(public_path().'/uploades/',$filename);
                
            }
            Pdf::create([
                'nrc_id'=>$nrc_id,
                'file_name'=>serialize($fileAry),
                'pdf_type'=>3,
            ]);

        }
        $files=$request->file('file45');
        $fileAry=array();
        if(!empty($files)){
            foreach($files as $file){
                $filename=uniqid().'_'.$file->getClientOriginalName();
                array_push($fileAry,$filename);
                $file->move(public_path().'/uploades/',$filename);
                
            }
            Pdf::create([
                'nrc_id'=>$nrc_id,
                'file_name'=>serialize($fileAry),
                'pdf_type'=>4,
            ]);

        }
        

        // $file=$request->file('file10');
        // if(!empty($file)){
        //     $filename=uniqid().'_'.$file->getClientOriginalName();
        // $file->move(public_path().'_'.'/year10/',$filename);
        // return $file->getClientOriginalName();
        // }
       
        return redirect('insert')->with('status','Successfully insert data');
        
        
        
    }
    

}
