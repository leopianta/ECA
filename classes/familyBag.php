<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 06/09/2018
 * Time: 12:57
 */

class familyBag
{
    private $id_familyBag;
    private $str_month;
    private $str_year;
    private $str_month_reference;
    private $str_year_reference;
    private $tb_city_id_city;
    private $tb_beneficiaries_id_beneficiaries;
    private $str_date_service;
    private $db_value_service;


    public function __construct($id_familyBag, $str_month, $str_year, $str_month_reference, $str_year_reference, $tb_city_id_city, $tb_beneficiaries_id_beneficiaries, $str_date_service, $db_value_service)
    {
        $this->id_familyBag = $id_familyBag;
        $this->str_month = $str_month;
        $this->str_year = $str_year;
        $this->str_month_reference = $str_month_reference;
        $this->str_year_reference = $str_year_reference;
        $this->tb_city_id_city = $tb_city_id_city;
        $this->tb_beneficiaries_id_beneficiaries = $tb_beneficiaries_id_beneficiaries;
        $this->str_date_service = $str_date_service;
        $this->db_value_service = $db_value_service;
    }

    /**
     * @return mixed
     */
    public function getIdfamilyBag()
    {
        return $this->id_familyBag;
    }

    /**
     * @param mixed $id_familyBag
     */
    public function setIdfamilyBag($id_familyBag)
    {
        $this->id_familyBag = $id_familyBag;
    }

    /**
     * @return mixed
     */
    public function getStrMonth()
    {
        return $this->str_month;
    }

    /**
     * @param mixed $str_month
     */
    public function setStrMonth($str_month)
    {
        $this->str_month = $str_month;
    }

    /**
     * @return mixed
     */
    public function getStrYear()
    {
        return $this->str_year;
    }

    /**
     * @param mixed $str_year
     */
    public function setStrYear($str_year)
    {
        $this->str_year = $str_year;
    }

    /**
     * @return mixed
     */
    public function getStrMonthReference()
    {
        return $this->str_month_reference;
    }

    /**
     * @param mixed $str_month_reference
     */
    public function setStrMonthReference($str_month_reference)
    {
        $this->str_month_reference = $str_month_reference;
    }

    /**
     * @return mixed
     */
    public function getStrYearReference()
    {
        return $this->str_year_reference;
    }

    /**
     * @param mixed $str_year_reference
     */
    public function setStrYearReference($str_year_reference)
    {
        $this->str_year_reference = $str_year_reference;
    }

    /**
     * @return mixed
     */
    public function getTbCityIdCity()
    {
        return $this->tb_city_id_city;
    }

    /**
     * @param mixed $tb_city_id_city
     */
    public function setTbCityIdCity($tb_city_id_city)
    {
        $this->tb_city_id_city = $tb_city_id_city;
    }

    /**
     * @return mixed
     */
    public function getTbBeneficiariesIdBeneficiaries()
    {
        return $this->tb_beneficiaries_id_beneficiaries;
    }

    /**
     * @param mixed $tb_beneficiaries_id_beneficiaries
     */
    public function setTbBeneficiariesIdBeneficiaries($tb_beneficiaries_id_beneficiaries)
    {
        $this->tb_beneficiaries_id_beneficiaries = $tb_beneficiaries_id_beneficiaries;
    }

    /**
     * @return mixed
     */
    public function getStrDateService()
    {
        return $this->str_date_service;
    }

    /**
     * @param mixed $str_date_service
     */
    public function setStrDateService($str_date_service)
    {
        $this->str_date_service = $str_date_service;
    }

    /**
     * @return mixed
     */
    public function getDbValueService()
    {
        return $this->db_value_service;
    }

    /**
     * @param mixed $db_value_service
     */
    public function setDbValueService($db_value_service)
    {
        $this->db_value_service = $db_value_service;
    }




}