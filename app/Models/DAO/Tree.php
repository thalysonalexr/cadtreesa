<?php
/**
 * Data access class of the tree object
 *
 * @author Thalyson A. R. de Sousa <tha.motog@gmail.com>
 * @link https://github.com/thalysonrodrigues/
 *
 * @version 1.0
 * @package Models\DAO
 */

namespace app\Models\DAO;


use app\classes\Database;


class Tree extends Database
{
    /**
     * Create a new object of class Tree
     *
     * @param string $id identifier of the tree, its primary key
     *
     * @see \app\Model\bean\Tree
     * @see Database
     *
     * @return \app\Model\bean\Tree object object
     */
    public static function findOne($id) {

        $query = self::query("SELECT * FROM VW_ARVORES WHERE id=?", [$id]);
            
        $tree = [];

        foreach ($query as $value) {
            $object = new \app\Models\bean\Tree();
            $object->setId(              $value->id);
            $object->setNomeComum(       $value->nome_comum);
            $object->setEspecie(         $value->especie);
            $object->setFamilia(         $value->familia);
            $object->setCap(             $value->cap);
            $object->setAlturaTotal(     $value->altura_total);
            $object->setClasseCopa(      $value->classe_copa);
            $object->setSanidade(        $value->sanidade);
            $object->setCrescimento(     $value->crescimento);
            $object->setPosSociologica(  $value->pos_sociologica);
            $object->setUtilizacao(      $value->utilizacao);
            $object->setCaracteristicas( $value->caracteristicas);
            $object->setDataRegistro(    $value->data_registro);
            $object->setUsuarioNome(     $value->usuario_nome);
            $object->setUsuarioDescricao($value->usuario_descricao);
            $object->setImgArvore(       $value->img_arvore);
            $object->setLatitude(        $value->latitude);
            $object->setLongitude(       $value->longitude);
            $tree[] = $object;
        }
        return $tree[0];
    }
}
