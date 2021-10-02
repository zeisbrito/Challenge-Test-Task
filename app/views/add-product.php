<?php include_once "header.php" ?>
        <div id="interface">
            <header id="headerProduct">
                <h1>Product Add</h1>
                <div id="buttons_sc">
                    <a href="javascript: submitform()" class="btn btn-outline-secondary">SAVE</a>
                    <a href="<?php echo $this->curPageURL(); ?>?c=Product" class="btn btn-outline-secondary">CANCEL</a>
                </div>
            </header>
            <section id="bodySection">
                <div id="addPage">
                    <form id="product_form" name="product_add" method="POST" action="<?php echo $this->curPageURL(); ?>app/controllers/Sendpdo.php">
                        <div class="form-group row">
                            <div class="col-md-3"><label for="sku">SKU</label></div>
                            <div class="col"><input type="text" name="sku" id="sku" placeholder="Product SKU" required/></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3"><label for="name">Name</label></div>
                            <div class="col"><input type="text" name="name" id="name" placeholder="Product name" required/></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3"><label for="price">Price ($)</label></div>
                            <div class="col"><input type="number" step="0.01" name="price" id="price" placeholder="Product price" required/></div>
                        </div></br>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="type">Type Switcher</label>
                            </div>
                            <div class="col">
                                <select class="type-control" name="type" id="productType" onchange="productSelect();" required>
                                    <option selected disabled>Select product type</option>
                                    <option value="1" id="book">Book</option>
                                    <option value="2" id="dvd">DVD</option>
                                    <option value="3" id="furniture">Furniture</option>
                                </select>
                            </div>
                        </div></br>
                        <div class="form-group">
                            <div id="slnone">
                                <div class="row">
                                    <div class="col">Please, select a product type!</div>
                                </div>
                            </div>
                            <div id="sldvd" style="display: none;">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="size">Size (MB)</label>
                                    </div>
                                    <div class="col">
                                        <input type="number" step="0.01" name="size" id="size" value="" placeholder="Product size"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">Please, provide product size in MB!</div>
                                </div>
                            </div>
                            <div id="slbook" style="display: none;">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="weight">Weight (KG)</label>
                                    </div>
                                    <div class="col">
                                        <input type="number" step="0.001" name="weight" id="weight" value="" placeholder="Product weight"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">Please, provide product weight in KG!</div>
                                </div>
                            </div>
                            <div id="slfurniture" style="display: none;">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="height">Height (CM)</label>
                                    </div>
                                    <div class="col">
                                        <input type="number" step="0.01" name="height" id="height" value="" placeholder="Product height"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="width">Width (CM)</label>
                                    </div>
                                    <div class="col">
                                        <input type="number" step="0.01" name="width" id="width" value="" placeholder="Product width"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="length">Length (CM)</label>
                                    </div>
                                    <div class="col">
                                        <input type="number" step="0.01" name="length" id="length" value="" placeholder="Product length"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">Please, provide product dimensions in HxWxL format!</div>
                                </div>
                            </div>
                            <div class="row">
                                <input type="reset" value="Clear">
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <footer id="footerProduct">
                <p>Scandiweb Test Assignment</p>
            </footer>
        </div>
<?php include_once "footer.php" ?>
