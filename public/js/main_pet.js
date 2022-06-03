let checkbox_hond = document.getElementById("Hond");
let checkbox_kat = document.getElementById("Kat");
let checkbox_vis = document.getElementById("Vis"); 
let checkbox_vogel = document.getElementById("Vogel");
let checkbox_konijn = document.getElementById("Konijn");
let list_of_pet = document.getElementsByTagName("li");

checkbox_hond.checked=true;
checkbox_kat.checked=true;
checkbox_vis.checked=true;
checkbox_vogel.checked=true;
checkbox_konijn.checked=true;

checkbox_hond.addEventListener('change', function(){
    if(checkbox_hond.checked){
        for (let i = 0; i < list_of_pet.length; i++) {
            if (list_of_pet[i].dataset.kindOfPet == 'Hond') {
                list_of_pet[i].style.display = '';
            }
        }
    }
    else{
        for (let i = 0; i < list_of_pet.length; i++) {
            if (list_of_pet[i].dataset.kindOfPet == 'Hond') {
                list_of_pet[i].style.display = 'none';
            }
        }
    }
});

checkbox_kat.addEventListener('change', function(){
    if(checkbox_kat.checked){
        for (let i = 0; i < list_of_pet.length; i++) {
            if (list_of_pet[i].dataset.kindOfPet == 'Kat') {
                list_of_pet[i].style.display = '';
            }
        }
    }
    else{
        for (let i = 0; i < list_of_pet.length; i++) {
            if (list_of_pet[i].dataset.kindOfPet == 'Kat') {
                list_of_pet[i].style.display = 'none';
            }
        }
    }
});

checkbox_vis.addEventListener('change', function(){
    if(checkbox_vis.checked){
        for (let i = 0; i < list_of_pet.length; i++) {
            if (list_of_pet[i].dataset.kindOfPet == 'Vis') {
                list_of_pet[i].style.display = '';
            }
        }
    }
    else{
        for (let i = 0; i < list_of_pet.length; i++) {
            if (list_of_pet[i].dataset.kindOfPet == 'Vis') {
                list_of_pet[i].style.display = 'none';
            }
        }
    }
});

checkbox_vogel.addEventListener('change', function(){
    if(checkbox_vogel.checked){
        for (let i = 0; i < list_of_pet.length; i++) {
            if (list_of_pet[i].dataset.kindOfPet == 'Vogel') {
                list_of_pet[i].style.display = '';
            }
        }
    }
    else{
        for (let i = 0; i < list_of_pet.length; i++) {
            if (list_of_pet[i].dataset.kindOfPet == 'Vogel') {
                list_of_pet[i].style.display = 'none';
            }
        }
    }
});

checkbox_konijn.addEventListener('change', function(){
    if(checkbox_konijn.checked){
        for (let i = 0; i < list_of_pet.length; i++) {
            if (list_of_pet[i].dataset.kindOfPet == 'Konijn') {
                list_of_pet[i].style.display = '';
            }
        }
    }
    else{
        for (let i = 0; i < list_of_pet.length; i++) {
            if (list_of_pet[i].dataset.kindOfPet == 'Konijn') {
                list_of_pet[i].style.display = 'none';
            }
        }
    }
});