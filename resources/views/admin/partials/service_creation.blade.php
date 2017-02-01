<div id="page-wrapper">

    <div class="graphs">
        <div class="grid_3 grid_4">
            <h2> Create Service</h2>
            <hr>
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">
                    <form role="form">
                        <div class="form-group">
                            <label class="control-label">Title of the Service *</label>
                            <input type="text" class="form-control1" placeholder="Enter the title for the service" value="{{old('service_title')}}" name="service_title">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Slug of the Service *</label>
                            <input type="text" class="form-control1" placeholder="Enter the slug for the service" value="{{old('service_slug')}}" name="service_slug">
                        </div>
                        <div class="form-group">
                            <label class="control-label" id="required_field" >Service Description *</label>
                            <textarea class="form-control1" rows="12" placeholder="Enter the description for the service" name="service_description">
                {{old('page_content')}}
            </textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="Slider Image">Choose Image to Upload for the service :</label>
                            <input type="file"  id="service_image" name="service_image">
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-block btn-success">Submit</button>
                    </form>
                    <hr>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({
        selector:'textarea',
        plugins:'link code',
        menubar:'false',
        height:'250px'
    });
</script>
