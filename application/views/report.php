<!-- load library jquery dan highcharts -->
<a href="<?php echo site_url('admin') ?>">Kembali</a></p>
<script src="<?php echo base_url();?>asset/js/jquery.js"></script>
<script src="<?php echo base_url();?>asset/js/highcharts.js"></script>
<!-- end load library -->
 
<?php
    /* Mengambil query report*/
    foreach($report as $result){
        $bulan[] = $result->bulan; //ambil bulan
        $value[] = (float) $result->nilai; //ambil nilai
    }
    /* end mengambil query*/
     
?>


 
<!-- Load chart dengan menggunakan ID -->
<div id="report"></div>
<!-- END load chart -->
 
<!-- Script untuk memanggil library Highcharts -->
<script type="text/javascript">
$(function () {
    $('#report').highcharts({
        chart: {
            type: 'column',
            margin: 75,
            options3d: {
                enabled: false,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Jumlah Komentar Masuk',
            style: {
                    fontSize: '18px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        subtitle: {
           text: 'Periode : 2018',
           style: {
                    fontSize: '15px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories:  <?php echo json_encode($bulan);?>
        },
        exporting: { 
            enabled: false 
        },
        yAxis: {
            title: {
                text: 'Jumlah Komentar'
            },
        },
        tooltip: {
             formatter: function() {
                 return 'Jumlah komentar yang masuk pada bulan <b>' + this.x + '</b> adalah <b>' + Highcharts.numberFormat(this.y,0) ;
             }
          },
        series: [{
            name: 'Jumlah komentar masuk per bulan',
            data: <?php echo json_encode($value);?>,
            shadow : true,
            dataLabels: {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function() {
                     return Highcharts.numberFormat(this.y, 0);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
        </script>