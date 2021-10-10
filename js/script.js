$("#productType").change(function() {
    var $this, 
});

function submitform()
    {
        document.product_add.submit();
    }

function massdeleteform()
    {
        document.product_del.submit();
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