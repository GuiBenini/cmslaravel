<?= view('layout.header') ?>

<div class="container">
    <a href="/console/projects/list" class="btn btn-primary " >Projetos</a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>Imagem</th>
                <th>#</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <?php if($project->image): ?>
                        <img src="<?= asset($project->image) ?>" width="50">
                    <?php endif; ?>
                </td>
                <td>
                    <form method="post" action="/console/projects/image/<?= $project->id ?>" novalidate class="w3-margin-bottom" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <label for="image">Image:</label>
                        <input type="file" name="image" id="image" value="<?= old('image') ?>" required>
                        <?php if($errors->first('image')): ?>
                        <span class="w3-text-red"><?= $errors->first('image'); ?></span>
                        <?php endif; ?>
                        <button type="submit" class="bt btn-primary">Adicionar Imagem</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
    
<?= view('layout.footer') ?>