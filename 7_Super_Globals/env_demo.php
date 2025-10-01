<?php
// env_demo.php

// Start of PHP: handle form submit to set an environment variable for demo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // sanitize basic input (for demo only)
    $key = trim($_POST['key'] ?? '');
    $value = trim($_POST['value'] ?? '');

    if ($key !== '') {
        // putenv affects the current PHP process environment (demo only)
        putenv("$key=$value");

        // update $_ENV array for the current request (so print_r shows it)
        $_ENV[$key] = $value;

        $message = "Environment variable '$key' set for this request.";
    } else {
        $message = "Please provide a variable name.";
    }
}

// Optional: show a specific key lookup (from GET param) safely
$lookup = $_GET['lookup'] ?? '';
$lookupValue = $lookup ? getenv($lookup) : null;
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>$_ENV Demo</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>
    body { font-family: Arial, sans-serif; padding: 20px; }
    label { display:block; margin-top:10px; }
    input[type=text] { width:300px; padding:6px; }
    pre { background:#f4f4f4; padding:10px; border-radius:6px; overflow:auto; }
    .note { color:#555; margin-top:10px; font-size:0.9em; }
  </style>
</head>
<body>

  <h1>PHP $_ENV Demo with HTML</h1>

  <?php if (!empty($message)): ?>
    <p><strong><?php echo htmlspecialchars($message); ?></strong></p>
  <?php endif; ?>

  <form method="post" action="">
    <label>Variable name:
      <input type="text" name="key" placeholder="e.g. MY_VAR">
    </label>
    <label>Value:
      <input type="text" name="value" placeholder="e.g. Hello123">
    </label>
    <button type="submit">Set env variable (for this request)</button>
  </form>

  <p class="note">
    This uses <code>putenv()</code> and updates <code>$_ENV</code> for the current PHP request only (demo).
    It does NOT permanently write to system environment or .env files.
  </p>

  <h2>All environment variables available in <code>\$_ENV</code> (current request)</h2>
  <pre><?php
    // Show $_ENV nicely. Use print_r but escape output to avoid raw HTML from env values.
    // We'll convert the print_r output to safe string.
    ob_start();
    print_r($_ENV);
    $envText = ob_get_clean();
    echo htmlspecialchars($envText);
  ?></pre>

  <h3>Lookup specific variable (uses getenv)</h3>
  <form method="get" action="">
    <label>Lookup variable name:
      <input type="text" name="lookup" placeholder="e.g. MY_VAR" value="<?php echo htmlspecialchars($lookup); ?>">
    </label>
    <button type="submit">Lookup</button>
  </form>

  <?php if ($lookup !== ''): ?>
    <p>Value of <code><?php echo htmlspecialchars($lookup); ?></code> using <code>getenv()</code>:</p>
    <pre><?php echo htmlspecialchars((string)$lookupValue); ?></pre>
  <?php endif; ?>

  <hr>
  <h4>Quick Tips</h4>
  <ul>
    <li><strong>$_ENV may be empty</strong> on some systems if <code>variables_order</code> in php.ini doesn’t include <code>E</code>. Use <code>getenv('NAME')</code> as alternative.</li>
    <li>For real projects, don't set secrets from web forms — use server config, Apache/Nginx SetEnv, or a library like <code>vlucas/phpdotenv</code>.</li>
    <li>Never echo sensitive env values (API keys, DB passwords) to the browser — it's a security risk.</li>
    <li><code>putenv()</code> affects the current PHP process only and will be lost after request ends. To persist envs, use server config or .env files.</li>
    <li>If you want to read `.env` files in PHP apps, use composer package <code>vlucas/phpdotenv</code>.</li>
  </ul>

</body>
</html>
