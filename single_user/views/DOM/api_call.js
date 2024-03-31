


// const title = document.getElementById('title');

// function change(){
//     title.innerText = "Bye HTML";
// }

// document.getElementById('change').addEventListener('click', change);


// get all surah names

async function getSurahName(){
    await fetch("http://api.alquran.cloud/v1/surah")
        .then((response)=>response.json())
        .then((surahs)=>{
            surahs.data.forEach(surah => {
                console.log(surah['englishName'])
            })
        });
}


// get all the surah button
document.getElementById('get_surah').addEventListener('click', getSurahName);