<?php
class M_staff extends CI_Model
{

	function get_all_staff()
	{
		$hsl = $this->db->query("SELECT * FROM tbl_staff");
		return $hsl;
	}

	function simpan_staff($nama, $jabatan, $jenkel, $tmp_lahir, $tgl_lahir, $mapel, $photo)
	{
		$hsl = $this->db->query("INSERT INTO tbl_staff (staff_nama,staff_jabatan,staff_jenkel,staff_tmp_lahir,staff_tgl_lahir,staff_ps,staff_photo) VALUES ('$nama','$jabatan','$jenkel','$tmp_lahir','$tgl_lahir','$mapel','$photo')");
		return $hsl;
	}
	function simpan_staff_tanpa_img($nama, $jabatan, $jenkel, $tmp_lahir, $tgl_lahir, $mapel)
	{
		$hsl = $this->db->query("INSERT INTO tbl_staff (staff_nama,staff_jabatan,staff_jenkel,staff_tmp_lahir,staff_tgl_lahir,staff_ps) VALUES ('$nama','$jabatan','$jenkel','$tmp_lahir','$tgl_lahir','$mapel')");
		return $hsl;
	}

	function update_staff($kode, $nama, $jabatan, $jenkel, $tmp_lahir, $tgl_lahir, $mapel, $photo)
	{
		$hsl = $this->db->query("UPDATE tbl_staff SET staff_nama='$nama',staff_jabatan='$jabatan',staff_jenkel='$jenkel',staff_tmp_lahir='$tmp_lahir',staff_tgl_lahir='$tgl_lahir',staff_ps='$mapel',staff_photo='$photo' WHERE id_staff='$kode'");
		return $hsl;
	}
	function update_staff_tanpa_img($kode, $nama, $jabatan, $jenkel, $tmp_lahir, $tgl_lahir, $mapel)
	{
		$hsl = $this->db->query("UPDATE tbl_staff SET staff_nama='$nama',staff_jabatan='$jabatan',staff_jenkel='$jenkel',staff_tmp_lahir='$tmp_lahir',staff_tgl_lahir='$tgl_lahir',staff_ps='$mapel' WHERE id_staff='$kode'");
		return $hsl;
	}
	function hapus_staff($kode)
	{
		$hsl = $this->db->query("DELETE FROM tbl_staff WHERE id_staff='$kode'");
		return $hsl;
	}

	//front-end
	function staff()
	{
		$hsl = $this->db->query("SELECT * FROM tbl_staff");
		return $hsl;
	}
	function staff_perpage($offset, $limit)
	{
		$hsl = $this->db->query("SELECT * FROM tbl_staff limit $offset,$limit");
		return $hsl;
	}
}
