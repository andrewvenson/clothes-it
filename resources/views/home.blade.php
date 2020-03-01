<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothes It</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
    <style>
        .container div{
            width: 300px; 
            height: 300px;  
            background-color:lightgray;
            border-radius: 10px;
            margin: 25px auto;
            box-shadow: 3px 4px 8px lightgray;
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
            color: navy;
            text-shadow: 2px 2px gray; 
        }

        body{
            background-color:whitesmoke;
            font-family: 'Noto Serif', !important ;
        }

        .new-btn{
            box-shadow: 3px 4px 8px gray;
        }

        .modal-content{
            min-height: 600px !important;
        }

        .modal-body input{
            margin: 10px 0px 10px 0px;  
        }
    </style>
</head>
<body>
    <div class="row" style='height:50px; background-color:lightgray;'>
        <div class="col">
            <h3>ClothesIt</h3>
        </div>
        <div class="col">
            <div style='float:right;'>
                <button type='button' data-toggle='modal' data-target='#exampleModalLong'><img src="{{ URL::asset('images/filter.png') }}" style='width:32px; height:32px;margin-top:8px;' alt=""></a>
            </div>
        </div>
    </div>

    <div class='container' style='text-align:center;overflow-y:scroll;max-height: 750px;'>
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
    <button type="button" class='btn btn-primary new-btn' data-toggle="modal" data-target="#exampleModalLong " style="position:fixed; bottom:0px;right:0px;margin:20px;border-radius:50px;">New</button>
    <button type="button" class='btn btn-success new-btn' data-toggle="modal" data-target="#exampleModalLong " style="position:fixed; bottom:0px;left:0px;margin:20px;border-radius:50px;width:58.02px; height:38px;">Fit</button>
    
    // New item form
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5><input type="text" style='border:none; height: 30px;' placeholder="Enter clothing item name..."></h5>
                    </div>
                    <div class="modal-body">
                        <input class='form-control' placeholder="Qty" type="text">
                        <input class='form-control' placeholder="Color" type="text">
                        <input class='form-control' placeholder="Tag" type="text">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    // Fit Form
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5><input type="text" style='border:none; height: 30px;' placeholder="Enter clothing item name..."></h5>
                    </div>
                    <div class="modal-body">
                        <input class='form-control' placeholder="Qty" type="text">
                        <input class='form-control' placeholder="Color" type="text">
                        <input class='form-control' placeholder="Tag" type="text">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    //Filter Form
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5><input type="text" style='border:none; height: 30px;' placeholder="Enter clothing item name..."></h5>
                    </div>
                    <div class="modal-body">
                        <input class='form-control' placeholder="Qty" type="text">
                        <input class='form-control' placeholder="Color" type="text">
                        <input class='form-control' placeholder="Tag" type="text">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>