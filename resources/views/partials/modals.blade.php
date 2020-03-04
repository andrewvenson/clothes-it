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


<!-- Delete Form -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style='height:300px !important;text-align:center;'>
            <form action="" style='margin-top:25px;'>
                <p>Are you sure you want to delete this item?</p>

                <button type='submit' class='btn btn-dark'>Yes</button>
                <button type='submit' class='btn btn-secondary'>No</button>

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
                <div class="modal-body" style=' overflow-x: hidden; height:800px;'>
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

                    <div style='position:absolute; bottom:0; margin:10px;right:0'>
                        <button type="button" class="btn btn-dark" style='background-color:darkgray; border-color:darkgray;' data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-dark">Add to closet</button>
        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
