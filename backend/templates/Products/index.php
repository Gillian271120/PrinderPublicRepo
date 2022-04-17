<h1>Products</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->
    <?php foreach ($products as $product): ?>
    <tr>
        <td>
            <?= $product->name ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>