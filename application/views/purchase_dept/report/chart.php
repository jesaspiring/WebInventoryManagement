<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chart using codeigniter and morris.js</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/morris.js/morris.css">
</head>

<body>
    <h2>Chart using Codeigniter and Morris.js</h2>


    <div class="container">
        <div class="row">
            <!--Department and Area-->
            <div class="col-md-5">
                <h4>Date</h4>
                <?php echo form_open('PurchasingDept/chartReport'); ?>
                <select name="date" id="date" class="form-control">
                    <option value="">Select Month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select name="year" id="year" class="form-control">
                    <option value="">Select Year</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                </select>
                <button type="submit">Generate</button>
                </form>
            </div>
            <div class=col-md-2></div>
        </div>
    </div>

    <canvas id="pie-chart"></canvas>

    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/morris.js/morris.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        /* Morris.Bar({
            element: 'graph',
            data: <?php echo $data; ?>,
            xkey: 'y',
            ykeys: ['a'],
            labels: ['Total Received Request'],

        });
        

        Morris.Donut({
            element: 'graph',
            data: <?php echo $data; ?>
            data: [{
                    label: "Credit",
                    value: 12
                },
                {
                    label: "Debit",
                    value: 30
                },
                {
                    label: "Loan",
                    value: 20
                }
            ]
        });*/

        $(function() {
            //get the pie chart canvas
            var cData = JSON.parse(`<?php echo $chart_data; ?>`);
            var ctx = $("#pie-chart");

            //pie chart data
            var data = {
                labels: cData.label,
                datasets: [{
                    label: "Request Count",
                    data: cData.data,
                    backgroundColor: [
                        "#DEB887",
                        "#A9A9A9",
                        "#DC143C",
                        "#F4A460",
                        "#2E8B57",
                        "#1D7A46",
                        "#CDA776",
                    ],
                    borderColor: [
                        "#CDA776",
                        "#989898",
                        "#CB252B",
                        "#E39371",
                        "#1D7A46",
                        "#F4A460",
                        "#CDA776",
                    ],
                    borderWidth: [1, 1, 1, 1, 1, 1, 1]
                }]
            };

            //options
            var options = {
                responsive: true,
                title: {
                    display: true,
                    position: "top",
                    text: "Laptop Repairs",
                    fontSize: 18,
                    fontColor: "#111"
                },
                legend: {
                    display: true,
                    position: "bottom",
                    labels: {
                        fontColor: "#333",
                        fontSize: 16
                    }
                }
            };

            //create Pie Chart class object
            var chart1 = new Chart(ctx, {
                type: "pie",
                data: data,
                options: options
            });

        });
    </script>
</body>

</html>