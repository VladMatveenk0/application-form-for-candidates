
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
const nationSelect = document.querySelector("#nation");
document.getElementById("nation_inputs").innerHTML = '\
            <p><label for="passport">Паспорт</label><input type="text" name="passport" placeholder= "Номер и серия" required>\
                <label for="passport_date">Когда выдан</label><input type="date" name="passport_date" required>\
                <label for="passport_place">Кем выдан</label><input type="text" name="passport_place" placeholder="" required>\
                <label for="passport_cod">Код подразделения</label><input type="text" name="passport_cod" placeholder="" required>\
                <label for="snils">Номер страхового свидетельства государственного пенсионного страхования</label>\
                <input type="text" id="snils" name="snils" placeholder="СНИЛС" required> \
                <label for="inn">Индивидуальный номер налогоплательщика</label><input type="text" id="inn" name="inn" placeholder="ИНН" required>\
            </p>';
nationSelect.addEventListener("change", (event) => {
    if (nationSelect.value == "russia") {
        document.getElementById("nation_inputs").innerHTML = '\
            <p><label for="passport">Паспорт</label><input type="text" name="passport" placeholder= "Номер и серия" required>\
                <label for="passport_date">Когда выдан</label><input type="date" name="passport_date" required>\
                <label for="passport_place">Кем выдан</label><input type="text" name="passport_place" placeholder="" required>\
                <label for="passport_cod">Код подразделения</label><input type="text" name="passport_cod" placeholder="" required>\
                <label for="snils">Номер страхового свидетельства государственного пенсионного страхования</label>\
                <input type="text" id="snils" name="snils" placeholder="СНИЛС" required> \
                <label for="inn">Индивидуальный номер налогоплательщика</label><input type="text" id="inn" name="inn" placeholder="ИНН" required>\
            </p>';
    } else {
        document.getElementById("nation_inputs").innerHTML = '\
            <p><label for="passport_seria">Паспорт</label><input type="text" name="passport_seria" placeholder= "Серия">\
                <label for="passport_number"></label><input type="text" name="passport_number" placeholder= "Номер" required>\
                <label for="passport_date">Когда выдан</label><input type="date" name="passport_date" required>\
                <label for="passport_place">Кем выдан</label><input type="text" name="passport_place" placeholder="" required>\
                <label for="inn">Индивидуальный номер налогоплательщика</label><input type="text" id="inn" name="inn" placeholder="ИНН">\
            </p>';
    }
});


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

//foreign_relatives  (укажите их фио, год рождения, степень родства, место жительства,с какого времени они проживают за границей)
document.querySelectorAll("input[name=foreign_relative]").forEach(foreign_relativeRadio => {
    foreign_relativeRadio.addEventListener("change", (e) => {
        if (foreign_relativeRadio.value == "yes") {
            document.getElementById("foreign_relative_inputs").innerHTML = '\
            <p><table border="1">\
                <caption>Укажите их фио, год рождения, степень родства, место жительства, работы и рождения, с какого времени они проживают за границей</caption>\
                    <thead>\
                        <tr>\
                            <th scope="col">Степень родства</th>\
                            <th scope="col">ФИО</th>\
                            <th scope="col">Год рождения</th>\
                            <th scope="col">Место рождения</th>\
                            <th scope="col">Место работы</th>\
                            <th scope="col">Должность</th>\
                            <th scope="col">Адрес места жительства</th>\
                            <th scope="col">Как давно проживает за границей</th>\
                        </tr>\
                    </thead>\
                    <tbody id="dynamic_4">\
                        <tr>\
                            <td><select id="degree_kinship" name="degree_kinship">\
                                <option value="father">Отец</option>\
                                <option value="mother">Мать</option>\
                                <option value="brother">Брат</option>\
                                <option value="sister">Сестра</option>\
                                <option value="son">Сын</option>\
                                <option value="daughter">Дочь</option>\
                                <option value="husband">Муж</option>\
                                <option value="wife">Жена</option>\
                                </select>\
                            </td>\
                            <td><input type="text" name="full_name_relative" class="input_table"></label></td>\
                            <td><input type="number" name="year_birth_relative" class="input_table"></td>\
                            <td><input type="text" name="place_birth_relative" class="input_table"></td>\
                            <td><input type="text" name="place_work" class="input_table"></td>\
                            <td><input type="text" name="job" class="input_table"></td>\
                            <td><input type="text" name="residential_address" class="input_table"></td>\
                            <td><input type="text" name="abroad_living" class="input_table"></td>\
                        </tr>\
                    </tbody>\
                    <tfoot>\
                        <tr>\
                            <td><button type="button" id="add_4">Добавить</button></td>\
                            <td><button type="button" id="del_4">Удалить</button></td>\
                        </tr>\
                    </tfoot>\
                </table></p>\
                <script>alert(1)\
                btn_add_4 = document.getElementById("add_4");\
                btn_del_4 = document.getElementById("del_4");\
                new DynamicTable(btn_add_4, btn_del_4, document.getElementById("dynamic_4"));\
                </script>';
        }
        else{
            document.getElementById("foreign_relative_inputs").innerHTML = '';
        }
    });
});

//criminal record

document.querySelectorAll("input[name=criminal_record]").forEach(criminal_recordRadio => {
    criminal_recordRadio.addEventListener("change", (e) => {
        if (criminal_recordRadio.value == "yes") {
            document.getElementById("criminal_record_inputs").innerHTML = '<label for="criminal_record_input">\
            Когда, за что и по какой статье УК РФ, на какой срок были осуждены</label><input type="text" name="criminal_record_input" required>';
        }
        else{
            document.getElementById("criminal_record_inputs").innerHTML = '';
        }
    });
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

