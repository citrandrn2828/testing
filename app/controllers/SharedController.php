<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * tb_barang_keluar_kode_barang_option_list Model Action
     * @return array
     */
	function tb_barang_keluar_kode_barang_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT kode_barang AS value,nama_barang AS label FROM tb_barang ORDER BY kode_barang ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_barang_masuk_kode_barang_option_list Model Action
     * @return array
     */
	function tb_barang_masuk_kode_barang_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT kode_barang AS value,nama_barang AS label FROM tb_barang ORDER BY kode_barang ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

}
