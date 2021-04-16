<?php include __DIR__ . './Parts/config.php'; ?>
<?php include __DIR__ . './Parts/html.header.php'; ?>
<?php include __DIR__ . './Parts/navBar.php'; ?>
<div class="container">
    <div class="row">
        <pre>
            <?php print_r($_POST) ?>
        </pre>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form method="post" name="form1">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value = "<?= empty($_POST['email']) ? '' : htmlentities($_POST['email']) ?>"

                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value = "<?= empty($_POST['password']) ? '' : htmlentities($_POST['password']) ?>"
                </div>
                <div class="form-group">
                    <label for="nyDate">Date</label>
                    <input type="datetime-local" class="form-control" id="myDate" name="myDate" value = "<?= empty($_POST['password']) ? '' : htmlentities($_POST['password']) ?>"
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>
</div>

<?php include __DIR__ . './Parts/scripts.php'; ?>
<?php include __DIR__ . './Parts/html-footer.php'; ?>