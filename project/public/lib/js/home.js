
jQuery( () => {
    // pintar los productos destacados
    // productos destacados
    const PRODUCTS_FEATURED = PRODUCT_LIST.filter((product) => Number(product.featured) === 1);
    print_product_list($('#products_featured'), PRODUCTS_FEATURED, 'featured')

    // pintar los productos en oferta
    // productos en ofertas
    const PRODUCTS_ON_SALE = PRODUCT_LIST.filter((product) => Number(product.offert) > 0);
    print_product_list($('#products_on_sale'), PRODUCTS_ON_SALE, 'on_sale')
})