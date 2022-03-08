const button = document.querySelector('#exibir');
const input = document.querySelector('#password');
//Estas senha é só pros mais leigos não conseguirem acessar mesmo, se você deu um f12 e conseguiu achar a senha aqui, parabens, você é o cara.
const senha = 'cu';

button.addEventListener('click', function() {
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


document.querySelector('.password-form button').addEventListener('click', () => {
    const senha_digitada = document.getElementById('password').value;

    if(senha_digitada != senha) {
        document.querySelector('p.error').innerText = 'Senha incorreta!';
    } else {
        document.querySelector('.container-password').classList.remove('active');
        document.querySelector('.container-textinho').classList.add('active');
    }
});