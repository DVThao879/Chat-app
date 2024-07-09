import './bootstrap';

Echo.private('notifications')
    .listen('UserSessionChanged', (e) => {
        console.log({e});
        const notiElement = document.getElementById('notification')

        notiElement.innerText = e.message

        notiElement.classList.remove('invisible');
        notiElement.classList.remove('alert-success');
        notiElement.classList.remove('alert-danger');
        notiElement.classList.add('alert-'+e.tyle)
        console.log(notiElement.classList);
    })
