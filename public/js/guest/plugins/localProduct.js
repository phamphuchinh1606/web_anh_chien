define(['jquery','underscore','api_jquery'],function($,_){

    function _render()
    {
        if(localStorage.getItem("savedProduct"))
        {
            var arrProduct = JSON.parse(localStorage.getItem("savedProduct"));
            if(arrProduct.length > 0)
            {
                //console.log(JSON.stringify(arrProduct));
                var tpl = _.template($("#tpl-saved-product").html());
                $("#saved-product-bottom").html(tpl({items:arrProduct}));
                $("#saved-product-bottom").show();
            }

        }
        else{

        }
    }

    return{
        save:function (product) {
            var savingProduct = {
                id: product.id,
                name:product.title,
                alias:product.handle,
                price:product.price,
                compare_at_price_max:product.compare_at_price_max,
                img: product.featured_image ? product.featured_image : ''
            };
            var arrProduct =  [];
            if(localStorage.getItem("savedProduct"))
            {
                arrProduct = JSON.parse(localStorage.getItem("savedProduct"));
            }
            var isHasInArr = false;
            for(var i = 0; i < arrProduct.length;i++)
            {
                if(arrProduct[i].id == savingProduct.id)
                {
                    isHasInArr = true;
                    break;
                }
            }
            if(!isHasInArr)
            {
                arrProduct.unshift(savingProduct);
            }
            arrProduct = _.first(arrProduct, 4);
            localStorage.setItem("savedProduct", JSON.stringify(arrProduct));
            _render();
        },
        render: function () {
            _render();
        }
    }
});