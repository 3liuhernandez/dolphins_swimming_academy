/*****************************************
 *
 * SHOW DATA DATATABLE
 */
$(document).ready(function () {
    $(".preloader").fadeOut();

    $("#dataTableStudents").DataTable({
        // cambiamos el lenguaje a español
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json",
        },

        // loader mientras carga la tabla opcional
        processing: "Procesando",

        // formatiamos la fecha (Y-m-d) x ('d MMM yyyy')
        columnDefs: [
            {
                targets: 4,
                render: DataTable.render.date(/* opcional => 'd MMM yyyy' */),
            },
        ],

        // scroll vertical responsive
        scrollCollapse: true,
        paging: true,

        // agregamos el resposivo
        responsive: true,

        // mostrar de cuanto a cuanto en la tabla
        lengthMenu: [
            [5, 10, 15, 25, 50 - 1],
            [5, 10, 15, 25, 50, "All"],
        ],

        // procesamos desde Database
        /* processing: true,
        serverSide: true,
        ajax: {
            url: 'scripts/post.php',
            type: 'POST',
        },
        columns: [
            {data: 'Nombre'},
            {data: 'Posición'},
            {data: 'Localidad'},
            {data: 'Edad'},
            {data: 'Fecha'},
            {data: 'Salario'},
        ], */
    });
});

/*****************************************
 * SELECT OF IMG NUMBER INTERNATIONAL
 **/
const input = document.querySelector("#phone");
const errorMsg = document.querySelector("#error-msg");
const validMsg = document.querySelector("#valid-msg");
// Mensajes de validacion de numeros tlf
const errorMap = [
    "Número no válido",
    "Código de país no válido",
    "Demasiado corto",
    "Demasiado largo",
    "Número no válido",
];

// inicializando plugin
const iti = window.intlTelInput(input, {
    initialCountry: "auto",
    geoIpLookup: (callback) => {
        fetch("https://ipapi.co/json")
            .then((res) => res.json())
            .then((data) => callback(data.country_code))
            .catch(() => callback("us"));
    },
    utilsScript: "{{ asset('vendor/inputTel/js/inputUtils.js') }}", // just for formatting/placeholders etc
});
const reset = () => {
    input.classList.remove("error");
    errorMsg.innerHTML = "";
    errorMsg.classList.add("hide");
    validMsg.classList.add("hide");
};
// on blur: validate
input.addEventListener("blur", () => {
    reset();
    if (input.value.trim()) {
        if (iti.isValidNumber()) {
            input.classList.add("valid");
            validMsg.classList.remove("hide");
        } else {
            input.classList.add("error");
            const errorCode = iti.getValidationError();
            errorMsg.innerHTML = errorMap[errorCode];
            errorMsg.classList.remove("hide");
        }
    }
});
// on keyup / change flag: reset
input.addEventListener("change", reset);
input.addEventListener("keyup", reset);

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
    blockui( 'cargando' )
    setTimeout(() => {
        blockui_stop()
    }, 1000);

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
