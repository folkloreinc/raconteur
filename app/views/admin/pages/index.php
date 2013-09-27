<h1>Pages</h1>

<div class="row">
    <div class="small-12 columns" align="right">
        <a href="<?=URL::route('admin.pages.create')?>" class="button small">Ajouter une page</a>
    </div>
</div>

<table width="100%">
    <thead>
        <tr>
            <th width="50">ID</th>
            <th>Titre</th>
            <th width="100">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $item) { ?>
        <tr>
            <td><?=$item->id?></td>
            <td><?=$item->title_fr?></td>
            <td align="right">
                <a href="<?=URL::route('admin.pages.edit',$item->id)?>" class="button tiny">Modifier</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>