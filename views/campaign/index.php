<h1>Lista de Campañas</h1>
<a href="?controller=shareCampaign&method=create">
    <button class="btn btn-green">Crear</button>
</a>
<table class="table">
    <thead>
        <th>id</th>
        <th>title</th>
        <th>description</th>
        <th>link</th>
        <th>created</th>
        <th>expirationDate</th>
        <th>price</th>
    </thead>
    <tbody>
    <?php 
    
    require_once( 'C:\xampp\htdocs\Teespring2\controllers\shareCampaignController.php');
    $shareCampaignController = new shareCampaignController();
    
    foreach($shareCampaignController->campaignid($_SESSION{'user'}->id) as $campaign):
    ?>
        <tr>
            <!-- title, description, link, created, expirationDate, price-->
            <td><?= $campaign->id ?></td>
            <td><?= $campaign->title ?></td>
            <td><?= $campaign->description ?></td>
            <td><?= $campaign->link ?></td>
            <td><?= $campaign->created ?></td>
            <td><?= $campaign->expirationDate ?></td>
            <td><?= $campaign->price ?></td>
            <td width="200" class="table__options">
                <a href="?controller=shareCampaign&method=edit&id=<?= $campaign->id ?>">
                    <button class="btn btn-outline-green">Editar</button>
                </a>
                <a href="?controller=shareCampaign&method=share&id=<?= $campaign->id ?>">
                    <button class="btn btn-outline-blue">Share</button>
                </a>
                <a href="?controller=shareCampaign&method=delete&id=<?= $campaign->id ?>">
                <button class="btn btn-outline-red">Borrar</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

