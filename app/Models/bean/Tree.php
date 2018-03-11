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
    private $nome_comum;
    private $especie;
    private $familia;
    private $cap;
    private $altura_total;
    private $classe_copa;
    private $sanidade;
    private $crescimento;
    private $pos_sociologica;
    private $utilizacao;
    private $caracteristicas;
    private $data_registro;
    private $usuario_nome;
    private $usuario_descricao;
    private $img_arvore;
    private $latitude;
    private $longitude;


    public function getId() {
        return $this->id;
    }

    public function setId($value) {
        $this->id = $value;
    }

    public function getNomeComum() {
        return $this->nome_comum;
    }

    public function setNomeComum($value) {
        $this->nome_comum = $value;
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
        return $this->altura_total;
    }

    public function setAlturaTotal($value) {
        $this->altura_total = $value;
    }

    public function getClasseCopa() {
        return $this->classe_copa;
    }

    public function setClasseCopa($value) {
        $this->classe_copa = $value;
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
        return $this->pos_sociologica;
    }

    public function setPosSociologica($value) {
        $this->pos_sociologica = $value;
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
        return $this->data_registro;
    }

    public function setDataRegistro($value) {
        $this->data_registro = $value;
    }

    public function getUsuarioNome() {
        return $this->usuario_nome;
    }

    public function setUsuarioNome($value) {
        $this->usuario_nome = $value;
    }

    public function getUsuarioDescricao() {
        return $this->usuario_descricao;
    }

    public function setUsuarioDescricao($value) {
        $this->usuario_descricao = $value;
    }

    public function getImgArvore() {
        return $this->img_arvore;
    }

    public function setImgArvore($value) {
        $this->img_arvore = $value;
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
            'nome_comum'        => $this->getNomeComum(),
            'especie'           => $this->getEspecie(),
            'familia'           => $this->getFamilia(),
            'cap'               => $this->getCap(),
            'altura_total'      => $this->getAlturaTotal(),
            'classe_copa'       => $this->getClasseCopa(),
            'sanidade'          => $this->getSanidade(),
            'crescimento'       => $this->getCrescimento(),
            'pos_sociologica'   => $this->getPosSociologica(),
            'utilizacao'        => $this->getUtilizacao(),
            'localizacao'       => $this->getLocalizacao(),
            'caracteristicas'   => $this->getCaracteristicas(),
            'data_registro'     => $this->getDataRegistro(),
            'usuario_nome'      => $this->getUsuarioNome(),
            'usuario_descricao' => $this->getUsuarioDescricao()
        ];
    }
}
