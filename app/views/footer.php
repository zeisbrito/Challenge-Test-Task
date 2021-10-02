        <script type="text/javascript" src="<?php echo $this->curPageURL(); ?>js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="<?php echo $this->curPageURL(); ?>js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo $this->curPageURL(); ?>js/jquery.validate.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#product_form").validate({
                    rules: {
                        name: {
                            required: true,
                            maxlength: 100,
                            minlength: 2
                        }
                    }
                })
            })
        </script>

</body>
</html>