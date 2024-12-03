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
        <form action="process.php" method="post">
            <p><b>Приложение №9 к Регламенту подбора и найма персонала в редакции Приложения №2 к Приказу №…<br></b></p>
            <p><b>А Н К Е Т А кандидата на должность: &#32</b><select id="должности" name="должность">
                <option value="__">тут будет список должностей</option>
                <option value="__">тут будет список должностей</option>
                <option value="__">тут будет список должностей</option>
                <option value="__">тут будет список должностей</option>
            </select></p>
            <ol>
                <li><p><input type="text" name="фамилия" placeholder="Фамилия" required><span class="validity"></span><br>
                    <input type="text" name="имя" placeholder="Имя" required><span class="validity"></span><br>
                    <input type="text" name="отчество" placeholder="Отчество"><br>
                <h7>(если изменяли фамилию, имя или отчество, то укажите их)</h7></p></li>

                <li><p><input type="text" name="дата рождения" placeholder="Год, число и месяц рождения" required><span class="validity"></span></p></li>
                <li><p><input type="text" name="место рождения" placeholder= "Место рождения" required><span class="validity"></span><br>(село, деревня, город, район, область, край, республика)</p></li>

                <li><p><input type="text" name="паспорт серия" placeholder= "Паспорт серия" required><span class="validity"></span>
                &#32<input type="text" name="паспорт номер" placeholder="номер" required><span class="validity"></span>
                &#32<input type="date" name="паспорт дата" placeholder="когда выдан" required><span class="validity"></span>
                &#32<br><input type="text" name="паспорт кем выдан" placeholder="кем выдан" size=30 required><span class="validity"></span></p></li>

                <li><p><input type="text" name="загранпаспорт серия" placeholder= "Загранпаспорт серия">&#32<input type="text" name="загранпаспорт номер" placeholder="номер">
                &#32<input type="date" name="загранпаспорт дата" placeholder="когда выдан"> &#32<br> <input type="text" name="загранпаспорт кем выдан" placeholder="кем выдан" size=30></p></li>

                <li><p>
                    Адрес<br>
                    а)&#32<input type="text" name="адрес оф" placeholder="По месту регистрации" size=30 required><span class="validity"></span>
                    <br>(почтовый индекс, область, район, город, село, деревня, улица, дом, корпус, квартира)<br>
                    б)&#32<input type="text" name="адрес факт" placeholder="Фактический (если отличается) " size=30><br>(почтовый индекс, область, район, город, село, деревня, улица, дом, корпус, квартира)
                </p></li>

                <li><p><input type="email" name = "почта" placeholder="Адрес эл. Почты" required><span class="validity"></span>
                <br> <input type="number" name="телефон" placeholder="№ телефона " required><span class="validity"></span></p></li>

                <li><p>Номер страхового свидетельства государственного пенсионного страхования
                    <br><input type="text" name="Номер страхового свидетельства" required><span class="validity"></span></p></li>

                <li><p>Индивидуальный номер налогоплательщика<br> <input type="text" name="Индивидуальный номер налогоплательщика" required><span class="validity"></span></p></li>

                <li><p><input type="text" name="гражданство" placeholder="Гражданство" required><span class="validity"></span>
                    <br>(если изменяли, то укажите, когда и по какой причине, указать гражданство другого государства при его наличии)
                </p></li>

                <li><p><input type="text" name="наличие иностранного паспорта" placeholder="Наличие иностранного паспорта" size=30>
                    <br>(указать страну, серию и номер при его наличии)
                </p></li>

                <li><p><table width = 600 border="1">
                    <caption><p>Профессиональное образование</p></caption>
                        <thead>
                            <tr>
                                <th scope="col">Дата поступления</th>
                                <th scope="col">Дата окончания</th>
                                <th scope="col">Полное наименование учебного заведения</th>
                                <th scope="col">Специальность (специализация) по диплому, Квалификация по диплому, Наименования курса повышения квалификации</th>
                                <th scope="col">Номер и дата выдачи диплома, сертификата, удостоверения</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody id="dynamic_1">
                            <tr>
                                <td><input type="text" name="дата поступления 1"></td>
                                <td><input type="text" name="дата окончания 1"></td>
                                <td><input type="text" name="учебное заведение"></td>
                                <td><input type="text" name="Специальность"></td>
                                <td><input type="text" name="Номер и дата"></td>
                                <td>
                                    <button type="button" class="add">+</button>
                                    <button type="button" class="del">-</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </p></li>

                <li><p><input type="text" name="ученое звание" placeholder="Ученая степень, ученое звание" size=30><br>(номер диплома, дата выдачи)</p></li>

                <li><p>
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
                                <td><input type="text" name="дата поступления 2"></td>
                                <td><input type="text" name="дата окончания 2"></td>
                                <td><input type="text" name="должность в организации"></td>
                                <td><input type="text" name="местонахождение организации">
                                </td>
                                <td>
                                    <button type="button" class="add">+</button>
                                    <button type="button" class="del">-</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </p></li>

                <li><p>Семейное положение в момент заполнения анкеты<br><input type="text" name="статус семьи" required><span class="validity"></span></p></li>

                <li><p><table width = 600 border="1">
                    <caption>Ваши близкие родственники (отец, мать, братья, сестры, дети, а также муж (жена), в том числе бывшие)</caption>
                        <thead>
                            <tr>
                                <th scope="col">Степень родства</th>
                                <th scope="col">Фамилия, имя, отчество*</th>
                                <th scope="col">Год, место рождения</th>
                                <th scope="col">Место работы, должность</th>
                                <th scope="col">Адрес места жительства</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody id="dynamic_3">
                            <tr>
                                <td><input type="text" name="степень родства"></td>
                                <td><input type="text" name="фио родственника"></label></td>
                                <td><input type="text" name="год, место рождения родственника"></td>
                                <td><input type="text" name="Специальность"></td>
                                <td><input type="text" name="Номер и дата"></td>
                                <td>
                                    <button type="button" class="add">+</button>
                                    <button type="button" class="del">-</button>
                                </td>
                            </tr>
                        </tbody>
                    </table></p></li>

                <li><p>Имеются ли у Вас или жены (мужа) родственники, постоянно проживающие за границей (укажите их фамилию, имя, отчество, год рождения, степень родства, место жительства,
                    с какого времени они проживают за границей)<br><input type="text" name="родственнкии за границой" size=30>
                </p></li>

                <li><p>Отношение к воинской обязанности, воинское звание, ВУС, военкомат<br><input type="text" name="военкомат" size=30 required><span class="validity"></span></p></li>

                <li><p><p>Документы, дающие право на льготы<br><textarea name="документы на льготы" cols = 50></textarea></p></p></li>

                <li><p>Полное наименование и адрес коммерческих структур, учредителем которых являетесь или являлись<br> <textarea name="учередитель структур" cols=50 rows=4></textarea></p></li>

                <li><p>Полное наименование и адрес организаций, предприятий и т.п., акциями которых владели или владеете<br> <textarea name="акции" cols=50 rows=4></textarea></p></li>

                <li><p>Полное наименование и адрес организаций, предприятий и т.п., в которых являетесь или являлись аффилированным лицом<br> <textarea name="аффилированное лицо" cols=50 rows=4></textarea></p></li>

                <li><legend>Наличие судимости</legend>
                    <div>
                        <input type="radio" id="нет судимости" name="судимость" value="Нет судимости" checked />
                        <label for="нет судимости">Нет</label>
                    </div>
                    <div>
                        <input type="radio" id="есть судимость" name="судимость" value="Есть судимость" />
                        <label for="есть судимость">Да</label>
                    </div>
                    Когда, за что и по какой статье УК РФ, на какой срок были осуждены<br>
                    <input type="text" name="судимости" size=30>
                </p></li>

                <li><p>Источник получения информации о данном месте работы<br> <input type="text" name="источник информации о работе" placeholder=""></p></li>

                <li><p>Сведения о рекомендателях (при наличии) (Ф.И.О., должность и место работы, телефон)<br><textarea name="информация о работе" cols=30 rows=3></textarea></p></li>

                <li><p>Дополнительные сведения (государственные награды, участие в выборных представительных органах, увлечения, а также другая информация, которую  желаете сообщить о себе)
                    <br> <textarea name="доп сведения" cols=50 rows=4 ></textarea>
                </p></li>

                <li><p>Сведения об имуществе и кредитных организациях, в которых имеются счета (информация предоставляется на усмотрение (с согласия))<br>
                    <input type="text" name="сведения о имуществе" size = 30>
                </p></li>

                <li>
                    <legend>В каких социальных сетях имеются аккаунты</legend>

                    <div>
                        <input type="radio" id="Одноклассники" name="соцсеть" value="Одноклассники" checked />
                        <label for="Одноклассники">Одноклассники</label>
                    </div>

                    <div>
                        <input type="radio" id="Вконтакте" name="соцсеть" value="Вконтакте" />
                        <label for="Вконтакте">Вконтакте</label>
                    </div>

                    <div>
                        <input type="radio" id="Не имею" name="соцсеть" value="Не имею" />
                        <label for="Не имею">Не имею</label>
                    </div>
                    <div>
                        <input type="radio" id="Другие соцсети" name="соцсеть" value="Другие соцсети" />
                        <label for="Другие соцсети">Другое&#32<input type="text" name="другая соцсеть" size=20></label>
                    </div>
                </li>

            </ol>
            <p><input type="checkbox" id = "подтверждение" required/><label for="подтверждение">Я подтверждаю, что все указанные мною в настоящей анкете сведения полны и соответствуют действительности.
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