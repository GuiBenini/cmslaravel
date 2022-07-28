<?= view('layout.header') ?>
<div class="container">

    <a href="/console/types/list" class="btn btn-primary " >Categorias</a>
    <hr>
    <h2>Editar <?= old('title', $type->title) ?></h2>

    <form method="post" action="/console/types/edit/<?= $type->id ?>" novalidate class="w3-margin-bottom">
        <?= csrf_field() ?>
        <label for="title">Titulo:</label>
        <input type="text" name="title" id="title" value="<?= old('title', $type->title) ?>" required>
        <?php if($errors->first('title')): ?>
            <div class="alert alert-primary" role="alert">
                <?= $errors->first('title'); ?>
        </div>
        <?php endif; ?>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
<hr>
<?= view('layout.footer') ?>