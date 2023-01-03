jQuery(() => {
    // combos de productos
    // const PRODUCT_COMBO_LIST = PRODUCT_LIST.filter((p) => Number(p.category_cod) === Number(category_combo));

    // pintar los combos de productos
    // print_product_list($('#product_combos'), PRODUCT_COMBO_LIST);

    // pintar productos en el carrito de compras
    // print_products_in_cart(SHOPPING_CART)
})

const get_product = (cod_product) => {
    if (!PRODUCT_LIST) {
        setTimeout(() => {
            get_product(cod_product)
        }, 2000);
    }
    return PRODUCT_LIST.find(p => Number(p.code) === Number(cod_product));
}

const print_product_list = ($container, product_list, type_product) => {
    const length_productos = product_list.length;
    let counter_products = 0;

    product_list.forEach(product => {
        if (type_product === 'featured') {
            $container.append(feature_products_slick_template(product))
            counter_products++;
            if (counter_products == Number(length_productos)) {
                // activar slick
                start_slick_featured_product()
            }
        }

        if (type_product === 'on_sale') {
            $container.append(on_sale_products_slick_template(product))
            counter_products++;
            if (counter_products == Number(length_productos)) {
                // activar slick
                start_slick_products_on_sale()
            }
        }

        if (type_product === 'single_product') {
            $container.append(box_product_single_template(product))
        }

    });

    // enable listener click function
    handle_events_products();
}

/*
<input
    type="number"
    step="1"
    class="product_change_cant"
    value="${product_in_cart.cant??1}"
    data-change_product_cant="${product_in_cart.cant}"
    data-change_product_code="${product.code}"
>

<h4 class="title_combo d-none">${product.name}</h4>

<div class="overlay_combo2 overlay_container">
    <button class="btn_combo_overlay">ver combo</button>
</div>
*/

/**
 *
 * BOTON AUMENTO / DECREMENTO
 * <table border ="1">
        <tr>
        <td> Producto </td>
        <td> Precio </td>
        <td> Cantidad </td>
        <td> Importe </td>
        </tr>
            <tr>
            <td> Inka Cola de 350ml x1 </td>
            <td> 5.20 </td>
            <td>
            <span class="input-group-btn">
            <button class="btn btn-default" id="menos" type="button">-</button> 
            </span>
            <input type="text" style="width:50px;text-align: center;" id="contador" class="form-control" value="1">
            <span class="input-group-btn">
            <button class="btn btn-default" id="mas" type="button">+</button> 
            </span>
            </td>
            <td> 
            <input type="text" style="width:50px;text-align: center;" value="5.20" disabled>
            </td>
        </tr>
    </table>
 */





/** PRODUCTS TEMPLATES */
// template de los productos destacados en el slick del home.
const feature_products_slick_template = (product) => {
    console.log('product', product)

    const product_in_cart = check_if_product_in_cart(product.code);
    const selected_class = product_in_cart ? 'selected' : '';

    let product_in_cart_tag = '';
    if (selected_class) {
        // update local variable for products in cart
        PRODUCTS_IN_CART.push(product);

        product_in_cart_tag = `
        <div
            class="row remove_item_container"
            data-bs-toggle="popover"
            title="En el carrito"
            data-bs-content="El producto ya se encuentra en el carrito de compras"
        >
            <i class="mdi mdi-cart-check"></i>
        </div>
        `
    }

    return `
    <div data-item_prod="${product.code}" class="${selected_class} d-flex justify-content-center align-content-center">
        <div class="box-card border rounded-bottom">
            <div class="product_img">
                <img src="${product.product_image}" class="img-fluid" alt="imagen producto ${product.name}">
                ${product_in_cart_tag}
            </div>
            <div class="text-inf">
                <h5 class="m-0">${product.name}</h5>
                <div class="d-flex flex-column">
                    <span class="fw-bold mb-1">${product.bs_price} Bs.</span>
                    <span class="fw-bold">${product.dollar_price} <span class=""></span></span>
                </div>
            </div>
            <div class="w-100">
                <button data-add_product="${product.code}" class="btn rounded-0 rounded-bottom btn-sm _btncarrito">Añadir al carrito</button>
            </div>
        </div>
    </div>
    `;
}

const combo_product_template = (product) => {
    const product_in_cart = check_if_product_in_cart(product.code);
    const selected_class = product_in_cart ? 'selected' : '';
    let product_in_cart_tag = '';
    if (selected_class) {
        // update local variable for products in cart
        PRODUCTS_IN_CART.push(product);

        product_in_cart_tag = `
        <div
            class="row remove_item_container"
            data-bs-toggle="popover"
            title="En el carrito"
            data-bs-content="El producto ya se encuentra en el carrito de compras"
        >
            <i class="mdi mdi-cart-check"></i>
        </div>
        `
    }
    return `
    <div class="col col_combo ${selected_class}" data-item_prod="${product.code}">
        <div class="overlay_combo overlay_container combo_overlay_add" style="position: relative">
            <button class="btn_combo_overlay btn_combo_overlay_add" data-add_product="${product.code}">Añadir al carrito &nbsp; <i class="h4 mdi mdi-cart-plus"></i></button>
        </div>

        <div class="combo_img">
            <img src="${ASSET_URL}imgs/products/combos/${product.image}" alt="${product.name}" />
            ${product_in_cart_tag}
        </div>
        <h5 class="price_combo d-none">xx.xx$</h5>
    </div>
    `;
}

const on_sale_products_slick_template = (product) => {
    const product_in_cart = check_if_product_in_cart(product.code);
    const selected_class = product_in_cart ? 'selected' : '';

    let product_in_cart_tag = '';
    if (selected_class) {
        // update local variable for products in cart
        PRODUCTS_IN_CART.push(product);

        product_in_cart_tag = `
        <div
            class="row remove_item_container"
            data-bs-toggle="popover"
            title="En el carrito"
            data-bs-content="El producto ya se encuentra en el carrito de compras"
        >
            <i class="mdi mdi-cart-check"></i>
        </div>
        `
    }

    return `
        <div data-item_prod="${product.code}" class="${selected_class} d-flex justify-content-center align-content-center p-0" tabindex="-1" role="option" aria-describedby="slick-slide64" data-slick-index="4" aria-hidden="true">
            <div class="box-card border rounded-bottom position-relative">
                <div class="oferta position-absolute">
                    <h6 class="m-0 p-0">Oferta</h6>
                </div>
                <div class="product_img">
                    <img src="${product.product_image}" class="img-fluid" alt="imagen producto ${product.name}">
                    ${product_in_cart_tag}
                </div>
                <div class="text-inf">
                    <h5 class="m-0">${product.name}</h5>
                    <div class="d-flex flex-column text-center">
                        <span class="fw-bold">${product.bs_price} Bs.</span>
                        <span class="fw-bold">${product.dollar_price}</span>
                    </div>
                </div>
                <div class="w-100">
                    <button data-add_product="${product.code}"  class="btn rounded-0 rounded-bottom btn-sm _btncarrito">Añadir al carrito</button>
                </div>
            </div>
        </div>
    `;
}

const box_product_single_template = (product) => {

    const product_in_cart = check_if_product_in_cart(product.code);
    const selected_class = product_in_cart ? 'selected' : '';

    let product_in_cart_tag = '';
    if (selected_class) {
        // update local variable for products in cart
        PRODUCTS_IN_CART.push(product);

        product_in_cart_tag = `
        <div
            class="row remove_item_container"
            data-bs-toggle="popover"
            title="En el carrito"
            data-bs-content="El producto ya se encuentra en el carrito de compras"
        >
            <i class="mdi mdi-cart-check"></i>
        </div>
        `
    }

    return `
        <div data-item_prod="${product.code}" class="${selected_class} d-flex justify-content-center align-content-center">
            <div class="box-card border rounded-bottom">
                <div class="product_img">
                    <img src="${product.product_image}" class="img-fluid" alt="imagen producto ${product.name}">
                    ${product_in_cart_tag}
                </div>
                <div class="text-inf">
                    <h5 class="m-0">${product.name}</h5>
                    <div class="d-flex flex-column">
                        <span class="fw-bold mb-1">${product.bs_price} Bs.</span>
                        <span class="fw-bold">${product.dollar_price}</span>
                    </div>
                </div>
                <div class="w-100">
                    <button data-add_product="${product.code}" class="btn rounded-0 rounded-bottom btn-sm _btncarrito">Añadir al carrito</button>
                </div>
            </div>
        </div>
    `;
}
/** END PRODUCTS TEMPLATES */



/**  PRODUCTS IN CART */
const print_products_in_cart = (products) => {
    const $body = $('#inner_cart .body');
    products.forEach(p => {
        const data_product = PRODUCT_LIST.find(pl => Number(pl.code) === Number(p.cod_product));
        data_product.cant = p.cant;
        console.log('data_product', data_product)
        $body.append(product_in_cart_template(data_product))
    })
}

const product_in_cart_template = (product) => {

    return `
        <div class="row">
            <span class="product_name">${product.name}</span>
            <div class="product_cant_container">
                <button class="btn btn-danger product_btn_action_cant" data-action="remove" data-cod_product="${product.code}"> - </button>
                <strong class="cant_in_cart">${product.cant}</strong>
                <button class="btn btn-primary product_btn_action_cant" data-action="add" data-cod_product="${product.code}"> + </button>
            </div>
        </div>
    `;
}
const add_tag_in_cart_to_product = (cod_product) => {
    if ($(`[data-item_prod="${cod_product}"]`)) {
        const $product_container = $(`[data-item_prod="${cod_product}"]`);

        // set as selected product
        if ($product_container.hasClass('selected')) {
            console.log(`el producto ${cod_product} ya esta agregado al carrito`);
            return false;
        }

        $product_container.addClass('selected');

        // const $container_target = $product_container.find('.combo_img');
        const $container_target = $product_container.find('.product_img');
        $container_target.append(`
        <div
            class="row remove_item_container"
            data-bs-toggle="popover"
            title="En el carrito"
            data-bs-content="El producto ya se encuentra en el carrito de compras"
        >
            <i class="mdi mdi-cart-check"></i>
        </div>
        `);
    }
}

const check_if_product_in_cart = (cod_product) => {
    return SHOPPING_CART.find((p) => Number(p.cod_product) === Number(cod_product));
}

const add_item_shopping_cart = (cod_product) => {

    add_tag_in_cart_to_product(cod_product);
    const check_product_into_cart = check_if_product_in_cart(cod_product)

    if (!check_product_into_cart) {
        axios.post(SHOPPING_ADD_URL, {
            'cod_product': cod_product,
            'cant': 1
        })
            .then(({ data }) => {
                console.log('data', data)
                const { cart, status } = data;
                SHOPPING_CART = cart;
                // SHOPPING_CART_LENGTH = SHOPPING_CART.length;
                return false;
            })
            .catch(({ response }) => {
                console.log('response', response)
                const { status } = response
                if (status === 419) {
                    window.location.href = RELOGIN;
                }

                return false;
            })
            .then(() => {
                console.log('product added')
                console.log('SHOPPING_CART', SHOPPING_CART)
                // validate_show_cart_container(SHOPPING_CART, PRODUCT_LIST)

                // actualizar el contador de productos
                update_badge_cart(SHOPPING_CART.length)
            });
    }

    return false;
}

const remove_item_shopping_cart = (cod_product) => {
    const check_product_into_cart = check_if_product_in_cart(cod_product)

    if (check_product_into_cart) {
        axios.post(SHOPPING_REMOVE_URL, {
            'cod_product': cod_product,
            'cant': 1
        })
            .then(({ data }) => {
                console.log('data', data)
                const { cart, status } = data;
                SHOPPING_CART = cart;
            })
            .catch(({ response }) => {
                console.log('response', response)
                const { status } = response
                if (status === 419) {
                    window.location.href = RELOGIN;
                }
            })
            .then(() => {
                console.log('product removed')
                console.log('SHOPPING_CART', SHOPPING_CART)
            });
    }
}
/**  END PRODUCTS IN CART */



/** PRODUCT' EVENTS */
const handle_events_products = () => {
    $('[data-add_product]').click(function (e) {
        e.preventDefault();
        const cod_product = $(this).data('add_product');
        add_item_shopping_cart(cod_product);
    });

    $('.product_change_cant').change(function () {
        const { change_product_cant, change_product_code } = $(this).data();
        const new_cant = $(this).val();
        console.log('first', [
            change_product_cant,
            change_product_code,
            new_cant
        ])
    })
}
/** END PRODUCT' EVENTS */




/** FUNCTIONS HELPERS */
const set_class_product_selected = (cod_product) => {
    $(`[data-item_prod="${cod_product}"]`).addClass('selected');
}

const remove_class_product_selected = (cod_product) => {
    $(`[data-item_prod="${cod_product}"]`).removeClass('selected');
}

/** END FUNCTIONS HELPERS */