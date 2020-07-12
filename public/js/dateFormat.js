/* SCRIPT FOR FORMAT DATE FROM YYYY/MM/DD TO DD/MM/YYYY */

const expensesTD = document.getElementsByClassName('expenseDate');

for ( let i = 0; i < expensesTD.length; i++ ){

    let date = expensesTD[i].innerText;

    let split = date.split('-');

    let formatDate = split[2] + '-' + split[1] + '-' + split[0];

    expensesTD[i].innerText = formatDate;

}