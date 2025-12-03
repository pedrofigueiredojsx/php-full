<?php
// Pega o caminho da URL
$requestedPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestedPath = ltrim($requestedPath, '/');

// Se solicitou um arquivo PHP específico, executa ele
if ($requestedPath && file_exists($requestedPath)) {
  if (pathinfo($requestedPath, PATHINFO_EXTENSION) === 'php') {
    include $requestedPath;
    exit;
  }
}

// Caso contrário, mostra o navegador
$currentDir = ($requestedPath && is_dir($requestedPath)) ? $requestedPath : '.';
$files = scandir($currentDir);

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Navegador de Arquivos</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      background: #f5f5f5;
    }

    .container {
      background: white;
      padding: 20px;
      border-radius: 8px;
      max-width: 800px;
    }

    h1 {
      color: #333;
      border-bottom: 2px solid #0066cc;
      padding-bottom: 10px;
    }

    ul {
      list-style: none;
      padding: 0;
    }

    li {
      padding: 10px;
      margin: 5px 0;
      border-radius: 4px;
    }

    li:hover {
      background: #f0f0f0;
    }

    a {
      text-decoration: none;
      color: #0066cc;
      display: block;
    }

    a:hover {
      color: #004499;
    }

    .back {
      background: #e3f2fd;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>📂 <?php echo $currentDir === '.' ? 'Raiz' : $currentDir; ?></h1>

    <?php if ($currentDir !== '.'): ?>
      <ul>
        <li class="back">
          <a href="/<?php echo dirname($currentDir) === '.' ? '' : dirname($currentDir); ?>">
            ⬆️ Voltar
          </a>
        </li>
      </ul>
    <?php endif; ?>

    <ul>
      <?php
      $folders = [];
      $phpFiles = [];

      foreach ($files as $file) {
        if ($file === '.' || $file === '..' || $file === basename(__FILE__)) continue;

        $fullPath = $currentDir . '/' . $file;
        $urlPath = $currentDir === '.' ? $file : $currentDir . '/' . $file;

        if (is_dir($fullPath)) {
          $folders[] = ['name' => $file, 'path' => $urlPath];
        } elseif (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
          $phpFiles[] = ['name' => $file, 'path' => $urlPath];
        }
      }

      // Mostra pastas
      foreach ($folders as $folder): ?>
        <li>📁 <a href="/<?php echo $folder['path']; ?>"><strong><?php echo $folder['name']; ?>/</strong></a></li>
      <?php endforeach;

      // Mostra arquivos PHP
      foreach ($phpFiles as $phpFile): ?>
        <li>📄 <a href="/<?php echo $phpFile['path']; ?>"><?php echo $phpFile['name']; ?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
</body>

</html>