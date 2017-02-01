<div id="page-wrapper">
    <div class="graphs">
        <div class="grid_3 grid_4">
            <h2> Create Slider</h2>
            <hr>
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">

                    <form role="form" action="#" method="post" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label" for="Slider Image">Choose Image to Upload for Slider :</label>
                            <input type="file"  id="slider_image" name="slider_image">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                    <hr>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
</div>
