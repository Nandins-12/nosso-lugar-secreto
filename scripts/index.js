const button = document.querySelector('#exibir');
const input = document.querySelector('#password');

button.addEventListener('click', function() {
    console.log(input.getAttribute('type'))
    switch (input.getAttribute('type')) {
        case 'text':
            input.setAttribute('type', 'password');
            button.classList.replace('fa-eye-slash', 'fa-eye');
            break;
        case 'password':
            input.setAttribute('type', 'text');
            button.classList.replace('fa-eye', 'fa-eye-slash');
        break;
    }
});

input.addEventListener('focus', function() {input.setAttribute('placeholder', '');})
input.addEventListener('blur', function() {input.setAttribute('placeholder', 'Digite a senha maneira!');})