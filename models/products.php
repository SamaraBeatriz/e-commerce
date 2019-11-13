<?php
    class products extends model{
        public function getList(){
            $array = array();
            $sql = "SELECT *,
            (select brands.name from brands where brands.id = products.id_brand) as brand_name, (select categories.name from categories where categories.id = products.id_category) as category_name
            FROM products";
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0)
            {
                $array = $sql->fetchAll();
                
                // buscar as imagens de cada produto
                foreach($array as $key => $item)
                {
                    $array[$key]['images'] = this->getImagesByProductId($item['id']);
                }
            }
            return $array;
        }
    }
?>
