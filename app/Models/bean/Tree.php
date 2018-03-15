<?php
/**
 * Class tree data model
 *
 * @author Thalyson A. R. de Sousa <tha.motog@gmail.com>
 * @link https://github.com/thalysonrodrigues/
 *
 * @version 1.0
 * @package Models\bean
 */

namespace app\Models\bean;


class Tree implements \JsonSerializable
{
    private $id;
    private $nomeComum;
    private $especie;
    private $familia;
    private $cap;
    private $alturaTotal;
    private $classeCopa;
    private $sanidade;
    private $crescimento;
    private $posSociologica;
    private $utilizacao;
    private $caracteristicas;
    private $dataRegistro;
    private $usuarioNome;
    private $usuarioDescricao;
    private $imgArvore;
    private $latitude;
    private $longitude;


    public function getId() {
        return $this->id;
    }

    public function setId($value) {
        $this->id = $value;
    }

    public function getNomeComum() {
        return $this->nomeComum;
    }

    public function setNomeComum($value) {
        $this->nomeComum = $value;
    }

    public function getEspecie() {
        return $this->especie;
    }

    public function setEspecie($value) {
        $this->especie = $value;
    }

    public function getFamilia() {
        return $this->familia;
    }

    public function setFamilia($value) {
        $this->familia = $value;
    }

    public function getCap() {
        return $this->cap;
    }

    public function setCap($value) {
        $this->cap = $value;
    }

    public function getAlturaTotal() {
        return $this->alturaTotal;
    }

    public function setAlturaTotal($value) {
        $this->alturaTotal = $value;
    }

    public function getClasseCopa() {
        return $this->classeCopa;
    }

    public function setClasseCopa($value) {
        $this->classeCopa = $value;
    }

    public function getSanidade() {
        return $this->sanidade;
    }

    public function setSanidade($value) {
        $this->sanidade = $value;
    }

    public function getCrescimento() {
        return $this->crescimento;
    }

    public function setCrescimento($value) {
        $this->crescimento = $value;
    }

    public function getPosSociologica() {
        return $this->posSociologica;
    }

    public function setPosSociologica($value) {
        $this->posSociologica = $value;
    }

    public function getUtilizacao() {
        return $this->utilizacao;
    }

    public function setUtilizacao($value) {
        $this->utilizacao = $value;
    }

    public function getCaracteristicas() {
        return $this->caracteristicas;
    }

    public function setCaracteristicas($value) {
        $this->caracteristicas = $value;
    }

    public function getDataRegistro() {
        return $this->dataRegistro;
    }

    public function setDataRegistro($value) {
        $this->dataRegistro = $value;
    }

    public function getUsuarioNome() {
        return $this->usuarioNome;
    }

    public function setUsuarioNome($value) {
        $this->usuarioNome = $value;
    }

    public function getUsuarioDescricao() {
        return $this->usuarioDescricao;
    }

    public function setUsuarioDescricao($value) {
        $this->usuarioDescricao = $value;
    }

    public function getImgArvore() {
        return $this->imgArvore;
    }

    public function setImgArvore($value) {
        $this->imgArvore = $value;
    }

    public function getLatitude() {
        return $this->latitude;
    }

    public function setLatitude($value) {
        $this->latitude = $value;
    }

    public function getLongitude() {
        return $this->longitude;
    }

    public function setLongitude($value) {
        $this->longitude = $value;
    }

    /**
     * method to transform object into array for json
     *
     * @return array object array of this class
     */
    public function jsonSerialize() {
        return
        [
            'id'                => $this->getId(),
            'nomeComum'        => $this->getNomeComum(),
            'especie'           => $this->getEspecie(),
            'familia'           => $this->getFamilia(),
            'cap'               => $this->getCap(),
            'alturaTotal'      => $this->getAlturaTotal(),
            'classeCopa'       => $this->getClasseCopa(),
            'sanidade'          => $this->getSanidade(),
            'crescimento'       => $this->getCrescimento(),
            'posSociologica'   => $this->getPosSociologica(),
            'utilizacao'        => $this->getUtilizacao(),
            'localizacao'       => $this->getLocalizacao(),
            'caracteristicas'   => $this->getCaracteristicas(),
            'dataRegistro'     => $this->getDataRegistro(),
            'usuarioNome'      => $this->getUsuarioNome(),
            'usuarioDescricao' => $this->getUsuarioDescricao()
        ];
    }
}
