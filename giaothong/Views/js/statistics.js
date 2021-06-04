google.load('visualization', '1.0', {'packages':['corechart']});
google.setOnLoadCallback(drawChart);
var xemay=0, oto=0, xetai=0, khac=0;
async function drawChart() {
    await $.ajax({
        method: "GET",
        url: "../controller/getLoi.php",
        success : function(response){
            let data = JSON.parse(response);
            for(let item of data){
                // console.log(item);
                if(item.phuongtien === 'Ô tô') oto++;
                else if(item.phuongtien === 'Xe máy') xemay++;
                else if(item.phuongtien === 'Xe tải') xetai++;
                else khac++;
            }
        }
    });
    // Create the data table.
    var data = new google.visualization.DataTable();
    // Create columns for the DataTable
    await data.addColumn('string');
    await data.addColumn('number', 'Devices');
    // Create Rows with data
    await data.addRows([
        ['Xe máy', xemay],
        ['Ô tô', oto],
        ['Xe tải', xetai],
        ['Phương tiện khác', khac]
    ]);
    //Create option for chart
    var options = {
        title: 'Tỉ lệ phương tiện vi phạm giao thông',
        pieHole: 0.4,
        'width': 1000,
        'height': 800,
        colors: ['#4374df', '#4185f4', '#76a7fa', '#a0c3ff'],
    };

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}