<?php 
$errors = [];
    if($exception) {
            $message = [
            'type' => 'error',
            'message' =>$exception
        ];

        // if (get_class($exception) === 'ValidationException') {
        //     $errors = $exception->getErrors();
        // }
    }
$alertType = "";

if ($message['type'] == 'error') {
    $alertType = 'danger';
} else if ($message['type'] == 'warning') {
    $alertType = 'warning';
} else {
    $alertType = 'success';
}

?>
<?php if($message): ?>
    <div class="my-3 alert alert-<?=$alertType?>" role="alert">
        <?= $message['message'] ?>
    </div>
<?php endif; ?>