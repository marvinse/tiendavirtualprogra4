<a href="admin_panel.php"><i class="bg-secondary text-white fas fa-long-arrow-alt-left"><span>Go back</span></i></a>
<div class="container" style="margin-top: 20px;">
    <form method="POST" action="?c=product&action=add">
        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Product">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Details">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="Image url">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price $</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="$0">
        </div>

        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>