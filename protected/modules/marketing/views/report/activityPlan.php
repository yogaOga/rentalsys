<?php
/* @var $this ReportController */
/* @var $model TActivityPlan[] */

$this->breadcrumbs = array(
    'Activity Plan Report' => array('index'),
    'Report',
);

$this->menu = array(
    array('label' => 'Activity Plan Report', 'url' => array('activityPlan')),
);
?>


<div class="bloc">
    <div class="title">Activity Plan Report </div> 
    <div class="content">   

        <table class="border" > 
            <thead>
                <tr>
                    <th>No</th>
                    <th>
                        Marketing Items
                    </th>
                    <th>
                        Start Date
                    </th>
                    <th>
                        End Date
                    </th>
                    <th>
                        Durasi
                    </th>
                    <th>
                        Skala Prioritas
                    </th>
                    <th>
                        Est Hasil
                    </th>
                    <th>
                        Result Final
                    </th>   
                    <th>
                        Note Manager
                    </th>
                    <th>

                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                foreach ($model as $value):
                    ?>
                    <tr>
                        <td>
                            <?php echo++$no; ?>
                        </td>
                        <td>
                            <?php echo $value->marketing_item ?>
                        </td>
                        <td>
                            <?php echo $value->start_date ?>
                        </td>
                        <td>
                            <?php echo $value->end_date ?>
                        </td>
                        <td>
                            <?php echo $value->working_duration ?>
                        </td>
                        <td>
                            <?php echo $value->scaleOfPriority->scale_of_priority ?>
                        </td>
                        <td>
                            <?php echo $value->estimation_of_result ?>
                        </td>
                        <td>
                            <?php echo $value->finalResult->final_result ?>
                        </td>
                        <td>
                            <?php echo $value->note_of_manager ?>
                        </td>
                        <td>
                            <a href="#" value=" <?php echo $value->id ?>" class="button">Detail Duration</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
    </div>
</div>
</div>
<div id="lookup">
</div>
<script>
    $('#lookup').dialog({
        title: "Detail Duration of Activity Plan",
        resizable: true,
        autoOpen: false,
        modal: true,
        hide: 'fade',
        width: 550,
        autoheight: true,
        buttons: {
            "Cancel": function() {
                $(this).dialog("close");
            }
        }
    });
    $("a.button").bind("click", function() {
  
        $("#lookup").load("<?php echo $this->createAbsoluteUrl("report/durationActivityPlanDetail") ?>&id=" + $(this).attr("value").trim()).dialog("open");
    });
</script>