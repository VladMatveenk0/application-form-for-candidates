
// fullname
const fullnameCheckbox = document.querySelector("#fullname_changed");

fullnameCheckbox.addEventListener("change", () => {
    if (fullnameCheckbox.checked) {
        document.getElementById("fullname_changed_inputs").innerHTML = '<label for="fullname_changed_inputs">Прошлое ФИО \
        <input type="text" id="second_name_changed" name="second_name_changed" placeholder="Фамилия" pattern="^[А-ЯЁа-яёA-Za-z]+" required>\
        <input type="text" id="name_changed" name="name_changed" placeholder="Имя" pattern="^[А-ЯЁа-яёA-Za-z]+" required>\
        <input type="text" id="surname_changed" name="surname_changed" placeholder="Отчество" pattern="^[А-ЯЁа-яёA-Za-z]+"></label>';

    } else {
        document.getElementById("fullname_changed_inputs").innerHTML = "";
    }
});


//nation
const nationSelect = document.querySelector("#nation");
document.getElementById("nation_inputs").innerHTML = '\
            <p><label>Паспорт</label><input type="text" name="passport_seria" placeholder="Серия" pattern="[0-9]{2}[0-9]{2}"  required>\
                <input type="text" name="passport_number" placeholder="Номер" pattern="[0-9]{6}"  required>\
                <label for="passport_date">Когда выдан</label><input type="date" name="passport_date" min="1900-01-01" required>\
                <label for="passport_place">Кем выдан</label><input type="text" name="passport_place" placeholder="" required>\
                <label for="passport_cod">Код подразделения</label><input type="text" name="passport_cod" placeholder="000-000" pattern="[0-9]{3}-[0-9]{3}" required>\
                <label for="snils">Номер страхового свидетельства государственного пенсионного страхования</label>\
                <input type="text" id="snils" name="snils" pattern="[0-9]{3}-[0-9]{3}-[0-9]{5}" placeholder="СНИЛС: 000-000-00000" required> \
                <label for="inn">Индивидуальный номер налогоплательщика</label><input type="text" id="inn" name="inn" placeholder="ИНН: 000000000000" pattern="[0-9]{12}" required></p>\
                <p><label for="zpassport">Загранпаспорт</label><input type="text" name="zpassport" placeholder= "Номер и серия">\
                <label for="zpassport date">Когда выдан</label><input type="date" name="zpassport date">\
                <label for="zpassport place">Кем выдан</label><input type="text" name="zpassport place" placeholder=""></p>\
                <p><label for="foreign passport">Наличие иностранного паспорта</label><select id="foreign_passport" name="foreign_passport">\
                <option value="no">Нет иностранного паспорта</option>\
                <option value="yes">Есть иностранный паспорт</option>\
                </select>\
                <div id="foreign_passport_inputs"></div>\
            </p>';
nationSelect.addEventListener("change", (event) => {
    if (nationSelect.value == "russia") {
        document.getElementById("nation_inputs").innerHTML = '\
            <p><label>Паспорт</label><input type="text" name="passport_seria" placeholder="Серия" pattern="[0-9]{2}[0-9]{2}" required>\
                <input type="text" name="passport_number" placeholder="Номер" pattern="[0-9]{6}" required>\
                <label for="passport_date">Когда выдан</label><input type="date" name="passport_date" min="1900-01-01" required>\
                <label for="passport_place">Кем выдан</label><input type="text" name="passport_place" placeholder="" required>\
                <label for="passport_cod">Код подразделения</label><input type="text" name="passport_cod" placeholder="000-000" pattern="[0-9]{3}-[0-9]{3}" required>\
                <label for="snils">Номер страхового свидетельства государственного пенсионного страхования</label>\
                <input type="text" id="snils" name="snils" pattern="[0-9]{3}-[0-9]{3}-[0-9]{5}" placeholder="СНИЛС: 000-000-00000" required> \
                <label for="inn">Индивидуальный номер налогоплательщика</label><input type="text" id="inn" name="inn" placeholder="ИНН: 000000000000" pattern="[0-9]{12}" required></p>\
                <p><label for="zpassport">Загранпаспорт</label><input type="text" name="zpassport" placeholder= "Номер и серия">\
                <label for="zpassport date">Когда выдан</label><input type="date" name="zpassport date">\
                <label for="zpassport place">Кем выдан</label><input type="text" name="zpassport place" placeholder=""></p>\
                <p><label for="foreign passport">Наличие иностранного паспорта</label><select id="foreign_passport" name="foreign_passport">\
                <option value="no">Нет иностранного паспорта</option>\
                <option value="yes">Есть иностранный паспорт</option>\
                </select>\
                <div id="foreign_passport_inputs"></div>\
            </p>';
    } else {
        document.getElementById("nation_inputs").innerHTML = '\
            <p><label>Паспорт</label><input type="text" name="passport_seria" placeholder="Серия" pattern="[0-9]{2}[0-9]{2}" required>\
                <input type="text" name="passport_number" placeholder="Номер" pattern="[0-9]{6}" required>\
                <label for="passport_date">Когда выдан</label><input type="date" name="passport_date" min="1900-01-01" required>\
                <label for="passport_place">Кем выдан</label><input type="text" name="passport_place" placeholder="" required>\
                <label for="snils">Номер страхового свидетельства государственного пенсионного страхования</label>\
                <input type="text" id="snils" name="snils" pattern="[0-9]{3}-[0-9]{3}-[0-9]{5}" placeholder="СНИЛС: 000-000-00000"> \
                <label for="inn">Индивидуальный номер налогоплательщика</label><input type="text" id="inn" name="inn" pattern="[0-9]{12}" placeholder="ИНН: 000000000000">\
            </p>';
    }
});

//nation_changed

const nation_changedCheckbox = document.querySelector("#nation_changed");

nation_changedCheckbox.addEventListener("change", () => {
    if (nation_changedCheckbox.checked) {
        document.getElementById("nation_changed_inputs").innerHTML = '\
            <label for="nation_changed_input">Прошлое гражданство</label><input type="text" name="nation_changed_input" placeholder="" required>\
        ';
    } else {
        document.getElementById("nation_changed_inputs").innerHTML = "";
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
            <label>Укажите их фио, год рождения, степень родства,где проживают и с какого времени они проживают за границей</label>\
            <p><table border="1">\
                    <thead>\
                        <tr>\
                            <th scope="col">Степень родства</th>\
                            <th scope="col">ФИО</th>\
                            <th scope="col">Дата рождения</th>\
                            <th scope="col">Адрес места жительства</th>\
                            <th scope="col">Как давно проживает за границей</th>\
                        </tr>\
                    </thead>\
                    <tbody id="dynamic_7">\
                        <tr>\
                            <td><input type="text" id="degree_kinship" name="degree_kinship_text" class="input_table"></td>\
                            <td><input type="text" name="full_name_relative" class="input_table"></td>\
                            <td><input type="date" name="date_birth_relative" class="input_table"></td>\
                            <td><input type="text" name="residential_address" class="input_table"></td>\
                            <td><input type="text" name="abroad_living" class="input_table"></td>\
                        </tr>\
                    </tbody>\
                </table></p>\
                            <button type="button" id="add_7">Добавить</button>\
                            <button type="button" id="del_7">Удалить</button>';
            btn_add_7 = document.getElementById("add_7");
            btn_del_7 = document.getElementById("del_7");
            DynamicTable(btn_add_7, btn_del_7, document.getElementById("dynamic_7"));
        }
        else {
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
        else {
            document.getElementById("criminal_record_inputs").innerHTML = '';
        }
    });
});

//source_info_work
source_info_workSelect = document.querySelector("#source_info_work");

source_info_workSelect.addEventListener("change", (event) => {
    if (source_info_workSelect.value == "other_source_info_work") {
        document.getElementById("other_source_info_work_inputs").innerHTML = '<input type="text" id="other_source_info_work_input" name="other_source_info_work_input" placeholder="">';

    } else {
        document.getElementById("other_source_info_work_inputs").innerHTML = "";
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

// file logic
let fileList = [];

// Функция для обработки загруженных файлов
function handleFiles(files) {
    const maxFileSize = 5 * 1024 * 1024; // Максимальный размер файла 5 МБ
    for (let i = 0; i < files.length; i++) {
        if (files[i].size > maxFileSize) {
            alert("Файл слишком большой. Максимальный размер файла 5 МБ.");
            return;
        }
    }
    if (fileList) {
        fileList = fileList.concat(Array.from(files));
    } else {
        fileList = Array.from(files);
    }
    displayFiles();
}

// Функция для отображения загруженных файлов
function displayFiles() {
    const fileListDiv = document.getElementById('file_list');
    fileListDiv.innerHTML = ''; // Очищаем предыдущий список файлов

    if (fileList) {
        fileList.forEach((file, index) => {
            const fileItem = document.createElement('div');
            fileItem.className = 'file-item';
            fileItem.innerHTML = `\
                <span>${file.name}</span>\
                <span class="remove-file" onclick="removeFile(${index})">Удалить</span>\
            `;
            fileListDiv.appendChild(fileItem);
        });
    } else {
        fileListDiv.innerHTML = 'Нет загруженных файлов';
    }
}

// Функция для удаления файла из списка
function removeFile(index) {
    fileList.splice(index, 1); // Удаляем файл из массива
    displayFiles(); // Обновляем отображение файлов
}

// Обработка отправки формы
document.getElementById('uploadForm').onsubmit = function(event) {
    event.preventDefault(); // Предотвращаем стандартное поведение формы

    const formData = new FormData(this);
    fileList.forEach((file, index) => {
        formData.append('file_list[]', file);
    });
    // Отправляем данные на сервер
    fetch('process.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Сетевая ошибка: ' + response.status);
        }
        return response.text();
    })
    .then(data => {
        console.log(data); // Обработка ответа от сервера
        window.location.href = 'index_2.html'; // Перенаправление на другую страницу
    })
    .catch(error => {
        console.error('Ошибка:', error);
        alert('Произошла ошибка при отправке формы. Пожалуйста, попробуйте позже.');
    });
};
