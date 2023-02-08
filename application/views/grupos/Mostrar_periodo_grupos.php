<br><h2 class="text-center">
    <?php echo "FORMATO DE NÚMERO DE GRUPOS"; ?>
</h2>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover dataTables-example dataTable" >
        <tbody>
            <?php foreach($total as $key => $list) { ?>
                <tr>
                    <td class="text-center" colspan="5"><b><?php echo $list['GRSemestre']; ?>° SEMESTRE</b></td> 
                </tr>
                <tr>
                <table style="width:100%;" class="table table-striped table-bordered table-hover dataTables-example dataTable" >
                <thead>
                    <tr>
                        <th colspan="5" class="text-center">MATUTINO</th>
                    </tr>
                    <tr>
                        <th>GRUPO</th>
                        <th>HOMBRES</th>
                        <th>MUJERES</th>
                        <th>TOTAL</th>
                        <th>FORMACIÓN PARA EL TRABAJO</th>                        
                    </tr>
                </thead>
                    <?php
                        $Totalgm1=0;
                        $Totalhm1=0;
                        $Totalmm1=0;
                        $Totaltm1=0;

                        for ($m=0; $m < count($list['gruposMat']); $m++) { 
                            $Totalgm1=$Totalgm1+1;
                            
                            ?>
                        <tr>
                            <td class="text-center"><?= $list['gruposMat'][$m]['GRGrupo']; ?></td>
                            <td class="text-center"><?= $list['gruposMat'][$m]['GRMasculino']; $Totalhm1=$Totalhm1 + $list['gruposMat'][$m]['GRMasculino'];?></td>
                            <td class="text-center"><?= $list['gruposMat'][$m]['GRFemenino']; $Totalmm1=$Totalmm1 + $list['gruposMat'][$m]['GRFemenino'];?></td>
                            <td class="text-center"><?= $list['gruposMat'][$m]['GRCupo']; $Totaltm1= $Totaltm1 + $list['gruposMat'][$m]['GRCupo']; ?></td>
                            <td class="text-center">
                                <?php if ($list['gruposMat'][$m]['FNombre'] == '') {
                                    echo '- - -';
                                } else {
                                    echo $list['gruposMat'][$m]['FNombre'];
                                }?>                                
                            </td>   
                        </tr>
                         
                        

                    <?php } ?>

                    <tr>
                            <td class="text-center"><b><?= $Totalgm1;?></b></td>
                            <td class="text-center"><b><?= $Totalhm1;?></b></td>
                            <td class="text-center"><b><?= $Totalmm1;?></b></td>
                            <td class="text-center"><b><?= $Totaltm1; ?></b></td>
                            <td class="text-center">- - -</td>   
                        </tr>

                    </table>
                    <table style="width:100%;" class="table table-striped table-bordered table-hover dataTables-example dataTable" >
                    <thead>
                    <tr>
                        <th colspan="5" class="text-center">VESPERTINO</th>
                    </tr>
                    <tr>
                        <th>GRUPO</th>
                        <th>HOMBRES</th>
                        <th>MUJERES</th>
                        <th>TOTAL</th>
                        <th>FORMACIÓN PARA EL TRABAJO</th>                        
                    </tr>
                </thead>
                    <?php 
                     $Totalgm2=0;
                     $Totalhm2=0;
                     $Totalmm2=0;
                     $Totaltm2=0;
                    
                    for ($v=0; $v < count($list['gruposVes']); $v++) { 
                        $Totalgm2=$Totalgm2+1;
                        ?>
                     
                        <tr>    
                            <td class="text-center"><?= $list['gruposVes'][$v]['GRGrupo']; ?></td>
                            <td class="text-center"><?= $list['gruposVes'][$v]['GRMasculino']; $Totalhm2=$Totalhm2 + $list['gruposVes'][$v]['GRMasculino'];?></td>
                            <td class="text-center"><?= $list['gruposVes'][$v]['GRFemenino']; $Totalmm2=$Totalmm2 + $list['gruposVes'][$v]['GRFemenino'];?></td>
                            <td class="text-center"><?= $list['gruposVes'][$v]['GRCupo']; $Totaltm2= $Totaltm2 + $list['gruposVes'][$v]['GRCupo']; ?></td>
                            <td class="text-center">
                            <?php if ($list['gruposVes'][$v]['FNombre'] == '') {
                                    echo '- - -';
                                } else {
                                    echo $list['gruposVes'][$v]['FNombre'];
                                }?>              
                        </td>
                        </tr>
                    <?php } ?>
                   
                    <tr>
                            <td class="text-center"><b><?= $Totalgm2;?></b></td>
                            <td class="text-center"><b><?= $Totalhm2;?></b></td>
                            <td class="text-center"><b><?= $Totalmm2;?></b></td>
                            <td class="text-center"><b><?= $Totaltm2; ?></b></td>
                            <td class="text-center">- - -</td>   
                        </tr>

                
                </table>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
