<?= view('layout.header') ?>

<div class="container">

        <?php if(session()->has('message')): ?>
            <div class="alert alert-primary" role="alert">
                <?= session()->get('message') ?>
            </div>
        <?php endif; ?>

    <a href="/console/users/add" class="btn btn-primary " >Adicionar Usuario</a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Data Inclusão</th>
                <th colspan="2">Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user->first ?> <?= $user->last ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->created_at->format('M j, Y') ?></td>
                    <td><a href="/console/users/edit/<?= $user->id ?>">editar</a></td>
                    <td><a href="/console/users/delete/<?= $user->id ?>">deletar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


<?= view('layout.footer') ?>