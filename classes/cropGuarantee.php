<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 27/08/2018
 * Time: 22:07
 */

class cropGuarantee
{
    private $id_cropGuarantee;
    private $str_month;
    private $str_year;
    private $db_value;
    private $tb_city_id_city;
    private $tb_beneficiaries_id_beneficiaries;

    /**
     * cropGuarantee constructor.
     * @param $id_cropGuarantee
     * @param $str_month
     * @param $str_year
     * @param $db_value
     * @param $tb_city_id_city
     * @param $tb_beneficiaries_id_beneficiaries
     */
    public function __construct($id_cropGuarantee, $str_month, $str_year, $db_value, $tb_city_id_city, $tb_beneficiaries_id_beneficiaries)
    {
        $this->id_cropGuarantee = $id_cropGuarantee;
        $this->str_month = $str_month;
        $this->str_year = $str_year;
        $this->db_value = $db_value;
        $this->tb_city_id_city = $tb_city_id_city;
        $this->tb_beneficiaries_id_beneficiaries = $tb_beneficiaries_id_beneficiaries;
    }

    /**
     * @return mixed
     */
    public function getIdCropGuarantee()
    {
        return $this->id_cropGuarantee;
    }

    /**
     * @param mixed $id_cropGuarantee
     */
    public function setIdCropGuarantee($id_cropGuarantee): void
    {
        $this->id_cropGuarantee = $id_cropGuarantee;
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
    public function setStrMonth($str_month): void
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
    public function setStrYear($str_year): void
    {
        $this->str_year = $str_year;
    }

    /**
     * @return mixed
     */
    public function getDbValue()
    {
        return $this->db_value;
    }

    /**
     * @param mixed $db_value
     */
    public function setDbValue($db_value): void
    {
        $this->db_value = $db_value;
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
    public function setTbCityIdCity($tb_city_id_city): void
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
    public function setTbBeneficiariesIdBeneficiaries($tb_beneficiaries_id_beneficiaries): void
    {
        $this->tb_beneficiaries_id_beneficiaries = $tb_beneficiaries_id_beneficiaries;
    }




}