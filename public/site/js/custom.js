//animação dos itens
const target = document.querySelectorAll('[data-anime]');
const animationClass = 'animate';

function animeScroll(){
    ///distancia entre a barra e o topo do site
    const windowTop = window.pageYOffset + (window.innerHeight*3)/4; //1268

    target.forEach( (e) => {

        if((windowTop) > e.offsetTop){
            e.classList.add(animationClass);

        }else{
            e.classList.remove(animationClass);
        }

    });
}
window.addEventListener('scroll', function(){
    animeScroll();
});

date = new Date();
year = date.getFullYear();
document.getElementById("ano").innerHTML = year;


/// adicionando o script do botao
const btnMobile = document.getElementById('btnMobile');

btnMobile.addEventListener('click', toggleMenu);

function toggleMenu(){
    const nav = document.getElementById('nav');
    nav.classList.toggle('active');
}
const phrases =  [
    "Desenvolvedor Web",
    "Desenvolvedor Mobile",
    "UX / UI Designer",
    "Gerenciamento de projetos",
    "Análise e avaliação de sistemas",
    "Melhoria continua",
    "Criatividade",

]
let currentPhraseIndex = 0;
let currentCharacterIndex = 0;

function type() {
    const typingEffect = document.getElementById("typingEffect");
    const currentPhrase = phrases[currentPhraseIndex];

    if (currentCharacterIndex < currentPhrase.length) {
        typingEffect.textContent += currentPhrase.charAt(currentCharacterIndex);
        currentCharacterIndex++;
        setTimeout(type, 100); // Adjust the typing speed here (milliseconds)
    } else {
        setTimeout(erase, 1000); // Wait before starting to erase
    }
}

function erase() {
    const typingEffect = document.getElementById("typingEffect");

    if (typingEffect.textContent.length > 0) {
        typingEffect.textContent = typingEffect.textContent.slice(0, -1);
        setTimeout(erase, 50); // Adjust the erasing speed here (milliseconds)
    } else {
        currentPhraseIndex = (currentPhraseIndex + 1) % phrases.length;
        currentCharacterIndex = 0;
        setTimeout(type, 0.1); // Wait before typing the next phrase
    }
}

type(); // Start the typing effect
