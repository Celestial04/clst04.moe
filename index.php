<?php require('assets/init.php'); ?>

<body>
    <div class="index header">
        <h1><?php echo htmlspecialchars($_['index.header.title']); ?></h1>
        <h2><?php echo htmlspecialchars($_['index.header.subtitle.1']); ?></h2>
        <h3><?php echo htmlspecialchars($_['index.header.subtitle.2']); ?></h3>
    </div>
    <div class="index body">
        <div class="index body about">
            <h4><?php echo htmlspecialchars($_['index.body.about.title']); ?></h4>
            <p><?php echo htmlspecialchars($_['index.body.about.desc']); ?></p>
        </div>
    </div>
    <?php require __DIR__ . '/assets/UI/footer.php'; ?>
</body>