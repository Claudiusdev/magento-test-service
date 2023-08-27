require([
    'jquery',
    'mage/url',
    'Magento_Ui/js/modal/alert'
], function ($, url, alert) {
    'use strict';
    $(document).ready(function(){
        var base_url = window.location.origin;
        var pathArray = window.location.pathname.split( '/' );
        var linkUrl = base_url+"/"+pathArray[1]+"/"+"service/quantity/get";

        $( "#sync-wms" ).on( "click", function() {
            var sku = $('input[name="product[sku]"]').val();

            $.ajax({
                type: "POST",
                url: linkUrl,
                dataType: 'json',
                showLoader: true,
                data: {
                    sku: sku
                },
                success: function (response) {
                    var error = response && response.error;

                    if (error) {
                        alert({
                            title: $.mage.__('Error'),
                            content: $.mage.__(response.messages),
                            actions: {
                                always: function(){}
                            }
                        });
                    } else {
                        var quanityField = $('input[name="product[quantity_and_stock_status][qty]"]');
                        quanityField.val(response.quantity).trigger( "input" );
                        alert({
                            title: $.mage.__('Quantity updated succesfully'),
                            content: $.mage.__(response.messages),
                            actions: {
                                always: function(){}
                            }
                        });
                    }
                },
                error: function (response) {
                    console.log(response.error);
                }
            });

        });
    });
});