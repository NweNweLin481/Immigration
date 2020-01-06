@extends('layout.master')
@section('title','Search Page')
@section('content')

<div class="card card-body bg-light container mt-5 col-md-offset-2 col-md-8">

<form method="post" enctype="multipart/form-data">

{{csrf_field()}}
<legend>Search .....</legend>
    <div class="form-row">


        <div class="form-group col-md-4">

            <input list="inputState" name="distName" class="form-control" placeholder="Division">

            <datalist id="inputState">
                @foreach($dists as $dist)
                    <option value="{{$dist->name}}"></option>
                @endforeach
            </datalist>

        </div>

        <div class="form-group col-md-4">

            <input list="inputState2" name="typeName" class="form-control" placeholder="NRC Type">

            <datalist id="inputState2">
                @foreach($types as $type)
                    <option value="{{$type->type}}"></option>
                @endforeach
            </datalist>

        </div>

    <div class="form-group col-md-4">
        
        <input type="number" class="form-control" id="number" name="number" placeholder="Number">
     </div>
</div>





<button type="submit" class="btn btn-primary">Search</button><br><br>
</form></div>


    @foreach($errors->all() as $error)
        <p class="alert alert-danger">{{$error}}</p>
    @endforeach
    @if(session('name'))
        <div class="card card-body bg-light container mt-5 col-md-offset-2 col-md-8">
            <div class="form-row"><div class="form-group col-md-4"> <h4><label>Name - {{session('name')}}</label></h4>
                <button type="button" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-primary">Send</button>
            </div></div>
    @endif

    @if(Session::has('pdfs'))
{{--        <div class="row">--}}
        @foreach (Session::get('pdfs') as $pdf)

            @if( $pdf->pdf_type ==1)
                <span>For 10 years </span>
            @endif
            @if( $pdf->pdf_type ==2)
                <span>For 18 years old</span>
            @endif
            @if( $pdf->pdf_type ==3)
                <span>For 30 years old</span>
            @endif
            @if( $pdf->pdf_type ==4)
                <span>For 45 years old</span>
            @endif
            <br>

            @php($pdffile=$pdf->file_name)

{{--            @if(session::has('pdfary'))--}}
{{--                    @foreach (Session::get('pdfaty') as $pdffile)--}}
{{--                        <span>{{session('pdfary')}}</span>--}}
                @php($filelocations=unserialize($pdffile))

                @foreach($filelocations as $location)
                @php($loc='http://localhost/Immigration/public/uploades/'.$location)


                <div>
                <iframe src="{{$loc}}" type="application/pdf" width="100%" height="500px">
                </iframe>
                </div>

                    <br>
                    @endforeach
                <br>
{{--            @endif--}}

        @endforeach
{{--        </div>--}}
    @endif
</div>
@endsection()