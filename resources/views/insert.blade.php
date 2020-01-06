@extends('layout.master')
@section('title','Insert')
@section('content')

    <div class="card card-body bg-light container mt-5 col-md-offset-2 col-md-8">

    <form method="post" enctype="multipart/form-data">
    @foreach($errors->all() as $error)
    <p class="alert alert-danger">{{$error}}</p>
    @endforeach
    @if(session('status'))
        <p class="alert alert-success">{{session('status')}}</p>
    @endif
    {{csrf_field()}}
    <legend>Insert A new Citizin</legend>
        <div class="form-row">
    

            <div class="form-group col-md-4">
                <input list="inputState" name="distName" class="form-control" placeholder="Division">

                <datalist id="inputState">
                    @foreach($dists as $dist)
                        <option value="{{$dist->name}}"></option>
                    @endforeach
                </datalist>
{{--                <select id="inputState" name="distName" class="form-control">--}}
{{--                    <option disabled selected value="">Division</option>--}}
{{--                    @foreach($dists as $dist)--}}
{{--                        <option value="{{$dist->id}}">{{$dist->name}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}

            </div>

            <div class="form-group col-md-4">

                <input list="inputState2" name="typeName" class="form-control" placeholder="NRC Type">

                <datalist id="inputState2">
                    @foreach($types as $type)
                        <option value="{{$type->type}}"></option>
                    @endforeach
                </datalist>
{{--                <select id="inputState" name="typeName" class="form-control">--}}
{{--                    <option disabled selected value="">NRC type</option>--}}
{{--                    @foreach($types as $type)--}}
{{--                        <option value="{{$type->id}}">{{$type->type}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}

            </div>

        <div class="form-group col-md-4">
            
            <input type="text" class="form-control" id="number" name="number" placeholder="Number">
         </div>
  </div>
        <div class="form-group">
        Name <input type="text" class="form-control" id="name" name="name" placeholder="Citizen name">
        </div>

    <div class="form-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="file10[]" id="customFile" multiple>
            <label class="custom-file-label" for="customFile">Choose file for 10 years</label>
        </div>
    </div>

    <div class="form-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="file18[]" id="customFile" multiple>
            <label class="custom-file-label" for="customFile">Choose file for 18 years</label>
        </div>
    </div>

    <div class="form-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="file30[]" id="customFile" multiple>
            <label class="custom-file-label" for="customFile">Choose file for 30 years</label>
        </div>
    </div>

    <div class="form-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="file45[]" id="customFile" multiple>
            <label class="custom-file-label" for="customFile">Choose file for 45 years</label>
        </div>
    </div>
    


  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

        <!-- <form method="post" class="form-inline my-2 my-lg-0">
                {{csrf_field()}}
                @foreach($errors->all() as $error)
                <p class="allert alert-danger">{{$error}}</p>
                @endforeach
                <legend>Insert Form</legend>
                <input type="submit" value="Uploads" class="btn btn-info col-md-3 mt-3">

        </form> -->


    </div>


@endsection()

<!-- <div class="card-body"> 
            
                
               


             <div class="row mt-5">

                <div class="input-group mb-3 col-md-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">NRC Number</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="tine">
                        <option selected>Choose...</option>
                        @foreach($dists as $dist)
                            <option value="{{$dist->id}}">{{$dist->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3 col-md-3">

                    <select class="custom-select" id="inputGroupSelect01" name="Type">
                        <option selected>Choose...</option>
                        @foreach($types as $type)
                            <option value="{{$type->id}}">{{$type->type}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3 col-md-3">
                    {{csrf_field()}}
                    <form method="post" class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" name="nrcNo" placeholder="NRC Number">

                    </form>
                </div>

                </div>

                <div class="row container-fluid mt-3">

                <div class="input-group mb-3 col-md-6">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-info text-white" id="inputGroupFileAddon01">10 Years</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                               aria-describedby="inputGroupFileAddon01" name="tenInfo">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file for 10 years...</label>
                    </div>
                </div>

                <div class="input-group mb-3 col-md-6">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-info text-white" id="inputGroupFileAddon01">30 Years</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                               aria-describedby="inputGroupFileAddon01" name="thirtyInfo">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>

            </div>

                <div class="row container mt-3">
                <div class="input-group mb-3 col-md-6">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-info text-white" id="inputGroupFileAddon01">18 Years</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                               aria-describedby="inputGroupFileAddon01" name="eighteenInfo">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file for 18 years...</label>
                    </div>
                </div>
                <div class="input-group mb-3 col-md-6">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-info text-white" id="inputGroupFileAddon01">45 Years</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                               aria-describedby="inputGroupFileAddon01" name="ffInfo">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file for 45 years...</label>
                    </div>
                </div>
            </div>

            


        </div>-->