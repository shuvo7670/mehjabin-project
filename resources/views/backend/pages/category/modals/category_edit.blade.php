<div class="modal fade" id="editCategory" tabindex="-1" role="dialog" aria-labelledby="editCategory" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editCategory">Edit Category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{route('backend.category.update')}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" value="" id="category_id" name="category_id">
            @csrf
            <div class="form-group">
                <label for="editCategoryName">Category Name </label>
                <input type="text" name="category_name" class="form-control" id="editCategoryName">
            </div>
        </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

        </div>
    </form>
    </div>
</div>
