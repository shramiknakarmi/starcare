<div id="page-wrapper">

            <div class="graphs">
                <div class="grid_3 grid_4">
            <h2> Create Page</h2>
           <hr>
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">
                    <form role="form">
                        <div class="form-group">
                            <label class="control-label">Title of the Page *</label>
                            <input type="text" class="form-control1" placeholder="Enter the title for the menu" value="{{old('menu_title')}}" name="menu_title">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Slug of the Page *</label>
                            <input type="text" class="form-control1" placeholder="Enter the title for the menu" value="{{old('menu_title')}}" name="menu_title">
                        </div>
                        <div class="form-group">
                            <label class="control-label" id="required_field" >Page Content *</label>
                            <textarea class="form-control1" rows="12" placeholder="Enter the content for the page" name="page_content">
                {{old('page_content')}}
            </textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Meta Keyword</label>
                            <input type="text" class="form-control1" placeholder="Enter the meta keyword" value="{{old('meta_keyword')}}" name="meta_keyword">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Meta Description</label>
                            <input type="text" class="form-control1" placeholder="Enter the meta description" value="{{old('meta_description')}}" name="meta_description">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="Slider Image">Choose Image to Upload for Page :</label>
                            <input type="file"  id="featured" name="featured_image">
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
