<!-- Llamo a los partials que contienen el head y el nav de la página web -->
<?php include __DIR__ . '/partials/inicio-doc.part.php' ?>

<?php include __DIR__ . '/partials/nav.part.php' ?>

<!-- Principal Content Start -->
<div id="galeria">
    <div class="container">
        <div class="col-xs-12 col-sm-8 col-sm-push-2">
            <h1>GALERIA</h1>
            <hr>
            <!-- Código php que muestra los errores de la página galeria -->
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>

                <div class="alert alert-<?= empty($errores) ? 'info' : 'danger'; ?> alert-dismissibre" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                    <?php if (empty($errores)) : ?>
                        <p><?= $mensaje ?></p>
                    <?php else : ?>
                        <ul>
                            <?php foreach ($errores as $error) : ?>
                                <li><?= $error ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            <?php endif; ?>


            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="imagenes-galeria/nueva">
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Imagen</label>
                        <input class="form-control-file" type="file" name="imagen"></input>
                    </div>
                </div>
                <!-- Código PHP que crea los options del select Categoria -->
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Categoria</label>
                        <select class="form-control" name="categoria">
                            <?php foreach ($categorias as $categoria) : ?>
                                <option value="<?= $categoria->getId() ?>">
                                    <?= $categoria->getNombre() ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Descripcion</label>
                        <textarea class="form-control" name="descripcion"><?= $descripcion ?></textarea>
                        <button class="pull-right btn btn-lg sr-button">Enviar</button>
                    </div>
                </div>
            </form>
            <hr class="divider">
            <div class="imagenes_galeria">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Visualizaciones</th>
                            <th scope="col">Likes</th>
                            <th scope="col">Descargas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Código que crea las filas de las tablas de la tabla de galeria utilizando la varialbe $imagenes
                         que almacena  las imagenes de la base de datos en el fichero galaria.php-->
                        <?php foreach ($imagenes as $imagen): ?>
                            <tr>
                                <th scope="row"><?= $imagen->getId() ?></th>
                                <td><img src="<?= $imagen->getUrlGallery() ?>"
                                        alt="<?= $imagen->getDescripcion() ?>"
                                        title="<?= $imagen->getDescripcion() ?>"
                                        width="100px"></td>
                                <td><?= $categorias[$imagen->getCategoria() - 1]->getNombre() ?></td>
                                <td><?= $imagen->getNumVisualizaciones() ?></td>
                                <td><?= $imagen->getNumLikes() ?></td>
                                <td><?= $imagen->getNumDownloads() ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Principal Content Start -->
<!-- Patial que contiene los scripts finales de la página -->
<?php include 'partials/fin-doc.part.php' ?>