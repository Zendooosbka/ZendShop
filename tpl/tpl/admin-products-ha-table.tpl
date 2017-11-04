<tr>
    <td>{$id}</td>
    <td>{$name}</td>
    <td>{$date}</td>
    <td><a href="#" data-toggle="modal" data-target="#ModalAttributeUpdateDialog" onclick="document.getElementById('updateattributeid').setAttribute('value', {$id});"><span class="glyphicon glyphicon-pencil"></span></a></td>
    <td><a href="DeleteattributeQuery.php?id={$id}&productid={$productid}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>