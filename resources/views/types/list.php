<?= view('layout.header') ?>

<div class="container">

    <?php if(session()->has('message')): ?>
        <div class="alert alert-primary" role="alert">
            <?= session()->get('message') ?>
        </div>
    <?php endif; ?>

    <a href="/console/types/add" class="btn btn-success ">Nova Categoria</a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>Nome</th>
                <th colspan="2">Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($types as $type): ?>
                <tr>
                    <td><?= $type->title ?></td>
                    <td><a href="/console/types/edit/<?= $type->id ?>">Edit</a></td>
                    <td><a href="/console/types/delete/<?= $type->id ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


        </section>

<?= view('layout.footer') ?>