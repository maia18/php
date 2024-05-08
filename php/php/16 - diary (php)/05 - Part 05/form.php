<?php

require __DIR__ . '/inc/functions.inc.php';
require __DIR__ . '/inc/db-connect.inc.php';

if (!empty($_POST)) {
    $title = (string) ($_POST['title'] ?? '');
    $date = (string) ($_POST['date'] ?? '');
    $message = (string) ($_POST['message'] ?? '');

    $stmt = $pdo->prepare('INSERT INTO `entries` (`title`, `date`, `message`) VALUES (:title, :date, :message)');
    $stmt->bindValue(':title', $title);
    $stmt->bindValue(':date', $date);
    $stmt->bindValue(':message', $message);
    $stmt->execute();

    echo '<a href="index.php">Continue to the diary</a>';
    die();
}

?>
<?php require __DIR__ . '/views/header.view.php'; ?>
<h1 class="main-heading">New Entry</h1>

<form method="POST" action="form.php">
    <div class="form-group">
        <label class="from-group__label" for="title">Title:</label>
        <input class="from-group__input" type="text" id="title" name="title" required />
    </div>
    <div class="form-group">
        <label class="from-group__label" for="date">Date:</label>
        <input class="from-group__input" type="date" id="date" name="date" required/>
    </div>
    <div class="form-group">
        <label class="from-group__label" for="message">Message:</label>
        <textarea class="from-group__input" id="message" name="message" rows="6" required></textarea>
    </div>
    <div class="form-submit">
        <button class="button">
            <svg class="button__icon" viewBox="0 0 34.7163912799 33.4350009649">
                <g style="fill: none; stroke: currentColor; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px;">
                    <polygon points="20.6844359446 32.4350009649 33.7163912799 1 1 10.3610302393 15.1899978903 17.5208901631 20.6844359446 32.4350009649"/>
                    <line x1="33.7163912799" y1="1" x2="15.1899978903" y2="17.5208901631"/>
                </g>
            </svg>
            Save!
        </button>
    </div>
</form>
<?php require __DIR__ . '/views/footer.view.php'; ?>
