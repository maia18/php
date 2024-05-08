<h1>Admin: Manage pages</h1>

<table style="min-width: 100%;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($pages AS $page): ?>
            <tr>
                <td><?php echo e($page->id); ?></td>
                <td><?php echo e($page->title); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>