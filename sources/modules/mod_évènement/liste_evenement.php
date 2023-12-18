<body>
    <div class="data-container">
        <?php foreach ($arr as $key => $value): ?>
            <div class="data-entry">
                <h3 class="data-key"><?php echo htmlspecialchars($key); ?></h3>
                <?php if (is_array($value)): ?>
                    <div class="data-value-container">
                        <?php foreach ($value as $subKey => $subValue): ?>
                            <div class="data-sub-entry">
                                <span class="data-sub-key"><?php echo htmlspecialchars($subKey); ?>:</span>
                                <span class="data-sub-value"><?php echo htmlspecialchars($subValue); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>
<style>

.data-container {

    max-height: 500px;
}
</style>
</html>
