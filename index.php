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
        <?php //class DB extends SQLite3 {
        //function __construct( $file ){
            //$this->open( $file );
            //}
        //}
        //$db = new DB( 'data.db' );
        ?>
        <center><h1>Анкета</h1></Center>
        <form action="process.php" method="post">
            <p><label for="second_name">Фамилия</label><input type="text" name="second_name" placeholder="" required>
                <label for="name">Имя</label><input type="text" name="name" placeholder="" required>
                <label for="surname">Отчество</label><input type="text" name="surname" placeholder="">
                <label><input type="checkbox" id="fullname_changed" name="fullname_changed">если изменяли фамилию, имя или отчество</label></p>

            <p><label for="date_birth">Дата рождения</label><input type="date" name="data_birth" placeholder="" required></p>
            <p><label for="place_birth">Место рождения</label><input type="text" name="place_birth" placeholder= "" required>
                <br>(село, деревня, город, район, область, край, республика)</p>

            <p><label for="mail">Адрес эл. почты</label><input type="email" id="mail" name = "mail" placeholder="" required></p>
            <p><label for="phone">Номер телефона</label><input type="number" id="phone" name="phone" placeholder="" required></p>

            <p><label for="of address">Адрес по месту регистрации</label><input type="text" id="off_address" name="off_address" required>
                <label for="fact address">Адрес фактический(если отличается)</label><input type="text" id="fact_address" name="fact_address">
                (индекс, область, район, город, село, деревня, улица, дом, корпус, квартира) + need ФАИС
            </p>

            <p><label for="nation">Гражданство</label><select id="nation" name="nation">
                <option value="">РОССИЯ</option>
                <option value="">БЕЛАРУСЬ</option>
                <option value="">КАЗАХСТАН</option>
                <option value="">АЗЕРБАЙДЖАН</option>
                <option value="">КИРГИЗИЯ</option>
                <option value="">УЗБЕКИСТАН</option>
                <option value="">УКРАИНА</option>
                <option value="">ГЕРМАНИЯ</option>
                </select>
                <label><input type="checkbox" id="nation_changed" name="nation_changed">укажите если изменяли гражданство</label>
            </p>

            ниже будет script. скоро


            <p><label for="passport">Паспорт</label><input type="text" name="passport" placeholder= "Номер и серия" required>
                <label for="passport date">Когда выдан</label><input type="date" name="passport date" required>
                <label for="passport place">Кем выдан</label><input type="text" name="passport place" placeholder="" required></p>

            <p><label for="zpassport">Загран паспорт</label><input type="text" name="zpassport" placeholder= "Номер и серия" required>
                <label for="zpassport date">Когда выдан</label><input type="date" name="zpassport date" required>
                <label for="zpassport place">Кем выдан</label><input type="text" name="zpassport place" placeholder="" required></p>

            

            <p><label for="snils">Номер страхового свидетельства государственного пенсионного страхования</label>
                <input type="text" id="snils" name="snils" placeholder="СНИЛС" required>
            </p>

            <p><label for="inn">Индивидуальный номер налогоплательщика</label><input type="text" id="inn" name="inn" placeholder="ИНН" required></p>

            <p><label for="foreign passport">Наличие иностранного паспорта</label><select id="foreign passport" name="foreign passport">
                <option value="no">Нет иностранного паспорта</option>
                <option value="yes">Есть иностранный паспорт</option>
                </select>
                need script
                <label for="foreign passport country">Страна</label><input type="text" id="foreign passport country" name="foreign passport country">
                <label for="foreign passport num">Номер и серия</label><input type="text" id="foreign passport num" name="foreign passport num">
            </p>

            <p><table width = 600 border="1">
                <caption><p>Профессиональное образование</p></caption>
                    <thead>
                        <tr>
                            <th scope="col">Дата поступления</th>
                            <th scope="col">Дата окончания</th>
                            <th scope="col">Полное наименование учебного заведения</th>
                            <th scope="col">Специальность (специализация) по диплому, Квалификация по диплому, Наименования курса повышения квалификации</th>
                            <th scope="col">?Номер и дата выдачи диплома, сертификата, удостоверения?</th>
                            <th scope="col">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody id="dynamic_1">
                        <tr>
                            <td><input type="date" name="data start education"></td>
                            <td><input type="date" name="date end educatioin"></td>
                            <td><input type="text" name="educational institution"></td>
                            <td><input type="text" name="speciality"></td>
                            <td><input type="text" name="?Номер и дата?"></td>
                            <td>
                                <button type="button" class="add">+</button>
                                <button type="button" class="del">-</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </p>

            <p><label for="title">Ученая степень, ученое звание</label><input type="text" id="title" name="title"></p>

            <p>
                <table width=600 border="1">
                    <caption><p>Выполняемая работа с начала трудовой деятельности (включая учебу в высших и средних специальных учебных заведениях, военную службу, работу по совместительству, предпринимательскую деятельность и т.п.)
                    <br><h6>При заполнении данного пункта необходимо именовать учреждения, организации и предприятия так, как они назывались в свое время, военную службу записывать с указанием должности и номера воинской части.   
                    </h6></p></caption>
                    <thead>
                        <tr>
                            <th scope="col">Дата поступления</th>
                            <th scope="col">Дата окончания</th>
                            <th scope="col">Должность с указанием учреждения, организации, предприятия (независимо от собственности и ведомственной принадлежности)</th>
                            <th scope="col">Местонахождение учреждения, организации, предприятия</th>
                            <th scope="col">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody id="dynamic_2">
                        <tr>
                            <td><input type="date" name="date start work"></td>
                            <td><input type="date" name="date ebd work"></td>
                            <td><input type="text" name="job title"></td>
                            <td><input type="text" name="work place">
                            </td>
                            <td>
                                <button type="button" class="add">+</button>
                                <button type="button" class="del">-</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </p>

            <label for="family status">Положение в момент заполнения анкеты</label>
                <select id="family status" name="family status">
                <option value="registred marriage">Состою в зарегистрированном браке</option>
                <option value="unregistred marriage">Состою в незарегистрированном браке</option>
                <option value="officially divorced">Разведен(а) официально (развод зарегистрирован)</option>
                <option value="widower">Вдовец (вдова)</option>
                <option value="no married">Никогда не состоял(а) в браке</option>
                <option value="separated">Разошелся(лась)</option>
                </select>

            <p><table width = 600 border="1">
                <caption>Ваши близкие родственники (отец, мать, братья, сестры, дети, а также муж (жена), в том числе бывшие)</caption>
                    <thead>
                        <tr>
                            <th scope="col">Степень родства</th>
                            <th scope="col">Фамилия, имя, отчество*</th>
                            <th scope="col">?Год, место рождения?</th>
                            <th scope="col">?Место работы, должность?</th>
                            <th scope="col">Адрес места жительства</th>
                            <th scope="col">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody id="dynamic_3">
                        <tr>
                            <td><input type="text" name="degree kinship"></td>
                            <td><input type="text" name="full name relative"></label></td>
                            <td><input type="text" name="год, место рождения родственника"></td>
                            <td><input type="text" name="Специальность"></td>
                            <td><input type="text" name="residential address"></td>
                            <td>
                                <button type="button" class="add">+</button>
                                <button type="button" class="del">-</button>
                            </td>
                        </tr>
                    </tbody>
                </table></p>

                <br><br><br><br><br>НЕОБЯЗАТЕЛЬНО<br><br><br><br><br><br><br><br><br><br>
    
            <legend>Имеются ли у Вас или жены (мужа) родственники, постоянно проживающие за границей (укажите их фамилию, имя, отчество, год рождения, степень родства, место жительства,
                с какого времени они проживают за границей)?
            </legend>
            <label><input type="radio" id="foreign relative" name="foreign relative" value="no" checked />Не проживают</label>
            <label><input type="radio" id="foreign relative" name="foreign relative" value="yes" />Проживают</label>
            <label for="foreign passport country">Страна</label><input type="text" id="foreign passport country" name="foreign passport country">

            <p>Отношение к воинской обязанности, воинское звание, ВУС, военкомат<br><input type="text" name="военкомат"></p>

            <p><p>Документы, дающие право на льготы<br><textarea name="документы на льготы" cols = 50></textarea></p></p>

            <p>Полное наименование и адрес коммерческих структур, учредителем которых являетесь или являлись<br> <textarea name="учередитель структур" cols=50 rows=4></textarea></p>

            <p>Полное наименование и адрес организаций, предприятий и т.п., акциями которых владели или владеете<br> <textarea name="акции" cols=50 rows=4></textarea></p>

            <p>Полное наименование и адрес организаций, предприятий и т.п., в которых являетесь или являлись аффилированным лицом<br> <textarea name="аффилированное лицо" cols=50 rows=4></textarea></p>

            <legend>Наличие судимости</legend>
                <label><input type="radio" id="нет судимости" name="судимость" value="Нет судимости" checked />Нет</label>
                <label><input type="radio" id="есть судимость" name="судимость" value="Есть судимость" />Да</label>
                Когда, за что и по какой статье УК РФ, на какой срок были осуждены<br>
                <input type="text" name="судимости" required>
                need script
            </p>

            <p>Источник получения информации о данном месте работы<br> <input type="text" name="источник информации о работе" placeholder="" required></p>

            <p>Сведения о рекомендателях (при наличии) (Ф.И.О., должность и место работы, телефон)<br><textarea name="информация о работе" cols=30 rows=3></textarea></p>

            <p>Дополнительные сведения (государственные награды, участие в выборных представительных органах, увлечения, а также другая информация, которую  желаете сообщить о себе)
                <br> <textarea name="доп сведения" cols=50 rows=4 ></textarea>
            </p>

            <p>Сведения об имуществе и кредитных организациях, в которых имеются счета (информация предоставляется на усмотрение (с согласия))<br>
                <input type="text" name="сведения о имуществе" size = 30>
            </p>

            
            <legend>В каких социальных сетях имеются аккаунты</legend>
            <label><input type="checkbox" id="Одноклассники" name="соцсеть" value="Одноклассники" checked />Одноклассники</label>
            <label><input type="checkbox" id="Вконтакте" name="соцсеть" value="Вконтакте" />Вконтакте</label>
            <label><input type="checkbox" id="Не имею" name="соцсеть" value="Не имею" />Не имею</label>
            <label><input type="checkbox" id="Другие соцсети" name="соцсеть" value="Другие соцсети" /><input type="text" name="другая соцсеть" placeholder="Другое"></label>
        
            <p><label><input type="checkbox" id = "подтверждение" name="" required/>Я подтверждаю, что все указанные мною в настоящей анкете сведения полны и соответствуют действительности.
            Мне известно, что заведомо ложные сведения, сообщенные о себе в анкете, могут повлечь отказ в трудоустройстве либо расторжение трудового договора.
            На проведение в отношении меня проверочных мероприятий согласен(а). 
            При изменении любых анкетных данных обязуюсь в 3-х дневный срок сообщить в подразделение по управлению персоналом новые сведения. 
            </label></p>

            <input name="sub" type="submit" value="Сохранить" style="margin: 20px">
        </form>
        <script src="dynamictable.js"></script>
        <script>
            new DynamicTable( document.getElementById("dynamic_1") );
            new DynamicTable( document.getElementById("dynamic_2") );
            new DynamicTable( document.getElementById("dynamic_3") );
        </script>
    </body>
</html>