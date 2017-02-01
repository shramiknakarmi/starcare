<div id="page-wrapper">
    <div class="graphs">
        <div class="grid_3 grid_4">
            <h2> Create Menu</h2>
            <hr>
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">

                <form role="form">

                        <div class="form-group">
                            <label class="control-label">Title of the Menu *</label>
                            <input type="text" class="form-control1" placeholder="Enter the title for the menu" value="{{old('menu_title')}}" name="menu_title">
                        </div>
                       <div class="form-group">
                        <label class="control-label">Slug of the Menu *</label>
                        <input type="text" class="form-control1" placeholder="Enter the title for the menu" value="{{old('menu_title')}}" name="menu_title">
                        </div>
                    <div class="form-group">
                        <label class="control-label">Menu URL *</label>
                        <input type="text" class="form-control1" placeholder="Enter the title for the menu" value="{{old('menu_title')}}" name="menu_title">
                    </div>

                    <div class="form-group">
                        <label class="control-label" id="required_field">Link Type *</label>
                        <div>
                            <input type="radio" name="link_type" value="internal" id="internal"/>
                            <label for="internal" id="radio">Internal</label>

                        </div>

                        <div>
                            <input type="radio" name="link_type" value="external" id="external"/>
                            <label for="external" id="radio">External</label>
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-block btn-success">Submit</button>
                </form>
                <hr>
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
</div>