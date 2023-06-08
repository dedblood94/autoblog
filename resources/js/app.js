$(document).ready(function() {
    var articlesPerPage = 4; // Количество статей на одной странице
    var currentPage = 1; // Текущая страница
    var articles = $('.article'); // Выбираем все статьи
    var totalPages = Math.ceil(articles.length / articlesPerPage); // Общее количество страниц

    // Функция для отображения статей на текущей странице
    function showArticles() {
        var startIndex = (currentPage - 1) * articlesPerPage; // Индекс начала статей на текущей странице
        var endIndex = startIndex + articlesPerPage; // Индекс конца статей на текущей странице

        // Скрываем все статьи
        articles.hide();

        // Отображаем статьи на текущей странице
        articles.slice(startIndex, endIndex).show();
    }

    // Обработчик клика на кнопку "Предыдущие"
    $('#prevBtn').click(function() {
        if (currentPage > 1) {
            currentPage--;
            showArticles();
        }
    });

    // Обработчик клика на кнопку "Следующие"
    $('#nextBtn').click(function() {
        if (currentPage < totalPages) {
            currentPage++;
            showArticles();
        }
    });

    // Показываем первую страницу при загрузке страницы
    showArticles();
});
