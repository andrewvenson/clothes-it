@extends('layout')

@section('content')
<div class='container' style='overflow-y:scroll;height: 100%;margin-top:50px;'>
       
    @foreach($items as $item)
    <div style='overflow:hidden;'>
        <div class='feed {{$item->id}}' style="text-align:center; background: url(uploads/{{$item->image}}); background-size:cover;">
            <div style='background-color:red; padding:40px;opacity: .6'>
                <a data-toggle="modal" data-target="#delete">Delete</a>
            </div>
            <div style='background-color:black; opacity: .6; padding:40px'>
                <a>Edit</a>
            </div>
            <div style='background-color:#1f1f1f; opacity: .6;padding:40px'>
                <a>Add to fit</a>
            </div>
        </div>
        <a href="#" style='color:white;text-decoration:none;float:left;'>{{$item->name}}</a>
        
        <a class='more' id='{{$item->id}}' style='float:right;'><img src="images/more.png" style='width:18px;height:18px;' alt=""></a>                
    </div>
        
    @endforeach
    
</div>



<button type="button" class='btn btn-secondary new-btn' data-toggle="modal" data-target="#new" style="background-color:black !important; border-color: black !important;position:fixed; bottom:0px;right:0px;margin:5px 5px 57px 5px;border-radius:100%;height:50px;">New</button>
<button type="button" class='btn btn-dark new-btn' data-toggle="modal" data-target="#fit" style="position:fixed; bottom:0px;left:0px;margin:5px 5px 57px 5px;border-radius:100%;width:58.02px; height:50px;">Fit</button>
@endsection

