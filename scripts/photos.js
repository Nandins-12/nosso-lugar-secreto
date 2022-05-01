const imagesControl = {
    score: document.querySelectorAll('.score'),
    divImg: document.querySelectorAll('.carrousel'),
}

const Modal = {
    modalOverlay: document.querySelector('.modal-overlay'),
    divImg: document.querySelector('.modal div'),
    img: document.querySelector('.modal div img'),
    currentTranslate: 0,
    score: document.querySelector('.modal div .score'),
    
    toggleModal(numberDivImg) {
        this.modalOverlay.classList.toggle('active');
        document.body.classList.toggle('body-no-overflow');

        this.modalOverlay.classList.contains('active') ? this.addImage(numberDivImg) : this.removeImg()

        if (this.modalOverlay.classList.contains('active') == false) {
            this.img.setAttribute('style', 'transform: translate(0);')
            this.currentTranslate = 0
            this.score.innerHTML = ''
            this.divImg.removeAttribute('style')
        }

        this.buttonVerification()
    },

    addImage(numberDivImg) {
        //Div selecionada da Array de divs resgatada no Objeto Literal imagesControl
        let selectedDiv = imagesControl.divImg[numberDivImg]

        //Recuperando os atributos da imagem selecionada
        let {src} = selectedDiv.querySelector('img').attributes
        let {slider} = selectedDiv.attributes
        
        this.img.setAttribute('src', src.value)
        this.divImg.setAttribute('slider', slider.value)
        this.divImg.setAttribute('currentSlide', 1)

        if (src.value == 'assets/images/aniversariodela.png') {
            this.divImg.setAttribute('style', 'display: flex; justify-content: center;')
        }

        
        this.score.innerHTML = `${this.divImg.getAttribute('currentSlide')}/${this.divImg.getAttribute('slider')}`
    },
    
    removeImg() {
        this.divImg.removeAttribute('src')
        this.divImg.removeAttribute('slider')
        this.divImg.removeAttribute('currentSlide')
    },

    nextImg() {
        if (this.divImg.getAttribute('currentSlide') < this.divImg.getAttribute('slider')) {
            this.img.setAttribute('style', `transform: translate(${this.currentTranslate - 281.11}px);`)

            this.currentTranslate += -281.11

            this.divImg.setAttribute('currentSlide', Number(this.divImg.getAttribute('currentSlide')) + 1)

            this.buttonVerification()
        }
    },

    previewImg() {
        if (this.divImg.getAttribute('currentSlide') > 1) {
            this.img.setAttribute('style', `transform: translate(${this.currentTranslate + 281.11}px);`)

            this.currentTranslate += 281.11

            this.divImg.setAttribute('currentSlide', Number(this.divImg.getAttribute('currentSlide')) - 1)

            this.buttonVerification()
        }
    },

    buttonVerification() {
        if (this.divImg.getAttribute('currentSlide') == 1) {
            document.querySelector('.modal i.fa-angle-left').setAttribute('style', 'opacity: 0.4;')
        } else {
            document.querySelector('.modal i.fa-angle-left').setAttribute('style', 'opacity: 1;')
        }
    
        if (this.divImg.getAttribute('currentSlide') == this.divImg.getAttribute('slider')) {
            document.querySelector('.modal i.fa-angle-right').setAttribute('style', 'opacity: 0.4;')
        } else {
            document.querySelector('.modal i.fa-angle-right').setAttribute('style', 'opacity: 1;')
        }

        this.updateScore()
    },

    updateScore() {
        this.score.innerHTML = `${this.divImg.getAttribute('currentSlide')}/${this.divImg.getAttribute('slider')}`
    }
}

imagesControl.divImg.forEach(div => {
    let score = div.querySelector('.score')

    if (div.getAttribute('slider') >= div.getAttribute('currentSlide')) {
        score.innerHTML = `${div.getAttribute('currentSlide')}/${div.getAttribute('slider')}`
    }
})

setInterval(function() {
    imagesControl.divImg.forEach(div => {
        let img = div.querySelector('img')
        let score = div.querySelector('.score')
        
        if (div.getAttribute('slider') >= div.getAttribute('currentSlide')) {
            img.setAttribute('style', `transform: translate(${div.getAttribute('currentSlide')*-225}px);`)
            
            let formatNewCurrent = Number(div.getAttribute('currentSlide')) + 1
            div.setAttribute('currentSlide', formatNewCurrent)   
        }

        if (div.getAttribute('currentSlide') > div.getAttribute('slider')) {
            img.setAttribute('style', 'transform: translate(0);')
            div.setAttribute('currentSlide', 1)
        }

        if (div.getAttribute('currentSlide') <= div.getAttribute('slider')) {
            score.innerHTML = `${div.getAttribute('currentSlide')}/${div.getAttribute('slider')}` 
        }
    })
}, 5500);

document.querySelectorAll('.carrousel img').forEach((img, i) => {
    img.addEventListener('click', function() {Modal.toggleModal(i)});
});

window.addEventListener('load', () => {
    document.querySelector('#animation_loading').style.display = 'none';
    document.querySelector('main').style.display = 'block';
    document.querySelector('footer').style.display = 'flex';
});