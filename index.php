<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анкета кандидата</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <center>
        <h1>Анкета</h1>
    </Center>
    <?php
    // Получаем id из URL
    $id = isset($_GET['id']) ? $_GET['id'] : null; // Если id не передан, установите null
    ?>
    <form id="uploadForm" action="process.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>"> <!-- Скрытое поле для id -->
        <p><label for="second_name">Фамилия</label><input type="text" name="second_name" placeholder=""
                pattern="^[А-ЯЁа-яёA-Za-z]+" required>
            <label for="name">Имя</label><input type="text" name="name" placeholder="" pattern="^[А-ЯЁа-яёA-Za-z]+"
                required>
            <label for="surname">Отчество</label><input type="text" name="surname" placeholder=""
                pattern="^[А-ЯЁа-яёA-Za-z]+">
            <label><input type="checkbox" id="fullname_changed" name="fullname_changed">если изменяли фамилию, имя или
                отчество</label>
        <div id="fullname_changed_inputs"></div>
        </p>

        <p><label for="date_birth">Дата рождения</label><input type="date" name="data_birth" id="data_birth"
                placeholder="" min="1900-01-01" required></p>
        <p><label for="place_birth">Место рождения</label><input type="text" name="place_birth" id="place_birth"
                placeholder="" required>
            <br>(село, деревня, город, район, область, край, республика)
        </p>

        <p><label for="mail">Адрес электронной почты</label><input type="email" id="mail" name="mail" placeholder=""
                required></p>
        <p><label for="phone">Номер телефона</label><input type="text" id="phone" name="phone"
                pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" required></p>

        <p><label for="of address">Адрес по месту регистрации <br>(индекс, область, район, город, село, деревня, улица,
                дом, корпус, квартира)</label>
            <input type="text" id="off_address" name="off_address" required>
            <label for="fact address">Адрес фактический (если отличается)</label><input type="text" id="fact_address"
                name="fact_address">
        </p>

        <p><label for="nation">Гражданство</label><select id="nation" name="nation">
                <option value="russia">РОССИЯ</option>
                <option value="belarus">БЕЛАРУСЬ</option>
                <option value="kazakhstan">КАЗАХСТАН</option>
                <option value="azerbaijan">АЗЕРБАЙДЖАН</option>
                <option value="kyrgyzstan">КИРГИЗИЯ</option>
                <option value="uzbekistan">УЗБЕКИСТАН</option>
                <option value="ukraine">УКРАИНА</option>
                <option value="germany">ГЕРМАНИЯ</option>
            </select>
            <label><input type="checkbox" id="nation_changed" name="nation_changed">укажите если изменяли
                гражданство</label>
        <div id="nation_changed_inputs"></div>
        </p>

        <div id="nation_inputs"></div>

        <p><label for="title">Ученая степень, ученое звание</label><input type="text" id="scientific_title"
                name="scientific_title"></p>
        <p>

        <table border="1">
            <caption>
                <p>Профессиональное образование</p>
            </caption>
            <thead>
                <tr>
                    <th scope="col">Дата поступления</th>
                    <th scope="col">Дата окончания</th>
                    <th scope="col">Полное наименование учебного заведения</th>
                    <th scope="col">Специальность по диплому</th>
                    <th scope="col">Номер диплома, сертификата, удостоверения</th>
                    <th scope="col">Дата выдачи диплома, сертификата, удостоверения</th>
                </tr>
            </thead>
            <tbody id="dynamic_1">
                <tr>
                    <td><input type="date" id="data start education" name="data start education" min="1900-01-01"
                            class="input_table"></td>
                    <td><input type="date" id="date end educatioin" name="date end educatioin" min="1900-01-01"
                            class="input_table"></td>
                    <td><input type="text" name="educational institution" class="input_table"></td>
                    <td><input type="text" name="speciality" class="input_table"></td>
                    <td><input type="text" name="number_diplom" class="input_table"></td>
                    <td><input type="text" name="date_diplom" class="input_table"></td>
                </tr>
            </tbody>
        </table>
        </p>
        <button type="button" id="add_1">Добавить</button>
        <button type="button" id="del_1">Удалить</button>

        <p>
        <table border="1">
            <caption>
                <p>Выполняемая работа с начала трудовой деятельности (включая учебу в высших и средних специальных
                    учебных заведениях, военную службу, работу по совместительству, предпринимательскую деятельность и
                    т.п.)
                    <br>
                <h6>При заполнении данного пункта необходимо именовать учреждения, организации и предприятия так, как
                    они назывались в свое время, военную службу записывать с указанием должности и номера воинской
                    части.
                </h6>
                </p>
            </caption>
            <thead>
                <tr>
                    <th scope="col">Дата поступления</th>
                    <th scope="col">Дата окончания</th>
                    <th scope="col">Наименование учреждения, организации, предприятия</th>
                    <th scope="col">Должность в учреждения, организации, предприятия</th>
                    <th scope="col">Местонахождение учреждения, организации, предприятия</th>
                </tr>
            </thead>
            <tbody id="dynamic_2">
                <tr>
                    <td><input type="date" id="date_start_work" name="date_start_work" min="1900-01-01"
                            class="input_table"></td>
                    <td><input type="date" id="date_end_work" name="date_end_work" min="1900-01-01" class="input_table">
                    </td>
                    <td><input type="text" name="work_name" class="input_table"></td>
                    <td><input type="text" name="job_title" class="input_table"></td>
                    <td><input type="text" name="work_place" class="input_table"></td>
                </tr>
            </tbody>
        </table>
        </p>
        <button type="button" id="add_2">Добавить</button>
        <button type="button" id="del_2">Удалить</button>

        <p><label for="family status">Положение в момент заполнения анкеты</label>
            <select id="family_status" name="family status">
                <option value="registred_marriage">Состою в зарегистрированном браке</option>
                <option value="unregistred_marriage">Состою в незарегистрированном браке</option>
                <option value="officially_divorced">Разведен(а) официально (развод зарегистрирован)</option>
                <option value="widower">Вдовец (вдова)</option>
                <option value="no_married">Никогда не состоял(а) в браке</option>
                <option value="separated">Разошелся(лась)</option>
            </select>
        </p>

        <p>
        <table border="1">
            <caption>Ваши близкие родственники (отец, мать, братья, сестры, дети, а также муж (жена), в том числе
                бывшие)</caption>
            <thead>
                <tr>
                    <th scope="col">Степень родства</th>
                    <th scope="col">ФИО</th>
                    <th scope="col">Дата рождения</th>
                    <th scope="col">Место рождения</th>
                    <th scope="col">Место работы</th>
                    <th scope="col">Должность</th>
                    <th scope="col">Адрес места жительства</th>
                </tr>
            </thead>
            <tbody id="dynamic_3">
                <tr>
                    <td><select id="degree_kinship" name="degree_kinship_select">
                            <option value="husband">Муж</option>
                            <option value="wife">Жена</option>
                            <option value="son">Сын</option>
                            <option value="daughter">Дочь</option>
                            <option value="father">Отец</option>
                            <option value="mother">Мать</option>
                            <option value="brother">Брат</option>
                            <option value="sister">Сестра</option>
                        </select>
                    </td>
                    <td><input type="text" name="full_name_relative" class="input_table"></label></td>
                    <td><input type="date" id="date_birth_relative" name="date_birth_relative" min="1900-01-01"
                            class="input_table"></td>
                    <td><input type="text" name="place_birth_relative" class="input_table"></td>
                    <td><input type="text" name="place_work" class="input_table"></td>
                    <td><input type="text" name="job" class="input_table"></td>
                    <td><input type="text" name="residential_address" class="input_table"></td>
                </tr>
            </tbody>
        </table>
        </p>
        <button type="button" id="add_3">Добавить</button>
        <button type="button" id="del_3">Удалить</button>

        <p>
            <legend>Имеются ли у Вас или жены (мужа) родственники, постоянно проживающие за границей?</legend>
            <label><input type="radio" id="foreign_relative_no" name="foreign_relative" value="no" checked />Не
                проживают</label>
            <label><input type="radio" id="foreign_relative_yes" name="foreign_relative" value="yes" />Проживают</label>
        <div id="foreign_relative_inputs"></div>
        </p>

        <p>
        <table border="1">
            <caption>Отношение к воинской обязанности, воинское звание, ВУС, военкомат</caption>
            <thead>
                <tr>
                    <th scope="col">Отношение к коинской обязанности</th>
                    <th scope="col">Воинское звание</th>
                    <th scope="col">ВУС</th>
                    <th scope="col">Годность к военной службе</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><select id="military_service" name="military_service">
                            <option value="Военнообязанный">Военнообязанный</option>
                            <option value="Невоеннообязанный">Невоеннообязанный</option>
                            <option value="Призывник">Призывник</option>
                            <option value="Военнослужащийr">Военнослужащий</option>
                        </select>
                    </td>
                    <td><select id="military_title" name="military_title">
                            <option value="Рядовой">Рядовой</option>
                            <option value="Матрос">Матрос</option>
                            <option value="Ефрейтор">Ефрейтор</option>
                            <option value="Старший матрос">Старший матрос</option>
                            <option value="Младший сержант">Младший сержант</option>
                            <option value="Старшина 2 статьи">Старшина 2 статьи</option>
                            <option value="Сержант">Сержант</option>
                            <option value="Старшина 1 статьи">Старшина 1 статьи</option>
                            <option value="Старший сержант">Старший сержант</option>
                            <option value="Главный старшина">Главный старшина</option>
                            <option value="Старшина">Старшина</option>
                            <option value="Главный корабельный старшина">Главный корабельный старшина</option>
                            <option value="Прапорщик">Прапорщик</option>
                            <option value="Мичман">Мичман</option>
                            <option value="Старший прапорщик">Старший прапорщик</option>
                            <option value="Старший мичман">Старший мичман</option>
                            <option value="Специалист 3 класса">Специалист 3 класса</option>
                            <option value="Младший лейтенант">Младший лейтенант</option>
                            <option value="Лейтенант">Лейтенант</option>
                            <option value="Старший лейтенант">Старший лейтенант</option>
                            <option value="Капитан">Капитан</option>
                            <option value="Капитан-лейтенант">Капитан-лейтенант</option>
                            <option value="Майор">Майор</option>
                            <option value="Капитан 3 ранга">Капитан 3 ранга</option>
                            <option value="Подполковник">Подполковник</option>
                            <option value="Капитан 2 ранга">Капитан 2 ранга</option>
                            <option value="Полковник">Полковник</option>
                            <option value="Капитан 1 ранга">Капитан 1 ранга</option>
                            <option value="Генерал-майор">Генерал-майор</option>
                            <option value="Контр-адмирал">Контр-адмирал</option>
                            <option value="Генерал-лейтенант">Генерал-лейтенант</option>
                            <option value="Вице-адмирал">Вице-адмирал</option>
                            <option value="Генерал-полковник">Генерал-полковник</option>
                            <option value="Адмирал">Адмирал</option>
                            <option value="Генерал армии">Генерал армии</option>
                            <option value="Адмирал флота">Адмирал флота</option>
                            <option value="Маршал Российской Федерации">Маршал Российской Федерации</option>
                        </select>
                    </td>
                    <td><input type="text" name="ВУС" class="input_table"></td>
                    <td><select id="military_suitable" name="military_suitable">
                            <option value="Годен">Годен</option>
                            <option value="ГоденСОграничениями">Годен с ограничениями</option>
                            <option value="ОграниченноГоден">Ограниченно годен</option>
                            <option value="ВременноНеГоден">Временно не годен</option>
                            <option value="НеГоден">Не годен</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        </p>

        <p><label for="documents_for_benefits">Документы, дающие право на льготы</label><textarea
                name="documents_for_benefits" cols=50></textarea></p>

        <p>
        <table border="1">
            <caption>Полное наименование и адрес коммерческих структур, учредителем которых являетесь или являлись
            </caption>
            <thead>
                <tr>
                    <th scope="col">Полное наименование</th>
                    <th scope="col">Адрес коммерческих структур</th>
                </tr>
            </thead>
            <tbody id="dynamic_4">
                <tr>
                    <td><input type="text" name="full_name_commercial_structures_founder" class="input_table"></label>
                    </td>
                    <td><input type="text" name="address_commercial_structures_founder" class="input_table"></td>
                </tr>
            </tbody>
        </table>
        </p>
        <button type="button" id="add_4">Добавить</button>
        <button type="button" id="del_4">Удалить</button>


        <p>
        <table border="1">
            <caption>Полное наименование и адрес организаций, предприятий и т.п., акциями которых владели или владеете
            </caption>
            <thead>
                <tr>
                    <th scope="col">Полное наименование</th>
                    <th scope="col">Адрес организаций</th>
                </tr>
            </thead>
            <tbody id="dynamic_5">
                <tr>
                    <td><input type="text" name="full_name_organization_stock_owner" class="input_table"></label></td>
                    <td><input type="text" name="address_organization_stock_owner" class="input_table"></td>
                </tr>
            </tbody>
        </table>
        </p>
        <button type="button" id="add_5">Добавить</button>
        <button type="button" id="del_5">Удалить</button>

        <p>
        <table border="1">
            <caption>Полное наименование и адрес организаций, предприятий и т.п., в которых являетесь или являлись
                аффилированным лицом</caption>
            <thead>
                <tr>
                    <th scope="col">Полное наименование</th>
                    <th scope="col">Адрес организаций</th>
                </tr>
            </thead>
            <tbody id="dynamic_6">
                <tr>
                    <td><input type="text" name="full_name_organization_affiliated_person" class="input_table"></label>
                    </td>
                    <td><input type="text" name="address_organization_affiliated_person" class="input_table"></td>
                </tr>
            </tbody>
        </table>
        </p>
        <button type="button" id="add_6">Добавить</button>
        <button type="button" id="del_6">Удалить</button>

        <p>
            <legend>Наличие судимости</legend>
            <label><input type="radio" id="criminal_record_no" name="criminal_record" value="no" checked />Нет</label>
            <label><input type="radio" id="criminal_record_yes" name="criminal_record" value="yes" />Да</label>
        <div id="criminal_record_inputs"></div>
        </p>

        <p><label for="source_info_work">Источник получения информации о данном месте работы</label>
            <select name="source_info_work" id="source_info_work">
                <option value="source_info_work_sites">hh.ru или другие работные сайты</option>
                <option value="source_info_work_social_network">соцсети</option>
                <option value="source_info_work_ad">реклама</option>
                <option value="source_info_work_recomendation">рекомендации друзей, знакомых</option>
                <option value="other_source_info_work">Другое</option>
            </select>
        </p>
        <div id="other_source_info_work_inputs"></div>

        <p><label for="info_work">Сведения о рекомендателях (при наличии) (Ф.И.О., должность и место работы,
                телефон)</label>
            <textarea name="info_work" cols=30 rows=3></textarea>
        </p>

        <p><label for="additional_info">Дополнительные сведения (государственные награды, участие в выборных
                представительных органах, увлечения, а также другая информация, которую желаете сообщить о себе)</label>
            <textarea name="additional_info" cols=50 rows=4></textarea>
        </p>

        <p><label for="info_finance">Сведения об имуществе и кредитных организациях, в которых имеются счета (информация
                предоставляется на усмотрение (с согласия))</label>
            <textarea name="info_finance" cols=50 rows=4></textarea>
        </p>


        <legend>В каких социальных сетях имеются аккаунты</legend>
        <label><input type="checkbox" id="odnoclassniki" name="network" value="odnoclassniki"
                checked />Одноклассники</label>
        <label><input type="checkbox" id="vkontakte" name="network" value="vkontakte" />Вконтакте</label>
        <label><input type="checkbox" id="telegram" name="network" value="telegram" />Телеграм</label>
        <label><input type="checkbox" id="other_social_network" name="network" value="other_social_network" />Другое
            <div id="other_social_network_inputs"></div>
        </label>

        <p>Согласие на обработку персональных данных<br>
            <a href="https://cloud.naftagaz.com/s/aNBABJF6rfbmCyk">https://cloud.naftagaz.com/s/aNBABJF6rfbmCyk</a>
        </p>

        <p>Фотография, фото или скан документов(паспорт, снилс и инн) и согласие на обработку персональных данных</p>
        <p>
        <div class="file-upload-area" onclick="document.getElementById('file_input').click();">
            Нажмите здесь, чтобы загрузить файлы
            <input type="file" name="file_list[]" id="file_input" multiple onchange="handleFiles(this.files)">
        </div>
        </p>

        <p>
        <div id="file_list"></div>
        <div id="errorMessageDiv"></div>
        </p>

        <p><label><input type="checkbox" id="confirm" name="confirm" required />Я подтверждаю, что все указанные мною в
                настоящей анкете сведения полны и соответствуют действительности.
                Мне известно, что заведомо ложные сведения, сообщенные о себе в анкете, могут повлечь отказ в
                трудоустройстве либо расторжение трудового договора.
                На проведение в отношении меня проверочных мероприятий согласен(а).
                При изменении любых анкетных данных обязуюсь в 3-х дневный срок сообщить в подразделение по управлению
                персоналом новые сведения.
            </label></p>

        <input type="submit" style="margin: 20px">
    </form>
    <script src="dynamictable.js"></script>
    <script src="handler.js"></script>
    <script>

        // Получаем текущую дату
        const today = new Date();
        // Форматируем дату в формате YYYY-MM-DD
        const formattedDate = today.toISOString().split('T')[0];
        // Устанавливаем максимальную дату в элементе input
        document.getElementById('data_birth').setAttribute('max', formattedDate);
        document.getElementById('data start education').setAttribute('max', formattedDate);
        document.getElementById('date_start_work').setAttribute('max', formattedDate);
        document.getElementById('date_birth_relative').setAttribute('max', formattedDate);

        btn_add_1 = document.getElementById("add_1");
        btn_add_2 = document.getElementById("add_2");
        btn_add_3 = document.getElementById("add_3");
        btn_add_4 = document.getElementById("add_4");
        btn_add_5 = document.getElementById("add_5");
        btn_add_6 = document.getElementById("add_6");
        btn_del_1 = document.getElementById("del_1");
        btn_del_2 = document.getElementById("del_2");
        btn_del_3 = document.getElementById("del_3");
        btn_del_4 = document.getElementById("del_4");
        btn_del_5 = document.getElementById("del_5");
        btn_del_6 = document.getElementById("del_6");
        new DynamicTable(btn_add_1, btn_del_1, document.getElementById("dynamic_1"));
        new DynamicTable(btn_add_2, btn_del_2, document.getElementById("dynamic_2"));
        new DynamicTable(btn_add_3, btn_del_3, document.getElementById("dynamic_3"));
        new DynamicTable(btn_add_4, btn_del_4, document.getElementById("dynamic_4"));
        new DynamicTable(btn_add_5, btn_del_5, document.getElementById("dynamic_5"));
        new DynamicTable(btn_add_6, btn_del_6, document.getElementById("dynamic_6"));
    </script>
</body>

</html>