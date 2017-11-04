<tr>
    <td>{$id}</td>
    <td>{$name}</td>
    <td>{$price}</td>
    <td>{$categoryname}</td>
    <td>{$brandname}</td>
    <td>{$date}</td>
    {if $image == "not"}
        <td>Добавить изоюражение -> <a href="#" data-toggle="modal" data-target="#ChangePicureModalDialog" onclick="document.getElementById('updatepictureproductid').setAttribute('value', {$id});"><span class="glyphicon glyphicon-pencil"></span></a></td>
    {else}
        <td><a href="#" data-toggle="modal" data-target="#ModalProductImage_{$id}">{$lowpicture}&nbsp;&nbsp;&nbsp;</a><a href="#" data-toggle="modal" data-target="#ChangePicureModalDialog" onclick="document.getElementById('updatepictureproductid').setAttribute('value', {$id});"><span class="glyphicon glyphicon-pencil"></span></a></td>
    {/if}
    <td><a href="admineditproducts.php?productid={$id}">Показать аттрибуты</a></td>
    <td><a href="#" data-toggle="modal" data-target="#ModalProductUpdateDialog" onclick="document.getElementById('updateproductid').setAttribute('value', {$id});"><span class="glyphicon glyphicon-pencil"></span></a></td>
    <td><a href="DeleteproductQuery.php?id={$id}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>
