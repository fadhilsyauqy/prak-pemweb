/*
Rahmat Fadhil Syauyqy.A
121140109
RC
*/

function ganjil(a){
    let jumlah_ganjil= 0;
    for ( let i =1; i <= a ; i++){
        if( i % 2 != 0){
            jumlah_ganjil += 1;
        }
    }
    return jumlah_ganjil;
}

function genap(a){
    let jumlah_genap = 0;
    for(let i = 1;  i <= a; i++){
        if( i % 2 == 0){
            jumlah_genap += 1;
        }
    }
    return jumlah_genap;
}


while (pilihan = true){
    
    let a = prompt("masukkan angka");
    
    a = parseFloat(a);
    
    let hasil_ganjil = ganjil(a);
    let hasil_genap = genap(a);
    
    alert("Jumlah Bilangan Ganjil : " + hasil_ganjil + "\nJumlah Bilangan Genap : " + hasil_genap );

    let lanjut = prompt("Lanjut?? Y/N");

    if(lanjut == "Y" || lanjut == "y"){
        pilihan == true;
    }
    else{
        alert("Terima Kasih")
        break;
    }
}

