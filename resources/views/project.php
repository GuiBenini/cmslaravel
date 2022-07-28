
<?= view('layout.header') ?>

<div class="container">
    <h2 ><?= $project->title ?></h2>

    <?php if($project->image): ?>
        <img src="<?= asset($project->image) ?>" width="400">
    <?php endif; ?>

    <p><?= $project->content ?></p>

    <?php if($project->url): ?>
        Veja mais no link: <a href="<?= $project->url ?>"><?= $project->url ?></a>
    <?php endif; ?>

    Adicionado em: <?= $project->created_at->format('M j, Y') ?>
    Categoria: <?= $project->type->title ?>
</div>
<?= view('layout.footer') ?>