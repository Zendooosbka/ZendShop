
<tr>
    <td>{$id}</td>
    <td>{$name}</td>
    {if $picture == "not"}
    <td>Добавить изоюражение -> <a href="#" data-toggle="modal" data-target="#ChangePicureModalDialog" onclick="document.getElementById('updatepicturebrandid').setAttribute('value', {$id});"><span class="glyphicon glyphicon-pencil"></span></a></td>
    {else}
    <td><a href="#" data-toggle="modal" data-target="#ModalBrandImage_{$id}">{$lowpicture}&nbsp;&nbsp;&nbsp;</a><a href="#" data-toggle="modal" data-target="#ChangePicureModalDialog" onclick="document.getElementById('updatepicturebrandid').setAttribute('value', {$id});"><span class="glyphicon glyphicon-pencil"></span></a></td>
    {/if}
    <td><a href="#" data-toggle="modal" data-target="#ModalBrandDescription_{$id}">{$desc}&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-zoom-in"></span></a></td>
    <td>{$date}</td>
    <td><a href="#" data-toggle="modal" data-target="#ModalBrandUpdateDialog" onclick="document.getElementById('updatebrandid').setAttribute('value', {$id});"><span class="glyphicon glyphicon-pencil"></span></a></td>
    <td><a href="DeletebrandQuery.php?id={$id}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>