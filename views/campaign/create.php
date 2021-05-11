<section class="container">
    <h1>Crear Campaña</h1>
    <form action="?controller=shareCampaign&method=store" method="POST" enctype="multipart/form-data" >
    <section class="form-group" >
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required class="form-control" >
        </section>
        <section class="form-group">
            <label for="description">description</label>
            <input type="text" name="description" id="description" required class="form-control" >
        </section>
        <section class="form-group">
            <label for="link">link</label>
            <input type="text" name="link" id="link" required class="form-control" >
        </section>
        <section class="form-group">
            <label for="created">created</label>
            <input type="date" name="created" id="created" required class="form-control" >
        </section>
        <section class="form-group">
            <label for="expirationDate">expirationDate</label>
            <input type="date" name="expirationDate" id="expirationDate" required class="form-control" >
        </section>
        <section class="form-group">
            <label for="price">price</label>
            <input type="text" name="price" id="price" required class="form-control" >
            <input type="hidden" name="userid" id="userid" value=<?= $_SESSION{'user'}->id ?> >
        </section>
        <section class="form-group">
            <input type="submit" value="Registar" class="btn btn-green">
            <a href="?controller=shareCampaign" class="btn btn-outline-red ml-2">Volver</a>
        </section>
    </form>
</section>