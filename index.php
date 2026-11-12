<?php require('assets/init.php');?>
<body>
    <div class="index header">
        <h1><?php echo htmlspecialchars($_['index.title']); ?></h1>
        <h2><?php echo htmlspecialchars($_['index.subtitle']); ?></h2>
        <h3><?php echo htmlspecialchars($_['index.subtitle.subtitle']); ?></h3>
    </div>
    <?php require __DIR__ . '/assets/UI/footer.php'; ?>
    <?= htmlspecialchars(substr($commit['hash'], 0, 7)) ?>
</body>