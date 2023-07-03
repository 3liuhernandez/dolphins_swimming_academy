
/*****************************************
 * FUNC START BLOCK UI
 */

const blockui = (msg = false) => {
    $.blockUI({ message: `  ${msg}  ` });
    NProgress.start();
    $(document).css("overflow", "hidden");
};

/*****************************************
 * FUNC STOP BLOCK UI
 */

const blockui_stop = () => {
    setTimeout(() => {
        $.unblockUI();
        NProgress.done();
    }, 500);
};

/*****************************************
 * FUNC STOP BLOCK UI STYLE
 */

const fnLoadblockUI = function () {
    $.blockUI.defaults.css = {
        padding: 0,
        margin: 0,
        width: "30%",
        top: "40%",
        left: "35%",
        textAlign: "center",
        cursor: "wait",
        color: "#fff",
        fontSize: "3rem",
        textTransform: "oblique",
        textDecoration: "underline",
        fontStyle: "italic",
        zIndex: "1025",
    };
    $.blockUI.defaults.message = "<span></span>";
    return false;
};

/*****************************************
 *SHOW TEXT ALERT AL COMPONENT
 */
jQuery(() => {
    fnLoadblockUI();

    () => {
        NProgress.configure({
            template:
                '<div class="bar" role="bar"><div class="peg"></div></div>',
        });
    };

    // mensaje flotante de tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // show_toast('mensaje que va en el toast');
    blockui("")
    blockui_stop();

    setTimeout(() => {
        $(".preloader").fadeOut();
    }, 500);

    $("#element").click(function () {
        $.blockUI({
            css: {
                border: "none",
                padding: "15px",
                backgroundColor: "#000",
                "-webkit-border-radius": "10px",
                "-moz-border-radius": "10px",
                opacity: 0.5,
                color: "#fff",
            },
        });
        setTimeout($.unblockUI, 2000);
    });
});
