console.log("WE GOOD BROTHER")
const loginImage = document.querySelector('.loginImage')
const background = document.querySelector('.map')
const login = document.querySelector('.login')
const history = document.querySelector('.history')
const leaderboard = document.querySelector('.leaderboard')
const friendList = document.querySelector('.friendList')
const historyData = document.querySelector('.historyData')
const leaderboardData = document.querySelector('.leaderboardData')
const friendListData = document.querySelector('.friendListData')
const downBarInfos = document.querySelector('.downBarInfos')
const launch = document.querySelector('.launch')
let timer = document.querySelector('.timer')
const progressBar = document.querySelector('.progressBar')
const validate = document.querySelector('.validate')
let name = document.querySelector('.name')
let address = document.querySelector('.address')
let ongoingBirzNumber = document.querySelector('.ongoingBirzNumber')
const currentAdress = document.querySelector('.currentAdress')
let closeButton = document.querySelectorAll('.closeButton')
const profilePage = document.querySelector('.profilePage')
const profileData = document.querySelector('.profileData')
const endScreen = document.querySelector('.endScreen')
const stopButton = document.querySelector('.stopButton')
const endScreenData = document.querySelector('.endScreenData')
const killAccount = document.querySelector('.killAccount')
const killAccountData = document.querySelector('.killAccountData')
const deleteAccountButton = document.querySelector('.deleteAccountButton')
let finalScore = document.querySelector('.finalScore')
let recapBirz = document.querySelector('.recapBirz')
let recapTime = document.querySelector('.recapTime')
let recapBars = document.querySelector('.recapBars')
let transfertScore = document.querySelector('.transfertScore')


deleteAccountButton.addEventListener('click', () =>
{
  killAccount.classList.add('visible')
  killAccountData.classList.add('visible')
})

loginImage.addEventListener('click', () =>
{
  let visible = document.querySelectorAll('.visible')
for (var i = 0; i < visible.length; i++) {
    visible[i].classList.remove('visible')
    console.log("yes")
  }
  profilePage.classList.add('visible')
  profileData.classList.add('visible')
})


history.addEventListener('click', () =>
{
let visible = document.querySelectorAll('.visible')
for (var i = 0; i < visible.length; i++) {
    visible[i].classList.remove('visible')
    console.log("yes")
  }
historyData.classList.add('visible')
downBarInfos.classList.add('visible')
})

leaderboard.addEventListener('click', () =>
{
let visible = document.querySelectorAll('.visible')
for (var i = 0; i < visible.length; i++) {
    visible[i].classList.remove('visible')
    console.log("yes")
  }
leaderboardData.classList.add('visible')
downBarInfos.classList.add('visible')
})

friendList.addEventListener('click', () =>
{
let visible = document.querySelectorAll('.visible')
for (var i = 0; i < visible.length; i++) {
    visible[i].classList.remove('visible')
    console.log("yes")
  }
friendListData.classList.add('visible')
downBarInfos.classList.add('visible')
})



for (var j = 0; j < closeButton.length; j++) {
closeButton[j].addEventListener('click', () =>
{
    let visible = document.querySelectorAll('.visible')
    for (var i = 0; i < visible.length; i++) {
        visible[i].classList.remove('visible')
        console.log("yes")
      }
})
}

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
  recapBirz.innerHTML = "Vous avez bu " + ongoingBirzNumberCount + " verres "
  recapTime.innerHTML = "en l'espace de " + hr + " heures, " + min + " minutes et " + sec + " secondes ! <br><br>"
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


