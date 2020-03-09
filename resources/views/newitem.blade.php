@extends('layout')

@section('content')
    <form action="/" method='post' enctype="multipart/form-data" >   
        @csrf

        <div>
            <a href="/" style='position:fixed; left:10px; top:55px;'><img src="images/popleft.png" style='width:20px;height:20px;' alt=""></a>
            <a class='emptystr' style='position:fixed; right: 10px; top: 55px;'><img src="images/star.png" style='width:20px;height:20px;' alt=""></a>
            <a class='goldstr' style='display:none;position:fixed; right: 10px; top: 55px;'><img src="images/goldstar.png" style='width:20px;height:20px;' alt=""></a>
            <input type="text" style='display:none;'>
        </div>

        

        <div style='position:fixed; top:80px;width: 100%;padding: 20px;overflow-y: scroll;height: 650px;'>
            <input id='name' name='name' placeholder="Name" type="text" style='background-color: black;width: 100%;color:white'>

            <div id='img-preview' style='position:relative; display:none; width: 100%; height: 250px; box-shadow: 3px 4px 8px black; border-radius: 5px;filter:brightness(.5);'>
                <p id='itm-name' style='position:absolute; top: 5px; left: 5px; color: white; font-weight:bold; text-shadow: 3px 4px 8px #000; '>Name</p>
                <a id='cancel-item-inp' style='position:absolute; top: 5px; right: 5px;'><img src="images/close.png" style='width: 15px; height: 15px;' alt=""></a>
                
                <img src="#"  id='preview' style='width: 100%; height: 100%;border-radius: 5px;' alt="">
            </div>

            
            <div class="image-upload" style='text-align:center;margin-top: 15px;'>
                <label for="file-input">
                    <img src="images/camera.png" style=' width: 30px; height: 30px;filter:drop-shadow(2px 2px 5px #000);'>
                </label>

                <input id="file-input" name='image' type="file" accept='image/*'>
            </div>

            <textarea class='img-description' style='background-color: black; margin-top: 5px;width: 100% !important;color: white;height: 35px;' placeholder='Description' name="description" id="" cols="30" rows="10"></textarea>
            <input type="text" name='color' style='display:none;'>
            <div class='color-picker' style='margin-top:25px;position:relative;'>
                <p style='color:white;'>Color</p>
                <div class='row' style='margin:0px;padding:0px;'>

                    <div class="col" style='background-color: white;height: 50px;border-top-left-radius: 5px; '>
                        
                    </div>
                    <div class="col" style='background-color: blue'>
                    
                    </div>
                    <div class="col" style='background-color: green'>
                    
                    </div>
                    <div class="col" style='background-color: purple'>
                    
                    </div>
                    <div class="col" style='background-color: pink'>
                    
                    </div>
                    <div class="col" style='background-color: black; border-top-right-radius: 5px;'>
                    
                    </div>
                </div>
                <div class='row'>
                    <div class="col" style='background-color: brown; height: 50px;border-bottom-left-radius: 5px;'>
                    
                    </div>
                    <div class="col" style='background-color: red'>
                    
                    </div>
                    <div class="col" style='background-color: maroon'>
                    
                    </div>
                    <div class="col" style='background-color: orange'>
                    
                    </div>
                    <div class="col" style='background-color: lightgray'>
                    
                    </div>
                    <div class="col" style='background-color: gray; border-bottom-right-radius: 5px;'>
                    
                    </div>
                </div>
            </div>
            
            <div style='margin-top:25px;'>
                <select name="type" id="type" style='color:lightgray;border-radius: 5px; border-color: 1px solid #171717 !important;background-color: black !important;width: 150px;'>
                    <option value='default'>Type</option>
                    @foreach($all_types as $type)
                        <option value="{{$type}}">{{$type}}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="custom-control custom-switch" style='margin-top: 25px;'>
                <input type="checkbox" class="trade-sell-inp custom-control-input" value='sell' id="tradesell" checked>
                <label class="trade-sell-lbl custom-control-label" style='color: white;font-weight:bold;' for="tradesell"><span>Sell</span></label><br>
                <input id='item-price' type="number" name='price' style='margin-left: 5px;background-color: black; width: 100px;color:white;' placeholder='$0.00'>
            </div>

            <div class="custom-control custom-switch" style='margin-top: 25px;margin-bottom:25px;'>
                <input type="checkbox" name='privatepub' class="priv-pub-inp custom-control-input" value='public' id="publicprivate" checked>
                <label class="priv-pub-lbl custom-control-label" style='color: white;font-weight:bold;' for="publicprivate">Public</label>
            </div>

            <div style='margin-top:25px;'>
                <input type="text" style='background-color:black' placeholder='Tag'>
            </div>

            
        </div>
        <button type='submit' style='position:fixed;right:5px;bottom:55px;background:none; border:none;color:white;font-weight:400;font-size: 16px;'>Add to closet</button>

    </form>
    
@endsection

