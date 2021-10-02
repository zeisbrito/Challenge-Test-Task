<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8"/>
        <title>Scandiweb Task Test</title>
        <link rel="stylesheet" href="<?php echo $this->curPageURL(); ?>css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $this->curPageURL(); ?>css/styles.css">
        <script type="text/javascript">
            function submitform()
                {
                    document.product_add.submit();
                    setTimeout("window.location.href = '<?php echo $this->curPageURL(); ?>?c=Product';", 0);
                }
            
            function massdeleteform()
                {
                    document.product_del.submit();
                    setTimeout("window.location.href = '<?php echo $this->curPageURL(); ?>?c=Product';", 0);
                }

            function productSelect()
                {
                    var sltype = $("#productType").val();

                    if(sltype == '0') {
                        $("#slnone").show();
                        $("#sldvd").hide();
                        $("#slbook").hide();
                        $("#slfurniture").hide();
                    } else if(sltype == '1') {
                        $("#slnone").hide();
                        $("#sldvd").hide();
                        $("#slbook").show();
                        $("#slfurniture").hide();
                    } else if(sltype == '2') {
                        $("#slnone").hide();
                        $("#sldvd").show();
                        $("#slbook").hide();
                        $("#slfurniture").hide();
                    } else {
                        $("#slnone").hide();
                        $("#sldvd").hide();
                        $("#slbook").hide();
                        $("#slfurniture").show();
                    }
                }
        </script>
    </head>
    <body>
