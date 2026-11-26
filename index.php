<?php require('assets/init.php'); ?>
<body>
    <div class="index header">
        <h1><?php echo htmlspecialchars($_['index.header.title']); ?></h1>
        <h2><?php echo htmlspecialchars($_['index.header.subtitle.1']); ?></h2>
        <h3><?php echo htmlspecialchars($_['index.header.subtitle.2']); ?></h3>
    </div>
    <div class="index body">
        <div class="index body me">
            <h4><?php echo htmlspecialchars($_['index.body.me.title']); ?></h4>
            <p><?php echo htmlspecialchars($_['index.body.me.desc']); ?></p>
        </div>
        <p class="index body and"><?php echo htmlspecialchars($_['index.body.and']); ?></p>
        <div class="index body website">
            <h4><?php echo htmlspecialchars($_['index.body.website.title']); ?></h4>
            <p><?php echo htmlspecialchars($_['index.body.website.desc']); ?></p>
        </div>
        <p class="index body and"><?php echo htmlspecialchars($_['index.body.another']); ?></p>
        <div class="index body projects">
            <h4><?php echo htmlspecialchars($_['index.body.projects.title']); ?></h4>
            <p><?php echo htmlspecialchars($_['index.body.projects.desc']); ?></p>
        </div>
    </div>
    <?php require __DIR__ . '/assets/UI/footer.php'; ?>
</body>