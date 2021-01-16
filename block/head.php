<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" href="/img/favicon.ico">
    <title><?=$titleweb?></title>
    <?php // include 'analitics.php' ?>
  </head>
  <body>
    <nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="/" aria-label="Product">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
        </a>
        <? if ($_COOKIE ['login'] ==''): ?>
            <a class="py-2 d-none d-md-inline-block" href="">Займ дня</a>
          <?php else: ?>
            <a class="py-2 d-none d-md-inline-block" href="/products/add_loan.php">Добавить займ</a>
            <a class="py-2 d-none d-md-inline-block" id='exit' href="/ajax/exit.php">Выйти</a>
            <a class="py-2 d-none d-md-inline-block" id='exit' href="/admin.php">Админка</a>
          <?php endif; ?>
      </div>
    </nav>
  </body>
