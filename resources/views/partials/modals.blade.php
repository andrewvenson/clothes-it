<!-- Filter Form -->
<div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="">
                ...
            </form>

            <button type="button" class="btn btn-dark" style='background-color:darkgray; border-color:darkgray;' data-dismiss="modal">Close</button>

        </div>
    </div>
</div>


<!-- Delete Form -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style='height:300px !important;text-align:center;'>
            <form action="" style='margin-top:30%;'>
                <p>Are you sure you want to delete this item?</p>

                <button type='submit' class='btn btn-danger'>Yes</button>
                <button type='button' data-dismiss="modal" class='btn btn-dark'>No</button>

            </form>
        </div>
    </div>
</div>

<!-- Fit Form -->
<div class="modal fade" id="fit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style='height:500px;position:relative'>
            <div class='modal-body' style='padding:10px !important;'>
                <form action="/fits" method='post'>
                    @csrf
                    <input class='form-control' name='name' type="text" placeholder="Name">
                    
                    <div class='row fit-collage' style='text-align:center;padding:0px;'>
                    
                    </div>
                    

                    <a style='left:0;bottom:0;position:absolute; margin:10px;' href="" data-dismiss='modal'>Close</a>
                    <button  type='submit' style='background:none; border:none;right:0;bottom:0;position:absolute;margin:10px;color:white;font-weight:bold;'>Create fit</button>
                </form>
            </div>
        </div>
    </div>
</div>






<!-- New Item Form -->
<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="/" method='post' enctype="multipart/form-data" >
            @csrf
                <div class="modal-body">
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
                        
                    <div style='height:250px; width: 100%;border-radius: 5px;margin-top:15px;background-color: darkgray;'>
                    
                    </div>

                    <div style='position:absolute; bottom:0; margin:10px;right:0'>
                        <button type="button" class="btn btn-dark" style='background-color:black; border-color:black;' data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-dark">Add to closet</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
