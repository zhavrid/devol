document.addEventListener('wpcf7mailsent', function (event) {
    let form = document.getElementById(event.detail.unitTag);
    let wpcf7ElmSentContact = form.parentElement.parentElement.querySelector('.thx');
    console.log(form);
    console.log(wpcf7ElmSentContact);

    if (wpcf7ElmSentContact !== null && form !== null) {
        form.style.display = 'none';
        wpcf7ElmSentContact.style.display = 'block';
    }
}, false);