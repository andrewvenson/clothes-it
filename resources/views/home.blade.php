<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothes It</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
    <style>
        .feed{
            width: 100%; 
            height: 300px;  
            background-color:lightgray;
            margin: 10px auto;
            box-shadow: 3px 4px 8px black;
        }

        .feed div{
            display:none;
            height: 100px;
        }

        .mb-fit div{
            width: 300px; 
            height: 300px;  
            background-color:lightgray;
            border-radius: 10px;
            margin: 20px auto;
            box-shadow: 3px 4px 8px black;
        }

        .modal-body input{
            box-shadow: 3px 3px 7px black;
            background-color:black;
            color:white;
            border-color:#1f1f1f !important;
            border-radius:10px;
        }

        .container::-webkit-scrollbar {
            display: none;
        }

        .row{
            margin:0px !important;
        }

        h3{
            margin: 10px 0px 0px 5px; 
            font-weight:bold;
            color: lightgray;;
            text-shadow: 2px 2px gray; 
        }

        body{
            background-color:#000000;
            font-family: 'Noto Serif', !important ;
            padding-bottom:100px;
            
        }

        img{
            image-rendering: -moz-crisp-edges; /* Firefox */
            image-rendering: -o-crisp-edges; /* Opera */
            image-rendering: -webkit-optimize-contrast; /* Webkit (non-standard naming) */
            image-rendering: crisp-edges;
            -ms-interpolation-mode: nearest-neighbor; /* IE (non-standard property) */
        }
        .new-btn{
            box-shadow: 3px 4px 8px black;
        }

        .modal-content{
            min-height: 600px !important;
            position:relative;
            background-color: #1f1f1f;
            color:white;
        }

        .modal-footer{
            position:absolute;
            bottom:0;
            width:100%;
        }

        .modal-body input{
            margin: 10px 0px 10px 0px;  
        }

        a{
            text-decoration:none !important;
            color: whitesmoke;
            font-weight: bold;
            font-size: 16px;
        }
       
        #dropdown div:hover{
            background-color:#f0f0f0;
        }

        #dropdown div a{
            margin-left: 20px;
        }

        #dropdown div{
            padding:5px;
        }

        #dropdown{
            margin-top:30px;
        }
        
    </style>
</head>
<body>
    <div class="row" style='height:50px; background-color:#1f1f1f;position:fixed;top:0;width:100%;'>
        <div class='col' >
            <div style='margin-top:10px;'>
                <a href="#" ><img src="images/search.png" style='width:24px; height:24px;' alt=""></a>
            </div>
        </div>
        <div class="col">

            <a href="{{url('/')}}">
                <h3>clothesIt</h3>
            </a>
        </div>
        <div class="col">
            <div style="float:right;margin-top:10px;z-index: 100;">
                <a id="nav-dropitm" style="float:right;"><img src="{{URL::asset('images/menu.png')}}"  style='height:25px; width:25px;' alt=""></a>
                <a id="close-dropitm" style="display:none;float:right;"><img src="{{URL::asset('images/close.png')}}" alt=""></a>
            </div>
        </div>
    </div>

    <div id='dropdown' style='display:none; background-color:#1f1f1f;border: 1px solid #1f1f1f;border-radius: 5px;width: 100%;padding:10px;z-index: 600;'>
                
        <div class='border-bottom'>
            <a href="#"> Filter</a><br>
        </div>
        <div class='border-bottom'>
            <a href="#">Closet</a><br>

        </div>
        <div class='border-bottom'>
            <a href="#">Cart</a><br>
        </div>
        <div>
            <a href="#">Profile</a>
        </div>
    </div>

    <div class='container' style='overflow-y:scroll;height: 100%;margin-top:50px;'>
       
            @foreach($items as $item)
            <div style='overflow:hidden;'>
                <div class='feed' style="text-align:center; background: url(uploads/{{$item->image}}); background-size:cover;">
                    <div style='background-color:red; opacity: .6'>
                        <a href="#">Delete</a>
                    </div>
                    <div style='background-color:black; opacity: .6'>
                        <a href="#">Edit</a>
                    </div>
                    <div style='background-color:black; opacity: .6'>
                        <a href="#">Add to fit</a>
                    </div>
                </div>
                <a href="#" style='color:white;text-decoration:none;float:left;'>{{$item->name}}</a>
                
                <a class='more' href="#" style='float:right;'><img src="images/more.png" style='width:18px;height:18px;' alt=""></a>                
            </div>
                
            @endforeach
        
    </div>

    <div class='footer-nav row' style='text-align:center; position:fixed; width:100%; bottom:0; background-color:black;height:50px; color:white;'>
        <div class="col" style='margin-top:10px;'>
            <a href="#"><img src="images/feed.png" style='width:24px; height:24px' alt=""></a> 
        </div>
        <div class="col" style='margin-top:10px;'>
            <a href="#"><img src="images/shirt.png" style='width:24px; height:24px' alt=""></a>
        </div>
        <div class="col" style='margin-top:10px;'>
            <a href="#"><img src="images/closet.png" style='width:30px; height:30px' alt=""></a>
        </div>
    </div>

    <button type="button" class='btn btn-primary new-btn' data-toggle="modal" data-target="#new" style="background-color: #00bcd4 !important; border-color: #00bcd4 !important; position:fixed; bottom:0px;right:0px;margin:5px 5px 57px 5px;border-radius:50px;">New</button>
    <button type="button" class='btn btn-success new-btn' data-toggle="modal" data-target="#fit" style="background-color: #142154 !important; border-color: #142154 !important; position:fixed; bottom:0px;left:0px;margin:5px 5px 57px 5px;border-radius:50px;width:58.02px; height:38px;">Fit</button>
    
    

<!-- Filter Form -->
    <div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="">
                    ...
                </form>
            </div>
        </div>
    </div>
    
    <!-- Fit Form -->
    <div class="modal fade" id="fit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header" style="position:fixed;top:0;width:95%;">
                        <input class='form-control' placeholder="Search item..." type="text">
                    </div>
                    <div class='modal-body mb-fit' style='text-align:center;overflow-y:scroll;max-height: 455px;margin-top:65px;'>
                        <div>
                        
                        </div>

                        <div>
                        
                        </div>

                        <div>
                        
                        </div>

                        <div>
                        
                        </div>

                        <div>
                        
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Select</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Create Outfit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- New Item Form -->
    <div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="/" method='post' enctype="multipart/form-data" >
                @csrf
                    <div class="modal-body" style='overflow-y:scroll; overflow-x: hidden; height:525px;'>
                        <input class='form-control' name='name' type="text" placeholder="Name">
                        <input class='form-control' name='qty' placeholder="Qty" type="text">
                        <input class='form-control' name='color' placeholder="Color" type="text">
                        <input class='form-control' name='tag' placeholder="Tag" type="text">
                        <input class="form-check-input" type="radio" name="private" id="exampleRadios1" value="private" checked>
                        <label class="form-check-label" for="exampleRadios1" style='margin: 5px 0px 0px 20px;'>
                            Private
                        </label>
                        <br>
                        <input class="form-check-input" type="radio" name="public" id="exampleRadios2" value="">
                        <label class="form-check-label" for="exampleRadios2" style='margin: 5px 0px 0px 20px;'>
                            Public
                        </label>

                        <div>
                            <input type="file" name="image"  accept="image/*" aria-describedby="fileHelp" style='box-shadow: none !important;background-color: #1f1f1f !important;'>
                        </div>
                            
                        <div style='height:300px; width: 328px;border-radius: 5px;margin-top:15px;background-color: black; box-shadow: 3px 4px 10px black;'>
                        
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" style='background-color: #00bcd4; border-color: #00bcd4 ; '>Add to closet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>