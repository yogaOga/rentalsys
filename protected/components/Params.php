<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Params
 *
 * @author TAMARO-IND
 */
class Params {

    //put your code here
    // All Constant 
    // Static Lookup for Prospect Type
    public static function prospectTypeLookup() {
        return array(
            'VISIT' => 'Visit',
            'CALL' => 'Call by Phone',
            'EMAIL' => 'Email',
            'MEET' => 'Meeting and Presentation'
        );
    }

    // Static Lookup for Prospect Status
    public static function prospectStatusLookup() {
        return array(
            'HOT' => 'HOT',
            'WARM' => 'WARM',
            'COLD' => 'COLD',
        );
    }

    // Static Lookup for Company Title
    public static function companyTitle() {
        return array(
            'PT' => 'PT',
            'PD' => 'PD',
            'CV' => 'CV',
            'PN' => 'PD',
            'FIRMA' => 'FIRMA',
            'YAYASAN' => 'YAYASAN',
            'KOMITE' => 'KOMITE',
            'REP.OFFICE' => 'REP.OFFICE',
            'MR' => 'MR',
        );
    }

    // Static Lookup for Payment System
    public static function getPaymentSystem() {
        return array(
            '1' => 'Tunai',
            '2' => 'Cek',
            '3' => 'Transfer',
        );
    }

    // Static Lookup for Vehicles on CMD
    public static function getVehicleRef() {
        return array(
            '1' => 'Stock',
            '2' => 'GS',
            '3' => 'Vehicle Request',
            '4' => 'GS+VR'
        );
    }

    // Static Lookup for Occupations
    public static function getOccupation() {
        return array(
            '1' => 'Direktur',
            '2' => 'Manager',
            '3' => 'Staff',
            '4' => 'Etc'
        );
    }

    // Static Lookup for Gender
    public static function getGender() {
        return array(
            'MALE' => 'Male',
            'FEMALE' => 'Female'
        );
    }

    // Static Lookup for Blood Type
    public static function getBloodType() {
        return array(
            'A' => 'A',
            'B' => 'B',
            'AB' => 'AB',
            'O' => 'O'
        );
    }

    // Static Lookup for Nationality Type
    public static function getNationality() {
        return array(
            'WNI' => 'WNI',
            'WNA' => 'WNA'
        );
    }

    // Static Lookup for Home Status
    public static function getHomeStatus() {
        return array(
            'RENT' => 'Rent',
            'PARENT' => 'Parents',
            'OWN' => 'Own Home',
            'OTHER' => 'Others'
        );
    }

    // Static Lookup for Religion
    public static function getReligion() {
        return array(
            'ISLAM' => 'Islam',
            'KATHOLIK' => 'Katholik',
            'PROTESTAN' => 'PROTESTAN',
            'HINDU' => 'Hindu',
            'BUDHA' => 'Budha',
            'OTHERS' => 'Others'
        );
    }

    // Static Lookup for Driving Licence
    public static function getDrivingLicence() {
        return array(
            'A' => 'A',
            'B1' => 'B1',
            'B2' => 'B2',
            'C' => 'C',
            'OTH' => 'Others'
        );
    }

    // Static Lookup for Marital Status
    public static function getMaritalStatus() {
        return array(
            'SINGLE' => 'Single',
            'MARRIED' => 'Married',
            'DIVORCED' => 'Divorced'
        );
    }

    // Year List
    public static function getYearList() {
        $yearNow = date("Y");
        $yearFrom = $yearNow - 100;
        $yearTo = $yearNow;
        $arrYears = array();

        foreach (range($yearFrom, $yearTo) as $number) {
            $arrYears[$number] = $number;
        }

        return array_reverse($arrYears, true);
    }
    
    // Education Level Lists
    public static function getEducations() {
        return array(
            'SD' => 'SD',
            'SMP' => 'SMP',
            'SMA' => 'SMA',
            'D3' => 'D3',
            'S1' => 'S1',
            'S2' => 'S2',
            'S3' => 'S3',
        );
    }
    
    // Language Skill Level
    public static function getSkillLevel(){
        return array(
            'EXCELLENT'=>'Excellent',
            'GOOD'=>'Good',
            'FAIR'=>'Fair',
            'POOR'=>'Poor',
        );
    }
	
	// Departement
	public static function getDepartement(){
		return array(
			'1' => 'test',
		);
	}
	
	// Seksi
	public static function getSeksi(){
		return array(
			'1' => 'test',
		);
	}

	// Divisi
	public static function getDivisi(){
		return array(
			'1' => 'test',
		);
	}
	
	// Jabatan
	public static function getJabatan(){
		return array(
			'1' => 'test',
		);
	}
}
