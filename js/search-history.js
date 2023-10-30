// local-storage.js
document.getElementById('search-link').addEventListener('click', function() {
    var searchKeyword = document.getElementById('search-input').value;

    var searchHistory = JSON.parse(localStorage.getItem('searchHistory')) || [];
    searchHistory.push(searchKeyword);

    localStorage.setItem('searchHistory', JSON.stringify(searchHistory));
});

var searchHistory = JSON.parse(localStorage.getItem('searchHistory')) || [];
var historyList = document.getElementById('search-history-list');
searchHistory.forEach(function(keyword) {
    var listItem = document.createElement('li');
    listItem.textContent = keyword;
    historyList.appendChild(listItem);
});
