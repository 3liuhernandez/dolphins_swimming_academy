/**
 * FUNC START BLOCK UI
 */
const blockUi = () => {
    $.blockUI();
	NProgress.start();
}
//
/*============================*/




/**
 * This function ini the blockUI
 * @returns false;
 */
const fnLoadblockUI = function() {
    $.blockUI.defaults.css = {
        padding: 0,
        margin: 0,
        width: '30%',
        top: '40%',
        left: '35%',
        textAlign: 'center',
        cursor: 'wait'
    };
    $.blockUI.defaults.message = '<span></span>';
    return false;
}
//
/*============================*/




fnLoadblockUI();





/**
 * FUNC STOP BLOCK UI
 */
const stopBlockUi = () => {
    $.unblockUI();
	NProgress.done();
}
//
/*============================*/





/**
 * This function init the nprogress plugin
 * @returns false
 */
var fnnprogressIni = function() {
    NProgress.configure({
        template: '<div class="bar" role="bar"><div class="peg"></div></div>'
    });
    return false;
}
fnnprogressIni();
//
/*============================*/