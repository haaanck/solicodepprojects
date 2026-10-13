let height=6
for(row=1;row<=height;row++){
    txt=""
    for(space=1;space<=height-row;space++){
        txt=txt+" "
    }
    for(star=1;star<=row*2-1;star++){
        txt=txt+"*"
    }
    console.log(txt)
}