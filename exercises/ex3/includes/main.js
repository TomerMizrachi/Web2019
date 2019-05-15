var blackButton = document.getElementById("button");
var boxesSec = document.getElementById("boxes-sec");
var counter = 0;
var numerator = 0;
var lettersSet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M'];
var boxArr = [];
var lettersArr = [];
var picks = [];
var aside = document.getElementById("green");
var rectangle = document.getElementById("yellow");
var footer = document.getElementById("line");
        
function createBoxes() {
    numerator += 1;
    for (var i = 0; i < 3; i++) {
            var box = document.createElement("div");
            box.setAttribute('class', 'newBox');
            var size = 80 + counter * 20;
            counter += 1;
            box.style.width = `${size}px`;
            box.style.height = `${size}px`;
            boxesSec.appendChild(box);
            boxArr.push(box);
            
        
            var letter = document.createElement("div");
            letter.setAttribute('class', 'letter');
            letter.style.marginTop = `${size}` * 0.30 + 'px';
            letter.style.fontSize = `${size}` * 0.30 + 'px';
            if( numerator%2 == 1){
                lettersArr.push(lettersSet[Math.floor(Math.random() * lettersSet.length)]); 
                letter.innerHTML = lettersArr[lettersArr.length-1];
            }
            else{
                letter.innerHTML = lettersArr[i];
            }
            box.appendChild(letter);

            letter.setAttribute('value', letter.innerHTML);

            box.addEventListener("click", choose);
        }
};


var choose = function () {

    this.firstChild.className = 'letter-show';    
    picks.push(this);

    if (picks.length == 2){
        if (checkpicks()){
            picks[0].className = 'winBox';
            picks[1].className = 'winBox';
            picks = [];
        }else{
            setTimeout( hide ,1000);
        }
    }
}

function checkpicks(){
    if (picks[0].firstChild.innerHTML == picks[1].firstChild.innerHTML){
        return true;
    }
    return false;
}

function hide(){
    picks[0].firstChild.className = 'letter';
    picks[1].firstChild.className = 'letter';        
    picks = [];
}