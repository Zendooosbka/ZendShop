<tr>
    <td>{$id}</td>
    <td>{$name}</td>
    <td>{$catname}</td>
    <td>{$date}</td>
    <td><a href="admineditshowwindows.php?swid={$id}">Показать товары</a></td>
    <td><a href="#" data-toggle="modal" data-target="#ModalShowWindowUpdateDialog" onclick="document.getElementById('showwindowid').setAttribute('value', {$id});"><span class="glyphicon glyphicon-pencil"></span></a></td>
    <td><a href="DeleteshowwindowQuery.php?id={$id}&swid={$productid}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>