<?php

namespace App\Controllers;

class get_Daerah extends BaseController
{
	function index()
	{
		return view('get_daerah');
	}

	function action()
	{
        if ($this->request->isAJAX()) {
            $data = $_POST['data'];
            $id = $_POST['id'];

            $n=strlen($id);
            $m=($n==2?5:($n==5?8:13));
            if($this->request->getPost('data') == "kabupaten")
            {
                ?>
                Kabupaten/Kota
                <select id="form_kab">
                    <option value="">Pilih Kabupaten/Kota</option>
                    <?php 
                    $ch = curl_init(); 
                    curl_setopt($ch, CURLOPT_URL, "http://localhost/Zid/ProvinsiProjek/ProvinsiProjek/FixAPI/daftardaerah.php?kode=");
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $output = curl_exec($ch); 
                    $data =  json_decode($output);
                    if (count($data->data)) {
                        foreach ($data->data as $idx => $data) {
                            $kodex = $data->kode;
                            $namax = $data->nama;
                            $dart = strlen($kodex);
                            $jaww = substr($kodex,0,$n);
                            //echo $data->nama;
                            if($jaww == $id && $dart == $m)
                            {
                        ?>
                        <option value="<?php echo $kodex; ?>"><?php echo $namax; ?></option>
                        <?php 
                    }
                }
            }
                    ?>
            </select>
            <?php 
            }
            else if($this->request->getPost('data') == "kecamatan")
            {
                ?>
                <select id="form_kec">
                    <option value="">Pilih Kecamatan</option>
                    <?php 
                    $ch = curl_init(); 
                    curl_setopt($ch, CURLOPT_URL, "http://localhost/Zid/ProvinsiProjek/ProvinsiProjek/FixAPI/daftardaerah.php?kode=");
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $output = curl_exec($ch); 
                    $data =  json_decode($output);
                    if (count($data->data)) {
                        foreach ($data->data as $idx => $data) {
                            $kodex = $data->kode;
                            $namax = $data->nama;
                            $dart = strlen($kodex);
                            $jaww = substr($kodex,0,$n);
                            //echo $data->nama;
                            if($jaww == $id && $dart == $m)
                            {
                        ?>
                        <option value="<?php echo $kodex; ?>"><?php echo $namax; ?></option>
                        <?php 
                    }
                }
            }

                    ?>
                </select>

                <?php 
            }

            else if($data == "desa"){ 
                ?>
                <select id="form_kel">
                    <option value="">Pilih Provinsi</option>
                    <?php 
                    $ch = curl_init(); 
                    curl_setopt($ch, CURLOPT_URL, "http://localhost/Zid/ProvinsiProjek/ProvinsiProjek/FixAPI/daftardaerah.php?kode=");
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $output = curl_exec($ch); 
                    $data =  json_decode($output);
                    if (count($data->data)) {
                        foreach ($data->data as $idx => $data) {
                            $kodex = $data->kode;
                            $namax = $data->nama;
                            $dart = strlen($kodex);
                            //echo $data->nama;
                            if($dart == 2)
                            {
                        ?>
                        <option value="<?php echo $kodex; ?>"><?php echo $namax; ?></option>
                        <?php 
                    }
                }
            }
            
                    ?>
                </select>
                    
                <?php 
                    
            }
        }
    }
}

?>

