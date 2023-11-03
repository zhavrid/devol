document.addEventListener('wpcf7mailsent', function (event) {
    let form = document.getElementById(event.detail.unitTag);
    let footerForm = form.parentElement.querySelector('.thnx');

    if (footerForm !== null && form !== null) {
        form.style.display = 'none';
        footerForm.style.display = 'block';
    }
}, false);