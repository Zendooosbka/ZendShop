<tr>
    <td>{$id}</td>
    <td>{$name}</td>
    <td>{$price}</td>
    <td>{$categoryname}</td>
    <td>{$brandname}</td>
    <td>{$date}</td>
    {if $image == "not"}
        <td>Нету изображения</td>
    {else}
        <td><a href="#" data-toggle="modal" data-target="#ModalProductImage_{$id}">{$lowpicture}</a></td>
    {/if}
    <td><a href="Addproductinshowwindow.php?productid={$id}&swid={$swid}""><span class="glyphicon glyphicon-plus-sign"></span></a></td>
</tr>