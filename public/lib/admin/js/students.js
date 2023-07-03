
/*****************************************
 *
 * SHOW DATA DATATABLE
 */

jQuery( () => {
    students_data_table();
    handle_change_inputs_form();
    handle_click_btn_submit();

    $(".field_parent").attr("disabled", true);

    $("#add_student").on("click", function () {
        console.log("click");
        clean_form_student();
    });
} );


const handle_click_btn_submit = () => {
    $("#submit_student_register").on("click", function (e) {
        e.preventDefault;

        // block page
        $(this).attr("disabled", true);
        blockui();

        const data = get_data_student_form();
        const validate = validate_form_register(data);

        if (validate) {
            handle_submit_student_form(data);
        }

        // unlock page
        blockui_stop();
        $(this).removeAttr("disabled");
        return false;
    });
}


const handle_change_inputs_form = () => {
    $("#age").on("change", function () {
        const age = $(this).val();
        $("#submit_student_register").attr("disabled", true);
        $("#container_parents_form").addClass("d-none");
        $(".field_parent").attr("disabled", true);

        if (age < 18) {
            $("#container_parents_form").removeClass("d-none");
            $(".field_parent").removeAttr("disabled");
        }

        setTimeout(() => {
            $("#submit_student_register").removeAttr("disabled");
        }, 500);
    });
}


const handle_submit_student_form = (data) => {
    console.log("data a enviar", data);

    axios.post(STUDENT_REGISTER_URL, data)
    .then( ({data}) => {
        console.log('data', data)
    })
    .catch( (error) => {
        console.log('error', error)
    })
};


const students_data_table = () => {
    $("#dataTableStudents").DataTable({
        // cambiamos el lenguaje a español
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json",
        },
    
        // loader mientras carga la tabla opcional
        processing: "Procesando",
    
        // formatiamos la fecha (Y-m-d) x ('d MMM yyyy')
        /* columnDefs: [
            {
                targets: 4,
                render: DataTable.render.date(), // opcional => 'd MMM yyyy'
            },
        ], */
    
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
}

/*****************************************
 * SELECT OF IMG NUMBER INTERNATIONAL
 **/
const input_phone = document.querySelector("#form_student_register #phone");
const phone_errorMsg = document.querySelector("#phone_error-msg");
const phone_validMsg = document.querySelector("#phone_valid-msg");
// Mensajes de validacion de numeros tlf
const phone_errorMap = [
    "Número no válido",
    "Código de país no válido",
    "Demasiado corto",
    "Demasiado largo",
    "Número no válido",
];

// inicializando plugin
const phone_iti = window.intlTelInput(input_phone, {
    initialCountry: "auto",
    geoIpLookup: (callback) => {
        fetch("https://ipapi.co/json")
            .then((res) => res.json())
            .then((data) => callback(data.country_code))
            .catch(() => callback("us"));
    },
    utilsScript: "{{ asset('vendor/inputTel/js/inputUtils.js') }}", // just for formatting/placeholders etc
});
const phone_reset = () => {
    input_phone.classList.remove("error");
    phone_errorMsg.innerHTML = "";
    phone_errorMsg.classList.add("hide");
    phone_validMsg.classList.add("hide");
};
// on blur: validate
input_phone.addEventListener("blur", () => {
    phone_reset();
    if (input_phone.value.trim()) {
        if (phone_iti.isValidNumber()) {
            input_phone.classList.add("valid");
            phone_validMsg.classList.remove("hide");
        } else {
            input_phone.classList.add("error");
            const errorCode = phone_iti.getValidationError();
            phone_errorMsg.innerHTML = phone_errorMap[errorCode];
            phone_errorMsg.classList.remove("hide");
        }
    }
});
// on keyup / change flag: reset
input_phone.addEventListener("change", phone_reset);
input_phone.addEventListener("keyup", phone_reset);






/**
 * GUARDAR ESTUDIANTE
 */
const $form_student_register = $("#form_student_register");

const get_data_student_form = () => {

    const data_register = new FormData();
    const dd = {};
    const $data_serialize = $form_student_register.serializeArray();

    const age_student = get_student_age();

    for (const field in $data_serialize) {
        if (Object.hasOwnProperty.call($data_serialize, field)) {
            const field_element = $data_serialize[field];

            if (
                check_if_is_field_parent(field_element.name) &&
                age_student > 17
            ) {
                continue;
            }

            data_register.append(field_element.name, field_element.value);
            dd[field_element.name] = field_element.value;
        }
    }

    return data_register;
};

const check_if_is_field_parent = (field_name) => {
    return document.querySelector(`[name="${field_name}"].field_parent`);
};

const get_student_age = () => {
    return $("#age").val();
};

const validate_form_register = (data) => {
    let validation_register = true;

    clean_error_inputs();

    for (const field of data.entries()) {
        const field_name = field[0];
        const value = field[1];

        if (value == "") {
            $(`[name="${field_name}"]`).addClass("is-invalid");
            console.log("field_name", field_name);
            validation_register = false;
        } else {
            $(`[name="${field_name}"]`).removeClass("is-invalid");
            $(`[name="${field_name}"]`).addClass("is-valid");
            validation_register = true;
        }
    }

    return validation_register;
};

const clean_error_inputs = () => {
    $form_student_register.find(".field").removeClass("is-invalid");
};

const clean_form_student = () => {
    $form_student_register[0].reset();
};