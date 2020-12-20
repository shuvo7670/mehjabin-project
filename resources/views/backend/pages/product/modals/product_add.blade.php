<div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="addProduct" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addProduct">Add Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{route('backend.product.add')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="productName">Product Name </label>
                <input type="text" name="product_name" class="form-control" id="productName" placeholder="Product Name">
            </div>
            <div class="form-group">
                <label for="selectCaategory">Select Category </label>
                <select name="category_id" id="selectCaategory"  class="form-control">
                    <option value="">--Select Product Category--</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="productDescription">Product Description</label>
                <textarea name="description" id="productDescription" cols="30" rows="10" class="form-control tinymce-editor"></textarea>
            </div>
            <div class="form-group">
                <label for="productName">Product Old Price (optional)</label>
                <input type="number" name="old_price" class="form-control" id="productName" placeholder="Product Old Price">
            </div>
            <div class="form-group">
                <label for="productName">Product Price </label>
                <input type="number" name="new_price" class="form-control" id="productName" placeholder="Product New Price">
            </div>
            <div class="form-group">
                <label for="productImage">Choose Product Image</label>
                <input type="file" name="product_image" class="form-control" id="productImage">
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

