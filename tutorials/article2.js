let info = require("prompt-sync")()
 let item = info("Item name : ")
 let price = info("Its price : ")
 let quantity = info("Quantity : ")
 let total = quantity * price 
console.log("Your total is ",total)