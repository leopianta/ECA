<?php
class fishermanInsurance
{
    private $id_fisherman_insurance;
    private $str_month;
    private $str_year;
    private $dbl_value;
    private $tb_beneficiaries_id_beneficiaries;
    private $tb_city_id_city;

    public function __construct($id_fisherman_insurance, $str_month, $str_year, $dbl_value, $tb_beneficiaries_id_beneficiaries, $tb_city_id_city)
    {
        $this->id_fisherman_insurance = $id_fisherman_insurance;
        $this->str_month = $str_month;
        $this->str_year = $str_year;
        $this->dbl_value = $dbl_value;
        $this->tb_beneficiaries_id_beneficiaries = $tb_beneficiaries_id_beneficiaries;
        $this->tb_city_id_city = $tb_city_id_city;
    }

    public function getIdFishermanInsurance()
    {
        return $this->id_fisherman_insurance;
    }

    public function setIdFishermanInsurance($id_fisherman_insurance): void
    {
        $this->id_fisherman_insurance = $id_fisherman_insurance;
    }

    public function getStrMonth()
    {
        return $this->str_month;
    }

    public function setStrMonth($str_month): void
    {
        $this->str_month = $str_month;
    }

    public function getStrYear()
    {
        return $this->str_year;
    }

    public function setStrYear($str_year): void
    {
        $this->str_year = $str_year;
    }

    public function getDblValue()
    {
        return $this->dbl_value;
    }

    public function setDblValue($dbl_value): void
    {
        $this->dbl_value = $dbl_value;
    }

    public function getTbBeneficiariesIdBeneficiaries()
    {
        return $this->tb_beneficiaries_id_beneficiaries;
    }

    public function setTbBeneficiariesIdBeneficiaries($tb_beneficiaries_id_beneficiaries): void
    {
        $this->tb_beneficiaries_id_beneficiaries = $tb_beneficiaries_id_beneficiaries;
    }

    public function getTbCityIdCity()
    {
        return $this->tb_city_id_city;
    }

    public function setTbCityIdCity($tb_city_id_city): void
    {
        $this->tb_city_id_city = $tb_city_id_city;
    }
}