<?= view('layout.header') ?>
<div class="container">

    <a href="/console/projects/list" class="btn btn-primary " role="button" >Projetos</a>
    <hr>
<h2>Editar <?= old('title', $project->title) ?></h2>

    <form method="post" action="/console/projects/edit/<?= $project->id ?>" novalidate class="w3-margin-bottom">

        <?= csrf_field() ?>

            <label for="title">Titulo:</label>
            <input type="title" name="title" id="title" value="<?= old('title', $project->title) ?>" required>
            
            <?php if($errors->first('title')): ?>
                <br>
                <span class="w3-text-red"><?= $errors->first('title'); ?></span>
            <?php endif; ?>

            <label for="url">link:</label>
            <input type="url" name="url" id="url" value="<?= old('url', $project->url) ?>">

            <?php if($errors->first('url')): ?>
                <br>
                <span class="w3-text-red"><?= $errors->first('url'); ?></span>
            <?php endif; ?>

            <label for="slug">url:</label>
            <input type="text" name="slug" id="slug" value="<?= old('slug', $project->slug) ?>" required>

            <?php if($errors->first('slug')): ?>
                <br>
                <span class="w3-text-red"><?= $errors->first('slug'); ?></span>
            <?php endif; ?>

            <label for="content">Descrição:</label>
            <textarea name="content" id="content" required><?= old('content', $project->content) ?></textarea>

            <?php if($errors->first('content')): ?>
                <br>
                <span class="w3-text-red"><?= $errors->first('content'); ?></span>
            <?php endif; ?>

            <label for="type_id">Categoria:</label>
            <select name="type_id" id="type_id">
                <option></option>
                <?php foreach($types as $type): ?>
                    <option value="<?= $type->id ?>"
                        <?= $type->id == old('type_id', $project->type_id) ? 'selected' : '' ?>>
                        <?= $type->title ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <?php if($errors->first('type_id')): ?>
                <div class="alert alert-primary" role="alert">
                    <?= $errors->first('type_id'); ?>
            </div>
            <?php endif; ?>
            <button type="submit" class="btn btn-success">Salvar</button>
    </form>
<hr>
<?= view('layout.footer') ?>