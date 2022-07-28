<?= view('layout.header') ?>

<div class="container">
<a href="/console/projects/list" class="btn btn-primary " role="button" >Projetos</a>
    <hr>

            <h2>Adicionar Projeto</h2>

            <form method="post" action="/console/projects/add" novalidate class="w3-margin-bottom">
                <?= csrf_field() ?>

                    <label for="title">Titulo:</label>
                    <input type="title" name="title" id="title" value="<?= old('title') ?>" required>
                    
                    <?php if($errors->first('title')): ?>
                        <span class="w3-text-red"><?= $errors->first('title'); ?></span>
                    <?php endif; ?>

                    <label for="url">link:</label>
                    <input type="url" name="url" id="url" value="<?= old('url') ?>">
                    <?php if($errors->first('url')): ?>
                        <span class="w3-text-red"><?= $errors->first('url'); ?></span>
                    <?php endif; ?>

                    <label for="slug">url:</label>
                    <input type="text" name="slug" id="slug" value="<?= old('slug') ?>" required>

                    <?php if($errors->first('slug')): ?>
                        <span class="w3-text-red"><?= $errors->first('slug'); ?></span>
                    <?php endif; ?>

                    <label for="content">Descrição:</label>
                    <textarea name="content" id="content" required><?= old('content') ?></textarea>

                    <?php if($errors->first('content')): ?>
                        <span class="w3-text-red"><?= $errors->first('content'); ?></span>
                    <?php endif; ?>

                    <label for="type_id">Tipo:</label>
                    <select name="type_id" id="type_id">
                        <option></option>
                        <?php foreach($types as $type): ?>
                            <option value="<?= $type->id ?>"
                                <?= $type->id == old('type_id') ? 'selected' : '' ?>>
                                <?= $type->title ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <?php if($errors->first('type_id')): ?>
                        <span class="w3-text-red"><?= $errors->first('type_id'); ?></span>
                    <?php endif; ?>

                    <button type="submit" class="btn btn-success">Salvar</button>

            </form>

<?= view('layout.footer') ?>