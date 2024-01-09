document.addEventListener("DOMContentLoaded", function() {
    const dataArray = ["Item 1", "Item 2", "Item 3", "Item 4", "Item 5"];

    const resultList = document.getElementById("resultList");

    dataArray.forEach(function(element) {
        const listItem = document.createElement("li");

        listItem.textContent = element;

        resultList.appendChild(listItem);
    });
});
