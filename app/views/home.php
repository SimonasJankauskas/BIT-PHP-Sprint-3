<?php require VIEW_ROOT . '/templates/header.php';?>
    <button class="admin-btn"><a style="text-decoration: none; color: inherit;" href="<?php echo BASE_URL; ?>/admin/login.php">Admin</a></button>
    <?php if(empty($pages)): ?>
    <p>Sorry, no pages at the moment</p>
    <?php else: ?>
    <ul>
        <?php foreach ($pages as $page): ?>
            <li style="list-style-type: square; text-transform:capitalize; color: inherit;"><a style="text-decoration: none;" href="<?php echo BASE_URL;?>/page.php?page=<?php echo $page['slug']?>"><?php echo $page['label'];?></a></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
<?php require VIEW_ROOT . '/templates/footer.php'?>
 

