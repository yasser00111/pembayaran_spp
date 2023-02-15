const arraysaya =["nanas","mangga","semangka","pisang"];
//  arraysaya.push("anggrek","apel")
//  arraysaya.pop();
// console.log(arraysaya);

const buah = arraysaya.includes('mangga');
// console.log(buah);
if(buah){
    const posisimangga = arraysaya.indexOf('mangga');
    console.log(
        `posisi mangga ada dan dia berada di posisi index ke - ${posisimangga}`
    );
}else{
    console.log(`saya tidak menemukan posisinya dimana`);
}