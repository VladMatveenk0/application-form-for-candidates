
// fullname
const fullnameCheckbox = document.querySelector("#fullname_changed");

fullnameCheckbox.addEventListener("change", () => {
    if (fullnameCheckbox.checked) {
        document.getElementById("fullname_changed_inputs").innerHTML = '<label for="fullname_changed_inputs">Прошлое ФИО \
        <input type="text" id="second_name_changed" name="second_name_changed" placeholder="фамилия" required>\
        <input type="text" id="name_changed" name="name_changed" placeholder="имя" required>\
        <input type="text" id="surname_changed" name="surname_changed" placeholder="отчество"></label>';

    } else {
        document.getElementById("fullname_changed_inputs").innerHTML = "";
    }
});


//nation



//foreign_passport
const foreign_passportSelect = document.querySelector("#foreign_passport");

foreign_passportSelect.addEventListener("change", (event) => {
    if (foreign_passportSelect.value == "yes") {
        document.getElementById("foreign_passport_inputs").innerHTML = '<label for="foreign_passport_country">Страна</label><input type="text" id="foreign_passport_country" name="foreign_passport_country">\
            <label for="foreign_passport_num">Номер и серия</label><input type="text" id="foreign_passport_num" name="foreign_passport_num"></input>';

    } else {
        document.getElementById("foreign_passport_inputs").innerHTML = "";
    }
});

//other_social_network
const other_social_networkCheckbox = document.querySelector("#other_social_network");

other_social_networkCheckbox.addEventListener("change", () => {
    if (other_social_networkCheckbox.checked) {
        document.getElementById("other_social_network_inputs").innerHTML = '<input type="text" id="other_social_network_input" name="other_social_network" placeholder="">';

    } else {
        document.getElementById("other_social_network_inputs").innerHTML = "";
    }
});

