<?php include __DIR__. '/Parts/config.php'; ?>
<?php

$title = '我的主頁';

$person = [
        [
                'name' => 'Bill',
                'age' => 27,
                'gender' => 'male',
        ],
    [
        'name' => 'David',
        'age' => 25,
        'gender' => 'male',
    ],
    [
            'name' => 'Flora',
            'age' => 22,
            'gender' => 'female',
    ],
    [
            'name' => 'Mary',
            'age' => 28,
            'gender' => 'female',
    ]
];

?>
<?php include __DIR__. '/Parts/html.header.php'; ?>
<?php include __DIR__. '/Parts/navBar.php.php'; ?>
<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Age</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($person as $p): ?>
        <tr>
            <td><?= $p['name'] ?></td>
            <td><?= $p['gender'] ?></td>
            <td><?= $p['age'] ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include __DIR__. '/Parts/scripts.php.php'; ?>
<?php include __DIR__. '/Parts/html-footer.php.php'; ?>

