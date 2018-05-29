<h3>Trainer Evaluation Form</h3>

<form method="post" action="index.php?r=srv/pub/save">
    <?php main($qinfo) ?>
    <input type="submit" class="btn btn-primary" value="Submit">
</form>

<?php

function main($qinfo) {
    foreach ($qinfo as $i) {
        if ($i->qcat == 'grp') {
            echo $i->txt . '<br>';
            echo groupQuestion($i->iid);
        } else {
            echo singleQuestion($i->iid, $i->qcat);
        }
        echo '<hr>';
    }
}

function singleQuestion($iid, $qcat) {
    $str = '';
    $question = SrvQuestion::model()->findAll("iid=$iid");
    foreach ($question as $q) {
        $str .= "$q->qtitle";
        if ($qcat == 'opn') {
            $str .= "<input type='hidden' name='qid[]' value='$q->qid'>";
            $str .= "<br><textarea name='$q->qid' rows='4' cols='60'></textarea>";
        }
    }
    return $str;
}

function groupQuestion($iid) {
    $str = "<table class='table table-bordered' style='width:600px'>" .
            "<tr><td>&nbsp;</td>";
    $str .= groupOpt($iid);
    $str .= "</tr>";
    $question = SrvQuestion::model()->findAll("iid=$iid");
    foreach ($question as $q) {
        $str .= "<tr>";
        $str .= "<td>$q->qtitle <input type='hidden' name='qid[]' value='$q->qid'></td>";
        $str .= groupAnswer('rd', $q->iid, $q->qid);
        $str .= "</tr>";
    }
    $str .= "</table>";
    return $str;
}

function groupOpt($iid) {
    $opt = SrvOptions::model()->findAll("iid=$iid");
    $str = '';
    foreach ($opt as $o) {
        $str .= "<td>$o->otitle</td>";
    }
    return $str;
}

function groupAnswer($type, $iid, $name) {
    $str = '';
    $opt = SrvOptions::model()->findAll("iid=$iid");
    foreach ($opt as $o) {
        if ($type == 'rd') {
            $str .= "<td><input type='radio' name='$name' value='$o->oid'></td>";
        }
    }
    return $str;
}
