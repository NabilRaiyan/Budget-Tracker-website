


// const title = document.getElementById('title');

// function change(){
//     title.innerText = "Bye HTML";
// }

// document.getElementById('change').addEventListener('click', change);


// get all surah names
// getting all surah name and adding in the dropdown menu
async function getSurahName(){
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




// get all the surah button
//document.getElementById('get_surah').addEventListener('click', getSurahName);
document.addEventListener('DOMContentLoaded', getSurahName);