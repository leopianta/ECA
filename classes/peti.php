<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 10/09/2018
 * Time: 21:49
 */

class peti
{
    private $id_tb_peti;
    private $tb_situacao_beneficiario;
    private $tb_valor_parcela;
    private $tb_city_id_city;
    private $tb_beneficiaries_id_beneficiaries;
    private $str_month;
    private $str_year;

    /**
     * Peti constructor.
     * @param $id_tb_peti
     * @param $tb_situacao_beneficiario
     * @param $tb_valor_parcela
     * @param $tb_city_id_city
     * @param $tb_beneficiaries_id_beneficiaries
     * @param $str_month
     * @param $str_year
     */

    public function __construct($id_tb_peti, $tb_situacao_beneficiario, $tb_valor_parcela, $tb_city_id_city, $tb_beneficiaries_id_beneficiaries, $str_month, $str_year)
    {
        $this->id_tb_peti = $id_tb_peti;
        $this->tb_situacao_beneficiario = $tb_situacao_beneficiario;
        $this->tb_valor_parcela = $tb_valor_parcela;
        $this->tb_city_id_city = $tb_city_id_city;
        $this->tb_beneficiaries_id_beneficiaries = $tb_beneficiaries_id_beneficiaries;
        $this->str_month = $str_month;
        $this->str_year = $str_year;
    }

    /**
     * @return mixed
     */
    public function getIdTbPeti()
    {
        return $this->id_tb_peti;
    }

    /**
     * @param mixed $id_tb_peti
     */
    public function setIdTbPeti($id_tb_peti): void
    {
        $this->id_tb_peti = $id_tb_peti;
    }

    /**
     * @return mixed
     */
    public function getTbSituacaoBeneficiario()
    {
        return $this->tb_situacao_beneficiario;
    }

    /**
     * @param mixed $tb_situacao_beneficiario
     */
    public function setTbSituacaoBeneficiario($tb_situacao_beneficiario): void
    {
        $this->tb_situacao_beneficiario = $tb_situacao_beneficiario;
    }

    /**
     * @return mixed
     */
    public function getTbValorParcela()
    {
        return $this->tb_valor_parcela;
    }

    /**
     * @param mixed $tb_valor_parcela
     */
    public function setTbValorParcela($tb_valor_parcela): void
    {
        $this->tb_valor_parcela = $tb_valor_parcela;
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




}