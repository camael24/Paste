<?php
$this->inherits('hoa://Application/View/Layout/Base.tpl.php');

$this->block('style');
    echo '<link type="text/css" href="/Css/form.css" rel="stylesheet" />';
$this->endblock();

$this->block('content');
?>

    <form action="/paste/" method="post">
    <h3>Please fill all the texts in the fields.</h3>
    <label>
        <span>Title :</span>
        <input id="title" type="text" name="title" placeholder="Title" value="<?php echo (isset($title)) ? $title : ''; ?>" />
    </label>
    <label>
        <span>Paste (*):</span>
        <textarea id="content" name="content" placeholder="Your paste" required="true" class="<?php echo (isset($content_error)) ? 'error' : ''; ?>"></textarea>
    </label>
     <label>
        <span>&nbsp;</span>
        <input type="submit" class="button" value="Send" />
    </label>
</form>
<?php
$this->endBlock();
