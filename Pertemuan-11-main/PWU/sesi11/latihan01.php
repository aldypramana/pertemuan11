<?php
    $dta[0]["nama"] = "Komang Adi";
    $dta[0]["alamat"] = "Jl. Utama 5 Blok A17";
    $dta[0]["tgl_lahir"] = "2011-11-28";
    $dta[0]["jenis_kelamin"] = "Laki - Laki";
    $dta[0]["no_hp"] = "087865229884";
    
    $dta[1]["nama"] = "Wayan Eva";
    $dta[1]["alamat"] = "Jl. Utama 5 Blok A18";
    $dta[1]["tgl_lahir"] = "2011-10-25";
    $dta[1]["jenis_kelamin"] = "Perempuan";
    $dta[1]["no_hp"] = "0878645556999";
    
    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($dta);
    