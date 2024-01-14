document.addEventListener("DOMContentLoaded", () => {

    var Table = 'User';
    var BookTable = 'Book';

    // Send data to the server using AJAX
    $.ajax({
        type: 'POST',
        url: 'http://localhost/bookrepo/DataManagement/exportDataToCSV.php',
        data: { Table: Table },
        success: function (response) {
            console.log('CSV Downloaded', response);
        }
    });

    fetch('./DataManagement/exported_data.csv')
        .then(response => response.text())
        .then(function (text) {
            const newData = addBracketsToLastColumn(text);
            console.log(newData);
            let series = csvToSeries(newData);
            renderChart(series);
        })
        .catch(function (error) {
            //Something went wrong
            console.log(error);
        });

    $.ajax({
        type: 'POST',
        url: 'http://localhost/bookrepo/DataManagement/exportBookDataToCSV.php',
        data: { BookTable: BookTable },
        success: function (response) {
            console.log('CSV Downloaded', response);
        }
    });

    fetch('./DataManagement/exported_book_data.csv')
        .then(response => response.text())
        .then(function (text) {
            const newData = addBracketsToLastColumn(text);
            console.log(newData);
            let series = csvBookToSeries(newData);
            renderBookChart(series);
        })
        .catch(function (error) {
            //Something went wrong
            console.log(error);
        });




    function addBracketsToLastColumn(csvText) {
        const lines = csvText.split('\n');
        // Process header separately
        const header = lines[0].split(',');
        header[header.length - 1] = `a${header[header.length - 1]}a`;
        // Process data rows
        for (let i = 1; i < lines.length; i++) {
            const columns = lines[i].split(',');
            columns[columns.length - 1] = `a${columns[columns.length - 1]}a`;
            lines[i] = columns.join(',');
        }
        return lines.join('\n');
    }

    function csvToSeries(text) {
        //const lifeExp = 'average_life_expectancy';
        let dataAsJson = JSC.csv2Json(text);
        console.log(dataAsJson);
        let male = [];
        const dateCounts = {};
        dataAsJson.forEach(function (row) {
            // Ensure 'RegDate' property exists in the row object
            if (row.RegDate) {
                // Using moment.js to parse and format the date
                const parsedDate = moment(row.RegDate, 'DD/MM/YYYY');
                const formattedDate = parsedDate.format('D/M/YYYY');

                dateCounts[formattedDate] = (dateCounts[formattedDate] || 0) + 1;
            }
            else {
                console.error('Error: Row does not contain a "RegDate" property.');
            }
        });
        for (const date in dateCounts) {
            if (dateCounts.hasOwnProperty(date)) {
                console.log(`Date: ${date}, Count: ${dateCounts[date]}`);
                male.push({ x: date, y: dateCounts[date] });
            }
        }
        return [
            { name: 'Users', points: male },
        ];
    }
    function csvBookToSeries(text) {
        //const lifeExp = 'average_life_expectancy';
        let dataAsJson = JSC.csv2Json(text);
        console.log(dataAsJson);
        let male = [];
        const dateCounts = {};
        dataAsJson.forEach(function (row) {
            // Ensure 'RegDate' property exists in the row object
            if (row.AddDate) {
                // Using moment.js to parse and format the date
                const parsedDate = moment(row.AddDate, 'DD/MM/YYYY');
                const formattedDate = parsedDate.format('D/M/YYYY');

                dateCounts[formattedDate] = (dateCounts[formattedDate] || 0) + 1;
            }
            else {
                console.error('Error: Row does not contain a "RegDate" property.');
            }
        });
        for (const date in dateCounts) {
            if (dateCounts.hasOwnProperty(date)) {
                console.log(`Date: ${date}, Count: ${dateCounts[date]}`);
                male.push({ x: date, y: dateCounts[date] });
            }
        }
        return [
            { name: 'Books', points: male },
        ];
    }



    function renderChart(series) {
        JSC.Chart('chartDiv', {
            title_label_text: 'No. of Users registered',
            annotations: [{
                label_text: 'Source: BookShop database',
                position: 'bottom left'
            }],
            legend_visible: false,
            xAxis_crosshair_enabled: true,
            defaultSeries_lastPoint_label_text: '<b>%seriesName</b>',
            defaultPoint_tooltip: '%seriesName <b>%yValue</b> Users',
            series: series
        });
    }

    function renderBookChart(series) {
        JSC.Chart('chartDivBook', {
            title_label_text: 'No. of Books Added',
            annotations: [{
                label_text: 'Source: BookShop database',
                position: 'bottom left'
            }],
            legend_visible: false,
            xAxis_crosshair_enabled: true,
            defaultSeries_lastPoint_label_text: '<b>%seriesName</b>',
            defaultPoint_tooltip: '%seriesName <b>%yValue</b> Books',
            series: series
        });
    }
});