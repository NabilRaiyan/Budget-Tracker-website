


// const title = document.getElementById('title');

// function change(){
//     title.innerText = "Bye HTML";
// }

// document.getElementById('change').addEventListener('click', change);


// get all surah names
// getting all surah name and adding in the dropdown menu
async function getSurahName(){

    // creating dropdown menu for juz amma
    var dropdown = document.getElementById('surah_list');

    for (let i = 1; i <= 30; i++){
        var option = document.createElement('option');
        option.text = i;
        dropdown.add(option);
    }

    // await fetch("http://api.alquran.cloud/v1/surah")
    //     .then((response)=>response.json())
    //     .then((surahs)=>{
    //         surahs.data.forEach(surah => {
    //             // creating options
    //             var option = document.createElement('option');

    //             console.log(surah['englishName'])
    //             //adding name to the options 
    //             option.text = surah['englishName'];
    //             //adding options to the dropdown 
    //             dropdown.add(option);
    //         })
    //     });
}

// get a specific juz and info
async function getJuz(){
    var juz = 1;
    //var random_ayah = Math.floor(Math.random() * surah_length) + 1;

    await fetch("http://api.alquran.cloud/v1/juz/" + juz + "/quran-uthmani?offset=5&limit=2")
        .then((response)=>response.json())
        .then((ayah)=>{
            console.log(ayah.data.ayahs[0].text);
            console.log(ayah.data.ayahs[0].surah.numberOfAyahs);
        })
}



// get all the surah button
document.getElementById('get_ayah').addEventListener('click', getJuz);
document.addEventListener('DOMContentLoaded', getSurahName);