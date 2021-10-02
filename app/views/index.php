<?php include "header.php" ?>
<div id="interface">
    <header id="headerProduct">
        <h1>Scandiweb Task Test for Junior Developer!</h1>
    </header>
    <section id="bodySection">
        <h2><a href="<?php echo $this->curPageURL(); ?>?c=Product&a=new">Add a new product</a></h2>
        <h2><a href="<?php echo $this->curPageURL(); ?>?c=Product">Product List</a></h2>
    </section>
    <footer id="footerProduct">
        <p>Scandiweb Test Assignment</p>
    </footer>
</div>
<?php include_once "footer.php" ?>
