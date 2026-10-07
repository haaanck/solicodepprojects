let compteur = 0;
let somme = 0;
for (num=1;num<=20;num++){
    if(num%2===0){
        somme=somme+num
        compteur++
    }
}
console.log("Nombre de pairs : " + compteur);
console.log("Somme des pairs : " + somme);
