<table class="table table-stripped">
    <tr>
        <th>#</th>
        <th>Typ</th>
        <th>Lokalizacja</th>
        <th>Link</th>
        <th>Data zgłoszenia</th>
        <th>Data modyfikacji</th>
        <th>Status</th>
        <th></th>
    </tr>
    <?php foreach($interventions as $object) { ?>
        <tr>
            <td><?php echo $object['Intervention']['id']; ?></td>
            <td><?php echo $object['Intervention']['typ']; ?></td>
            <td><?php echo $object['Intervention']['lokalizacja']; ?></td>
            <td><?php echo $object['Intervention']['link']; ?></td>
            <td><?php echo $object['Intervention']['created']; ?></td>
            <td><?php echo $object['Intervention']['modified']; ?></td>
            <td><?php echo $object['Status']['title']; ?></td>
            <td>
                <a href="<?php echo  $this->Html->url(array('action' => 'edit', $object['Intervention']['id'])); ?>" class="btn btn-info">Edytuj</a>
                <a href="<?php echo  $this->Html->url(array('action' => 'delete', $object['Intervention']['id'])); ?>" class="btn btn-warning">Usuń</a>
            </td>

        </tr>
    <?php } ?>
</table>
<?php echo $this->Paginator->numbers(); ?>