<?= view('layout.header') ?>

<div class="container">
<a href="/console/types/list" class="btn btn-primary " role="button" >Categorias</a>
        <hr>
            <h2>Adicionar Categoria</h2>

            <form method="post" action="/console/types/add" novalidate class="w3-margin-bottom">
                <?= csrf_field() ?>
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" value="<?= old('title') ?>" required>
                    
                    <?php if($errors->first('title')): ?>
                        <span class="w3-text-red"><?= $errors->first('title'); ?></span>
                    <?php endif; ?>
                
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
<?= view('layout.footer') ?>