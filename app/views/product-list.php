<?php include_once "header.php" ?>
        <div class="container" id="interface">
        <header id="headerProduct">
            <h1>Product List</h1>
            <div id="buttons_ad">
                <a href="<?php echo $this->curPageURL(); ?>?c=Product&a=new" class="btn btn-outline-secondary">ADD</a>
                <a href="javascript: massdeleteform()" id="delete-product-btn" class="btn btn-outline-secondary">MASS DELETE</a>
            </div>
        </header>
        <section id="bodySection">
            <div class="row">
                <form id="product_delform" name="product_del" method="POST" action="<?php echo $this->curPageURL(); ?>?c=Product">
                <ul id="product-list">
                <?php
                    foreach ($products as $product):
                ?>
                    <div class="col" style="display: block;">
                        <li id="product-x">
                            <spam>
                                <div class="row input-group mb-2"><input type="checkbox" class="delete-checkbox" id="mass-delete-input" value="<?= $product->getSku(); ?>"></div>
                                <?= $product->getSku(); ?>
                                </br><?= $product->getName(); ?>
                                </br><?= $product->getPrice(); ?>
                                </br><?= $product->getInfos(); ?>
                            </spam>
                        </li>
                    </div>
                <?php
                    endforeach;
                ?>
                </ul>
                </form>
            </div>
        </section>
        <footer id="footerProduct">
            <p>Scandiweb Test Assignment</p>
        </footer>
        </div>
<?php include_once "footer.php"; ?>
