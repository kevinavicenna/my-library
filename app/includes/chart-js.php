<?php
if ($_SESSION['status'] == 'administrator') {
    echo '<script>';
    echo 'var optionsProfileVisit = {';
    echo 'annotations: { position: "back" },';
    echo 'dataLabels: { enabled: false },';
    echo 'chart: { type: "bar", height: 300 },';
    echo 'fill: { opacity: 1 },';
    echo 'plotOptions: {},';
    echo 'series: [{';
    echo 'name: "Member",';
    echo 'data: [';    
    $bulan_data = array_fill(1, 12, 0); // Inisialisasi array dengan nilai 0 untuk setiap bulan
    while ($list_member = mysqli_fetch_array($query_admin)) {
        $bulan_data[$list_member['bulan']] = (int)$list_member['total'];
    }
    echo implode(",", $bulan_data);
    echo ']';
    echo '}],';
    echo 'colors: "#435ebe",';
    echo 'xaxis: {';
    echo 'categories: [';
    echo '"Januari", "Februari", "Maret", "April", "Mei", "Juni",';
    echo '"Juli", "Agustus", "September", "Oktober", "November", "Desember"';
    echo ']';
    echo '}';
    echo '};';
    echo 'var chartProfileVisit = new ApexCharts(';
    echo 'document.querySelector("#chart-profile-visit"),';
    echo 'optionsProfileVisit';
    echo ');';
    echo 'chartProfileVisit.render();';
    echo '</script>';
} else if ($_SESSION['status'] == 'member') {
    echo '<script>';
    echo 'var optionsProfileVisit = {';
    echo 'annotations: { position: "back" },';
    echo 'dataLabels: { enabled: false },';
    echo 'chart: { type: "bar", height: 300 },';
    echo 'fill: { opacity: 1 },';
    echo 'plotOptions: {},';
    echo 'series: [{';
    echo 'name: "Peminjaman",';
    echo 'data: [';    
    $bulan_data = array_fill(1, 12, 0); // Inisialisasi array dengan nilai 0 untuk setiap bulan
    while ($list_pinjam = mysqli_fetch_array($query_member)) {
        $bulan_data[$list_pinjam['bulan']] = (int)$list_pinjam['total'];
    }
    echo implode(",", $bulan_data);
    echo ']';
    echo '}],';
    echo 'colors: "#435ebe",';
    echo 'xaxis: {';
    echo 'categories: [';
    echo '"Januari", "Februari", "Maret", "April", "Mei", "Juni",';
    echo '"Juli", "Agustus", "September", "Oktober", "November", "Desember"';
    echo ']';
    echo '}';
    echo '};';
    echo 'var chartProfileVisit = new ApexCharts(';
    echo 'document.querySelector("#chart-profile-visit"),';
    echo 'optionsProfileVisit';
    echo ');';
    echo 'chartProfileVisit.render();';
    echo '</script>';
}
?>