<?php include __DIR__ . './Parts/config.php'; ?>
<?php
$title = '列表';

$sql = 'SELECT * FROM address_book';

$rows = $pdo->query($sql)->fetchAll();

?>
<?php include __DIR__ . './Parts/html.header.php'; ?>
<?php include __DIR__ . './Parts/navBar.php'; ?>
<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Birthday</th>
            <th scope="col">Address</th>
        </tr>
        </thead>
        <>
        <?php foreach($rows as $r): ?>
        <tr class="del">
            <td><?= $r['sid'] ?></td>
            <td><?= $r['name'] ?></td>
            <td><?= $r['email'] ?></td>
            <td><?= $r['mobile'] ?></td>
            <td><?= $r['birthday'] ?></td>
            <td><?= $r['address'] ?></td>
            <td class="trash">
                <a href="javascript:">
                    <i class="fas fa-trash-alt"></i>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>


<?php include __DIR__ . './Parts/scripts.php'; ?>
<?php include __DIR__ . './Parts/html-footer.php'; ?>
