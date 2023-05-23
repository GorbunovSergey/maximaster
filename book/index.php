<?php $title = 'Гостевая книга' ?>
<?php require_once "blocks/header.php" ?>
<div class="container">
    <h1>Гостевая книга</h1>
    <form action="saveMessages.php" method="post">
        <input type="hidden" name="date" class="form-control">
        <input type="text" name="name" placeholder="Введите имя" class="form-control">

        <textarea name="message" placeholder="Введите сообщение" class="form-control"></textarea>

        <input type="submit" class="form-control btn btn-danger">
        <div class="showMessage form-control">
            <?php require_once "showMessage.php" ?>
        </div>
    </form>
</div>


<footer>
<?php require_once "blocks/footer.php" ?>
