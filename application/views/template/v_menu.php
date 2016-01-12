 <?php
    if($this->session->userdata('level')=='Kepegawaian'){

    echo '
	<a href="#">
    <i class="fa fa-dashboard"></i> Tambah Pegawai </a>
	<a href="#">
    <i class="fa fa-dashboard"></i>Laporan Data Pegawai </a>
    ';
    
    }
    else if($this->session->userdata('level')=='Keuangan'){
    
    echo '
	<a href="#">
    <i class="fa fa-dashboard"></i> Pembayaran Gaji </a>
	<a href="#">
    <i class="fa fa-dashboard"></i> Laporan Penggajian </a>
    ';
    
    } else {
    


    echo '
    <a href="">
    <i class="fa fa-dashboard"></i> Dashboard </a>
	<a href="">
    <i class="fa fa-dashboard"></i> <span>Jamaah</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
        <li class="active"><a href="'.base_url().'jamaah"><i class="fa fa-circle-o"></i> Data Jamaah</a></li>
        <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
    </ul>
    ';
    
    }
    
    echo '<i class="fa fa-dashboard"></i> <a href="'.base_url().'login/user/logout/">Logout</a>';
?>    
