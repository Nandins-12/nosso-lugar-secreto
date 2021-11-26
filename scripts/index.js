const date = new Date()
const birthdayDate = new Date(2021, 7, 11)
const loveDate = new Date(2019, 5, 30)

const mileSecondsBetweenDate = Math.abs(date.getTime() - birthdayDate.getTime())

document.querySelector('#day-area').innerText = Math.ceil(mileSecondsBetweenDate / 86400000)

document.querySelector('#love-area').innerText = date.getFullYear() - loveDate.getFullYear()