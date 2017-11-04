<tr>
    <td>{$id}</td>
    <td>{$name}</td>
    <td>{$value}</td>
    <td>{$im}</td>
    <td>{$date}</td>
    <td><a href="#" data-toggle="modal" data-target="#ModalProductAttributeUpdateDialog" onclick="document.getElementById('updateproductattributeid').setAttribute('value', {$id});"><span class="glyphicon glyphicon-pencil"></span></a></td>
    <td><a href="DeleteproductattributeQuery.php?id={$id}&productid={$productid}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>