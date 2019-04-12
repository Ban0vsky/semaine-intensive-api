const loginImage = document.querySelector('.loginImage')
const background = document.querySelector('.map')
const history = document.querySelector('.history')
const leaderboard = document.querySelector('.leaderboard')
const friendList = document.querySelector('.friendList')
const historyData = document.querySelector('.historyData')
const leaderboardData = document.querySelector('.leaderboardData')
const friendListData = document.querySelector('.friendListData')
const downBarInfos = document.querySelector('.downBarInfos')
let closeButton = document.querySelectorAll('.closeButton')
const profilePage = document.querySelector('.profilePage')
const profileData = document.querySelector('.profileData')
const killAccount = document.querySelector('.killAccount')
const killAccountData = document.querySelector('.killAccountData')
const deleteAccountButton = document.querySelector('.deleteAccountButton')
const deleteAccountValidation = document.querySelector('.quitValidation')
const addFriendButton = document.querySelector('.addFriendButton')
const addFriendData = document.querySelector('.addFriendData')
const notificationButton = document.querySelector('.notificationButton')
const friendRequestData = document.querySelector('.friendRequestData')
const rotationDisclaimer = document.querySelector('.rotationDisclaimer')

deleteAccountButton.addEventListener('click', () => {
  killAccount.classList.add('visible')
  killAccountData.classList.add('visible')
  profilePage.classList.remove('visible')
})



loginImage.addEventListener('click', () => {
  let visible = document.querySelectorAll('.visible')
  for (var i = 0; i < visible.length; i++) 
  {
      visible[i].classList.remove('visible')
  }
  profilePage.classList.add('visible')
  profileData.classList.add('visible')
})



history.addEventListener('click', () => {
  let visible = document.querySelectorAll('.visible')
  for (var i = 0; i < visible.length; i++) 
  {
    visible[i].classList.remove('visible')
  }
  historyData.classList.add('visible')
  downBarInfos.classList.add('visible')
})

leaderboard.addEventListener('click', () => {
  let visible = document.querySelectorAll('.visible')
  for (var i = 0; i < visible.length; i++)  
  {
    visible[i].classList.remove('visible')
  }
  leaderboardData.classList.add('visible')
  downBarInfos.classList.add('visible')
})

friendList.addEventListener('click', () => {
  let visible = document.querySelectorAll('.visible')
  for (var i = 0; i < visible.length; i++) 
  {
    visible[i].classList.remove('visible')
  }
  friendListData.classList.add('visible')
  downBarInfos.classList.add('visible')
})



background.addEventListener('click', () => {
  let visible = document.querySelectorAll('.visible')
  for (var i = 0; i < visible.length; i++) 
  {
    visible[i].classList.remove('visible')
  }
})

addFriendButton.addEventListener('click', () => {
  let visible = document.querySelectorAll('.visible')
  for (var i = 0; i < visible.length; i++) 
  {
    visible[i].classList.remove('visible')
  }
  addFriendData.classList.add('visible')
  downBarInfos.classList.add('visible')
})

notificationButton.addEventListener('click', () => {
  let visible = document.querySelectorAll('.visible')
  for (var i = 0; i < visible.length; i++) 
  {
    visible[i].classList.remove('visible')
  }
  friendRequestData.classList.add('visible')
})

for (var j = 0; j < closeButton.length; j++) {
  closeButton[j].addEventListener('click', () => {
    let visible = document.querySelectorAll('.visible')
    for (var i = 0; i < visible.length; i++) 
    {
      visible[i].classList.remove('visible')
    }
  })
}


setTimeout(function() {
  window.addEventListener('orientationchange', function() 
  {
    if(window.innerWidth < window.innerHeight)
    {
      rotationDisclaimer.style.display="flex"
      rotationDisclaimer.style.opacity="1"
    }
    else
    {
      rotationDisclaimer.style.display="none"
      rotationDisclaimer.style.opacity="0"
    }
  });
}, 1000);