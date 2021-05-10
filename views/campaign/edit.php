<section class="container">
    <h1>Editar Campaña</h1>
    <form action="?controller=shareCampaign&method=update&id=<?= $campaign->id ?>" method="POST">
        <section class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required class="form-control" value="<?= $campaign->title ?>">
        </section>
        <section class="form-group">
            <label for="description">description</label>
            <input type="text" name="description" id="description" required class="form-control" value="<?= $campaign->description ?>">
        </section>
        <section class="form-group">
            <label for="link">link</label>
            <input type="text" name="link" id="link" required class="form-control" value="<?= $campaign->link ?>">
        </section>
        <section class="form-group">
            <label for="created">created</label>
            <input type="text" name="created" id="created" required class="form-control" value="<?= $campaign->created ?>">
        </section>
        <section class="form-group">
            <label for="expirationDate">expirationDate</label>
            <input type="text" name="expirationDate" id="expirationDate" required class="form-control" value="<?= $campaign->expirationDate ?>">
        </section>
        <section class="form-group">
            <label for="price">price</label>
            <input type="text" name="price" id="price" required class="form-control" value="<?= $campaign->price ?>">
        </section>
        <section class="form-group">
            <input type="submit" value="Actualizar" class="btn btn-green">
            <a href="?controller=shareCampaign" class="btn btn-outline-red ml-2">Volver</a>
        </section>
    </form>
</section>