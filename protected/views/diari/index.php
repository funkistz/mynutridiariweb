<legend>Diari Data</legend>

<div class="col-md-8">
    <div class="panel panel-default ">
        <div class="panel-heading">
            <h3 class="panel-title">User Info</h3>
        </div>
        <div class="panel-body">
            <table style="width: 100%">
                <tr>
                    <td width='25%'><b>Email / User Name</b></td>
                    <td>: <?php echo $user->username ?></td>
                    <td width='15%'><b>Full Name</b></td>
                    <td>: <?php echo $user->user_fullname ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div style="clear: both"></div>

<div class="panel panel-primary ">
    <div class="panel-heading">
        <h3 class="panel-title">Calorie Consumption (kcal)</h3>
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-striped">
            <tr class="success" align='center'>
                <td>#</td>
                <td>Date</td>
                <td>Recommend</td>
                <td>Consumption</td>
                <td>Net Amount</td>
                <td>Calorie Burn</td>
                <td>Water Consume (glass)</td>
            </tr>
            <?php
            $i = 1;
            foreach ($diari1 as $d) :
                ?>
                <tr align='center'>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $d->diaridate ?></td>
                    <td><?php echo $d->info1 ?></td>
                    <td><?php echo $d->info2 ?></td>
                    <td><?php echo $d->info3 ?></td>
                    <td><?php echo $d->info4 ?></td>
                    <td><?php echo $d->info5 ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
</div>

<div class="panel panel-primary ">
    <div class="panel-heading">
        <h3 class="panel-title">Weight (kg)</h3>
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-striped">
            <tr class="success" align='center'>
                <td>#</td>
                <td>Date</td>
                <td>Current Weight</td>
                <td>Daily Weight</td>
                <td>BMI</td>
            </tr>
            <?php
            $i = 1;
            foreach ($diari2 as $d) :
                ?>
                <tr align='center'>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $d->diaridate ?></td>
                    <td><?php echo $d->info1 ?></td>
                    <td><?php echo $d->info2 ?></td>
                    <td><?php echo $d->info3 ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
</div>