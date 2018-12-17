//getting the Input
var searchIn = document.getElementById('searchForm');
var seacrhClick = document.getElementById('btnFormCari');
var container = document.getElementById('tableContainer');

//event listener to search
searchIn.addEventListener('keyup', function() {
    //console.log(searchIn.value);

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(searchIn.value);
            container.innerHTML = ajax.responseText;
        }
    }

    xhr.open('GET', 'script/dataMaster/search-result.php&dataCari='+searchIn.value, true);
    xhr.send();
});
