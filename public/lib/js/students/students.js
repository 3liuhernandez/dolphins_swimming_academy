/**
 * GUARDAR ESTUDIANTE
 */

const get_data_student_form = () => {
    const $form = $('#form_student_register');

    const data_register = new FormData;
    const dd = {};
    const $data_serialize = $form.serializeArray();

    const age_student = get_student_age();

    for (const field in $data_serialize) {
        if (Object.hasOwnProperty.call($data_serialize, field)) {
            const field_element = $data_serialize[field];

            if ( check_if_is_field_parent(field_element.name) && age_student > 17 ) {
                continue
            }

            data_register.append(field_element.name, field_element.value);
            dd[field_element.name] = field_element.value;

        }
    }

    console.log(dd);

    return data_register;
}

const check_if_is_field_parent = (field_name) => {
    return document.querySelector(`[name="${field_name}"].field_parent`);
}

const get_student_age = () => {
    return $('#age').val();
}

const validate_form_register = (data) => {
    let validation_register = true;

    clean_error_inputs();

    for (const field of data.entries()) {
        const value = field[1];
        const field_name = field[0];

        console.log("datos", {
            value:value,
            field_name:field_name,
        });
        if ( value == "" ) {
            $(`[name="${field_name}"]`).addClass('is-invalid');
            console.log('field_name', field_name)
            validation_register = false;
        }
        
    }

    return validation_register;
}

const clean_error_inputs = () => {
    $('#form_register .field').removeClass('is-invalid');
}

const clean_form_student = () => {
    $('#form_student_register')[0].reset();
}

jQuery( () => {

    $('#add_student').on('click', function() {
        console.log('click');
        clean_form_student();
    })

    $('.field_parent').attr('disabled', true);

    $('#age').on('change', function() {
        const age = $(this).val();
        $('#submit_student_register').attr('disabled', true);
        $('#container_parents_form').addClass('d-none');
        $('.field_parent').attr('disabled', true);

        if ( age < 18 ) {
            $('#container_parents_form').removeClass('d-none');
            $('.field_parent').removeAttr('disabled');
        }

        setTimeout(() => {
            $('#submit_student_register').removeAttr('disabled');
        }, 500);

    })

    $('#submit_student_register').on('click', function(e) {
        e.preventDefault;

        // block page
        $(this).attr('disabled', true);
        blockui();

        const data = get_data_student_form();
        const validate = validate_form_register(data);

        if ( validate ) {
            handle_submit_student_form(data)
        }


        // unlock page
        blockui_stop();
        $(this).removeAttr('disabled');
        return false;
    })
})

const handle_submit_student_form = (data) => {
    console.log("data a enviar",data);
}