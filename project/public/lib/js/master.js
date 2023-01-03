jQuery( function() {
    console.log('ready')
})

const validate_show_cart_container = (shopping_cart) => {
    const length = shopping_cart.length;
    const $shopping_cart = $('#shopping_cart');
    if ( length ) {
        $shopping_cart.removeClass('d-none');
        preview_shopping_cart(shopping_cart);
        return false;
    }
    $shopping_cart.addClass('d-none');
}

const handle_show_shopping_cart = () => {
    const $shopping_cart = $('#shopping_cart');
    const $btn_action_handle = $shopping_cart.find('.handle_show_shopping_cart');
    const class_active = $shopping_cart.hasClass('show');

    // ocultar el carritos de compras
    if ( class_active ) {
        $shopping_cart.removeClass('show').addClass('hide');
        $btn_action_handle.removeClass('mdi-chevron-double-down').addClass('mdi-chevron-double-up');
    }
    // mostrar el carritos de compras
    else {
        $shopping_cart.removeClass('hide').addClass('show');
        $btn_action_handle.removeClass('mdi-chevron-double-up').addClass('mdi-chevron-double-down');
    }
}

const preview_shopping_cart = (shopping_cart) => {
    const $shopping_cart = $('#shopping_cart');
    const count_products = shopping_cart.length
    const $body_cart = $shopping_cart.find('.body');
    const $foot_cart = $shopping_cart.find('.foot');
    $body_cart.empty();
    $foot_cart.empty();

    // nro de productos
    $body_cart.append(`
        <div class="row">
            <span>nro de productos: </span>
            <span>${count_products}</span>
        </div>
    `);

    // total a pagar
    $('#product_js_file').ready( function() {
        const total_pagar = calculate_total_pagar(shopping_cart);
        $body_cart.append(`
            <div class="row">
                <span>total a pagar: </span>
                <span>${total_pagar}</span>
            </div>
        `);
    
        // boton ver detalles
        $foot_cart.append(`
            <div class="row">
                <button class="btn" role="button"> ver pedido </button>
            </div>
        `);
    
        // boton generar pedido
        $foot_cart.append(`
            <div class="row">
                <button class="btn" role="button"> Confirmar pedido </button>
            </div>
        `);
    });
}

const calculate_total_pagar = (shopping_cart) => {
    let total = 0;
    shopping_cart.forEach(product => {
        const product_data = get_product(product.cod_product)
        total += (product_data.price * product.cant);
    });
    return total;
}