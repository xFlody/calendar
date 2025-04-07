<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Plánovací Kalendář</title>
  <link rel="manifest" href="manifest.json" />
  <link rel="icon" href="icon.png" type="image/png">
  <meta name="theme-color" content="#ff0000" />
  <?php include './style.php'; ?>
</head>
<body>
  <h1>Plánovací Kalendář</h1>
  <p>Verze: <b>v11</b></p>

  <script>
    if ('serviceWorker' in navigator) {
      navigator.serviceWorker.register('service-worker.js').then(reg => {
        reg.onupdatefound = () => {
          const newWorker = reg.installing;
          newWorker.onstatechange = () => {
            if (newWorker.state === 'activated') {
              if (navigator.serviceWorker.controller) {
                window.location.reload();
              }
            }
          };
        };
      });
    }
  </script>
</body>
</html>
