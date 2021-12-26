const date = new Date()
const birthdayDate = new Date(2021, 6, 11)
const loveDate = new Date(2019, 4, 30)

const mileSecondsBetweenDate = Math.abs(date.getTime() - birthdayDate.getTime())

document.querySelector('#day-area').innerText = Math.floor(mileSecondsBetweenDate / 86400000)

document.querySelector('#love-area').innerText = date.getFullYear() - loveDate.getFullYear()