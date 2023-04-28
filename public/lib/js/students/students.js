/**
 * GUARDAR ESTUDIANTE
 */

const get_data_student_form = () => {
    const $form = $('#form_student_register');

    const data_register = new FormData;
    const $data_serialize = $form.serializeArray();

    for (const field in $data_serialize) {
        if (Object.hasOwnProperty.call($data_serialize, field)) {
            const field_element = $data_serialize[field];
            data_register.append(field_element.name, field_element.value);
        }
    }

    return data_register;
}

const validate_form_register = (data) => {
    let validation_register = true;

    clean_error_inputs();

    for (const field in data) {
        if (Object.hasOwnProperty.call(data, field)) {
            const value = data[field];
            if ( value === "" ) {
                $(`input[name="${field}"]`).addClass('is-invalid');
                empty_fields();
                console.log('field', field)
                validation_register = false;
            }
        }
    }

    return validation_register;
}

const clean_error_inputs = () => {
    $('#form_register input.field').removeClass('is-invalid');
}

jQuery( () => {
    $('#submit_student_register').on('click', function(e) {
        e.preventDefault;

        // block page
        $(this).attr('disabled', true);
        blockUi();

        const data = get_data_student_form();
        const validate = validate_form_register(data);


        // unlock page
        // stopBlockUi();
        $(this).removeAttr('disabled');
        return false;
    })
})