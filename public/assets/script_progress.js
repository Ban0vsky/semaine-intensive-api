const login = document.querySelector('.login')
const launch = document.querySelector('.launch')
let timer = document.querySelector('.timer')
const progressBar = document.querySelector('.progressBar')
const validate = document.querySelector('.validate')
let name = document.querySelector('.name')
let address = document.querySelector('.address')
let ongoingBirzNumber = document.querySelector('.ongoingBirzNumber')
const currentAdress = document.querySelector('.currentAdress')
const endScreen = document.querySelector('.endScreen')
const stopButton = document.querySelector('.stopButton')
const endScreenData = document.querySelector('.endScreenData')
let finalScore = document.querySelector('.finalScore')
let recapBirz = document.querySelector('.recapBirz')
let recapTime = document.querySelector('.recapTime')
let recapBars = document.querySelector('.recapBars')
let transfertScore = document.querySelector('.transfertScore')







launch.addEventListener('click', () =>
{
  let visible = document.querySelectorAll('.visible')
  for (var i = 0; i < visible.length; i++) 
  {
    visible[i].classList.remove('visible')
    console.log("yes")
  }
  let visibleImportant = document.querySelectorAll('.visibleImportant')
  for (var i = 0; i < visibleImportant.length; i++) {
    visibleImportant[i].classList.remove('visibleImportant')
    console.log("yes")
  }
  progressBar.classList.add('visibleImportant')
  currentAdress.classList.add('visibleImportant')
  chronoStart()
})

stopButton.addEventListener('click', () =>
{
  let visible = document.querySelectorAll('.visible')
  for (var i = 0; i < visible.length; i++) 
  {
    visible[i].classList.remove('visible')
    console.log("yes")
  }
  progressBar.classList.remove('visibleImportant')
  currentAdress.classList.remove('visibleImportant')
  endScreen.classList.add('visible')
  endScreenData.classList.add('visible')
  chronoStop()
  finalScore.innerHTML = "Score : " + finalScoreCount
  recapBirz.innerHTML = "Vous avez bu " + ongoingBirzNumberCount + " verre(s) "
  recapTime.innerHTML = "en l'espace de " + hr + " heure(s), " + min + " minute(s) et " + sec + " seconde(s) ! <br><br>"
  recapBars.innerHTML = "Vous avez écumé les bars suivants : <br>" 
  for (let m = 0 ; m<barsDone.length ; m++){
    recapBars.innerHTML = recapBars.innerHTML + barsDone[m] + ", "
  }
  transfertScore.setAttribute('value', finalScoreCount)

})

let startTime = 0
let start = 0
let end = 0
let diff = 0
let timerID = 0
let hr = 0
let min = 0
let sec = 0

function chrono(){
	end = new Date()
	diff = end - start
	diff = new Date(diff)
	sec = diff.getSeconds()
	min = diff.getMinutes()
	hr = diff.getHours()-1
	if (min < 10){
		min = "0" + min
	}
	if (sec < 10){
		sec = "0" + sec
	}
	timer.innerHTML = hr + ":" + min + ":" + sec 
	timerID = setTimeout("chrono()", 10)
}

function chronoStart(){
	start = new Date()
	chrono()
}

let finalScoreCount = 0

function chronoStop(){
  let totalTime = hr + ":" + min + ":" + sec
  clearTimeout(timerID)
  console.log(totalTime)
  console.log(barsDone)
  console.log(ongoingBirzNumberCount)
  finalScoreCount = Math.ceil(ongoingBirzNumberCount * barsDone.length * 1000 / ((hr*3600)+(min*60)+(sec)))
}

let ongoingBirzNumberCount = 0
let barsDone = []

validate.addEventListener(
  'click',
  function(){
    ongoingBirzNumberCount++
    ongoingBirzNumber.innerHTML = ongoingBirzNumberCount
    if (barsDone.indexOf(name.innerHTML)==-1)
    {
      barsDone.push(name.innerHTML)
    }
  }
)

