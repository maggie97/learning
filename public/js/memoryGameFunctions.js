
let hasFlippedCard = false;
let lockBoard = false;
let firstCard, secondCard;
var aciertos = 0;
var points = 0;
function flipCard(id){
    card = document.getElementById(id);
    if (lockBoard) return;
    if (card === firstCard) return;

    card.classList.toggle('flip');

    if(!hasFlippedCard){
        //first click
        hasFlippedCard = true;
        firstCard = card;
        return;
    }
     //second click 
     secondCard = card;

     checkForMatch();
}

function checkForMatch(){
    let isMatch = firstCard.dataset.framework === secondCard.dataset.framework;

    isMatch ? disableCards()  : unflipCards();
}

function disableCards(){
    firstCard.removeEventListener('click', flipCard);
    secondCard.removeEventListener('click', flipCard);
    points += 2;
    if (this.aciertos == this.points){
        alert("Ganaste");
    }
    resetBoard();
}

function unflipCards(){
    lockBoard = true;

    setTimeout(() => {
        firstCard.classList.remove('flip');
        secondCard.classList.remove('flip');

        resetBoard();
    },1500)
}

function resetBoard(){
    [hasFlippedCard, lockBoard] = [false, false];
    [firstCard, secondCard] = [null, null];
}

window.onload = function(){
    cards = document.getElementsByClassName('memory-card');
    for ( c of cards) {
        let randomPos = Math.floor(Math.random() * 12);
        c.style.order = randomPos;
    }
    this.aciertos = cards.length / 2;
}