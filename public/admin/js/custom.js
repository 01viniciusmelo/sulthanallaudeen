$(document).ready(function() {
    console.log("ready!");
    $('.js-sweetalert').on('click', function() {
        var type = $(this).data('type');
        if (type === 'basic') {
            showBasicMessage();
        } else if (type === 'with-title') {
            showWithTitleMessage();
        } else if (type === 'success') {
            showSuccessMessage();
        } else if (type === 'confirm') {
            showConfirmMessage();
        } else if (type === 'cancel') {
            showCancelMessage();
        } else if (type === 'with-custom-icon') {
            showWithCustomIconMessage();
        } else if (type === 'html-message') {
            showHtmlMessage();
        } else if (type === 'autoclose-timer') {
            showAutoCloseTimerMessage();
        } else if (type === 'prompt') {
            showPromptMessage();
        } else if (type === 'ajax-loader') {
            showAjaxLoaderMessage();
        }
    });

});