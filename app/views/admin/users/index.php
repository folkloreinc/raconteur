<h1>Utilisateurs</h1>

<div class="row">
    <div class="small-12 columns" align="right">
        <a href="<?=URL::route('admin.users.create')?>" class="button small">Ajouter un utilisateur</a>
    </div>
</div>

<table width="100%">
    <thead>
        <tr>
            <th width="50">ID</th>
            <th>Email</th>
            <th width="175">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $item) { ?>
        <tr>
            <td><?=$item->id?></td>
            <td><?=$item->email?></td>
            <td align="center">
                <a href="<?=URL::route('admin.users.destroy',$item->id)?>" class="button tiny">Supprimer</a>
                <a href="<?=URL::route('admin.users.edit',$item->id)?>" class="button tiny">Modifier</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>