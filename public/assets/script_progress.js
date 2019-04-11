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
const progressBar = document.querySelector('.progressBar')
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


stopButton.addEventListener('click', () =>
{
  let visible = document.querySelectorAll('.visible')
for (var i = 0; i < visible.length; i++) {
    visible[i].classList.remove('visible')
    console.log("yes")
  }
  progressBar.classList.remove('visibleImportant')
  endScreen.classList.add('visible')
  endScreenData.classList.add('visible')
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
for (var i = 0; i < visible.length; i++) {
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
})