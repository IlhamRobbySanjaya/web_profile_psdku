<?php
class Staff extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_staff');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
        
		$this->data['data']=$this->m_staff->get_all_staff();
        $this->data['breadcrumb']  = 'Data Staff';
        $this->data['main_view']   = 'admin/v_staff';            
        $this->load->view('theme/admintemplate',$this->data);
        
	}
	
	function simpan_staff(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $photo=$gbr['file_name'];
							$nama=strip_tags($this->input->post('xnama'));
							$jabatan=strip_tags($this->input->post('xjabatan'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							$mapel=strip_tags($this->input->post('xmapel'));

							$this->m_staff->simpan_staff($nama,$jabatan,$jenkel,$tmp_lahir,$tgl_lahir,$mapel,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/staff');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/staff');
	                }
	                 
	            }else{
					$nama=strip_tags($this->input->post('xnama'));
					$jabatan=strip_tags($this->input->post('xjabatan'));
					$jenkel=strip_tags($this->input->post('xjenkel'));
					$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
					$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
					$mapel=strip_tags($this->input->post('xmapel'));

					$this->m_staff->simpan_staff_tanpa_img($nama,$jabatan,$jenkel,$tmp_lahir,$tgl_lahir,$mapel);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/staff');
				}
				
	}
	
	function update_staff(){
				
	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $gambar=$this->input->post('gambar');
							$path='../assets/images/'.$gambar;
							unlink($path);

	                        $photo=$gbr['file_name'];
	                        $kode=$this->input->post('kode');
							$nama=strip_tags($this->input->post('xnama'));
							$jabatan=strip_tags($this->input->post('xjabatan'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							$mapel=strip_tags($this->input->post('xmapel'));

							$this->m_staff->update_staff($kode,$nama,$jabatan,$jenkel,$tmp_lahir,$tgl_lahir,$mapel,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/staff');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/staff');
	                }
	                
	            }else{
							$kode=$this->input->post('kode');
							$nama=strip_tags($this->input->post('xnama'));
							$jabatan=strip_tags($this->input->post('xjabatan'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							$mapel=strip_tags($this->input->post('xmapel'));
							$this->m_staff->update_staff_tanpa_img($kode,$nama,$jabatan,$jenkel,$tmp_lahir,$tgl_lahir,$mapel);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/staff');
	            } 

	}

	function hapus_staff(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_staff->hapus_staff($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/staff');
	}

}