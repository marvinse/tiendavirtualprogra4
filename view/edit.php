<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<a href="admin_panel.php"><i class="bg-secondary text-white fas fa-long-arrow-alt-left"><span>Go back</span></i></a>

<table class="table table-light table-hover" style="margin-top:20px">

    <thead class="table-dark">
        <tr>
            <th scope="col">Product</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Price $</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>

    <tbody>

        <?php foreach ($entries as $product){ ?>
            <tr>
                <td><?php echo $product->name ?></td>
                <td><?php echo $product->description ?></td>
                <td><img src="<?php echo $product->image ?>" /></td>
                <td>$ <?php echo $product->price ?></td>
                <td>
                    <button type="button" class="btn btn-primary"><a href="?c=product&action=update&id=<?php echo $product->getId()?>">Edit</a></button>
                    <button type="button" class="btn btn-danger"><a href="?c=product&action=delete&id=<?php echo $product->getId()?>">Delete</a></button>
                </td>
            </tr>
        <?php } ?>
        
    </tbody>

</table>