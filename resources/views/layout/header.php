<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>- CMS -</title>
    <link rel="stylesheet" href="<?= url('app.css') ?>">

</head>

<body>

<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="https://emerebenelli.com.br/images/dime/dime-white.svg" width="60" alt="Agência DIME">
        <span class="fs-4">CMS - Laravel</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="../../" class="nav-link active" aria-current="page">Home</a></li>
        <?php if(Auth::check()): ?> 
          <li class="nav-item"><a href="../console/logout" class="nav-link">Sair</a></li>
        <?php else: ?>
          <li class="nav-item"><a href="console/login" class="nav-link">Login</a></li>
        <?php endif; ?> 
      </ul>
    </header>
  </div>