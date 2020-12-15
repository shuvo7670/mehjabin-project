<div class="modal fade" id="addSlider" tabindex="-1" role="dialog" aria-labelledby="addSlider" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addSlider">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{route('backend.slider.add')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="sliderImage">Choose Slider Image</label>
                <input type="file" name="slider_image" class="form-control" id="sliderImage">
            </div>
            <div class="form-group">
                <label for="productLink">Product Link (optional) </label>
                <input type="text" name="product_link" class="form-control" id="productLink" placeholder="Product Link">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
        </div>
    </div>
</div>
