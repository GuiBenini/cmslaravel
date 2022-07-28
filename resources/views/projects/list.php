<?= view('layout.header') ?>

<div class="container">
    <?php if(session()->has('message')): ?>
        <div class="alert alert-primary" role="alert">
            <?= session()->get('message') ?>
        </div>
    <?php endif; ?>

    <a href="/console/projects/add" class="btn btn-primary " role="button" aria-disabled="true">Novo Projeto</a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>Imagem</th>
                <th>Titulo</th>
                <th>Link</th>
                <th>Categoria</th>
                <th>Criação</th>
                <th colspan="3">Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($projects as $project): ?>    
            <tr>
                <td>
                <?php if($project->image): ?>
                    <img src="<?= asset('storage/app/'.$project->image) ?>" width="50">
                <?php endif; ?>
                </td>
                <td><?= $project->title ?></td>
                <td><?= $project->url ?></td>
                <td><?= $project->type->title ?></td>
                <td><?= $project->created_at->format('M j, Y') ?></td>
                <td><a href="/console/projects/image/<?= $project->id ?>">imagem</a></td>
                <td><a href="/console/projects/edit/<?= $project->id ?>">editar</a></td>
                <td><a href="/console/projects/delete/<?= $project->id ?>">deletar</a></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= view('layout.footer') ?>