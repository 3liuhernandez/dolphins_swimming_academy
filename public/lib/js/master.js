/**
 * FUNC START BLOCK UI
 */
const blockui = ( msg = false ) => {

    $.blockUI({ message: `  ${msg}  `});
    NProgress.start();
    $(document).css('overflow', 'hidden');
}
/**
 * FUNC STOP BLOCK UI
 */
const blockui_stop = () => {
    $.unblockUI();
	NProgress.done();
    $(document).css('overflow', '');
}

const fnLoadblockUI = function() {
    $.blockUI.defaults.css = {
        padding: 0,
        margin: 0,
        width: '30%',
        top: '40%',
        left: '35%',
        textAlign: 'center',
        cursor: 'wait',
        color: "#fff",
        fontSize: '3rem',
        textTransform: 'oblique',
        textDecoration: 'underline',
        fontStyle: 'italic',
    };
    $.blockUI.defaults.message = '<span></span>';
    return false;
}

jQuery(() => {

    fnLoadblockUI();

    ( () => {
        NProgress.configure({
            template: '<div class="bar" role="bar"><div class="peg"></div></div>'
        });
    })

    $('[data-toggle="tooltip"]').tooltip()
})