<?php
/* @var $this ReportController */
/* @var $model TActivityPlan */
?>

<table id="report">
    <tr>
        <td colspan="<?php echo $model->working_duration + 1; ?>"><?php echo $model->marketing_item; ?></td>
    </tr>
    <tr>
        <?php
        //     print_r($year);
        //print_r($month);
        // print_r($day);
        //echo ($m);
        foreach ($year as $y):
            ?>
            <td colspan="<?php echo $model->working_duration + 1; ?>">
                <?php echo $y['y']; ?>    
            </td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php
        $i = 0;
        foreach ($month as $m):
            ?>
            <td colspan="<?php echo $day[$i]["colspan"]; ?>">
                <?php
                echo $m;
                $i++;
                ?>    
            </td>
        <?php endforeach; ?>

    </tr>
    <tr>
        <?php
        foreach ($day as $d):
            foreach ($d["date"] as $date):
                ?>
                <td>
                    <?php echo $date; ?>    
                </td>
                <?php
            endforeach;
        endforeach;
        ?>

    </tr>
    <tr>
        <?php
        for ($i = 0; $i <= $model->working_duration; $i++):
            ?>
            <td style="">
                &nbsp;
            </td>
        <?php endfor; ?>
    </tr>
</table>

<style>
    table#report{
        width: 100%;
        height: 100%;
    }
    table#report tbody tr td {
        text-align: center;
        vertical-align: middle;
        border: thin solid black;
    }



</style>