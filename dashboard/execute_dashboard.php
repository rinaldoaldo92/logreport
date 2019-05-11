<?php

$report = "SELECT * FROM log_action INNER JOIN data_trouble_ticket ON log_action.no_tt = data_trouble_ticket.no_tt";
$rows_report = mysqli_query($koneksi, $report);

$info = "SELECT * FROM informations";
$info_rows = mysqli_query($koneksi, $info);

$select_all = "SELECT no_tt from data_trouble_ticket";
$count_all = mysqli_query($koneksi, $select_all);

$select_open = "SELECT no_tt from data_trouble_ticket WHERE status_tt = 'Open'";
$count_open = mysqli_query($koneksi, $select_open);

$select_close = "SELECT no_tt as total from data_trouble_ticket WHERE status_tt = 'Close'";
$count_close = mysqli_query($koneksi, $select_close);

$select_sla = "SELECT no_tt from log_action WHERE status_log_action = 'SLA Running'";
$count_sla = mysqli_query($koneksi, $select_sla);

$select_vendor = "SELECT no_tt from log_action WHERE status_log_action = 'Vendor'";
$count_vendor = mysqli_query($koneksi, $select_vendor);

$select_limit = "SELECT no_tt from log_action WHERE status_log_action = 'Limit Access'";
$count_limit = mysqli_query($koneksi, $select_limit);

$select_block = "SELECT no_tt from log_action WHERE status_log_action = 'Block Access'";
$count_block = mysqli_query($koneksi, $select_block);

$data_users = "SELECT * FROM users";
$rows_users = mysqli_query($koneksi, $data_users);

$data_tt = "SELECT no_tt, status_tt FROM data_trouble_ticket WHERE alarm_detected = ''";
$query_data_tt = mysqli_query($koneksi, $data_tt);

$tarik_data_code_site = "SELECT * FROM information_site_client";
$row_code_site = mysqli_query($koneksi, $tarik_data_code_site);

?>