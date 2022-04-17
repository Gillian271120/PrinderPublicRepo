<h1>Products</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php

use Cake\ORM\TableRegistry;

    $productTable = TableRegistry::getTableLocator()->get('Products');
    $productTable->find(); 
    debug($productTable->find()->toArray());exit;
    ?>

    <?php foreach ($products as $product): ?>
    <tr>
        <td>
            <?= $product->name ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>