
<a href="admin_panel.php"><i class="bg-secondary text-white fas fa-long-arrow-alt-left"><span>Go back</span></i></a>

<div class="container" style="margin-top: 20px;">

    <form method="POST" action="?c=product&action=update">

        <input type="hidden" name="id" value="<?php echo $product->getId() ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $product->name?>">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="<?php echo $product->description?>">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input type="text" class="form-control" id="image" name="image" value="<?php echo $product->image?>">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price $</label>
            <input type="text" class="form-control" id="price" name="price" value="<?php echo $product->price?>">
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>

    </form>

</div>