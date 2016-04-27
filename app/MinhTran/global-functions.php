<?php
function getPermissionDefault($level) {
    $roles = array();

    $roles['T'] = array(
        'hhdv' => array(
            'index' => 1,
            'create' => 1,
            'edit' => 1,
            'delete' => 1
        ),
        'hhxnk' => array(
            'index' => 1,
            'create' => 1,
            'edit' => 1,
            'delete' => 1
        ),
        'tdgia' => array(
            'index' => 1,
            'create' => 1,
            'edit' => 1,
            'delete' => 1
        ),
        'tsnhadat' => array(
            'index' => 1,
            'create' => 1,
            'edit' => 1,
            'delete' => 1
        ),
        'tsotok' => array(
            'index' => 1,
            'create' => 1,
            'edit' => 1,
            'delete' => 1
        ),
        'congbogia' => array(
            'index' => 1,
            'create' => 1,
            'edit' => 1,
            'delete' => 1
        ),
        'vbpl' => array(
            'index' => 1,
            'create' => 1,
            'edit' => 1,
            'delete' => 1
        ),
        'dvlt' => array(
            'index' => 1,
            'create' => 1,
            'edit' => 1,
            'delete' => 1
        ),
        'cuocvt' => array(
            'index' => 1,
            'create' => 1,
            'edit' => 1,
            'delete' => 1
        ),
    );

    $roles['H'] = array(
        'hhdv' => array(
            'index' => 1,
            'create' => 1,
            'edit' => 1,
            'delete' => 1
        ),
        'hhxnk' => array(
            'index' => 1,
            'create' => 1,
            'edit' => 1,
            'delete' => 1
        ),
        'tdgia' => array(
            'index' => 1,
            'create' => 1,
            'edit' => 1,
            'delete' => 1
        ),
        'tsnhadat' => array(
            'index' => 1,
            'create' => 1,
            'edit' => 1,
            'delete' => 1
        ),
        'tsotok' => array(
            'index' => 1,
            'create' => 1,
            'edit' => 1,
            'delete' => 1
        ),
        'congbogia' => array(
            'index' => 1,
            'create' => 1,
            'edit' => 1,
            'delete' => 1
        ),
        'vbpl' => array(
            'index' => 1,
            'create' => 1,
            'edit' => 1,
            'delete' => 1
        ),
        'dvlt' => array(
            'index' => 1,
            'create' => 1,
            'edit' => 1,
            'delete' => 1
        ),
        'cuocvt' => array(
            'index' => 1,
            'create' => 1,
            'edit' => 1,
            'delete' => 1
        ),
    );
    $roles['X'] = array(
        'hhdv' => array(
            'index' => 1,
            'create' => 0,
            'edit' => 0,
            'delete' => 0
        ),
        'hhxnk' => array(
            'index' => 1,
            'create' => 0,
            'edit' => 0,
            'delete' => 0
        ),
        'tdgia' => array(
            'index' => 1,
            'create' => 0,
            'edit' => 0,
            'delete' => 0
        ),
        'tsnhadat' => array(
            'index' => 1,
            'create' => 0,
            'edit' => 0,
            'delete' => 0
        ),
        'tsotok' => array(
            'index' => 1,
            'create' => 0,
            'edit' => 0,
            'delete' => 0
        ),
        'congbogia' => array(
            'index' => 1,
            'create' => 0,
            'edit' => 0,
            'delete' => 0
        ),
        'vbpl' => array(
            'index' => 1,
            'create' => 0,
            'edit' => 0,
            'delete' => 0
        ),
        'dvlt' => array(
            'index' => 1,
            'create' => 0,
            'edit' => 0,
            'delete' => 0
        ),
        'cuocvt' => array(
            'index' => 1,
            'create' => 0,
            'edit' => 0,
            'delete' => 0
        ),
    );
    return json_encode($roles[$level]);
}

function getDayVn($date) {
    if($date != null)
        $newday = date('d/m/Y',strtotime($date));
    else
        $newday='';
    return $newday;
}

function can($module = null, $action = null)
{
    $permission = !empty(session('admin')->permission) ? session('admin')->permission : getPermissionDefault(session('admin')->level);
    $permission = json_decode($permission, true);

    //check permission
    if(isset($permission[$module][$action]) && $permission[$module][$action] == 1) {
        return true;
    }else
        return false;

}

function getGeneralConfigs() {
    return \App\GeneralConfigs::all()->first()->toArray();
}

function getDouble($str)
{
    $sKQ = 0;
    $str = str_replace(',','',$str);
    $str = str_replace('.','',$str);
    //if (is_double($str))
        $sKQ = $str;
    return floatval($sKQ);
}

function getShowMenu($madv) {
    $roles = array();

    $roles['LIFE'] = array(
        'hhdv' => array(
            'show' => 1
        ),
        'hhxnk' => array(
            'show' => 1
        ),
        'tdgia' => array(
            'show' => 1
        ),
        'tsnhadat' => array(
            'show' => 1
        ),
        'tsotok' => array(
            'show' => 1
        ),
        'congbogia' => array(
            'show' => 1
        ),
        'vbpl' => array(
            'show' => 1
        ),
        'dvlt' => array(
            'show' => 1
        ),
        'cuocvt' => array(
            'show' => 1
        ),
    );
    $roles['LAOCAI'] = array(
        'hhdv' => array(
            'show' => 0
        ),
        'hhxnk' => array(
            'show' => 0
        ),
        'tdgia' => array(
            'show' => 1
        ),
        'tsnhadat' => array(
            'show' => 0
        ),
        'tsotok' => array(
            'show' => 0
        ),
        'congbogia' => array(
            'show' => 1
        ),
        'vbpl' => array(
            'show' => 1
        ),
        'dvlt' => array(
            'show' => 0
        ),
        'cuocvt' => array(
            'show' => 0
        ),
    );

    $roles['NHATRANG'] = array(
        'hhdv' => array(
            'show' => 0
        ),
        'hhxnk' => array(
            'show' => 0
        ),
        'tdgia' => array(
            'show' => 0
        ),
        'tsnhadat' => array(
            'show' => 0
        ),
        'tsotok' => array(
            'show' => 0
        ),
        'congbogia' => array(
            'show' => 0
        ),
        'vbpl' => array(
            'show' => 0
        ),
        'dvlt' => array(
            'show' => 1
        ),
        'cuocvt' => array(
            'show' => 1
        ),
    );
    return json_encode($roles[$madv]);
}

function canshow($module = null, $action = null)
{
    $permission = getShowMenu(getGeneralConfigs()['madv']);
    $permission = json_decode($permission, true);

    //check permission
    if(isset($permission[$module][$action]) && $permission[$module][$action] == 1) {
        return true;
    }else
        return false;

}

?>