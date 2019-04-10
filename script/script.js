console.log("WE GOOD BROTHER")
const loginImage = document.querySelector('.loginImage')
const signupButton = document.querySelector('.signupButton')
const loginButton = document.querySelector('.loginButton')
const background = document.querySelector('.background')
const start = document.querySelector('.start')
const login = document.querySelector('.login')
const loginAction = document.querySelector('.loginAction')
const signupAction = document.querySelector('.signupAction')

loginImage.addEventListener('click', () =>
{
    let visible = document.querySelectorAll('.visible')
    for (var i = 0; i < visible.length; i++) {
        visible[i].classList.remove('visible')
        console.log("yes")
      }
login.classList.add('visible')
signupButton.classList.add('visible')
loginButton.classList.add('visible')
})



loginButton.addEventListener('click', () =>
{
let visible = document.querySelectorAll('.visible')
for (var i = 0; i < visible.length; i++) {
    visible[i].classList.remove('visible')
    console.log("yes")
  }
login.classList.add('visible')
loginAction.classList.add('visible')
})