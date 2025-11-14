<?php  require_once __DIR__ . '/inc/header.php'; ?>
<?php
$errors = [];
$inputs = [];

$request_method = strtoupper($_SERVER['REQUEST_METHOD']);

if ($request_method === 'GET') {
    // show the form
    require_once __DIR__ . '/inc/form.php';
} elseif ($request_method === 'POST') {
    // handle the form submission
    require_once    __DIR__ .  '/inc/post.php';
    // show the form if the error exists
    if (count($errors) > 0) {
        require_once __DIR__ . '/inc/form.php';
    }
}
?>
<?php require_once __DIR__ . '/inc/footer.php'; ?>