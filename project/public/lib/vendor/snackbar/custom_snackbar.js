
const snackbar = (type, text, position = 'right') => {

    $('#snackbar_container').css('z-index', 1200);
    const $snackbar_container = $('#snackbar_container .cont-'+position);
    const $snackbar = $('<div class="snackbar show" />').html(text).addClass(type);
    $snackbar_container.append($snackbar);
    setTimeout( () => {
        $snackbar.removeClass("show");
        $snackbar.remove();
        $('#snackbar_container').css('z-index', 1);
    }, 3000);
}