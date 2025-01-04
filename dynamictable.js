var DynamicTable = (function () {
    var RID = 0;
    return function (btn_add, btn_del, tBody) {
        btn_add.onclick = function (e) {
            _addRow(tBody.rows[0], tBody);
        };

        btn_del.onclick = function (e) {
            // Удаляем последнюю строку, если их больше одной
            if (tBody.rows.length > 1) {
                _delRow(tBody.rows[tBody.rows.length - 1], tBody);
            }
        }

        var _correctNames = function (row) {
            var elements = row.getElementsByTagName("*");
            for (var i = 0; i < elements.length; i += 1) {
                if (elements.item(i).name) {
                    elements.item(i).name = RID + "[" + elements.item(i).name + "]";
                }
            }
            RID++;
            return row;
        };

        var _rowTpl = tBody.rows[0].cloneNode(true);

        var _addRow = function (before, tBody) {
            var newNode = _correctNames(_rowTpl.cloneNode(true));
            tBody.insertBefore(newNode, before.nextSibling);
            // Настройка автозаполнения для нового поля
            var newInput = newNode.querySelector('.university_name');
            if (newInput) {
                setupAutocomplete(newInput);
            }
        };

        var _delRow = function (row, tBody) {
            tBody.removeChild(row);
        };

        _correctNames(tBody.rows[0]);
        var initialInput = tBody.rows[0].querySelector('.university_name');
        if (initialInput) {
            setupAutocomplete(initialInput);
        }
    }
})(this);

/// Функция для настройки автозаполнения
function setupAutocomplete(input) {
    if (!input) return; // Проверка на наличие элемента
    const suggestionsBox = input.nextElementSibling; // Получаем div для подсказок

    // Создаем крестик для закрытия подсказок
    const closeButton = document.createElement('span');
    closeButton.textContent = '✖'; // Символ крестика
    closeButton.className = 'close-suggestion';
    closeButton.style.cursor = 'pointer'; // Указываем, что это кликабельный элемент
    closeButton.style.float = 'right'; // Позиционируем крестик справа

    // Обработчик для крестика
    closeButton.onclick = (e) => {
        e.stopPropagation(); // Останавливаем всплытие события
        suggestionsBox.innerHTML = ''; // очищаем подсказки
    };

    input.addEventListener('input', function() {
        const query = this.value;

        if (query.length > 2) { // минимальная длина для поиска
            fetch(`get_universities.php?query=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(data => {
                    suggestionsBox.innerHTML = ''; // очищаем предыдущие подсказки

                    // Добавляем крестик только если есть подсказки
                    if (data.length > 0) {
                        suggestionsBox.appendChild(closeButton); // Добавляем крестик обратно
                    }

                    data.forEach(university => {
                        const div = document.createElement('div');
                        div.className = 'suggestion-item';
                        div.textContent = university.name; // предполагается, что у вас есть поле name
                        div.onclick = () => {
                            input.value = university.name; // устанавливаем значение
                            suggestionsBox.innerHTML = ''; // очищаем подсказки после выбора
                        };
                        div.onmousedown = (e) => {
                            e.preventDefault(); // Предотвращаем потерю фокуса
                        };
                        suggestionsBox.appendChild(div);
                    });
                });
        } else {
            suggestionsBox.innerHTML = ''; // очищаем подсказки, если длина запроса меньше 3
        }
    });

    // Скрытие подсказок при потере фокуса
    input.addEventListener('blur', function() {
        setTimeout(() => {
            suggestionsBox.innerHTML = ''; // очищаем подсказки при потере фокуса
        }, 100); // Небольшая задержка, чтобы клик на подсказку успел обработаться
    });
}