<h1>Campaña <?= $campaign->title ?></h1>
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
        <tr>
            <!-- title, description, link, created, expirationDate, price-->
            <td><?= $campaign->id ?></td>
            <td><?= $campaign->title ?></td>
            <td><?= $campaign->description ?></td>
            <td><?= $campaign->link ?></td>
            <td><?= $campaign->created ?></td>
            <td><?= $campaign->expirationDate ?></td>
            <td><?= $campaign->price ?></td>

            <a href="?controller=shareCampaign">
                        <button class="btn btn-outline-green">Regresar</button>
            </a>

        </tr>
    </tbody>
    
</table>
<table class="table">
    <thead>
        <th>Copy the link</th>
    </thead>
    <tbody>
        <tr>
            <!-- title, description, link, created, expirationDate, price-->
            <td>http://localhost/Teespring2/?controller=shareCampaign&method=share&id=<?= $campaign->id ?></td>
        </tr>
    </tbody>
    
</table>
