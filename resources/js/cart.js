const { default: axios } = require('axios');

const cart_remove_product = document.querySelectorAll(".cart_remove_product");
if (cart_remove_product && cart_remove_product.length > 0) {
    for (var i = 0; i < cart_remove_product.length; i++) {
        cart_remove_product[i].addEventListener('click', function(event) {
            event.preventDefault();
            const product_id = event.target.id;
            const options = {
                method: 'delete',
                url: "/cart",
                data: {
                    product_id: product_id
                }
            };

            axios(options).then(res => {
                // console.log(res);
                window.location.href = "/cart";
            }).catch(err => {
                console.log(err);
            });
        });
    }
}