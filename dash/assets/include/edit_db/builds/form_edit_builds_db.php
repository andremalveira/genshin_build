<?php
    $id = '';
    
    if(!empty($_POST['id'])){

        $id = ($_POST['id']);
        include '../../../../../assets/include/config.php';
        
    }

    $table_builds = "SELECT * FROM builds WHERE id = '$id'";
    $table_builds = $pdo->query($table_builds);
    $builds = $table_builds->fetch();


?>


<div class="row margin_bottom_25px">
    <div class="col-sm">
        <input id="nome" name="nome" type="text" value="<?php echo ucfirst($builds['nome']);?>" class="form-control"  placeholder="Nome">
    </div>                    
</div>
<label for="">ARMAS</label>
<div class="row margin_bottom_15px">
    <div class="col-sm-4">
        <select name="arma_1" type="text"class="form-control">
        <option class="dp_n" value="<?php echo $builds['arma_1'];?>" ><?php if(empty($builds['arma_1'])){echo 'Arma 1';} else {echo $builds['arma_1'];}?></option>
            <?php
                foreach($armas as $arma) {
                    echo'<option value="'.$arma['nome'].'">'.ucfirst($arma['nome']).'</option>';
                }
            ?>
        </select>
    </div>
    <div class="col-sm-4">
        <select name="arma_2" type="text"class="form-control">
        <option class="dp_n" value="<?php echo $builds['arma_2'];?>" ><?php if(empty($builds['arma_2'])){echo 'Arma 2';} else {echo $builds['arma_2'];}?></option>
            <?php
                foreach($armas as $arma) {
                    echo'<option value="'.$arma['nome'].'">'.ucfirst($arma['nome']).'</option>';
                }
            ?>
        </select>
    </div>
    <div class="col-sm-4">
        <select name="arma_3" type="text"class="form-control">
        <option class="dp_n" value="<?php echo $builds['arma_3'];?>" ><?php if(empty($builds['arma_3'])){echo 'Arma 3';} else {echo $builds['arma_3'];}?></option>
            <?php
                foreach($armas as $arma) {
                    echo'<option value="'.$arma['nome'].'">'.ucfirst($arma['nome']).'</option>';
                }
            ?>
        </select>
    </div>
</div>
<div class="row margin_bottom_25px">
    <div class="col-sm-4">
        <select name="a1_refina" type="text"class="form-control">
        <option class="dp_n" value="<?php echo $builds['a1_refina'];?>"><?php if(empty($builds['a1_refina'])){echo 'Refinamento';} else {echo $builds['a1_refina'];}?></option>
        <option value="1">N??vel 1</option>
        <option value="2">N??vel 2</option>
        <option value="3">N??vel 3</option>
        <option value="4">N??vel 4</option>
        <option value="5">N??vel 5</option>
        </select>
    </div>
    <div class="col-sm-4">
        <select name="a2_refina" type="text"class="form-control">
        <option class="dp_n" value="<?php echo $builds['a2_refina'];?>"><?php if(empty($builds['a2_refina'])){echo 'Refinamento';} else {echo $builds['a2_refina'];}?></option>
        <option value="1">N??vel 1</option>
        <option value="2">N??vel 2</option>
        <option value="3">N??vel 3</option>
        <option value="4">N??vel 4</option>
        <option value="5">N??vel 5</option>
        </select>
    </div>
    <div class="col-sm-4">
        <select name="a3_refina" type="text"class="form-control">
        <option class="dp_n" value="<?php echo $builds['a3_refina'];?>"><?php if(empty($builds['a3_refina'])){echo 'Refinamento';} else {echo $builds['a3_refina'];}?></option>
        <option value="1">N??vel 1</option>
        <option value="2">N??vel 2</option>
        <option value="3">N??vel 3</option>
        <option value="4">N??vel 4</option>
        <option value="5">N??vel 5</option>
        </select>
    </div>
</div>
<div class="tab-menu">
    <ul>
        <li><a href="#" class="edit-a active-a" data-id="build1">BUILD 1</a></li>
        <li><a href="#" class="edit-a" data-id="build2">BUILD 2</a></li>
        <li><a href="#" class="edit-a" data-id="build3">BUILD 3</a></li>
    </ul>
</div>

<div  class="edit tab-active" data-id="build1">
    <div class="row margin_bottom_25px">
        <div class="col-sm margin_bottom_25px">
            <div class="row margin_l_r_0px margin_bottom_15px">
                <select name="row1_flor" type="text"class="form-control" required="">
                    <option class="dp_n" value="<?php echo $builds['row1_flor'];?>" ><?php if(empty($builds['row1_flor'])){echo 'Flor';} else {echo $builds['row1_flor'];}?></option>
                    <?php
                    foreach($conjuntos as $conjunto) {
                        echo'<option value="'.$conjunto['flor'].'">'.ucfirst($conjunto['flor']).'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="row margin_l_r_0px  margin_bottom_15px">
                <select name="row1_flor_attr" type="text"class="mb form-control" required="">
                    <option class="dp_n" value="<?php echo $builds['row1_flor_attr'];?>" ><?php if(empty($builds['row1_flor_attr'])){echo 'Atributo';} else {echo $builds['row1_flor_attr'];}?></option>
                    <?php
                        foreach($attributes as $attribute) {
                        echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                        }
                    ?>
                </select>
                <select name="row1_flor_subattr1" type="text"class="mb form-control">
                    <option class="dp_n" value="<?php echo $builds['row1_flor_subattr1'];?>" ><?php if(empty($builds['row1_flor_subattr1'])){echo 'Sub Atributo 1';} else {echo $builds['row1_flor_subattr1'];}?></option>
                    <?php
                        foreach($attributes as $attribute) {
                        echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                        }
                    ?>
                </select>
                <select name="row1_flor_subattr2" type="text"class="mb form-control">
                    <option class="dp_n" value="<?php echo $builds['row1_flor_subattr2'];?>" ><?php if(empty($builds['row1_flor_subattr2'])){echo 'Sub Atributo 1';} else {echo $builds['row1_flor_subattr2'];}?></option>
                    <?php
                        foreach($attributes as $attribute) {
                        echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                        }
                    ?>
                </select>
                <select name="row1_flor_subattr3" type="text"class="mb form-control">
                    <option class="dp_n" value="<?php echo $builds['row1_flor_subattr3'];?>" ><?php if(empty($builds['row1_flor_subattr3'])){echo 'Sub Atributo 1';} else {echo $builds['row1_flor_subattr3'];}?></option>
                    <?php
                        foreach($attributes as $attribute) {
                        echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                        }
                    ?>
                </select>
                <select name="row1_flor_subattr4" type="text"class="mb form-control">
                    <option class="dp_n" value="<?php echo $builds['row1_flor_subattr4'];?>" ><?php if(empty($builds['row1_flor_subattr4'])){echo 'Sub Atributo 1';} else {echo $builds['row1_flor_subattr4'];}?></option>
                    <?php
                        foreach($attributes as $attribute) {
                        echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="row margin_l_r_0px  margin_bottom_15px">
                <select name="row1_flor_star" type="text"class="form-control" required="">
                    <option class="dp_n" value="<?php echo $builds['row1_flor_star'];?>"><?php if(empty($builds['row1_flor_star'])){echo '';} else {echo $builds['row1_flor_star'];}?> Estrelas</option>
                    <option value="5">5 Estrelas</option>
                    <option value="4">4 Estrelas</option>
                    <option value="3">3 Estrelas</option>
                </select>
            </div>
        </div>

        <div class="col-sm margin_bottom_25px">
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row1_pena" type="text"class="form-control" required="">
                <option class="dp_n" value="<?php echo $builds['row1_pena'];?>"><?php if(empty($builds['row1_pena'])){echo 'Pena';} else {echo $builds['row1_pena'];}?></option>
                <?php
                foreach($conjuntos as $conjunto) {
                    echo'<option value="'.$conjunto['pena'].'">'.ucfirst($conjunto['pena']).'</option>';
                }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row1_pena_attr" type="text"class="mb form-control" required="">
                <option class="dp_n" value="<?php echo $builds['row1_pena_attr'];?>"><?php if(empty($builds['row1_pena_attr'])){echo 'Atributo';} else {echo $builds['row1_pena_attr'];}?></option>
                <?php
                    foreach($attributes as $attribute) {
                    echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                    }
                ?>
            </select>
                <select name="row1_pena_subattr1" type="text"class="mb form-control">
                    <option class="dp_n" value="<?php echo $builds['row1_pena_subattr1'];?>" ><?php if(empty($builds['row1_pena_subattr1'])){echo 'Sub Atributo 1';} else {echo $builds['row1_pena_subattr1'];}?></option>
                    <?php
                        foreach($attributes as $attribute) {
                        echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                        }
                    ?>
                </select>
                <select name="row1_pena_subattr2" type="text"class="mb form-control">
                    <option class="dp_n" value="<?php echo $builds['row1_pena_subattr2'];?>" ><?php if(empty($builds['row1_pena_subattr2'])){echo 'Sub Atributo 1';} else {echo $builds['row1_pena_subattr2'];}?></option>
                    <?php
                        foreach($attributes as $attribute) {
                        echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                        }
                    ?>
                </select>
                <select name="row1_pena_subattr3" type="text"class="mb form-control">
                    <option class="dp_n" value="<?php echo $builds['row1_pena_subattr3'];?>" ><?php if(empty($builds['row1_pena_subattr3'])){echo 'Sub Atributo 1';} else {echo $builds['row1_pena_subattr3'];}?></option>
                    <?php
                        foreach($attributes as $attribute) {
                        echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                        }
                    ?>
                </select>
                <select name="row1_pena_subattr4" type="text"class="mb form-control">
                    <option class="dp_n" value="<?php echo $builds['row1_pena_subattr4'];?>" ><?php if(empty($builds['row1_pena_subattr4'])){echo 'Sub Atributo 1';} else {echo $builds['row1_pena_subattr4'];}?></option>
                    <?php
                        foreach($attributes as $attribute) {
                        echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="row margin_l_r_0px  margin_bottom_15px">
            <select name="row1_pena_star" type="text"class="form-control" required="">
                    <option class="dp_n" value="<?php echo $builds['row1_pena_star'];?>"><?php if(empty($builds['row1_pena_star'])){echo '';} else {echo $builds['row1_pena_star'];}?> Estrelas</option>
                    <option value="5">5 Estrelas</option>
                    <option value="4">4 Estrelas</option>
                    <option value="3">3 Estrelas</option>
                </select>
            </div>
        </div>

        <div class="col-sm margin_bottom_25px">
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row1_ampulheta" type="text"class="form-control" required="">
                <option class="dp_n" value="<?php echo $builds['row1_ampulheta'];?>"><?php if(empty($builds['row1_ampulheta'])){echo 'Areia';} else {echo $builds['row1_ampulheta'];}?></option>
                <?php
                foreach($conjuntos as $conjunto) {
                    echo'<option value="'.$conjunto['ampulheta'].'">'.ucfirst($conjunto['ampulheta']).'</option>';
                }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row1_ampulheta_attr" type="text"class=" mb form-control" required="">
                <option class="dp_n" value="<?php echo $builds['row1_ampulheta_attr'];?>"><?php if(empty($builds['row1_ampulheta_attr'])){echo 'Atributo';} else {echo $builds['row1_ampulheta_attr'];}?></option>
                <?php
                    foreach($attributes as $attribute) {
                    echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                    }
                ?>
            </select>
                <select name="row1_ampulheta_subattr1" type="text"class="mb form-control">
                    <option class="dp_n" value="<?php echo $builds['row1_ampulheta_subattr1'];?>" ><?php if(empty($builds['row1_ampulheta_subattr1'])){echo 'Sub Atributo 1';} else {echo $builds['row1_ampulheta_subattr1'];}?></option>
                    <?php
                        foreach($attributes as $attribute) {
                        echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                        }
                    ?>
                </select>
                <select name="row1_ampulheta_subattr2" type="text"class="mb form-control">
                    <option class="dp_n" value="<?php echo $builds['row1_ampulheta_subattr2'];?>" ><?php if(empty($builds['row1_ampulheta_subattr2'])){echo 'Sub Atributo 1';} else {echo $builds['row1_ampulheta_subattr2'];}?></option>
                    <?php
                        foreach($attributes as $attribute) {
                        echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                        }
                    ?>
                </select>
                <select name="row1_ampulheta_subattr3" type="text"class="mb form-control">
                    <option class="dp_n" value="<?php echo $builds['row1_ampulheta_subattr3'];?>" ><?php if(empty($builds['row1_ampulheta_subattr3'])){echo 'Sub Atributo 1';} else {echo $builds['row1_ampulheta_subattr3'];}?></option>
                    <?php
                        foreach($attributes as $attribute) {
                        echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                        }
                    ?>
                </select>
                <select name="row1_ampulheta_subattr4" type="text"class="mb form-control">
                    <option class="dp_n" value="<?php echo $builds['row1_ampulheta_subattr4'];?>" ><?php if(empty($builds['row1_ampulheta_subattr4'])){echo 'Sub Atributo 1';} else {echo $builds['row1_ampulheta_subattr4'];}?></option>
                    <?php
                        foreach($attributes as $attribute) {
                        echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="row margin_l_r_0px  margin_bottom_15px">
            <select name="row1_ampulheta_star" type="text"class="form-control" required="">
                    <option class="dp_n" value="<?php echo $builds['row1_ampulheta_star'];?>"><?php if(empty($builds['row1_ampulheta_star'])){echo '';} else {echo $builds['row1_ampulheta_star'];}?> Estrelas</option>
                    <option value="5">5 Estrelas</option>
                    <option value="4">4 Estrelas</option>
                    <option value="3">3 Estrelas</option>
                </select>
            </div>
        </div>

        <div class="col-sm margin_bottom_25px">
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row1_ta??a" type="text"class="form-control" required="">
                <option class="dp_n" value="<?php echo $builds['row1_ta??a'];?>"><?php if(empty($builds['row1_ta??a'])){echo 'C??lice';} else {echo $builds['row1_ta??a'];}?></option>
                <?php
                foreach($conjuntos as $conjunto) {
                    echo'<option value="'.$conjunto['ta??a'].'">'.ucfirst($conjunto['ta??a']).'</option>';
                }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row1_ta??a_attr" type="text"class="mb form-control" required="">
                <option class="dp_n" value="<?php echo $builds['row1_ta??a_attr'];?>"><?php if(empty($builds['row1_ta??a_attr'])){echo 'Atributo';} else {echo $builds['row1_ta??a_attr'];}?></option>
                <?php
                    foreach($attributes as $attribute) {
                    echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                    }
                ?>
            </select>
                <select name="row1_ta??a_subattr1" type="text"class="mb form-control">
                    <option class="dp_n" value="<?php echo $builds['row1_ta??a_subattr1'];?>" ><?php if(empty($builds['row1_ta??a_subattr1'])){echo 'Sub Atributo 1';} else {echo $builds['row1_ta??a_subattr1'];}?></option>
                    <?php
                        foreach($attributes as $attribute) {
                        echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                        }
                    ?>
                </select>
                <select name="row1_ta??a_subattr2" type="text"class="mb form-control">
                    <option class="dp_n" value="<?php echo $builds['row1_ta??a_subattr2'];?>" ><?php if(empty($builds['row1_ta??a_subattr2'])){echo 'Sub Atributo 1';} else {echo $builds['row1_ta??a_subattr2'];}?></option>
                    <?php
                        foreach($attributes as $attribute) {
                        echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                        }
                    ?>
                </select>
                <select name="row1_ta??a_subattr3" type="text"class="mb form-control">
                    <option class="dp_n" value="<?php echo $builds['row1_ta??a_subattr3'];?>" ><?php if(empty($builds['row1_ta??a_subattr3'])){echo 'Sub Atributo 1';} else {echo $builds['row1_ta??a_subattr3'];}?></option>
                    <?php
                        foreach($attributes as $attribute) {
                        echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                        }
                    ?>
                </select>
                <select name="row1_ta??a_subattr4" type="text"class="mb form-control">
                    <option class="dp_n" value="<?php echo $builds['row1_ta??a_subattr4'];?>" ><?php if(empty($builds['row1_ta??a_subattr4'])){echo 'Sub Atributo 1';} else {echo $builds['row1_ta??a_subattr4'];}?></option>
                    <?php
                        foreach($attributes as $attribute) {
                        echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="row margin_l_r_0px  margin_bottom_15px">
            <select name="row1_ta??a_star" type="text"class="form-control" required="">
                    <option class="dp_n" value="<?php echo $builds['row1_ta??a_star'];?>"><?php if(empty($builds['row1_ta??a_star'])){echo '';} else {echo $builds['row1_ta??a_star'];}?> Estrelas</option>
                    <option value="5">5 Estrelas</option>
                    <option value="4">4 Estrelas</option>
                    <option value="3">3 Estrelas</option>
                </select>
            </div>
        </div>

        <div class="col-sm margin_bottom_25px">
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row1_coroa" type="text"class="form-control" required="">
                <option class="dp_n" value="<?php echo $builds['row1_coroa'];?>"><?php if(empty($builds['row1_coroa'])){echo 'Tiara';} else {echo $builds['row1_coroa'];}?></option>
                <?php
                foreach($conjuntos as $conjunto) {
                    echo'<option value="'.$conjunto['coroa'].'">'.ucfirst($conjunto['coroa']).'</option>';
                }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row1_coroa_attr" type="text"class="mb form-control" required="">
                <option class="dp_n" value="<?php echo $builds['row1_coroa_attr'];?>"><?php if(empty($builds['row1_coroa_attr'])){echo 'Atributo';} else {echo $builds['row1_coroa_attr'];}?></option>
                <?php
                    foreach($attributes as $attribute) {
                    echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                    }
                ?>
            </select>
                <select name="row1_coroa_subattr1" type="text"class="mb form-control">
                    <option class="dp_n" value="<?php echo $builds['row1_coroa_subattr1'];?>" ><?php if(empty($builds['row1_coroa_subattr1'])){echo 'Sub Atributo 1';} else {echo $builds['row1_coroa_subattr1'];}?></option>
                    <?php
                        foreach($attributes as $attribute) {
                        echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                        }
                    ?>
                </select>
                <select name="row1_coroa_subattr2" type="text"class="mb form-control">
                    <option class="dp_n" value="<?php echo $builds['row1_coroa_subattr2'];?>" ><?php if(empty($builds['row1_coroa_subattr2'])){echo 'Sub Atributo 1';} else {echo $builds['row1_coroa_subattr2'];}?></option>
                    <?php
                        foreach($attributes as $attribute) {
                        echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                        }
                    ?>
                </select>
                <select name="row1_coroa_subattr3" type="text"class="mb form-control">
                    <option class="dp_n" value="<?php echo $builds['row1_coroa_subattr3'];?>" ><?php if(empty($builds['row1_coroa_subattr3'])){echo 'Sub Atributo 1';} else {echo $builds['row1_coroa_subattr3'];}?></option>
                    <?php
                        foreach($attributes as $attribute) {
                        echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                        }
                    ?>
                </select>
                <select name="row1_coroa_subattr4" type="text"class="mb form-control">
                    <option class="dp_n" value="<?php echo $builds['row1_coroa_subattr4'];?>" ><?php if(empty($builds['row1_coroa_subattr4'])){echo 'Sub Atributo 1';} else {echo $builds['row1_flor_subattr4'];}?></option>
                    <?php
                        foreach($attributes as $attribute) {
                        echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="row margin_l_r_0px  margin_bottom_15px">
            <select name="row1_coroa_star" type="text"class="form-control" required="">
                    <option class="dp_n" value="<?php echo $builds['row1_coroa_star'];?>"><?php if(empty($builds['row1_coroa_star'])){echo '';} else {echo $builds['row1_coroa_star'];}?> Estrelas</option>
                    <option value="5">5 Estrelas</option>
                    <option value="4">4 Estrelas</option>
                    <option value="3">3 Estrelas</option>
                </select>
            </div>
        </div>

        <div class="row width_100 margin_l_r_0px margin_bottom_25px">
            <div class="col-sm">
                <select name="row1_c1" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row1_c1'];?>"><?php if(empty($builds['row1_c1'])){echo 'Conjunto 1';} else {echo $builds['row1_c1'];}?></option>
                    <?php
                        foreach($conjuntos as $conjunto) {
                            echo'<option value="'.$conjunto['conjunto'].'">'.ucfirst($conjunto['conjunto']).'</option>';
                        }
                    ?>
                </select>
            </div> 
            <div class="col-sm">
                <select name="row1_c1_2pe??as" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row1_c1_2pe??as'];?>"><?php if(empty($builds['row1_c1_2pe??as'])){echo '2 pe??as';} else {echo $builds['row1_c1_2pe??as'];}?></option>
                    <?php
                        foreach($conjuntos as $conjunto) {
                            echo'<option value="'.$conjunto['2_pe??as'].'">'.ucfirst($conjunto['2_pe??as']).'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="col-sm">
                <select name="row1_c1_4pe??as" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row1_c1_4pe??as'];?>"><?php if(empty($builds['row1_c1_4pe??as'])){echo '4 pe??as';} else {echo $builds['row1_c1_4pe??as'];}?></option>
                    <?php
                        foreach($conjuntos as $conjunto) {
                            echo'<option value="'.$conjunto['4_pe??as'].'">'.ucfirst($conjunto['4_pe??as']).'</option>';
                        }
                    ?>
                </select>
            </div>
        </div>

        <div class="row width_100 margin_l_r_0px margin_bottom_25px">
            <div class="col-sm">
                <select name="row1_c2" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row1_c2'];?>"><?php if(empty($builds['row1_c2'])){echo 'Conjunto 2';} else {echo $builds['row1_c2'];}?></option>
                    <?php
                        foreach($conjuntos as $conjunto) {
                            echo'<option value="'.$conjunto['conjunto'].'">'.ucfirst($conjunto['conjunto']).'</option>';
                        }
                    ?>
                </select>
            </div> 
            <div class="col-sm">
                <select name="row1_c2_2pe??as" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row1_c2_2pe??as'];?>"><?php if(empty($builds['row1_c2_2pe??as'])){echo '2 pe??as';} else {echo $builds['row1_c2_2pe??as'];}?></option>
                    <?php
                        foreach($conjuntos as $conjunto) {
                            echo'<option value="'.$conjunto['2_pe??as'].'">'.ucfirst($conjunto['2_pe??as']).'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="col-sm">
                <select name="row1_c2_4pe??as" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row1_c2_4pe??as'];?>"><?php if(empty($builds['row1_c2_4pe??as'])){echo '4 pe??as';} else {echo $builds['row1_c2_4pe??as'];}?></option>
                    <?php
                        foreach($conjuntos as $conjunto) {
                            echo'<option value="'.$conjunto['4_pe??as'].'">'.ucfirst($conjunto['4_pe??as']).'</option>';
                        }
                    ?>
                </select>
            </div>
        </div>
    </div>
</div>
<div  class="edit " data-id="build2">
    <div class="row margin_bottom_25px">
        <div class="col-sm margin_bottom_25px">
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row2_flor" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row2_flor'];?>" ><?php if(empty($builds['row2_flor'])){echo 'Flor';} else {echo $builds['row2_flor'];}?></option>
                <?php
                foreach($conjuntos as $conjunto) {
                    echo'<option value="'.$conjunto['flor'].'">'.ucfirst($conjunto['flor']).'</option>';
                }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px  margin_bottom_15px">
            <select name="row2_flor_attr" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row2_flor_attr'];?>" ><?php if(empty($builds['row2_flor_attr'])){echo 'Atributo';} else {echo $builds['row2_flor_attr'];}?></option>
                <?php
                    foreach($attributes as $attribute) {
                    echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                    }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px  margin_bottom_15px">
            <select name="row2_flor_star" type="text"class="form-control">
                    <option class="dp_n" value="<?php echo $builds['row2_flor_star'];?>"><?php if(empty($builds['row2_flor_star'])){echo '';} else {echo $builds['row2_flor_star'];}?> Estrelas</option>
                    <option value="5">5 Estrelas</option>
                    <option value="4">4 Estrelas</option>
                    <option value="3">3 Estrelas</option>
                </select>
            </div>
        </div>

        <div class="col-sm margin_bottom_25px">
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row2_pena" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row2_pena'];?>"><?php if(empty($builds['row2_pena'])){echo 'Pena';} else {echo $builds['row2_pena'];}?></option>
                <?php
                foreach($conjuntos as $conjunto) {
                    echo'<option value="'.$conjunto['pena'].'">'.ucfirst($conjunto['pena']).'</option>';
                }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row2_pena_attr" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row2_pena_attr'];?>"><?php if(empty($builds['row2_pena_attr'])){echo 'Atributo';} else {echo $builds['row2_pena_attr'];}?></option>
                <?php
                    foreach($attributes as $attribute) {
                    echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                    }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px  margin_bottom_15px">
            <select name="row2_pena_star" type="text"class="form-control">
                    <option class="dp_n" value="<?php echo $builds['row2_pena_star'];?>"><?php if(empty($builds['row2_pena_star'])){echo '';} else {echo $builds['row2_pena_star'];}?> Estrelas</option>
                    <option value="5">5 Estrelas</option>
                    <option value="4">4 Estrelas</option>
                    <option value="3">3 Estrelas</option>
                </select>
            </div>
        </div>

        <div class="col-sm margin_bottom_25px">
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row2_ampulheta" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row2_ampulheta'];?>"><?php if(empty($builds['row2_ampulheta'])){echo 'Areia';} else {echo $builds['row2_ampulheta'];}?></option>
                <?php
                foreach($conjuntos as $conjunto) {
                    echo'<option value="'.$conjunto['ampulheta'].'">'.ucfirst($conjunto['ampulheta']).'</option>';
                }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row2_ampulheta_attr" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row2_ampulheta_attr'];?>"><?php if(empty($builds['row2_ampulheta_attr'])){echo 'Atributo';} else {echo $builds['row2_ampulheta_attr'];}?></option>
                <?php
                    foreach($attributes as $attribute) {
                    echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                    }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px  margin_bottom_15px">
            <select name="row2_ampulheta_star" type="text"class="form-control">
                    <option class="dp_n" value="<?php echo $builds['row2_ampulheta_star'];?>"><?php if(empty($builds['row2_ampulheta_star'])){echo '';} else {echo $builds['row2_ampulheta_star'];}?> Estrelas</option>
                    <option value="5">5 Estrelas</option>
                    <option value="4">4 Estrelas</option>
                    <option value="3">3 Estrelas</option>
                </select>
            </div>
        </div>

        <div class="col-sm margin_bottom_25px">
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row2_ta??a" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row2_ta??a'];?>"><?php if(empty($builds['row2_ta??a'])){echo 'C??lice';} else {echo $builds['row2_ta??a'];}?></option>
                <?php
                foreach($conjuntos as $conjunto) {
                    echo'<option value="'.$conjunto['ta??a'].'">'.ucfirst($conjunto['ta??a']).'</option>';
                }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row2_ta??a_attr" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row2_ta??a_attr'];?>"><?php if(empty($builds['row2_ta??a_attr'])){echo 'Atributo';} else {echo $builds['row2_ta??a_attr'];}?></option>
                <?php
                    foreach($attributes as $attribute) {
                    echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                    }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px  margin_bottom_15px">
            <select name="row2_ta??a_star" type="text"class="form-control">
                    <option class="dp_n" value="<?php echo $builds['row2_ta??a_star'];?>"><?php if(empty($builds['row2_ta??a_star'])){echo '';} else {echo $builds['row2_ta??a_star'];}?> Estrelas</option>
                    <option value="5">5 Estrelas</option>
                    <option value="4">4 Estrelas</option>
                    <option value="3">3 Estrelas</option>
                </select>
            </div>
        </div>

        <div class="col-sm margin_bottom_25px">
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row2_coroa" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row2_coroa'];?>"><?php if(empty($builds['row2_coroa'])){echo 'Tiara';} else {echo $builds['row2_coroa'];}?></option>
                <?php
                foreach($conjuntos as $conjunto) {
                    echo'<option value="'.$conjunto['coroa'].'">'.ucfirst($conjunto['coroa']).'</option>';
                }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row2_coroa_attr" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row2_coroa_attr'];?>"><?php if(empty($builds['row2_coroa_attr'])){echo 'Atributo';} else {echo $builds['row2_coroa_attr'];}?></option>
                <?php
                    foreach($attributes as $attribute) {
                    echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                    }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px  margin_bottom_15px">
            <select name="row2_coroa_star" type="text"class="form-control">
                    <option class="dp_n" value="<?php echo $builds['row2_coroa_star'];?>"><?php if(empty($builds['row2_coroa_star'])){echo '';} else {echo $builds['row2_coroa_star'];}?> Estrelas</option>
                    <option value="5">5 Estrelas</option>
                    <option value="4">4 Estrelas</option>
                    <option value="3">3 Estrelas</option>
                </select>
            </div>
        </div>

        <div class="row width_100 margin_l_r_0px margin_bottom_25px">
            <div class="col-sm">
                <select name="row2_c1" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row2_c1'];?>"><?php if(empty($builds['row2_c1'])){echo 'Conjunto 1';} else {echo $builds['row2_c1'];}?></option>
                    <?php
                        foreach($conjuntos as $conjunto) {
                            echo'<option value="'.$conjunto['conjunto'].'">'.ucfirst($conjunto['conjunto']).'</option>';
                        }
                    ?>
                </select>
            </div> 
            <div class="col-sm">
                <select name="row2_c1_2pe??as" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row2_c1_2pe??as'];?>"><?php if(empty($builds['row2_c1_2pe??as'])){echo '2 pe??as';} else {echo $builds['row2_c1_2pe??as'];}?></option>
                    <?php
                        foreach($conjuntos as $conjunto) {
                            echo'<option value="'.$conjunto['2_pe??as'].'">'.ucfirst($conjunto['2_pe??as']).'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="col-sm">
                <select name="row2_c1_4pe??as" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row2_c1_4pe??as'];?>"><?php if(empty($builds['row2_c1_4pe??as'])){echo '4 pe??as';} else {echo $builds['row2_c1_4pe??as'];}?></option>
                    <?php
                        foreach($conjuntos as $conjunto) {
                            echo'<option value="'.$conjunto['4_pe??as'].'">'.ucfirst($conjunto['4_pe??as']).'</option>';
                        }
                    ?>
                </select>
            </div>
        </div>

        <div class="row width_100 margin_l_r_0px margin_bottom_25px">
            <div class="col-sm">
                <select name="row2_c2" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row2_c2'];?>"><?php if(empty($builds['row2_c2'])){echo 'Conjunto 2';} else {echo $builds['row2_c2'];}?></option>
                    <?php
                        foreach($conjuntos as $conjunto) {
                            echo'<option value="'.$conjunto['conjunto'].'">'.ucfirst($conjunto['conjunto']).'</option>';
                        }
                    ?>
                </select>
            </div> 
            <div class="col-sm">
                <select name="row2_c2_2pe??as" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row2_c2_2pe??as'];?>"><?php if(empty($builds['row2_c2_2pe??as'])){echo '2 pe??as';} else {echo $builds['row2_c2_2pe??as'];}?></option>
                    <?php
                        foreach($conjuntos as $conjunto) {
                            echo'<option value="'.$conjunto['2_pe??as'].'">'.ucfirst($conjunto['2_pe??as']).'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="col-sm">
                <select name="row2_c2_4pe??as" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row2_c2_4pe??as'];?>"><?php if(empty($builds['row2_c2_4pe??as'])){echo '4 pe??as';} else {echo $builds['row2_c2_4pe??as'];}?></option>
                    <?php
                        foreach($conjuntos as $conjunto) {
                            echo'<option value="'.$conjunto['4_pe??as'].'">'.ucfirst($conjunto['4_pe??as']).'</option>';
                        }
                    ?>
                </select>
            </div>
        </div>

    </div>
</div>
<div  class="edit " data-id="build3">
    <div class="row margin_bottom_25px">
        <div class="col-sm margin_bottom_25px">
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row3_flor" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row3_flor'];?>" ><?php if(empty($builds['row3_flor'])){echo 'Flor';} else {echo $builds['row3_flor'];}?></option>
                <?php
                foreach($conjuntos as $conjunto) {
                    echo'<option value="'.$conjunto['flor'].'">'.ucfirst($conjunto['flor']).'</option>';
                }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px  margin_bottom_15px">
            <select name="row3_flor_attr" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row3_flor_attr'];?>" ><?php if(empty($builds['row3_flor_attr'])){echo 'Atributo';} else {echo $builds['row3_flor_attr'];}?></option>
                <?php
                    foreach($attributes as $attribute) {
                    echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                    }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px  margin_bottom_15px">
            <select name="row3_flor_star" type="text"class="form-control">
                    <option class="dp_n" value="<?php echo $builds['row3_flor_star'];?>"><?php if(empty($builds['row3_flor_star'])){echo '';} else {echo $builds['row3_flor_star'];}?> Estrelas</option>
                    <option value="5">5 Estrelas</option>
                    <option value="4">4 Estrelas</option>
                    <option value="3">3 Estrelas</option>
                </select>
            </div>
        </div>

        <div class="col-sm margin_bottom_25px">
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row3_pena" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row3_pena'];?>"><?php if(empty($builds['row3_pena'])){echo 'Pena';} else {echo $builds['row3_pena'];}?></option>
                <?php
                foreach($conjuntos as $conjunto) {
                    echo'<option value="'.$conjunto['pena'].'">'.ucfirst($conjunto['pena']).'</option>';
                }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row3_pena_attr" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row3_pena_attr'];?>"><?php if(empty($builds['row3_pena_attr'])){echo 'Atributo';} else {echo $builds['row3_pena_attr'];}?></option>
                <?php
                    foreach($attributes as $attribute) {
                    echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                    }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px  margin_bottom_15px">
            <select name="row3_pena_star" type="text"class="form-control">
                    <option class="dp_n" value="<?php echo $builds['row3_pena_star'];?>"><?php if(empty($builds['row3_pena_star'])){echo '';} else {echo $builds['row3_pena_star'];}?> Estrelas</option>
                    <option value="5">5 Estrelas</option>
                    <option value="4">4 Estrelas</option>
                    <option value="3">3 Estrelas</option>
                </select>
            </div>
        </div>

        <div class="col-sm margin_bottom_25px">
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row3_ampulheta" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row3_ampulheta'];?>"><?php if(empty($builds['row3_ampulheta'])){echo 'Areia';} else {echo $builds['row3_ampulheta'];}?></option>
                <?php
                foreach($conjuntos as $conjunto) {
                    echo'<option value="'.$conjunto['ampulheta'].'">'.ucfirst($conjunto['ampulheta']).'</option>';
                }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row3_ampulheta_attr" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row3_ampulheta_attr'];?>"><?php if(empty($builds['row3_ampulheta_attr'])){echo 'Atributo';} else {echo $builds['row3_ampulheta_attr'];}?></option>
                <?php
                    foreach($attributes as $attribute) {
                    echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                    }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px  margin_bottom_15px">
            <select name="row3_ampulheta_star" type="text"class="form-control">
                    <option class="dp_n" value="<?php echo $builds['row3_ampulheta_star'];?>"><?php if(empty($builds['row3_ampulheta_star'])){echo '';} else {echo $builds['row3_ampulheta_star'];}?> Estrelas</option>
                    <option value="5">5 Estrelas</option>
                    <option value="4">4 Estrelas</option>
                    <option value="3">3 Estrelas</option>
                </select>
            </div>
        </div>

        <div class="col-sm margin_bottom_25px">
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row3_ta??a" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row3_ta??a'];?>"><?php if(empty($builds['row3_ta??a'])){echo 'C??lice';} else {echo $builds['row3_ta??a'];}?></option>
                <?php
                foreach($conjuntos as $conjunto) {
                    echo'<option value="'.$conjunto['ta??a'].'">'.ucfirst($conjunto['ta??a']).'</option>';
                }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row3_ta??a_attr" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row3_ta??a_attr'];?>"><?php if(empty($builds['row3_ta??a_attr'])){echo 'Atributo';} else {echo $builds['row3_ta??a_attr'];}?></option>
                <?php
                    foreach($attributes as $attribute) {
                    echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                    }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px  margin_bottom_15px">
            <select name="row3_ta??a_star" type="text"class="form-control">
                    <option class="dp_n" value="<?php echo $builds['row3_ta??a_star'];?>"><?php if(empty($builds['row3_ta??a_star'])){echo '';} else {echo $builds['row3_ta??a_star'];}?> Estrelas</option>
                    <option value="5">5 Estrelas</option>
                    <option value="4">4 Estrelas</option>
                    <option value="3">3 Estrelas</option>
                </select>
            </div>
        </div>

        <div class="col-sm margin_bottom_25px">
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row3_coroa" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row3_coroa'];?>"><?php if(empty($builds['row3_coroa'])){echo 'Tiara';} else {echo $builds['row3_coroa'];}?></option>
                <?php
                foreach($conjuntos as $conjunto) {
                    echo'<option value="'.$conjunto['coroa'].'">'.ucfirst($conjunto['coroa']).'</option>';
                }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px margin_bottom_15px">
            <select name="row3_coroa_attr" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row3_coroa_attr'];?>"><?php if(empty($builds['row3_coroa_attr'])){echo 'Atributo';} else {echo $builds['row3_coroa_attr'];}?></option>
                <?php
                    foreach($attributes as $attribute) {
                    echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                    }
                ?>
            </select>
            </div>
            <div class="row margin_l_r_0px  margin_bottom_15px">
            <select name="row3_coroa_star" type="text"class="form-control">
                    <option class="dp_n" value="<?php echo $builds['row3_coroa_star'];?>"><?php if(empty($builds['row3_coroa_star'])){echo '';} else {echo $builds['row3_coroa_star'];}?> Estrelas</option>
                    <option value="5">5 Estrelas</option>
                    <option value="4">4 Estrelas</option>
                    <option value="3">3 Estrelas</option>
                </select>
            </div>
        </div>

        <div class="row width_100 margin_l_r_0px margin_bottom_25px">
            <div class="col-sm">
                <select name="row3_c1" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row3_c1'];?>"><?php if(empty($builds['row3_c1'])){echo 'Conjunto 1';} else {echo $builds['row3_c1'];}?></option>
                    <?php
                        foreach($conjuntos as $conjunto) {
                            echo'<option value="'.$conjunto['conjunto'].'">'.ucfirst($conjunto['conjunto']).'</option>';
                        }
                    ?>
                </select>
            </div> 
            <div class="col-sm">
                <select name="row3_c1_2pe??as" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row3_c1_2pe??as'];?>"><?php if(empty($builds['row3_c1_2pe??as'])){echo '2 pe??as';} else {echo $builds['row3_c1_2pe??as'];}?></option>
                    <?php
                        foreach($conjuntos as $conjunto) {
                            echo'<option value="'.$conjunto['2_pe??as'].'">'.ucfirst($conjunto['2_pe??as']).'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="col-sm">
                <select name="row3_c1_4pe??as" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row3_c1_4pe??as'];?>"><?php if(empty($builds['row3_c1_4pe??as'])){echo '4 pe??as';} else {echo $builds['row3_c1_4pe??as'];}?></option>
                    <?php
                        foreach($conjuntos as $conjunto) {
                            echo'<option value="'.$conjunto['4_pe??as'].'">'.ucfirst($conjunto['4_pe??as']).'</option>';
                        }
                    ?>
                </select>
            </div>
        </div>

        <div class="row width_100 margin_l_r_0px margin_bottom_25px">
            <div class="col-sm">
                <select name="row3_c2" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row3_c2'];?>"><?php if(empty($builds['row3_c2'])){echo 'Conjunto 2';} else {echo $builds['row3_c2'];}?></option>
                    <?php
                        foreach($conjuntos as $conjunto) {
                            echo'<option value="'.$conjunto['conjunto'].'">'.ucfirst($conjunto['conjunto']).'</option>';
                        }
                    ?>
                </select>
            </div> 
            <div class="col-sm">
                <select name="row3_c2_2pe??as" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row3_c2_2pe??as'];?>"><?php if(empty($builds['row3_c2_2pe??as'])){echo '2 pe??as';} else {echo $builds['row3_c2_2pe??as'];}?></option>
                    <?php
                        foreach($conjuntos as $conjunto) {
                            echo'<option value="'.$conjunto['2_pe??as'].'">'.ucfirst($conjunto['2_pe??as']).'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="col-sm">
                <select name="row3_c2_4pe??as" type="text"class="form-control">
                <option class="dp_n" value="<?php echo $builds['row3_c2_4pe??as'];?>"><?php if(empty($builds['row3_c2_4pe??as'])){echo '4 pe??as';} else {echo $builds['row3_c2_4pe??as'];}?></option>
                    <?php
                        foreach($conjuntos as $conjunto) {
                            echo'<option value="'.$conjunto['4_pe??as'].'">'.ucfirst($conjunto['4_pe??as']).'</option>';
                        }
                    ?>
                </select>
            </div>
        </div>

    </div>
</div>

<div class="success"></div>
<div class="error"></div>
<div class="modal-footer">
    <button type="submit" class="au-btn au-btn-load js-load-btn"><i class="fas fa-save"></i>  Salvar Altera????es</button>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    //script tab builds edit
    $(document).ready(function(){ 
        $('.edit-a').click(function(){  
            $(".edit").removeClass('tab-active');
            $(".edit[data-id='"+$(this).attr('data-id')+"']").addClass("tab-active");
            $(".edit-a").removeClass('active-a');
            $(this).parent().find(".edit-a").addClass('active-a');
        });
    });
</script>
