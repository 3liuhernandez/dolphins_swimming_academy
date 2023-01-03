
const show_toast = (text) => {
    const $toast_template = $('#toast_msg');
    $toast_template.find('.toast-body').text(text);
    const toast = bootstrap.Toast.getOrCreateInstance($toast_template);
    toast.show();
}